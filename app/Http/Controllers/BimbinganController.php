<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use App\Models\Position;
use App\Models\Bimbingan;
use App\Models\Jadwal;
use Illuminate\Support\Facades\Auth;

// use App\Models\Admin;
use PDF;
use Maatwebsite\Excel\Facades\Excel;
use App\Http\Controllers\exportExcel;
use App\Exports\AdminsExport;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;
use RealRashid\SweetAlert\Facades\Alert;


class BimbinganController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $bimbingans = Bimbingan::where('user_id', Auth::id())->get();
    return view('jadwal', compact('bimbingans'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $pageTitle = 'Create Data';

        // ELOQUENT
        $jadwals = Position::all();

        return view('bimbingan.create', compact('pageTitle', 'jadwals'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $messages = [
            'required' => ':Attribute harus diisi.',
            'email' => 'Isi :attribute dengan format yang benar',
            'numeric' => 'Isi :attribute dengan angka'
        ];

        $validator = Validator::make($request->all(), [
            'nama' => 'required',
            'umur' => 'required',
            'domisili' => 'required',
        ], $messages);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }


        // Get File
        $file = $request->file('cv');

        if ($file != null) {
            $originalFilename = $file->getClientOriginalName();
            $encryptedFilename = $file->hashName();

            // Store File
            $file->store('public/files');
        }

        // ELOQUENT
        $bimbingan = New bimbingan;
        $bimbingan->nama = $request->nama;
        $bimbingan->umur = $request->umur;
        $bimbingan->domisili = $request->domisili;
        $bimbingan->jadwal_id = $request->jadwal;
        $bimbingan->save();


        if ($file != null) {
            $bimbingan->original_filename = $originalFilename;
            $bimbingan->encrypted_filename = $encryptedFilename;
        }

        $bimbingan->save();

        Alert::success('Added Successfully', 'bimbingan Data Added Successfully.');


        return redirect()->route('jadwal');

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $pageTitle = 'Detail';

        // ELOQUENT
        $bimbingan = Bimbingan::find($id);

        return view('bimbingan.show', compact('pageTitle', 'bimbingan'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $pageTitle = 'Edit bimbingan';

    // ELOQUENT
    $jadwals = Jadwal::all();
    $bimbingan = bimbingan::find($id);

    return view('bimbingan.edit', compact('pageTitle', 'jadwals', 'bimbingan'));
}

// use RealRashid\SweetAlert\Facades\Alert;
public function update(Request $request, string $id)
{
    $messages = [
        'required' => ':Attribute harus diisi.',
        'email' => 'Isi :attribute dengan format yang benar',
        'numeric' => 'Isi :attribute dengan angka'
    ];

    $validator = Validator::make($request->all(), [
        'nama' => 'required',
        'umur' => 'required',
        'domisili' => 'required',
    ], $messages);

    if ($validator->fails()) {
        return redirect()->back()->withErrors($validator)->withInput();
    }


    // Get File
    $file = $request->file('cv');

    if ($file != null) {
        $originalFilename = $file->getClientOriginalName();
        $encryptedFilename = $file->hashName();


        $file->store('public/files');


        $bimbingan = bimbingan::find($id);
        if ($bimbingan->encrypted_filename) {
            Storage::delete('public/files/'.$bimbingan->encrypted_filename);
        }
    }

    // ELOQUENT
    $bimbingan = bimbingan::find($id);
    $bimbingan->nama = $request->input('nama');
    $bimbingan->umur = $request->input('umur');
    $bimbingan->domisili = $request->input('domisili');
    $bimbingan->jadwal_id = $request->input('jadwal');

    if ($file != null) {
        $bimbingan->original_filename = $originalFilename;
        $bimbingan->encrypted_filename = $encryptedFilename;
    }

    $bimbingan->save();

    Alert::success('Changed Successfully', 'bimbingan Data Changed Successfully.');

    return redirect()->route('bimbingans.index');
    }

    /**
     * Update the specified resource in storage.
     */

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
         // ELOQUENT
    bimbingan::find($id)->delete();

    Alert::success('Deleted Successfully', 'bimbingan Data Deleted Successfully.');
    return redirect()->route('bimbingans.index');
    }
}
