<?php

namespace App\Http\Controllers;


use App\Models\Bimbingan;
use App\Models\Position;
// use App\Models\Bimbingan;
use PDF;
use Maatwebsite\Excel\Facades\Excel;
use App\Http\Controllers\exportExcel;
use App\Exports\BimbingansExport;
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
         $pageTitle = 'List Produk';

         // Eloquent ORM with select
         $Bimbingans = Bimbingan::all();


         return view('Bimbingan.index', [
             'pageTitle' => $pageTitle,
             'Bimbingans' => $Bimbingans
         ]);
     }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $pageTitle = 'Create Data';

        // ELOQUENT
        $positions = Position::all();

        return view('Bimbingan.create', compact('pageTitle', 'positions'));
    }

    public function store(Request $request)
{
    $messages = [
        'required' => ':Attribute harus diisi.',
        'email' => 'Isi :attribute dengan format yang benar',
        'numeric' => 'Isi :attribute dengan angka'
    ];

    $validator = Validator::make($request->all(), [
        'firstName' => 'required',
        'lastName' => 'required',
        'email' => 'required|email',
        'age' => 'required|numeric',
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
    $Bimbingan = New Bimbingan;
    $Bimbingan->firstname = $request->firstName;
    $Bimbingan->lastname = $request->lastName;
    $Bimbingan->email = $request->email;
    $Bimbingan->age = $request->age;
    $Bimbingan->position_id = $request->position;

    if ($file != null) {
        $Bimbingan->original_filename = $originalFilename;
        $Bimbingan->encrypted_filename = $encryptedFilename;
    }

    $Bimbingan->save();

    Alert::success('Added Successfully', 'Bimbingan Data Added Successfully.');

        return redirect()->route('Bimbingans.index');
}

    /**
     * Display the specified resource.
     */


    public function show(string $id)
    {
        $pageTitle = 'Detail';

        // ELOQUENT
        $Bimbingan = Bimbingan::find($id);

        return view('Bimbingan.show', compact('pageTitle', 'Bimbingan'));
    }



    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
{
    $pageTitle = 'Edit Bimbingan';

    // ELOQUENT
    $positions = Position::all();
    $Bimbingan = Bimbingan::find($id);

    return view('Bimbingan.edit', compact('pageTitle', 'positions', 'Bimbingan'));
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
        'firstName' => 'required',
        'lastName' => 'required',
        'email' => 'required|email',
        'age' => 'required|numeric',
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


        $Bimbingan = Bimbingan::find($id);
        if ($Bimbingan->encrypted_filename) {
            Storage::delete('public/files/'.$Bimbingan->encrypted_filename);
        }
    }

    // ELOQUENT
    $Bimbingan = Bimbingan::find($id);
    $Bimbingan->firstname = $request->input('firstName');
    $Bimbingan->lastname = $request->input('lastName');
    $Bimbingan->email = $request->input('email');
    $Bimbingan->age = $request->input('age');
    $Bimbingan->position_id = $request->input('position');

    if ($file != null) {
        $Bimbingan->original_filename = $originalFilename;
        $Bimbingan->encrypted_filename = $encryptedFilename;
    }

    $Bimbingan->save();

    Alert::success('Changed Successfully', 'Bimbingan Data Changed Successfully.');

    return redirect()->route('Bimbingans.index');
}

    /**
     * Remove the specified resource from storage.
     */
    // use RealRashid\SweetAlert\Facades\Alert;
    public function destroy(string $id)
{
    // ELOQUENT
    Bimbingan::find($id)->delete();

    Alert::success('Deleted Successfully', 'Bimbingan Data Deleted Successfully.');
    return redirect()->route('Bimbingans.index');

}

public function downloadFile($BimbinganId)
{
    $Bimbingan = Bimbingan::find($BimbinganId);
    $encryptedFilename = 'public/files/'.$Bimbingan->encrypted_filename;
    $downloadFilename = Str::lower($Bimbingan->firstname.'_'.$Bimbingan->lastname.'_cv.pdf');

    if(Storage::exists($encryptedFilename)) {
        return Storage::download($encryptedFilename, $downloadFilename);
    }
}
public function getData(Request $request)
{
    $Bimbingans = Bimbingan::with('position');

    if ($request->ajax()) {
        return datatables()->of($Bimbingans)
            ->addIndexColumn()
            ->addColumn('actions', function($Bimbingan) {
                return view('Bimbingan.actions', compact('Bimbingan'));
            })
            ->toJson();
    }
}
public function exportExcel()
{
    return Excel::download(new BimbingansExport, 'Bimbingans.xlsx');
}

public function exportPdf()
{
    $Bimbingans = Bimbingan::all();

    $pdf = PDF::loadView('Bimbingan.export_pdf', compact('Bimbingans'));

    return $pdf->download('Bimbingans.pdf');
}

}
