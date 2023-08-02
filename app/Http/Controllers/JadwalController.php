<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Bimbingan;

class JadwalController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
{
    $pageTitle = 'Jadwal';

    // Ambil data Bimbingan berdasarkan user yang sedang terautentikasi
    $bimbingans = Bimbingan::where('user_id', Auth::id())->get();

    // Tampilkan data dalam halaman "Jadwal Ku"
    return view('jadwal', compact('pageTitle', 'bimbingans'));
}

}
