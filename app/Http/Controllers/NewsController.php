<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\News;
use App\Models\NewsComment;
use Illuminate\Http\Request;
use PhpParser\Node\Stmt\Return_;

class NewsController extends Controller
{
    public function index(Request $request,$cat_id = null)
    {
        $selectedTitle =  $request->title ?? '';
        $news = News::when($cat_id,function($q,$cat_id){
            $q->where('category_id',$cat_id);
        })
        ->when($selectedTitle,function($q,$selectedTitle){
            $q->where('title','like','%'.$selectedTitle.'%');
        })
        ->take(10)
        ->get();

        return view('news.index',compact('news','selectedTitle'));
    }


    public function show(News $news)
    {
        return view('news.show',compact('news'));
    }


    public function predict(Request $request)
    {
        $data = array(
            'news_content' => $request->text,
        );
        $curl = curl_init('http://127.0.0.1:5050/lstm-predict');
        curl_setopt($curl, CURLOPT_POST, true);
        curl_setopt($curl, CURLOPT_POSTFIELDS, $data);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
    
        $response = curl_exec($curl);
    
        if (curl_errno($curl)) {
            $error_message = curl_error($curl);
            // Handle the error appropriately
        }
    
        curl_close($curl);
        $data = json_decode($response, true);


        $data['news'] = $request->text;
        $data['percentage'] = $data['result'] * 100;

        $data['result'] = $data['text_result'];
        $data['articles'] = $this->headlines($request->text);
        return view('prediction',compact('data'));    
    }

    public function feedback(Request $request)
    {
        NewsComment::create([
            'news' => $request->news,
            'comment' => $request->feedback,
            'user_id' => auth()->user()->id,
        ]);
        return 'ok';
    }

    public function headlines($news)
    {
        $apiKey = 'AIzaSyC-psdjVjoRCUGVsUFt2zLqmOaPFqSzpMI';
        $endpoint = 'https://www.googleapis.com/customsearch/v1';
        $q = urlencode($news);
        
        $searchEngineId = 'c5fe94dcc8fcd4414';
        
        $url = $endpoint . '?' . http_build_query([
            'q' => $q,
            'cx' => $searchEngineId,
            'key' => $apiKey,
        ]);
        
        $curl = curl_init();
        curl_setopt_array($curl, [
            CURLOPT_URL => $url,
            CURLOPT_RETURNTRANSFER => true,
        ]);
        
        $response = curl_exec($curl);
        curl_close($curl);
        
        $data = json_decode($response, true);
        
        return $data['items'];
    }
}
