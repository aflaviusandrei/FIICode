@extends('app')

@section('content')
    <section id="content">
        <div class="ui container loginPage">
            <div class="head"><i class="icon code"></i> {{ $title }} <div class="green"></div><div class="red"></div></div>
            <div class="ui segment">
                Bună ziua {{ $user->nume }},<br /><br />
                <!-- Această pagină va fi disponibilă odată ce începe prima etapă din secțiunea Algoritmică.
                <strong>Important</strong>
                <br /> <br />
                <p>Data exactă și ora începerii primei probe vor fi anunțate până pe 18 martie. Mai multe detalii în <a href="/regulament">Regulament</a>.-->
                <p>Rundele de Algoritmică au început. Datele vor fi anunțate și pe prima pagină a site-ului, la secțiunea de Anunțuri, dar și pe Facebook.</p>
                <p>Probele de concurs vor avea loc la adresa <a href="http://concurs.fiicode.asii.ro">concurs.fiicode.asii.ro</a>, iar conectarea se va face cu adresa de email (ca username) și cu parola de la înregistrarea pe site.</p>
                <p>Mult succes!<br><br>Cu drag,<br>Echipa FIICode</p>
            </div>
            <div class="ui container"></div>
        </div>
    </section>
@endsection
