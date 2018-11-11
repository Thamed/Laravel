@extends('default')

@section('content')
<div class="container-fluid mb-5">
    <div class="row mx-0">
        <div class="col-md-8 col-lg-8 col-sm-12">
            @foreach($consultant as $item)
            <div class="container-fluid pb-2">
                    <div class="row">
                        <div class="col-md-8 col-sm-12 col-lg-8">
                            <h1>{{$item->name}}</h1><hr />
                            <div class="row">
                                <div class="col-md-8 col-lg-8 col-sm-8">
                                    <strong><h1>{{$item->position}}</h1></strong>
                                </div>
                                <div class="col-md-2 col-lg-2 col-sm-4">
                                    <img class="img-thumbnail" src="{{ asset('Content/img/kons/')}}/{{$item->image}}"               
                                </div>
                            </div>
                            <div class="col-md-12 col-lg-12 col-sm-12">
                                email: <a href="{{$item->email}}" class=".px-2" style="color:red">{{$item->email}}</a><br /><br />
                                {{$item->about}}<br /><br />
                                <strong>
                                    Jest specjalistaw zakresie:
                                </strong><br />
                                {!!$item->aboutSpecialist!!}<br /><br />
                            </div>
                        </div>            
                    </div>    
                </div>
                
        </div>
        <div class="col-md-8 col-lg-8 col-sm-12">
            {!! Form::open(
                array(
                    'action' => ['ConsultantController\ConsultantController@update', $item->id], 
                    'class' => 'form', 
                    'novalidate' => 'novalidate', 
                    'method' =>'PUT',
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
            {!! Form::submit('Aktualizuj', ['class' =>'btn btn-primary']) !!}
            
            {!! Form::close() !!}
        </div>
        @endforeach
    </div></div>
@stop