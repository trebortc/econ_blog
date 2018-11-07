@extends('layouts.app')

@section('contenido')
<div class="container">
    <div class="row pt-5 pb-5">
        <div class="col-md-8 col-md-offset-2">
            <h3>Editar entrada</h3>
            <div class="panel-body">
                {!! Form::model($post, ['route' => ['posts.update', $post->id], 'method' => 'PUT']) !!}
                    @include('admin.posts.partials.form')
                {!! Form::close() !!}
            </div>
        </div>
    </div>
</div>
@endsection
