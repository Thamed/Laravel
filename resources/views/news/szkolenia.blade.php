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
                                    Szkolenia z zakresu bezpieczeństwa teleinformatycznego
                                </h2>
                                <hr />
                                <h6>
                                    wzbogacenie kompetencji pracowników odpowiedzialnych za bezpieczeństwo IT o zdolność skutecznego reagowania na incydenty.
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
                                    <li>szkolenia i&nbsp;warsztaty w&nbsp;zakresie bezpieczeństwa teleinformatycznego,</li>
                                    <li>opracowanie procedur reagowania na zagrożenia,</li>
                                    <li>wsparcie eksperckie w&nbsp;sytuacjach zagrożenia bezpieczeństwa teleinformatycznego,</li>
                                    <li>coaching z&nbsp;zakresu obsługi incydentów.</li>
                                </ul>
                                <u>
                                    Możliwość rozszerzenia usługi o:
                                </u>
                                <ul>
                                    <li>opracowanie polityki bezpieczeństwa IT,</li>
                                    <li>doradztwo w&nbsp;zakresie bezpieczeństwa,</li>
                                    <li>zabezpieczenie dowodów cyfrowych.</li>
                                </ul>
                                <h2>
                                    W ramach zabezpieczenia dowodów cyfrowych proponujemy:
                                </h2>
                                <strong>
                                    Szkolenia i warsztaty w zakresie bezpieczeństwa teleinformatycznego i reagowania na zagrożenia:
                                </strong>
                                <ul>
                                    <li>wykłady teoretyczne,</li>
                                    <li>ćwiczenia praktyczne,</li>
                                    <li>gry symulacyjne.</li>
                                </ul>
                                <strong>
                                    Przygotowanie materiałów edukacyjnych:
                                </strong>
                                <ul>
                                    <li>opracowanie procedur reagowania na zagrożenia,</li>
                                    <li>tworzenie prezentacji i&nbsp;filmów instruktażowych.</li>
                                </ul>                                
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header" id="headingTwo">
                            <div class="mb-0">
                                <h2>
                                    Działalność szkoleniowa
                                </h2>
                                <hr />
                                <h6>
                                    doskonalenie umiejętności pracowników IT w zakresie zarządzania obszarem IT oraz stworzenie profesjonalnego, interaktywnego kursu o dowolnym zakresie tematycznym w modelu e-learning.
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
                                    <li>szkolenia i&nbsp;warsztaty w&nbsp;zakresie wybranych zagadnień informatyki i&nbsp;zarządzania,</li>
                                    <li>analiza materiału będącego przedmiotem kursu w&nbsp;modelu e-learningu,</li>
                                    <li>przygotowanie poszczególnych lekcji,</li>
                                    <li>przygotowanie zestawu proponowanych multimediów i&nbsp;mechanizmów kontrolnych,</li>
                                    <li>implementacja kursu,</li>
                                    <li>uruchomienie kursu na platformie e-learningowej.</li>
                                </ul>
                                <u>Możliwość rozszerzenia usługi o:</u>
                                <ul>
                                    <li>doradztwo merytoryczne dotyczące przedmiotu kursu,</li>
                                    <li>usługę administrowania kursem,</li>
                                    <li>instalację platformy e-learningowej na serwerze Klienta,</li>
                                    <li>konfigurację platformy na serwerze Klienta,</li>
                                    <li>suport (konsultacje, porady, pomoc).</li>
                                </ul>
                                <h2>
                                    Zakres szkoleń prowadzonych przez konsultantów CeDIZ obejmuje:
                                </h2>
                                <strong>
                                    Szkolenia i warsztaty w zakresie wybranych zagadnień informatyki i zarządzania:
                                </strong><br />
                                <ul>
                                    <li>doskonalenie umiejętności praktycznych kadry menedżerskiej w&nbsp;zakresie nowoczesnych narzędzi i&nbsp;technik zarządzania (BPM, BSC),</li>
                                    <li>rozwój pracowników IT w&nbsp;aspektach zarządzania obszarem IT (IT Governance, ITIL, SOA, Prince2),</li>
                                    <li>pozyskanie wiedzy w&nbsp;zakresie kluczowych aspektów samodzielnego przygotowania organizacji do wdrożenia systemu informatycznego,</li>
                                    <li>szkolenie w&nbsp;zakresie analizy umów i&nbsp;negocjacji kontraktów na rozwiązania IT,</li>
                                    <li>budowa modelu symulacyjnego procesów biznesowych.</li>
                                </ul>
                                <strong>
                                    Projektowanie i prowadzenie kursów w modelu e-learningu:
                                </strong>
                                <ul>
                                    <li>zapewnienie kursów i&nbsp;certyfikacji umiejętności pracowników w&nbsp;modelu szkoleń i&nbsp;egzaminów realizowanych na odległość,</li>
                                    <li>przygotowanie szkoleń z&nbsp;dedykowanych tematów wg. specyfikacji potrzeb Klienta,</li>
                                    <li>możliwość opracowania kursu na bazie materiałów dostarczonych przez Klienta,</li>
                                    <li>możliwość weryfikacji na bazie testów komputerowych kompetencji kandydatów do pracy w&nbsp;procesie rekrutacji zewnętrznych i&nbsp;wewnętrznych,</li>
                                    <li>możliwość udziału w&nbsp;kursie pracowników z&nbsp;dowolnego miejsca na świecie, za pośrednictwem jedynie przeglądarki internetowej,</li>
                                    <li>niskie koszty udziału w&nbsp;szkoleniu pojedynczego pracownika (brak konieczności: dojazdów, noclegów, itd.),</li>
                                    <li>wiarygodna ocena umiejętności i&nbsp;wiedzy pracownika wystawiana przez komputerowy system szkoleniowy i&nbsp;doświadczonego tutora prowadzącego kurs,</li>
                                    <li>możliwość przygotowania opartego na cyklu szkoleń systemu ścieżek awansów zawodowych/kompetencyjnych pracowników,</li>
                                    <li>implementacja kursu po wcześniejszym zatwierdzeniu przez Klienta,</li>
                                    <li>możliwość udostępnienia szkolenia kursantom.</li>
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
