<?php $__env->startSection('content'); ?>
    <section id="content">
        <div class="ui container loginPage">
            <div class="head"><i class="icon code"></i> <?php echo e($title); ?> <div class="green"></div><div class="red"></div></div>
            <div class="ui segment">
                Buna ziua <?php echo e($user->nume); ?>,<br />
                Aceasta pagina v-a fi disponibila odata ce incepe prima etapa din sectiunea Algoritmica.
                <strong>Important</strong>
                <br /> <br />
                <p> Prima probă începe pe 26 Martie 2017 la ora 18 și va dura 2 ore!</p>
                <p>  Platforma o puteți accesa la adresa:<a href="https://concurs.fiicode.asii.ro">https://concurs.fiicode.asii.ro</a> . Accesul la platformă se va face cu ajutorul email-ului și a parolei pe care le-ați introdus la logarea pe site.</p>
                <p>Clasamentul îl puteți accesa la adresa: <a href="https://concurs.fiicode.asii.ro/ranking">https://concurs.fiicode.asii.ro/ranking</a> </p>
                <p> Vă dorim mult success și nu ezitați să ne contactați pentru orice întrebare/nelămurire!</p> 

                Cu drag, </br>
                Echipa FIICode! 
            </div>
            <div class="ui container"></div>
        </div>
    </section>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>