@extends('app')

@section('content')
	<section id="content">
		<div class="ui container loginPage">
			<div class="head"><i class="icon code"></i> {{ $title }} <div class="green"></div><div class="red"></div></div>
			<div class="ui segment">
                Bună ziua {{ $user->nume }},<br /><br />
                @if(strtotime("25.01.2019 00:00:00") - time() > 0)
                    Aceasta pagină va conține tema probei de Tehnologii Web alături de o variantă <b>"pe-scurt"</b> a regulamentului la această secțiune!<br>
                    Informațiile și tema vor apărea la începutul probei, pe <strong>25 Ianuarie 2019</strong>.
                    <br /> <br />
				@else
                    <!-- Tema 2017 //!De păstrat, nenea care mai editezi, să lași aici, că oricum blade-ul ascunde de tot comentariile :)
                    <p>Să se conceapă o aplicație Web, de dorit oferind o interacțiune conversațională, care identifică - pe baza copertei, codului de bare sau a altui semn numeric/grafic fizic (i.e. beacon) ori electronic (URL, DOI) - diverse (categorii de) obiecte. Folosind această identificare, se pot recomanda resurse alternative de interes. Aceste recomandări pot fi realizate în funcție de mai mulți factori, precum disponibilitatea în alt format (varianta ca document PDF ori ePub a unui volum tipărit, eventual tradus în limba maternă a utilizatorului), preț (ofertă mai avantajoasă pentru un articol alimentar), calitate (procentaj mai mare de vitamine), similaritate (alt CD al aceleași formații), preferințe ale utilizatorului (doar recipientele de o anumită culoare sau formă). A se consulta și <a href="https://world.openfoodfacts.org/">Open Food Facts</a>, <a href="https://www.wikidata.org/">Wikidata</a>,<a href="https://viaf.org/">Virtual International Authority File</a>, <a href="https://www.opensemanticsearch.org/">Open Semantic Search</a>, <a href="https://thereisabotforthat.com/">There is a bot for that</a>.</p>
                    -->
