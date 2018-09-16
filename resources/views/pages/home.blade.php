@extends('appHome')

@section('content')
    <header>
        <div class="ui container">
            <nav>
                <a href="/">
                    <i class="icon home"></i>
                    Pagina de start
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
                @if (Auth::check())
                    <a href="/logout">
                        <i class="icon sign out"></i>
                        Logout
                    </a>
                @else
                    <a href="/login">
                        <i class="icon sign in"></i>
                        Login
                    </a>
                @endif
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
                        @if (Auth::check())
                            <div class="item">
                                <a href="/logout">
                                    <i class="icon sign out"></i>
                                    Logout
                                </a>
                            </div>
                        @else
                            <div class="item">
                                <a href="/login">
                                    <i class="icon sign in"></i>
                                    Login
                                </a>
                            </div>
                        @endif
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
                <img src="{{ asset('img/logohome.png') }}" alt="Logo FIICode" />
            </div>
            <h2>Dacă ești priceput în algoritmică, tehnologii web/mobile, sau dezvoltare de jocuri, atunci află că...</h2>
            <p>Se zvonește că în regatul Iașului, în lunile Martie, Aprilie si Mai, o mare competiție de Algoritmică, Web-Mobile și Game Dev urmează să înceapă. În Facultatea de Informatică Iași încep să se strângă fel de fel de probleme, grele și ușoare, dar pline de capcane și provocări. Totodată, undeva în clădire se caută în secret teme îndrăznețe pentru toți pasionații dezvoltatori prin care aceștia să etaleze tehnologiile stăpânite precum și creativitatea cu care se mândresc.</p>
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
            <img class="backgroundhome web" src="{{ asset('img/web.svg') }}" alt="web tehnology background" />
            <img class="backgroundhome gamedev" src="{{ asset('img/gamedev.jpg') }}" alt="game dev background" />
            <img class="backgroundhome algo" src="{{ asset('img/algo.svg') }}" alt="algorithm background" />
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
            @foreach($news as $new)
                <div class="ui fluid card newsfeed">
                    <div class="content">
                        <div class="header">{{ $new['title'] }}</div>
                        <div class="meta">
                        </div>
                        <p>{!! $new['content'] !!}</p>
                    </div>
                    <div class="extra content">
                    <span data-id="{{ $new['id'] }}" class="left floated like apreciaza">
                        <i class="like icon"></i>
                        Apreciaza
                    </span>
                <span class="right floated star">
                    {{ $new['aprecieri'] }} aprecieri
                </span>
                    </div>
                </div>
            @endforeach
            <div class="ui container"></div>
        </div>
    </section>
@endsection
