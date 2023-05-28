<div class="top-bar">
            
</div>
<div class="brand">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-3 col-md-4">
                <div class="b-logo">
                    <a href="/">
                        <img src="{{URL::asset('assets/img/logo.png')}}" alt="Logo">
                    </a>
                </div>
            </div>
            <div class="col-lg-6 col-md-4">
                <div class="b-ads">
                    <h1>News SpotLight</h1>
                </div>
            </div>
            <div class="col-lg-3 col-md-4">
                @if (!Auth::check())
                    
                @endif
                    <a href="/login" class="btn rounded" style="    
                        background-color: orange;
                        color: white;
                        border: none;
                        width: 30%;">Login
                    </a>
                    <a href="/register" class="btn rounded" style="    
                        background-color: #fa6d6b;
                        color: white;
                        border: none;
                        ">sign up
                    </a>
            </div>
        </div>
    </div>
</div>