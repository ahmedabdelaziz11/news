<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
    public function index()
    {
        $users = User::where('role','admin')->get();
        return view('admin.admin.index',compact('users'));
    }

    public function create()
    {
        return view('admin.admin.create');
    }

    public function store(Request $request)
    {
        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'role' => 'admin',
            'password' => Hash::make($request->password),
        ]);
        return redirect('admin/admins');
    }

    public function edit($id)
    {
        $user = User::find($id);
        return view('admin.admin.edit',compact('user'));
    }

    public function update(Request $request)
    {
        $user = User::find($request->id);
        $user->update([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);
        return redirect("/admin/admins/$user->id/edit");
    }

    public function destroy(Request $request)
    {
        $user = User::find($request->id);
        $user->delete();
        return redirect('admin/admins');
    }
}
