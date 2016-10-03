
<!--//////// TITULO ////////-->
<div class="form-group {{ $errors->has('tittle') ? ' has-error' : '' }}">

	<label for="tittle"><strong>Titulo:</strong></label>
	<input type="text" class="form-control" id="tittle" name="tittle" placeholder="Titulo"
		   value="{{ $news->tittle or old('tittle') }}">
	@if($errors->has('tittle'))
		<span class="help-block">
            <strong>{{ $errors->first('tittle') }}</strong>
        </span>
	@endif
</div>

<!--//////// RESUMEN ////////-->
<div class="form-group {{ $errors->has('summary') ? ' has-error' : '' }}">

	<label for="summary"><strong>Resumen:</strong></label>
	<input type="text" class="form-control" id="summary" name="summary" placeholder="Resumen"
		   value="{{ $news->summary or old('summary') }}">
	@if($errors->has('summary'))
		<span class="help-block">
            <strong>{{ $errors->first('summary') }}</strong>
        </span>
	@endif
</div>

<!--//////// CONTENIDO ////////-->
<div class="form-group {{ $errors->has('content') ? ' has-error' : '' }}">

	<label for="content"><strong>Contenido:</strong></label>
	<input type="text" class="form-control" id="content" name="content" placeholder="Contenido"
		   value="{{ $news->content or old('content') }}">
	@if($errors->has('content'))
		<span class="help-block">
            <strong>{{ $errors->first('content') }}</strong>
        </span>
	@endif
</div>

<!--//////// IMAGEN ////////-->
<div class="form-group {{ $errors->has('images') ? 'has-error' : '' }}">
	<label for="images">Foto</label>
	<input type="file" class="form-control" id="images" name="images">

	 @if($errors->has('images'))
	  	<span class="help-block">
	  		<strong>{{ $errors->first('images') }}</strong>
	  	</span>
	  @endif
</div>

<!--//////// FECHA ////////-->
<div class="form-group {{ $errors->has('date') ? ' has-error' : '' }}">

	<label for="date"><strong>Fecha:</strong></label>
	<input type="text" class="form-control" id="date" name="date" placeholder="Fecha"
		   value="{{ $news->date or old('date') }}">
	@if($errors->has('content'))
		<span class="help-block">
            <strong>{{ $errors->first('content') }}</strong>
        </span>
	@endif
</div>
