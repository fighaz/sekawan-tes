<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;

class LoginController extends Controller
{
    //
    public function index()
    {
        return view('login');
    }
    public function login(Request $request)
    {
        $request->validate([
            'username' => 'required',
            'password' => 'required',
        ]);

        $data = [
            'username' => $request->username,
            'password' => $request->password
        ];
        $user = User::checkUsername($request->username);
        if ($user && Hash::check($request->password, $user->password)) {
            $request->session()->regenerate();

            session(['id' => $user->pegawai->id]);
            session(['username' => $user->pegawai->nama]);
            session(['jabatan' => $user->pegawai->jabatan]);
            Log::info('Username : {nama} telah login', ['nama' => $user->pegawai->nama]);
            if (session('jabatan') == "admin") {
                return redirect('admin');
            } else if (session('jabatan') == "supervisor") {
                return redirect('supervisor');
            } else {
                return redirect('/');
            }
        } else {
            return redirect('/')->with('error', 'Username atau Password Salah');
        }
    }
    public function logout()
    {
        Auth::logout();
        Log::info('Username : {nama} telah Logout', ['nama' => session('username')]);
        session()->flush();
        return redirect('/');
    }
}
