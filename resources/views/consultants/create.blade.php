@extends('default')

@section('content')
<div class="container-fluid mb-5">
    <div class="row mx-0">
        {!! Form::open(
            array(
                'action' => 'ConsultantController\ConsultantController@post', 
                'class' => 'form', 
                'novalidate' => 'novalidate', 
                'enctype' => 'multipart/form-data')) !!}
        @csrf
        <div class="form-group col-md-8 col-lg-8 col-sm-12">
            {{Form::label('name', 'Imię i nazwisko')}}  
            {!! Form::text('name', '', ['class' => 'form-control']) !!}       
        </div>
        <div class="form-group col-md-8 col-lg-8 col-sm-12">
            {{Form::label('position', 'Pozycja')}}  
            {!! Form::text('position', '', ['class' => 'form-control']) !!}       
        </div>
        <div class="form-group col-md-8 col-lg-8 col-sm-12">
                {{Form::label('email', 'Email')}}  
                {!! Form::text('email', '', ['class' => 'form-control']) !!}       
        </div>
        
        <div class="form-group col-md-8 col-lg-8 col-sm-12">
                {{Form::label('About', 'O specjaliście')}}  
                {!! Form::text('About', '', ['class' => 'form-control']) !!}       
        </div>
        <div class="form-group col-md-8 col-lg-8 col-sm-12">
                {{Form::label('AboutScpecjalist', 'Więcej o specjaliście. Dla lepszego wyświetlania używaj tagów HTML')}}  
                {!! Form::text('AboutScpecjalist', '', ['class' => 'form-control']) !!}       
        </div>

        <div class="form-group col-md-8 col-lg-8 col-sm-12">
                {{Form::label('image', 'Obraz')}}  
                {!! Form::file('image', null, ['class' => 'form-control']) !!}
        </div>
        {!! Form::submit('Dodaj', ['class' =>'btn btn-primary']) !!}
        
        {!! Form::close() !!}
    </div></div>
@stop
