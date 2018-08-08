

<?php $__env->startSection('content'); ?>
	<section id="content">
		<div class="ui container loginPage">
			<div class="head"><i class="icon code"></i> <?php echo e($title); ?> <div class="green"></div><div class="red"></div></div>
			<div class="ui segment">
				Buna ziua <?php echo e($user->nume); ?>,<br />
				Aceasta pagina contine tema probei de Tehnologii Web alaturi de o varianta <b>"pe-scurt"</b> a regulamentului la aceasta sectiune!
				<br /> <br />
				<p>Să se conceapă o aplicație Web, de dorit oferind o interacțiune conversațională, care identifică -- pe baza copertei, codului de bare sau a altui semn numeric/grafic fizic (i.e. beacon) ori electronic (URL, DOI) -- diverse (categorii de) obiecte. Folosind această identificare, se pot recomanda resurse alternative de interes. Aceste recomandări pot fi realizate în funcție de mai mulți factori, precum disponibilitatea în alt format (varianta ca document PDF ori ePub a unui volum tipărit, eventual tradus în limba maternă a utilizatorului), preț (ofertă mai avantajoasă pentru un articol alimentar), calitate (procentaj mai mare de vitamine), similaritate (alt CD al aceleași formații), preferințe ale utilizatorului (doar recipientele de o anumită culoare sau formă). A se consulta și <a href="https://world.openfoodfacts.org/">Open Food Facts</a>, <a href="https://www.wikidata.org/">Wikidata</a>,<a href="https://viaf.org/">Virtual International Authority File</a>, <a href="https://www.opensemanticsearch.org/">Open Semantic Search</a>, <a href="https://thereisabotforthat.com/">There is a bot for that</a>.</p>
				Criterii de evaluare:
				<ul>
					<li>arhitectură</li>
					<li>implementarea</li>
					<li>interacțiunea cu utilizatorul (inclusiv creativitatea soluției)</li>
					<li>prezentarea efectivă a proiectului (documentație, expunere etc.)</li>
				</ul>
				<br>
				<p><b>Important</b><br>
				Proba începe pe 26 Martie 2017 și se încheie pe data de 23 Aprilie ora 23:59!<br>
				Proba se desfășoară online, adică de la tine de acasă!<br>
				Organizatorii FIICode, împreună cu reprezentanții firmelor partenere, vor oferi sesiuni de îndrumare pe durata probei online! *</p>
				<p><br />Cum ajung proiectele la noi? Voi lucrați &icirc;ntr-un repository public iar la finalul concursului noi jurizam conținutul său! Nu trageți cu ochiul la ceilalți &icirc;n caz că le aflați conturile de git!<br />Pe l&acirc;ngă proiectul ce respectă tema propusă, la final sunteți nevoiți să creați un filmuleț de prezentare al proiectului ce va fi folosit la jurizare!</p>
				<p><br />Criteriile dupa care vom evalua proiectele sunt:</p>
				<p><br />Vă dorim mult success și nu ezitați să ne contactați pentru orice &icirc;ntrebare/nelămurire! <br /><br />Cu drag, <br />Echipa FIICode! <br /><br />* Vom reveni cu detalii pe parcurs!</p>
				<div class="ui form">
					<div class="field">
						<label>Repository for bitbucket</label>
						<input id="githubRepo" name="repo" value="<?php echo e(Auth::user()->repogithub); ?>" />
					</div>
					<div class="field">
						<label>Link catre prezentarea video</label>
						<input id="prezentare" name="prezentare" value="<?php echo e(Auth::user()->prezentare); ?>" />
					</div>
					<div class="field">
						<div class="ui blue labeled icon saveRepo button">
							<i class="icon save"></i>
							Salveaza
						</div>
					</div>
					<div class="ui message error">
						<h2>Eroare <i class="icon frown"></i></h2>
						<p>Adresa introdusa trebuie sa aiba format de link (ex. https://example.com/UserName/NameOfRepo)</p>
					</div>
					<div class="ui message success">
						<h2>Success!</h2>
						<p>Link-ul a fost salvat cu success!</p>
					</div>
				</div>
			</div>
		</div>
	</section>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>