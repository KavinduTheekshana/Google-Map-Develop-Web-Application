@extends('layouts.blog')

@section('content')

        <!--================Post Slider Area =================-->
        <section class="post_slider_area">
			<div class="post_slider_inner owl-carousel">

        @foreach($slider as $slider)
				<div class="item">
					<div class="post_s_item">
						<div class="post_img" style="width:900px;height:500px;">
							<img src="{{$slider->post_image}}" alt="">
						</div>
						<div class="post_text">
							<a class="cat" href="#">{{$slider->category}}</a>
							<a href="viewpost/{{$slider->postid}}"><h4>{!! substr(strip_tags($slider->post_title), 0, 50) !!}
                @if (strlen(strip_tags($slider->post_title)) > 50)
                     ...
                   @endif</h4></a>
							<p>{!! substr(strip_tags($slider->post_body), 0, 100) !!}
                @if (strlen(strip_tags($slider->post_body)) > 10)
                     ...
                   @endif</p>
							<div class="date">
								<a ><i class="fa fa-calendar" aria-hidden="true"></i>{{ date('D-M-Y', strtotime($slider->publish_date)) }}</a>
								<a href="#"><i class="fa fa-comments-o" aria-hidden="true"></i> 05</a>
							</div>
						</div>
					</div>
				</div>
				@endforeach

			</div>
        </section>
        <!--================End Post Slider Area =================-->

        <!--================Blog Area =================-->
        <section class="blog_area p_120">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8">
                        <div class="blog_left_sidebar">


                          @foreach($posts as $post)
                            <article class="blog_style1">
                            	<div class="blog_img">
                            		<img class="img-fluid" src="{{$post->post_image}}" alt="">
                            	</div>
                            	<div class="blog_text">
									<div class="blog_text_inner">
										<a class="cat" href="#">{{$post->category}}</a>
										<a href="viewpost/{{$post->postid}}"><h4>{{$post->post_title}}</h4></a>
										<p>{!! substr(strip_tags($post->post_body), 0, 200) !!}
                      @if (strlen(strip_tags($post->post_body)) > 200)
                           ...
                         @endif</p>
										<div class="date">
											<a><i class="fa fa-calendar" aria-hidden="true"></i>{{ date('D-M-Y', strtotime($post->publish_date)) }}</a>
											<a href="#"><i class="fa fa-comments-o" aria-hidden="true"></i> 05</a>
										</div>
									</div>
                      </div>
                            </article>

                            @endforeach

                            <nav class="blog-pagination justify-content-center d-flex">
		                        <ul class="pagination">
		                            {!! $posts->links(); !!}
		                        </ul>
		                    </nav>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="blog_right_sidebar">
                            <aside class="single_sidebar_widget search_widget">
                                <div class="input-group">
                                    <input type="text" class="form-control" placeholder="Search Posts">
                                    <span class="input-group-btn">
                                        <button class="btn btn-default" type="button"><i class="lnr lnr-magnifier"></i></button>
                                    </span>
                                </div><!-- /input-group -->
                                <div class="br"></div>
                            </aside>
                            <aside class="single_sidebar_widget author_widget">
                                <img class="author_img rounded-circle" src="blog\img\profile.jpg" style="width:100px;height:100px;" alt="">
                                <h4>About Us</h4>
                                <p>Colombo Municipal Council Smart <br>  Cleaning Service</p>
                                <div class="social_icon">
                                    <a href="#"><i class="fa fa-facebook"></i></a>
                                    <a href="#"><i class="fa fa-twitter"></i></a>
                                    <a href="#"><i class="fa fa-linkedin"></i></a>
                                    <a href="#"><i class="fa fa-instagram"></i></a>
                                </div>
                                <p>Colombo Municipal Council is planning to launch a web site to optimize garbage collection and
                                  they provide some spots to the people and people can check that spots via the web
                                  site and they can keep their garbages in there. The CMC post articles
                                  related to the garbage problems and every people can see that post via
                                  the web site. CMC allow people to join with them as volunteers and they
                                  can report about thrown away garbage to the CMC and CMC collect them.</p>
                                <div class="br"></div>
                            </aside>
                            <aside class="single_sidebar_widget popular_post_widget">
                                <h3 class="widget_title">Popular Posts</h3>
                                <div class="media post_item">
                                    <img src="img/blog/popular-post/post1.jpg" alt="post">
                                    <div class="media-body">
                                        <a href="blog-details.html"><h3>Space The Final Frontier</h3></a>
                                        <p>02 Hours ago</p>
                                    </div>
                                </div>
                                <div class="media post_item">
                                    <img src="img/blog/popular-post/post2.jpg" alt="post">
                                    <div class="media-body">
                                        <a href="blog-details.html"><h3>The Amazing Hubble</h3></a>
                                        <p>02 Hours ago</p>
                                    </div>
                                </div>
                                <div class="media post_item">
                                    <img src="img/blog/popular-post/post3.jpg" alt="post">
                                    <div class="media-body">
                                        <a href="blog-details.html"><h3>Astronomy Or Astrology</h3></a>
                                        <p>03 Hours ago</p>
                                    </div>
                                </div>
                                <div class="media post_item">
                                    <img src="img/blog/popular-post/post4.jpg" alt="post">
                                    <div class="media-body">
                                        <a href="blog-details.html"><h3>Asteroids telescope</h3></a>
                                        <p>01 Hours ago</p>
                                    </div>
                                </div>
                                <div class="br"></div>
                            </aside>
                            <aside class="single_sidebar_widget">
                                <a href="#"><img class="img-fluid" src="img/blog/add.jpg" alt=""></a>
                                <div class="br"></div>
                            </aside>
                            <aside class="single_sidebar_widget post_category_widget">
                                <h4 class="widget_title">Post Catgories</h4>
                                <ul class="list cat-list">
                                    <li>
                                        <a href="#" class="d-flex justify-content-between">
                                            <p>Recycling</p>
                                            <p>37</p>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="d-flex justify-content-between">
                                            <p>Home Waste</p>
                                            <p>24</p>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="d-flex justify-content-between">
                                            <p>Industrial Waste</p>
                                            <p>59</p>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="d-flex justify-content-between">
                                            <p>Plastic Recycling</p>
                                            <p>29</p>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="d-flex justify-content-between">
                                            <p>Recyling Technology</p>
                                            <p>15</p>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="d-flex justify-content-between">
                                            <p>Other</p>
                                            <p>09</p>
                                        </a>
                                    </li>
                                </ul>
                                <div class="br"></div>
                            </aside>
                            <aside class="single-sidebar-widget tag_cloud_widget">
                                <h4 class="widget_title">Tag Clouds</h4>
                                <ul class="list">
                                    <li><a href="#">Recycling</a></li>
                                    <li><a href="#">Plastic Recycling</a></li>
                                    <li><a href="#">Recyling Technology</a></li>
                                    <li><a href="#">Industrial Waste</a></li>
                                    <li><a href="#">Other</a></li>
                                    <li><a href="#">Home Waste</a></li>
                                    <li><a href="#">Recyling Technology</a></li>
                                </ul>
                            </aside>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--================Blog Area =================-->

@endsection