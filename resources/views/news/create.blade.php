@extends('layouts.app')


@section('content')
    <div class="col-sm-8 col-sm-offset-2">

        <form class="form-horizontal" role="form" method="post" action="{{ url('news/') }}"
              enctype="multipart/form-data">
            {!! method_field('POST') !!}
            {!! csrf_field() !!}

            @include('news.partials.form')
            <div class="form-group">
                <div class="col-md-8 col-md-offset-2 text-center">
                    <button type="submit" class="btn btn-primary">
                        <span class="glyphicon glyphicon-floppy-disk"></span> Guardar
                    </button>
                </div>
            </div>
        </form>

    </div> <!-- /.blog-main -->
@endsection