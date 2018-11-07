@extends('layouts.app')

@section('contenido')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-8 col-md-offset-2 pt-5 pb-5">
            <h3 class="panel-heading">
                Lista de Etiquetas 
                <a href="{{ route('tags.create') }}" class="pull-right btn btn-sm btn-primary">
                    Crear
                </a>
            </h3>
            <div class="panel-body">

                <table class="table table-striped table-hover">
                    <thead>
                        <tr>
                            <th width="10px">ID</th>
                            <th>Nombre</th>
                            <th colspan="3">&nbsp;</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($tags as $tag)
                        <tr>
                            <td>{{ $tag->id }}</td>
                            <td>{{ $tag->name }}</td>
                            <td width="10px">
                                <a href="{{ route('tags.show', $tag->id) }}" class="btn btn-sm btn-default">Ver</a>
                            </td>
                            <td width="10px">
                                <a href="{{ route('tags.edit', $tag->id) }}" class="btn btn-sm btn-default">Editar</a>
                            </td>
                            <td width="10px">
                                {!! Form::open(['route' => ['tags.destroy', $tag->id], 'method' => 'DELETE']) !!}
                                    <button class="btn btn-sm btn-danger">
                                        Eliminar
                                    </button>                           
                                {!! Form::close() !!}
                            </td>
                        </tr>
                        @endforeach
                    </tbody>   
                </table>     	

                {{ $tags->render() }}
            </div>
        </div>
    </div>
</div>
@endsection
