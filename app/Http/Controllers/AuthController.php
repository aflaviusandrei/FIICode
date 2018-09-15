<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Auth;
use App\Http\Requests;
use Hash;

class AuthController extends Controller
{
    public function loginView(Request $request) {
        $title = "Login";
        if (Auth::check())
        {
            if (Auth::user()->algoritmica==1) {
                return redirect('/sectiunea-algoritmica');
            }
            elseif(Auth::user()->gamedev==1)
            {
                return redirect('/sectiunea-gamedev');
            }
            elseif(Atuh::user()->web==1)
            {
                return redirect('/sectiunea-web');
            }
        }
        else return view('pages.login', ['title' => $title]);
    }
    public function authenticate(Request $request)
    {
        $email = $request->input('email');
        $password = $request->input('password');
        if (Auth::attempt(['email' => $email, 'password' => $password])) {
            if (Auth::user()->web == 1) return '/sectiunea-web';
            elseif(Auth::user()->algoritmica == 1) return '/sectiunea-algoritmica';
            else {
                return '/sectiunea-gamedev';
            }
        }
        else if (Auth::attempt(['email2' => $email, 'password' => $password])) {
            if (Auth::user()->web == 1) return '/sectiunea-web';
            elseif (Auth::user()->gamedev == 1) {
                 return '/sectiunea-gamedev';
             } return '/sectiunea-algoritmica';
        }
        else if (Auth::attempt(['email3' => $email, 'password' => $password])) {
            if (Auth::user()->web == 1) return '/sectiunea-web';
            elseif (Auth::user()->gamedev == 1) {
                return '/sectiunea-gamedev';
             } return '/sectiunea-algoritmica';
        }
        else if (Auth::attempt(['email4' => $email, 'password' => $password])) {
            if (Auth::user()->web == 1) return '/sectiunea-web';
            elseif (Auth::user()->gamedev == 1) {
                 return '/sectiunea-gamedev';
             } return '/sectiunea-algoritmica';
        }
        else {
            return "error";
        }
    }
    public function showSectiuneWeb() {
        if (Auth::check()) {
            if (Auth::user()->algoritmica==1) {
                return redirect('/sectiunea-algoritmica');
            }
            elseif(Auth::user()->gamedev==1)
            {
                return redirect('/sectiunea-gamedev');
            }
            $title = "Secțiunea de Web/Mobile";
            $user = Auth::user();
            return view('pages.weblogin', ['title' => $title, 'user' => $user]);
        }
        else {
            return redirect('/inscrie-te');
        }
    }
    public function showSectiuneAlgo() {
        if (Auth::check()) {
            if (Auth::user()->web==1) {
                return redirect('/sectiunea-web');
            }
            if (Auth::user()->gamedev== 1) {
                return redirect('/sectiunea-gamedev');
            }
            $title = "Secțiunea de Algoritmica";
            $user = Auth::user();
            return view('pages.algologin', ['title' => $title, 'user' => $user]);
        }
        else {
            return redirect('/inscrie-te');
        }
    }
    public function showSectiuneGamedev() {
        if (Auth::check()) {
            if (Auth::user()->web==1) {
                return redirect('/sectiunea-web');
            }
            elseif(Auth::user()->algoritmica==1)
            {
                return redirect('/sectiunea-algoritmica');
            }
            $title = "Secțiunea de GameDev";
            $user = Auth::user();
            return view('pages.gamedevlogin', ['title' => $title, 'user' => $user]);
        }
        else {
            return redirect('/inscrie-te');
        }
    }
    public function saveRepo(Request $request) {
        if (Auth::check()) {
            $this->validate($request, [
                'repo' => 'url',
                'prezentare' => 'url'
            ]);
            Auth::user()->repogithub = $request->input('repo');
            Auth::user()->prezentare = $request->input('prezentare');
            Auth::user()->save();
            return 1;
        }
        return 0;
    }
    public function changePass(Request $request) {
        $this->validate($request, [
            'email' => 'required|email',
            'password' => 'required|min:6'
        ]);
        $user = User::where('email', $request->input('email'))->firstOrFail();
        if ($user->changepass != "") {
            $user->password = Hash::make($request->input('password'));
            $user->changepass = "";
            $user->save();
            return 1;
        }
        return 0;
    }
    public function showChangePass() {
        $title = "Change Password";
        return view('pages.changepass', ['title' => $title]);
    }
}
