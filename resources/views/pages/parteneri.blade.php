@extends('app')

@section('content')
    <section id="content">
        <div class="ui container">
            <div class="head"><i class="icon code"></i> {{ $title }} <div class="green"></div><div class="red"></div></div>
            <div class="ui segment parteneri">
                <h2 class="ui header">Organizatori</h2>
                <a class="partener" href="http://asii.ro/"><img src="/img/parteneri/asii.png" alt="ASII" /></a>
                <a class="partener" href="http://www.info.uaic.ro/bin/Main/"><img src="/img/parteneri/fii.png" alt="FII" /></a>
                <h2 class="ui header">Platinum</h2>
                <a class="partener" href="http://www.camline.com/"><img src="/img/parteneri/camline.png" alt="CamLine" /></a>
                <a class="partener" href="https://www.jpmorgan.com/" style="margin:20px;margin-right:0;"><img src="/img/parteneri/jpmorgan.png" alt="J.P.Morgan" /></a>
                <a class="partener" href="http://www.ness.ro/"><img src="/img/parteneri/ness.png" alt="Ness" /></a>
                <h2 class="ui header">Silver</h2>
                <a class="partener" href="https://www.tivo.com/"><img src="/img/parteneri/tivo.png" alt="Tivo" /></a>
                <a class="partener" href="http://tss-yonder.com/"><img src="/img/parteneri/yonder.png" alt="Yonder" /></a>
                <h2>Parteneri eveniment</h2>
                <a class="partener" href="http://it-st.ro/"><img src="/img/parteneri/itst.png" alt="IT'ist" /></a>
            </div>
            <div class="ui container"></div>
        </div>
    </section>
@endsection
