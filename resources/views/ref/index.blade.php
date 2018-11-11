@extends('default')

@section('content')
<div class="row justify-content-center mx-0">
        <div class="col-lg-6 col-md-6 col-sm-12 offset-md-1 offset-lg-1">
            <h2>Listy referencyjne</h2>

            <p>O sukcesie i jakości oferowanych przez CeDIZ usług najlepiej świadczą zadowoleni Klienci. Poniżej prezentujemy listy referencyjne z ostatnio zrealizowanych przez naszą firmę projektów.</p>
            <div class="row">
                @foreach ($ref as $item)
                <div class="col-sm-12 col-md-12 col-lg-12">
                    <div class="row">
                        <div class="col-md-4 col-lg-4 col-sm-4">
                            <img class="float-md-right" src="{{ asset('Content/img/')}}/{{$item->image}}"/>
                        </div>
                        <div class="col-md-8 col-lg-8 col-sm-8 pb-5">
                            <img class="col-sm-12 pb-5" src="{{ asset('Content/img/')}}/{{$item->logo}}" />
                            <h6>{{$item->author}}</h6>
                            <button class="btn btn-danger" type="button" data-toggle="collapse" data-target="#@(colapse)@Html.DisplayFor(model=>item.Id)" aria-expanded="false" aria-controls="@(colapse)@Html.DisplayFor(model=>item.Id)">Czytaj więcej</button>
                            <div class="row">
                                <div class="col">
                                    <div class="collapse multi-collapse" id="@(colapse)@Html.DisplayFor(model=>item.Id)">
                                        <div class="card card-body">
                                            {!!$item-text!!}
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
            </div>
    </div>
@stop