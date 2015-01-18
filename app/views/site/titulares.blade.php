@extends('site.layouts.content')
{{-- Web site Title --}}
@section('title')
Sagrados Titulares
@parent
@stop

{{-- Content --}}
@section('content-left')

							<div class="col-sm-12">
                            <!-- Main Page Content -->
                            <div id="main-page-content" class="section-container main-page-content clearfix">

                                <div class="section-content clearfix">

                                    <h1 class="page_title">Sagrados Titulares</h1>

                                    <h4>Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elituis sequis bibendum auct erd.</h4>

                                    <p>Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Mauris in erat justo. Nullam ac urna eu felis dapibus condimentum sit amet a augue. Sed non neque elit. Sed ut imperdiet nisi. Proin condimentum fermentum nunc. Etiam pharetra.</p>

                                    <p>Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet mauris. Morbi accumsan ipsum velit. Nam nec tellus a odio tincidunt auctor a ornare odio.</p> 

                                    <img src="{{asset('template/images/temp/about_img.jpg')}}" alt="Sky" class="content-image pull-left"> 

                                    <p>Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet mauris. Morbi accumsan ipsum velit. Nam nec tellus a odio tincidunt auctor a ornare odio. Sed non  mauris vitae erat consequat auctor eu in elit. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Mauris in erat justo. Nullam ac urna eu felis dapibus condimentum sit amet a augue. Sed non neque elit. Sed ut imperdiet nisi. Proin condimentum fermentum nunc. Etiam pharetra, erat sed fermentum feugiat, velit mauris egestas quam, ut aliquam massa nisl quis neque. Suspendisse in orci enim.</p>

                                    <p>Fusce imperdiet ornare risus, sit amet luctus augue sodales ac. Morbi nunc justo, fringilla in tempor at, fermentum a felis. Morbi non mollis libero, lobortis luctus erat. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Integer a dapibus nulla, ac condimentum ipsum. Nullam purus erat, interdum consectetur commodo eu, ullamcorper vitae ante. Duis ligula nulla, dignissim sed venenatis sit amet, vestibulum a erat. Nam ultricies leo vitae urna ullamcorper vestibulum.</p>

                                    <p>Morbi gravida metus sit amet mi interdum sodales. Phasellus mattis risus neque, id interdum odio consequat quis. Curabitur aliquet libero sed auctor rhoncus. Phasellus pulvinar venenatis sodales. Proin tincidunt suscipit erat, nec viverra magna volutpat sed.</p>

                                </div><!-- .section-content -->

                            </div><!-- .section-container -->
                            <!-- End: Main Page Content -->
                            </div><!-- .col-sm-12 -->

@stop
@section('gallery')
<!-- Gallery -->
                            <div id="sidebar-gallery" class="section-container sm-extra-top-padding clearfix">

                                <a href="#" class="section-header with-icon">
                                    <div class="icon"><span class="glyphicon glyphicon-picture"></span></div>
                                    <h5 class="text">Im&aacute;genes</h5>
                                </a><!-- .section-header -->

                                <div class="section-content clearfix">
                                    
                                    <div class="gallery-grid row clearfix">
                                        <div class="gallery-item col-xs-3">
                                            <a href="{{asset('template/images/temp/gallery/gallery-1.jpg')}}" class="img-mask-effect fade" data-lightbox="sidebar-gallery">
                                                <img src="{{asset('template/images/temp/gallery/gallery-thumb-1.jpg')}}" alt="Sunset lake">
                                                <i class="mask"><span class="glyphicon glyphicon-search"></span></i>
                                            </a>
                                        </div>
                                        <div class="gallery-item col-xs-3">
                                            <a href="{{asset('template/images/temp/gallery/gallery-2.jpg')}}" class="img-mask-effect fade" data-lightbox="sidebar-gallery">
                                                <img src="{{asset('template/images/temp/gallery/gallery-thumb-2.jpg')}}" alt="Lighthouse">
                                                <i class="mask"><span class="glyphicon glyphicon-search"></span></i>
                                            </a>
                                        </div>
                                        <div class="gallery-item col-xs-3">
                                            <a href="{{asset('template/images/temp/gallery/gallery-3.jpg')}}" class="img-mask-effect fade" data-lightbox="sidebar-gallery">
                                                <img src="{{asset('template/images/temp/gallery/gallery-thumb-3.jpg')}}" alt="Mountains">
                                                <i class="mask"><span class="glyphicon glyphicon-search"></span></i>
                                            </a>
                                        </div>
                                        <div class="gallery-item col-xs-3">
                                            <a href="{{asset('template/images/temp/gallery/gallery-4.jpg')}}" class="img-mask-effect fade" data-lightbox="sidebar-gallery">
                                                <img src="{{asset('template/images/temp/gallery/gallery-thumb-4.jpg')}}" alt="Green scenery">
                                                <i class="mask"><span class="glyphicon glyphicon-search"></span></i>
                                            </a>
                                        </div>
                                        <div class="gallery-item col-xs-3">
                                            <a href="{{asset('template/images/temp/gallery/gallery-5.jpg')}}" class="img-mask-effect fade" data-lightbox="sidebar-gallery">
                                                <img src="{{asset('template/images/temp/gallery/gallery-thumb-5.jpg')}}" alt="Sunset">
                                                <i class="mask"><span class="glyphicon glyphicon-search"></span></i>
                                            </a>
                                        </div>
                                        <div class="gallery-item col-xs-3">
                                            <a href="{{asset('template/images/temp/gallery/gallery-6.jpg')}}" class="img-mask-effect fade" data-lightbox="sidebar-gallery">
                                                <img src="{{asset('template/images/temp/gallery/gallery-thumb-6.jpg')}}" alt="Sunrise">
                                                <i class="mask"><span class="glyphicon glyphicon-search"></span></i>
                                            </a>
                                        </div>
                                        <div class="gallery-item col-xs-3">
                                            <a href="{{asset('template/images/temp/gallery/gallery-7.jpg')}}" class="img-mask-effect fade" data-lightbox="sidebar-gallery">
                                                <img src="{{asset('template/images/temp/gallery/gallery-thumb-7.jpg')}}" alt="Lighthouse">
                                                <i class="mask"><span class="glyphicon glyphicon-search"></span></i>
                                            </a>
                                        </div>
                                        <div class="gallery-item col-xs-3">
                                            <a href="{{asset('template/images/temp/gallery/gallery-8.jpg')}}" class="img-mask-effect fade" data-lightbox="sidebar-gallery">
                                                <img src="{{asset('template/images/temp/gallery/gallery-thumb-8.jpg')}}" alt="Sunrise lake">
                                                <i class="mask"><span class="glyphicon glyphicon-search"></span></i>
                                            </a>
                                        </div>
                                    </div><!-- .gallery-grid -->

                                </div><!-- .section-content -->

                            </div><!-- .section-container -->
                            <!-- End: Gallery -->
@stop