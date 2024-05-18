<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Siswapa;

class PaketAController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $students = Siswapa::all();
        return view('paketa.index', compact('students'));
    }

    /**
     * Display the form to create a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('paketa.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // Validate incoming request
        $request->validate([
            'Induk' => 'required|numeric|unique:siswapa,Induk',
            'Nama' => 'required|string|max:200',
            'TempatLahir' => 'required|string|max:100',
            'TanggalLahir' => 'required|date',
            'gender' => 'required|in:L,P',
            'kepercayaan' => 'required|string|in:Islam,Kristen Protestan,Kristen Katolik,Budha,Hindu,Konghucu,kepercayaan daerah',
            'ayah' => 'nullable|string|max:200',
            'ibu' => 'nullable|string|max:200',
            'Kelas' => 'required|string|in:I,II,III,IV,V,VI',
            'Kota' => 'required|string|max:100',
            'alamat' => 'required|string',
            'phone' => 'required|string|max:20',
        ]);

        // Create new siswapa instance
        $siswapa = new Siswapa();
        $siswapa->Induk = $request->Induk;
        $siswapa->Nama = $request->Nama;
        $siswapa->TempatLahir = $request->TempatLahir;
        $siswapa->TanggalLahir = $request->TanggalLahir;
        $siswapa->gender = $request->gender;
        $siswapa->kepercayaan = $request->kepercayaan;
        $siswapa->ayah = $request->ayah;
        $siswapa->ibu = $request->ibu;
        $siswapa->Kelas = $request->Kelas;
        $siswapa->Kota = $request->Kota;
        $siswapa->alamat = $request->alamat;
        $siswapa->phone = $request->phone;

        // Save the siswapa
        $siswapa->save();

        // Redirect back with success message
        return redirect()->route('paketa.index')->with('success', 'Data siswa berhasil ditambahkan.');
    }
}
