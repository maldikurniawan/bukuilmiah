<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;

class ProfileController extends Controller
{
    public function index()
    {
        $id = Auth::guard()->user()->id;
        $users = DB::table('users')->where('id', $id)->first();
        return view('profile.index', compact('users'));
    }

    public function update(Request $request)
    {
        $id = Auth::guard()->user()->id;
        $name = $request->name;
        $fakultas = $request->fakultas;
        $prodi = $request->prodi;
        $jabatan = $request->jabatan;
        $golongan = $request->golongan;
        $no_hp = $request->no_hp;
        $tgl_lahir = $request->tgl_lahir;
        $email = $request->email;
        $users = DB::table('users')->where('id', $id)->first();
        $request->validate([
            'foto' => 'nullable|image|mimes:png,jpg,jpeg'
        ]);
        if ($request->hasFile('foto')) {
            $foto = $prodi . "_" . $name . "." . $request->file('foto')->getClientOriginalExtension();
        } else {
            $foto = $users->foto;
        }

        $data = [
            'name' => $name,
            'fakultas' => $fakultas,
            'prodi' => $prodi,
            'jabatan' => $jabatan,
            'golongan' => $golongan,
            'no_hp' => $no_hp,
            'tgl_lahir' => $tgl_lahir,
            'email' => $email,
            'foto' => $foto
        ];

        $update = DB::table('users')->where('id', $id)->update($data);
        if ($update) {
            if ($request->hasFile('foto')) {
                $folderPath = "public/uploads/users/";
                $request->file('foto')->storeAs($folderPath, $foto);
            }
            return Redirect::back()->with(['success' => 'Data Berhasil Diupdate']);
        } else {
            return Redirect::back()->with(['error' => 'Data Gagal Diupdate']);
        }
    }
}
