      <!-- CONTENT -->    
      <div class="content col-xs-8">
        <h3>Home/ <a href="{{route('category.show',[$category->id])}}">{{$category->name}}</a></h3>

            @foreach($posts as $post)
            	<div class="col-xs-12">

              
                	<!-- ARTICLE 1 -->      
                	<article>
                    	<div class="post-image">
                        	<img src="{{ $post->thumbnail }}" alt="post image 1">
                            <div class="category"><a href="#">{{$category->name}}</a></div>
                        </div>
                        <div class="post-text">
                        	<span class="date">{{ $post->created_at }}</span>
                            <h2><a href="{{route('post.show',[ $post->id])}}">{{ $post->title }}</a></h2>
                            <p class="text">{!! $post->description !!}</p>
                            <br><a href="{{route('post.show',[ $post->id])}}" class="btn btn-link">Read more</a>                                 
                        </div>
                        <div class="post-info">
                        	<div class="post-by">Post By <a href="#">{{$post->user->name}}</a></div>
                        </div>
                    </article>
                </div>
            
            @endforeach
            
            {{$posts->links()}}
   		<div class="clearfix"></div>
        
        
      
      
      
      </div><!-- #CONTENT -->
