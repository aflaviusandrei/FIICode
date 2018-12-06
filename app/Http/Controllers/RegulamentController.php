<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class RegulamentController extends Controller
{
    public function showPage() {
        $title = "Regulament";
        return view('pages.regulament', ['title' => $title]);
    }
}
