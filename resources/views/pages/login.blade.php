@extends('app')

@section('content')
    <section id="content">
        <div class="ui container loginPage">
            <div class="head"><i class="icon code"></i> {{ $title }} <div class="green"></div><div class="red"></div></div>
            <div class="ui segment">
                <p>
                    Logheaza-te cu email-ul si parola de la inscriere pentru a vedea subiectele. Pentru orice problema te rugam sa trimiti un mesaj completand formularul de <a href="/contact">aici</a>.
                </p>
                <div class="ui form loginForm">
                    <div class="field">
                        <label>Email<span>*</span></label>
                        <input type="text" name="email" placeholder="Email" />
                    </div>
                    <div class="field">
                        <label>Parola<span>*</span></label>
                        <input type="password" name="password" placeholder="Parola" />
                    </div>
                    <div class="field">
                        <div class="ui blue labeled icon submit button"><i class="icon send"></i>Login</div>
                    </div>
                </div>
                <div class="ui success message">
                    <div class="header">Logare efectuata cu success!</div>
                    <p>Vei fi redirectionat in cateva momente spre pagina cu subiecte...</p>
                </div>
                <div class="ui error message">
                    <div class="header">Eroare la logare! <i class="icon frown"></i></div>
                    <p>Aparent email-ul sau parola introduse de tine sunt incorecte. Te rugam sa incerci iar.</p>
                </div>
            </div>
            <div class="ui container"></div>
        </div>
    </section>
@endsection