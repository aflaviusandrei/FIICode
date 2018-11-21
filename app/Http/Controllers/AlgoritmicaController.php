<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class AlgoritmicaController extends Controller
{
    public function showPage() {
        $title = "Algoritmica";
        return view('pages.algoritmica', ['title' => $title]);
    }
}
