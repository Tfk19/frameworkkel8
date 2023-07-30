<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BimbinganlihatController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        $pageTitle = 'Bimbinganlihat';
        return view('bimbinganlihat', ['pageTitle' => $pageTitle]);
    }
}
