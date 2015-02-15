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

                                    <h4>Cristo de la Expiraci&oacute;n</h4>

                                    <p><span>El Sant&iacute;simo Cristo de la Expiraci&oacute;n</span> es  una talla de estilo manierista realizada en pasta de madera. Su  autor  es Marcos de Cabrera el cual realiz&oacute; la talla en el a&ntilde;o 1575.</p>
									<p>Se conoce que la hermandad concert&oacute; con dicho  escultor la  realizaci&oacute;n de la obra el 7 de diciembre de 1575,  concert&aacute;ndose la  entrega del crucificado para el d&iacute;a de Pascua de  Navidad de ese mismo  a&ntilde;o.</p>
									<p>Entre las muchas leyendas que hay sobre la hechura  del crucificado,  resalta aquella que dice, que aquellos hermanos que  acordaron con  Marcos de Cabrera la realizaci&oacute;n del cristo expirante, lo  hicieron con  la condici&oacute;n de que si la obra era del gusto de aquellos,  los moldes  con los que se hab&iacute;a realizado la imagen deb&iacute;an de arrojarse  al r&iacute;o  Guadalquivir, para as&iacute; impedir que tal magn&iacute;fica obra no pudiera  ser  duplicada.</p>
									<p>Se comenta que el autor pudo inspirarse en unos  bocetos del gran  Miguel &aacute;ngel, siguiendo la l&iacute;nea serpentinatta. La  talla rompe  bruscamente con los c&aacute;nones escult&oacute;ricos de la &eacute;poca, en que   predominaban los g&oacute;ticos. La propiedad de ese divino simulacro es   mucha. Los m&uacute;sculos violentamente contra&iacute;dos, el semblante p&aacute;lido, la   vista quebrada y los labios entreabiertos, todo indica el momento en que   el Salvador del mundo dio el &uacute;ltimo aliento con tanta expresi&oacute;n y   naturalidad, que no se puede observar sin  estremecerse,  principalmente si se mira desde alto creyendo ver un  hombre espirar  (Glorias Religiosas de Sevilla. Jos&eacute; Bermejo y  Carballo).</p>
									<p>Entre las restauraciones conocidas, destacan la de  1895 de Manuel  Guti&eacute;rrez Cano Reyes, que le realiz&oacute; el actual  sudario de telas  encoladas sustituyendo as&iacute; el primitivo, una pieza de  lino que se le  ajustaba a la cintura, adem&aacute;s le a&ntilde;adi&oacute; la corona de  espinas. Pel&aacute;ez  del Espino restaur&oacute; en 1978 su estructura con elementos  met&aacute;licos entre  otros materiales. En 1991 los hermanos Cruz Sol&iacute;s en el  Instituto de  Conservaci&oacute;n y Restauraci&oacute;n restauraron la policrom&iacute;a del  crucificado  pues se encontraba muy ennegrecida. La cruz actual, obra de  Francisco  Berlanga en 1993, es arb&oacute;rea aunque posiblemente en sus  or&iacute;genes el  crucificado la llevara plana.</p>
                                    
                                    <h4>Virgen de las Aguas</h4>
                                    
                                    <p><span>Mar&iacute;a Sant&iacute;sima de las Aguas</span> es obra del  escultor Crist&oacute;bal Ramos (1772), imagen de candelero que  fue concebida para ir arrodillada delante del Cristo con las manos  entrelazadas, con la posici&oacute;n conocida como el Stabat Mater, formando as&iacute; parte del &uacute;nico  paso que pose&iacute;a la hermandad; seg&uacute;n Bermejo y Carballo en su obra  Glorias Religiosas de Sevilla, <em>...una de las buenas de esta ciudad; ostent&aacute;ndose la Se&ntilde;ora arrodillada, con las  manos cruzadas sobre el pecho, y los ojos fijos en el cielo, en una  actitud espresiva y  devota</em>.</p>
									<p>El rostro de la dolorosa est&aacute; realizado en terracota, es la &uacute;nica Virgen dolorosa sevillana de dicha materia que sale en procesi&oacute;n durante la Semana Santa. A lo largo de la historia, se le han realizado varias restauraciones, en 1829 se le realiz&oacute; la m&aacute;s significativa trastoc&aacute;ndose su posici&oacute;n primitiva de dolorosa arrodillada y estar erguida, y con las manos separadas.</p>
									<p>En 1880 fue restaurada por Manuel Guti&eacute;rrez Cano  Reyes que retoc&oacute; la  imagen y la someti&oacute; a una limpieza en la policrom&iacute;a. En el a&ntilde;o 1922 el escultor Infantes Reina tall&oacute; en madera el actual juego de manos. En 1962 se le realiza nuevo candelero obra de Sebasti&aacute;n Santos Rojas, el cual modifica la posici&oacute;n del cuerpo vari&aacute;ndole su inclinaci&oacute;n. La  &uacute;ltima restauraci&oacute;n fue realizada en el a&ntilde;o 2000 por Francisco Berlanga.</p>
                                    
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