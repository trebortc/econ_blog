@extends('layouts.app')

@section('contenido')
<div class="container-fluid">
    <div class="row pt-5 pb-5">
        <div class="col-md-8 col-md-offset-2">
            <h3>Editar etiqueta</h3>
            <div class="panel-body">
                {!! Form::model($tag, ['route' => ['tags.update', $tag->id], 'method' => 'PUT']) !!}
                    
                    @include('admin.tags.partials.form')

                {!! Form::close() !!}
            </div>
        </div>
    </div>
</div>

@endsection
