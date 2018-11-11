@extends('default')

@section('content')
<div class="container-fluid mb-5">
    <div class="row mx-0">
        {!! Form::open(['action' =>'ClientsController\ClientsController@post', 'method' => "POST", 'files' => true]) !!}
        <div class="form-group col-md-8 col-lg-8 col-sm-12">
            {{Form::label('name', 'Nazwa klienta')}}  
            {!! Form::text('name', '', ['class' => 'form-control']) !!}       
        </div>
        <div class="form-group col-md-8 col-lg-8 col-sm-12">
            {{Form::label('sector', 'Sektor')}}  
            {!! Form::text('sector', '', ['class' => 'form-control']) !!}       
        </div>
        
        {!! Form::submit('Dodaj', ['class' =>'btn btn-primary']) !!}
        
        {!! Form::close() !!}
    </div></div>
@stop