@extends('site.layouts.content')
{{-- Web site Title --}}
@section('title')
Sagrados Titulares
@parent
@stop

{{-- Content --}}
@section('content-left')
<!-- =========== Section 2 =========== -->
                
                        <div class="col-sm-12">
                            <!-- Main Blog Items -->
                            <div class="section-container main-page-content clearfix">

                                <div class="section-content">

                                    <h1 class="page_title">Noticias</h1>

                                    <!-- Blog List -->
                                    <div class="blog-articles-container clearfix">

                                        <!-- Blog Single Article -->
                                        <article class="blog-article clearfix">
                                            <div class="blog-article-content clearfix">
                                                <h3 class="title"><a href="blog-item-2.html">Proin dapibus blandit purus, a convallis sapien purus, a convallis sapien</a></h3>
                                                <div class="meta clearfix">
                                                    <div class="meta-item posted-by"><span class="glyphicon glyphicon-user"></span> Posted by D. McLee</div>
                                                    <div class="meta-item date"><span class="glyphicon glyphicon-time"></span> April 15, 2014</div>
                                                </div><!-- .meta -->
                                                <a href="blog-item-2.html" class="feature-image img-mask-effect zoom">
                                                    <img src="{{asset('template/images/temp/feature-img1.jpg')}}" alt="Lighthouse">
                                                    <i class="mask"><span class="glyphicon glyphicon-plus-sign large"></span></i>
                                                </a>                                                
                                                <div class="text-content excerpt clearfix">
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque cursus laoreet ornare. Sed consequat mauris sit amet diam tristique, a aliquet velit egestas. Duis convallis, odio nec lacinia volutpat, felis nisi tincidunt mi, sed dictum augue dolor facilisis justo. Duis pulvinar placerat velit, vitae ultricies nunc lobortis quis. Donec cursus facilisis felis et eleifend. </p>
                                                    <p><a href="blog-item-2.html" class="btn btn-outline-inverse btn-md">read more</a></p>
                                                </div>
                                                <div class="meta footer clearfix">
                                                    <ul class="meta-item tags clearfix">
                                                        <li class="icon"><span class="glyphicon glyphicon-tag"></span></li>
                                                        <li><a href="#">Tag 1</a></li>
                                                        <li><a href="#">Tag 2</a></li>
                                                    </ul>
                                                    <div class="meta-item comments"><a href="#"><span class="glyphicon glyphicon-comment"></span>  3 Comments</a></div>
                                                </div><!-- .meta -->
                                            </div><!-- .blog-article-content -->
                                        </article><!-- .blog-article -->

                                        <!-- Blog Single Article -->
                                        <article class="blog-article clearfix">
                                            <div class="blog-article-content clearfix">
                                                <h3 class="title"><a href="blog-item.html">Ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque cursus laoreet ornare sed consequat mauris sit amet diam tristique</a></h3>
                                                <div class="meta clearfix">
                                                    <div class="meta-item posted-by"><span class="glyphicon glyphicon-user"></span> Posted by D. McLee</div>
                                                    <div class="meta-item date"><span class="glyphicon glyphicon-time"></span> April 10, 2014</div>
                                                </div><!-- .meta -->
                                                <a href="blog-item.html" class="feature-image img-mask-effect zoom">
                                                    <img src="{{asset('template/images/temp/feature-img2.jpg')}}" alt="Lake">
                                                    <i class="mask"><span class="glyphicon glyphicon-plus-sign large"></span></i>
                                                </a>                                                
                                                <div class="text-content excerpt clearfix">
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque cursus laoreet ornare. Sed consequat mauris sit amet diam tristique, a aliquet velit egestas. Duis convallis, odio nec lacinia volutpat, felis nisi tincidunt mi, sed dictum augue dolor facilisis justo. Duis pulvinar placerat velit, vitae ultricies nunc lobortis quis. Donec cursus facilisis felis et eleifend. </p>
                                                    <p><a href="blog-item.html" class="btn btn-outline-inverse btn-md">read more</a></p>
                                                </div>
                                                <div class="meta footer clearfix">
                                                    <ul class="meta-item tags clearfix">
                                                        <li class="icon"><span class="glyphicon glyphicon-tag"></span></li>
                                                        <li><a href="#">Tag 1</a></li>
                                                        <li><a href="#">Tag 2</a></li>
                                                    </ul>
                                                    <div class="meta-item comments"><a href="#"><span class="glyphicon glyphicon-comment"></span>  5 Comments</a></div>
                                                </div><!-- .meta -->
                                            </div><!-- .blog-article-content -->
                                        </article><!-- .blog-article -->

                                        <!-- Blog Single Article -->
                                        <article class="blog-article clearfix">
                                            <div class="blog-article-content clearfix">
                                                <h3 class="title"><a href="blog-item-2.html">Pellentesque cursus laoreet ornare sed consequat maurise</a></h3>
                                                <div class="meta clearfix">
                                                    <div class="meta-item posted-by"><span class="glyphicon glyphicon-user"></span> Posted by D. McLee</div>
                                                    <div class="meta-item date"><span class="glyphicon glyphicon-time"></span> April 05, 2014</div>
                                                </div><!-- .meta -->
                                                <a href="blog-item-2.html" class="feature-image img-mask-effect zoom">
                                                    <img src="{{asset('template/images/temp/feature-img3.jpg')}}" alt="Desert road">
                                                    <i class="mask"><span class="glyphicon glyphicon-plus-sign large"></span></i>
                                                </a>                                                
                                                <div class="text-content excerpt clearfix">
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque cursus laoreet ornare. Sed consequat mauris sit amet diam tristique, a aliquet velit egestas. Duis convallis, odio nec lacinia volutpat, felis nisi tincidunt mi, sed dictum augue dolor facilisis justo. Duis pulvinar placerat velit, vitae ultricies nunc lobortis quis. Donec cursus facilisis felis et eleifend. </p>
                                                    <p>Duis convallis, odio nec lacinia volutpat, felis nisi tincidunt mi, sed dictum augue dolor facilisis justo. Duis pulvinar placerat velit, vitae ultricies nunc lobortis quis. </p>
                                                    <p><a href="blog-item-2.html" class="btn btn-outline-inverse btn-md">read more</a></p>
                                                </div>
                                                <div class="meta footer clearfix">
                                                    <ul class="meta-item tags clearfix">
                                                        <li class="icon"><span class="glyphicon glyphicon-tag"></span></li>
                                                        <li><a href="#">Tag 1</a></li>
                                                    </ul>
                                                    <div class="meta-item comments"><a href="#"><span class="glyphicon glyphicon-comment"></span>  Leave a comment</a></div>
                                                </div><!-- .meta -->
                                            </div><!-- .blog-article-content -->
                                        </article><!-- .blog-article -->

                                    </div><!-- .blog-articles-container -->
                                    <!-- End: Blog List -->

                                    <!-- Pagination -->
                                    <div class="pagination-container center clearfix">
                                        <ul class="pagination-list">
                                            <li class="disabled"><a href="#">&laquo;</a></li>
                                            <li class="active"><a href="#">1</a></li>
                                            <li><a href="#">2</a></li>
                                            <li><a href="#">3</a></li>
                                            <li><a href="#">4</a></li>
                                            <li><a href="#">5</a></li>
                                            <li><a href="#">&raquo;</a></li>
                                        </ul>
                                    </div><!-- .pagination-container -->

                                </div><!-- .section-content -->

                            </div><!-- .section-container -->
                            <!-- End: Main Blog Items -->
                        
                </div><!-- .container-fluid -->
                <!-- End: Section 2 -->
@stop