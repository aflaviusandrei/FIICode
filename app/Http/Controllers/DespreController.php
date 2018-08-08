<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class DespreController extends Controller
{
    public function showPage() {
        $title = "Despre";
        return view('pages.despre', ['title' => $title]);
    }
}
