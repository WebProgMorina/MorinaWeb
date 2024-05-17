<?php

namespace App\Http\Controllers;

use App\Models\Siswapa;
use Illuminate\Http\Request;

class SiswaPaketAController extends Controller
{
    public function index()
    {
        // Fetch data from the database
        $students = Siswapa::all();
        
        // Pass data to the view
        return view('siswapaketa.index', compact('students'));
    }

    // Other controller methods
}
