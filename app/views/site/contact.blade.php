@extends('site.layouts.default')
{{-- Web site Title --}}
@section('title')
Contacto
@parent
@stop

{{-- Content --}}
@section('content')


<!-- =========== Page Body Inside Content =========== -->
            <div class="inside-body-content-container clearfix">

				<!-- =========== Section 3: Google Maps =========== -->
                <div id="contact-map" class="container-fluid horizontal-section-container clearfix">
                    
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d792.4723530705886!2d-5.999790878087731!3d37.39244748514114!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd126c0ddb2031bb%3A0x6d6a5b107206cfe5!2sHermandad+del+Museo!5e0!3m2!1ses!2ses!4v1421583014509" width="800" height="600" style="border:0"></iframe>
                </div>
                <!-- End: Section 3 -->
                
                

                <!-- =========== Section 2 =========== -->
                <div class="container-fluid horizontal-section-container clearfix">
                    <div class="row">

                        <div class="col-sm-12">
                            <!-- Main Page Content -->
                            <div id="main-page-content" class="section-container main-page-content clearfix">

                                <div class="section-content clearfix">

                                    <h1 class="page_title">Contact</h1>

                                    <!-- contact content -->
                                    <div class="row clearfix">

                                        <!-- contact details -->
                                        <div class="col-sm-6">
                                            
                                            <!-- Contact Details -->
                                            <h6>Duis eros eros, feugiat et metus non, condimentum cursus nisi. Donec nec metus ante. Sed quis nibh egestas.</h6>

                                            <ul class="vertical-simple-list contact-list">
                                                
                                                <!-- list item -->
                                                <li class="item clearfix"><div class="item-content">
                                                    <div class="icon"><span class="glyphicon glyphicon-map-marker"></span></div>
                                                    <h6 class="title">TWILLI Sky, Independence Avenue, Sliema,<br/>SLM 2609 Malta</h6>
                                                </div></li>

                                                <!-- list item -->
                                                <li class="item clearfix"><div class="item-content">
                                                    <div class="icon"><span class="glyphicon glyphicon-earphone"></span></div>
                                                    <h6 class="title">(+356) 21301001</h6>
                                                </div></li>

                                                <!-- list item -->
                                                <li class="item clearfix"><div class="item-content">
                                                    <div class="icon"><span class="glyphicon glyphicon-envelope"></span></div>
                                                    <h6 class="title"><a href="#">info@twillisky.com</a></h6>
                                                </div></li>

                                                <!-- list item -->
                                                <li class="item clearfix"><div class="item-content">
                                                    <div class="icon"><span class="fa fa-clock-o"></span></div>
                                                    <h6 class="title">
                                                        <strong>Opening Hours:</strong><br/>
                                                        Monday to Saturday: 9am - 6pm<br/>
                                                        Sunday: Closed
                                                    </h6>
                                                </div></li>

                                            </ul><!-- .vertical-simple-list --> 

                                            <hr/>        

                                            <ul class="social-media-icons clearfix">
                                                <li><a href="#" target="_blank" title="Facebok"><i class="fa fa-facebook"></i></a></li>
                                                <li><a href="#" target="_blank" title="Twitter"><i class="fa fa-twitter"></i></a></li>
                                                <li><a href="#" target="_blank" title="Google+"><i class="fa fa-google-plus"></i></a></li>
                                            </ul>

                                        </div><!-- .col-sm-6 -->

                                        <!-- contact form -->
                                        <div class="col-sm-6">

                                            <div id="contact-form-container" class="clearfix">
                                                <form role="form" class="validate-form clearfix" action="php/mail.php" method="POST">
                                                  <div class="form-group">
                                                    <label for="form-name">Name</label>
                                                    <input type="text" class="form-control validate-field required" data-validation-type="string" id="form-name" name="name" placeholder="Enter name">
                                                  </div>
                                                  <div class="form-group">
                                                    <label for="form-email">Email address</label>
                                                    <input type="email" class="form-control validate-field required" data-validation-type="email" id="form-email" name="email" placeholder="Enter email">
                                                  </div>
                                                  <div class="form-group">
                                                    <label for="form-contact-number">Contact Number</label>
                                                    <input type="tel" class="form-control validate-field" data-validation-type="phone" id="form-contact-number" name="contact_number" placeholder="Enter contact number">
                                                  </div>
                                                  <div class="form-group">
                                                    <label for="form-contact-message">Message</label>
                                                    <textarea class="form-control message-textarea-height large validate-field required" id="form-contact-message" name="message" placeholder="Enter message"></textarea>
                                                  </div>
                                                  <div id="form-captcha-container" class="form-group">
                                                    <label for="form-captcha">Solve the following equation:</label>
                                                    <div class="row">
                                                        <div class="col-xs-3 col-sm-3">
                                                            <img id="form-captcha-img" class="img-responsive" src="php/form_captcha/captcha_img.php">
                                                        </div>
                                                        <div class="col-xs-7 col-sm-8">
                                                            <input type="text" class="text-field form-control validate-field required" data-validation-type="captcha" id="form-captcha" placeholder="Enter result" name="captcha">
                                                        </div>
                                                        <div class="col-xs-2 col-sm-1">
                                                            <span id="form-captcha-refresh" class="fa fa-refresh" title="Reload"></span>
                                                        </div>
                                                    </div>
                                                  </div><!-- #form-captcha-container -->
                                                  <button type="submit" class="btn btn-outline-inverse btn-lg">Submit</button>
                                                  <i class="form-loader fa fa-spinner fa-spin"></i>
                                                  <div class="form-group form-general-error-container"></div>
                                                </form>
                                            </div><!-- #contact-form-container -->

                                        </div><!-- .col-sm-6 -->

                                    </div>
                                    <!-- end: contact content -->

                                </div><!-- .section-content -->

                            </div><!-- .section-container -->
                            <!-- End: Main Page Content -->
                        </div><!-- .col-sm-12 -->

                    </div><!-- .row -->
                </div><!-- .container-fluid -->
                <!-- End: Section 2 -->

                


                
            </div><!-- .inside-body-content-container -->
            <!-- End: Page Body Inside Content -->





@stop
