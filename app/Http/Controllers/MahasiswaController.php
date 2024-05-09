<?php

namespace App\Http\Controllers;

use App\Models\Mahasiswa;
use Illuminate\Http\Request;

class MahasiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function daftarMahasiswa()
    {
        //
        return 'form pendaftaran';
    }

    public function tabelMahasiswa()
    {
        //
        return 'tabel mahasiswa';
    }

    public function blogMahasiswa()
    {
        //
        return 'blog mahasiswa';
    }


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return 'halaman blog';
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
    public function show(Mahasiswa $mahasiswa)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Mahasiswa $mahasiswa)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Mahasiswa $mahasiswa)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Mahasiswa $mahasiswa)
    {
        //
    }
}
