<?php $__env->startSection('content'); ?>
    <header>
        <div class="ui container">
            <nav>
                <a href="/">
                    <i class="icon home"></i>
                    Pagina de start
                </a>
                
                <a href="webmobile">
                    <i class="icon code"></i>
                    Web/Mobile
                </a>
                <a href="/gamedev">
                    <i class="icon rocket"></i>
                    GameDev
                </a>
                <a href="/algoritmica">
                    <i class="icon cubes"></i>
                    Algoritmica
                </a>
                <a href="/editia2016">
                    <i class="icon trophy"></i>
                    Ediții anterioare
                </a>
                <a href="/contact">
                    <i class="icon mail"></i>
                    Contact
                </a>
                <?php if(Auth::check()): ?>
                    <a href="/logout">
                        <i class="icon sign out"></i>
                        Logout
                    </a>
                <?php else: ?>
                    <a href="/login">
                        <i class="icon sign in"></i>
                        Login
                    </a>
                <?php endif; ?>
            </nav>
            <div class="mobile">
                <div class="ui icon top right pointing dropdown button white">
                    <i class="icon sidebar"></i>
                    <div class="menu">
                        <div class="item active">
                            <a href="/"><i class="icon home"></i>Pagină de start</a>
                        </div>
                        
                        <div class="item">
                            <a href="/webmobile"><i class="icon code"></i>Web/Mobile</a>
                        </div>
                        <div class="item">
                            <a href="/gamedev"><i class="icon rocket"></i>GamDev</a>
                        </div>
                        <div class="item">
                            <a href="/algoritmica"><i class="icon cubes"></i>Algoritmica</a>
                        </div>
                        <?php if(Auth::check()): ?>
                            <div class="item">
                                <a href="/logout">
                                    <i class="icon sign out"></i>
                                    Logout
                                </a>
                            </div>
                        <?php else: ?>
                            <div class="item">
                                <a href="/login">
                                    <i class="icon sign in"></i>
                                    Login
                                </a>
                            </div>
                        <?php endif; ?>
                        <div class="item">
                            <a href="/finala">
                                <i class="icon checkered flag"></i>
                                Finală
                            </a>
                        </div>
                        <div class="item">
                            <a href="/contact"><i class="icon mail"></i>Contact</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <section id="homecover">
        <div class="ui container">
            <div class="logo home">
                <img src="<?php echo e(asset('img/logohome.png')); ?>" alt="Logo FIICode" />
            </div>
            <h2>Exact ca în orice altă artă, încredera vine odată cu experiența,</h2>
            <h2>Atât pentru voi, cât și pentru noi.</h2>
            <p>FII Code este un proiect organizat de ASII și de Facultatea de Informatică din Iași, ce are la bază dezvoltarea abilităților pe partea de programare la nivel competitiv. 
                Fiind la a 4-a ediție, acesta are o arie largă ce cuprinde web&mobile development, game developmen și algoritmică. 
                Tema, la fel ca și cele din ultimii 4 ani, va fi una îndrăzneață, creativă, menită să scoată tot ce este mai bun din voi.
                Ambiția și spiritul competitiv vor fi calitătile esențiale de care veți avea nevoie pentru a vă număra printre învingători.</p>
            <div class="buttons">
                <a href="/inscrie-te/web">
                    <div class="ui labeled icon blue massive button web">
                        <i class="icon code"></i>
                        Web/Mobile
                    </div>
                </a>
                <a href="/inscrie-te/gamedev">
                    <div class="ui labeled icon teal massive button gamedev">
                        <i class="icon rocket"></i>
                        Game Dev
                    </div>
                </a>
                <a href="/inscrie-te/algo">
                    <div class="ui labeled icon green massive button algo">
                        <i class="icon cubes"></i>
                        Algoritmică
                    </div>
                </a>
            </div>
            <img class="backgroundhome web" src="<?php echo e(asset('img/web.svg')); ?>" alt="web tehnology background" />
            <img class="backgroundhome gamedev" src="<?php echo e(asset('img/gamedev.jpg')); ?>" alt="game dev background" />
            <img class="backgroundhome algo" src="<?php echo e(asset('img/algo.svg')); ?>" alt="algorithm background" />
        </div>
    </section>
    <section id="content">
        <div class="ui container">
            <div class="head"><i class="icon code"></i> Despre <div class="green"></div><div class="red"></div></div>
            <div class="ui segment">
                <p>Proiectul dorește ca participanții să valorifice <strong>abilitățile</strong> (și să dezvolte competențe), prin intermediul competiției: <strong>g&acirc;ndirea algoritmică</strong> și <strong>analitică</strong>, modelarea și implementarea, <strong>dezvoltarea</strong> de noi tehnologii, creativitatea, adaptabilitatea, precum&nbsp; și capacitatea de a susține &icirc;n public a unei lucrări proprii. Cele 3 secțiuni, <strong>Algoritmică</strong>, <strong>Web/Mobile</strong> și <strong>GameDev</strong>, sunt concepute special pentru acest lucru, fiecare acoperind o anumită arie din domeniul IT aflată &icirc;n acest moment &icirc;n plină expansiune. Modul de organizare al competiției implică cunoașterea at&acirc;t de noțiuni practice c&acirc;t și teoretice.
                    <br>
                    <br>
                    Subiectele și soluțiile sunt propuse de o comisie formată din reprezentanți ai unor companii de prestigiu din industrie, de profesori universitari, preuniversitari și de studenți ai Facultății de Informatică. Evaluarea la secțiunea de algoritmică va fi  făcută online, iar evaluarea în cadrul probelor Web/Mobile și GameDev va fi realizată de către comisie, fiecare secțiune având un regulament propriu.
                    <br>
                    <br>
                    De asemenea, se dorește o apropriere a celor două medii universitar și preuniversitar, fiecare dintre concurenți fiind invitat să împărtășească din experiența lor.</p>
            </div>
            <div class="ui container"></div>
        </div>
        <div class="ui container">
            <div class="ui horizontal divider">
                Newsfeed
            </div>
            <br />
            <?php foreach($news as $new): ?>
                <div class="ui fluid card newsfeed">
                    <div class="content">
                        <div class="header"><?php echo e($new['title']); ?></div>
                        <div class="meta">
                        </div>
                        <p><?php echo $new['content']; ?></p>
                    </div>
                    <div class="extra content">
                    <span data-id="<?php echo e($new['id']); ?>" class="left floated like apreciaza">
                        <i class="like icon"></i>
                        Apreciaza
                    </span>
                <span class="right floated star">
                    <?php echo e($new['aprecieri']); ?> aprecieri
                </span>
                    </div>
                </div>
            <?php endforeach; ?>
            <div class="ui container"></div>
        </div>
    </section>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('appHome', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>