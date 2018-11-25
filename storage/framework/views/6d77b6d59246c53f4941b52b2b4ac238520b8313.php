<?php $__env->startSection('content'); ?>
<section id="content">
    <div class="ui container">
        <div class="head">
            <i class="icon code"></i> <?php echo e($title); ?> 
            <div class="green"></div>
            <div class="red"></div>
        </div>
        <div class="ui segment parteneri">
            <section id="tabs">
                <div class="container">
                    <h6 class="section-title h1">Editii Anterioare</h6>
                    <div class="row">
                        <div class="col-xs-12 ">
                            <nav>
                                <div class="nav nav-tabs nav-fill" id="nav-tab" role="tablist">
                                    <a class="nav-item nav-link active" id="nav-2018-tab" data-toggle="tab" href="#nav-2018" role="tab" aria-controls="nav-2018" aria-selected="true">Editia 2018</a>
                                    <a class="nav-item nav-link" id="nav-2017-tab" data-toggle="tab" href="#nav-2017" role="tab" aria-controls="nav-2017" aria-selected="false">Editia 2017</a>
                                    <a class="nav-item nav-link" id="nav-2016-tab" data-toggle="tab" href="#nav-2016" role="tab" aria-controls="nav-2016" aria-selected="false">Editia 2016</a>
                                </div>
                            </nav>
                            <div class="tab-content py-3 px-3 px-sm-0" id="nav-tabContent">
                                <div class="tab-pane fade show active" id="nav-2018" role="tabpanel" aria-labelledby="nav-2018-tab">
                                    <div id="carousel2018" class="carousel slide" data-ride="carousel">
                                        <div class="carousel-inner">
                                            <?php
                                                $dirname = "img/ed2018/";
                                                $currentSlide = 1;
                                                $images = scandir($dirname);
                                                $ignore = Array(".", "..");
                                                 foreach($images as $curimg){
                                                    if(!in_array($curimg, $ignore)) {
                                                        echo "
                                                        <div class='carousel-item'>
                                                          <img class='d-block w-100' src='".$dirname.$curimg."' alt=''>
                                                        </div>";
                                                        $currentSlide++;
                                                    }
                                                }
                                                ?>
                                            <div class="carousel-item active">
                                                <img class="d-block w-100" src="<?php echo e(asset('img/ed2018default.jpg')); ?>" alt="First slide">
                                            </div>
                                        </div>
                                        <a class="carousel-control-prev" href="#carousel2018" role="button" data-slide="prev">
                                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                        <span class="sr-only">Previous</span>
                                        </a>
                                        <a class="carousel-control-next" href="#carousel2018" role="button" data-slide="next">
                                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                        <span class="sr-only">Next</span>
                                        </a>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="nav-2017" role="tabpanel" aria-labelledby="nav-2017-tab">
                                    <div id="carousel2017" class="carousel slide" data-ride="carousel">
                                        <div class="carousel-inner">
                                            <?php
                                                $dirname = "img/ed2017/";
                                                $currentSlide = 1;
                                                $images = scandir($dirname);
                                                $ignore = Array(".", "..");
                                                 foreach($images as $curimg){
                                                    if(!in_array($curimg, $ignore)) {
                                                        echo "
                                                        <div class='carousel-item'>
                                                          <img class='d-block w-100' src='".$dirname.$curimg."' alt=''>
                                                        </div>";
                                                        $currentSlide++;
                                                    }
                                                }
                                                ?>
                                            <div class="carousel-item active">
                                                <img class="d-block w-100" src="<?php echo e(asset('img/ed2017default.jpg')); ?>" alt="First slide">
                                            </div>
                                        </div>
                                        <a class="carousel-control-prev" href="#carousel2017" role="button" data-slide="prev">
                                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                        <span class="sr-only">Previous</span>
                                        </a>
                                        <a class="carousel-control-next" href="#carousel2017" role="button" data-slide="next">
                                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                        <span class="sr-only">Next</span>
                                        </a>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="nav-2016" role="tabpanel" aria-labelledby="nav-2016-tab">
                                    <div id="carousel2016" class="carousel slide" data-ride="carousel">
                                        <div class="carousel-inner">
                                            <?php
                                                $dirname = "img/ed2016/";
                                                $currentSlide = 1;
                                                $images = scandir($dirname);
                                                $ignore = Array(".", "..");
                                                 foreach($images as $curimg){
                                                    if(!in_array($curimg, $ignore)) {
                                                        echo "
                                                        <div class='carousel-item'>
                                                          <img class='d-block w-100' src='".$dirname.$curimg."' alt=''>
                                                        </div>";
                                                        $currentSlide++;
                                                    }
                                                }
                                                ?>
                                            <div class="carousel-item active">
                                                <img class="d-block w-100" src="<?php echo e(asset('img/ed2016default.jpg')); ?>" alt="First slide">
                                            </div>
                                        </div>
                                        <a class="carousel-control-prev" href="#carousel2016" role="button" data-slide="prev">
                                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                        <span class="sr-only">Previous</span>
                                        </a>
                                        <a class="carousel-control-next" href="#carousel2016" role="button" data-slide="next">
                                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                        <span class="sr-only">Next</span>
                                        </a>
                                    </div>
                                    <div style="padding-top: 50px;">
                                        <h3>Coordonator : Alexandru Ioniță</h3>
                                        <h3>Vice-coordonatori : Gheorghe Bălan</br> Robert-Ciprian Ciobotaru </br>Oriana-Maria Oniciuc </br>Alexandru Păvăloi </br></h3>
                                        <h3>Coordonator sectiune WEB: Alexandru Păvăloi </h3>
                                        <h3>Coordonator sectiune Algoritmica: Alexandru Ioniță</h3>
                                        <a class="partener" href="http://asii.ro/"><img src="/img/parteneri/asii.png" alt="ASII" /></a>
                                        <a class="partener" href="http://www.info.uaic.ro/bin/Main/"><img src="/img/parteneri/fii.png" alt="FII" /></a>
                                        <h2 class="ui header">Câștigători</h2>
                                        <h3>
                                        <u>Algoritmică:</u></br><br>
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
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
        <div class="ui container"></div>
    </div>
</section>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>