<div class="form-group {{ $errors->has('images') ? 'has-error' : '' }}">
	<label for="images">Foto</label>
	<input type="file" class="form-control" id="images" name="images">

	 <!--@if($errors->has('images'))
	  	<span class="help-block">
	  		<strong>{{ $errors->first('images') }}</strong>
	  	</span>
	  @endif-->
</div>

<div class="form-group {{ $errors->has('destiny') ? 'has-error' : '' }}">
	<label for="destiny">Destino</label>
	<textarea type="text" class="form-control" id="destiny" name="destiny" 
	value="{{ $package->destiny or old('destiny') }}" 
	 placeholder="Agregar Destino"></textarea>

	<!-- @if($errors->has('sinopsis'))
	  	<span class="help-block">
	  		<strong>{{ $errors->first('sinopsis') }}</strong>
	  	</span>
	@endif -->
</div>

<div class="form-group">
	<label for="destiny_type">Tipo de Destino</label>
	<select name="destiny_type" id="destiny_type" class="form-control">
		<option value="false" selected>Seleccione</option>
		<option value="true">NACIONAL</option>
		<option value="true">INTERNACIONAL</option>
	</select>
</div>

<div class="form-group {{ $errors->has('ticket_price') ? 'has-error' : '' }}">
	<label for="ticket_price">Precio</label>
	<input type="text" class="form-control" id="ticket_price" name="ticket_price" 
	value="{{ $package->ticket_price or old('ticket_price') }}" 
	 placeholder="Agregar Precio">

	 <!--@if($errors->has('genero'))
	  	<span class="help-block">
	  		<strong>{{ $errors->first('genero') }}</strong>
	  	</span>
	  @endif -->
</div>
<div class="form-group {{ $errors->has('tickets_total') ? 'has-error' : '' }}">
	<label for="tickets_total">Total Tickets</label>
	<input type="text" class="form-control" id="tickets_total" name="tickets_total" 
	value="{{ $package->tickets_total or old('tickets_total') }}" 
	 placeholder="Agregar Total tickets">

	<!--@if($errors->has('escritor'))
	  	<span class="help-block">
	  		<strong>{{ $errors->first('escritor') }}</strong>
	  	</span>
	  @endif-->
</div>
<div class="form-group {{ $errors->has('valid_from') ? 'has-error' : '' }}">
	<label for="valid_from">Valido Desde</label>
	<input type="text" class="form-control" id="valid_from" name="valid_from" 
	value="{{ $package->valid_from or old('valid_from') }}" 
	 placeholder="Valido desde">

	 <!--@if($errors->has('director'))
	  	<span class="help-block">
	  		<strong>{{ $errors->first('director') }}</strong>
	  	</span>
	  @endif-->
</div>
<div class="form-group {{ $errors->has('valid_to') ? 'has-error' : '' }}">
	<label for="valid_to">Valido Hasta</label>
	<input type="text" class="form-control" id="valid_to" name="valid_to" 
	value="{{ $package->valid_to or old('valid_to') }}" 
	 placeholder="Valido Hasta">

	 <!--@if($errors->has('pais'))
	  	<span class="help-block">
	  		<strong>{{ $errors->first('pais') }}</strong>
	  	</span>
	  @endif-->
</div> 

<div class="form-group {{ $errors->has('content') ? 'has-error' : '' }}">
	<label for="content">Contenido</label>
	<input type="text" class="form-control" id="content" name="content" 
	value="{{ $package->content or old ('content') }}" 
	 placeholder="Agregar Contenido">

	 <!--@if($errors->has('duracion'))
	  	<span class="help-block">
	  		<strong>{{ $errors->first('duracion') }}</strong>
	  	</span>
	  @endif-->
</div> 