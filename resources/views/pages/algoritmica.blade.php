@extends('app')

@section('content')
    <section id="content">
        <div class="ui container">
            <div class="head"><i class="icon code"></i> {{ $title }} <div class="green"></div><div class="red"></div></div>
            <div class="ui segment algoritmica">
            <div class="col-xs-12 ">
                            <nav clas="ar">
                                <div class="nav nav-tabs nav-fill" id="nav-tab" role="tablist">
                                    <a class="nav-item nav-link active" id="nav-anunt-tab" data-toggle="tab" href="#nav-anunt" role="tab" aria-controls="nav-anunt" aria-selected="true">Anunturi</a>
                                    <a class="nav-item nav-link" id="nav-reg-tab" data-toggle="tab" href="#nav-reg" role="tab" aria-controls="nav-reg" aria-selected="false">Regulament</a>
                                    <a class="nav-item nav-link" id="nav-rez-tab" data-toggle="tab" href="#nav-rez" role="tab" aria-controls="nav-rez" aria-selected="false">Editiile anterioare</a>
                                </div>
                            </nav>
                            
                            <div class="tab-content py-3 px-3 px-sm-0" id="nav-tabContent">
                                <div class="tab-pane fade show active" id="nav-anunt" role="tabpanel" aria-labelledby="nav-anunt-tab">
                                <br><center><h2>FII Code - Algoritmica</h2>
	<br>
	Aceasta pagina este dedicata sectiunii de algoritmica din cadrul concursului FII Code. Aici se vor posta informatiile utile participantilor la aceasta sectiune.

	<br>
	<br>
	Proba de algoritmica va fi alcatuita din 3 probe online, la finalul carora se va stabili un clasament cumulat, dupa care se vor stabili finalistii onsite.
	Rundele de calificare, cat si runda finala vor avea dificultate asemanatoare cu o runda CSAcademy div 2.
	<br><br><br>


	<b>Calendar proba Algoritmica</b><br><br>

	
		Runda 1 - 13 februarie 2019 		<br>
		Runda 2 - 27 februarie 2019 				<br>
		Runda 3 - 20 martie 2019				<br>
		Runda Finala - 13 aprilie 2019		<br>
	</center>

                                </div>
            
            <div class="tab-pane fade" id="nav-reg" role="tabpanel" aria-labelledby="nav-reg-tab">
                <div class="language-box" style="text-align: left !important;">
                <a href="#ro" onclick="ro()"><img class="language-button" src="{{ asset('img/ro.png') }}" alt="Romana"/></a>
                <a href="#en" onclick="eng_algo()"><img class="language-button" src="{{ asset('img/eng.png') }}" alt="English"/></a>
            </div>
            <h2 id="h1"><strong>Regulamentul secțiunii Algoritmică</strong></h2>
                <p id="p1">Concursul național de informatică FIICode este organizat de către Facultatea de Informatică Iași și Asociația Studenților Informaticieni Ieșeni (ASII), în parteneriat cu Inspectoratul Școlar Județean Iași.</p>
                <p id="p2"><strong>Obiective</strong></p>
                <p id="p3">În cadrul probei de Algoritmică se urmărește dezvoltarea:</p>
                <ul>
                    <li id="l1">pasiunii și interesul pentru Informatică și Tehnologia Informației și Comunicării</li>
                    <li id="l2">competențelor în rezolvarea problemelor folosind calculatorul</li>
                    <li id="l3">abilităților de prezentare și promovare a proiectelor realizate</li>
                    <li id="l4">gândirii algoritmice</li>
                    <li id="l5">abilităților de programare</li>
                    <li id="l6">spiritului competitiv</li>
                </ul>
                <p id="p4"><strong>Participanți</strong></p>
                <p id="p5">Participarea la concurs se face individual, concurenții fiind înscriși la momentul începerii concursului la liceu sau facultate, indiferent de naționalitate. Fiecare concurent va fi identificat printr-un număr de concurs unic. Etapa online a concursului va fi formată din 3 runde de calificare formate din 3 până la 5 probleme ce vor fi evaluate automat. În urma celor 3 runde, se vor stabili concurenții care vor participa la etapa finală. Este interzisă participarea la proba de Algoritmică a membrilor comisiei!</p>
                <p id="p6">Condiții privitoare la statutul de mentor:</p>
                <ul>
                    <li id="l11">trebuie sa aibă împlinită vârsta de 18 ani la data de 1 Martie 2018</li>
                    <li id="l12">poate să-i însoțească pe participanți la etapa finală, în cazul calificării</li>
                </ul>
                <p id="p7"><strong>Etape</strong></p>
                <ul>
                    <li id="l21">Runda 1: 13 februarie</li>
                    <li id="l22">Runda 2: 27 februarie</li>
                    <li id="l23">Runda 3: 20 martie</li>
                    <li id="l24">Runda finală: 13 aprilie</li>
                </ul>
                <p id="p8">Cele 3 runde online constau în rezolvarea unor seturi de 3-5 probleme. Soluțiile sunt evaluate automat și punctajele participanților se cumulează după fiecare rundă.</p>
                <p id="p9">Etapa de calificare constă în selectarea participanților ce vor lua parte la etapa finala, în urma rundelor online.</p>
                <p id="p10">Runda final constă în rezolvarea unui set de 5 probleme.</p>
                <p id="p11"><strong>Înscriere</strong></p>
                <p id="p12">Etapa online se desfășoară pe site-ul concursului FIICode. Soluțiile vor fi evaluate online, pe platforma CMS hostată pe serverul FIICode.</p>
                <p id="p13"><strong>Limbaje</strong></p>
                <p id="p14">Limbajele de programare admise sunt Pascal, C, C++, Haskell și Java. Compilatoarele și mediile de lucru necesare rezolvării problemelor algoritmice vor fi instalate pe discurile stațiilor de lucru. Folosirea de resurse de orice fel, altele decât cele indicate de comisie este strict interzisă.</p>
                <p id="p15"><strong>Comisie</strong></p>
                <p id="p16">Comisia de la proba de Algoritmică este formată din:</p>
                <ul>
                    <li id="l31">Președintele comisiei de algoritmică</li>
                    <li id="l32">coordonatorul probei de algoritmică</li>
                    <li id="l33">cadre didactice sau colaboratori ai Facultății de Informatică</li>
                    <li id="l34">reprezentanți ai companiilor partenere Platinum</li>
                </ul>
                <p id="p17">Opțional, vor face parte din Comisie:</p>
                <ul>
                    <li id="l35">cadre didactice ale liceelor si colegiilor din Iași</li>
                </ul>
                <p id="p18"><strong>Evaluare</strong></p>
                <p id="p19">Este recomandat să instalați pe calculatorul vostru aceleași versiuni pentru compilatoare ca și cele specificate în regulament, deoarece există diferențe între versiuni.</p>
                <p id="p20">Fiți deosebit de atenți la fișierele antet utilizate. Evaluatorul testează dacă programul nu returnează un cod de eroare.</p>
                <p id="p21">Concurenții sunt invitați să încadreze programele în limitele de spațiu și timp ale problemei. În caz contrar, nu vor obține puncte pe testele respective. Soluțiile vor fi evaluate online, pe platforma CMS hostată pe serverul FIICode.</p>
                <p id="p22"><strong>Rezultate</strong></p>
                <p id="p23">Fiecare problemă va avea un punctaj între 200 și 3000.</p>
                <p id="p24">Formula de calcul a scorului, pe scurt:</p>
                <p id="p25">Score = min (MaxScore - AcceptedTime * MaxScore * 0.005 - WrongSubmissions * 20, MaxScore * 3 / 10), unde:</p>
                <p id="p26">Score = Scorul participantului pentru submisia curentă </p>
                <p id="p27">MaxScore = Scorul maxim alocat problemei</p>
                <p id="p28">AcceptedTime = Timpul (în minute) de la începutul rundei până la momentul primei submisii accepted a soluției</p>
                <p id="p29">WrongSubmissions = numărul de submisii greșite</p>
                <p id="p30">Explicație:</p>
                <p id="p31">Pentru fiecare minut trecut se va scade 1/200 din valoarea problemei (0.5%). De asemenea, se va scade și câte 20 de puncte pentru fiecare submisie greșită la acea problemă.</p>
                <p id="p32">De exemplu:</p>
                <p id="p33">Pentru o problemă ce valorează 200 puncte, prima submisie corectă:</p>
                <ul>
                    <li id="l41">la minutul 1 va valora 200 - 1 = 199 puncte</li>
                    <li id="l42">la minutul 2: 200 - 2 =198 puncte</li>
                    <li id="l43">etc.</li>
                </ul>
                <br>
                <p id="p34">Pentru o problemă ce valorează 400 puncte, prima submisie corectă:</p>
                <ul>
                    <li id="l51">la minutul 1 va valora 400 - (400/200) = 400 - 2 = 398 puncte</li>
                    <li id="l52">la minutul 2: 400 - 4 = 396 puncte</li>
                    <li id="l53">etc.</li>
                </ul>
                <br>
                <p id="p44">Pentru o problemă ce valorează 400 de puncte, acceptată după 2 submisii greșite, după 5 minute, punctajul obținut va fi calculat astfel:</p>
                <p id="p45">400 - 2*5 - 20*2 = 400 - 10 - 40 = 350 puncte.</p>
                <p id="p46">Punctajul minim pentru o problemă va fi 30% din punctajul alocat respectivei probleme.</p>
                <p id="p47">Punctajul final se obține însumând punctajele obținute la fiecare problemă, iar ordinea în clasament va fi obținută descrescător după punctaj.</p>
                <p id="p48">Atenție! Se va lua în calcul doar ultima voastră submisie! Scorul calculat după această formulă va apărea doar în clasament. La evaluare, va apărea punctajul obținut pentru soluția respectivă, neaplicând formula de calcul de mai sus. Submisia corectă este cea care obține punctajul maxim alocat problemei la evaluare, asupra căruia se va aplica mai apoi formula, pentru clasament, luând în calcul timpul și numărul submisiilor greșite de până atunci.</p>
                <p id="p49">În acest mod, se asigură unicitatea rezultatelor și se pot stabili de la început procentele din totalul disponibil. În comun acord cu partenerii, se pot stabili premii speciale, dar nu mai târziu de festivitatea de premiere. Fiecare concurent va primi o diplomă de participare. Premiile vor fi oferite în cadrul festivității de premiere.</p>
                <p id="p50">Premiile obținute sunt:</p>
                <ul>
                    <li id="l61">Premiul I: 45% din totalul disponibil,</li>
                    <li id="l62">Premiul al II &ndash; lea: 25% din totalul disponibil,</li>
                    <li id="l63">Premiul al III &ndash; lea: 15% din totalul disponibil,</li>
                    <li id="l64">Mențiunea I: 10% din totalul disponibil,</li>
                    <li id="l65">Mențiunea a II &ndash; a: 5% din totalul disponibil.</li>
                </ul>
                <br>
                <p id="p51">Fiecare dintre concurenți va primi o diplomă de participare.</p>
                <p id="p52">Premiile vor fi oferite participanților în cadrul festivității de premiere.</p>
                <p id="p53"><strong>Descalificare</strong></p>
                <p id="p54">Un concurent care:</p>
                <ul>
                    <li id="l71">interferează cu activitățile altor participanți,</li>
                    <li id="l72">atacă stațiile de lucru sau comisia științifică,</li>
                    <li id="l73">instigă la fraudă prin orice mijloc (inclusiv electronic)</li>
                    <li id="l74">accesează rețeaua,</li>
                    <li id="l75">atacă securitatea sistemului sau evaluatorul,</li>
                    <li id="l76">execută alte programe,</li>
                    <li id="l77">schimbă permisiuni de fișiere,</li>
                    <li id="l78">citește informații despre sistem,</li>
                    <li id="l79">încalcă în alt fel regulamentul va fi descalificată fără drept de contestație.</li>
                    <li id="l80">fraudează concursul sau instigă la fraudă prin orice mijloc (inclusiv electronic) va fi descalificată fără drept de reînscriere.</li>
                </ul>
                <p id="p55">Coordonatorii concursului își rezervă dreptul de a descalifica fără notificare prealabilă și fără drept de contestație participanții aflați într-o situație de descalificare identificată. Pentru a descalifica un concurent, este necesar acordul ambilor coordonatori ai concursului.</p>
                <p id="p56"><strong>Condiții</strong></p>
                <p id="p57">Coordonatorii concursului își rezervă dreptul de a modifica fără notificare prealabilă acest regulament. Asigurăm participanții că nu se vor realiza modificări ale regulamentului în ce privește datele tehnice în perioada unei runde.</p>
                <br>
                </div>
                <div class="tab-pane fade" id="nav-rez" role="tabpanel" aria-labelledby="nav-rez-tab">
                                <br><center>
                                    <h3>
                                        Probleme de algoritmica de la editia 2018:<br><br></h3>
                                        <a href="https://drive.google.com/open?id=1sxGpFFgRIsaU7LwvHUAp3tlOHt-vhzlc">Runda 1</a><br>
                                        <a href="https://drive.google.com/open?id=1Sp84VqfU3C2PO13BXo1DFlkowlZBrwx_">Runda 2</a><br>
                                        <a href="https://drive.google.com/open?id=1Ty5-39Rn0QzkOEDzMCZQgwK0yyVALHRG">Runda 3</a><br>
                                        <a href="https://drive.google.com/open?id=13HPXDU8j0Nr9PgAAq_i7NIfjQWliTzKh">Runda finala</a><br>
                                        
                                    <br>
                                    <b>Rezultate:</b><br>
                                    <a href="https://drive.google.com/file/d/1WTTVn4c9C_w1nv_jGwkxjUTfCszelfrS/view">Runde online</a>
                                        
                                
                                            <h3>Probleme de algoritmică de la ediția 2016:</h3><br>
                                            <a href="https://www.hackerrank.com/fiicode-runda-1" alt="Runda 1">Runda 1</a><br>
                                            <a href="https://www.hackerrank.com/fiicode-runda-2" alt="Runda 2">Runda 2</a><br>
                                            <a href="https://www.hackerrank.com/fiicode-runda-3" alt="Runda 3">Runda 3</a><br>
                                            <a href="https://www.hackerrank.com/fiicode-runda-finala-online-mirror" alt="Runda finală">Runda finală</a><br><br>
                                        
                                        <b>Rezultate:</b><br>
                                        Locul I: Horia Turcuman <br>
                                        Locul II: Vlad Coteanu<br>
                                        Locul III: Denis Banu<br>
                                        Mențiuni:  Diana Ghinea & Nicolae Bodea & Cristian Vantur<br>
                                        
                                        </center>

                                </div>
            </div>
            <div class="ui container"></div>
        </div>
    </section>

    <!-- TRANSLATE SCRIPT -->
    <script src="{{ asset('js/translate_algo.js') }}"></script>
@endsection
