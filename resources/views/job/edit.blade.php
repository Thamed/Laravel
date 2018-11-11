@extends('default')

@section('content')
<div class="container-fluid mb-5">
    <div class="row mx-0">
    @foreach($offer as $item)
    <div class="col-md-8 col-lg-8 col-sm-12">
            <br />
            <h1>@lang('translation.Job')</h1>
            <hr />
            <p>
                @lang('translation.Current'):
            </p>
            @foreach($data as $item)
                <h1>{{$item->stanowisko}}</h1>
                <hr />
                <p>@lang('translation.Expectations'):</p>
                <ul>
                    {!! $item->wymagania !!}
                </ul>
                <p>@lang('translation.GoodToHave'):</p>
                <ul>
                    {!! $item->mWidziane !!}
                </ul>
                <p>@lang('translation.Responsibilities:')</p>
                <ul>
                    {!! $item->obowiazki !!}
                </ul>
                <p>@lang('translation.AdditionalInfo'):</p>
                <ul>
                    {!! $item->dInfo !!}
                </ul>
                {!! $item->aInfo !!}
           @endforeach
            <i>
                @lang('translation.GDPR')
            </i>
        </div>
        {!! Form::open(
            array(
                'action' => ['JobController\JobController@update', $item->id], 
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
        @endforeach
    </div></div>
@stop
