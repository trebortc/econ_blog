@extends('layouts.app')

@section('contenido')
<div class="container-fluid">
    <div class="row pt-5 pb-5">
        <div class="col-md-8 col-md-offset-2">
            <h3>Editar categoría</h3>
            <div class="panel-body">
                {!! Form::model($category, ['route' => ['categories.update', $category->id], 'method' => 'PUT']) !!}
                    
                    @include('admin.categories.partials.form')

                {!! Form::close() !!}
            </div>
            </div>
        </div>
    </div>
</div>
@endsection
