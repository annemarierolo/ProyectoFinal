@extends('layouts.app')
@section('title', 'Tio Ven :: Noticias')
@section('content')
    @if(session('mensaje'))
        <div class="alert alert-success alert-dismissible" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span></button>
            <strong>Exito!</strong> {{ session('mensaje') }}
        </div>
    @endif
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-primary">
                <div class="panel-heading text-center">
                    <h5>Listado de Noticias</h5>
                </div>
                <div class="panel-body">
                    <a href="{{ url('/news/create') }}" class="btn btn-primary">Agregar Noticia</a>
                    <hr>
                    <table class="table table-bordered">
                        <tr>
                            <th width="85%">Nombre</th>
                            <th width="10" class="text-center">Acciones</th>
                        </tr>

                        @foreach($news as $noticia)
                        <tr>
                            <td>{{ $noticia->nombre }}</td>
                            <td>
                                <table align="center">
                                    <tr>
                                        <td>
                                            <a href="{{ url('/news/'.$noticia->id."/edit") }}" class="btn btn-primary">
                                                <span class="glyphicon glyphicon-pencil"></span>
                                            </a>
                                        </td>
                                        <td>
                                            <form action="{{ url('/news/'.$noticia->id) }}" method="post">
                                                {!! method_field('DELETE') !!}
                                                {!! csrf_field() !!}
                                                <button class="btn btn-danger">
                                                    <span class="glyphicon glyphicon-trash"></span>
                                                </button>
                                            </form>
                                        </td>
                                    </tr>
                                </table>
                            </td>
                        </tr>
                        @endforeach

                    </table>
                </div>
                <div class="panel-footer text-center">
                    {{ $tasks->appends(['n'=>$n])->links() }}
                </div>
            </div>
        </div>
    </div>
@endsection
