    @extends('default')

@section('content')
<div class="container-fluid mb-5">
    <div class="row">
        <div class="col-md-8 col-lg-8 col-sm-12">
            <br />
            <h1>@lang('translation.Practice')</h1>
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
    </div>
    </div>
    @stop
