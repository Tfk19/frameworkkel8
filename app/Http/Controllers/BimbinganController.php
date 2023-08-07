<?php

namespace App\Http\Controllers;

use App\Exports\BimbingansExport;
use App\Models\Bimbingan;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use Maatwebsite\Excel\Facades\Excel;

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
        // // ELOQUENT
        // $bimbingans = Bimbingan::all();
        // $bimbingan = Bimbingan::find($id);

        // return view('bimbingan.edit', compact('bimbingans', 'bimbingan'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
    //     $messages = [
    //         'required' => ':Attribute harus diisi.',
    //         'email' => 'Isi :attribute dengan format yang benar',
    //         'numeric' => 'Isi :attribute dengan angka'
    //     ];

    //     $validator = Validator::make($request->all(), [
    //         'name' => 'required',
    //         'user_id' => 'required',
    //         'umur' => 'required',
    //         'domisili' => 'required',
    //         'type' => 'required',
    //         'waktu' => 'required',
    //     ], $messages);

    //     if ($validator->fails()) {
    //         return redirect()->back()->withErrors($validator)->withInput();
    //     }
    //      // Get File
    // $file = $request->file('cv');

    // if ($file != null) {
    //     $originalFilename = $file->getClientOriginalName();
    //     $encryptedFilename = $file->hashName();


    //     $file->store('public/files');


    //     $bimbingan = Bimbingan::find($id);
    //     if ($bimbingan->encrypted_filename) {
    //         Bimbingan::delete('public/files/'.$bimbingan->encrypted_filename);
    //     }
    // }
    //     $bimbingan = Bimbingan::find($id);
    //     $bimbingan->name = $request->input('name');
    //     $bimbingan->user_id =  $request->input('pengajar');
    //     // $bimbingan->umur =  $request->input('umur');
    //     // $bimbingan->domisili =  $request->input('domisili');
    //     $bimbingan->type =  $request->input('type');
    //     $bimbingan->waktu =  $request->input('waktu');

    //     if ($file != null) {
    //         $bimbingan->original_filename = $originalFilename;
    //         $bimbingan->encrypted_filename = $encryptedFilename;
    //     }

    //     $bimbingan->save();
    //     return redirect()->route('Admin.index');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Bimbingan::find($id)->delete();

        return redirect()->route('Admin.index');
    }

    public function getData(Request $request)
{
    $data = Bimbingan::with('position');

    if ($request->ajax()) {
        return datatables()->of($data)
            ->addIndexColumn()
            ->addColumn('actions', function($bimbingan) {
                return view('admin.actions', compact('admin'));
            })
            ->toJson();
    }
}
    public function exportExcel()
    {
        return Excel::download(new BimbingansExport, 'bimbingans.xlsx');
    }

}
