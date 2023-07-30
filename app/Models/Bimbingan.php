<?php

namespace App\Models;

// use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

<<<<<<< HEAD
class Bimbingan extends Model
{
    use HasFactory;

    public function users()
    {
        return $this->hasMany(User::class);
    }
=======
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

>>>>>>> 1f4fd0ebbac74530ec26d31e517a02a034e77fbc
}
