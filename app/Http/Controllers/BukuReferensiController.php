<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BukuReferensiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $bukureferensi = DB::table('bukureferensi')->orderBy('id')->get();
        return view('bukureferensi.index', compact('bukureferensi'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('bukureferensi.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $judul_buku = $request->judul_buku;
        $edisi = $request->edisi;
        $isbn = $request->isbn;
        $penerbit = $request->penerbit;
        $jml_halaman = $request->jml_halaman;
        $url = $request->url;
        $thn_terbit = $request->thn_terbit;
        $jml_anggota = $request->jml_anggota;

        $request->validate(
            [
                'judul_buku' => 'required',
                'edisi' => 'required',
                'isbn' => 'required',
                'penerbit' => 'required',
                'jml_halaman' => 'required',
                'url' => 'required',
                'thn_terbit' => 'required',
                'jml_anggota' => 'required'
            ]
        );

        try {
            $data = [
                'judul_buku' => $judul_buku,
                'edisi' => $edisi,
                'isbn' => $isbn,
                'penerbit' => $penerbit,
                'jml_halaman' => $jml_halaman,
                'url' => $url,
                'thn_terbit' => $thn_terbit,
                'jml_anggota' => $jml_anggota,
                'status' => 0
            ];
            $simpan = DB::table('bukureferensi')->insert($data);
            if ($simpan) {
                return redirect(route('bukureferensi.index'))->with(['success' => 'Data Berhasil Disimpan']);
            }
        } catch (\Exception $e) {
            // dd($e);
            return redirect(route('bukureferensi.index'))->with(['warning' => 'Data Gagal Disimpan']);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $bukureferensi = DB::table('bukureferensi')->where('id', $id)->first();
        return view('bukureferensi.edit', compact('bukureferensi'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update($id, Request $request)
    {
        $judul_buku = $request->judul_buku;
        $edisi = $request->edisi;
        $isbn = $request->isbn;
        $penerbit = $request->penerbit;
        $jml_halaman = $request->jml_halaman;
        $url = $request->url;
        $thn_terbit = $request->thn_terbit;
        $jml_anggota = $request->jml_anggota;
        try {
            $data = [
                'judul_buku' => $judul_buku,
                'edisi' => $edisi,
                'isbn' => $isbn,
                'penerbit' => $penerbit,
                'jml_halaman' => $jml_halaman,
                'url' => $url,
                'thn_terbit' => $thn_terbit,
                'jml_anggota' => $jml_anggota
            ];
            DB::table('bukureferensi')->where('id', $id)->update($data);
            return redirect(route('bukureferensi.index'))->with(['success' => 'Data Berhasil Diupdate']);
        } catch (\Throwable $e) {
            return redirect(route('bukureferensi.index'))->with(['success' => 'Data Gagal Diupdate']);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $delete = DB::table('bukureferensi')->where('id', $id)->delete();
        if ($delete) {
            return redirect(route('bukureferensi.index'))->with(['success' => 'Data Berhasil Dihapus']);
        } else {
            return redirect(route('bukureferensi.index'))->with(['warning' => 'Data Gagal Dihapus']);
        }
    }
}
