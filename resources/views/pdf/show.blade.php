<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View PDF</title>
</head>
<body>
    <div>
        <h1>{{ $library->title }}</h1>
        <embed src="{{ asset('storage/' . $library->file_path) }}" type="application/pdf" width="100%" height="600px" />
    </div>
</body>
</html>
