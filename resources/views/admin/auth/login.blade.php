
@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
<link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
@endsection

@section('title')
admin login
@stop

@section('content')
    <!-- Session Status -->
    <div class="min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0 bg-gray-100">
        <div class="p-5 col-8 offset-2">
            <form method="POST" action="{{ route('login') }}">
                @csrf
                <h1 class="text-center">Admin Login</h1>
                <!-- Email Address -->
                <div class="form-group">
                    <label for="email">email</label>
                    <input id="email" class="form-control" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
                    <x-input-error :messages="$errors->get('email')" class="mt-2" />
                </div>
        
                <!-- Password -->
                <div class="mt-4">
                    <label for="password">password</label>
        
                    <input id="password" class="form-control" 
                                    type="password"
                                    name="password"
                                    required autocomplete="current-password" />
        
                    <x-input-error :messages="$errors->get('password')" class="mt-2" />
                </div>
        

        
                <div class="flex items-center justify-end mt-4">
                    <button class="ml-3 btn">
                        {{ __('Log in') }}
                    </button>
                </div>
            </form>
        </div>
    </div>


@endsection

@section('js')
@endsection