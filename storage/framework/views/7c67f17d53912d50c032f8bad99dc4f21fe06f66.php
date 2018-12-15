<?php $__env->startSection('content'); ?>
    <section id="content">
        <div class="ui container">
            <div class="head"><i class="icon code"></i> <?php echo e($title); ?> <div class="green"></div><div class="red"></div></div>
            <div class="ui segment parteneri">
                <h2 class="ui header">Organizatori</h2>
                <a class="partener" href="http://asii.ro/"><img src="/img/parteneri/asii.png" alt="ASII" /></a>
                <a class="partener" href="http://www.info.uaic.ro/bin/Main/"><img src="/img/parteneri/fii.png" alt="FII" /></a>
                <h2 class="ui header">Platinum</h2>
                <a class="partener" href="https://www.bentley.com/"><img src="/img/parteneri/bentley.png" alt="Bentley" /></a>
                <a class="partener" href="https://www.geminicad.com/ro/"><img src="/img/parteneri/gemini-logo.png" alt="Gemini" /></a>
                <a class="partener" href="http://tss-yonder.com/"><img src="/img/parteneri/yonder.png" alt="Yonder" /></a>
                <a class="partener" href="http://www.siemens.com/ro/ro/home.html"><img src="/img/parteneri/siemens.png" alt="Siemens" /></a>
                <h2 class="ui header">Gold</h2>
                <a class="partener" href="http://www.mios.com/"><img src="/img/parteneri/mios.png" alt="Mios" /></a>
                <a class="partener" href="http://www.steuerhaus.com/"><img src="/img/parteneri/steuerhaus.png" alt="Steuerhaus" /></a>
                <a class="partener" href="https://www.tivo.com/"><img src="/img/parteneri/tivo.png" alt="Tivo" /></a>
                <a class="partener" href="http://kbc-romania.co/"><img src="/img/parteneri/kira.png" alt="Kira(kbc)" /></a>
                <h2 class="ui header">Silver</h2>
                <a class="partener" href="http://www.mindcti.com/"><img src="/img/parteneri/mind.png" alt="Mind" /></a>
                <h2>Parteneri eveniment</h2>
                <a class="partener" href="http://it-st.ro/"><img src="/img/parteneri/itst.png" alt="IT'ist" /></a>
                <a class="partener" href="http://www.pimcopy.ro/"><img src="/img/parteneri/pim.png" alt="PIM" /></a>
            </div>
            <div class="ui container"></div>
        </div>
    </section>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>