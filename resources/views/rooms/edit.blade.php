<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Edit Ruangan</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container mt-4">
    <h2>Edit Ruangan</h2>

    <?php if (isset($_GET['error'])): ?>
        <div class="alert alert-danger"><?= htmlspecialchars($_GET['error']) ?></div>
    <?php endif; ?>

    <form action="/rooms/<?= urlencode($room['id']) ?>" method="POST">
        <input type="hidden" name="_method" value="PUT">

        <div class="mb-3">
            <label for="name" class="form-label">Nama Ruangan</label>
            <input type="text" name="name" id="name" class="form-control" value="<?= htmlspecialchars($room['name']) ?>" required>
        </div>

        <div class="mb-3">
            <label for="description" class="form-label">Deskripsi</label>
            <textarea name="description" id="description" class="form-control" rows="3"><?= htmlspecialchars($room['description']) ?></textarea>
        </div>

        <div class="mb-3">
            <label for="capacity" class="form-label">Kapasitas (orang)</label>
            <input type="number" name="capacity" id="capacity" class="form-control" value="<?= htmlspecialchars($room['capacity']) ?>" min="1" required>
        </div>

        <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
        <a href="/rooms" class="btn btn-secondary">Batal</a>
    </form>
</div>
</body>
</html>