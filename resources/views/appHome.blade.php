<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width" />
    <meta name="csrf-token" content="{!! csrf_token() !!}">
    <meta name="description" content="FII Code este un concurs national de algoritmica si tehnologii web pentru studenti si elevi organizat de ASII si Facultatea de Informatica Iasi.">
    <meta name="keywords" content="concurs, algoritmica, tehnologii, web, tehnologii web, concurs de algoritmica, concurs de tehnologii web">
    <meta property="og:image" content="{{ asset('img/cover-2018.png') }}">
    
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,700' rel='stylesheet' type='text/css'>
    <title>FIICode 2018 - Concurs de algoritmică, game development și tehnologii web</title>
    <link rel="stylesheet" type="text/css" href="{{ asset('semantic/semantic.min.css')}}">
    <link rel="stylesheet" href="{{ asset('css/animate.css')}}" />
    <link rel="stylesheet" href="{{ asset('css/style.css?v=1.1')}}" />
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
@yield('content')
<footer>
    <div class="ui container">
        <div class="ui stackable grid">
            <div class="five wide column">
                <div class="content">
                    <a href="/"><img src="{{ asset('img/logo.png')}}" alt="Logo FIICode"/></a>
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
<script src="{{ asset('semantic/semantic.min.js') }}"></script>
<script src="{{ asset('js/front.js?v=1.2') }}"></script>
</body>
</html>
