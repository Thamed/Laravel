@extends('default')

@section('content')
<div class="container-fluid mb-5">
    <div class="row mx-0">
        @foreach ($client as $item)
        <div class="col-ms-8 col-sm-12">
                    <strong>
                        <p class="font-weight-bold">
                            {{$item->sector }}                                  
                        </p>
                    </strong>
                <ul class = "list-group">
                    <li class = "list-group-item">{{$item->name}}</li>
                </ul>
            </div>
        {!! Form::open(['action' => ['ClientsController\ClientsController@update', $item->id], 'method' => "PUT"]) !!}
        <div class="form-group col-md-8 col-lg-8 col-sm-12">
            {{Form::label('name', 'Nazwa klienta')}}    
            {!! Form::text('name', '', ['class' => 'form-control']) !!}       
        </div>
        <div class="form-group col-md-8 col-lg-8 col-sm-12">
            {{Form::label('sector', 'Sektor')}}  
            {!! Form::text('sector', '', ['class' => 'form-control']) !!}       
        </div>
        
        {!! Form::submit('Zaktualizuj', ['class' =>'btn btn-primary']) !!}
        
        {!! Form::close() !!}
        @endforeach
    </div>
    </div></div>
@stop