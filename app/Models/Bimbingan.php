<?php

namespace App\Models;

// use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bimibingan extends Model
{
    use HasFactory;

    public function jadwal()
    {
        return $this->belongsTo(Jadwal::class);
    }
    public function registerbimbingan()
    {
        $pageTitle = 'Register Bimbingan';

        return view('daftarbimbingan', compact('pageTitle'));
    }

}
