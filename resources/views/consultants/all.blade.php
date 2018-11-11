@extends('default')

@section('content')
<div class="container-fluid pb-2 offset-md-2 offset-lg-2">
        <div class="row pb-5 mx-0">
            <ul class="list-group col-md-8 col-lg-8">
                @foreach ($user as $item)
                
                    <li class="list-group-item">
                        <div class="col-md-12 col-lg-12">
                            <div class="row">
                                <div class="col-md-8 col-lg-8 col-sm-8">
                                    <h1><a href="consultant/{{$item->id}}" class = "h1 text-danger">{{$item->name}}</a></h1>
                                </div>
                                <div class="col-md-4 col-lg-4 col-sm-4">
                                    <img class="img img-thumbnail" src="{{ asset('Content/img/kons/')}}/{{$item->image}}"  />
                                </div>
                            </div>                        
                            <hr class="half-rule" />
                            <strong>
                                {{$item->position}}
                            </strong><br />                        
                            Email:<br />
                            <span class="text-danger">
                               {{$item->email}}
                            </span>
                            
                        </div>
                        
                    </li>
                @endforeach
            </ul>
            <!-- @Html.Partial("~/Views/Shared/_Side.cshtml") -->
        </div>
    </div>
@stop
