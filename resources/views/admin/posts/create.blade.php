@extends('layouts.app')

@section('contenido')
<div class="container-fluid">
    <div class="row pt-5 pb-5">
        <div class="col-md-8 col-md-offset-2">
            <h3>Crear entrada</h3>
            <div class="panel-body">
                {!! Form::open(['route' => 'posts.store', 'files' => true]) !!}
                    
                    @include('admin.posts.partials.form')

                {!! Form::close() !!}
            </div>
        </div>
    </div>
</div>
@endsection
