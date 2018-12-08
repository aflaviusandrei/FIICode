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
            'nume' => 'required',
            'email' => 'email|required|unique:users,email',
            'password' => 'required|min:6',
            'oras' => 'required',
            'varsta' => 'required',
            'bitbucket' => 'required_if:sectiune,web|required_if:sectiune,gamedev',
            'telefon' => 'required|min:10|max:13',
            'tehnologii'=>'required_if:sectiune,web|required_if:sectiune,gamedev',
            'scoala' => 'required',
            'numeproiect' => 'required_if:web,1|required_if:gamedev,1',
            // 'nume2' => 'required_if:sectiune,web|required_if:sectiune,gamedev',
            // 'email2' => 'email|required_if:sectiune,web|required_if:sectiune,gamedev|email',
            'nume2' => 'required_if:sectiune,gamedev',
            'email2' => 'email|required_if:sectiune,gamedev|email',
            'email3' => 'email',
            'email4' => 'email'
        ]);
        $user = new User();
        $user->nume = htmlentities($request->input('nume'));
        $user->email = htmlentities($request->input('email'));
        $user->password = Hash::make($request->input('password'));
        $user->bitbucket = htmlentities($request->input('bitbucket'));
        $user->oras = htmlentities($request->input('oras'));
        $user->varsta = htmlentities($request->input('varsta'));
        $user->telefon = htmlentities($request->input('telefon'));
        $user->scoala = htmlentities($request->input('scoala'));
        $user->numeproiect = htmlentities($request->input('numeproiect'));
		$user->tehnologii = htmlentities($request->input('tehnologii'));
		$user->email_confirmation_token = str_random(25);

        $user->nume2 = htmlentities($request->input('nume2'));
		$user->email2 = htmlentities($request->input('email2'));
		
        $user->nume3 = htmlentities($request->input('nume3'));
		$user->email3 = htmlentities($request->input('email3'));
		
        $user->nume4 = htmlentities($request->input('nume4'));
		$user->email4 = htmlentities($request->input('email4'));
		
        if ($request->input('sectiune') == "web")
            $user->web = 1;
        if ($request->input('sectiune') == "algo")
            $user->algoritmica = 1;
        if ($request->input('sectiune') == "gamedev")
            $user->gamedev = 1;
		
		$user->save();
		
        return "1";
    }
}
