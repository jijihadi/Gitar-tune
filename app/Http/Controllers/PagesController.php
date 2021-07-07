<?php

namespace App\Http\Controllers;

class PagesController extends Controller
{
    //
    public function home()
    {
        return view('index');
    }

    public function about()
    {
        $judul = "App Gitar Jreng";
        return view('about', ['judul' => $judul]);
    }

    public function stem()
    {
        return view('stem');
    }
}
