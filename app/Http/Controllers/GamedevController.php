<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class GameDevController extends Controller
{
    public function showPage() {
        $title = "GameDev";
        return view('pages.gamedev', ['title' => $title]);
    }
}
