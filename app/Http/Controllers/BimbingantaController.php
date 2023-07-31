<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// use RealRashid\SweetAlert\Facades\Alert;
class BimbingantaController extends Controller
{
    public function __invoke(Request $request)
    {
        $pageTitle = 'Bimbinganta';
        return view('bimbinganta', ['pageTitle' => $pageTitle]);
    }
}
