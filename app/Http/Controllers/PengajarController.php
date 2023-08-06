<?php

namespace App\Http\Controllers;

use App\Models\Bimbingan;
use Illuminate\Http\Request;

class PengajarController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        {
            $data = Bimbingan::all();


                return view('pengajar.index', [
                    'datas' => $data,
                ]);
            }

    }
}
