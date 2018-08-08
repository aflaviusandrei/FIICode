<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class CalendarController extends Controller
{
    public function showPage() {
        $title = "Calendar Editia 2018";
        return view('pages.calendar', ['title' => $title]);
    }
}
