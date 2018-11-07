@extends('layouts.app')

@section('contenido')
<div class="container">
    <div class="row pt-5 pb-5">
        <div class="col-md-8 col-md-offset-2">
        	<h1>Lista de artículos</h1>
        	@foreach($posts as $post)
            <div class="panel panel-default">
                <h5>{{ $post->name }}</h5>

                <div class="panel-body">
                    @if($post->file)
                        <img src="{{ $post->file }}" class="img-responsive">
                    @endif
                    <hr>
                    {{ $post->excerpt }}
                    <hr>
                    <a href="{{ route('post', $post->slug) }}" class="pull-right">Leer más</a>
                </div>
            </div>
            @endforeach

            {{ $posts->render() }}
        </div>
    </div>
</div>
@endsection
