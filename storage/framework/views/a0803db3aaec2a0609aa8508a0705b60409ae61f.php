<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width" />
    <meta name="csrf-token" content="<?php echo csrf_token(); ?>">
    <meta name="description" content="FII Code este un concurs national de algoritmica si tehnologii web pentru studenti si elevi organizat de ASII si Facultatea de Informatica Iasi.">
    <meta name="keywords" content="concurs, algoritmica, tehnologii, web, tehnologii web, concurs de algoritmica, concurs de tehnologii web">
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,700' rel='stylesheet' type='text/css'>
    <title><?php echo e($title); ?> | FIICode 2018 - Concurs de algoritmică, game development și tehnologii web</title>
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('semantic/semantic.min.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('css/style.css')); ?>" />
    <link rel="stylesheet" href="<?php echo e(asset('css/animate.css')); ?>" />
    <link rel="shortcut icon" href="/favicon.ico" type="image/x-icon">
    <link rel="icon" href="/favicon.ico" type="image/x-icon">
    <script>
        (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
                    (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
                m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
        })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

        ga('create', 'UA-74652966-1', 'auto');
        ga('send', 'pageview');
    </script>
</head>
<body>
<header class="nonHome">
    <div class="ui container">
        <a class="logo" href="/">
            <img src="<?php echo e(asset('img/logo.png')); ?>" alt="Logo FIICode" />
        </a>
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
                        <a href="/"><i class="icon home"></i>Pagina de start</a>
                    </div>
                    <div class="item">
                        <a href="/despre"><i class="icon info"></i>Despre</a>
                    </div>
                    <div class="item">
                        <a href="/parteneri"><i class="icon star"></i>Partenri</a>
                    </div>
                    <div class="item">
                        <a href="/regulament"><i class="icon legal"></i>Regulament</a>
                    </div>
                    <div class="item">
                        <a href="/calendar"><i class="icon calendar"></i>Calendar</a>
                    </div>
                    <?php if(Auth::check()): ?>
                        <a href="/logout">
                            <i class="icon sign out"></i>
                            Logout
                        </a>
                    <?php else: ?>
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
        <div class="clearfloat"></div>
    </div>
</header>
<section id="bread">
    <div class="ui container">
        FII Code <i class="icon angle right"></i> <?php echo e($title); ?>

    </div>
</section>
<?php echo $__env->yieldContent('content'); ?>
<footer>
    <div class="ui container">
        <div class="ui stackable grid">
            <div class="five wide column">
                <div class="content">
                    <img src="<?php echo e(asset('img/logo.png')); ?>" alt="Logo FIICode"/>
                    <p>FII Code este un concurs la nivel național pentru elevi și studenți în care aceștia își pot etala cunoștințele în algoritmică sau tehnologii web. Sună bine? Atunci înscrie-te chiar acum și dovedește-le tuturor că ești cel mai bun!</p>
                </div>
            </div>
            <div class="five wide column">
                <div class="content">
                    <h3 class="ui header divided">Ediţia 2018</h3>
                    <div class="ui list">
                        <a href="/" class="item">Pagina de start</a>
                        <a href="/regulament" class="item">Regulament</a>
                        <a href="/sitemap.xml" class="item">Sitemap</a>
                        <span>Website gazduit de <a href="https://rohost.com/">RoHost</a></span>
                    </div>
                </div>
            </div>
            <div class="five wide column">
                <div class="content social">
                    <h3 class="ui header divided">Social</h3>
                    <a href="https://www.facebook.com/FIICode"><i class="icon facebook"></i></a>
                </div>
            </div>
        </div>
        <div class="ui horizontal divider"></div>
        <div class="copyright">
            Copyright &copy; <b>FII Code</b> 2018
        </div>
        <div class="makeby">
            Proiect organizat de <a target="_blank" href="http://www.info.uaic.ro">FII</a> și <a target="_blank" href="http://asii.ro">ASII</a>
        </div>
    </div>
</footer>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
<script src="<?php echo e(asset('semantic/semantic.min.js')); ?>"></script>
<script src="<?php echo e(asset('js/front.js')); ?>"></script>
</body>
</html>
