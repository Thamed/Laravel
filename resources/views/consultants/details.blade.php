@extends('default')

@section('content')
@foreach($user as $item)
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
    @endforeach
@stop
