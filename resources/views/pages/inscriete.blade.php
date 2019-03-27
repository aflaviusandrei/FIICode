@extends('app')@section('content')

<section id="content">
    <div class="ui container">
        <div class="ui segment webDesc" {!! (isset($web) && $web==1) ? 'style="display:block;"' : '' !!}>
            <h4 class="ui header">Tehnologii WEB</h4> "Toți pentru unul și unul pentru toți!" Acesta e motto-ul probei de Tehnologii WEB! Nu poți participa decât ca parte a unei echipe formată din 2 până la 3 membri! Prima probă te va întâmpina online pentru a-ți testa abilitățile și creativitatea urmând ca apoi, cei mai cei să se califice în finală! Nu ezita! Înscrie-te și creează aplicații uimitoare folosind orice tehnologie de pe acest Pământ!
            <br /> Pentru mai multe detalii vezi <a href="/webmobile">pagina ariei</a>. </div>
        <div class="ui segment algoDesc" {!! (isset($algo) && $algo==1) ? 'style="display:block;"' : '' !!}>
            <h4 class="ui header">Algoritmică</h4> Un algoritm trebuie văzut pentru a fi crezut!" Acesta e motto-ul probei de Algoritmică! Trei probe de calificare te așteaptă cu brațele deschise pentru a-ți demonstra priceperea in lumea algoritmilor! Dar nu zi HOP până nu sari gardul căci dupa acestea te așteaptă "Algozilla"! Crezi că ești pregătit? Înscrie-te și arată-ne ce poți!
            <br /> Pentru mai multe detalii vezi <a href="/algoritmica">pagina ariei</a>. </div>
        <div class="ui segment gamedevDesc" {!! (isset($gamedev) && $gamedev==1) ? 'style="display:block;"' : '' !!}>
            <h4 class="ui header">GameDev</h4> "Tot timpul e mai bine cu prietenii aproape!" De aceea în secțiune vei concura alături de ei în echipe de 2 pana la 4 oameni pentru a dezvolta cel mai grozav joc! La această probă puteți utiliza orice tehnologie atât timp cât aplicația finală va putea fi instalată și utilizată pe un device.
            <br /> Pentru mai multe detalii vezi <a href="/gamedev">pagina ariei</a>. </div>
        <div class="head"><i class="icon code"></i> {{ $title }}
            <div class="green"></div>
            <div class="red"></div>
        </div>
        <div class="ui segment">
            <div class="ui form formularDeInscriere">
                <div class="field">
                    <label>Te rugam sa selectezi sectiunea la care vrei sa te inscrii.</label>
                    <div class="ui grid stackable selectPerson">
                        <div class="five wide column">
                            <div class="ui segment"> <i class="icon code"></i>
                                <p>Tehnologii web</p>
                                <div class="ui fitted toggle checkbox">
                                    <input name="sectiune" id="web" value="web" {!! (isset($web) && $web==1 ) ? 'checked' : '' !!} type="radio">
                                    <label></label>
                                </div>
                            </div>
                        </div>
                        <div class="five wide column">
                            <div class="ui segment"> <i class="icon rocket"></i>
                                <p>GameDev</p>
                                <div class="ui fitted toggle checkbox">
                                    <input name="sectiune" id="gamedev" value="gamedev" {!! (isset($gamedev) && $gamedev==1 ) ? 'checked' : '' !!} type="radio">
                                    <label></label>
                                </div>
                            </div>
                        </div>
                        <div class="five wide column">
                            <div class="ui segment"> <i class="icon cubes"></i>
                                <p>Algoritmică</p>
                                <div class="ui fitted toggle checkbox">
                                    <input name="sectiune" id="algo" value="algo" {!! (isset($algo) && $algo==1 ) ? 'checked' : '' !!} type="radio">
                                    <label></label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="algoOnly">
                <center><br><h2>Ne pare rau...</h2><br>
                <p>Inscrierile pentru <strong>editia 2019 FII Code</strong>, la sectiunea Algoritmica, s-au incheiat.</p><br>
                <p><strong>Va asteptam la urmatoarea editie!</strong></p></center>
                </div>
                <div class="webOnly">
                <center><br><h2>Ne pare rau...</h2><br>
                <p>Inscrierile pentru <strong>editia 2019 FII Code</strong>, la sectiunea Tehnologii Web, s-au incheiat.</p><br>
                <p><strong>Va asteptam la urmatoarea editie!</strong></p></center>
                </div>
                <div class="gamedevOnly">
                <center><br><h2>Ne pare rau...</h2><br>
                <p>Inscrierile pentru <strong>editia 2019 FII Code</strong>, la sectiunea GameDev, s-au incheiat.</p><br>
                <p><strong>Va asteptam la urmatoarea editie!</strong></p></center>
                </div>
               <!-- <div class="language-box" style="text-align: left !important;">
                    <a href="#ro" onclick="ro()"><img class="language-button" src="{{ asset('img/ro.png') }}" alt="Romana"/></a>
                    <a href="#en" onclick="eng_reg()"><img class="language-button" src="{{ asset('img/eng.png') }}" alt="English"/></a>
				</div>
                <div class="field algoOnly">
                    <label id='lb1' class="algoOnly">Nume și prenume<span>*</span></label>
                    <!--<label class="webOnly">Numele complet al liderului<span>*</span></label>
                    <label class="gamedevOnly">Numele complet al liderului<span>*</span></label> 
                    <input type="text" name="nume" placeholder="Nume si prenume" />
				</div>
				<div class="field algoOnly">
					<label id='lb2' class="algoOnly">Adresa de email<span>*</span></label>
                    <!--<label class="webOnly">Adresa de email a liderului<span>*</span></label>
                    <label class="gamedevOnly">Adresa de email a liderului<span>*</span></label> 
                    <input type="text" name="email" placeholder="Email" /> 
					<span class="error-message"></span>
				</div>
                <div class="field algoOnly">
                    <label id='lb3'>Parola<span>*</span></label>
                    <input type="password" name="password" placeholder="Parola"> </div>
                <div class="field algoOnly">
                    <label id='lb4'>Confirma Parola<span>*</span></label>
                    <input type="password" name="password_conf" placeholder="Confirmă Parola"> </div>
                <div class="field algoOnly">
                    <label id='lb5' class="webOnly gamedevOnly">Cont Git (Oricare din GitHub, GitLab, Bitbucket, etc.)<span>*</span></label>
                    <input class="webOnly gamedevOnly" type="text" name="repogithub" placeholder="Contul Git unde va fi salvat codul sursă" /> </div>
                <div class="field algoOnly">
                    <label id='lb6'>Orașul in care locuiești<span>*</span></label>
                    <input type="text" name="oras" placeholder="Oraș" /> </div>
                <div class="field algoOnly">
                    <label id='lb7'>Ce vârstă ai?<span>*</span></label>
                    <select name="varsta" class="ui dropdown">
                        <option value="">Varsta</option>
                        <option value="<15">< 15</option>
                        <option value="16">16</option>
                        <option value="17">17</option>
                        <option value="18">18</option>
                        <option value="19">19</option>
                        <option value="20">20</option>
                        <option value="21">21</option>
                        <option value="22">22</option>
                        <option value=">22">> 22</option>
                    </select>
                </div>
                <div class="field algoOnly">
                    <label id='lb8'>Numărul de telefon<span>*</span></label>
                    <input type="text" name="telefon" placeholder="Numărul de telefon" /> 
				</div>
				<div class="field algoOnly">
                    <label id='lb9'>Link profil Facebook<span>*</span></label>
                    <input type="text" name="facebook" placeholder="Facebook" /> 
				</div>
				<div class="field algoOnly">
                    <label id='lb10'>Link profil CS Academy<span>*</span></label>
                    <input type="text" name="csacademy" placeholder="CS Academy" />
				</div>
				<div class="field algoOnly">
                    <label id='lb11'>Mărime tricou<span>*</span></label>
                    <select name="marime_tricou" class="ui dropdown">
                        <option value="">Marime</option>
                        <option value="s">S</option>
                        <option value="m">M</option>
                        <option value="l">L</option>
                        <option value="xl">XL</option>
                        <option value="xxl">XXL</option>
                    </select>
                </div>
                <div class="field algoOnly">
                    <label id='lb12'>Liceul sau facultatea la care sunteți<span>*</span></label>
                    <input type="text" name="scoala" placeholder="Liceu / Facultate" />
				</div>
                
                <!-- <div class="field proiect webOnly gamedevOnly">
                    <label>Nume Echipă<span>*</span></label>
                    <input type="text" name="numeproiect" placeholder="Nume Echipă" /> 
				</div>
                <div class="field webOnly gamedevOnly">
                    <label>Ce tehnologii veți folosi<span>*</span></label>
                    <input type="text" name="tehnologii" placeholder="Tehnologii" /> 
				</div>
				<div class="member webOnly gamedevOnly">
					<div class="field">
						<label>Nume Membru 2<span>*</span></label>
						<input type="text" name="nume2" placeholder="Nume și Prenume" /> 
					</div>
					<div class="field">
						<label>Email Membru 2<span>*</span></label>
						<input type="text" name="email2" placeholder="Adresa de email" /> 
					</div>
					<div class="field">
						<label>Numărul de telefon Membru 2<span>*</span></label>
						<input type="text" name="telefon2" placeholder="Numărul de telefon" /> 
					</div>
					<div class="field">
						<label>Link profil Facebook Membru 2<span>*</span></label>
						<input type="text" name="facebook2" placeholder="Facebook" /> 
					</div>
					<div class="field">
						<label>Mărime tricou Membru 2<span>*</span></label>
						<select name="marime_tricou2" class="ui dropdown">
							<option value="">Marime</option>
							<option value="s">S</option>
							<option value="m">M</option>
							<option value="l">L</option>
							<option value="xl">XL</option>
							<option value="xxl">XXL</option>
						</select>
					</div>
				</div>
				<div class="member webOnly gamedevOnly">
					<div class="field">
						<label>Nume Membru 3</label>
						<input type="text" name="nume3" placeholder="Nume și Prenume" /> 
					</div>
					<div class="field">
						<label>Email Membru 3</label>
						<input type="text" name="email3" placeholder="Adresa de email" /> 
					</div>
					<div class="field">
						<label>Numărul de telefon Membru 3</label>
						<input type="text" name="telefon3" placeholder="Numărul de telefon" /> 
					</div>
					<div class="field">
						<label>Link profil Facebook Membru 3</label>
						<input type="text" name="facebook3" placeholder="Facebook" /> 
					</div>
					<div class="field">
						<label>Mărime tricou Membru 3</label>
						<select name="marime_tricou3" class="ui dropdown">
							<option value="">Marime</option>
							<option value="s">S</option>
							<option value="m">M</option>
							<option value="l">L</option>
							<option value="xl">XL</option>
							<option value="xxl">XXL</option>
						</select>
					</div>
				</div>
				<div class="member gamedevOnly">
					<div class="field">
						<label>Nume Membru 4</label>
						<input type="text" name="nume4" placeholder="Nume și Prenume" /> 
					</div>
					<div class="field">
						<label>Email Membru 4</label>
						<input type="text" name="email4" placeholder="Adresa de email" /> 
					</div>
					<div class="field">
						<label>Numărul de telefon Membru 4</label>
						<input type="text" name="telefon4" placeholder="Numărul de telefon" /> 
					</div>
					<div class="field">
						<label>Link profil Facebook Membru 4</label>
						<input type="text" name="facebook4" placeholder="Facebook" /> 
					</div>
					<div class="field">
						<label>Mărime tricou Membru 4</label>
						<select name="marime_tricou4" class="ui dropdown">
							<option value="">Marime</option>
							<option value="s">S</option>
							<option value="m">M</option>
							<option value="l">L</option>
							<option value="xl">XL</option>
							<option value="xxl">XXL</option>
						</select>
					</div>
				</div>
				
				<div class="field algoOnly">
					<div class="ui checkbox">
						<input type="checkbox" name="terms_and_conditions1" value="1">
						<label id="gdprlabel2">Bifand aceasta casuta, confirm ca am citit aceasta <a id="gdprlink2" href="/documente/Data-privacy-consent_Recruitment-US-IT-ro.pdf" target="_blank">Declaratie</a> privind Confidentialitatea Datelor si sunt de acord cu prelucrarea datelor mele cu caracter personal in scopul inscrierii actuale.</label>
					</div>
				</div>

				<div class="field algoOnly">
					<div class="ui checkbox">
						<input type="checkbox" name="terms_and_conditions2" value="1">
						<label id="gdprlabel">Sunt de acord ca Asociatia sa stocheze si sa prelucreze ulterior datele mele cu caracter personal in scopul gestionarii viitoarelor scopuri ale Asociatiei, astfel cum prevede aceasta <a id="gdprlink" href="/documente/Data-privacy-consent_Recruitment-US-IT-ro.pdf" target="_blank">Declaratie</a> privind Confidentialitatea Datelor.</label>
					</div>
				</div>  

                 {!! Recaptcha::render() !!}

                <div class="field algoOnly">
                    <div class="ui blue labeled icon submit button"><i id="sendbt" class="icon send"></i>Trimite</div>
                </div>-->
                <div class="ui warning message erroareTehnica">
                    <div class="header">Eroare la aplicare.</div>
                    <p>Aparent nu ai completat întocmai cum trebuie câmpurile de mai sus. Te rugam să verifici și să încerci înca odată.</p>
					<p class="error-message"></p>
				</div>
                <div class="ui warning message selectCategorie">
                    <div class="header">Categoria nu a fost selectată.</div>
                    <p>Nu ai selectat nici o categorie pentru care vrei să te inscrii. Te rugăm să selectezi una din cele 3 categorii și să încerci iar.</p>
                </div>
                <div class="ui success message aplicareTrimisa mesajWeb">
                    <div class="header">Aplicarea ta a fost trimisă cu succes!</div>
                    <p>Felicitări! Vei primi un mesaj de confirmare în maxim 24 ore! În caz contrar contactează-ne la fiicode@asii.ro</p>
                </div>
            </div>
        </div>
        <div class="ui container"></div>
    </div>
</section>

<script src="{{ asset('js/translate_registration.js') }}"></script>
<script src='https://www.google.com/recaptcha/api.js'></script>@endsection