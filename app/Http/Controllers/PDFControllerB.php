<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Response;
use Illuminate\Http\Request;
use App\Models\LibraryB;
use Illuminate\Support\Facades\Storage;

class PDFControllerB extends Controller
{
    public function index()
    {
        $libraries = LibraryB::all();
        return view('pdfB.index', compact('libraries'));
    }

    public function upload(Request $request)
    {
        $request->validate([
            'pdf_file' => 'required|mimes:pdf|max:2048',
        ]);

        if ($request->file('pdf_file')->isValid()) {
            $pdfPath = $request->file('pdf_file')->store('pdfs', 'public');

            LibraryB::create([
                'title' => $request->file('pdf_file')->getClientOriginalName(),
                'file_path' => $pdfPath,
            ]);

            return redirect()->back()->with('success', 'PDF uploaded successfully.');
        }

        return redirect()->back()->with('error', 'Failed to upload PDF.');
    }

    public function show($id)
    {
        $library = LibraryB::findOrFail($id);
        $filePath = storage_path('app/public/' . $library->file_path);

        return Response::download($filePath, $library->title);
    }

    public function destroy($id)
    {
        $library = LibraryB::findOrFail($id);

        Storage::delete('public/' . $library->file_path);

        $library->delete();

        return redirect()->route('pdfB.index')->with('success', 'PDF deleted successfully.');
    }
}
