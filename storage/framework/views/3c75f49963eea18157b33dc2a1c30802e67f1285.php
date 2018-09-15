<?php $__env->startSection('content'); ?>
    <section id="content">
        <div class="ui container">
            <div class="head"><i class="icon code"></i> <?php echo e($title); ?> <div class="green"></div><div class="red"></div></div>
            <div class="ui segment">
                <p>
                    Pentru orice intrebare legata de FIICode te rugam sa completezi formularul de mai jos.
                </p>
                <div class="ui form contactForm">
                    <div class="field">
                        <label>Numele tau<span>*</span></label>
                        <input type="text" name="nume" placeholder="Nume si prenume" />
                    </div>
                    <div class="field">
                        <label>Email<span>*</span></label>
                        <input type="text" name="email" placeholder="Email" />
                    </div>
                    <div class="field">
                        <label>Subiect<span>*</span></label>
                        <input type="text" name="subiect" placeholder="Subiect" />
                    </div>
                    <div class="field">
                        <label>Mesaj<span>*</span></label>
                        <textarea id="mesaj" name="mesaj"></textarea>
                    </div>
                    <div class="field">
                        <div class="ui blue labeled icon submit button"><i class="icon send"></i>Trimite</div>
                    </div>
                    <div class="ui success message">
                        <div class="header">Mesaj trimis cu success!</div>
                        <p>Mesajul tau a ajuns la noi si iti vom raspunde in cel mai scurt timp posibil.</p>
                    </div>
                    <div class="ui warning message">
                        <div class="header">Mesajul nu a putut fii trimis.</div>
                        <p>Aparent acest mesaj nu poate fii trimis catre noi, te rugam sa incerci iar.</p>
                    </div>
                </div>
            </div>
            <div class="ui container"></div>
        </div>
    </section>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>