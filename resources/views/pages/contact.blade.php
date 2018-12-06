@extends('app')

@section('content')
    <section id="content">
        <div class="ui container">
            <div class="head"><i class="icon code"></i> {{ $title }} <div class="green"></div><div class="red"></div></div>
            <div class="ui segment">
                <p>
                    Pentru orice întrebare legată de FIICode te rugăm să completezi formularul de mai jos.
                </p>
                <div class="ui form contactForm">
                    <div class="field">
                        <label>Numele tău<span>*</span></label>
                        <input type="text" name="nume" placeholder="Nume și prenume" />
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
                        <p>Mesajul tău a ajuns la noi și îți vom răspunde în cel mai scurt timp posibil.</p>
                    </div>
                    <div class="ui warning message">
                        <div class="header">Mesajul nu a putut fi trimis.</div>
                        <p>Aparent acest mesaj nu poate fi trimis către noi, te rugăm sa încerci iar.</p>
                    </div>
                </div>
            </div>
            <div class="ui container"></div>
        </div>
    </section>
@endsection
