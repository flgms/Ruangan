<!DOCTYPE html>
<html>
<head>
    <title>Tambah Ruangan</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="container mt-4">
    <h1>Tambah Ruangan Baru</h1>

    <form method="POST" action="{{ route('rooms.store') }}">
        @csrf
        <div class="mb-3">
            <label>Nama Ruangan</label>
            <input type="text" name="name" class="form-control" required>
        </div>
        <div class="mb-3">
            <label>Deskripsi (opsional)</label>
            <textarea name="description" class="form-control"></textarea>
        </div>
        <div class="mb-3">
            <label>Kapasitas (orang)</label>
            <input type="number" name="capacity" class="form-control" min="1" required>
        </div>
        <button type="submit" class="btn btn-success">Simpan</button>
        <a href="{{ route('rooms.index') }}" class="btn btn-secondary">Batal</a>
    </form>
</body>
</html>