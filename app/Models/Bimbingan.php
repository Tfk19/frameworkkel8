<?php

namespace App\Models;

// use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bimibingan extends Model
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'nama',
        'umur',
        'domisili',
        'jadwals_id'
    ];
    public function jadwal()
    {
        return $this->belongsTo(Jadwal::class);
    }
    public function bimbingan()
{
    $pageTitle = 'Register Bimbingan';

    return view('bimbingan.create', compact('pageTitle'));
}
    // public function register()
    // {
    //     $pageTitle = 'Register Bimbingan';

    //     return view('bimbingan.create', compact('pageTitle'));
    // }

}
