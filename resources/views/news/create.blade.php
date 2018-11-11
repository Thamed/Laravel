@extends('default')

@section('content')
<div class="container-fluid mb-5">
    <div class="row mx-0">
        {!! Form::open(
            array(
                'action' => 'NewsController\NewsController@post', 
                'class' => 'form', 
                'novalidate' => 'novalidate', 
                'enctype' => 'multipart/form-data')) !!}
        @csrf
        <div class="form-group col-md-8 col-lg-8 col-sm-12">
            {{Form::label('headline', 'Nagłówek')}}  
            {!! Form::text('headline', '', ['class' => 'form-control']) !!}       
        </div>
        <div class="form-group col-md-8 col-lg-8 col-sm-12">
            {{Form::label('text', 'Treść artykułu')}}  
            {!! Form::text('text', '', ['class' => 'form-control']) !!}       
        </div>
        <div class="form-group col-md-8 col-lg-8 col-sm-12">
                {{Form::label('date', 'Data')}}  
                {!! Form::text('date', '', ['class' => 'form-control']) !!}       
        </div>
        
        <div class="form-group col-md-8 col-lg-8 col-sm-12">
                {{Form::label('image', 'Obraz')}}  
                {!! Form::file('image', null, ['class' => 'form-control']) !!}
        </div>
        {!! Form::submit('Dodaj', ['class' =>'btn btn-primary']) !!}
        
        {!! Form::close() !!}
    </div></div>
@stop
