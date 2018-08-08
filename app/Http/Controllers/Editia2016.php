<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class Editia2016 extends Controller
{
    public function showPage() {
        $title = "Editia 2016";
        return view('pages.editia2016',['title' => $title]);
    }
}
