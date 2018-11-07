@extends('layouts.app')

@section('contenido')
<div class="container-fluid">
    <div class="row pt-5 pb-5">
        <div class="col-md-8 col-md-offset-2">
            <h3>Ver etiqueta</h3>
            <div class="panel-body">
                <p><strong>Nombre</strong> {{ $tag->name }}</p>
                <p><strong>Slug</strong> {{ $tag->slug }}</p>
            </div>
        </div>
    </div>
</div>
@endsection
