@extends('default')

@section('content')
<div class="row">
    <div class="col col-md-8 col-lg-8 col-sm-12">
        <div class="'row">
            <div class="bd-example">
                <div class="accordion" id="accordionExample">
                    <div class="card">
                        <div class="card-header" id="headingOne">
                            <div class="mb-0">
                                <h2>
                                    Zabezpieczenie dowodów cyfrowych (informatyka śledcza)
                                </h2>
                                <hr />
                                <h6>
                                    maksymalizacja ilości informacji z zakresu informatyki śledczej.
                                </h6>
                                <button class="btn btn-link collapsed text-danger" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                                    @lang('translation.more')
                                </button>
                            </div>
                        </div>

                        <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample" style="">
                            <div class="card-body">
                                <u>
                                    Zakres usługi:
                                </u>
                                <ul>
                                    <li>gromadzenie, zabezpieczenie i&nbsp;analiza dowodów cyfrowych,</li>
                                    <li>monitoring ruchu IP.</li>
                                </ul>
                                <u>
                                    Możliwość rozszerzenia usługi o:
                                </u>
                                <ul>
                                    <li>opracowanie polityki bezpieczeństwa IT,</li>
                                    <li>monitorowanie stanu bezpieczeństwa infrastruktury teleinformatycznej,</li>
                                    <li>szkolenia z&nbsp;zakresu bezpieczeństwa teleinformatycznego.</li>
                                </ul>
                                <h2>
                                    W ramach zabezpieczenia dowodów cyfrowych proponujemy:
                                </h2>
                                <strong>
                                    Zabezpieczenie i analiza dowodów cyfrowych:
                                </strong>
                                <ul>
                                    <li>weryfikacja podejrzeń,</li>
                                    <li>analiza nadużyć i&nbsp;naruszeń prawa,</li>
                                    <li>gromadzenie i&nbsp;zabezpieczenie dowodów na potrzeby postępowania sądowego,</li>
                                    <li>usługa objęta klauzulą tajemnicy przetwarzanych danych i&nbsp;pozyskiwanych informacji.</li>
                                </ul>
                                <strong>
                                    Monitoring ruchu IP:
                                </strong>
                                <ul>
                                    <li>rejestrowanie ruchu IP użytkowników systemów teleinformatycznych,</li>
                                    <li>pomoc ekspercka,</li>
                                    <li>monitoring okresowy, stały i/lub analiza logów.</li>
                                </ul>                                
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header" id="headingTwo">
                            <div class="mb-0">
                                <h2>
                                    Audyt stron WWW
                                </h2>
                                <hr />
                                <h6>
                                    analiza gotowości do działań marketingowych oraz warstwy technicznej, zawartości, środków wizualnych, struktury strony WWW.
                                </h6>
                                <button class="btn btn-link collapsed text-danger" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                    @lang('translation.more')
                                </button>
                            </div>
                        </div>
                        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample" style="">
                            <div class="card-body">
                                <u>Zakres usługi:</u><br />
                                <ul>
                                    <li>analiza strony pod kątem marketingu w&nbsp;wyszukiwarkach,</li>
                                    <li>analiza ruchu na stronie,</li>
                                    <li>analiza zawartości strony.</li>
                                </ul>
                                <u>Możliwość rozszerzenia usługi o:</u>
                                <ul>
                                    <li>analizę konkurencji,</li>
                                    <li>ocenę środków wizualnych.</li>
                                </ul>
                                <h2>
                                    Audyt strony WWW obejmuje między innymi:
                                </h2>
                                <strong>
                                    Analizę strony pod kątem marketingu w wyszukiwarkach:
                                </strong><br />
                                <ul>
                                    <li>ocena dostępności treści i&nbsp;przygotowanie strony do działań marketingowych (SEO, AdWords),</li>
                                    <li>wskazanie elementów zwiększających koszty kampanii reklamowych,</li>
                                    <li>wskazanie elementów mogących źle wpływać na wynik jakości w&nbsp;kampaniach w&nbsp;Google.</li>
                                </ul>
                                <strong>
                                    Analizę ruchu na stronie:
                                </strong>
                                <ul>
                                    <li>podpięcie Google Analytics,</li>
                                    <li>konfiguracja zaawansowanych funkcji analitycznych,</li>
                                    <li>propozycja odpowiednich ustawień konta,</li>
                                    <li>definicja ścieżek procesów zgodnie z&nbsp;potrzebami.</li>
                                </ul>
                                <strong>
                                    Analizę zawartości strony:
                                </strong>
                                <ul>
                                    <li>ocena komunikacji na stronie,</li>
                                    <li>ocena dopasowania stylu do grupy odbiorczej,</li>
                                    <li>propozycja poprawek językowych,</li>
                                    <li>propozycja zmian zgodnych z&nbsp;zasadami architektury informacji,</li>
                                    <li>ocena sposobu prezentacji treści pod kątem działań marketingowych,</li>
                                    <li>dostępność informacji kontaktowych.</li>
                                </ul>
                                <strong>
                                    Analizę konkurencji:
                                </strong>
                                <ul>
                                    <li>ulepszenie strony, dzięki poznaniu przewag konkurencji,</li>
                                    <li>wskazanie sprawdzonych rozwiązań poprzez wyeksponowanie zalet i&nbsp;wyeliminowanie wad strony.</li>
                                </ul>
                                <strong>
                                    Ocena środków wizualnych:
                                </strong>
                                <ul>
                                    <li>ocena sposobu wykorzystania zdjęć, grafiki oraz czcionek,</li>
                                    <li>sprawdzenie czytelności komunikatów, hierarchii treści oraz schematów prowadzenia wzroku,</li>
                                    <li>zasugerowanie zmian, które podniosą użyteczność strony.</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@stop
