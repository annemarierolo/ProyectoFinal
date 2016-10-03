@extends('layouts.app')

@section('title', 'Editar Paquete')

@section('content')
    <div class="row">
        <div class="col-md-6 col-md-offset-3">
        	<form action="{{ url('/paquetes/'.$package->id)}}" method="post" class="form-vertical">
        		{!! method_field('PUT') !!}
        		{!! csrf_field() !!}
            	<div class="panel panel-primary">
        			<div class="panel-heading text-center">
        				<h5>Editando Paquetes</h5>
        			</div>
  					<div class="panel-footer text-center">
              @include('paquetes.partials.form')
              <input type="text" id="foto_original" name="foto_original" value="{{ $package->foto }}">
  						<button type="submit" class="btn btn-primary glyphicon glyphicon-floppy-disk">Guardar</button>
  					</div>
				</div>
			</form>
        </div>
    </div>
@endsection