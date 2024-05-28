<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Siswapb;

class PaketBController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $students = Siswapb::all();
        return view('paketb.index', compact('students'));
    }

    /**
     * Display the form to create a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('paketb.create');
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
            'Induk' => 'required|numeric|unique:siswapb,Induk',
            'Nama' => 'required|string|max:200',
            'TempatLahir' => 'required|string|max:100',
            'TanggalLahir' => 'required|date',
            'gender' => 'required|in:L,P',
            'kepercayaan' => 'required|string|in:Islam,Kristen Protestan,Kristen Katolik,Budha,Hindu,Konghucu,kepercayaan daerah',
            'ayah' => 'nullable|string|max:200',
            'ibu' => 'nullable|string|max:200',
            'Kelas' => 'required|string|in:VII,VIII,IX',
            'Kota' => 'required|string|max:100',
            'alamat' => 'required|string',
            'phone' => 'required|string|max:20',
        ]);

        // Create new siswapb instance
        $siswapb = new siswapb();
        $siswapb->Induk = $request->Induk;
        $siswapb->Nama = $request->Nama;
        $siswapb->TempatLahir = $request->TempatLahir;
        $siswapb->TanggalLahir = $request->TanggalLahir;
        $siswapb->gender = $request->gender;
        $siswapb->kepercayaan = $request->kepercayaan;
        $siswapb->ayah = $request->ayah;
        $siswapb->ibu = $request->ibu;
        $siswapb->Kelas = $request->Kelas;
        $siswapb->Kota = $request->Kota;
        $siswapb->alamat = $request->alamat;
        $siswapb->phone = $request->phone;

        // Save the siswapb
        $siswapb->save();

        // Redirect back with success message
        return redirect()->route('paketb.index')->with('success', 'Data siswa berhasil ditambahkan.');
    }
}
