<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class ParteneriController extends Controller
{
    public function showPage() {
        $title = "Parteneri";
        return view('pages.parteneri', ['title' => $title]);
    }
    public function showAlgo() {
        $title = "Noutati despre sectiunea algoritmica";
        return view('pages.algo', ['title' => $title]);
    }
}
