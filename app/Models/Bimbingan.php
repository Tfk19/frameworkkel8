<?php

namespace App\Models;

// use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bimibingan extends Model
{
    use HasFactory;

    public function jadwals()
    {
        return $this->hasMany(Jadwal::class);
    }

}
