        <!-- CONTENT -->
        <div class="content col-xs-12">

        
            <!-- ARTICLE 1 -->        
            <article>
                <div class="tada-search" style="text-align: left;">
                    <h3><a href="{{route('category.showblog',[ $post->category->slug])}}" >{{$post->category->name}}</a>/ Post</h3>
                </div>
                <div class="post-image">
                    <img src="{{ $post->thumbnail }}" alt="post image 1"> 
                </div>
                
                <div class="post-text">
                    <span class="date">Post By <a href="#">{{$post->user->name}}</a> on{{ $post->created_at }}</span>
                    <h2>{{ $post->title }}</h2>
                </div>
                               
                <div class="post-text text-content">
                    
                    <div class="text clearfix"><p>{{ $post->content }}</p>                  
                    <div class="clearfix"></div>
                    <div class="author">
                        @foreach ($post->tags as $tag)
                            <div class="tags-container" style="float: left;">
                                <a  href="{{route('tag.show',[ $tag->id])}}">{{ $tag->name }}</a>
                            </div>
                        @endforeach
                        <div class="clearfix"></div>
                    </div>
                </div>

                <div class="social-post">
                    <a href="#"><i class="icon-facebook5"></i></a>
                    <a href="#"><i class="icon-twitter4"></i></a>
                    <a href="#"><i class="icon-google-plus"></i></a>
                    <a href="#"><i class="icon-vimeo4"></i></a>
                    <a href="#"><i class="icon-linkedin2"></i></a>                  
                </div>
                
            
                <!-- NAVIGATION POST -->
                <div class="navigation-post">
                    <div class="prev-post">
                        <img src="{{ asset('blog_assets/img/prev-post.jpg') }}">
                        <a href="" class="prev">
                            <i class="icon-arrow-left8"></i> Previous Posts
                            <span class="name-post">DUIS FACILISIS AUGUE VITAE</span>
                        </a>
                        <div class="clearfix"></div>
                    </div>
                    <div class="next-post">                 
                        <a href="" class="next">
                                Next Posts <i class="icon-arrow-right8"></i>                
                                <span class="name-post">DUIS FACILISIS AUGUE VITAE</span>
                        </a> 
                        <img src="{{ asset('blog_assets/img/next-post.jpg') }}">  
                        <div class="clearfix"></div>             
                    </div>
                    <div class="clearfix"></div>
                </div>
                
                
                <!-- AUTHOR POST -->
                <div class="author-post-container">
                    <div class="author-post">
                        <div class="author-image">
                            <img src="{{ asset('blog_assets/img/img-author.jpg') }}">
                        </div>
                        <div class="author-info">
                            <span class="author-name">LUCAS NEWAR</span>
                            <span class="author-description">Morbi gravida, sem non egestas ullamcorper, tellus ante laoreet nisl, id iaculis urna eros vel turpis curabitur. Nullam tristique massa faucibus, sodales sapien ac, tincidunt dolor.</span>
                            <span class="author-social">
                                <a href="#"><i class="icon-facebook5"></i></a>
                                <a href="#"><i class="icon-twitter4"></i></a>
                                <a href="#"><i class="icon-google-plus"></i></a>
                                <a href="#"><i class="icon-vimeo4"></i></a>
                                <a href="#"><i class="icon-linkedin2"></i></a>            
                            </span>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                        
                </div>
                
                
                <!-- RELATED POSTS -->
                <div class="related-posts">
                        <h2>Related Article</h2>
                        <div class="related-item-container">
                            <div class="related-item">
                                <div class="related-image">
                                    <img src="{{ asset('blog_assets/img/img-related-1.jpg') }}">
                                    <span class="related-category"><a href="#">Food</a></span>
                                </div>
                                <div class="related-text">
                                    <span class="related-date">03 JUNE 2016</span>
                                    <span class="related-title"><a href="#">TINCIDUNT SIT <br> ULTRICIES AMET</a></span>
                                </div>
                                <div class="related-author">
                                    Post by <a href="#">AD-THEME</a>
                                </div>
                            </div>
    
                            <div class="related-item">
                                <div class="related-image">
                                    <img src="{{ asset('blog_assets/img/img-related-2.jpg') }}">
                                    <span class="related-category"><a href="#">TECHNOLOGY</a></span>
                                </div>
                                <div class="related-text">
                                    <span class="related-date">04 JUNE 2016</span>
                                    <span class="related-title"><a href="#">VIVAMUS ET <br> TURPIS LACINIA</a></span>
                                </div>
                                <div class="related-author">
                                    Post by <a href="#">AD-THEME</a>
                                </div>
                            </div>
                            
                            <div class="related-item">
                                <div class="related-image">
                                    <img src="{{ asset('blog_assets/img/img-related-3.jpg') }}">
                                    <span class="related-category"><a href="#">Food</a></span>
                                </div>
                                <div class="related-text">
                                    <span class="related-date">01 JUNE 2016</span>
                                    <span class="related-title"><a href="#">CRAS IN NIBH NEC <br> SAPIEN BIBENDUM</a></span>
                                </div>
                                <div class="related-author">
                                    Post by <a href="#">AD-THEME</a>
                                </div>
                            </div>                                              
                        
                            <div class="clearfix"></div>
                        
                        </div>
                  </div>      
                        
                        
                  <!-- COMMENTS -->      
                <div class="comments" style="letter-spacing: 2px; padding: 100px 50px 0 50px; background: white;">
                    <h3>3 Comments</h3>
                    <div class="comments-list">
                        <div class="main-comment">
                            <div class="comment-image-author">
                                <img src="{{ asset('blog_assets/img/img-author.jpg') }}">
                            </div>
                            <div class="comment-info">
                                <div class="comment-name-date"><span class="comment-name">LUCAS NEWAR</span><span class="comment-date">June 2, 2016</span><div class="clearfix"></div></div>
                                <span class="comment-description">Morbi gravida, sem non egestas ullamcorper, tellus ante laoreet nisl, id iaculis urna eros vel turpis curabitur. Donec in dui vitae tellus sodales dapibus non quis libero. Quisque nec tortor ac ligula sagittis rutrum in a felis. <i class="icon-arrow-right2"></i></span>                                
                            </div>
                            <div class="clearfix"></div>
                        </div>
                        <div class="reply-comment">
                            <span class="reply-line"></span>
                            <div class="comment-image-author">
                                <img src="{{ asset('blog_assets/img/img-author.jpg') }}">
                            </div>
                            <div class="comment-info">
                                <div class="comment-name-date"><span class="comment-name">LUCAS NEWAR</span><span class="comment-date">June 2, 2016</span><div class="clearfix"></div></div>
                                <span class="comment-description">Morbi gravida, sem non egestas ullamcorper, tellus ante laoreet nisl, id iaculis urna eros vel turpis curabitur. Donec in dui vitae tellus sodales dapibus non quis libero. Quisque nec tortor ac ligula. <i class="icon-arrow-right2"></i></span>                                
                            </div>
                            <div class="clearfix"></div>
                        </div>
                    </div>

                    <div class="comments-list">
                        <div class="main-comment">
                            <div class="comment-image-author">
                                <img src="{{ asset('blog_assets/img/img-author.jpg') }}">
                            </div>
                            <div class="comment-info">
                                <div class="comment-name-date"><span class="comment-name">LUCAS NEWAR</span><span class="comment-date">June 2, 2016</span><div class="clearfix"></div></div>
                                <span class="comment-description">Morbi gravida, sem non egestas ullamcorper, tellus ante laoreet nisl, id iaculis urna eros vel turpis curabitur. Donec in dui vitae tellus sodales dapibus non quis libero. Quisque nec tortor ac ligula sagittis rutrum in a felis. <i class="icon-arrow-right2"></i></span>                                
                            </div>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                        
                </div>                                  
                
                
                <!-- COMMENT FORM -->
                <div class="comment-form">
                    <h3>Leavy a Reply</h3>
                    <span class="field-name">Your Name (required)</span>
                    <input type="text" class="name">
                    <span class="field-name">Your Name (required)</span>
                    <input type="text" class="email">
                    <span class="field-name">Your Message</span>
                    <textarea class="message"></textarea>
                    
                    <button type="submit">Send Comment</button>
                
                </div>
            
            
            </article>
        
        
        </div>
        
        <div class="clearfix"></div>
        
        
