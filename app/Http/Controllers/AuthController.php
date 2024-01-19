<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Http;
class AuthController extends Controller
{
    /**
     * Display a listing of the resource.
     *  * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('login');
    }
    public function Register(){
        return view('register');
    }
    public function loginAccount(Request $request){
        // dd($request->all());
        $request->validate([
            'password' => 'required',
            'name' => 'required',
            'email' => 'required|email:dns',

        ]);
        User::create([
            'password' => bcrypt($request->password),
            'email' => $request->email,
            'name' => $request->name,
            'done_time' => \Carbon\Carbon::now(),
            'role' => 'user'
        ]);
        return redirect('/');
        
    }

    public function auth(Request $request){
        $request->validate([
            'email' => 'required|exists:users,email',
            'password' => 'required',
        ], [
            'email.exist' =>'email ini belum tersedia',
            'password.exist' =>'password ini belum tersedia',
            'email.required' =>'email harus diisi',
            'password.required' =>'password harus diisi',
        ]);

        $user = $request->only('email', 'password');
        if(Auth::attempt($user)){
            return redirect()->route('user');
        }else{
            return redirect()->route('user')->with('error', 'terjadi kesalahan saat login');
        }
    }
    public function logout() {
        Auth::logout();
        return redirect('/');
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
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
    public function show(Auth $auth)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Auth $auth)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Auth $auth)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Auth $auth)
    {
        //
    }
}
