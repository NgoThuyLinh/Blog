 <section class="tada-container content-posts page post-right-sidebar">

		<!-- CONTENT -->
    	<div class="content col-xs-8">
    	<!-- ARTICLE  -->  
    	{{-- kiểm tra sự tồn tại của dữ liệu trước khi dùng --}}
		@if(isset($posts)) 
			{{-- in tất cả bài viết ra bằng foreach --}}
			@foreach ($posts as $post)
				
		    	<article>
		        	<div class="post-image">
		            	<img src="{{ $post->thumbnail }}" alt="post image 1">
		                <div class="category"><a href="#">IMG</a></div>
		            </div>
		            <div class="post-text">
		            	<span class="date">{{ $post->created_at }}</span>
		                <h2><a href="{{route('post.showblog',[ $post->slug])}}">{{ $post->title }}</a></h2>
		                <p class="text">
		                	{!! $post->description !!}
                            <br><a href="{{route('post.showblog',[ $post->slug])}}" class="btn btn-link">Read more</a>
		                </p>                                 
		            </div>
		            <div class="post-info">
		            	<div class="post-by">Post By <a href="#">{{$post->user->name}}</a></div>
		                <div class="extra-info">
		                	<a href="#"><i class="icon-facebook5"></i></a>
		            		<a href="#"><i class="icon-twitter4"></i></a>
		            		<a href="#"><i class="icon-google-plus"></i></a>
		                    <span class="comments">25 <i class="icon-bubble2"></i></span>
		                </div>
		                <div class="clearfix"></div>
		            </div>
		        </article>
			@endforeach
			<!-- NAVIGATION -->
	    	<div class="navigation">
	        	{{-- {{$posts->links()}} --}}
	            <div class="clearfix"></div>
	        </div>
			
	    @endif

               
    	
    
    </div>
        
        <!-- SIDEBAR -->
        
        @include('layouts/sidebar')
        <!-- #SIDEBAR -->

    	
   		<div class="clearfix"></div>

    </section>