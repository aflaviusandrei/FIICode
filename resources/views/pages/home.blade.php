@extends('appHome')

@section('content')
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
                <a href="/editii">
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
