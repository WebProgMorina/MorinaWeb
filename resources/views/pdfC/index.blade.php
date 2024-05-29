<!-- resources/views/pdfB/index.blade.php -->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upload PDF</title>
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <div class="container mt-5">
        <h2>Upload PDF</h2>
        @if(session('success'))
            <div class="alert alert-success" role="alert">
                {{ session('success') }}
            </div>
        @endif

        @if(session('error'))
            <div class="alert alert-danger" role="alert">
                {{ session('error') }}
            </div>
        @endif

        <form action="{{ route('pdfC.upload') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="pdf_file">Choose PDF file:</label>
                <input type="file" class="form-control-file" id="pdf_file" name="pdf_file" required>
            </div>
            <div class="form-group">
                <label for="kode_kelas">Kode Kelas:</label>
                <input type="text" class="form-control" id="kode_kelas" name="kode_kelas" required>
            </div>
            <button type="submit" class="btn btn-primary">Upload</button>
        </form>

        <!-- Tombol untuk melihat PDF -->
        <a href="{{ route('pdfC.view') }}" class="btn btn-info mt-3">View PDFs</a>
    </div>

    <!-- Bootstrap JS (optional) -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.bundle.min.js"></script>
</body>

</html>