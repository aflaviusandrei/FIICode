@extends('app')

@section('content')
	<section id="content">
		<div class="ui container loginPage">
			<div class="head"><i class="icon code"></i> {{ $title }} <div class="green"></div><div class="red"></div></div>
			<div class="ui segment">
				Din această pagină vă puteți reseta parolă dacă aveți contul abil pentru această operațiune. Pentru a vă face contul abil puteți trimite un mesaj de intenție de pe adresa principală a contului împreună cu numele dumneavoastră <a href="/contanct">aici</a>.
				<br />
				<br />
				<div class="ui form">
					<div class="field">
						<label>Email principal al contului</label>
						<input id="email" name="email" value="" />
					</div>
					<div class="field">
						<label>Password</label>
						<input id="password" type="password" name="password" value="" />
					</div>
					<div class="field confi">
						<label>Confirma Parola</label>
						<input id="confirmpassword" type="password" name="confirmpassword" value="" />
					</div>
					<div class="field">
						<div class="ui blue labeled icon savePass button">
							<i class="icon save"></i>
							Salveaza
						</div>
					</div>
					<div class="ui message error">
						<h2>Eroare <i class="icon frown"></i></h2>
						<p>Contul pe care l-ati introdus nu exista sau nu este abil pentru schimbarea parolei.</p>
					</div>
					<div class="ui message success">
						<h2>Success!</h2>
						<p>Parola a fost schimbata cu success.</p>
					</div>
				</div>
			</div>
		</div>
	</section>
@endsection