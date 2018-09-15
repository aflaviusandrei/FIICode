@extends('app')

@section('content')
    <section id="content">
    <div class="ui container">
    	<div class="head">
        	<i class="icon code"></i>
            Noutati
            <div class="green"></div>
            <div class="red">
         </div>
    	</div>
    	<div class="ui segment">
	     	Locatia festivitatii de deschidere din seara de 6 mai o gasiti aici:
         	<br/>
         	<a href="https://www.google.ro/maps/@47.1690129,27.5778408,3a,75y,191.14h,88.19t/data=!3m6!1e1!3m4!1s44xKhN_iMNhCozRRC_oyCw!2e0!7i13312!8i6656?hl=en">Corpul R, UAIC</a>
        </div>
	</div>

        <div class="ui container">
            <div class="head"><i class="icon code"></i> {{ $title }} <div class="green"></div><div class="red"></div></div>
            <div class="ui segment">
	      <section class="informatii-generale"> Detalii: <br>
		<ul>
		<li> finala concursului va avea loc intre <strong> 6-8 Mai la Iasi</strong></li>
		<li> cazarea si masa concurentilor din afara iasiului sunt asigurate de catre organizatori </li>
		<li> participantii sub 18 ani si echipele fara nici un membru major trebuie sa vina alaturi de un
<strong> insotitor </strong> cu varsta minima de 18 ani </li>
		<li> organizatorii vor asigura doar cazarea insotitorului nu si masa acestuia </li>
		<li> participantii la runda finala trebuie sa confirme locul printr-un e-mail la adresa <a href="mailto:fiicode@asii.ro">fiicode@asii.ro</a> in care sa specifice si detaliile insotitorului (daca e cazul) </li>
		<li> premiile totale sunt in valoare de <strong> 500 EURO </strong> </li>
		</ul>
		</section>
		<br />
		<section class="runde-online">
		<p> Runda online de Tehnologii Web s-a incheiat pe 24 Aprilie. Rezultatele sunt  <strong> <a href="documente/ClasamentWeb.pdf" target="_blank"> aici</a>
</strong>.</p>
		<p> Pentru sectiunea de algoritmica numarul de calificati se imparte intre: <strong>16 </strong> participanti din afara Iasiului si <strong>10 </strong> din Iasi. <br/>Lista nominala a calificatilor din afara Iasiului este <strong> <a href="documente/AlgoOutOfIasi.pdf" target="_blank"> aici</a></strong>.</p>
</section> <br/>
     <p> Contact organizatori:
	<ul>
		<li> Alexandru - <a href="tel:0741626148">0741626148</a> </li>
		<li> Oriana - <a href="tel:0741626148">0757512664</a> </li>
	</ul>
</p>         </div>
</div>
 <div class="ui container">
            <div class="head"><i class="icon code"></i> Regulament <div class="green"></div><div class="red"></div></div>
            <div class="ui segment">
	      <section class="regulament">
		Prin participarea la etapa finala atat concurentii cat si insotitorii admit ca au luat la cunostinta si vor respecta <a href="documente/RegulamentFinala.pdf"> <strong>regulamentul</strong> </a>.
		<br/> <br/>
		Cele mai importante precizari ale acestuia sunt
		<ul>
			<li> concurentii si insotitorii nu vor aduce stricaciuni caminului in care vor fi cazati. In caz contrar, acestia vor suporta cheltuielile de reparatii. </li>
			<li> concurentii minori sunt in responsabilitatea insotitorului pe toata durata concursului. Astfel, organizatorii FIICode, Facultatea de Informatica si Asociatia
Studentilor Informaticieni Ieseni nu vor fi responsabile in cazul oricarui accident poate interveni. </li>
			<li> concurentii si insotitorii vor trebui sa se semneze acte la inceperea competitiei </li>
		</ul>
</section>
</div>
</div>
            <div class="ui container">
	  <div class="head"><i class="icon code"></i> Program <div class="green"></div><div class="red"></div></div>
	<div class="ui segment">
		<table class="ui celled striped structured table">
			<thead>
			<tr>
				<th> </th>
				<th> Vineri</th>
				<th> Sambata </th>
				<th> Duminica </th>
			</tr>
			</thead>
                    <tbody>
                    <tr>
			<th> 9:00 </th>
			<td> </td>
			<td rowspan="1"> Mic dejun*</td>
<td rowspan="1"> Mic dejun* </td>
                    </tr>
<tr>
			<th> 10:00 </th>
			<td rowspan="6"> Sosirea participantilor</td>
			<td rowspan="6"> Proba finala**</td>
               <td rowspan="2"> Festivitatea de incheiere si premierea</td>
		</tr>
<tr>
			<th> 12:00 </th>
			                    </tr>
<tr>
			<th> 13:00 </th>
			<td rowspan="8"> Plecarea participantilor </td>
                    </tr>
<tr>
			<th> 14:00 </th>

                    </tr>
<tr>
			<th> 15:00 </th>
                    </tr>
<tr>
			<th> 16:00 </th>
                    </tr>
<tr>
			<th> 17:00 </th>
			<td rowspan="2"> Festivitatea de deschidere </td>
			<td rowspan="2"> Activitati cu participantii </td>
                    </tr>
<tr>
			<th> 18:00 </th>
                    </tr>
<tr>
			<th> 19:00 </th>
			<td rowspan="2"> Cina* </td>
		<td rowspan="2"> Cina </td>
                    </tr>
<tr>
			<th> 20:00 </th>
                    </tr>
                                        </tbody>
                </table>
<p><br/>
	Festivitatile de deschidere si incheiere vor avea loc in corpul R al "Universitatii Alexandru Ioan Cuza", la ultimul etaj! <br />
	*doar pentru participantii din afara iasiului <br />
	**la algoritmica proba finala va dura numai 2h 30min

</p>
</div>
</div>
        </div>
    </section>
@endsection
