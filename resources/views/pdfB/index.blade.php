<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upload PDF</title>
</head>

<body>
    <div>
        @if(session('success'))
            <div>
                {{ session('success') }}
            </div>
        @endif

        @if(session('error'))
            <div>
                {{ session('error') }}
            </div>
        @endif

        <form action="{{ route('upload.pdf') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <input type="file" name="pdf_file">
            <button type="submit">Upload</button>
        </form>

        <h2>Uploaded PDFs:</h2>
        <ul>
            @foreach($libraries as $library)
                <li>
                    <a href="{{ route('pdf.show', $library->id) }}" target="_blank">{{ $library->title }}</a>
                    <form action="{{ route('pdf.destroy', $library->id) }}" method="POST" style="display:inline">
                        @csrf
                        @method('DELETE')
                        <button type="submit">Delete</button>
                    </form>
                </li>
            @endforeach
        </ul>


    </div>
</body>

</html>