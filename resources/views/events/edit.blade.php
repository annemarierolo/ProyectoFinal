@extends('layouts.app')

@section('title', 'Editar Evento')

@section('content')
    <div class="row">
        <div class="col-md-6 col-md-offset-3">
        	<form action="{{ url('/paquetes/'.$package->id)}}" method="post" class="form-vertical">
        		{!! method_field('PUT') !!}
        		{!! csrf_field() !!}
            	<div class="panel panel-primary">
        			<div class="panel-heading text-center">
        				<h5>Editando Eventos</h5>
        			</div>
  					<div class="panel-footer text-center">
              @include('events.partials.form')
              <input type="text" id="foto_original" name="foto_original" value="{{ $package->foto }}">
  						<button type="submit" class="btn btn-primary glyphicon glyphicon-floppy-disk">Guardar</button>
  					</div>
				</div>
			</form>
        </div>
    </div>
@endsection