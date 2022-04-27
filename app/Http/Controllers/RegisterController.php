<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function index()
    {
        return view('register.index', [
            'title' => 'Register',
            'active' => 'register'
        ]);
    }

    public function store(Request $request)
    {
        //request merupakan sebuah method untuk mengambil datanya
        // return request()->all();

        $validateData =  $request->validate([
            'name' => 'required|max:255',
            'username' => ['required', 'min:3', 'max:255', 'unique:users'],
            'email' => 'required|email:dns|unique:users',
            'password' => 'required|min:5|max:255'
        ]);

        //jika seandainya request semuanya lolos maka akan menjalankan kode yang ada di bawahnya

        // dd($request);, method ini cuman berfungsi untuk mengecek apakah nilainya bisa masuk

        //disini kita akan membuat agar password bisa di enkripsi
        // $validateData['password'] = bcrypt($validateData['password']);

        //atau kita juga bisa membuat menggunakan hashing seperti berikut
        $validateData['password'] = Hash::make($validateData['password']);

        User::create($validateData);

        //disini kita juga bisa meringkaskan code nya menjadi seperti yg dibawah
        // $request->session()->flash('success', 'Registration Successfull! Please Login');

        return redirect('/login')->with('success', 'Registration Successfull! Please Login');
    }
}
