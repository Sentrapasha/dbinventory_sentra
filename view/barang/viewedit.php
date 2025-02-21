<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <title>Document</title>
</head>
<body>
<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="../barang">Barang</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="../jenis_barang">Jenis Barang</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Dropdown
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">Action</a></li>
            <li><a class="dropdown-item" href="#">Another action</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Something else here</a></li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled" aria-disabled="true">Disabled</a>
        </li>
      </ul>
      <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>

<div class="container">
<h1>Tambah Barang</h1>
<?php
$id_barang = $_GET ['id_barang'];
include '../../config/koneksi.php';
$query=mysqli_query($conn, "SELECT * FROM barang WHERE id_barang='$id_barang'");
$result=mysqli_fetch_array($query);
?>
<form action="proses.php?id_barang=<?php echo $result['id_barang'] ?>" method="post">
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Nama Barang</label>
    <input type="text" name="nama_barantg" class="form-control" value="<?php echo $result['nama_barantg'] ?>">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Harga</label>
    <input type="text" name="harga" class="form-control" value="<?php echo $result['harga'] ?>">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Expired</label>
    <input type="text" name="expired" class="form-control" value="<?php echo $result['expired'] ?>">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Stok</label>
    <input type="text" name="stok" class="form-control" value="<?php echo $result['stok'] ?>">
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>
</body>
</html>