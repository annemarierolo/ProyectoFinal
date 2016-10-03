@extends('layouts.app')

@section('title', 'Crear Paquete')

@section('content')
    <div class="row">
        <div class="col-md-6 col-md-offset-3 text-center">
        	<form action="{{ url('/paquetes/') }}" method="post" class="form-vertical" enctype="multipart/form-data">
            {!! method_field('POST') !!}
            {!! csrf_field() !!}
            	<div class="panel panel-primary">
        			<div class="panel-heading text-center">
        				<h5>Creando Paquetes</h5>
        			</div>
  					<div class="panel-body">
                @include('paquetes.partials.form')
  					</div>
  					<div class="panel-footer text-center">
  					   <button type="submit" class="btn btn-primary glyphicon glyphicon-floppy-disk">Crear</button>
  					</div>
				    </div>
			   </form>
      </div>
    </div>
@endsection