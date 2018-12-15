@extends('app')

@section('content')
	<section id="content">
		<div class="ui container loginPage">
			<div class="head"><i class="icon code"></i> {{ $title }} <div class="green"></div><div class="red"></div></div>
			<div class="ui segment">
                Bună ziua {{ $user->nume }},<br /><br />
                @if(strtotime("18.03.2018 21:59:00") - time() > 0)
                    Aceasta pagină va conține tema probei de Tehnologii Web alături de o variantă <b>"pe-scurt"</b> a regulamentului la această secțiune!<br>
                    Informațiile și tema vor apărea la începutul probei, pe <strong>19 Martie</strong>.
                    <br /> <br />
				@else
                    <!-- Tema 2017 //!De păstrat, nenea care mai editezi, să lași aici, că oricum blade-ul ascunde de tot comentariile :)
                    <p>Să se conceapă o aplicație Web, de dorit oferind o interacțiune conversațională, care identifică - pe baza copertei, codului de bare sau a altui semn numeric/grafic fizic (i.e. beacon) ori electronic (URL, DOI) - diverse (categorii de) obiecte. Folosind această identificare, se pot recomanda resurse alternative de interes. Aceste recomandări pot fi realizate în funcție de mai mulți factori, precum disponibilitatea în alt format (varianta ca document PDF ori ePub a unui volum tipărit, eventual tradus în limba maternă a utilizatorului), preț (ofertă mai avantajoasă pentru un articol alimentar), calitate (procentaj mai mare de vitamine), similaritate (alt CD al aceleași formații), preferințe ale utilizatorului (doar recipientele de o anumită culoare sau formă). A se consulta și <a href="https://world.openfoodfacts.org/">Open Food Facts</a>, <a href="https://www.wikidata.org/">Wikidata</a>,<a href="https://viaf.org/">Virtual International Authority File</a>, <a href="https://www.opensemanticsearch.org/">Open Semantic Search</a>, <a href="https://thereisabotforthat.com/">There is a bot for that</a>.</p>
                    -->
                   <!-- <p>
                        <strong>Tema probei Web/Mobile:</strong><br>
                        Să se realizeze o aplicație Web/Mobile care să ofere o interfață prietenoasă ce să asiste persoanele cu diverse alergii.
                        Aplicația va fi capabilă să gestioneze (tipuri de) alergii și să notifice o persoană sau un grup de utilizatori asupra apariției unei alergii sezoniere (ex.: la polen, expunere directă la soare sau la praf, etc.), eventual în conjuncție cu anumite fructe sau compuși alimentari, și/sau conform unor condiții de mediu (ex.: temperatură, umezeală, etc.). Notificările vor fi semnalate, inclusiv cu o anumită prioritate/frecvență, atât în cadrul aplicației cât și pe un dispozitiv mobil (telefon, tabletă) al utilizatorului sau a unei persoane de contact. Se vor pune la dispoziție, de asemenea, sfaturi referitoare la preîntâmpinarea unei/unor alergii, plus tratamentul și/sau medicația.
                        Utilizatorii îți vor putea adăuga alergiile, cu posibilitatea de a fi partajate la nivel de grup, inclusiv la nivelul unei rețele sociale. Diversele statistici de interes vor fi oferite via vizualizări atractive, iar interacțiunea cu utilizatorul va putea fi efectuată și prin intermediul unui agent de infață conversațional.
                   </p><p>
                        Resurse utile:<br>
                        <ul>
                            <li>Alergy @ WikiDoc – <a href="http://www.wikidoc.org/index.php/Allergy">http://www.wikidoc.org/index.php/Allergy</a></li>
                            <li>AllergenOnline – <a href="http://www.allergenonline.org/">http://www.allergenonline.org/</a></li>
                            <li>Dezvoltarea aplicatiilor Web la nivel de client – <a href="https://profs.info.uaic.ro/~busaco/teach/courses/cliw/web-film.html">https://profs.info.uaic.ro/~busaco/teach/courses/cliw/web-film.html</a></li>
                            <li>There is a bot for that – <a href="https://thereisabotforthat.com/">https://thereisabotforthat.com/</a></li>
                        </ul>
                    </p>
                    <p><b>Important</b><br>
                    Proba începe pe 19 Martie 2017 și se încheie pe data de 22 Aprilie ora 23:59!<br>
                    Proba se desfășoară online, adică de la tine de acasă!<br>
                    Organizatorii FIICode, împreună cu reprezentanții firmelor partenere, vor oferi sesiuni de îndrumare pe durata probei online! *</p>
                    <p><br />Cum ajung proiectele la noi? Voi lucrați &icirc;ntr-un repository public iar la finalul concursului noi jurizam conținutul său! Nu trageți cu ochiul la ceilalți &icirc;n caz că le aflați conturile de git!<br />Pe l&acirc;ngă proiectul ce respectă tema propusă, la final sunteți nevoiți să creați un filmuleț de prezentare al proiectului ce va fi folosit la jurizare!</p>
                    <p>Criteriile dupa care vom evalua proiectele sunt:
                    <ul>
                        <li>Inginerie Web/Mobile</li>
                        <li>Design și interacțiune</li>
                        <li>Funcționalitate</li>
                        <li>Creativitate</li>
                    </ul>
                    </p>
                    <p><br />Vă dorim mult success și nu ezitați să ne contactați pentru orice &icirc;ntrebare/nelămurire! <br /><br />Cu drag, <br />Echipa FIICode! <br /><br />* Vom reveni cu detalii pe parcurs!</p>
                    <div class="ui form">
                        <div class="field">
                            <label>Repository-ul proiectului (Github/GitLab/etc)</label>
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
                    </div> -->
				@endif
			</div>
		</div>
	</section>
@endsection