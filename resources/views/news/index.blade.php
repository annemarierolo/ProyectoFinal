@extends('layouts.app')

@section('title', 'Listado de Noticias')

@section('contenido')
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
                    <h5>Listado de Tareas</h5>
                </div>
                <div class="panel-body">
                    <a href="{{ url('/task/create') }}" class="btn btn-primary">Agregar Tarea</a>
                    <hr>
                    <table class="table table-bordered">
                        <tr>
                            <th width="85%">Nombre</th>
                            <th width="10" class="text-center">Acciones</th>
                        </tr>

                        @foreach($tasks as $task)
                            <tr>
                                <td>{{ $task->nombre }}</td>
                                <td>
                                    <table align="center">
                                        <tr>
                                            <td>
                                                <a href="{{ url('/task/'.$task->id."/edit") }}" class="btn btn-primary">
                                                    <span class="glyphicon glyphicon-pencil"></span>
                                                </a>
                                            </td>
                                            <td>
                                                <form action="{{ url('/task/'.$task->id) }}" method="post">
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