<p>Tema propusă</p>
<p>la secțiunea Web &amp; Mobile a concursului FII Code 2019</p>
<h1 style="margin-bottom: 10.0pt;">Descriere</h1>
<p style="margin-bottom: 10.0pt;">Să se conceapă un <em>framework</em> Web modular menit a oferi dezvoltatorilor de aplicații Web posibilitatea generării de albume interactive de redare a unor resurse multimedia precum fotografii, ilustrații, diagrame, filme, animații, conținuturi audio, prezentări. Fiecare album va oferi modalități multiple de redare a resurselor și toate mijloacele necesare parcurgerii facile &ndash; i.e. controale de interacțiune standard via tastatură și mouse, iar pentru dispozitive mobile folosind gesturi de genul <em>tap</em>,<em> swipe</em> și altele&nbsp; &ndash; de către utilizatorii finali a mulțimii de resurse multimedia organizate &icirc;n albumele specificate, asigur&acirc;ndu-se ergonomia și independența de platformă (<em>desktop</em>, dispozitiv mobil, <em>smart</em> TV, chioșc informațional,...) ori de caracteristicile mediului de redare: rezoluție, densitate de pixeli, orientare și formă a ecranului.</p>
<p style="margin-bottom: 10.0pt;">Codul-sursă generat (HTML, CSS, JavaScript) și conținutul propriu-zis al albumelor pot fi oferite la nivel de client (<em>front-end</em>) și/sau server (<em>back-end</em>). Minimal, se vor lua &icirc;n considerație formatele GIF, JPEG, MPEG și MP3. Suportul pentru alte formate se va oferi via extensii, implement&acirc;ndu-se minim două &ndash; de exemplu, pentru redat resurse &icirc;n formatele SVG (<em>Scalable Vector Graphics</em>) și PDF (<em>Portable Document Format</em>).</p>
<p style="margin-bottom: 10.0pt;">Resursele multimedia ce pot fi incluse &icirc;ntr-un album pot fi stocate local sau referite de adrese Web (URLs &ndash; <em>Uniform Resource Locators</em>). Similar pentru albumele propriu-zise disponibile.</p>
<p style="margin-bottom: 10.0pt;"><em>Framework</em>-ul creat va putea fi configurat pe baza unor parametri &ndash; de pildă, dimensiunea zonei de redare a unui album, URL-ul albumului, maniera de vizualizare (interactivă sau nu), inhibarea afișării controalelor de interfață etc. Acești parametri pot fi specificați prin program sau preluați dintr-un document JSON (<em>JavaScript Object Notation</em>).</p>
<h1 style="margin-bottom: 10.0pt;"><em>Bonus</em>-uri</h1>
<ul>
<li style="margin-left: 36.0pt; text-indent: -18.0pt;">&ldquo;Răsfoirea&rdquo; albumului via instrucțiuni date prin intermediul unei interfețe &icirc;n linia de comandă (CLI &ndash; <em>Command Line Interface</em>) ori pe baza unor comenzi vocale.</li>
<li style="margin-left: 36.0pt; text-indent: -18.0pt;">Recurgerea la WebGL pentru realizarea unei interfețe 3D a albumului.</li>
<li style="margin-left: 36.0pt; text-indent: -18.0pt;">Oferirea de suport pentru internaționalizare și accesibilitate Web.</li>
<li style="text-indent: -18.0pt; margin: 0cm 0cm 10.0pt 36.0pt;">Includerea de module suplimentare pentru realizarea altor operații de interes &ndash; de exemplu, detectarea de resurse identice, recomandarea unor resurse similare, aplicarea de efecte vizuale la redarea unei/unor/tuturor resurse disponibile &icirc;ntr-un album etc.</li>
</ul>
<h1 style="margin-bottom: 10.0pt;">Resurse de interes</h1>
<ul>
<li style="margin-left: 36.0pt; text-indent: -18.0pt;">Filmul materiei &ldquo;Tehnologii Web&rdquo; inițiată și predată de Sabin Buraga (FII, UAIC) &ndash; <a href="https://profs.info.uaic.ro/~busaco/teach/courses/web/web-film.html"><span style="color: #1155cc;" data-darkreader-inline-color="">https://profs.info.uaic.ro/~busaco/teach/courses/web/web-film.html</span></a></li>
<li style="margin-left: 36.0pt; text-indent: -18.0pt;">Filmul disciplinei &ldquo;Dezvoltarea aplicațiilor Web la nivel de client&rdquo; inițiată și predată de Sabin Buraga (FII, UAIC) &ndash; <a href="https://profs.info.uaic.ro/~busaco/teach/courses/cliw/web-film.html"><span style="color: #1155cc;" data-darkreader-inline-color="">https://profs.info.uaic.ro/~busaco/teach/courses/cliw/web-film.html</span></a></li>
<li style="margin-left: 36.0pt; text-indent: -18.0pt;"><em>Awesome Lists</em> &ndash; <a href="https://github.com/sindresorhus/awesome"><span style="color: #1155cc;" data-darkreader-inline-color="">https://github.com/sindresorhus/awesome</span></a></li>
<li style="margin-left: 36.0pt; text-indent: -18.0pt;"><em>There is a bot for that </em>&ndash; <a href="https://thereisabotforthat.com/"><span style="color: #1155cc;" data-darkreader-inline-color="">https://thereisabotforthat.com/</span></a></li>
<li style="margin-left: 36.0pt; text-indent: -18.0pt;"><em>Student Developer Pack</em> &ndash; <a href="https://education.github.com/pack"><span style="color: #1155cc;" data-darkreader-inline-color="">https://education.github.com/pack</span></a></li>
</ul>
<p>&nbsp;</p>
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
                    </div>
				@endif
			</div>
		</div>
	</section>
@endsection