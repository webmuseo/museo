@extends('site.layouts.default')
{{-- content --}}
@section('content')
 <!-- =========== Section 1: Top Banner =========== -->
                <div id="top-banner" class="container-fluid horizontal-section-container clearfix">
                    <div class="row">
                        <div class="col-xs-12">
                            <img src="{{asset('template/images/design/slider1.jpg')}}" alt="Hermandad del museo" class="full-width-image">
                        </div><!-- .col-xs-12 -->
                        
                    </div><!-- .row -->
                </div>
                <!-- End: Section 1: Top Banner -->

<!-- =========== Section 2 =========== -->
                <div class="container-fluid horizontal-section-container clearfix">
                    <div class="row">

                        <div class="col-sm-9">
                            <!-- Main Page Content -->
                            <div id="main-page-content" class="section-container main-page-content clearfix">

                                <div class="section-content">

                                    <div class="h1 page_title">{{{ Lang::get('general.news') }}}

                                        <div class="slider-arrows clearfix">
                                            <span id="fullpage-slider-arrow-left" class="arrow glyphicon glyphicon-chevron-left"></span>
                                            <span id="fullpage-slider-arrow-right" class="arrow glyphicon glyphicon-chevron-right"></span>
                                        </div><!-- .slider-arrows -->
                                    </div>

                                    <!-- Full Page Content Slider -->
                                    <div id="full-page-content-slider" class="owl-carousel owl-theme full-page-content-slider clearfix">

                                        <!-- Slider Item -->
                                        <div class="item">
                                            <div class="media clearfix">
                                                <a href="#" class="pull-left img-mask-effect fade">
                                                    <img class="lazyOwl" data-src="{{asset('template/images/temp/slider-content-img1.jpg')}}" src="#" alt="Lighthouse">
                                                    <i class="mask"><span class="glyphicon glyphicon-plus-sign large"></span></i>
                                                </a>
                                                <div class="media-body">
                                                    <h2 class="media-heading"><a href="#">Suspendisse quis lacinia diam</a></h2>
                                                    <p>In mattis eleifend enim id pulvinar. Maecenas molestie condimentum purus, vel tempor lorem ultrices sit amet. Donec cursus mattis augue. Suspendisse eget tortor nec nunc adipiscing luctus. Nunc ac nunc id erat viverra sodales at sed quam. Nulla facilisi. Aliquam adipiscing non quam eu hendrerit. Integer mattis, ante a convallis porta, ante massa molestie lacus, at feugiat purus metus nec mauris.</p>

                                                    
                                                    <p><a href="#" class="btn btn-outline-inverse btn-md">Leer m&aacute;s</a></p>
                                                </div>
                                            </div><!-- .media -->
                                        </div><!-- .item -->

                                        <!-- Slider Item -->
                                        <div class="item">
                                            <div class="media clearfix">
                                                <a href="#" class="pull-left img-mask-effect fade">
                                                    <img class="lazyOwl" data-src="{{asset('template/images/temp/slider-content-img2.jpg')}}" src="#" alt="Wheat harvest">
                                                    <i class="mask"><span class="glyphicon glyphicon-plus-sign large"></span></i>
                                                </a>
                                                <div class="media-body">
                                                    <h2 class="media-heading"><a href="#">Aliquam adipiscing non quam eu hendrerit</a></h2>
                                                    <p>Eleifend enim id pulvinar. Maecenas molestie condimentum purus, vel tempor lorem ultrices sit amet. Donec cursus mattis augue. Suspendisse eget tortor nec nunc adipiscing luctus. Nunc ac nunc id erat viverra sodales at sed quam. Nulla facilisi. Aliquam adipiscing non quam eu hendrerit. Integer mattis, ante a convallis porta, ante massa molestie lacus, at feugiat purus metus nec mauris.</p>

                                                    
                                                    <p><a href="#" class="btn btn-outline-inverse btn-md">Leer m&aacute;s</a></p>
                                                </div>
                                            </div><!-- .media -->
                                        </div><!-- .item -->

                                    </div><!-- #full-page-content-slider -->

                                </div><!-- .section-content -->

                            </div><!-- .section-container -->
                            <!-- End: Main Page Content -->
                        </div><!-- .col-sm-9 -->
						<div class="col-sm-3" style="padding: 20px 5px 0 5px;">

                            <a class="twitter-timeline" href="https://twitter.com/Hdad_Museo" data-widget-id="556766552398528512">Tweets por el @Hdad_Museo.</a>
							<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>	
                            
                            <!-- End: Tags -->

                        </div><!-- .col-sm-3 -->
                    </div><!-- .row -->
                    
                </div><!-- .container-fluid -->
                <!-- End: Section 2 -->

				<!-- =========== Section 2 =========== -->
                <div class="container-fluid horizontal-section-container clearfix">
                    <div class="row">

                        <div class="col-sm-12">
                            <!-- Main Page Content -->
                            <div id="main-page-content" class="section-container main-page-content clearfix">

                                <div class="section-content">

                                    

                                    <!-- News Items -->
                                    <div class="thumbnail-list row clearfix">

                                        <!-- item -->
                                        <div class="item col-sm-4">
                                            <div class="thumbnail item-content">
                                                <a href="#" class="img-mask-effect fade scaleimage">
                                                    <img src="{{asset('template/images/temp/thumb-g-1.jpg')}}" alt="Sunset scenery">
                                                    <i class="mask"><span class="glyphicon glyphicon-search"></span></i>
                                                </a>
                                                <div class="caption">
                                                    <h5 class="title bold"><a href="#">Praesent pharetra quam</a></h5>                                                    
                                                </div>
                                            </div><!-- .thumbnail -->
                                        </div><!-- .item -->

                                        <!-- item -->
                                        <div class="item col-sm-4">
                                            <div class="thumbnail item-content">
                                                <a href="#" class="img-mask-effect slidefrombottom">
                                                    <img src="{{asset('template/images/temp/thumb-g-2.jpg')}}" alt="Clothing line pegs">
                                                    <i class="mask"><span class="glyphicon glyphicon-search"></span></i>
                                                </a>
                                                <div class="caption">
                                                    <h5 class="title bold"><a href="#">Cras fermentum</a></h5>                                                    
                                                </div>
                                            </div><!-- .thumbnail -->
                                        </div><!-- .item -->

                                        <!-- item -->
                                        <div class="item col-sm-4">
                                            <div class="thumbnail item-content">
                                                <a href="#" class="img-mask-effect slidefromleft">
                                                    <img src="{{asset('template/images/temp/thumb-g-3.jpg')}}" alt="Butterfly">
                                                    <i class="mask"><span class="glyphicon glyphicon-search"></span></i>
                                                </a>
                                                <div class="caption">
                                                    <h5 class="title bold"><a href="#">Duis consequat erat vel mauris</a></h5>                                                    
                                                </div>
                                            </div><!-- .thumbnail -->
                                        </div><!-- .item -->

                                        <span class="clearfix_item clearfix hidden-xs"></span><!-- this is needed to fix row item's different heights -->

                                        

                                        <span class="clearfix_item clearfix hidden-xs"></span><!-- this is needed to fix row item's different heights -->

                                    </div><!-- .thumbnail-list -->

                                </div><!-- .section-content -->

                            </div><!-- .section-container -->
                            <!-- End: Main Page Content -->
                        </div><!-- .col-sm-12 -->

                    </div><!-- .row -->
                </div><!-- .container-fluid -->
                <!-- End: Section 2 -->
                
                




@stop