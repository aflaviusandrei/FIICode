<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class WebMobileController extends Controller
{
    public function showPage() {
        $title = "Web Mobile";
        return view('pages.webmobile', ['title' => $title]);
    }
}
