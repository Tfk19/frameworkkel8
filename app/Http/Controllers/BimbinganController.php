<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BimbinganController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        $pageTitle = 'Bimbingan';
        return view('bimbingan', ['pageTitle' => $pageTitle]);
    }
}
