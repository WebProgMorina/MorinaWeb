<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Response;
use Illuminate\Http\Request;
use App\Models\LibraryC;
use Illuminate\Support\Facades\Storage;

class PDFControllerC extends Controller
{
    public function index()
    {
        $libraries = LibraryC::all();
        return view('pdfC.index', compact('libraries'));
    }

    public function upload(Request $request)
    {
        $request->validate([
            'pdf_file' => 'required|mimes:pdf|max:2048',
        ]);

        if ($request->file('pdf_file')->isValid()) {
            $pdfPath = $request->file('pdf_file')->store('pdfs', 'public');

            LibraryC::create([
                'title' => $request->file('pdf_file')->getClientOriginalName(),
                'file_path' => $pdfPath,
            ]);

            return redirect()->back()->with('success', 'PDF uploaded successfully.');
        }

        return redirect()->back()->with('error', 'Failed to upload PDF.');
    }

    public function show($id)
    {
        $library = LibraryC::findOrFail($id);
        $filePath = storage_path('app/public/' . $library->file_path);

        return Response::download($filePath, $library->title);
    }

    public function destroy($id)
    {
        $library = LibraryC::findOrFail($id);

        Storage::delete('public/' . $library->file_path);

        $library->delete();

        return redirect()->route('pdfC.index')->with('success', 'PDF deleted successfully.');
    }
}
