<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Blog - Linh</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" type="image/png" href="{{ asset('blog_assets/img/favicon.png') }}"/>
    <!-- STYLES -->
    <link rel="stylesheet" type="text/css" href="{{ asset('blog_assets/css/bootstrap.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('blog_assets/css/slippry.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('blog_assets/css/fonts.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('blog_assets/css/style.css') }}">
    <!-- GOOGLE FONTS -->
    <link href='https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,300,300italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Playfair+Display:400,400italic,700,700italic' rel='stylesheet' type='text/css'>
	<link href='https://fonts.googleapis.com/css?family=Sarina' rel='stylesheet' type='text/css'>
    
</head>

<body>


    <!-- *****************************************************************
    ** Preloader *********************************************************
    ****************************************************************** -->

	<div id="preloader-container">
    	<div id="preloader-wrap">
    		<div id="preloader"></div>
    	</div>
    </div>

    
    <!-- *****************************************************************
    ** Header ************************************************************ 
    ****************************************************************** --> 

    <header class="tada-container">
    
    
    	<!-- LOGO -->    
    	<div class="logo-container">
        	<a href="index.html"><img src="{{ asset('blog_assets/img/logo.png')}}" alt="logo" ></a>
            <div class="tada-social">
            	<a href="#"><i class="icon-facebook5"></i></a>
                <a href="#"><i class="icon-twitter4"></i></a>
                <a href="#"><i class="icon-google-plus"></i></a>
                <a href="#"><i class="icon-vimeo4"></i></a>
                <a href="#"><i class="icon-linkedin2"></i></a>
            </div>
        </div>
        
        
    	<!-- MENU DESKTOP -->
    	<nav class="menu-desktop menu-sticky">
    
            <ul class="tada-menu">
                    <li><a href="{{ asset('blog') }}">HOME</a></li>
                    <li><a href="#">CATEGORIES <i class="icon-arrow-down8"></i></a>
                        <ul class="submenu" style="overflow-y: scroll; height: 310px">
                            @if(isset($categories)) 
                            {{-- in tất cả categories ra bằng foreach --}}
                                @foreach ($categories as $category)
                                    <li style="padding-left: 15px">
                                        <a href="{{route('category.showblog',[ $category->slug])}}">{{ $category->name }}</a>
                                    </li>
                                @endforeach
                            @endif                  
                        </ul>                
                    </li>                                     
                    <li><a href="{{ asset('about') }}">ABOUT US</a></li>
                    <li><a href="{{ asset('contact') }}">CONTACT</a></li>
                    <li><a href="{{ asset('admin/login') }}">LOGIN</a></li>
            </ul>
        
        </nav>
        
        
        <!-- MENU MOBILE -->  
        <div class="menu-responsive-container"> 
            <div class="open-menu-responsive">|||</div> 
            <div class="close-menu-responsive">|</div>              
            <div class="menu-responsive">   
                <ul class="tada-menu">
                    <li><a href="{{ asset('home') }}" class="active">HOME</a></li>
                    <li><a href="#">CATEGORIES <i class="icon-arrow-down8"></i></a>
                        <ul class="submenu" style="overflow-y: scroll; height: 150px">
                            @if(isset($categories)) 
                            {{-- in tất cả categories ra bằng foreach --}}
                                @foreach ($categories as $category)
                                    <li><a href="{{route('category.showblog',[ $category->slug])}}">{{ $category->name }}</a></li>
                                                                                                                                                 
                                @endforeach
                                <li><a href="#">Submenu <i class="icon-arrow-right8"></i></a>
                                        <ul class="submenu">
                                            <li><a href="#">Item 1</a></li>
                                            <li><a href="#">Item 2</a></li>
                                            <li><a href="#">Item 3</a></li>
                                            <li><a href="#">Item 4</a></li>
                                        </ul>
                                    </li>
                            @endif                  
                        </ul>                
                    </li>                                     
                    <li><a href="{{ asset('blog') }}">BLOG <i class="icon-arrow-down8"></i></a></li> 
                    <li><a href="{{ asset('about') }}">ABOUT US</a></li>
                    <li><a href="{{ asset('contact') }}">CONTACT</a></li>
                </ul>                        
            </div>
        </div> <!-- # menu responsive container -->
        
        
        <!-- SEARCH -->
        <div class="tada-search">
			<form method="GET" action="{{asset('search')}}">
            	<div class="form-group-search">
              		<input type="search" name="search" value="{{ isset($searchTerm) ? $searchTerm : '' }}" class="search-field" placeholder="Search and hit enter...">
              		<button type="submit" class="search-btn"><i class="icon-search4"></i></button>
            	</div>
          	</form>
        </div>
        
        <div >
            @yield('slide')
        </div>
        
                
                
    </header><!-- #HEADER -->

    
    <!-- *****************************************************************
    ** Section ***********************************************************
    ****************************************************************** -->
    
	<section class="tada-container content-posts">
    
        @yield('content')
        <div class="clearfix"></div>
        
        
    </section>

    
    <!-- *****************************************************************
    ** Footer ************************************************************
    ****************************************************************** -->    
    
    <footer class="tada-container">
    
    
    	<!-- INSTAGRAM -->    
    	<div class="widget widget-gallery">
    		<h3 class="widget-title">INSTAGRAM</h3>
    		<div class="image">
            	<a href="#"><img src="{{ asset('blog_assets/img/img-gallery-1.jpg')}}" alt="image gallery 1"></a>
                <a href="#"><img src="{{ asset('blog_assets/img/img-gallery-2.jpg')}}" alt="image gallery 2"></a>
                <a href="#"><img src="{{ asset('blog_assets/img/img-gallery-3.jpg')}}" alt="image gallery 3"></a>
                <a href="#"><img src="{{ asset('blog_assets/img/img-gallery-4.jpg')}}" alt="image gallery 4"></a>
                <a href="#"><img src="{{ asset('blog_assets/img/img-gallery-5.jpg')}}" alt="image gallery 5"></a>
                <a href="#"><img src="{{ asset('blog_assets/img/img-gallery-6.jpg')}}" alt="image gallery 6"></a>
            </div>
            <div class="clearfix"></div>
    	</div>
        
        
        <!-- FOOTER BOTTOM -->        
        <div class="footer-bottom">
        	<span class="copyright">Theme Created by <a href="#">AD-Theme</a> Copyright © 2016. All Rights Reserved</span>
        	<span class="backtotop">TOP <i class="icon-arrow-up7"></i></span>
            <div class="clearfix"></div>
        </div>
        
        
    </footer>
    
    
    <!-- *****************************************************************
    ** Script ************************************************************
    ****************************************************************** -->	
	
	<script src="{{ asset('blog_assets/js/jquery-1.12.4.min.js') }}"></script>
	<script src="{{ asset('blog_assets/js/slippry.js') }}"></script>
    <script src="{{ asset('blog_assets/js/main.js') }}"></script>

</body>
</html>