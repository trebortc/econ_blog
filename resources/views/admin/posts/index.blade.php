@extends('layouts.app')

@section('contenido')
<div class="container">
    <div class="row pt-5 pb-5">
        <div class="col-md-8 col-md-offset-2">
            <h3>Lista de Entradas 
                <a href="{{ route('posts.create') }}" class="pull-right btn btn-sm btn-primary">
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
                        @foreach($posts as $post)
                        <tr>
                            <td>{{ $post->id }}</td>
                            <td>{{ $post->name }}</td>
                            <td width="10px">
                                <a href="{{ route('posts.show', $post->id) }}" class="btn btn-sm btn-default">Ver</a>
                            </td>
                            <td width="10px">
                                <a href="{{ route('posts.edit', $post->id) }}" class="btn btn-sm btn-default">Editar</a>
                            </td>
                            <td width="10px">
                                {!! Form::open(['route' => ['posts.destroy', $post->id], 'method' => 'DELETE']) !!}
                                    <button class="btn btn-sm btn-danger">
                                        Eliminar
                                    </button>                           
                                {!! Form::close() !!}
                            </td>
                        </tr>
                        @endforeach
                    </tbody>   
                </table>     	

                {{ $posts->render() }}
            </div>
        </div>
    </div>
</div>
@endsection
