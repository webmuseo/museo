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

                        <div class="col-sm-12">
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

                                                    <p>Donec tempor dolor mi, quis dapibus purus facilisis eget. Nunc at venenatis nisl, nec convallis turpis. Curabitur est ipsum, sollicitudin sit amet sem fringilla, hendrerit lobortis magna. Vestibulum sed lectus condimentum magna aliquam faucibus eget sed urna. Vivamus viverra volutpat mollis. Nullam gravida a orci vitae varius. Fusce adipiscing facilisis urna a venenatis. Proin ipsum velit, volutpat ut laoreet non, imperdiet posuere mi. In eu quam dui.</p>
                                                    <p><a href="#" class="btn btn-outline-inverse btn-md">read more</a></p>
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

                                                    <p>Ronec tempor dolor mi, quis dapibus purus facilisis eget. Nunc at venenatis nisl, nec convallis turpis. Curabitur est ipsum, sollicitudin sit amet sem fringilla, Nullam gravida a orci vitae varius. Fusce adipiscing facilisis urna a venenatis. Proin ipsum velit, volutpat ut laoreet non, imperdiet posuere mi. In eu quam dui.</p>
                                                    <p><a href="#" class="btn btn-outline-inverse btn-md">read more</a></p>
                                                </div>
                                            </div><!-- .media -->
                                        </div><!-- .item -->

                                    </div><!-- #full-page-content-slider -->

                                </div><!-- .section-content -->

                            </div><!-- .section-container -->
                            <!-- End: Main Page Content -->
                        </div><!-- .col-sm-12 -->

                    </div><!-- .row -->
                </div><!-- .container-fluid -->
                <!-- End: Section 2 -->






@stop