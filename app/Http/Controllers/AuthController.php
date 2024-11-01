<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class AuthController extends Controller
{
    public function index(){
        return view('auth.index');
    }
    public function login(Request $request){
        Session::flash('email' ,$request->email);
        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ],[
            'email.required' => 'Email Wajib Diisi',
            'password.required' => 'Password Wajib Diisi',
        ]);
        
        $infologin = [
            'email' => $request->email,
            'password' => $request->password,
        ];

        if(Auth::attempt($infologin)){
            return redirect('/')->with('success','Berhasil Login');
        }
        else{
            return redirect('login')->withErrors('Masukan Email Dan Password Yang Valid');
        }
    }
    public function register(){
        return view('auth.register');
    }
    public function create(Request $request){
        Session::flash('name' ,$request->input('name'));
        Session::flash('email' ,$request->input('email'));
        $request->validate([
            'name' => 'required|min:3|max:8',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:5|max:15',
        ],[
            'name.required' => 'Nama Wajib Disi',
            'name.min' => 'Minimal Usernama 3 Huruf',
            'name.max' => 'Maximal Username 3 Huruf',
            'email.email' => 'Masukan Email Yang Valid',
            'email.unique' => 'Email Sudah Pernah Dipakai',
            'email.required' => 'Email Wajib Diisi',
            'password.required' => 'Password Wajib Diisi',
            'password.min' => 'Minimal Password 5 Huruf',
            'password.max' => 'Maximal Password 15 Huruf',
        ]);

        $data = [
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password)
        ];
        
        User::create($data);

        $infologin = [
            'email' => $request->email,
            'password' => $request->password,
        ];

        if(Auth::attempt($infologin)){
            return redirect('/')->with('success','Berhasil Login');
        }
        else{
            return redirect('login')->withErrors('Masukan Email Dan Password Yang Valid');
        }
    }
    public function logout(){
        Auth::logout();
        return redirect('login');
    }
}