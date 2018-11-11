<header>
        <div class="boxMenu" id="box" onclick="myFunction()">
            <div class="menu" id="mi1"></div>
            <div class="menu" id="mi2"></div>
            <div class="menu" id="mi3"></div>
        </div>
        <a href="/">
            <img class="logo" src="{{ asset('Content/img/ilogo.png') }}"/>
        </a>

        <div class="basicInfo">
            <div class="row w-100">
                <div class="col-md-6 col-lg-6">
                    tel.: +48 12 444 78 26 <br> mail: biuro@CeDIZ.pl
                </div>
                <div class="dropdown">
                        <button class="btn btn-light" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <a href="#" class="dropdown-toggle text-dark" >
                                    {{ Config::get('languages')[App::getLocale()] }}
                                    
                            </a>
                            
                        </button>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                @foreach (Config::get('languages') as $lang => $language)
                                @if ($lang != App::getLocale())
                                    <li>
                                        <a class="dropdown-item" href="{{ route('lang.switch', $lang) }}">{{$language}}</a>
                                    </li>
                                @endif
                            @endforeach
                            @if(Auth::guest())
                            @else
                                @if(Auth::user()->role == 'admin')
                                    <li>
                                        <a href="/admin" class="dropdown-item" >
                                                Admin Panel
                                        </a>
                                    </li>
                                @endif
                            @endif
                            @guest
                            @else
                            <li>
                                    
                                <a class="dropdown-item" href="{{ route('logout') }}"
                                    onclick="event.preventDefault();
                                                    document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    @csrf
                                </form>
                                        
                            </li>
                            @endguest
                        </div>
                      </div>
                <!-- Zmiana języka
                <div class="col-md-6 col-lg-6">
                    <div class="row">
                        <div class="col-md-3 col-lg-3">                            
                            <a href="/set/pl">
                                <img src="{{ asset('Content/img/pl.png') }}" height="20px" />
                            </a>
                        </div>
                        <div class="col-md-3 col-lg-3">                            
                            <a href="/set/en">
                                <img src="{{ asset('Content/img/gb.png') }}" height="20px"/>
                             </a>
                        </div>
                        <div class="col-md-3 col-lg-3">                            
                            <a href="/set/fr">
                                <img src="{{ asset('Content/img/fr.png') }}" height="20px"/>
                            </a>
                        </div>
                        <div class="col-md-3 col-lg-3">                            
                            <a href="/set/cs">
                                <img src="{{ asset('Content/img/cs.png') }}" height="20px"/>
                            </a>
                        </div>
                    </div>
                </div>
            -->
            </div>
            
        </div>
    </header>
    <nav id="nav" class="navMenu">
        <div class="menuIcon">
            <span class="head1  d-sm-block d-md-none">@lang('translation.About')</span>
            <a href="/news" class = "head1 d-none d-md-block d-lg-block aLink">@lang('translation.About')</a>
            <div class="d-content">
                <a href="/news/news">@lang('translation.News')</a>
                <a href="/news/prawne">@lang('translation.Legal')</a>
                <a href="/news/prasa">@lang('translation.About1')</a>
                <a href="/news/media">@lang('translation.Media')</a>
            </div>
        </div>
        <div class="menuIcon">
            <span class="head1  d-sm-block d-md-none">@lang('translation.Services')</span>
            <a href="news/uslugi" class = "head1 d-none d-md-block d-lg-block aLink">@lang('translation.Services')</a>
            <div class="d-content">
                <a href="/news/doradztwo">@lang('translation.Consulting')</a>
                <a href="/news/strategia">@lang('translation.Strategy')</a>
                <a href="/news/bezpieczenstwo">@lang('translation.Security')</a>
                <a href="/news/szkolenia">@lang('translation.Trainings')</a>
                <a href="/news/pozostale">@lang('translation.Others')</a>
            </div>
        </div>
        <div class="menuIcon">
            <span class="head1  d-sm-block d-md-none"> @lang('translation.Consultants')</span>
            <a href="/consultants" class = "head1 d-none d-md-block d-lg-block aLink">@lang('translation.Consultants')</a>
            <div class="d-content">
                <a href="/consultant/1">Mariusz Baran</a>
                <a href="/consultant/2">Krzysztof Atłasiewicz</a>
                <a href="/consultant/3">Błażej Czeladzki</a>
                <a href="/consultant/4">Paweł Machalski</a>
                <a href="/consultant/5">Damian Sabuda</a>
                <a href="/consultant/6">Joanna Baran</a>
                <a href="/consultant/7">Anna Atłasiewicz</a>
            </div>
        </div>
        <div class="menuIcon">
            <span class="head1  d-sm-block d-md-none">@lang('translation.Clients')</span>
            <a href="#" class = "head1 d-none d-md-block d-lg-block aLink">@lang('translation.Clients')</a>
            <div class="d-content">
                <a href="clients">@lang('translation.LOCLients')</a>
                <a href="#">@lang('translation.References')</a>
            </div>
        </div>
        <div class="menuIcon">
            <span class="head1  d-sm-block d-md-none"> @lang('translation.Career')</span>
            <a href="/career" class = "head1 d-none d-md-block d-lg-block aLink">@lang('translation.Career')</a>
            <div class="d-content">
                <a href="/career/job">@lang('translation.Job')</a>
                <a href="/career/intership">@lang('translation.Internship')</a>
                <a href="/career/practice">@lang('translation.Practice')</a>
            </div>
        </div>
        <div class="menuIcon head1"><a href="#" class = "aLink">@lang('translation.Contact')</a></div>
        <div class="menuIcon head1"><a href="#" class = "aLink">Login</a></div>
        <div class="menuIcon d-sm-clock d-md-none">
            <span class="head1"> @lang('translation.Language')</span>
            <div class="d-content">
                <a href="/set/pl">@lang('translation.Polish')</a>
                <a href="/set/en">@lang('translation.English')</a>
                <a href="/set/fr">@lang('translation.French')</a>
                <a href="/set/cs">@lang('translation.Czech')</a>

            </div>
        </div>
    </nav>