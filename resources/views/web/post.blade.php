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
                    @if($post->status == 'DRAFT')
                        <div class="text-center">
                            <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                                <div class="carousel-inner">
                                    <div class="carousel-item active">
                                        @if($post->file1)
                                            <img class="d-block w-100 img-fluid" src="{{ $post->file1 }}" alt="Primera Imagen">
                                        @endif
                                    </div>
                                    <div class="carousel-item">
                                        @if($post->file2)
                                            <img class="d-block w-100" src="{{ $post->file2 }}" alt="Segunda imagen">
                                        @endif
                                    </div>
                                    <div class="carousel-item">
                                        @if($post->file3)
                                            <img class="d-block w-100" src="{{ $post->file3 }}" alt="Tercera imagen">
                                        @endif
                                    </div>
                                    <div class="carousel-item">
                                        @if($post->file4)
                                            <img class="d-block w-100" src="{{ $post->file4 }}" alt="Cuarta imagen">
                                        @endif
                                    </div>
                                </div>
                                <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                    <span class="sr-only">Previous</span>
                                </a>
                                <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                    <span class="sr-only">Next</span>
                                </a>
                            </div>
                        </div>
                    @else
                        @if($post->file)
                            <div class="text-center">
                                <img src="{{ $post->file }}" class="img-responsive">
                            </div>
                        @endif
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