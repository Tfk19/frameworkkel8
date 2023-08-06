<?php

namespace App\Http\Controllers;

use App\Models\Bimbingan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class JadwalController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        $id =  Auth::user()->name;
        // $data  = DB:: table('bimbingans')
        //                 ->where('santri','5')
        //                 ->get();
        $data = Bimbingan::where('name', $id)

                ->get();
        // var_dump($data);die();
        return view('jadwal.index',[
            'datas' => $data
        ]);
    }
}
