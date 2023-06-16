@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
<link rel="stylesheet" href="https://unpkg.com/tailwindcss@2.2.16/dist/tailwind.min.css" />
<link href="https://fonts.googleapis.com/css?family=Montserrat:400,600&display=swap" rel="stylesheet"> 
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Montserrat:400,600&display=swap" rel="stylesheet">
<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">
@endsection

@section('title')
Dashboard
@stop

@section('content')
<div class="bg-white p-4">
    <nav class="bg-white p-6 flex justify-between items-center">
        <div class="flex items-center flex-shrink-0 text-gray-900 mr-6">
        </div>
    </nav>
    <form action="/make-predictions" method="post">
        @csrf 
    <div class="w-full">
        <h1 class="text-3xl text-center font-bold mb-4">Check if news is real or fake!</h1>
        <div class="flex flex-col items-center">
                <div class="flex flex-wrap mx-3 mb-6"  style="width: 100%;">
                    <div class="w-full">
                        <textarea  class="bg-gray-200 appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded-lg py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                            rows="5" id="news" name="text" placeholder="Enter the news here..." required >{{$data['news'] ?? ''}}</textarea>
                    </div>
                </div>
                <div class="text-center">
                    <button id="submitBtn" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-full" type="submit"
                        name="predict">Predict</button>
                </div>
            </form>
        </div>
        @if (isset($data))
            <meta name="csrf-token" content="{{ csrf_token() }}">
            <div>
                <div class="mt-12">
                    <p class="text-2xl font-bold text-center">Result is {{$data['result']??''}}</p>
                    <div class="progress">
                        <div class="progress-bar" role="progressbar" style="width: {{$data['percentage']??''}}%" aria-valuenow="{{$data['percentage']??''}}" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                    <p class="text-xl text-center mt-4">The news is <span>probability</span>  {{$data['percentage']??''}}%</p>
                </div>
            </div>
            
            <p class="text-xl text-center mt-4"> (Give us some feedback if we predicted it wrong :)</p>

            <div class="flex justify-center mt-6">
                <button class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded-full mr-4 feedback" type="button">Real</button>
                <button class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded-full feedback" type="button">Fake</button>
            </div>
            <p class="text-xl text-center mt-4" id="feedbackSuccess" style="display: none"> your feedback is submitted successfully </p>

        @endif
        
    </div>
</div>
@endsection

@section('js')
<script>
$(document).ready(function() {
    $('.feedback').click(function() {
        var news = $('#news').val();
        var csrfToken = $('meta[name="csrf-token"]').attr('content');
        var feedback = $(this).text();
        console.log(news);
        var inputData = {
            news: news,
            feedback: feedback,
        };
        $.ajax({
            url: 'feedback',
            type: 'POST',
            headers: {
                'X-CSRF-TOKEN': csrfToken
            },
            data: inputData,
            success: function(response) {
                console.log(response);
                $('#feedbackSuccess').css('display', 'block');
            }
        });
    });
});
</script>
@endsection