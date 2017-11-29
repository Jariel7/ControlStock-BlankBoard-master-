@extends('layouts.admin')

@section('title', config('app.name', 'Laravel') . ' - ' .  __($name . '.title'))

@section('content')
<!-- Content header (Page header) -->
    @include('includes.content-header', ['name' => $name, 'before' => [['name' => __('messages.admin-site'), 'route' => 'admin'], __($name . '.parent')], 'after' => [__('messages.new')]])
    
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Crear nuevo articulo</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('articles.index') }}"> Atras</a>
            </div>
        </div>
    </div>


    {!! Form::open(array('route' => 'articles.store','method'=>'POST')) !!}
         @include('articles.form')
    {!! Form::close() !!}

@endsection