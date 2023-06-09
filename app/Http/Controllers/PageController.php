<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function showPage()
    {
        $pageTitle = 'Your Page Title';
        return view('your.view', compact('pageTitle'));
    }
}