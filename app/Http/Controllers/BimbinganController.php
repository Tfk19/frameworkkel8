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
                ->where('role','pengajar')
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
            'pengajar' => 'required'
        ],$messages);
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $bimbingan = New Bimbingan();
        $bimbingan->name = Auth::user()->name;
        $bimbingan->user_id = $request->pengajar;
        $bimbingan->umur = $request->umur;
        $bimbingan->domisili = $request->domisili;
        $bimbingan->type = $request->type;
        $bimbingan->waktu = $request->jam;
        $bimbingan->save();
        return redirect()->route('jadwal');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        // ELOQUENT
        $bimbingan= Bimbingan::find($id);

        return view('Bimbingan.show',compact('bimbingan'));
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
