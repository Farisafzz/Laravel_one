<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class RegistrationController extends Controller
{
    public function showForm()
    {
        return view('register');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'nama_lengkap' => 'required|string|max:50',
            'email' => 'required|email|unique:registrasi,email',
            'telepon' => 'required|string|max:50',
            'nama_bisnis' => 'required|string|max:50',
            'addres' => 'required|string',
        ]);

        DB::table('registrasi')->insert([
            'name' => $validated['nama_lengkap'],
            'email' => $validated['email'],
            'no_telpon' => $validated['telepon'],
            'nama_bisnis' => $validated['nama_bisnis'],
            'Addres' => $validated['addres'],
        ]);

        return redirect()->back()->with('success', 'Registrasi berhasil!');
    }

    public function showData()
    {
        $data = DB::table('registrasi')->get();
        return view('registerdata', compact('data'));
    }

    // ✅ Menampilkan form edit
    public function edit($id)
    {
        $item = DB::table('registrasi')->where('id', $id)->first();
        return view('registeredit', compact('item'));
    }

    // ✅ Proses update data
    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'nama_lengkap' => 'required|string|max:50',
            'email' => 'required|email|unique:registrasi,email,' . $id,
            'telepon' => 'required|string|max:50',
            'nama_bisnis' => 'required|string|max:50',
            'addres' => 'required|string',
        ]);

        DB::table('registrasi')->where('id', $id)->update([
            'name' => $validated['nama_lengkap'],
            'email' => $validated['email'],
            'no_telpon' => $validated['telepon'],
            'nama_bisnis' => $validated['nama_bisnis'],
            'Addres' => $validated['addres'],
        ]);

        return redirect()->route('registrasi.data')->with('success', 'Data berhasil diupdate.');
    }

    // ✅ Proses hapus data
    public function delete($id)
    {
        DB::table('registrasi')->where('id', $id)->delete();
        return redirect()->route('registrasi.data')->with('success', 'Data berhasil dihapus.');
    }
}
