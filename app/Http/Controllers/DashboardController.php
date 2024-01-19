<?php

namespace App\Http\Controllers;

use App\Models\UserCreate;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $users = UserCreate::all();
        return view('user', compact('users'));
    }
    public function landing(){
        return view('landing');
    }
    public function pendaftaran(){
        return view('pendaftaran');
    }
    /**
     * Show the form for creating a new resource.
     */
    public function createUser(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'jenis_kelamin' => 'required',
            'minat_jurusan' => 'required',
            'asal_smp' => 'required',
        ]);
        UserCreate::create([
            'nama' => $request->nama,
            'jenis_kelamin' => $request->jenis_kelamin,
            'minat_jurusan' => $request->minat_jurusan,
            'asal_smp' => $request->asal_smp,

        ]);
    return redirect('/dashboard');
    }

    public function editUser($id)
    {
        $edit = UserCreate::where('id', $id)->first();
       
        return view('update', compact('edit'));
    }
    
    public function editAccount(Request $request, $id)
    {

        $request->validate([
            'nama' => 'required',
            'jenis_kelamin' => 'required',
            'minat_jurusan' => 'required',
            'asal_smp' => 'required',
        ]);
        UserCreate::where('id', $id)->update([
            'nama' => $request->nama,
            'jenis_kelamin' => $request->jenis_kelamin,
            'minat_jurusan' => $request->minat_jurusan,
            'asal_smp' => $request->asal_smp,

        ]);
        return redirect('/dashboard');
    }



    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(DashboardController $dashboardController)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
 
    /**
     * Update the specified resource in storage.
     */
    

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        UserCreate::find($id)->delete();
        return redirect()->route('user')->with('hapus', 'data Berhasil di Hapus');
    }
}
