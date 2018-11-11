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
                                    Analiza przedwdrożeniowa
                                </h2>
                                <hr />
                                <h6>
                                    Profesjonalne przygotowanie do wdrożeń systemów informacyjnych w przedsiębiorstwach z minimalizacją ryzyka wystąpienia problemów projektowych oraz zapewnieniem wsparcia analitycznego i doradczego.
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
                                    <li>analiza przedwdrożeniowa oparta na modelu procesowym,</li>
                                    <li>analiza infrastruktury informatycznej,</li>
                                    <li>analiza potrzeb informacyjnych organizacji,</li>
                                    <li>przygotowanie specyfikacji wdrożeniowej dla systemów informatycznych.</li>
                                </ul>
                                <u>
                                    Możliwość rozszerzenia usługi o:
                                </u>
                                <ul>
                                    <li>wsparcie w wyborze systemów informatycznych,</li>
                                    <li>analizę umów oferentów,</li>
                                    <li>przeprowadzenie negocjacji z oferentami rozwiązań,</li>
                                    <li>nadzór audytowy doświadczonego Audytora nad realizacją projektu zgodnie z postanowieniami umowy i praktyją projektową.</li>
                                </ul>
                                <h2>
                                    Przygotowanie do wdrożeń systemów informacyjnych w przedsiębiorstwach obejmuje:
                                </h2>
                                <strong>
                                    Analizy przedwdrożeniowe oparte na modelu procesowym:
                                </strong>
                                <ul>
                                    <li>opracowanie modelu procesów gospodarczych jako podstawy dla definicji zakresu planowanego wdrożenia,</li>
                                    <li>identyfikacja niezbędnych funkcjonalności systemu informacyjnego z punktu widzenia potrzeb biznesowych przedsiębiorstwa,</li>
                                    <li>określenie potencjalnych obszarów optymalizacji prowadzonej działalności w wyniku wdrożenia systemu informatycznego,</li>
                                    <li>identyfikacja niezbędnych działań organizacyjnych poprzedzających wdrożenie systemu informatycznego.</li>
                                </ul>
                                <strong>
                                    Analizy infrastruktury informatycznej:
                                </strong>
                                <ul>
                                    <li>przygotowanie bazy informacyjnej niezbędnej do podejmowania optymalnych decyzji w zakresie rozwoju informatyki,</li>
                                    <li>charakterystyka wydajności infrastruktury informatycznej (m.in.: stacje robocze, serwery, urządzania sieciowe, drukarki),</li>
                                    <li>ewidencja posiadanych platform systemowych (m.in. systemy operacyjne, systemy zarządzania bazami danych, systemy archiwizacji danych),</li>
                                    <li>analiza przydatności infrastruktury aplikacyjnej (m.in.: systemy zarządzania, systemy technologiczne, systemy pracy grupowej),</li>
                                    <li>audyt stosowanych metod zarządzania informatyką (m.in. procedury zakupów informatycznych, procedury prowadzenia projektów informatycznych, procedury administracyjne).</li>
                                </ul>
                                <strong>
                                    Analizy potrzeb informacyjnych organizacji:
                                </strong>
                                <ul>
                                    <li>identyfikacja najważniejszych twórców i odbiorców informacji,</li>
                                    <li>charakterystyka potrzeb raportacyjnych z punktu widzenia kadry zarządzającej i właścicieli,</li>
                                    <li>analiza posiadanych zbiorów danych.</li>
                                </ul>
                                <strong>
                                    Przygotowanie specyfikacji wdrożeniowej dla systemów informatycznych:
                                </strong>
                                <ul>
                                    <li>określenie celów wdrożenia oraz mierników pozwalających na ocenę stopnia realizacji przyjętych celów,</li>
                                    <li>sprecyzowanie oczekiwanej funkcjonalności budowanego systemu informatycznego,</li>
                                    <li>określenie krytycznych czynników sukcesu przedsięwzięcia oraz najważniejszych ryzyk projektowych.</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header" id="headingTwo">
                            <div class="mb-0">
                                <h2>
                                    Doradztwo w przetargu na wybór systemu
                                </h2>
                                <hr />
                                <h6>
                                    Zapewnienie wyboru najbardziej odpowiedniego dla organizacji produktu IT oraz doboru firmy wdrożeniowej gwarantującej jakość i bezpieczeństwo realizacji projektu.
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
                                    <li>opracowanie opisu przedmiotu zamówienia,</li>
                                    <li>przygotowanie ogłoszenia o postępowaniu,</li>
                                    <li>przygotowanie Specyfikacji Istotnych Warunków Zamówienia (SIWZ),</li>
                                    <li>przeprowadzenie analizy porównawczej zebranych ofert,</li>
                                    <li>wsparcie w procesie negocjacji kontraktu.</li>
                                </ul>
                                <u>Możliwość rozszerzenia usługi o:</u>
                                <ul>
                                    <li>nadzór audytowy doświadczonego Audytora nad realizacją projektu,</li>
                                    <li>weryfikacja jakości kluczowych produktów projektu,</li>
                                    <li>okresowe wsparcie w zarządzaniu projektem.</li>
                                </ul>
                                <h2>
                                    W ramach wsparcia w wyborze systemów informatycznych i negocjacjach umów na ich realizację proponujemy:
                                </h2>
                                <strong>
                                    Przygotowanie dokumentacji SIWZ (Specyfikacji Istotnych Warunków Zamówienia) dla systemów informatycznych (również według wymagań ustawy Prawo zamówień publicznych):
                                </strong><br />
                                <ul>
                                    <li>opis przedmiotu zamówienia,</li>
                                    <li>określenie warunków dopuszczających dla wykonawców,</li>
                                    <li>sformułowanie zapisów zabezpieczających uzyskanie niezbędnej funkcjonalności rozwiązania,</li>
                                    <li>określenie wymagań względem: wdrożenia, licencji, serwisu oraz gwarancji,</li>
                                    <li>sformułowanie IPU (Istotnych Postanowień Umowy),</li>
                                    <li>sprecyzowanie kryteriów oceny ofert,</li>
                                    <li>zapewnienie porównywalności składanych ofert.</li>
                                </ul>
                                <strong>
                                    Doradztwo w zakresie wyboru systemów informatycznych (w tym: klasy ERP – Enterprise Resource Planning oraz CRM – Customer Relationship Management):
                                </strong>
                                <ul>
                                    <li>analiza dostępnych na rynku rozwiązań,</li>
                                    <li>analiza doświadczeń dostawców rozwiązań,</li>
                                    <li>porównanie przydatności systemów z punktu widzenia potrzeb organizacji,</li>
                                    <li>rekomendacja optymalnego wyboru.</li>
                                </ul>
                                <strong>
                                    Analizę i ranking ofert złożonych w postępowaniach przetargowych na systemy informatyczne:
                                </strong>
                                <ul>
                                    <li>analiza funkcjonalności oferowanych rozwiązań,</li>
                                    <li>analiza doświadczenia wykonawców adekwatnego do specyfiki organizacji,</li>
                                    <li>porównanie warunków wdrożenia, serwisu oraz dostawy rozwiązań,</li>
                                    <li>ocena zaoferowanych warunków handlowych.</li>
                                </ul>
                                <strong>
                                    Kompleksowe doradztwo przetargowe ukierunkowane na wynegocjowanie korzystnych kontraktów na realizację systemów informatycznych (wdrożeniowych, serwisowych, licencyjnych, outsourcingowych typu SLA – Service Level Agreement):
                                </strong>
                                <ul>
                                    <li>analiza umów pod kątem prawnym i merytorycznym,</li>
                                    <li>wykrywanie potencjalnych "pułapek" w umowach,</li>
                                    <li>projektowanie zapisów umownych zabezpieczających sukces projektu,</li>
                                    <li>negocjacje warunków kontraktów na realizację systemów informatycznych.</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header" id="headingThree">
                            <div class="mb-0">
                                <h2>
                                    Audyt i doradztwo projektowe
                                </h2>
                                <hr />
                                <h6>
                                    Zabezpieczenie prowadzenia projektu wdrożeniowego systemu informatycznego poprzez ciągły monitoring projektu, obiektywną ocenę jego stanu, identyfikację zagrożeń oraz rekomendację działań zabezpieczających projekt, a w razie potrzeby działań naprawczych.
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
                                    <li>nadzór doświadczonego konsultanta pełniącego rolę Audytora zewnętrznego,</li>
                                    <li>sprawdzenie zgodności z dobrymi praktykami wdrożeniowymi oraz przyjętymi w umowie i dokumentacji projektowej założeniami,</li>
                                    <li>dostarczanie fachowych porad przy podejmowaniu strategicznych decyzji dotyczących kierunków prowadzenia projektu,</li>
                                    <li>opiniowanie zasadności odbioru projektów wdrożenia.</li>
                                </ul>
                                <u>Możliwość rozszerzenia usługi o:</u>
                                <ul>
                                    <li>stworzenie planu naprawczego projektu,</li>
                                    <li>prowadzenie negocjacji, w imieniu Klienta, z firmą informatyczną,</li>
                                    <li>okresowy wynajem Project Managera (interim management),</li>
                                    <li>możliwość zarządzania projektem przez cały czas trwania przedsięwzięcia,</li>
                                    <li>okresową weryfikację pracy Project Managera zatrudnionego w organizacji.</li>
                                </ul>
                                <h2>W ramach oceny powdrożeniowej projektu oraz planowania dalszego rozwoju rozwiązania proponujemy:</h2>
                                <strong>
                                    Analiza powdrożeniowa projektu:
                                </strong>
                                <strong>

                                </strong>
                                <ul>
                                    <li>analiza czasowej i budżetowej zgodności projektu z założeniami,</li>
                                    <li>weryfikacja dostarczenia wszystkich założonych produktów projektu,</li>
                                    <li>analiza realizacji projektu zgodnie z założeniami oferty i umowy,</li>
                                    <li>analiza zgodności trybu realizacji projektu z dobrym praktykami i metodykami projektowymi (np. PRINCE2),</li>
                                    <li>weryfikacja poprawności zarządzania zmianą w toku realizacji projektu,</li>
                                    <li>weryfikacja udokumentowania prac projektowych i opracowanego rozwiązania.</li>
                                </ul>
                                <strong>
                                    Weryfikacja poziomu realizacji założonych celów projektu:
                                </strong>
                                <ul>
                                    <li>identyfikacja listy celów projektowych,</li>
                                    <li>weryfikacja jakości (w tym mierzalności) zdefiniowania celów projektowych,</li>
                                    <li>ocena stopnia realizacji poszczególnych celów projektu (ekonomicznych, organizacyjnych, technicznych itd.),</li>
                                    <li>ocena efektywności realizacji projektu.</li>
                                </ul>
                                <strong>
                                    Analiza stabilności rozwiązania:
                                </strong>
                                <ul>
                                    <li>weryfikacja jakości i wyników zrealizowanych testów rozwiązania,</li>
                                    <li>analiza przebiegu i wyników okresu stabilizacji rozwiązania,</li>
                                    <li>analiza logów helpdesk i serwisu,</li>
                                    <li>ocena poziomu przygotowania użytkowników do pracy z systemem,</li>
                                    <li>analiza jakości danych w systemie,</li>
                                    <li>ocena bezpieczeństwa rozwiązania,</li>
                                    <li>opracowanie zaleceń w zakresie wymaganych poprawek gwarancyjnych.</li>
                                </ul>
                                <strong>
                                    Weryfikacja kompletności dokumentacji powdrożeniowej i procedur eksploatacyjnych:
                                </strong>
                                <ul>
                                    <li>analiza zakresu i jakości dokumentacji powdrożeniowej,</li>
                                    <li>weryfikacja zgodności dokumentacji z systemem,</li>
                                    <li>analiza i ocena procedur eksploatacyjnych,</li>
                                    <li>ocena zabezpieczeń D&R.</li>
                                </ul>
                                <strong>
                                    Analiza poziomu i jakości serwisu:
                                </strong>
                                <ul>
                                    <li>analiza i ocena umowy serwisowej,</li>
                                    <li>weryfikacja jakości świadczonych usług (spełnienie SLA),</li>
                                    <li>ocena poprawności działania procedur serwisowych.</li>
                                </ul>
                                <strong>
                                    Ocena dojrzałości wdrożenia, zakresu i poziomu wykorzystania możliwości systemu:
                                </strong>
                                <ul>
                                    <li>analiza możliwości funkcjonalnych standardu funkcjonalnego rozwiązania,</li>
                                    <li>ocena poziomu wykorzystania możliwości funkcjonalnych systemu przez obecne rozwiązanie w organizacji,</li>
                                    <li>analiza zakresu wykorzystania wdrożonych funkcji rozwiązania przez użytkowników,</li>
                                    <li>identyfikacja obszarów „szybkiego” wzrostu efektywności wykorzystania rozwiązania w organizacji.</li>
                                </ul>
                                <strong>
                                    Zaprojektowanie dalszych działań rozwojowych dla zwiększenia stopy zwrotu z inwestycji w system:
                                </strong>
                                <ul>
                                    <li>identyfikacja niezrealizowanych i nowych potrzeb rozwojowych organizacji w zakresie rozwiązania,</li>
                                    <li>analiza cykli życia produktów bazowych dla rozwiązania,</li>
                                    <li>analiza możliwości technicznych rozbudowy rozwiązania (standard, modyfikacje),</li>
                                    <li>opracowanie krótkoterminowego planu doskonalenia poziomu wykorzystania systemu,</li>
                                    <li>opracowanie długoterminowego planu rozwoju systemu w organizacji.</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header" id="headingThree">
                            <div class="mb-0">
                                <h2>
                                    Ocena powdrożeniowa projektu
                                </h2>
                                <hr />
                                <h6>
                                    Ocena projektu i realizacji celów wdrożenia wraz z identyfikacją możliwości dalszego rozwoju rozwiązania.
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
                                    <li>analiza powdrożeniowa projektu,</li>
                                    <li>weryfikacja poziomu realizacji założonych celów projektu,</li>
                                    <li>analiza stabilności rozwiązania,</li>
                                    <li>weryfikacja kompletności dokumentacji powdrożeniowej i procedur eksploatacyjnych,</li>
                                    <li>analiza poziomu i jakości serwisu,</li>
                                    <li>ocena dojrzałości wdrożenia, zakresu i poziomu wykorzystania możliwości systemu,</li>
                                    <li>zaprojektowanie dalszych działań rozwojowych dla zwiększenia stopy zwrotu z inwestycji w system.</li>
                                </ul>
                                <u>
                                    Możliwość rozszerzenia usługi o:
                                </u>
                                <ul>
                                    <li>nadzór audytowy nad realizacją planu rozwoju rozwiązania,</li>
                                    <li>renegocjacje warunków umowy serwisowej,</li>
                                    <li>audyt bezpieczeństwa wdrożonego rozwiązania,</li>
                                    <li>wsparcie w negocjacjach z Wykonawcą wdrożenia w zakresie realizacji planu rozwoju rozwiązania,</li>
                                    <li>opracowanie pryncypiów architektonicznych dalszego rozwoju IT w organizacji,</li>
                                    <li>opracowanie standardu procedur eksploatacyjnych i dokumentacji dla cyklu życia rozwiązań IT w organizacji.</li>
                                </ul>
                                <h2></h2>W ramach oceny powdrożeniowej projektu oraz planowania dalszego rozwoju rozwiązania proponujemy:

                                <strong>Analiza powdrożeniowa projektu:</strong>
                                <ul>
                                    <li>analiza czasowej i budżetowej zgodności projektu z założeniami,</li>
                                    <li>weryfikacja dostarczenia wszystkich założonych produktów projektu,</li>
                                    <li>analiza realizacji projektu zgodnie z założeniami oferty i umowy,</li>
                                    <li>analiza zgodności trybu realizacji projektu z dobrym praktykami i metodykami projektowymi (np. PRINCE2),</li>
                                    <li>weryfikacja poprawności zarządzania zmianą w toku realizacji projektu,</li>
                                    <li>weryfikacja udokumentowania prac projektowych i opracowanego rozwiązania.</li>
                                </ul>
                                <strong>Weryfikacja poziomu realizacji założonych celów projektu:</strong>
                                <ul>
                                    <li>identyfikacja listy celów projektowych,</li>
                                    <li>weryfikacja jakości (w tym mierzalności) zdefiniowania celów projektowych,</li>
                                    <li>ocena stopnia realizacji poszczególnych celów projektu (ekonomicznych, organizacyjnych, technicznych itd.),</li>
                                    <li>ocena efektywności realizacji projektu.</li>
                                </ul>
                                <strong>Analiza stabilności rozwiązania:</strong>
                                <ul>
                                    <li>weryfikacja jakości i wyników zrealizowanych testów rozwiązania,</li>
                                    <li>analiza przebiegu i wyników okresu stabilizacji rozwiązania,</li>
                                    <li>analiza logów helpdesk i serwisu,</li>
                                    <li>ocena poziomu przygotowania użytkowników do pracy z systemem,</li>
                                    <li>analiza jakości danych w systemie,</li>
                                    <li>ocena bezpieczeństwa rozwiązania,</li>
                                    <li>opracowanie zaleceń w zakresie wymaganych poprawek gwarancyjnych.</li>
                                </ul>
                                <strong>Weryfikacja kompletności dokumentacji powdrożeniowej i procedur eksploatacyjnych:</strong>
                                <ul>
                                    <li>analiza zakresu i jakości dokumentacji powdrożeniowej,</li>
                                    <li>weryfikacja zgodności dokumentacji z systemem,</li>
                                    <li>analiza i ocena procedur eksploatacyjnych,</li>
                                    <li>ocena zabezpieczeń D&R.</li>
                                </ul>
                                <strong>Analiza poziomu i jakości serwisu:</strong>
                                <ul>
                                    <li>analiza i ocena umowy serwisowej,</li>
                                    <li>weryfikacja jakości świadczonych usług (spełnienie SLA),</li>
                                    <li>ocena poprawności działania procedur serwisowych.</li>
                                </ul>
                                <strong>Ocena dojrzałości wdrożenia, zakresu i poziomu wykorzystania możliwości systemu:</strong>
                                <ul>
                                    <li>analiza możliwości funkcjonalnych standardu funkcjonalnego rozwiązania,</li>
                                    <li>ocena poziomu wykorzystania możliwości funkcjonalnych systemu przez obecne rozwiązanie w organizacji,</li>
                                    <li>analiza zakresu wykorzystania wdrożonych funkcji rozwiązania przez użytkowników,</li>
                                    <li> identyfikacja obszarów „szybkiego” wzrostu efektywności wykorzystania rozwiązania w organizacji.</li>
                                </ul>
                                <strong>Zaprojektowanie dalszych działań rozwojowych dla zwiększenia stopy zwrotu z inwestycji w system:</strong>
                                <ul>
                                    <li>identyfikacja niezrealizowanych i nowych potrzeb rozwojowych organizacji w zakresie rozwiązania,</li>
                                    <li>analiza cykli życia produktów bazowych dla rozwiązania,</li>
                                    <li>analiza możliwości technicznych rozbudowy rozwiązania (standard, modyfikacje),</li>
                                    <li>opracowanie krótkoterminowego planu doskonalenia poziomu wykorzystania systemu,</li>
                                    <li>opracowanie długoterminowego planu rozwoju systemu w organizacji.</li>
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
