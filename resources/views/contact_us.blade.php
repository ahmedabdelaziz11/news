@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{asset('assets/fontawesome/css/all.min.css')}}">
<link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
<link rel="stylesheet" href="https://unpkg.com/tailwindcss@2.2.16/dist/tailwind.min.css" />
<link href="https://fonts.googleapis.com/css?family=Montserrat:400,600&display=swap" rel="stylesheet"> 
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Montserrat:400,600&display=swap" rel="stylesheet">
<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">
<style>
    body {
        font-family: Arial, sans-serif;
        font-size: 16px;
        line-height: 1.5;
    }

    .card {
        border: 1px solid #ccc;
        border-radius: 5px;
        padding: 20px;
        margin-bottom: 20px;
    }

    h1 {
        font-size: 24px;
        font-weight: bold;
        margin-top: 0;
    }

    p {
        margin-bottom: 10px;
    }

    .contact-info {
        margin-top: 20px;
    }
</style>
@endsection

@section('title')
contact us
@stop

@section('content')
@if(session('success'))
    <div class="alert alert-success alert-dismissible fade show m-4" role="alert">
        {{ session('success') }}
        <button type="button" style="float: right" class="btn-close" data-bs-dismiss="alert" aria-label="Close"><i class="fa-solid fa-rectangle-xmark" style="color: #18ec82;"></i></button>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var alertCloseButton = document.querySelector('.alert button[data-bs-dismiss="alert"]');
            alertCloseButton.addEventListener('click', function() {
                var alertContainer = alertCloseButton.closest('.alert');
                alertContainer.style.display = 'none';
            });
        });
    </script>
@endif
<div class="card m-4">
    <h1>Contact Us</h1>

    <p>To get in touch with us, please complete the contact form below. Provide your name, email address, subject of inquiry, and your message. We will review your submission and respond as soon as possible.</p>

    <div class="contact-form">    
        <div class="card-body">
            <form action="{{ route('contact-us.store') }}" method="POST">
                @csrf
                <div class="mb-3">
                    <label for="name" class="form-label">Name</label>
                    <input type="text" class="form-control" name="name" placeholder="Enter your name">
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Email address</label>
                    <input type="email" class="form-control" name="email" placeholder="Enter your email address">
                </div>
                <div class="mb-3">
                    <label for="subject" class="form-label">Subject</label>
                    <input type="text" class="form-control" name="subject" placeholder="Enter the subject of your inquiry">
                </div>
                <div class="mb-3">
                    <label for="message" class="form-label">Message</label>
                    <textarea class="form-control" name="message" rows="5" placeholder="Enter your message"></textarea>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
</div>

<div class="card contact-info m-4">
    <h2>Contact Information</h2>

    <p>Email:<br>
    If you prefer to communicate via email, you can send your inquiries or reports to <a href="mailto:info@example.com">info@example.com</a>. We will make sure to address your message promptly.</p>

    <p>Phone:<br>
    For urgent matters or if you would like to discuss something over the phone, you can reach our support team at <a href="tel:+1-XXX-XXX-XXXX">+1-XXX-XXX-XXXX</a> during our office hours. Our dedicated staff will be happy to assist you.</p>

    <p>We encourage you to use these channels to report any suspicious news articles or sources that you come across. Your contributions are crucial in our collective effort to combat the spread of fake news and promote accurate information.</p>

    <p>We are committed to maintaining an open line of communication with our users and appreciate your engagement in this important cause. Rest assured that all inquiries and reports will be handled with utmost care and confidentiality.</p>

    <p>Thank you for your cooperation and dedication to the fight against fake news.</p>
</div>
@endsection

@section('js')

@endsection