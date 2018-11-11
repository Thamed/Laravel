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
                                    Konsulting strategiczny
                                </h2>
                                <hr />
                                <h6>
                                    Doradztwo w zakresie działalności infrastruktury informatycznej, obejmujące analizy strategiczne systemów informacyjnych w celu opracowania strategii informatyzacji.
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
                                    <li>audyty stanu informatyzacji organizacji,</li>
                                    <li>bilans strategiczny,</li>
                                    <li>analiza makrootoczenia identyfikująca czynniki PESTLE istotne z punktu widzenia organizacji,</li>
                                    <li>analiza rynku IT,</li>
                                    <li>wdrożenie organizacji pracy w podejściu projektowym i procesowym.</li>
                                </ul>
                                <u>
                                    Możliwość rozszerzenia usługi o:
                                </u>
                                <ul>
                                    <li>opracowanie Zrównoważonej Karty Wyników,</li>
                                    <li>przygotowanie projektu doskonalenia organizacji.</li>
                                </ul>
                                <h2>
                                    Do usług konsultingu strategicznego należą m.in.:
                                </h2>
                                <strong>
                                    Audyty stanu informatyzacji organizacji:
                                </strong>
                                <ul>
                                    <li>przegląd funkcjonujących w organizacji rozwiązań sprzętowych i programowych,</li>
                                    <li>przegląd struktur organizacyjnych i zasad zarządzania obszarem IT,</li>
                                    <li>ocena kluczowych składników infrastruktury informatycznej organizacji,</li>
                                    <li>ewaluacja zdolności infrastruktury IT do spełniania podstawowych wymagań biznesu,</li>
                                    <li>identyfikacja pilnych potrzeb zmian w infrastrukturze IT.</li>
                                </ul>
                                <strong>
                                    Analizy strategiczne systemów informacyjnych:
                                </strong>
                                <ul>
                                    <li>identyfikacja czynników wewnętrznych i zewnętrznych (PESTLE) warunkujących działanie systemu informacyjnego,</li>
                                    <li>ustalenie szans i zagrożeń wynikających z bliższego i dalszego otoczenia organizacji,</li>
                                    <li>identyfikacja kluczowych w kontekście wymagań biznesu składowych systemu informacyjnego organizacji,</li>
                                    <li>ustalenie silnych i słabych stron systemu informacyjnego organizacji,</li>
                                    <li>bilans strategiczny oraz wynikające z niego założenia strategii informatyzacji organizacji.</li>
                                </ul>
                                <strong>
                                    Diagnozy strategiczne:
                                </strong>
                                <ul>
                                    <li>analiza makro-otoczenia identyfikująca czynniki Prawne Ekonomiczne Społeczne Technologiczne Prawne i Ekonomiczne (PESTLE) istotne z punktu widzenia organizacji,</li>
                                    <li>analiza pięciu sił Portera charakteryzująca strukturę rynkową, na której funkcjonuje organizacja,</li>
                                    <li>analiza wnętrza przedsiębiorstwa mająca na celu identyfikację zasobów i umiejętności istotnych z punktu widzenia prowadzonej działalności,</li>
                                    <li>analiza SWOT organizacji obrazująca w sposób ilościowy silne i słabe strony oraz szanse i zagrożenia stojące przed organizacją.</li>
                                </ul>
                                <strong>
                                    Opracowanie strategii informatyzacji:
                                </strong>
                                <ul>
                                    <li>przygotowanie kilkuletniego programu działania obejmującego portfel projektów IT dostosowany do potrzeb biznesowych organizacji,</li>
                                    <li>identyfikacja kluczowych kierunków biznesu wymagających wsparcia przez obszar IT,</li>
                                    <li>ocena stanu bieżącego stosowanych w organizacji rozwiązań IT,</li>
                                    <li>opracowanie listy projektów IT (tzw. strategicznych inicjatyw IT) odpowiadających potrzebom organizacji i trendom branżowym,</li>
                                    <li>przygotowanie harmonogramów ramowych oraz oszacowań kosztowych dla planowanych projektów,</li>
                                    <li>zdefiniowanie harmonogramu koordynacyjnego projektów.</li>
                                </ul>
                                <strong>Analiza rynku IT:</strong>
                                <ul>
                                    <li>analiza aktualnej struktury danego segmentu rynku IT (głównych graczy, wielkości rynku, klientów),</li>
                                    <li>analiza tendencji światowych w zakresie danego segmentu rynku IT,</li>
                                    <li>prognoza kierunków rozwoju danego segmentu rynku IT oraz potencjału jego wzrostu.</li>
                                </ul>
                                <strong>Wdrożenie organizacji pracy w podejściu projektowym:</strong>
                                <ul>
                                    <li>standaryzacja procedur projektowych stosowanych w organizacji,</li>
                                    <li>przygotowanie katalogu procedur projektowych,</li>
                                    <li>opracowanie wzorców i repozytorium dokumentacji projektowej.</li>
                                </ul>
                                <strong>Wdrożenie organizacji pracy w podejściu procesowym:</strong>
                                <ul>
                                    <li>opracowanie dla zdefiniowanego modelu procesowego kart kontrolnych,</li>
                                    <li>zdefiniowanie procedur zarządzania procesowego,</li>
                                    <li>przydział odpowiedzialności za procesy,</li>
                                    <li>powiązanie wydajności procesów z systemem wynagradzania menedżerów organizacji.</li>
                                </ul>
                                <strong>Opracowanie strategii biznesowej organizacji:</strong>
                                <ul>
                                    <li>zdefiniowanie założeń strategicznych dla organizacji opartych na wynikach diagnozy strategicznej,</li>
                                    <li>opracowanie misji i wizji organizacji,</li>
                                    <li>sformułowanie celów strategicznych organizacji,</li>
                                    <li>identyfikacja kluczowych procesów gospodarczych organizacji warunkujących realizację celów strategicznych,</li>
                                    <li>identyfikacja inicjatyw projektowych wymaganych dla realizacji celów strategicznych.</li>
                                </ul>
                                <strong>Opracowanie Zrównoważonej Karty Wyników (BSC - Balanced Scorecard) dla organizacji:</strong>
                                <ul>
                                    <li>zapewnienie możliwości skutecznego zdefiniowania i wdrożenia strategii w organizacji,</li>
                                    <li>sformułowanie strategii w kategoriach mierzalnych celów strategicznych,</li>
                                    <li>opracowanie systemu pomiarowego pozwalającego na ewaluację poziomu realizacji strategii,</li>
                                    <li>ustalenie zasad wzajemnego oddziaływania celów strategicznych, powiązań przyczynowo-skutkowych,</li>
                                    <li>dekompozycja strategi organizacji na zadania strategiczne poszczególnych jednostek organizacyjnych,</li>
                                    <li>komunikacja strategii w organizacji zapewniająca wspólne rozumienie strategii przez menedżerów,</li>
                                    <li>powiązanie systemu motywacyjnego menedżerów z realizacją celów strategicznych,</li>
                                    <li>umożliwienie skutecznego monitorowania realizacji strategii i jej okresowej aktualizacji.</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header" id="headingTwo">
                            <div class="mb-0">
                                <h2>
                                    Doskonalenie organizacji
                                </h2>
                                <hr />
                                <h6>
                                    szybsza realizacja działań w organizacji przy jednoczesnej redukcji kosztów ich wykonania.
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
                                    <li>modelowanie procesów biznesowych,</li>
                                    <li>budowa modelu symulacyjnego procesów biznesowych,</li>
                                    <li>usprawnienie procesów biznesowych,</li>
                                    <li>budowa koncepcji wsparcia informatycznego procesów biznesowych.</li>
                                </ul>
                                <u>Możliwość rozszerzenia usługi o:</u>
                                <ul>
                                    <li>przygotowanie do wdrożeń systemów informatycznych,</li>
                                    <li>wsparcie w wyborze systemów informatycznych i negocjacjach umów na ich realizację,</li>
                                    <li>audyt i doradztwo projektowe.</li>
                                </ul>
                                <h2>
                                    Oferujemy projekty doskonalenia organizacji takie jak:
                                </h2>
                                <strong>
                                    Modelowanie procesów biznesowych:
                                </strong><br />
                                <ul>
                                    <li>podstawa dla procesowego podejścia do zarządzania organizacją (w ramach np.: BSC, BPM, ERP, SOA),</li>
                                    <li>udokumentowanie przebiegu procesów biznesowych organizacji w postaci tzw. map procesów,</li>
                                    <li>sformalizowanie wiedzy o sposobie działania organizacji, a tym samym obniżenie poziomu zależności organizacji od pracowników "niezastąpionych",</li>
                                    <li>baza dla wdrożeń rozwiązań IT ukierunkowanych na automatyzację działania organizacji (ERP, CRM, SCM, Workflow i innych),</li>
                                    <li>podstawa dla doskonalenia organizacji opartego o analizy strukturalne procesów,</li>
                                    <li>możliwość weryfikacji zakresów obowiązków komórek organizacyjnych.</li>
                                </ul>
                                <strong>
                                    Budowa modelu symulacyjnego procesów biznesowych:
                                </strong>
                                <ul>
                                    <li>ustalenie miar pozwalających na monitorowanie efektywności procesu,</li>
                                    <li>możliwość zdefiniowania odpowiedzialności za procesy – ustalenie w organizacji ról tzw. właścicieli procesów,</li>
                                    <li>możliwość powiązania systemu motywacyjnego kadry kierowniczej z uzyskiwanymi w działaniu organizacji wynikami,</li>
                                    <li>powiązanie zasobów organizacji z realizowanymi działaniami,</li>
                                    <li>możliwość weryfikacji zakresów obowiązków poszczególnych ról pracowniczych,</li>
                                    <li>podstawa dla definiowania profili stanowisk pracy,</li>
                                    <li>możliwość przeprowadzania ilościowych analiz symulacyjnych typu "co-jeśli" ukierunkowanych na optymalizację działania organizacji,</li>
                                    <li>projektowanie zmian działania organizacji w środowisku symulacyjnym przed ich wprowadzeniem w życie.</li>
                                </ul>
                                <strong>
                                    Usprawnienie procesów biznesowych:
                                </strong>
                                <ul>
                                    <li>zapewnienie szybszej realizacji działań w organizacji przy jednoczesnej redukacji kosztów ich wykonania,</li>
                                    <li>możliwość oceny realizowanych obecnie procesów gospodarczych zgodnie z przyjętym systemem miar jakości,</li>
                                    <li>identyfikacja miejsc/działań decydujących o efektywności całości procesu tzw. wąskich gardeł,</li>
                                    <li>możliwość dokonywania optymalizacji czasowych i kosztowych działań składowych,</li>
                                    <li>projektowanie modyfikacji kształtu procesów w zakresie przebiegu i konsumpcji zasobów,</li>
                                    <li>zwiększenie płynności przepływu pracy (tzw. workflow) w organizacji.</li>
                                </ul>
                                <strong>
                                    Budowa koncepcji wsparcia informatycznego procesów biznesowych:
                                </strong>
                                <ul>
                                    <li>identyfikacja wymagań procesów biznesowych w zakresie wsparcia informatycznego,</li>
                                    <li>bilans obecnego poziomu wsparcia procesów przez rozwiązania IT stosowane w organizacji,</li>
                                    <li>ustalenie potrzeb w zakresie rozwoju, wymiany lub nowych wdrożeń systemów informatycznych,</li>
                                    <li>projektowanie architektury docelowej systemu informacyjnego organizacji.</li>
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
