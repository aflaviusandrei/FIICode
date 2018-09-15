<?php $__env->startSection('content'); ?>
    <header>
        <div class="ui container">
            <nav>
                <a href="/">
                    <i class="icon home"></i>
                    Pagina de start
                </a>
                <a href="/despre">
                    <i class="icon info"></i>
                    Despre
                </a>
                <a href="/parteneri">
                    <i class="icon star"></i>
                    Parteneri
                </a>
                <a href="/regulament">
                    <i class="icon legal"></i>
                    Regulament
                </a>
                <a href="/calendar">
                    <i class="icon calendar"></i>
                    Calendar
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
                            <a href="/despre"><i class="icon info"></i>Despre</a>
                        </div>
                        <div class="item">
                            <a href="/parteneri"><i class="icon star"></i>Parteneri</a>
                        </div>
                        <div class="item">
                            <a href="/regulament"><i class="icon legal"></i>Regulament</a>
                        </div>
                        <div class="item">
                            <a href="/calendar"><i class="icon calendar"></i>Calendar</a>
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
            <h2>Dacă ești priceput în algoritmică, tehnologii web/mobile, sau dezvoltare de jocuri, atunci află că...</h2>
            <p>Se zvonește că în regatul Iașului, în lunile Martie, Aprilie si Mai, o mare competiție de Algoritmică, Web-Mobile și Game Dev urmează să înceapă. În Facultatea de Informatică Iași încep să se strângă fel de fel de probleme, grele și ușoare, dar pline de capcane și provocări. Totodată, undeva în clădire se caută în secret teme îndrăznețe pentru toți pasionații dezvoltatori prin care aceștia să etaleze tehnologiile stăpânite precum și creativitatea cu care se mândresc.</p>
            <h2 style=" font-size: 24px; margin-bottom: -20px; color: white; ">Înscrierile vor începe în curând...</h2>
            <div class="buttons">
                <!--<a href="/inscrie-te/web">-->
                <a href="#">
                    <div class="ui labeled icon blue massive button web">
                        <i class="icon code"></i>
                        Web/Mobile
                    </div>
                </a>
                <!--<a href="/inscrie-te/gamedev">-->
                <a href="#">
                    <div class="ui labeled icon teal massive button gamedev">
                        <i class="icon rocket"></i>
                        Game Dev
                    </div>
                </a>
                <!--<a href="/inscrie-te/algo">-->
                <a href="#">
                    <div class="ui labeled icon green massive button algo">
                        <i class="icon cubes"></i>
                        Algoritmică
                    </div>
                </a>
            </div>
            <img class="backgroundhome web" src="<?php echo e(asset('img/web.svg')); ?>" alt="web tehnology background" />
            <img class="backgroundhome game" src="<?php echo e(asset('img/mobile.jpg')); ?>" alt="game dev background" />
            <img class="backgroundhome algo" src="<?php echo e(asset('img/algo.svg')); ?>" alt="algorithm background" />
        </div>
    </section>
    <section id="content">
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