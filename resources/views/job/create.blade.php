@extends('default')

@section('content')
<div class="container-fluid mb-5">
    <div class="row mx-0">
        {!! Form::open(
            array(
                'action' => 'JobController\JobController@post', 
                'class' => 'form')) !!}
        @csrf
        <div class="form-group col-md-8 col-lg-8 col-sm-12">
            {{Form::label('rodzaj', 'Rodzaj P - Praca S - Staż PZ - Praktyka')}}  
            {!! Form::text('rodzaj', '', ['class' => 'form-control']) !!}       
        </div>
        <div class="form-group col-md-8 col-lg-8 col-sm-12">
            {{Form::label('info', 'Formatowanie HTML będzie działać. Informacje od kropek należy umieszczać w tagach html <ul><li></li></ul>')}}        
        </div>
        <div class="form-group col-md-8 col-lg-8 col-sm-12">
            {{Form::label('stanowisko', 'Stanowisko')}}  
            {!! Form::text('stanowisko', '', ['class' => 'form-control']) !!}       
        </div>
        <div class="form-group col-md-8 col-lg-8 col-sm-12">
            {{Form::label('wymagania', 'Wymagania')}}  
            {!! Form::text('wymagania', '', ['class' => 'form-control']) !!}       
        </div>
        <div class="form-group col-md-8 col-lg-8 col-sm-12">
            {{Form::label('mWidziane', 'Mile widziane')}}  
            {!! Form::text('mWidziane', '', ['class' => 'form-control']) !!}       
        </div>
        <div class="form-group col-md-8 col-lg-8 col-sm-12">
            {{Form::label('obowiazki', 'Obowiązki')}}  
            {!! Form::text('obowiazki', '', ['class' => 'form-control']) !!}       
        </div>
        <div class="form-group col-md-8 col-lg-8 col-sm-12">
            {{Form::label('dInfo', 'Dodatkowe Informacje')}}  
            {!! Form::text('dInfo', '', ['class' => 'form-control']) !!}       
        </div>
        <div class="form-group col-md-8 col-lg-8 col-sm-12">
            {{Form::label('aInfo', 'Więcej informacji')}}  
            {!! Form::text('aInfo', '', ['class' => 'form-control']) !!}       
        </div>
        {!! Form::submit('Dodaj', ['class' =>'btn btn-primary']) !!}
        
        {!! Form::close() !!}
    </div></div>
@stop
