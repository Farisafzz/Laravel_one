<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class RegistrationController extends Controller
{
    public function showForm(){
        return view('registration');
    }
    public function store(Request $request){
        //validasi input
        $validated = $request->validate([
            'nama_lengkap' => 'required|string|max:50',
            'email' => 'required|email|unique:registrasi,email',
            'telepon' => 'required|string|max:50',
            'nama_bisnis' => 'required|string|max:50',
            'addres' => 'required|string',
        ]);
        //simpan kedatabase
        DB::table('registrasi')->insert([
        'name' => $validated['nama_lengkap'],
        'email' => $validated['email'],
        'no_telpon' => $validated['telepon'],
        'nama_bisnis' => $validated['nama_bisnis'],
        'Addres' => $validated['addres'],
]);


        return redirect()->back()->with('success', 'Registrasi berhasil!');
    }
}