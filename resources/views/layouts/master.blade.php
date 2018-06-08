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
                     <li><a href="#" class="active">HOME <i class="icon-arrow-down8"></i></a>
                        <ul class="submenu">
                        	<li><a href="{{ asset('home1') }}">Home 1 Column</a></li>
                            <li><a href="{{ asset('home1s') }}" class="active">Home 1 Column + Sidebar</a></li>                            
                            <li><a href="{{ asset('home') }}">Home 2 Columns + Sidebar</a></li>
                            <li><a href="{{ asset('home2') }}">Home 2 Columns</a></li>
                            <li><a href="{{ asset('home3') }}">Home 3 Columns</a></li>                                                                      
                        </ul>
                    </li>
                    <li><a href="#">FEATURES <i class="icon-arrow-down8"></i></a>
                        <ul class="submenu">
                            <li><a href="{{ asset('page') }}">Page</a></li>
                            <li><a href="{{ asset('pagers') }}">Page + Right Sidebar</a></li>
                            <li><a href="{{ asset('pagels') }}">Page + Left Sidebar</a></li>                            
                            <li><a href="{{ asset('postfull') }}">Post Full Width</a></li>
                            <li><a href="{{ asset('post') }}">Post + Right Sidebar</a></li>
                            <li><a href="{{ asset('postl') }}">Post + Left Sidebar</a></li>
                            <li><a href="{{ asset('home1s') }}">No Sticky Menu</a></li>
                            <li><a href="{{ asset('noslide') }}">No Slider</a></li> 
                            <li><a href="#">Submenu <i class="icon-arrow-right8"></i></a>
                                <ul class="submenu">
                                    <li><a href="#">Item 1</a></li>
                                    <li><a href="#">Item 2</a></li>
                                    <li><a href="#">Item 3</a></li>
                                    <li><a href="#">Item 4</a></li>
                                </ul>
                            </li>                                                                                            
                        </ul>                
                    </li>                                     
                    <li><a href="#">BLOG <i class="icon-arrow-down8"></i></a>
                        <ul class="submenu">
                        	<li><a href="{{ asset('blog1') }}">Blog 1 Column</a></li>
                            <li><a href="{{ asset('blog1s') }}">Blog + Sidebar</a></li>                            
                            <li><a href="{{ asset('blog2s') }}">Blog 2 Columns + Sidebar</a></li>
                            <li><a href="{{ asset('blog2') }}">Blog 2 Columns</a></li>
                            <li><a href="{{ asset('blog3') }}">Blog 3 Columns</a></li>                                                                      
                        </ul>                
                    </li> 
                    <li><a href="{{ asset('about') }}">ABOUT US</a></li>
                    <li><a href="{{ asset('contact') }}">CONTACT</a></li>
            </ul>
        
        </nav>
        
        
        <!-- MENU MOBILE -->  
        <div class="menu-responsive-container"> 
            <div class="open-menu-responsive">|||</div> 
            <div class="close-menu-responsive">|</div>              
            <div class="menu-responsive">   
                <ul class="tada-menu">
                     <li><a href="#" class="active">HOME <i class="icon-arrow-down8"></i></a>
                        <ul class="submenu">
                            <li><a href="{{ asset('home1') }}">Home 1 Column</a></li>
                            <li><a href="{{ asset('home1s') }}" class="active">Home 1 Column + Sidebar</a></li>                            
                            <li><a href="{{ asset('home') }}">Home 2 Columns + Sidebar</a></li>
                            <li><a href="{{ asset('home2') }}">Home 2 Columns</a></li>
                            <li><a href="{{ asset('home3') }}">Home 3 Columns</a></li>                                                                      
                        </ul>
                    </li>
                    <li><a href="#">FEATURES <i class="icon-arrow-down8"></i></a>
                        <ul class="submenu">
                            <li><a href="{{ asset('page') }}">Page</a></li>
                            <li><a href="{{ asset('pagers') }}">Page + Right Sidebar</a></li>
                            <li><a href="{{ asset('pagels') }}">Page + Left Sidebar</a></li>                            
                            <li><a href="{{ asset('postf') }}">Post Full Width</a></li>
                            <li><a href="{{ asset('post') }}">Post + Right Sidebar</a></li>
                            <li><a href="{{ asset('postl') }}">Post + Left Sidebar</a></li>
                            <li><a href="{{ asset('home1s') }}">No Sticky Menu</a></li>
                            <li><a href="{{ asset('noslide') }}">No Slider</a></li> 
                            <li><a href="#">Submenu <i class="icon-arrow-right8"></i></a>
                                <ul class="submenu">
                                    <li><a href="#">Item 1</a></li>
                                    <li><a href="#">Item 2</a></li>
                                    <li><a href="#">Item 3</a></li>
                                    <li><a href="#">Item 4</a></li>
                                </ul>
                            </li>                                                                                            
                        </ul>                
                    </li>                                     
                    <li><a href="#">BLOG <i class="icon-arrow-down8"></i></a>
                        <ul class="submenu">
                            <li><a href="{{ asset('blog1') }}">Blog 1 Column</a></li>
                            <li><a href="{{ asset('blog1s') }}">Blog + Sidebar</a></li>                            
                            <li><a href="{{ asset('blog2s') }}">Blog 2 Columns + Sidebar</a></li>
                            <li><a href="{{ asset('blog2') }}">Blog 2 Columns</a></li>
                            <li><a href="{{ asset('blog3') }}">Blog 3 Columns</a></li>                                                                      
                        </ul>                 
                    </li> 
                    <li><a href="{{ asset('about') }}">ABOUT US</a></li>
                    <li><a href="{{ asset('contact') }}">CONTACT</a></li>
                </ul>                        
            </div>
        </div> <!-- # menu responsive container -->
        
        
        <!-- SEARCH -->
        <div class="tada-search">
			<form>
            	<div class="form-group-search">
              		<input type="search" class="search-field" placeholder="Search and hit enter...">
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