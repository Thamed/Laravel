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
                                    Opracowanie polityki bezpieczeństwa IT
                                </h2>
                                <hr />
                                <h6>
                                    Wdrożenie polityki bezpieczeństwa zapewnia organizacji ochronę aktywów informacyjnych oraz podnoszenie kultury informatycznej i tworzenie bezpiecznego społeczeństwa informacyjnego.
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
                                    <li>opracowanie modelu archiwizacji danych,</li>
                                    <li>przygotowanie wytycznych w zakresie zabezpieczeń oprogramowania i sprzętu,</li>
                                    <li>zredagowanie zasad korzystania z systemów informatycznych organizacji,</li>
                                    <li>wsparcie w procesie wdrażania zasad polityki bezpieczeństwa.</li>
                                </ul>
                                <u>
                                    Możliwość rozszerzenia usługi o:
                                </u>
                                <ul>
                                    <li>audyt stanu informatyzacji organizacji,</li>
                                    <li>audyt bezpieczeństwa systemów informatycznych,</li>
                                    <li>testy bezpieczeństwa systemów internetowych,</li>
                                    <li>przygotowanie projektu doskonalenia organizacji,</li>
                                    <li>wzbogacanie kompetencji zespołu IT o procedury postępowania w sytuacji zagrożenia bezpieczeństwa teleinformatycznego,</li>
                                    <li>ćwiczenia dla zespołów IT w zakresie umiejętności reagowania na zagrożenia.</li>
                                </ul>
                                <h2>
                                    Do usług związanych z opracowaniem polityki bezpieczeństwa IT zalicza się między innymi:
                                </h2>
                                <strong>
                                    Opracowanie systemu archiwizacji danych obejmuje:
                                </strong>
                                <ul>
                                    <li>archiwizację fizyczną dokumentów,</li>
                                    <li>procedury wykonywania kopii zapasowych systemu,</li>
                                    <li>procedury odzyskiwania danych.</li>                                    
                                </ul>
                                <strong>
                                    Przygotowanie systemu zabezpieczeń fizycznych:
                                </strong>
                                <ul>
                                    <li>pomieszczenia serwerowni zarówno przed niepowołanym dostępem, jak i zdarzeniami losowymi,</li>
                                    <li>węzłów dystrybucyjnych sieci LAN,</li>
                                    <li>wydzielenie stref bezpieczeństwa.</li>
                                </ul>
                                <strong>
                                    Opracowanie systemu zabezpieczeń logicznych systemu w zakresie:
                                </strong>
                                <ul>
                                    <li>zarządzania systemami i dostępem,</li>
                                    <li>ujednolicenia oprogramowania antywirusowego i antyspamowego w całej organizacji,</li>
                                    <li>kontrola przepływu informacji pomiędzy systemem informatycznym administratora danych a siecią publiczną,</li>
                                    <li>kontrola działań inicjowanych z sieci publicznej i systemu informatycznego administratora danych.</li>
                                </ul>
                                <strong>
                                    Przygotowanie systemu zabezpieczeń przed zagrożeniami pochodzącymi z sieci obejmuje:
                                </strong>
                                <ul>
                                    <li>zabezpieczenie fizyczne i logiczne sieci,</li>
                                    <li>zwalczanie cyberlenistwa,</li>
                                    <li>kontrolę dostępu do sieci Internet.</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header" id="headingTwo">
                            <div class="mb-0">
                                <h2>
                                    Audyt bezpieczeństwa systemów informatycznych
                                </h2>
                                <hr />
                                <h6>
                                    dostarczenie informacji o rzeczywistym poziomie bezpieczeństwa informacji, dostępności, wydajności oraz zastosowanych zabezpieczeniach systemu.
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
                                    <li>audyt konfiguracji urządzeń,</li>
                                    <li>analiza bezpieczeństwa oprogramowania,</li>
                                    <li>opracowanie wykazu zidentyfikowanych podatności systemu wraz z komentarzem,</li>
                                    <li>przeprowadzenie badania zgodnie z metodykami COBIT i OSSTMM.</li>
                                </ul>
                                <u>Możliwość rozszerzenia usługi o:</u>
                                <ul>
                                    <li>audyt stanu informatyzacji organizacji,</li>
                                    <li>doskonalenie organizacji,</li>
                                    <li>testy bezpieczeństwa systemów internetowych,</li>
                                    <li>opracowanie polityki bezpieczeństwa.</li>
                                </ul>
                                <h2>
                                    Do audytu bezpieczeństwa systemów informatycznych zalicza się:
                                </h2>
                                <strong>
                                    Audyt bezpieczeństwa infrastruktury teleinformatycznej:
                                </strong><br />
                                <ul>
                                    <li>audyt systemu dostępnego z Internetu,</li>
                                    <li>audyt systemu dostępnego z sieci LAN,</li>
                                    <li>audyt urządzeń aktywnych,</li>
                                    <li>audyt wykorzystywanych serwerów dostępowych i bazodanowych,</li>
                                    <li>testy penetracyjne urządzeń.</li>
                                </ul>
                                <strong>
                                    Audyt bezpieczeństwa systemów operacyjnych i bazodanowych:
                                </strong>
                                <ul>
                                    <li>analiza uruchomionych usług,</li>
                                    <li>poprawność instalacji i konfiguracji systemów operacyjnych i bazodanowych,</li>
                                    <li>opracowanie wykazu niezbędnych aktualizacji, patchy itp.,</li>
                                    <li>analiza struktury bazy danych pod kątem wydajności, spójności oraz nadmiarowości przechowywanych danych,</li>
                                    <li>analiza wydajności połączenia między serwerem aplikacyjnym a bazodanowym.</li>
                                </ul>
                                <strong>
                                    Audyt bezpieczeństwa aplikacji systemu:
                                </strong>
                                <ul>
                                    <li>audyt środowiska klienckiego,</li>
                                    <li>analiza podatności aplikacji na ataki,</li>
                                    <li>weryfikacja kodu aplikacji pod względem zastosowanych praktyk i wzorców projektowych,</li>
                                    <li>analiza prawidłowości wyboru rozwiązania sprzętowego ze względu na bezpieczeństwo oraz wydajność.</li>
                                </ul>
                                <strong>
                                    Audyt dostępności i wydajności systemu:
                                </strong>
                                <ul>
                                    <li>inwentaryzacja usług dostępnych z Internetu,</li>
                                    <li>przeprowadzenie prób ataków na usługi,</li>
                                    <li>kontrola podatności systemu na ataki takie, jak: przepełnienia buforów, OS Injection, SQL Injection, poprawność walidacji danych, Cross-Site Scripting, Cross-Site Request Forgery, Logging Issues, zachowanie integralności sesji.</li>
                                </ul>
                                <strong>
                                    Audyt polityki bezpieczeństwa:
                                </strong>
                                <ul>
                                    <li>badanie dokumentów polityki bezpieczeństwa i przyjętych procedur pod kątem ich poprawności, adekwatności, spójności oraz zgodności z normami i dobrymi praktykami,</li>
                                    <li>analiza zgodności zapisów polityki bezpieczeństwa ze stanem faktycznym,</li>
                                    <li>sporządzenie listy zidentyfikowanych nieprawidłowości, uchybień i braków,</li>
                                    <li>wskazanie kierunków modyfikacji (poprawy) obowiązujących zasad i procedur bezpieczeństwa.</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header" id="headingThree">
                            <div class="mb-0">
                                <h2>
                                    Testy bezpieczeństwa systemów internetowych
                                </h2>
                                <hr />
                                <h6>
                                    wskazanie potencjalnych i realnych zagrożeń oraz ryzyka w obszarze bezpieczeństwa systemów internetowych.
                                </h6>
                                <button class="btn btn-link collapsed text-danger" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                    @lang('translation.more')
                                </button>
                            </div>
                        </div>
                        <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample" style="">
                            <div class="card-body">
                                <u>Zakres usługi:</u>
                                <ul>
                                    <li>wykonanie testów penetracyjnych,</li>
                                    <li>analiza wyników testu,</li>
                                    <li>badanie dostępności usług,</li>
                                    <li>testy wydajności systemu.</li>
                                    <li>sformułowanie zaleceń.</li>
                                </ul>
                                <u>Możliwość rozszerzenia usługi o:</u>
                                <ul>
                                    <li>audyt bezpieczeństwa</li>
                                    <li>audyt stanu informatyzacji organizacji,</li>
                                    <li>opracowanie polityki bezpieczeństwa IT,</li>
                                    <li>budowę koncepcji wsparcia informatycznego procesów biznesowych,</li>
                                    <li>zlecenia regularnego, automatycznego skanu wskazanych adresów IP w celu ew. wykrywania pojawień się podatności w wyniku przeprowadzanych zmian w konfiguracjach systemu IT Klienta,</li>
                                    <li>sprawdzenie istniejących/pojawiających się podatności używanych aplikacji dla danego systemu operacyjnego.</li>
                                </ul>
                                <h2>Do testów bezpieczeństwa systemów internetowych zalicza się:</h2>
                                <strong>
                                    Wykonanie testów penetracyjnych zewnętrznych (z Internetu):
                                </strong>
                                <ul>
                                    <li>identyfikacja systemu za pomocą dostępnych serwisów sieciowych,</li>
                                    <li>ozpoznanie dostępnych z obszaru Internetu komputerów i urządzeń sieciowych, rodzaju i wersji systemów operacyjnych oraz oprogramowania użytkowego pod kątem wykrywania znanych luk bezpieczeństwa,</li>
                                    <li>penetracja systemu za pomocą skanerów portów TCP i DP oraz skanerów zabezpieczeń,</li>
                                    <li>analizę topologii sieci komputerowej widzianej z Internetu,</li>
                                    <li>przeprowadzenie kontrolowanego ataku na system informatyczny,</li>
                                    <li>przeprowadzeniu symulowanego włamania do systemu,</li>
                                    <li>ocena poprawności reakcji systemu zabezpieczeń na wykonywane ataki,</li>
                                    <li>ocena odporności zabezpieczeń systemu na ataki destrukcyjne,</li>
                                    <li>analiza wyników testu.</li>
                                </ul>
                                <strong>
                                    Badanie dostępności usług:
                                </strong>
                                <ul>
                                    <li>testy ciągłe badających dostępność kluczowych usług,</li>
                                    <li>określenie wymagań dostępności,</li>
                                    <li>weryfikacja stopnia realizacji założeń dot. ustalonych poziomów dostępności i jakości systemu.</li>
                                </ul>
                                <strong>
                                    Testy wydajności:
                                </strong>
                                <ul>
                                    <li>opracowanie scenariuszy testowych,</li>
                                    <li>wykonanie testów symulujących normalny ruch aplikacyjny,</li>
                                    <li>wykonanie testów symulujących maksymalne obciążenie aplikacji,</li>
                                    <li>badanie poprawności konfiguracji systemu operacyjnego pod kątem wydajności i bezpieczeństwa,</li>
                                    <li>weryfikacja rzeczywistych parametrów wydajnościowych systemu.</li>
                                </ul>                                
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header" id="headingThree">
                            <div class="mb-0">
                                <h2>
                                    Doradztwo w zakresie bezpieczeństwa infrastruktury teleinformatycznej
                                </h2>
                                <hr />
                                <h6>
                                    kompleksowe wsparcie Klienta w sytuacjach zagrożenia cybernetycznego infrastruktury teleinformatycznej organizacji.
                                </h6>
                                <button class="btn btn-link collapsed text-danger" type="button" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseThree">
                                    @lang('translation.more')
                                </button>
                            </div>
                        </div>
                        <div id="collapseFour" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample" style="">
                            <div class="card-body">
                                <u>Zakres usługi:</u>
                                <ul>
                                    <li>wykrywanie zagrożeń,</li>
                                    <li>
                                        doradztwo dot. obrony przed atakami,
                                    </li>
                                    <li>
                                        reagowania na incydenty,
                                    </li>
                                    <li>wsparcie Klienta w&nbsp;usuwaniu skutków cyberataków.</li>
                                </ul>
                                <u>
                                    Możliwość rozszerzenia usługi o:
                                </u>
                                <ul>
                                    <li>opracowanie polityki bezpieczeństwa IT,</li>
                                    <li>szkolenia z&nbsp;zakresu bezpieczeństwa teleinformatycznego.</li>
                                </ul>
                                <h2></h2>W ramach oceny powdrożeniowej projektu oraz planowania dalszego rozwoju rozwiązania proponujemy:

                                <strong>Wykrywanie zagrożeń:</strong>
                                    <ul>
                                        <li>weryfikacja i&nbsp;ocena skuteczności stosowanych mechanizmów obrony przed atakami oraz metod autoryzacji w&nbsp;systemach informatycznych,</li>
                                        <li>wykrywanie prób ataków, infekcji wirusowych, prób podszywania się pod inne komputery w&nbsp;organizacji,</li>
                                        <li>wykrywanie błędów konfiguracyjnych i&nbsp;anomalii w&nbsp;ruchu sieciowym,</li>
                                        <li>kontrola procedur i&nbsp;procesów zarządzania bezpieczeństwem,</li>
                                        <li>identyfikacja i&nbsp;ocena zagrożeń,</li>
                                        <li>kontrola występowania słów kluczowych Klienta i&nbsp;adresów IP w&nbsp;internetowych środowiskach przestępczych,</li>
                                        <li>wsparcie eksperckie w&nbsp;sytuacji zagrożenia bezpieczeństwa.</li>
                                    </ul>
                                    <strong>Doradztwo dot. obrony przed atakami:</strong>
                                    <ul>
                                        <li>możliwości blokowania ataków,</li>
                                        <li>rekomendacje dot. podniesienia poziomu bezpieczeństwa teleinformatycznego organizacji,</li>
                                        <li>określenie stanu bezpieczeństwa IT względem przyjętych standardów,</li>
                                        <li>hot-line w&nbsp;zakresie bezpieczeństwa IT.</li>
                                    </ul>
                                    <strong>Reagowanie na incydenty:</strong>
                                    <ul>
                                        <li>zatrzymanie ataku,</li>
                                        <li>określenie wpływu ataku na realizowane usługi,</li>
                                        <li>monitorowanie zdarzeń,</li>
                                        <li>rozpoznanie ścieżek włamania,</li>
                                        <li>identyfikacja i&nbsp;eliminacja przyczyn incydentu,</li>
                                        <li>neutralizacja skutków naruszenia bezpieczeństwa teleinformatycznego,</li>
                                        <li>zabezpieczenie dowodów ataku dla celów postępowania sądowego.</li>
                                    </ul>
                                    <strong>Wsparcie Klienta w usuwaniu skutków cyberataków:</strong>
                                    <ul>
                                        <li>analiza powłamaniowa,</li>
                                        <li>minimalizacja czasu usunięcia skutków ataku,</li>
                                        <li>tworzenie polityki ochrony systemów i&nbsp;sieci teleinformatycznych.</li>
                                    </ul>                                
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header" id="headingThree">
                            <div class="mb-0">
                                <h2>
                                    Monitorowanie stanu bezpieczeństwa infrastruktury teleinformatycznej
                                </h2>
                                <hr />
                                <h6>
                                    zwiększenie poziomu bezpieczeństwa organizacji poprzez stałe monitorowanie infrastruktury teleinformatycznej oraz powiadamianie o naruszeniach bezpieczeństwa.
                                </h6>
                                <button class="btn btn-link collapsed text-danger" type="button" data-toggle="collapse" data-target="#collapseFifth" aria-expanded="false" aria-controls="collapseThree">
                                    @lang('translation.more')
                                </button>
                            </div>
                        </div>
                        <div id="collapseFifth" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample" style="">
                            <div class="card-body">
                                <u>Zakres usługi:</u>
                                <ul>
                                    <li>stałe monitorowanie stanu bezpieczeństwa teleinformatycznego, </li>
                                    <li>
                                        powiadamianie o&nbsp;naruszeniach bezpieczeństwa i&nbsp;wykryciu słabości systemowych,
                                    </li>
                                    <li>
                                        reagowanie na incydenty,
                                    </li>
                                    <li>umożliwienie samodzielnego wykonywania testów penetracyjnych przez Klienta.</li>
                                </ul>
                                <u>
                                    Możliwość rozszerzenia usługi o:
                                </u>
                                <ul>
                                    <li>opracowanie polityki bezpieczeństwa IT,</li>
                                    <li>doradztwo w&nbsp;zakresie bezpieczeństwa,</li>
                                    <li>zabezpieczenie dowodów cyfrowych.</li>
                                </ul>
                                <h2>W ramach monitorowania stanu bezpieczeństwa infrastruktury teleinformatycznej w organizacji proponujemy:</h2>

                                <strong>Reagowanie na incydenty:</strong>
                                <ul>
                                    <li>stałe monitorowanie adresów IP,</li>
                                    <li>informacja o&nbsp;zdarzeniu,</li>
                                    <li>bieżąca aktualizacja bazy danych o&nbsp;cyberzagrożeniach,</li>
                                    <li>usługa realizowana przy pomocy dedykowanej aplikacji.</li>
                                </ul>
                                <strong>Wykrywanie słabości systemowych:</strong>
                                <ul>
                                    <li>raportowanie słabości systemów i&nbsp;aplikacji,</li>
                                    <li>weryfikacja infrastruktury teleinformatycznej Klienta pod kątem podatności na ataki sieciowe,</li>
                                    <li>możliwość przeciwdziałania zagrożeniom z&nbsp;cyberprzestrzeni.</li>
                                </ul>
                                <strong>Możliwość samodzielnego wykonywania testów penetracyjnych przez Klienta:</strong>
                                <ul>
                                    <li>wykonywanie testów penetracyjnych w&nbsp;dowolnym czasie,</li>
                                    <li>test adresów IP typu black-box (od zewnątrz),</li>
                                    <li>weryfikacja, czy wskazany adres może być celem ataku.</li>
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
