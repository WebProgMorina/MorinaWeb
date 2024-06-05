<x-app-layout>
    <div class="min-h-screen flex flex-col">
        <div class="container py-8 flex-grow">
            <div class="max-w-xl mx-auto shadow sm:rounded-lg p-6 m-4"
                style="border-radius: 10px; background-color: var(--2);">
                <h2 class="text-2xl font-semibold mb-4">Tambah Data A</h2>
                <form action="{{ route('pdfC.upload') }}" method="POST" enctype="multipart/form-data">
                    @csrf

                    <div class="mb-3">
                        <label for="pdf_file" class="form-label" style="display: block;">Upload PDF:</label>
                        <div class="d-flex align-items-center">
                            <input type="file" class="form-control-file me-2" name="pdf_file" id="pdf_file" required>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="kode_kelas" class="form-label">Kode Kelas:</label>
                        <input type="text" class="form-control" name="kode_kelas" id="kode_kelas" required
                            style="border-radius: 4px;">
                    </div>
                    <div>
                        <button id="btn" type="submit">Submit</button>
                        <!-- Tombol View -->
                        <a id="btn" href="{{ route('pdfC.view') }}">View PDFs</a>
                    </div>
                </form>
            </div>
        </div>

    </div>
</x-app-layout>