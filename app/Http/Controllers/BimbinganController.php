<?php

namespace App\Http\Controllers;

use App\Models\Bimbingan;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class BimbinganController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('bimbingan.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $data = DB:: table('users')
                ->where('role','ustad')
                ->get();
        // var_dump($data);die();
        return view('bimbingan.create',[
            'datas'=>$data,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // var_dump($request->iduser);die();
        $messages = [
            'required' => ':colom harus diisi',
        ];
        $validator = Validator::make($request->all(),[
            'umur' => 'required',
            'domisili' => 'required',
            'type' => 'required',
            'jam' => 'required',
            'ustad' => 'required'
        ],$messages);
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $laporan = New Bimbingan();
        $laporan->name = Auth::user()->name;
        $laporan->user_id = $request->ustad;
        $laporan->umur = $request->umur;
        $laporan->domisili = $request->domisili;
        $laporan->type = $request->type;
        $laporan->waktu = $request->jam;
        $laporan->save();
        return redirect()->route('Bimbingan.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
