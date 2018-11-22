@extends('app')

@section('content')
     <section id="content">
        <div class="ui container">
            <div class="head"><i class="icon code"></i> {{ $title }} <div class="green"></div><div class="red"></div></div>
                    
            <div class="ui segment parteneri">
                <h2 class="ui header">Editii Anterioare</h2>
                    <section id="tabs">
                        <div class="container">
                            <h6 class="section-title h1">Tabs</h6>
                            <div class="row">
                                <div class="col-xs-12 ">
                                    <nav>
                                        <div class="nav nav-tabs nav-fill" id="nav-tab" role="tablist">
                                            <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">Editia 2018</a>
                                            <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false">Editia 2017</a>
                                            <a class="nav-item nav-link" id="nav-contact-tab" data-toggle="tab" href="#nav-contact" role="tab" aria-controls="nav-contact" aria-selected="false">Editia 2016</a>
                                        </div>
                                    </nav>
                                    <div class="tab-content py-3 px-3 px-sm-0" id="nav-tabContent">
                                        <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                                            Et et consectetur ipsum labore excepteur est proident excepteur ad velit occaecat qui minim occaecat veniam. Fugiat veniam incididunt anim aliqua enim pariatur veniam sunt est aute sit dolor anim. Velit non irure adipisicing aliqua ullamco irure incididunt irure non esse consectetur nostrud minim non minim occaecat. Amet duis do nisi duis veniam non est eiusmod tempor incididunt tempor dolor ipsum in qui sit. Exercitation mollit sit culpa nisi culpa non adipisicing reprehenderit do dolore. Duis reprehenderit occaecat anim ullamco ad duis occaecat ex.
                                        </div>
                                        <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
                                            Et et consectetur ipsum labore excepteur est proident excepteur ad velit occaecat qui minim occaecat veniam. Fugiat veniam incididunt anim aliqua enim pariatur veniam sunt est aute sit dolor anim. Velit non irure adipisicing aliqua ullamco irure incididunt irure non esse consectetur nostrud minim non minim occaecat. Amet duis do nisi duis veniam non est eiusmod tempor incididunt tempor dolor ipsum in qui sit. Exercitation mollit sit culpa nisi culpa non adipisicing reprehenderit do dolore. Duis reprehenderit occaecat anim ullamco ad duis occaecat ex.
                                        </div>
                                        <div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">
                                            Et et consectetur ipsum labore excepteur est proident excepteur ad velit occaecat qui minim occaecat veniam. Fugiat veniam incididunt anim aliqua enim pariatur veniam sunt est aute sit dolor anim. Velit non irure adipisicing aliqua ullamco irure incididunt irure non esse consectetur nostrud minim non minim occaecat. Amet duis do nisi duis veniam non est eiusmod tempor incididunt tempor dolor ipsum in qui sit. Exercitation mollit sit culpa nisi culpa non adipisicing reprehenderit do dolore. Duis reprehenderit occaecat anim ullamco ad duis occaecat ex.
                                        </div>
                                        <div class="tab-pane fade" id="nav-about" role="tabpanel" aria-labelledby="nav-about-tab">
                                            Et et consectetur ipsum labore excepteur est proident excepteur ad velit occaecat qui minim occaecat veniam. Fugiat veniam incididunt anim aliqua enim pariatur veniam sunt est aute sit dolor anim. Velit non irure adipisicing aliqua ullamco irure incididunt irure non esse consectetur nostrud minim non minim occaecat. Amet duis do nisi duis veniam non est eiusmod tempor incididunt tempor dolor ipsum in qui sit. Exercitation mollit sit culpa nisi culpa non adipisicing reprehenderit do dolore. Duis reprehenderit occaecat anim ullamco ad duis occaecat ex.
                                        </div>
                                    </div>
                                
                                </div>
                            </div>
                        </div>
                    </section>
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