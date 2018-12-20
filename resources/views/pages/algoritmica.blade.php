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
                
                <p><strong>Participanți</strong></p>
                <p>Participarea la concurs se face individual, statutul concursului fiind Open (oricine poate participa la runda finală - elevi, studenți, etc.). </p>
                <p>Etapa online a concursului va fi formată din 3 runde de calificare formate din 5-6 probleme ce vor fi evaluate automat. În urma celor 3 runde, se vor stabili concurenții care vor participa la etapa finală. Din motive logistice, doar primii 5 participanți din afara Romaniei si a Republicii Moldova vor fi invitați la runda finală.</p>
                <p>Este interzisă participarea la proba de Algoritmică a membrilor comisiei!</p>
                <p>Condiții privitoare la statutul de mentor:</p>
                <ul>
                    <li>trebuie sa aibă împlinită vârsta de 18 ani la data de 1 Martie 2019</li>
                    <li>poate să-i însoțească pe participanți la etapa finală, în cazul calificării</li>
                </ul>
                <p><strong>Etape</strong></p>
                <ul>
                    <li>Runda 1: 6 februarie </li>
                    <li>Runda 2: 27 februarie</li>
                    <li>Runda 3: 20 martie</li>
                    <li>Runda finală: 11-12 aprilie</li>
                </ul>
                
                <p><strong>Înscriere</strong></p>
                <p>To be announced</p>
                <p><strong>Comisie</strong></p>
                <p>Comisia de la proba de Algoritmică este formată din:</p>
                <ul>
                    <li>Președintele comisiei de algoritmică</li>
                    <li>coordonatorul probei de algoritmică</li>
                    <li>cadre didactice sau colaboratori ai Facultății de Informatică</li>
                    <li>Studenți ai Facultății de Informatică</li>
                    <li>reprezentanți ai companiilor partenere Platinum</li>
                </ul>
                <p>Opțional, vor face parte din Comisie:</p>
                <ul>
                    <li>cadre didactice ale liceelor si colegiilor din Iași</li>
                </ul><br>
                <p><strong>Evaluare</strong></p>
                <p>Evaluarea va fi realizata pe site-ul CSAcademy. Mai multe detalii despre sistemul de punctare, cat si configuratia sistemului de evaluare gasiti aici: </p>
                <ul>
                <li><a href="https://csacademy.com/about/environment/">https://csacademy.com/about/environment/</a></li>
                <li><a href="https://csacademy.com/about/contests/">https://csacademy.com/about/contests/</a></li>
                </ul>
                <p>Folosirea de resurse de orice fel, altele decât cele indicate de comisie este strict interzisă.</p>
                <p><strong>Rezultate</strong></p>
                <p>Premiile obținute sunt:</p>
                <ul>
                    <li>Premiul I: 45% din totalul disponibil,</li>
                    <li>Premiul al II &ndash; lea: 25% din totalul disponibil,</li>
                    <li>Premiul al III &ndash; lea: 15% din totalul disponibil,</li>
                    <li>Mențiunea I: 10% din totalul disponibil,</li>
                    <li>Mențiunea a II &ndash; a: 5% din totalul disponibil.</li>
                </ul>
                <br>
                <p>În comun acord cu partenerii, se pot stabili premii speciale, dar nu mai târziu de festivitatea de premiere. Fiecare concurent va primi o diplomă de participare. Premiile vor fi oferite în cadrul festivității de premiere.</p>
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
                                <br>
								<center>
                                    <h3>
                                        Probleme de algoritmica de la editia 2018:<br><br></h3>
                                        <a href="https://drive.google.com/open?id=1sxGpFFgRIsaU7LwvHUAp3tlOHt-vhzlc">Runda 1</a><br>
                                        <a href="https://drive.google.com/open?id=1Sp84VqfU3C2PO13BXo1DFlkowlZBrwx_">Runda 2</a><br>
                                        <a href="https://drive.google.com/open?id=1Ty5-39Rn0QzkOEDzMCZQgwK0yyVALHRG">Runda 3</a><br>
                                        <a href="https://drive.google.com/open?id=13HPXDU8j0Nr9PgAAq_i7NIfjQWliTzKh">Runda finala</a><br>
                                        
                                    <br>
                                    <b>Rezultate:</b><br>
                                        Premiul I: Lucian Bicsi <br>
                                        Premiul II: Laura Georgescu<br>
                                        Premiul III: Horia Turcuman<br>
                                        Mentiune: Felix Puscasu<br>
                                        Mentiune: Mihail Chihai<br>
                                        Mentiune: Bogdan Burcea<br>
										<br>
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

            </div>
            <div class="ui container"></div>
        </div>
    </section>
@endsection
