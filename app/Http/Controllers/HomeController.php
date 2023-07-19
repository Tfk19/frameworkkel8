<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// use RealRashid\SweetAlert\Facades\Alert;
class HomeController extends Controller
{
    function index()
    {
        $pageTitle = 'Home';
        return view('Home', ['pageTitle' =>$pageTitle]);
    }
}
