<div class="nav-bar" style="background: #343a40;">
    <div class="container">
        <nav class="navbar navbar-expand-md bg-dark navbar-dark">
            <a href="#" class="navbar-brand">MENU</a>
            <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse justify-content-between align-items-center" id="navbarCollapse">
                <div class="navbar-nav">
                    
                    <a href="/" class="nav-item">
                        <img src="{{URL::asset('assets/img/logo.png')}}" style="width:60px" alt="Logo">
                    </a>
                    <a href="/" class="nav-item active">Home</a>
                    <a href="/news-search" class="nav-item">News</a>
                    <a href="/prediction" class="nav-item">prediction</a>
                </div>

                <div class="navbar-nav" style="width: 17%;">
                        @if(!Auth::check())
                            <a href="/login" class="btn rounded m-2" style="    
                                background-color: orange;
                                color: white;
                                border: none;
                                width: 50%;">Login
                            </a>
                            <a href="/register" class="btn rounded m-2" style="    
                                background-color: #fa6d6b;
                                color: white;
                                width: 70%;
                                border: none;
                                ">sign up
                            </a>
                        @else
                            <a 
                            onclick="event.preventDefault();document.getElementById('logout-form').submit();"
                            class="btn rounded m-2" 
                            style="    
                                background-color: #fa6d6b;
                                color: white;
                                width: 70%;
                                border: none;
                                ">log out 
                            </a>
                        @endif
                </div>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
            </div>
        </nav>
    </div>
</div>