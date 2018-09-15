@extends('app')

@section('content')
     <section id="content">
        <div class="ui container">
            <div class="head"><i class="icon code"></i> {{ $title }} <div class="green"></div><div class="red"></div></div>
                    
            <div class="ui segment parteneri">
                <h2 class="ui header">Organizare Eveniment</h2>
                    <h3>Coordonator : Alexandru Ioniță</h3>
                    <h3>Vice-coordonatori : Gheorghe Bălan</br> Robert-Ciprian Ciobotaru </br>Oriana-Maria Oniciuc </br>Alexandru Păvăloi </br></h3>
                    <h3>Coordonator sectiune WEB: Alexandru Păvăloi </h3>
                    <h3>Coordonator sectiune Algoritmica: Alexandru Ioniță</h3>
                    <a class="partener" href="http://asii.ro/"><img src="/img/parteneri/asii.png" alt="ASII" /></a>
                    <a class="partener" href="http://www.info.uaic.ro/bin/Main/"><img src="/img/parteneri/fii.png" alt="FII" /></a>
                    <h2 class="ui header">Câștigători</h2>
                    <h3><u>Algoritmică:</u></br><br>
                        Locul I: Horia Turcuman <br>
                        Locul II: Vlad Coteanu<br>
                        Locul III: Denis Banu<br>
                        Mențiuni:  Diana Ghinea & Nicolae Bodea & Cristian Vantur<br>
                    <h3>
                        <u>Web:</u><br><br>
                        Locul I: echipa Literalmente: Ștefan Moraru și Gabriel Stufliuc<br>
                        Locul II: echipa The Eagles: David Vultur și Iulian Vultur<br>
                        Locul III: echipa Chronic2: Carmen Mitru și Dan Diaconu<br>
                    </h3>
                    <h3>
                        <u>Probleme de algoritmică de la ediția 2016:</u><br><br>
                        <a href="https://www.hackerrank.com/fiicode-runda-1" alt="Runda 1">Runda 1</a><br>
                        <a href="https://www.hackerrank.com/fiicode-runda-2" alt="Runda 2">Runda 2</a><br>
                        <a href="https://www.hackerrank.com/fiicode-runda-3" alt="Runda 3">Runda 3</a><br>
                        <a href="https://www.hackerrank.com/fiicode-runda-finala-online-mirror" alt="Runda finală">Runda finală</a>
                    </h3>
                <h2>Parteneri eveniment</h2>
                    <a class="partener" href="http://it-st.ro/"><img src="/img/parteneri/itst.png" alt="IT'ist" /></a>
                <div class="ui segment parteneri">
                    <h2 class="ui header">Platinium</h2>
                     <a class="partener" href="http://www.camline.com/en/home.html"><img src="img/parteneri/camline.png" alt="Yonder" /></a>
                    <h2 class="ui header">Gold</h2>
                        <a class="partener" href="http://tss-yonder.com/"><img src="img/parteneri/yonder.png" alt="Yonder" /></a>
                    <h2 class="ui header">Silver</h2>
                        <a class="partener" href="http://www.pimcopy.ro/"><img src="/img/parteneri/pim.png" alt="PIM" /></a>
                        <a class="partener" href="https://rohost.com/"><img src="/img/parteneri/rohost.png" alt="rohost" /></a>
             </div>
            </div>
            <div class="ui container"></div>
        </div>
    </section>
@endsection