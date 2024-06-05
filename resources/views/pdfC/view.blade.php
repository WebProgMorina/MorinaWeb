<x-app-layout>
    <div class="min-h-screen flex flex-col">
        <div class="container mt-5 flex-grow">
            <h2 class="text-center mb-4">Uploaded PDFs</h2>
            @if(session('success'))
                <div class="alert alert-success" role="alert">
                    {{ session('success') }}
                </div>
            @endif

            <div class="row">
                @foreach($libraries as $library)
                    <div class="col-lg-4 col-md-6 mb-4">
                        <div class="card h-100">
                            <div class="card-body d-flex flex-column">
                                <h5 class="card-title">{{ $library->title }}</h5>
                                <p class="card-text">Kode Kelas: {{ $library->kode_kelas }}</p>
                                <div class="mt-auto">
                                    <button href="{{ route('pdfC.show', $library->id) }}" class="btn btn-primary"
                                        target="_blank">Download PDF</button>
                                    @if(auth()->user()->isAdmin())
                                        <!-- Jika user adalah admin, tampilkan tombol delete -->
                                        <form action="{{ route('pdfC.destroy', $library->id) }}" method="POST" class="d-inline">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger">Delete</button>
                                        </form>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>

    </div>
</x-app-layout>