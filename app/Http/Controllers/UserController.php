<?php

namespace App\Http\Controllers;


use App\Models\Position;
use App\Models\User;
use PDF;
use Maatwebsite\Excel\Facades\Excel;
use App\Http\Controllers\exportExcel;
use App\Exports\UsersExport;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;
use RealRashid\SweetAlert\Facades\Alert;


class UserController extends Controller

{
    /**
     * Display a listing of the resource.
     */

    public function index()
    {
        $pageTitle = 'User List';
        // confirmDelete();
        // Query Builder
       // ELOQUENT
    $users = User::all();

    return view('user.index', [
        'pageTitle' => $pageTitle,
        'users' => $users
    ]);
    $pageTitle = 'User List';

    return view('user.index', compact('pageTitle'));
    }

    /**
     * Show the form for creating a new resource.
     */

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
    // $user = New User;
    // $user->firstname = $request->firstName;
    // $user->lastname = $request->lastName;
    // $user->email = $request->email;
    // $user->age = $request->age;
    // $user->position_id = $request->position;

    // if ($file != null) {
    //     $user->original_filename = $originalFilename;
    //     $user->encrypted_filename = $encryptedFilename;
    // }

    $user->save();

    Alert::success('Added Successfully', 'Employee Data Added Successfully.');

        return redirect()->route('users.index');
}

    /**
     * Display the specified resource.
     */

    public function show(string $id)
    {
        $pageTitle = 'User Detail';

        // ELOQUENT
        $user = User::find($id);

        return view('user.show', compact('pageTitle', 'user'));
    }


    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
{
    $pageTitle = 'Edit User';

    // ELOQUENT
    $positions = Position::all();
    $user = User::find($id);

    return view('user.edit', compact('pageTitle', 'positions', 'user'));
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


        $user = User::find($id);
        if ($user->encrypted_filename) {
            Storage::delete('public/files/'.$user->encrypted_filename);
        }
    }

    // ELOQUENT
    $user = User::find($id);
    $user->firstname = $request->input('firstName');
    $user->lastname = $request->input('lastName');
    $user->email = $request->input('email');
    $user->age = $request->input('age');
    $user->position_id = $request->input('position');

    if ($file != null) {
        $user->original_filename = $originalFilename;
        $user->encrypted_filename = $encryptedFilename;
    }

    $user->save();

    Alert::success('Changed Successfully', 'User Data Changed Successfully.');

    return redirect()->route('users.index');
}

    /**
     * Remove the specified resource from storage.
     */
    // use RealRashid\SweetAlert\Facades\Alert;
    public function destroy(string $id)
{
    // ELOQUENT
    User::find($id)->delete();

    Alert::success('Deleted Successfully', 'User Data Deleted Successfully.');
    return redirect()->route('users.index');

}

public function downloadFile($userId)
{
    $user = User::find($userId);
    $encryptedFilename = 'public/files/'.$user->encrypted_filename;
    $downloadFilename = Str::lower($user->firstname.'_'.$user->lastname.'_cv.pdf');

    if(Storage::exists($encryptedFilename)) {
        return Storage::download($encryptedFilename, $downloadFilename);
    }
}
public function getData(Request $request)
{
    $users = User::with('position');

    if ($request->ajax()) {
        return datatables()->of($users)
            ->addIndexColumn()
            ->addColumn('actions', function($user) {
                return view('user.actions', compact('user'));
            })
            ->toJson();
    }
}
public function exportExcel()
{
    return Excel::download(new UsersExport, 'users.xlsx');
}

public function exportPdf()
{
    $users = User::all();

    $pdf = PDF::loadView('user.export_pdf', compact('users'));

    return $pdf->download('users.pdf');
}

}
