@extends('layouts.app')

@section('content')
<div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-12 col-sg-10">
                @if(Auth::user()->role == 'admin')
                <div class="card">
                    <div class="card-header">Dashboard</div>
                        <div class="card-body">
                            <div class="card">
                                <h5 class="card-header">
                                    Aktualności
                                    <a href="/news/create" class="btn btn-primary float-right">Dodaj newsa</a>
                                </h5>                                
                                <div class="card-body">
                                  @foreach($data['news'] as $item)
                                  <h5 class="card-title">{{$item->headline}}</h5>
                                  <p class="card-text">{{$item->text}}</p>
                                  <a href="news/edit/{{$item->id}}" class="btn btn-primary">Edytuj</a>
                                  {!! Form::open(array('method' => 'delete', 'action' => array('NewsController\NewsController@delete', $item->id))) !!}
                                            {{ Form::submit('Delete', ['class' => 'btn btn-danger']) }}
                                  {{ Form::close() }}
                                  @endforeach
                                </div>
                            </div>
    
                            <div class="card">
                                <h5 class="card-header">Konsultanci
                                        <a href="/consultants/create" class="btn btn-primary float-right">Dodaj konsultanta</a>
                                </h5>                                
                                <div class="card-body">
                                    @foreach($data['consultants'] as $item)
                                    <h5 class="card-title">{{$item->name}}</h5>
                                    <a href="consultants/edit/{{$item->id}}" class="btn btn-primary">Edytuj</a>
                                    {!! Form::open(array('method' => 'delete', 'action' => array('ConsultantController\ConsultantController@delete', $item->id))) !!}
                                            {{ Form::submit('Delete', ['class' => 'btn btn-danger']) }}
                                        {{ Form::close() }}
                                    @endforeach
                                </div>
                            </div>
    
                            <div class="card">
                                <h5 class="card-header">Praca
                                        <a href="/career/create" class="btn btn-primary float-right">Dodaj ofertę</a>
                                </h5>                                
                                <div class="card-body">
                                        @foreach($data['job'] as $item)
                                        <h5 class="card-title">{{$item->stanowisko}}</h5>
                                        <a href="career/edit/{{$item->id}}" class="btn btn-primary">Edytuj</a>
                                        {!! Form::open(array('method' => 'delete', 'action' => array('JobController\JobController@delete', $item->id))) !!}
                                            {{ Form::submit('Delete', ['class' => 'btn btn-danger']) }}
                                        {{ Form::close() }}
                                        @endforeach
                                </div>
                            </div>
    
                            <div class="card">
                                    <h5 class="card-header">Klienci
                                            <a href="/client/create" class="btn btn-primary float-right">Dodaj klienta</a>
                                    </h5>                                    
                                    <div class="card-body">
                                        @foreach($data['clients'] as $item)
                                        <h5 class="card-title">{{$item->name}}</h5>
                                        <a href="clients/edit/{{$item->id}}" class="btn btn-primary ">Edytuj</a>
                                        {!! Form::open(array('method' => 'delete', 'action' => array('ClientsController\ClientsController@delete', $item->id))) !!}
                                            {{ Form::submit('Delete', ['class' => 'btn btn-danger']) }}
                                        {{ Form::close() }}
                                        @endforeach
                                    </div>
                            </div>   
                            <div class="card">
                                    <h5 class="card-header">Referencje
                                            <a href="/ref/create" class="btn btn-primary float-right">Dodaj Referencje</a>
                                    </h5>                                    
                                    <div class="card-body">
                                        @foreach($data['ref'] as $item)
                                        <h5 class="card-title">{{$item->autor}}</h5>
                                        <a href="ref/edit/{{$item->id}}" class="btn btn-primary ">Edytuj</a>
                                        {!! Form::open(array('method' => 'delete', 'action' => array('RefController@delete', $item->id))) !!}
                                            {{ Form::submit('Delete', ['class' => 'btn btn-danger']) }}
                                        {{ Form::close() }}
                                        @endforeach
                                    </div>
                            </div>
                            <div class="card">
                                    <h5 class="card-header">Użytkownicy</h5>

                                    <div class="card-body">
                                        @foreach($data['users'] as $item)
                                        <h5 class="card-title">{{$item->name}}</h5>
                                        @if($item->role == 'admin')
                                        <p class="card-text text-danger">{{$item->role}}</p>
                                        @else
                                        <p class="card-text">{{$item->role}}</p>
                                        @endif
                                        <a href="/user/upgrade/{{$item->id}}" class="btn btn-primary">Nadaj Admina</a>
                                        <a href="/user/downgrade/{{$item->id}}" class="btn btn-primary">Odbierz uprawnienia</a>
                                        @endforeach
                                    </div>
                            </div>                       
                        </div>
                    </div>
                </div>
                @endif
            </div>
        </div>
    </div>
@endsection