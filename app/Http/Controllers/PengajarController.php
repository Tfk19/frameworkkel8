<?php

namespace App\Http\Controllers;

use App\Models\Bimbingan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use Maatwebsite\Excel\Facades\Excel;
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
    public function getData(Request $request)
    {
        $data = Bimbingan::with('bimbingan');

        if ($request->ajax()) {
            return datatables()->of($data)
                ->addIndexColumn()
                ->toJson();
        }
    }
}
