@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
<link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
@endsection

@section('title')
Dashboard
@stop

@section('content')

       <div class="container">
           <aside>
               <button class="toggle">|||</button>
               <h1 style="margin:0; color:#ddd; padding:10px; border-bottom:1px solid #666">Menu</h1>
               <nav>
                   <a href="#">Home</a>
                   <a href="#">About Us</a>
                   <a href="#">Services</a>
                   <a href="#">Portfolio</a>
                   <a href="#">Contact Us</a>
               </nav>
           </aside>
       </div>
       <!-- end side bar -->
       <!-- Top News Start-->
       <div class="top-news">
           <div class="container">
               <div class="row">
                   <div class="col-md-6 tn-left">
                       <div class="row tn-slider">
                           <div class="col-md-6">
                               <div class="tn-img">
                                   <img src="img/news-450x350-1.jpg" />
                                   <div class="tn-title">
                                       <a href="">Lorem ipsum dolor sit amet</a>
                                   </div>
                               </div>
                           </div>
                           <div class="col-md-6">
                               <div class="tn-img">
                                   <img src="img/news-450x350-2.jpg" />
                                   <div class="tn-title">
                                       <a  href="">Integer hendrerit elit eget purus sodales maximus</a>
                                   </div>
                               </div>
                           </div>
                       </div>
                   </div>
                   <div class="col-md-6 tn-right">
                       <div class="row">
                           <div class="col-md-6">
                               <div class="tn-img">
                                   <img src="img/news-350x223-1.jpg" />
                                   <div class="tn-title">
                                       <a href="">Lorem ipsum dolor sit</a>
                                   </div>
                               </div>
                           </div>
                           <div class="col-md-6">
                               <div class="tn-img">
                                   <img src="img/news-350x223-2.jpg" />
                                   <div class="tn-title">
                                       <a href="">Lorem ipsum dolor sit</a>
                                   </div>
                               </div>
                           </div>
                           <div class="col-md-6">
                               <div class="tn-img">
                                   <img src="img/news-350x223-3.jpg" />
                                   <div class="tn-title">
                                       <a href="">Lorem ipsum dolor sit</a>
                                   </div>
                               </div>
                           </div>
                           <div class="col-md-6">
                               <div class="tn-img">
                                   <img src="img/news-350x223-4.jpg" />
                                   <div class="tn-title">
                                       <a href="">Lorem ipsum dolor sit</a>
                                   </div>
                               </div>
                           </div>
                       </div>
                   </div>
               </div>
           </div>
       </div>
       <!-- Top News End-->

       <!-- Category News Start-->
       <div class="cat-news">
           <div class="container">
               <div class="row">
                   <div class="col-md-6">
                       <h2>Sports</h2>
                       <div class="row cn-slider">
                           <div class="col-md-6">
                               <div class="cn-img">
                                   <img src="img/news-350x223-1.jpg" />
                                   <div class="cn-title">
                                       <a href="">Lorem ipsum dolor sit</a>
                                   </div>
                               </div>
                           </div>
                           <div class="col-md-6">
                               <div class="cn-img">
                                   <img src="img/news-350x223-2.jpg" />
                                   <div class="cn-title">
                                       <a href="">Lorem ipsum dolor sit</a>
                                   </div>
                               </div>
                           </div>
                           <div class="col-md-6">
                               <div class="cn-img">
                                   <img src="img/news-350x223-3.jpg" />
                                   <div class="cn-title">
                                       <a href="">Lorem ipsum dolor sit</a>
                                   </div>
                               </div>
                           </div>
                       </div>
                   </div>
                   <div class="col-md-6">
                       <h2>Technology</h2>
                       <div class="row cn-slider">
                           <div class="col-md-6">
                               <div class="cn-img">
                                   <img src="img/news-350x223-4.jpg" />
                                   <div class="cn-title">
                                       <a href="">Lorem ipsum dolor sit</a>
                                   </div>
                               </div>
                           </div>
                           <div class="col-md-6">
                               <div class="cn-img">
                                   <img src="img/news-350x223-5.jpg" />
                                   <div class="cn-title">
                                       <a href="">Lorem ipsum dolor sit</a>
                                   </div>
                               </div>
                           </div>
                           <div class="col-md-6">
                               <div class="cn-img">
                                   <img src="img/news-350x223-1.jpg" />
                                   <div class="cn-title">
                                       <a href="">Lorem ipsum dolor sit</a>
                                   </div>
                               </div>
                           </div>
                       </div>
                   </div>
               </div>
           </div>
       </div>
       <!-- Category News End-->

       <!-- Category News Start-->
       <div class="cat-news">
           <div class="container">
               <div class="row">
                   <div class="col-md-6">
                       <h2>Business</h2>
                       <div class="row cn-slider">
                           <div class="col-md-6">
                               <div class="cn-img">
                                   <img src="img/news-350x223-5.jpg" />
                                   <div class="cn-title">
                                       <a href="">Lorem ipsum dolor sit</a>
                                   </div>
                               </div>
                           </div>
                           <div class="col-md-6">
                               <div class="cn-img">
                                   <img src="img/news-350x223-4.jpg" />
                                   <div class="cn-title">
                                       <a href="">Lorem ipsum dolor sit</a>
                                   </div>
                               </div>
                           </div>
                           <div class="col-md-6">
                               <div class="cn-img">
                                   <img src="img/news-350x223-3.jpg" />
                                   <div class="cn-title">
                                       <a href="">Lorem ipsum dolor sit</a>
                                   </div>
                               </div>
                           </div>
                       </div>
                   </div>
                   <div class="col-md-6">
                       <h2>Entertainment</h2>
                       <div class="row cn-slider">
                           <div class="col-md-6">
                               <div class="cn-img">
                                   <img src="img/news-350x223-2.jpg" />
                                   <div class="cn-title">
                                       <a href="">Lorem ipsum dolor sit</a>
                                   </div>
                               </div>
                           </div>
                           <div class="col-md-6">
                               <div class="cn-img">
                                   <img src="img/news-350x223-1.jpg" />
                                   <div class="cn-title">
                                       <a href="">Lorem ipsum dolor sit</a>
                                   </div>
                               </div>
                           </div>
                           <div class="col-md-6">
                               <div class="cn-img">
                                   <img src="img/news-350x223-3.jpg" />
                                   <div class="cn-title">
                                       <a href="">Lorem ipsum dolor sit</a>
                                   </div>
                               </div>
                           </div>
                       </div>
                   </div>
               </div>
           </div>
       </div>
       <!-- Category News End-->
       
       <!-- Tab News Start-->
       <div class="tab-news">
           <div class="container">
               <div class="row">
                   <div class="col-md-6">
                       <ul class="nav nav-pills nav-justified">
                           <li class="nav-item">
                               <a class="nav-link active" data-toggle="pill" href="#featured">Featured News</a>
                           </li>
                           <li class="nav-item">
                               <a class="nav-link" data-toggle="pill" href="#popular">Popular News</a>
                           </li>
                           <li class="nav-item">
                               <a class="nav-link" data-toggle="pill" href="#latest">Latest News</a>
                           </li>
                       </ul>

                       <div class="tab-content">
                           <div id="featured" class="container tab-pane active">
                               <div class="tn-news">
                                   <div class="tn-img">
                                       <img src="img/news-350x223-1.jpg" />
                                   </div>
                                   <div class="tn-title">
                                       <a href="">Lorem ipsum dolor sit amet</a>
                                   </div>
                               </div>
                               <div class="tn-news">
                                   <div class="tn-img">
                                       <img src="img/news-350x223-2.jpg" />
                                   </div>
                                   <div class="tn-title">
                                       <a href="">Lorem ipsum dolor sit amet</a>
                                   </div>
                               </div>
                               <div class="tn-news">
                                   <div class="tn-img">
                                       <img src="img/news-350x223-3.jpg" />
                                   </div>
                                   <div class="tn-title">
                                       <a href="">Lorem ipsum dolor sit amet</a>
                                   </div>
                               </div>
                           </div>
                           <div id="popular" class="container tab-pane fade">
                               <div class="tn-news">
                                   <div class="tn-img">
                                       <img src="img/news-350x223-4.jpg" />
                                   </div>
                                   <div class="tn-title">
                                       <a href="">Lorem ipsum dolor sit amet</a>
                                   </div>
                               </div>
                               <div class="tn-news">
                                   <div class="tn-img">
                                       <img src="img/news-350x223-5.jpg" />
                                   </div>
                                   <div class="tn-title">
                                       <a href="">Lorem ipsum dolor sit amet</a>
                                   </div>
                               </div>
                               <div class="tn-news">
                                   <div class="tn-img">
                                       <img src="img/news-350x223-1.jpg" />
                                   </div>
                                   <div class="tn-title">
                                       <a href="">Lorem ipsum dolor sit amet</a>
                                   </div>
                               </div>
                           </div>
                           <div id="latest" class="container tab-pane fade">
                               <div class="tn-news">
                                   <div class="tn-img">
                                       <img src="img/news-350x223-2.jpg" />
                                   </div>
                                   <div class="tn-title">
                                       <a href="">Lorem ipsum dolor sit amet</a>
                                   </div>
                               </div>
                               <div class="tn-news">
                                   <div class="tn-img">
                                       <img src="img/news-350x223-3.jpg" />
                                   </div>
                                   <div class="tn-title">
                                       <a href="">Lorem ipsum dolor sit amet</a>
                                   </div>
                               </div>
                               <div class="tn-news">
                                   <div class="tn-img">
                                       <img src="img/news-350x223-4.jpg" />
                                   </div>
                                   <div class="tn-title">
                                       <a href="">Lorem ipsum dolor sit amet</a>
                                   </div>
                               </div>
                           </div>
                       </div>
                   </div>
                   
                   <div class="col-md-6">
                       <ul class="nav nav-pills nav-justified">
                           <li class="nav-item">
                               <a class="nav-link active" data-toggle="pill" href="#m-viewed">Most Viewed</a>
                           </li>
                           <li class="nav-item">
                               <a class="nav-link" data-toggle="pill" href="#m-read">Most Read</a>
                           </li>
                           <li class="nav-item">
                               <a class="nav-link" data-toggle="pill" href="#m-recent">Most Recent</a>
                           </li>
                       </ul>

                       <div class="tab-content">
                           <div id="m-viewed" class="container tab-pane active">
                               <div class="tn-news">
                                   <div class="tn-img">
                                       <img src="img/news-350x223-5.jpg" />
                                   </div>
                                   <div class="tn-title">
                                       <a href="">Lorem ipsum dolor sit amet</a>
                                   </div>
                               </div>
                               <div class="tn-news">
                                   <div class="tn-img">
                                       <img src="img/news-350x223-4.jpg" />
                                   </div>
                                   <div class="tn-title">
                                       <a href="">Lorem ipsum dolor sit amet</a>
                                   </div>
                               </div>
                               <div class="tn-news">
                                   <div class="tn-img">
                                       <img src="img/news-350x223-3.jpg" />
                                   </div>
                                   <div class="tn-title">
                                       <a href="">Lorem ipsum dolor sit amet</a>
                                   </div>
                               </div>
                           </div>
                           <div id="m-read" class="container tab-pane fade">
                               <div class="tn-news">
                                   <div class="tn-img">
                                       <img src="img/news-350x223-2.jpg" />
                                   </div>
                                   <div class="tn-title">
                                       <a href="">Lorem ipsum dolor sit amet</a>
                                   </div>
                               </div>
                               <div class="tn-news">
                                   <div class="tn-img">
                                       <img src="img/news-350x223-1.jpg" />
                                   </div>
                                   <div class="tn-title">
                                       <a href="">Lorem ipsum dolor sit amet</a>
                                   </div>
                               </div>
                               <div class="tn-news">
                                   <div class="tn-img">
                                       <img src="img/news-350x223-3.jpg" />
                                   </div>
                                   <div class="tn-title">
                                       <a href="">Lorem ipsum dolor sit amet</a>
                                   </div>
                               </div>
                           </div>
                           <div id="m-recent" class="container tab-pane fade">
                               <div class="tn-news">
                                   <div class="tn-img">
                                       <img src="img/news-350x223-4.jpg" />
                                   </div>
                                   <div class="tn-title">
                                       <a href="">Lorem ipsum dolor sit amet</a>
                                   </div>
                               </div>
                               <div class="tn-news">
                                   <div class="tn-img">
                                       <img src="img/news-350x223-5.jpg" />
                                   </div>
                                   <div class="tn-title">
                                       <a href="">Lorem ipsum dolor sit amet</a>
                                   </div>
                               </div>
                               <div class="tn-news">
                                   <div class="tn-img">
                                       <img src="img/news-350x223-1.jpg" />
                                   </div>
                                   <div class="tn-title">
                                       <a href="">Lorem ipsum dolor sit amet</a>
                                   </div>
                               </div>
                           </div>
                       </div>
                   </div>
               </div>
           </div>
       </div>
       <!-- Tab News Start-->

       <!-- Main News Start-->
       <div class="main-news">
           <div class="container">
               <div class="row">
                   <div class="col-lg-9">
                       <div class="row">
                           <div class="col-md-4">
                               <div class="mn-img">
                                   <img src="img/news-350x223-1.jpg" />
                                   <div class="mn-title">
                                       <a href="">Lorem ipsum dolor sit</a>
                                   </div>
                               </div>
                           </div>
                           <div class="col-md-4">
                               <div class="mn-img">
                                   <img src="img/news-350x223-2.jpg" />
                                   <div class="mn-title">
                                       <a href="">Lorem ipsum dolor sit</a>
                                   </div>
                               </div>
                           </div>
                           <div class="col-md-4">
                               <div class="mn-img">
                                   <img src="img/news-350x223-3.jpg" />
                                   <div class="mn-title">
                                       <a href="">Lorem ipsum dolor sit</a>
                                   </div>
                               </div>
                           </div>
                           <div class="col-md-4">
                               <div class="mn-img">
                                   <img src="img/news-350x223-4.jpg" />
                                   <div class="mn-title">
                                       <a href="">Lorem ipsum dolor sit</a>
                                   </div>
                               </div>
                           </div>
                           <div class="col-md-4">
                               <div class="mn-img">
                                   <img src="img/news-350x223-5.jpg" />
                                   <div class="mn-title">
                                       <a href="">Lorem ipsum dolor sit</a>
                                   </div>
                               </div>
                           </div>
                           <div class="col-md-4">
                               <div class="mn-img">
                                   <img src="img/news-350x223-1.jpg" />
                                   <div class="mn-title">
                                       <a href="">Lorem ipsum dolor sit</a>
                                   </div>
                               </div>
                           </div>
                           <div class="col-md-4">
                               <div class="mn-img">
                                   <img src="img/news-350x223-2.jpg" />
                                   <div class="mn-title">
                                       <a href="">Lorem ipsum dolor sit</a>
                                   </div>
                               </div>
                           </div>
                           <div class="col-md-4">
                               <div class="mn-img">
                                   <img src="img/news-350x223-3.jpg" />
                                   <div class="mn-title">
                                       <a href="">Lorem ipsum dolor sit</a>
                                   </div>
                               </div>
                           </div>
                           <div class="col-md-4">
                               <div class="mn-img">
                                   <img src="img/news-350x223-4.jpg" />
                                   <div class="mn-title">
                                       <a href="">Lorem ipsum dolor sit</a>
                                   </div>
                               </div>
                           </div>
                       </div>
                   </div>

                   <div class="col-lg-3">
                       <div class="mn-list">
                           <h2>Read More</h2>
                           <ul>
                               <li><a href="">Lorem ipsum dolor sit amet</a></li>
                               <li><a href="">Pellentesque tincidunt enim libero</a></li>
                               <li><a href="">Morbi id finibus diam vel pretium enim</a></li>
                               <li><a href="">Duis semper sapien in eros euismod sodales</a></li>
                               <li><a href="">Vestibulum cursus lorem nibh</a></li>
                               <li><a href="">Morbi ullamcorper vulputate metus non eleifend</a></li>
                               <li><a href="">Etiam vitae elit felis sit amet</a></li>
                               <li><a href="">Nullam congue massa vitae quam</a></li>
                               <li><a href="">Proin sed ante rutrum</a></li>
                               <li><a href="">Curabitur vel lectus</a></li>
                           </ul>
                       </div>
                   </div>
               </div>
           </div>
       </div>
       <!-- Main News End-->

       <!-- Footer Start -->
       <div class="footer">
           <div class="container">
               <div class="row">
                   <div class="col-lg-3 col-md-6">
                       <div class="footer-widget">
                           <h3 class="title">Get in Touch</h3>
                           <div class="contact-info">
                               <p><i class="fa fa-map-marker"></i>123 News Street, NY, USA</p>
                               <p><i class="fa fa-envelope"></i>info@example.com</p>
                               <p><i class="fa fa-phone"></i>+123-456-7890</p>
                               <div class="social">
                                   <a href=""><i class="fab fa-twitter"></i></a>
                                   <a href=""><i class="fab fa-facebook-f"></i></a>
                                   <a href=""><i class="fab fa-linkedin-in"></i></a>
                                   <a href=""><i class="fab fa-instagram"></i></a>
                                   <a href=""><i class="fab fa-youtube"></i></a>
                               </div>
                           </div>
                       </div>
                   </div>
                   
                   <div class="col-lg-3 col-md-6">
                       <div class="footer-widget">
                           <h3 class="title">Useful Links</h3>
                           <ul>
                               <li><a href="#">Lorem ipsum</a></li>
                               <li><a href="#">Pellentesque</a></li>
                               <li><a href="#">Aenean vulputate</a></li>
                               <li><a href="#">Vestibulum sit amet</a></li>
                               <li><a href="#">Nam dignissim</a></li>
                           </ul>
                       </div>
                   </div>

                   <div class="col-lg-3 col-md-6">
                       <div class="footer-widget">
                           <h3 class="title">Quick Links</h3>
                           <ul>
                               <li><a href="#">Lorem ipsum</a></li>
                               <li><a href="#">Pellentesque</a></li>
                               <li><a href="#">Aenean vulputate</a></li>
                               <li><a href="#">Vestibulum sit amet</a></li>
                               <li><a href="#">Nam dignissim</a></li>
                           </ul>
                       </div>
                   </div>
                   
                   <div class="col-lg-3 col-md-6">
                       <div class="footer-widget">
                           <h3 class="title">Newsletter</h3>
                           <div class="newsletter">
                               <p>
                                   Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus sed porta dui. Class aptent taciti sociosqu
                               </p>
                               <form>
                                   <input class="form-control" type="email" placeholder="Your email here">
                                   <button class="btn">Submit</button>
                               </form>
                           </div>
                       </div>
                   </div>
               </div>
           </div>
       </div>
       <!-- Footer End -->
       
       <!-- Footer Menu Start -->
       <div class="footer-menu">
           <div class="container">
               <div class="f-menu">
                   <a href="">Terms of use</a>
                   <a href="">Privacy policy</a>
                   <a href="">Cookies</a>
                   <a href="">Accessibility help</a>
                   <a href="">Advertise with us</a>
                   <a href="">Contact us</a>
               </div>
           </div>
       </div>
       <!-- Footer Menu End -->
@endsection

@section('js')
@endsection