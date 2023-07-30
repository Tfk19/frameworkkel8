<?php

namespace App\Http\Controllers;


use App\Models\Admin;
use App\Models\Position;
use App\Models\Bimbingan;
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


class AdminController extends Controller

{
    /**
     * Display a listing of the resource.
     */

     public function index()
     {
         $pageTitle = 'List Produk';

         // Eloquent ORM with select
         $bimbingans = Bimbingan::all();


         return view('admin.index', [
             'pageTitle' => $pageTitle,
             'bimbingan' => $bimbingans
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

        return view('admin.create', compact('pageTitle', 'positions'));
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
    $admin = New admin;
    $admin->firstname = $request->firstName;
    $admin->lastname = $request->lastName;
    $admin->email = $request->email;
    $admin->age = $request->age;
    $admin->position_id = $request->position;

    if ($file != null) {
        $admin->original_filename = $originalFilename;
        $admin->encrypted_filename = $encryptedFilename;
    }

    $admin->save();

    Alert::success('Added Successfully', 'admin Data Added Successfully.');

        return redirect()->route('admins.index');
}

    /**
     * Display the specified resource.
     */


    public function show(string $id)
    {
        $pageTitle = 'Detail';

        // ELOQUENT
        $admin = Admin::find($id);

        return view('admin.show', compact('pageTitle', 'admin'));
    }



    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
{
    $pageTitle = 'Edit admin';

    // ELOQUENT
    $positions = Position::all();
    $admin = admin::find($id);

    return view('admin.edit', compact('pageTitle', 'positions', 'admin'));
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


        $admin = admin::find($id);
        if ($admin->encrypted_filename) {
            Storage::delete('public/files/'.$admin->encrypted_filename);
        }
    }

    // ELOQUENT
    $admin = admin::find($id);
    $admin->firstname = $request->input('firstName');
    $admin->lastname = $request->input('lastName');
    $admin->email = $request->input('email');
    $admin->age = $request->input('age');
    $admin->position_id = $request->input('position');

    if ($file != null) {
        $admin->original_filename = $originalFilename;
        $admin->encrypted_filename = $encryptedFilename;
    }

    $admin->save();

    Alert::success('Changed Successfully', 'admin Data Changed Successfully.');

    return redirect()->route('admins.index');
}

    /**
     * Remove the specified resource from storage.
     */
    // use RealRashid\SweetAlert\Facades\Alert;
    public function destroy(string $id)
{
    // ELOQUENT
    admin::find($id)->delete();

    Alert::success('Deleted Successfully', 'admin Data Deleted Successfully.');
    return redirect()->route('admins.index');

}

public function downloadFile($adminId)
{
    $admin = admin::find($adminId);
    $encryptedFilename = 'public/files/'.$admin->encrypted_filename;
    $downloadFilename = Str::lower($admin->firstname.'_'.$admin->lastname.'_cv.pdf');

    if(Storage::exists($encryptedFilename)) {
        return Storage::download($encryptedFilename, $downloadFilename);
    }
}
public function getData(Request $request)
{
    $admins = admin::with('position');

    if ($request->ajax()) {
        return datatables()->of($admins)
            ->addIndexColumn()
            ->addColumn('actions', function($admin) {
                return view('admin.actions', compact('admin'));
            })
            ->toJson();
    }
}
public function exportExcel()
{
    return Excel::download(new adminsExport, 'admins.xlsx');
}

public function exportPdf()
{
    $admins = admin::all();

    $pdf = PDF::loadView('admin.export_pdf', compact('admins'));

    return $pdf->download('admins.pdf');
}

}
