@extends('layouts.app')

@section('contenido')
<div class="container-fluid">
    <div class="row pt-5 pb-5">
        <div class="col-8 offset-2">
        	<h1>{{ $post->name }}</h1>
                <h6>
                    Categoría 
                    <a href="{{ route('category', $post->category->slug) }}">
                        {{ $post->category->name }}
                    </a>
                </h6>
                <hr>
                    @if($post->file)
                        <div class="text-center">
                            <img src="{{ $post->file }}" class="img-responsive">
                        </div>
                    @endif
                    <hr>
                        {{ $post->excerpt }}
                    <hr>
                        <p class="text-justify">{!! $post->body !!}</p>
                    <hr>
                    Etiquetas
                    @foreach($post->tags as $tag)
                    <a href="{{ route('tag', $tag->slug) }}">
                        {{ $tag->name }}
                    </a>
                    @endforeach
                
        </div>
    </div>
</div>
@endsection