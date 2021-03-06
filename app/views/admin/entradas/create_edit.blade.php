@extends('admin.layouts.modal')

{{-- content --}}
@section('content')
	<!-- Tabs -->
		<ul class="nav nav-tabs">
			<li class="active"><a href="#tab-general" data-toggle="tab">General</a></li>
		</ul>
	<!-- ./ tabs -->

	{{-- Edit entrada Form --}}
	<form class="form-horizontal" method="post" action="@if (isset($entrada)){{ URL::to('admin/entradas/' . $entrada->id . '/edit') }}@endif" autocomplete="off">
		<!-- CSRF Token -->
		<input type="hidden" name="_token" value="{{{ csrf_token() }}}" />
		<!-- ./ csrf token -->

		<!-- Tabs contenido -->
		<div class="tab-content">
			<!-- General tab -->
			<div class="tab-pane active" id="tab-general">
				<!-- entrada titulo -->
				<div class="form-group {{{ $errors->has('titulo') ? 'error' : '' }}}">
                    <div class="col-md-12">
                        <label class="control-label" for="titulo">Titulo</label>
						<input class="form-control" type="text" name="titulo" id="titulo" value="{{{ Input::old('titulo', isset($entrada) ? $entrada->titulo : null) }}}" />
						{{ $errors->first('titulo', '<span class="help-block">:message</span>') }}
					</div>
				</div>
				<!-- ./ entrada titulo -->

				<!-- entrada subtitulo -->
				<div class="form-group {{{ $errors->has('subtitulo') ? 'error' : '' }}}">
                    <div class="col-md-12">
                        <label class="control-label" for="subtitulo">Subtitulo</label>
						<input class="form-control" type="text" name="subtitulo" id="subtitulo" value="{{{ Input::old('subtitulo', isset($entrada) ? $entrada->subtitulo : null) }}}" />
						{{ $errors->first('subtitulo', '<span class="help-block">:message</span>') }}
					</div>
				</div>
				<!-- ./ entrada titulo -->
				<!-- categoria -->
				<div class="form-group {{{ $errors->has('categoria') ? 'error' : '' }}}">
                    <div class="col-md-12">
                        <label class="control-label" for="categoria">Categoria</label>
						<input class="form-control" type="text" name="categoria" id="categoria" value="{{{ Input::old('categoria', isset($entrada) ? $entrada->categoria : null) }}}" />
						{{ $errors->first('categoria', '<span class="help-block">:message</span>') }}
					</div>
				</div>
				<!-- contenido -->
				<div class="form-group {{{ $errors->has('contenido') ? 'has-error' : '' }}}">
					<div class="col-md-12">
                        <label class="control-label" for="contenido">Contenio</label>
						<textarea class="form-control full-width wysihtml5" name="contenido" value="contenido" rows="10">{{{ Input::old('contenido', isset($entrada) ? $entrada->contenido : null) }}}</textarea>
						{{ $errors->first('contenido', '<span class="help-block">:message</span>') }}
					</div>
				</div>
				<!-- ./ contenido -->
				<!-- Url -->
				<div class="form-group {{{ $errors->has('urls') ? 'error' : '' }}}">
	                <label class="col-md-2 control-label" for="roles">Urls</label>
	                <div class="col-md-6">
	                
		                <select class="form-control" name="urls[]" id="urls[]" multiple>
		                        @foreach ($urls as $url)
									<option value="{{{ $url->id }}}">{{{ $url->nombre }}}</option>
		                        @endforeach
						</select>

					
	            	</div>
				</div>
				<!-- ./ groups -->
			</div>
			<!-- ./ general tab -->

			
		</div>
		<!-- ./ tabs contenido -->

		<!-- Form Actions -->
		<div class="form-group">
			<div class="col-md-12">
				<element class="btn-cancel close_popup">Cancel</element>
				<button type="reset" class="btn btn-default">Reset</button>
				<button type="submit" class="btn btn-success">Update</button>
			</div>
		</div>
		<!-- ./ form actions -->
	</form>
	<div class="wrapper">
    <div id="dropzone">
        {{ Form::open(array('url' => 'upload', 'class'=>'dropzone', 'id'=>'my-dropzone')) }}
        <!-- Single file upload 
        <div class="dz-default dz-message"><span>Drop files here to upload</span></div>
        -->
        <!-- Multiple file upload-->
       
        <div class="fallback">
            <input name="file" type="file" multiple />
        </div>
        
        {{ Form::close() }}
    </div>
	</div>
@stop
@section('styles')
<!-- 1 -->
<link href="{{asset('assets/css/dropzone.css')}}" type="text/css" rel="stylesheet" />
@stop
{{-- Scripts --}}
@section('scripts')

 
	<script src="{{asset('assets/js/dropzone.js')}}"></script>
	
	<script type="text/javascript">
	//myDropzone is the configuration for the element that has an id attribute
	// with the value my-dropzone (or myDropzone)
	Dropzone.options.myDropzone = {
	  init: function() {
	    this.on("addedfile", function(file) {
	
	      var removeButton = Dropzone.createElement('<a class="dz-remove">Remove file</a>');
	      var _this = this;
		  file.name = new Date().getTime();
	      removeButton.addEventListener("click", function(e) {
	        e.preventDefault();
	        e.stopPropagation();
	
	         var fileInfo = new Array();
	         fileInfo['name']=file.name;
	
	          $.ajax({
	              type: "POST",
	              url: "{{ url('/delete-image') }}",
	              data: {file: file.name},
	              beforeSend: function () {
	                  // before send
	              },
	              success: function (response) {
	             
	                  if (response == 'success')
	                     alert('deleted');
	              },
	              error: function () {
	                  alert("error");
	              }
	          });
	
	
	        _this.removeFile(file);
	
	        // If you want to the delete the file on the server as well,
	        // you can do the AJAX request here.
	      });
	
	
	      // Add the button to the file preview element.
	      file.previewElement.appendChild(removeButton);
	    });
	  }
	};
	</script>
@stop
