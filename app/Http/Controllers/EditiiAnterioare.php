<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class EditiiAnterioare extends Controller
{
    public function showPage() {
        $title = "Editii Anterioare";
        return view('pages.editiianterioare',['title' => $title]);
    }
}
