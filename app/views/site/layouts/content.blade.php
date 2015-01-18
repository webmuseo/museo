@extends('site.layouts.default')
{{-- Web site Title --}}
@section('title')
Contacto
@parent
@stop

{{-- Content --}}
{{-- Content --}}
@section('content')
<!-- =========== Page Body Inside Content =========== -->
            <div class="inside-body-content-container clearfix">

                <!-- End: Section: Breadcrumbs -->

                <!-- =========== Section 2 =========== -->
                <div class="container-fluid horizontal-section-container clearfix">
                    <div class="row">

                        <div class="col-sm-8">
                            <!-- Main Page Content -->
                            <div id="main-page-content" class="section-container main-page-content clearfix">

                                <!-- Content -->
								@yield('content-left')
								<!-- ./ content -->

                            </div><!-- .section-container -->
                            <!-- End: Main Page Content -->
                        </div><!-- .col-sm-8 -->

                        <div class="col-sm-4">

                            <!-- Gallery -->
                            @yield('gallery')
                            
                            
                            
                            <!-- Latest News -->
                            <div id="sidebar-news" class="section-container clearfix">

                                <a href="news-date.html" class="section-header with-icon">
                                    <div class="icon"><span class="glyphicon glyphicon-bullhorn"></span></div>
                                    <h5 class="text">&Uacute;ltimas Noticias</h5>
                                </a><!-- .section-header -->

                                <div class="section-content clearfix">
                                    <ul class="vertical-simple-list w-dates">
                                        
                                        <!-- list item -->
                                        <li class="item clearfix"><div class="item-content">
                                            <div class="date">
                                                <div class="day">15</div>
                                                <div class="month">Apr</div>
                                            </div>
                                            <h6 class="title"><a href="#">Proin gravida nibh vel velit auctor aliquets ollic</a></h6>
                                        </div></li>

                                        <!-- list item -->
                                        <li class="item clearfix"><div class="item-content">
                                            <div class="date">
                                                <div class="day">10</div>
                                                <div class="month">Apr</div>
                                            </div>
                                            <h6 class="title"><a href="#">Vel velit auctor ipsua liquets ollic</a></h6>
                                        </div></li>

                                        <!-- list item -->
                                        <li class="item clearfix"><div class="item-content">
                                            <div class="date">
                                                <div class="day">6</div>
                                                <div class="month">Apr</div>
                                            </div>
                                            <h6 class="title"><a href="#">Lore gravida nibh vel velit auctor aliquets ollic</a></h6>
                                        </div></li>

                                        <!-- list item -->
                                        <li class="item clearfix"><div class="item-content">
                                            <div class="date">
                                                <div class="day">27</div>
                                                <div class="month">Mar</div>
                                            </div>
                                            <h6 class="title"><a href="#">Gravida nibh vel velit auctor aliquets ollic</a></h6>
                                        </div></li>

                                    </ul><!-- .vertical-simple-list -->
                                </div><!-- .section-content -->

                            </div><!-- .section-container -->
                            <!-- End: Latest News -->
							
							<div id="sidebar-news" class="section-container clearfix">
							<a class="twitter-timeline" href="https://twitter.com/Hdad_Museo" data-widget-id="556766552398528512">Tweets por el @Hdad_Museo.</a>
							<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
							</div>
							
                        </div><!-- .col-sm-4 -->

                    </div><!-- .row -->
                </div><!-- .container-fluid -->
                <!-- End: Section 2 -->

@stop