<!-- SIDEBAR -->        
    <div class="sidebar col-xs-4">
        <!-- ABOUT ME -->                  
        <div class="widget about-me">
        	<div class="ab-image">
            	<img src="{{ asset('blog_assets/img/about-me.jpg') }}" alt="about me">
                <div class="ab-title">About Me</div>
            </div>
            <div class="ad-text">
            	<p>Lorem ipsum dolor sit consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore.</p>
                <span class="signing"><img src="{{ asset('blog_assets/img/signing.png') }}" alt="signing"></span>
            </div>
        </div>


        <!-- LATEST POSTS -->                              
        <div class="widget latest-posts">
        	<h3 class="widget-title">
            	Top Posts
            </h3>
            <div class="posts-container">
                @if(isset($posttops))
                    @foreach($posttops as $top)
                    	<div class="item">
                        	<a href="{{route('post.show',[ $top->slug])}}"><img src="{{ $top->thumbnail }}" class="post-image" style="width: 100px"></a>
                            <div class="info-post">
                            	<h5><a href="{{route('post.show',[ $top->slug])}}">{{$top->title}}</a></h5>
                            	<span class="date">{{$top->created_at}}</span>	
                            </div> 
                            <div class="clearfix"></div>   
                        </div>
                    @endforeach
            	@endif
                
                <div class="clearfix"></div>
            </div>
        </div>


        <!-- FOLLOW US -->                              
        <div class="widget follow-us">
        	<h3 class="widget-title">
            	Follow Us
            </h3>
        	<div class="follow-container">
                <a href="#"><i class="icon-facebook5"></i></a>
                <a href="#"><i class="icon-twitter4"></i></a>
                <a href="#"><i class="icon-google-plus"></i></a>
                <a href="#"><i class="icon-vimeo4"></i></a>
                <a href="#"><i class="icon-linkedin2"></i></a>                
            </div>
        	<div class="clearfix"></div>
        </div>            


        <!-- TAGS -->                              
        <div class="widget tags">
        	<h3 class="widget-title">
            	Tags
            </h3>
        	<div class="tags-container">
                @if(isset($posts))
                    @foreach ($posts as $post)
                        @foreach ($post->tags as $tags)
                            <a href="{{route('tag.show',[ $tags->id])}}">{{$tags->name}}</a>
                        @endforeach
                    @endforeach
                @endif
                
            </div>
        	<div class="clearfix"></div>
        </div> 


        <!-- ADVERTISING -->                              
        <div class="widget advertising">
			<div class="advertising-container">
            	<img src="{{ asset('blog_assets/img/350x300.png') }}" alt="banner 350x300">
            </div>
		</div>


        <!-- NEWSLETTER -->                              
        <div class="widget newsletter">
        	<h3 class="widget-title">
            	Newsletter
            </h3>
        	<div class="newsletter-container">
				<h4>DO NOT MISS OUR NEWS</h4>
                <p>Sign up and receive the <br> latest news of our company</p> 
                <form>
                   <input type="email" class="newsletter-email" placeholder="Your email address...">
                   <button type="submit" class="newsletter-btn">Send</button>
              	</form>                                  
            </div>
        	<div class="clearfix"></div>
        </div>  
            
    </div> 
<!-- #SIDEBAR --> 
