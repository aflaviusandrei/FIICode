@extends('app')

@section('content')
    <section id="content">
        <div class="ui container">
            <div class="head"><i class="icon code"></i> {{ $title }} <div class="green"></div><div class="red"></div></div>
            <div class="ui segment">
            <div class="col-xs-12 ">
                            <nav>
                                <div class="nav nav-tabs nav-fill" id="nav-tab" role="tablist">
                                    <a class="nav-item nav-link active" id="nav-anunt-tab" data-toggle="tab" href="#nav-anunt" role="tab" aria-controls="nav-anunt" aria-selected="true">Anunturi</a>
                                    <a class="nav-item nav-link" id="nav-reg-tab" data-toggle="tab" href="#nav-reg" role="tab" aria-controls="nav-reg" aria-selected="false">Regulament</a>
                                    <a class="nav-item nav-link" id="nav-rez-tab" data-toggle="tab" href="#nav-rez" role="tab" aria-controls="nav-rez" aria-selected="false">Editia anterioara</a>
                                </div>
                            </nav>
                            <div class="tab-content py-3 px-3 px-sm-0" id="nav-tabContent">
                                <div class="tab-pane fade show active" id="nav-anunt" role="tabpanel" aria-labelledby="nav-anunt-tab">
                                <br><center><h2>FII Code - GameDev</h2>
	<br>
	Aceasta pagina este dedicata sectiunii de gamedev din cadrul concursului FII Code. Aici se vor posta informatiile utile participantilor la aceasta sectiune.

	<br>
	<br>
    <b>Calendar proba GameDev</b><br><br>

	
		Runda online - 15 ianuarie - 29 martie 2019 		<br>
		Runda Finala - 13 aprilie 2019		<br>
	</center>

                                </div>
                                <div class="tab-pane fade" id="nav-reg" role="tabpanel" aria-labelledby="nav-reg-tab">
                                <br><center><h2><strong>Regulamentul secțiunii GameDev</strong></h2></center><br>
                <p>Concursul național de informatică FIICode este organizat de către Facultatea de Informatică Iași și Asociația Studenților Informaticieni Ieșeni (ASII), în parteneriat cu Inspectoratul Școlar Județean Iași.</p>
                <br>
                <p><strong>Obiective</strong><strong>:</strong></p>
                <br>
                <ul>
                    <li>dezvoltarea aptitudinilor și competențelor de utilizare a tehnologiilor de Game Development existente</li>
                    <li>consolidarea abilităților de comunicare, lucru în echipă și management al timpului</li>
                    <li>îmbunătățirea abilităților de susținere, în fața unui juriu avizat, a unui proiect propriu</li>
                </ul>
                <br>
                <p><strong>Participanți</strong><strong>:</strong></p>
                <br>
                <ul>
                    <li>Participarea la concurs se face în echipe formate dintr-un număr de 2-4 concurenți, înscriși la momentul începerii concursului la un liceu sau facultate din România, indiferent de naționalitate.</li>
                    <li>Fiecare echipă va fi identificată printr-un număr unic de concurs.</li>
                    <li>Este interzisă participarea la proba de Game Development membrilor comisiei și voluntarilor asignați la categoria de Game Development !</li>
                </ul>
                <br>
                <p><strong>Etape:</strong></p>
                <br>
                <ul>
                    <li>etapa online</li>
                    <li>etapa de jurizare</li>
                    <li>etapa finală</li>
                </ul>
                <br>
                <p>Etapa online constă în realizarea unui proiect la alegere, în conformitate cu specificațiile Comisiei de la secțiunea de Game Development. Dacă numărul de echipe participante ce au un proiect promițător în etapa online depășește 5, comisia își rezervă dreptul de a crea o sesiune de departajare. Proiectele vor fi jurizate de Comisia de jurizare a secțiunii de Game Development, iar fiecare echipă va primi un punctaj în decurs de o săptămână.</p>
                <p>Etapa finală constă într-o probă practică în strânsă legătură cu proiectul creat în cadrul etapei online. Așadar, în această probă, echipele vor trebui să aducă îmbunătățiri propriilor proiecte, într-un timp scurt conform specificațiilor Comisiei.</p>
                <br>
                <p><strong>Înscriere</strong></p>
                <p>Etapa online se desfășoară pe site-ul concursului FIICode. Pentru a participa, o echipă trebuie sa fie înscrisă pe site cu cel puțin 24 ore înainte de începerea concursului. Atunci când completează formularul de înscriere, echipa trebuie sa furnizeze informații corecte și complete. Pentru înscrierea proiectului, este nevoie de un repository pe Bitbucket. După înscriere, fiecare echipă va avea un nume de utilizator și o parolă cu care va trimite proiectul spre jurizare. În același timp, fiecare echipă va trimite câte un filmuleț de prezentare al proiectului. În acesta se va specifica numele proiectului și numele realizatorilor.</p>
                <p><strong>Participare</strong></p>
                <p>Odată anunțată lista cu echipele participante la etapa finală, acestea au la dispoziție 3 zile pentru a confirma prezența. În cazul în care o echipa, din orice motive, nu poate participa la această etapa, dreptul de participare va fi oferit următoarei echipe.</p>
                <br>
                <p><strong>Tehnologii și instrumente</strong></p>
                <p>Pentru realizarea proiectelor vor fi admise orice tehnologie, instrument, platformă, limbaj de programare sau API cât timp produsul final e livrat ca o aplicație instalabilă pe o platformă mobile sau desktop (Android, IOS, Windows Phone, Windows Desktop). Acestea trebuie să poată rula pe un dispozitiv de performanță medie în condiții standard (minim 25 frame-uri pe secundă). Este permisă folosirea asset-urilor artistice (texturi, modele, sprite-uri, sunete, melodii, etc) atâta timp cât aveți dreptul de a le folosi printr-o licență. Este interzisă folosirea asset-urilor de tip cod ce nu au fost dezvoltate de membrii echipei (scripts, shaders, etc).</p>
                <br>
                <p><strong>Comisia de la proba de Game Development este formată din:</strong></p>
                <ul>
                    <li>președintele comisiei de Game Development</li>
                    <li>coordonatorul probei de Game Development</li>
                    <li>cadre didactice sau colaboratori ai Facultății de Informatică</li>
                    <li>reprezentanți ai companiilor partenere proiectului FIICode</li>
                </ul>
                <p><strong>Evaluare</strong></p>
                <p>În cadrul etapelor, Comisia va evalua conform:</p>
                <ul>
                    <li>ideii de implementare, optimizare, clean code</li>
                    <li>experiența oferită de joc (gameplay)</li>
                    <li>design</li>
                </ul>
                <p>Baremul final pentru etapa finală, care conține procentele și criteriile evaluărilor va fi publicat la începutul acesteia.</p>
                
                <p><strong>Rezultate</strong></p>
                <p>Ordonarea echipelor pentru clasamentul de calificare la runda finală ține cont, în această ordine, de:</p>
                <ul>
                    <li>rezultatul din etapa online (descrescător), urmat de</li>
                    <li>vârsta medie a echipei (crescător)</li>
                    <li>vârsta celui mai mic membru al echipei (crescător).</li>
                </ul>
                <p>Ordonarea echipelor pentru clasamentul de premiere în runda finală ține cont, în această ordine, de:</p>
                <ul>
                    <li>rezultatul din etapa finală (descrescător), urmat de</li>
                    <li>rezultatul din etapa online (descrescător), urmat de</li>
                    <li>vârsta medie a echipei (crescător)</li>
                    <li>vârsta celui mai mic membru al echipei (crescător).</li>
                </ul>
                <p>În acest mod, se asigură unicitatea rezultatelor și se pot stabili de la început procentele din totalul disponibil. În comun acord cu partenerii, se pot stabili premii speciale, dar nu mai târziu de festivitatea de premiere. Concurenții ce vor ajunge în finală vor primi diplome. Premiile vor fi oferite în cadrul festivității de premiere.</p>
                <p>Premiile obținute sunt:</p>
                <ul>
                    <li>Premiul I: 45% din totalul disponibil,</li>
                    <li>Premiul al II &ndash; lea: 25% din totalul disponibil,</li>
                    <li>Premiul al III &ndash; lea: 15% din totalul disponibil,</li>
                    <li>Mențiunea I: 10% din totalul disponibil,</li>
                    <li>Mențiunea a II &ndash; a: 5% din totalul disponibil.</li>
                </ul>
                <p><strong>Descalificare</strong></p>
                <p>O echipă care:</p>
                <ul>
                    <li>interferează cu activitățile altor participanți,</li>
                    <li>atacă stațiile de lucru sau comisia științifică,</li>
                    <li>fraudează concursul sau instigă la fraudă prin orice mijloc (inclusiv electronic) va fi descalificată fără drept de reînscriere a participanților.</li>
                </ul>
                <p><strong>Condiții</strong></p>
                <p>Coordonatorii concursului își rezervă dreptul de a modifica fără notificare prealabilă acest regulament. Asigurăm participanții că nu se vor realiza modificări ale regulamentului în ce privește datele tehnice în perioada unei runde.</li></p>


                                </div>
                                <div class="tab-pane fade" id="nav-rez" role="tabpanel" aria-labelledby="nav-rez-tab">
                                    <br>
                                    <center><h2><strong>Tema din editia 2018:</strong></h2><br>
                                    <h3>Securitatea informatiei</h3><br>
                                    <b>Clasament:</b><br><br>
                                    1.<b>Compound</b> - Runda online: <b>8</b> - Runda finala: <b>9,38</b> <br>
                                    2.<b>Tidbit-Zenith</b> - Runda online: <b>9,5</b> - Runda finala: <b>9,35</b><br>
                                    3.<b>Malware Warfare</b> - Runda online: <b>7</b> - Runda finala: <b>8,84</b><br>
                                    4.<b>Edodciif</b> - Runda online: <b>8</b> - Runda finala: <b>7,46</b><br>
                                    5.<b>Potato Game</b> - Runda online: <b>6,5</b> - Runda finala: <b>7,17</b><br>
                                    6.<b>WCKD</b> - Runda online: <b>4,5</b> - Necalificata pentru runda finala.
                                    </center>

                                </div>

                
                </div></div>
            <div class="ui container"></div>
        </div>
    </section>
    
@endsection