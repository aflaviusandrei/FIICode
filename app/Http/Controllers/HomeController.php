<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Input;

use App\Http\Requests;
use App\Newsfeed;
use App\Page;

class HomeController extends Controller
{
    public function showPage(Request $request) {
        $news = Newsfeed::orderBy('created_at', 'DESC')->get();
        foreach ($news as $new) {
            if ($request->session('apreciere.id'.$new['id']))
                $new['apreciere'.$new['id']] = $request->session('apreciere.id'.$new['id']);
        }
        return view('pages.home', ['news' => $news]);
    }
    public function finala(Request $request) {
        $title = "Finala";
        return view('pages.finala', ['title' => $title]);
    }
    public function apreciaza(Request $request) {
        $id = $request->input('id');
        if (session('apreciere.id'.$id) != 1) {
            $new = Newsfeed::where('id', $id)->firstOrFail();
            $new->aprecieri = $new->aprecieri + 1;
            session(['apreciere.id'.$id => 1]);
            $new->save();
            $number = $new->aprecieri;
            return (string)$number;
        }
        return "0";
    }
    public function showPages($page) {
        $template = Page::where('slug', $page)->firstOrFail();
        if ($template) {
            return view('pages.template', ['title' => $template->title, 'content' => $template->content]);
        }
        else {
            return view('errors.404');
        }
    }
}
