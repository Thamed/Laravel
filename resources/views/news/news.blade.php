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
                        <img class="rounded" src="{{ asset('Content/img/news/')}}/{{$item->image}}" height="250 px" />
                @else 
                        <img class="rounded" src="{{ asset('Content/img/news/zegar.png')}}" height="250 px" />
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
@stop
