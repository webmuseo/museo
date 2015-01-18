@extends('site.layouts.content')
{{-- Web site Title --}}
@section('title')
Juventud
@parent
@stop

{{-- Content --}}
@section('content-left')

<div class="col-sm-12">
<!-- Main Page Content -->
<div id="main-page-content" class="section-container main-page-content clearfix">

		<div class="section-content clearfix">

		<h1 class="page_title">Juventud</h1>

				<p>
				La Hermandad cuenta con un nutrido grupo de hermanos que conforman el grupo joven con edades comprendidas entre los 12 y 20 a&ntilde;os.
				&Eacute;stos realizan reuniones quincenales, donde se organizan las actividades a realizar, ya que est&aacute;n implicados en todas las diputaciones
				de la Hermandad en las que colaboran activamente: Caridad, Priost&iacute;a, Secretar&iacute;a, etc.</p>

				<p>
				Para los m&aacute;s peque&ntilde;os se organizan talleres infantiles donde realizan manualidades y juegos relacionados con el tiempo lit&uacute;rgico.
				</p>
				
				<img src="{{asset('template/images/design/juventud.jpg')}}" alt="Juventud El Museo" style="width:100%;">
				
				</p>

				</div><!-- .section-content -->

				</div><!-- .section-container -->
				<!-- End: Main Page Content -->
				</div><!-- .col-sm-12 -->

@stop
				