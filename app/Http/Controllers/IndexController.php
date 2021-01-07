<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IndexController extends Controller
{
    

    /**
     * Show the introduction.
     *
     */
    public function introduction()
    {
        return view('index.introduction');
    }

    public function actualSituation()
    {
        return view('index.situation');
    }

    public function problem()
    {
        return view('index.problem');
    }

    public function solutions()
    {
        return view('index.solutions');
    }

    public function conclusion()
    {
        return view('index.conclusion');
    }



}
