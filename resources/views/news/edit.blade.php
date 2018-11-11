@extends('default')

@section('content')
<div class="row justify-content-center">

        <div class="col-sm-12 col-lg-6">
            <br />
            <h1>Aktualności</h1>
            <hr />
            @foreach ($news as $item)
                <hr class="half-rule" />
                <div class="row">
                <div class="col-md-3 col-lg-3 col-sm-3">
                    @if ($item->image != null)
                            <img class="rounded" src="{{ asset('Content/img/')}}/{{$item->image}}" />
                    @endif
                </div>
                    <div class="col-md-8 col-lg-8 col-sm-8 offset-md-1 offset-lg-1">
                        <div class="h6">{{$item->date}} </div>
                        <p class="font-weight-bold">{{$item->headline}}</p>
                        {!! $item->text !!}
                    </div>  
                </div>
            @endforeach
        </div>
    </div>
        <div class="container-fluid mb-5">
                <div class="row mx-0">
                    {!! Form::open(
                        array(
                            'action' => 'NewsControllerws\NewsController@post', 
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