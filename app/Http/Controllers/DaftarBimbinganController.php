<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DaftarBimbinganController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        $pageTitle = 'DaftarBimbingan';
        return view('daftarbimbingan', ['pageTitle' => $pageTitle]);
    }
    public function daftar(string $id)
    {
        $pageTitle = 'Daftar Bimbingan';

        // ELOQUENT
        $bimbingan = Bimbingan::find($id);

        return view('daftarbimbingan', compact('pageTitle', 'bimbingan'));
    }
    protected function create(array $data)
    {

        return User::create([
            'nama' => $data['nama'],
            'umur' => $data['umur'],
            'domisili' => $data['domisili'],
            'jadwals_id' => $data['jadwals_id']

        ]);
    }
}
