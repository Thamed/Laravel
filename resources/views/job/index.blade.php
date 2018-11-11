@extends('default')

@section('content')
<div class="container-fluid mb-5">
    <div class="row">
        <div class="col-md-8 col-lg-8 col-sm-12">
            <br />
            <h1>@lang('translation.CareerCeDIZ')</h1>
            <hr />
            <div class="col-sm-12 col-lg-6">
                @lang('translation.CareerCeDIZAbout')

            </div>
            <br />
            <br />
            
            <ul class="list-group">
                <li class="list-group-item list-group-item-danger">
                    <strong>@lang('translation.Current'):</strong>
                </li>
                @foreach ($data as $item)

                <li class="list-group-item">
                    <h6>{{$item->stanowisko}}</h6>
                </li>
                @endforeach
                </ul>
            </div>
    </div>
</div>
@stop
