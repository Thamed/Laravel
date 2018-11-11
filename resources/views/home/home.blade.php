@extends('default')

@section('content')
<div class="row mh-100 mx-0">
    <div class="slide-t bg-light shadow-sm">
        <div class="row m-4">
            <div class="row mx-auto">
                <div class="col-md-4 col-lg-4 col-sm-12 offset-md-1 offset-lg-1 ">
                    <div class="col-12 middleGround">
                        <h1 class="text-danger">@lang('translation.Motto')</h1>
                        <p class="text-dark">@lang('translation.Motto2')</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-6 col-sm-12">
                    <div id="myCarousel" class="carousel slide col-md-12 col-lg-12" data-ride="carousel">
                        <!-- Indicators -->
                        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                            <ol class="carousel-indicators">
                                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                                <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
                            </ol>
                            <div class="carousel-inner">
                                <div class="carousel-item mhs active">
                                    <img class="d-block w-100" src="{{ asset('Content/img/1.jpg')}}" alt="Szczyt">
                                    <div class="carousel-caption d-none d-md-block">
                                        <h5>@lang('translation.Peak')</h5>
                                    </div>
                                </div>
                                <div class="carousel-item mhs">
                                    <img class="d-block w-100" src="{{ asset('Content/img/2.jpg')}}" alt="Monety">
                                    <div class="carousel-caption d-none d-md-block">
                                        <h5>@lang('translation.Profit')</h5>
                                    </div>
                                </div>
                                <div class="carousel-item mhs">
                                    <img class="d-block w-100" src="{{ asset('Content/img/3.jpg')}}" alt="Mapa">
                                    <div class="carousel-caption d-none d-md-block">
                                        <h5>@lang('translation.WeAreForYou')</h5>
                                    </div>
                                </div>
                                <div class="carousel-item mhs">
                                    <img class="d-block w-100" src="{{ asset('Content/img/4.jpg')}}" alt="Zegar">
                                    <div class="carousel-caption d-none d-md-block">
                                        <h5>@lang('translation.WorkHard')</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


            </div>
        </div>
    </div>

    <div class="row ">
        <div class="col-md-3 col-lg-3 col-sm-8 shadow mx-auto mt-5">
            <div class="container-fluid m-2">
                <h2>@lang('translation.About')</h2>
                <img src="{{ asset('Content/img/szachy.jpg')}}" class="rounded float-left border border-dark m-2" />
                <p class="p-2">@lang('translation.home1')</p>
            </div>

        </div>
        <div class="col-md-3 col-lg-3 col-sm-8 shadow mx-auto mt-5">        
            <div class="container-fluid m-2">
                <h2>@lang('translation.Consultants')</h2>
                <img src="{{ asset('Content/img/rece.jpg')}}" class="rounded float-left border border-dark m-2" />
                <p class="p-2">@lang('translation.home2')</p>
            </div>
        </div>
        <div class="col-md-3 col-lg-3 col-sm-8 shadow mx-auto mt-5">
        
            <div class="container-fluid m-2">
                <h2>@lang('translation.News')</h2>                
                    @if ($news->image == null)                    
                        <img src="{{ asset('Content/img/news/zegar.png')}}" class="rounded float-left border border-dark m-2" />                    
                    @else                    
                        <img src="{{ asset('Content/img/news')}}/{{$news->image}}" height="60px" class="rounded float-left border border-dark m-2" />
                    @endif
                    <i>{!!$news->date!!}</i>
                    <strong>{!!$news->headline!!}</strong>
                    <p>{!!$news->text!!}</p>
            </div>
        </div>
        </div>
</div>
@stop