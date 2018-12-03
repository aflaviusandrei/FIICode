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

	
		Runda 1 - 6 februarie 2019 		<br>
		Runda 2 - 27 februarie 2019 				<br>
		Runda 3 - 20 martie 2019				<br>
		Runda Finala - 13 aprilie 2019		<br>
	</center>

                                </div>
                                <div class="tab-pane fade" id="nav-reg" role="tabpanel" aria-labelledby="nav-reg-tab">
                                <br><center><h2><strong>Regulamentul secțiunii Algoritmică</strong></h2></center><br>
                <p>Concursul național de informatică FIICode este organizat de către Facultatea de Informatică Iași și Asociația Studenților Informaticieni Ieșeni (ASII), în parteneriat cu Inspectoratul Școlar Județean Iași.</p>
                <p><strong>Obiective</strong></p>
                <p>În cadrul probei de Algoritmică se urmărește dezvoltarea:</p>
                <ul>
                    <li>pasiunii și interesul pentru Informatică și Tehnologia Informației și Comunicării</li>
                    <li>competențelor în rezolvarea problemelor folosind calculatorul</li>
                    <li>abilităților de prezentare și promovare a proiectelor realizate</li>
                    <li>gândirii algoritmice</li>
                    <li>abilităților de programare</li>
                    <li>spiritului competitiv</li>
                </ul>
                <p><strong>Participanți</strong></p>
                <p>Participarea la concurs se face individual, concurenții fiind înscriși la momentul începerii concursului la liceu sau facultate, indiferent de naționalitate. Fiecare concurent va fi identificat printr-un număr de concurs unic. Etapa online a concursului va fi formată din 3 runde de calificare formate din 3 până la 5 probleme ce vor fi evaluate automat. În urma celor 3 runde, se vor stabili concurenții care vor participa la etapa finală. Este interzisă participarea la proba de Algoritmică a membrilor comisiei!</p>
                <p>Condiții privitoare la statutul de mentor:</p>
                <ul>
                    <li>trebuie sa aibă împlinită vârsta de 18 ani la data de 1 Februarie 2019</li>
                    <li>poate să-i însoțească pe participanți la etapa finală, în cazul calificării</li>
                </ul>
                <p><strong>Etape</strong></p>
                <ul>
                    <li>Runda 1: 6 februarie </li>
                    <li>Runda 2: 27 februarie</li>
                    <li>Runda 3: 20 martie</li>
                    <li>Runda finală: 13 aprilie</li>
                </ul>
                <p>Cele 3 runde online constau în rezolvarea unor seturi de 3-5 probleme. Soluțiile sunt evaluate automat și punctajele participanților se cumulează după fiecare rundă.</p>
                <p>Etapa de calificare constă în selectarea participanților ce vor lua parte la etapa finala, în urma rundelor online.</p>
                <p>Runda final constă în rezolvarea unui set de 5 probleme.</p>
                <p><strong>Înscriere</strong></p>
                <p>Etapa online se desfășoară pe site-ul concursului FIICode. Soluțiile vor fi evaluate online, pe platforma CMS hostată pe serverul FIICode.</p>
                <p><strong>Limbaje</strong></p>
                <p>Limbajele de programare admise sunt Pascal, C, C++, Haskell și Java. Compilatoarele și mediile de lucru necesare rezolvării problemelor algoritmice vor fi instalate pe discurile stațiilor de lucru. Folosirea de resurse de orice fel, altele decât cele indicate de comisie este strict interzisă.</p>
                <p><strong>Comisie</strong></p>
                <p>Comisia de la proba de Algoritmică este formată din:</p>
                <ul>
                    <li>Președintele comisiei de algoritmică</li>
                    <li>coordonatorul probei de algoritmică</li>
                    <li>cadre didactice sau colaboratori ai Facultății de Informatică</li>
                    <li>reprezentanți ai companiilor partenere Platinum</li>
                </ul>
                <p>Opțional, vor face parte din Comisie:</p>
                <ul>
                    <li>cadre didactice ale liceelor si colegiilor din Iași</li>
                </ul>
                <p><strong>Evaluare</strong></p>
                <p>Este recomandat să instalați pe calculatorul vostru aceleași versiuni pentru compilatoare ca și cele specificate în regulament, deoarece există diferențe între versiuni.</p>
                <p>Fiți deosebit de atenți la fișierele antet utilizate. Evaluatorul testează dacă programul nu returnează un cod de eroare.</p>
                <p>Concurenții sunt invitați să încadreze programele în limitele de spațiu și timp ale problemei. În caz contrar, nu vor obține puncte pe testele respective. Soluțiile vor fi evaluate online, pe platforma CMS hostată pe serverul FIICode.</p>
                <p><strong>Rezultate</strong></p>
                <p>Fiecare problemă va avea un punctaj între 200 și 3000.</p>
                <p>Formula de calcul a scorului, pe scurt:</p>
                <p>Score = min (MaxScore - AcceptedTime * MaxScore * 0.005 - WrongSubmissions * 20, MaxScore * 3 / 10), unde:</p>
                <p>Score = Scorul participantului pentru submisia curentă </p>
                <p>MaxScore = Scorul maxim alocat problemei</p>
                <p>AcceptedTime = Timpul (în minute) de la începutul rundei până la momentul primei submisii accepted a soluției</p>
                <p>WrongSubmissions = numărul de submisii greșite</p>
                <p>Explicație:</p>
                <p>Pentru fiecare minut trecut se va scade 1/200 din valoarea problemei (0.5%). De asemenea, se va scade și câte 20 de puncte pentru fiecare submisie greșită la acea problemă.</p>
                <p>De exemplu:</p>
                <p>Pentru o problemă ce valorează 200 puncte, prima submisie corectă:</p>
                <ul>
                    <li>la minutul 1 va valora 200 - 1 = 199 puncte</li>
                    <li>la minutul 2: 200 - 2 =198 puncte</li>
                    <li>etc.</li>
                </ul>
                <br>
                <p>Pentru o problemă ce valorează 400 puncte, prima submisie corectă:</p>
                <ul>
                    <li>la minutul 1 va valora 400 - (400/200) = 400 - 2 = 398 puncte</li>
                    <li>la minutul 2: 400 - 4 = 396 puncte</li>
                    <li>etc.</li>
                </ul>
                <br>
                <p>Pentru o problemă ce valorează 400 de puncte, acceptată după 2 submisii greșite, după 5 minute, punctajul obținut va fi calculat astfel:</p>
                <p>400 - 2*5 - 20*2 = 400 - 10 - 40 = 350 puncte.</p>
                <p>Punctajul minim pentru o problemă va fi 30% din punctajul alocat respectivei probleme.</p>
                <p>Punctajul final se obține însumând punctajele obținute la fiecare problemă, iar ordinea în clasament va fi obținută descrescător după punctaj.</p>
                <p>Atenție! Se va lua în calcul doar ultima voastră submisie! Scorul calculat după această formulă va apărea doar în clasament. La evaluare, va apărea punctajul obținut pentru soluția respectivă, neaplicând formula de calcul de mai sus. Submisia corectă este cea care obține punctajul maxim alocat problemei la evaluare, asupra căruia se va aplica mai apoi formula, pentru clasament, luând în calcul timpul și numărul submisiilor greșite de până atunci.</p>
                <p>În acest mod, se asigură unicitatea rezultatelor și se pot stabili de la început procentele din totalul disponibil. În comun acord cu partenerii, se pot stabili premii speciale, dar nu mai târziu de festivitatea de premiere. Fiecare concurent va primi o diplomă de participare. Premiile vor fi oferite în cadrul festivității de premiere.</p>
                <p>Premiile obținute sunt:</p>
                <ul>
                    <li>Premiul I: 45% din totalul disponibil,</li>
                    <li>Premiul al II &ndash; lea: 25% din totalul disponibil,</li>
                    <li>Premiul al III &ndash; lea: 15% din totalul disponibil,</li>
                    <li>Mențiunea I: 10% din totalul disponibil,</li>
                    <li>Mențiunea a II &ndash; a: 5% din totalul disponibil.</li>
                </ul>
                <br>
                <p>Fiecare dintre concurenți va primi o diplomă de participare.</p>
                <p>Premiile vor fi oferite participanților în cadrul festivității de premiere.</p>
                <p><strong>Descalificare</strong></p>
                <p>Un concurent care:</p>
                <ul>
                    <li>interferează cu activitățile altor participanți,</li>
                    <li>atacă stațiile de lucru sau comisia științifică,</li>
                    <li>instigă la fraudă prin orice mijloc (inclusiv electronic)</li>
                    <li>accesează rețeaua,</li>
                    <li>atacă securitatea sistemului sau evaluatorul,</li>
                    <li>execută alte programe,</li>
                    <li>schimbă permisiuni de fișiere,</li>
                    <li>citește informații despre sistem,</li>
                    <li>încalcă în alt fel regulamentul va fi descalificată fără drept de contestație.</li>
                    <li>fraudează concursul sau instigă la fraudă prin orice mijloc (inclusiv electronic) va fi descalificată fără drept de reînscriere.</li>
                </ul>
                <p>Coordonatorii concursului își rezervă dreptul de a descalifica fără notificare prealabilă și fără drept de contestație participanții aflați într-o situație de descalificare identificată. Pentru a descalifica un concurent, este necesar acordul ambilor coordonatori ai concursului.</p>
                <p><strong>Condiții</strong></p>
                <p>Coordonatorii concursului își rezervă dreptul de a modifica fără notificare prealabilă acest regulament. Asigurăm participanții că nu se vor realiza modificări ale regulamentului în ce privește datele tehnice în perioada unei runde.</p>
                

                                </div>
                                <div class="tab-pane fade" id="nav-rez" role="tabpanel" aria-labelledby="nav-rez-tab">
                                <br><center>
                                    <h3>
                                        Probleme de algoritmica de la editia 2018:<br><br>
                                        
                                    </h3>
                                        
                                
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

            </div>
            <div class="ui container"></div>
        </div>
    </section>
@endsection
