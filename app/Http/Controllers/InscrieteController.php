<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\User;
use Hash;
use Auth;

class InscrieteController extends Controller
{
    public function showPageWith($tehno) {
        $title = "Inscriere";
        $web = 0;
        $algo = 0;
		$gamedev = 0;
		
        if ($tehno == "web") $web = 1;
        if ($tehno == "algo") $algo = 1;
        if ($tehno == "gamedev") $gamedev = 1;
        return view('pages.inscriete', ['title' => $title, 'web' => $web, 'algo' => $algo,'gamedev'=>$gamedev]);
	}
	
    public function showPage() {
        if (Auth::check()) {
            if (Auth::user()->web == 1)
            {
                return redirect('/sectiunea-web');
            }
            elseif (Auth::user()->gamedev == 1)
            {
                return redirect('/sectiunea-gamedev');
            }
            else
            {
                return redirect('/sectiunea-algoritmica');
            }
        }
        $title = "Înscriere";
        return view('pages.inscriete', ['title' => $title]);
    }
    public function inscrie(Request $request) {
        $this->validate($request, [
			'terms_and_conditions1' => 'accepted',
			'terms_and_conditions2' => 'accepted',
			'nume' => 'required',
			'email' => 'email|required|unique:users,email',
			'password' => 'required|min:6|required_with:password_conf',
			'password_conf' => 'required|same:password',
            'repogithub' => 'required_if:sectiune,web|required_if:sectiune,gamedev',
            'oras' => 'required',
            'varsta' => 'required|in:<15,16,17,18,19,20,21,22,>22',
			'telefon' => 'required|min:10|max:13',
			'facebook' => 'required',
			'marime_tricou' => 'required|in:s,m,l,xl,xxl',
            'scoala' => 'required',
			
			'tehnologii'=>'required_if:sectiune,web|required_if:sectiune,gamedev',
			'csacademy' => 'required_if:sectiune,algo',

			
			'email2' => 'email',
			'telefon2' => 'min:10|max:13',
			
			'marime_tricou2' => 'in:s,m,l,xl,xxl',

			'email3' => 'email',
			'telefon3' => 'min:10|max:13',
			'marime_tricou3' => 'in:s,m,l,xl,xxl',

			'email4' => 'email',
			'telefon4' => 'min:10|max:13',
			'marime_tricou4' => 'in:s,m,l,xl,xxl'
		],
		[	
			'*.required' => 'Va rog sa completati acest camp.',
			'*.required_if' => 'Va rog sa completati acest camp.',
			'*.accepted' => 'Pentru a putea continua trebuie sa bifati aceasta casuta.',

			'email.email' => 'Va rog sa introduceti o adresa valida de email.',
			'email.unique' => 'Acest email este deja folosit de cineva.',
			'email2.email' => 'Va rog sa introduceti o adresa valida de email.',
			'email3.email' => 'Va rog sa introduceti o adresa valida de email.',
			'email4.email' => 'Va rog sa introduceti o adresa valida de email.',

			'password.min' => 'Parola trebuie sa contina o lungime minima de 6 caractere.',
			'password_conf.same' => 'Parola de confirmare nu se potriveste cu parola.',

			'telefon.min' => 'Numarul de telefon trebuie sa contina minim 10 caractere.',
			'telefon.max' => 'Numarul de telefon trebuie sa contina maxim 13 caractere.',
			'telefon2.min' => 'Numarul de telefon trebuie sa contina minim 10 caractere.',
			'telefon2.max' => 'Numarul de telefon trebuie sa contina maxim 13 caractere.',
			'telefon3.min' => 'Numarul de telefon trebuie sa contina minim 10 caractere.',
			'telefon3.max' => 'Numarul de telefon trebuie sa contina maxim 13 caractere.',
			'telefon4.min' => 'Numarul de telefon trebuie sa contina minim 10 caractere.',
			'telefon4.max' => 'Numarul de telefon trebuie sa contina maxim 13 caractere.'
		]);
		
        $user = new User();
        $user->password = Hash::make($request->input('password'));
        $user->oras = htmlentities($request->input('oras'));
        $user->varsta = htmlentities($request->input('varsta'));
        $user->scoala = htmlentities($request->input('scoala'));
		$user->email_confirmation_token = str_random(25);

		$user->terms_and_conditions1 = htmlentities($request->input('terms_and_conditions1'));
		$user->terms_and_conditions2 = htmlentities($request->input('terms_and_conditions2'));

        $user->nume = htmlentities($request->input('nume'));
        $user->telefon = htmlentities($request->input('telefon'));
        $user->email = htmlentities($request->input('email'));
        $user->facebook = htmlentities($request->input('facebook'));
        $user->marime_tricou = htmlentities($request->input('marime_tricou'));

		if ($request->input('sectiune') == "web" || $request->input('sectiune') == "gamedev") {
			$user->tehnologii = htmlentities($request->input('tehnologii'));
			
			$user->repogithub = htmlentities($request->input('repogithub'));
			
            $user->numeproiect = htmlentities($request->input('numeproiect'));
			$user->nume2 = htmlentities($request->input('nume2'));
			$user->telefon2 = htmlentities($request->input('telefon2'));
			$user->email2 = htmlentities($request->input('email2'));
			$user->facebook2 = htmlentities($request->input('facebook2'));
			$user->marime_tricou2 = htmlentities($request->input('marime_tricou2'));		
			
			$user->nume3 = htmlentities($request->input('nume3'));
			$user->telefon3 = htmlentities($request->input('telefon3'));		
			$user->email3 = htmlentities($request->input('email3'));
			$user->facebook3 = htmlentities($request->input('facebook3'));
			$user->marime_tricou3 = htmlentities($request->input('marime_tricou3'));
			
		}

        if ($request->input('sectiune') == "web") {
			$user->web = 1;
		}
			
        if ($request->input('sectiune') == "algo") {
			$user->csacademy = htmlentities($request->input('csacademy'));
            $user->algoritmica = 1;
		}
		
        if ($request->input('sectiune') == "gamedev") {
			$user->nume4 = htmlentities($request->input('nume4'));
			$user->telefon4 = htmlentities($request->input('telefon4'));		
			$user->email4 = htmlentities($request->input('email4'));
			$user->facebook4 = htmlentities($request->input('facebook4'));
			$user->marime_tricou4 = htmlentities($request->input('marime_tricou4'));
			
			$user->gamedev = 1;
		}
		
		$user->save();
		
        return "1";
    }
}