<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Response;
use Illuminate\Http\Request;
use App\Models\Library;
use Illuminate\Support\Facades\Storage;

class PDFController extends Controller
{
    public function view()
    {
        $libraries = Library::all();
        return view('pdf.view', compact('libraries'));
    }
    public function index()
    {
        $libraries = Library::all();
        return view('pdf.index', compact('libraries'));
    }

    public function upload(Request $request)
    {
        $request->validate([
            'pdf_file' => 'required|mimes:pdf|max:2048',
            'kode_kelas' => 'required',
        ]);

        if ($request->file('pdf_file')->isValid()) {
            $pdfPath = $request->file('pdf_file')->store('pdfs', 'public');

            // Simpan ke basis data bersama dengan kode kelas
            Library::create([
                'title' => $request->file('pdf_file')->getClientOriginalName(),
                'file_path' => $pdfPath,
                'kode_kelas' => $request->kode_kelas, // Simpan kode kelas
            ]);

            return redirect()->back()->with('success', 'PDF uploaded successfully.');
        }

        return redirect()->back()->with('error', 'Failed to upload PDF.');
    }

    public function show($id)
    {
        $library = Library::findOrFail($id);
        $filePath = storage_path('app/public/' . $library->file_path);

        return Response::download($filePath, $library->title);
    }

    public function destroy($id)
    {
        // Temukan entri Library berdasarkan ID
        $library = Library::findOrFail($id);

        // Hapus file PDF dari storage
        Storage::delete('public/' . $library->file_path);

        // Hapus entri Library dari database
        $library->delete();

        // Redirect kembali ke halaman PDF setelah berhasil dihapus
        return redirect()->route('pdf.view')->with('success', 'PDF deleted successfully.');
    }
}
