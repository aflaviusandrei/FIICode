@extends('app')

@section('content')
	<section id="content">
		<div class="ui container loginPage">
			<div class="head"><i class="icon code"></i> {{ $title }} <div class="green"></div><div class="red"></div></div>
			<div class="ui segment">
				Bună ziua {{ $user->nume }},<br /><br />
                @if(strtotime("18.03.2018 21:59:00") - time() > 0)
                    Aceasta pagină va conține tema probei de GameDev alături de o variantă <b>"pe-scurt"</b> a regulamentului la această secțiune!<br>
                    Informațiile și tema vor apărea la începutul probei, pe <strong>19 Martie</strong>.
                    <br /> <br />
                    <!-- 
                    <p>Creaţi o aplicaţie interactivă cu scop educaţional pentru mobil care va fi folosită pentru a ajuta predarea disciplinelor STEM.</p>
                    <p>Detalii</p>
                    <p>Angajamentul în educaţie, in timpul sau în afara orelor de curs, într-o manieră organizată, formală sau informală, prezintă un interes pentru educatori, părinţi şi copii. Provocarea este să construieşti o aplicaţie care să îmbunatăţească modul în care se desfăşoară orele disciplinelor STEM în orice manieră.
                    </p>
                    <p>De exemplu, poate ajuta un profesor să predea, sau să ajute un student să-şi îmbunătăţească cunoştinţele sau abilităţile pe cont propriu după terminarea orelor, sau să ajute cu auto-evaluarea şi notarea în timpul orei. De asemenea, trebuie să existe o modalitate de a organiza echipe sau proiecte individuale.</p>
                    <p>Criteriile de evaluare</p>
                    <p>Proiectul va fi evaluat după următoarele criterii:</p>
                    <p>- Interactivitate şi angajamentul utilizatorului în aplicaţie</p>
                    <p>- Uzabilitate şi experienţa utilizatorului</p>
                    <p>- Design-ul per-total şi design-ul responsive</p>
                    <p>- Robusteţe (absenţa bug-urilor în timpul execuţiei)</p>
                    <p>- Performanţa (responsivitatea UI-ului)</p>
                    <p>- Scalabilitate (cât de uşor este să updatezi şi să extinzi)</p>
                    <p>- Arhitectura şi calitatea codului sursă</p>
                    <p>- Calitatea conţinutului</p>
                    <p>- Integrarea cu surse externe (Github, Google, etc.)</p>
                    <p>- Fezabilitate</p>
                    <p>Pentru fiecare criteriu comisia va acorda maxim 10 puncte.</p>
                    <p>Mult succes!</p>
                    -->
                @else
                    
                    <p><strong>Tema probei GameDev:</strong><br></p>
                    <p>Să se realizeze un joc ce abordează tematica „securității informatice”, conform regulamentului concursului FIICode.</p>
                    <p>Criterii minime admitere proiect:<br>
                    Proiectul va fi o aplicație de tip joc, ceea ce înseamnă că utilizatorul trebuie să interacționeze cu aplicația (evitarea jocurilor de tip telltale games).<br>
                    Jocul va trebui să fie într-o stare în care să poată fi rulat măcar pe o platformă aleasă de participanți<br>
                    Pentru prezentare, jocul va trebui să fie disponibil atât în format sursă, cât și în format executabil.
                    </p>
                    <p>La începutul probei online, vor fi adresate niște întrebări de bază, la care participanții vor trebui să răspundă în timp real, pentru a dovedi autenticitatea proiectului. În caz că niciunul din membrii echipei nu vor răspunde la întrebările legate de proiectul lor, acesta se va considera plagiat, iar echipa va fi descalificată.</p>
                    <p>Cum ajung proiectele la noi? Voi lucrați într-un repository public iar la finalul concursului noi jurizam conținutul său! Nu trageți cu ochiul la ceilalți în caz că le aflați conturile de git! Pe lângă proiectul ce respectă tema propusă, la final sunteți nevoiți să creați un filmuleț de prezentare al proiectului ce va fi folosit la jurizare!</p>
                    <p><br />Vă dorim mult success și nu ezitați să ne contactați pentru orice &icirc;ntrebare/nelămurire! <br /><br />Cu drag, <br />Echipa FIICode! <br /></p>
                    <div class="ui form">
                        <div class="field">
                            <label>Repository-ul bitbucket</label>
                            <input id="githubRepo" name="repo" value="{{Auth::user()->repogithub}}" />
                        </div>
                        <div class="field">
                            <label>Link către prezentarea video</label>
                            <input id="prezentare" name="prezentare" value="{{Auth::user()->prezentare}}" />
                        </div>
                        <div class="field">
                            <div class="ui blue labeled icon saveRepo button">
                                <i class="icon save"></i>
                                Salvează
                            </div>
                        </div>
                        <div class="ui message error">
                            <h2>Eroare <i class="icon frown"></i></h2>
                            <p>Adresa introdusă trebuie să aibă format de link (ex. https://example.com/UserName/NameOfRepo)</p>
                        </div>
                        <div class="ui message success">
                            <h2>Success!</h2>
                            <p>Link-ul a fost salvat cu success!</p>
                        </div>
                    </div>
                 @endif
			</div>
		</div>
	</section>
@endsection
