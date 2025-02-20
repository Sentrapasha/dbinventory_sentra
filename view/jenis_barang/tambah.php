<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <title>Tambah Jenis</title>
</head>
<body>

<div class="container">
<h1>Tambah Jenis</h1>
<form action="simpan1.php" method="post">
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">ID Jenis</label>
    <input type="text" name="id_jenis" class="form-control">
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Nama Jenis</label>
    <input type="text" name="nama_jenis" class="form-control">
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>
</body>
</html>