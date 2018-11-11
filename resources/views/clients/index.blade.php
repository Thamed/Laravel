@extends('default')

@section('content')
<div class="container-fluid">
        <div class="row mx-0">
            <div class="col-md-8 col-lg-8 col-sm-12">
                <h2>@lang('translation.LOCLients')</h2>
                <p>@lang('translation.MediaAbout2')</p>
                @php ($prev = "a")
                @foreach ($clients as $item)
                    <div class="col-ms-8 col-sm-12">
    
                        @if (!($item->sector == $prev))
                            <strong>
                                <p class="font-weight-bold">
                                    {{$item->sector }}                                  
                                </p>
                                @php ($prev = $item->sector)
                            </strong>
                        @endif
                        <ul class = "list-group">
                            <li class = "list-group-item">{{$item->name}}</li>
                        </ul>
                    </div>
                    @endforeach
            </div>
            <!-- @Html.Partial("~/Views/Shared/_Side.cshtml") -->
        </div>    
    </div>
    @stop