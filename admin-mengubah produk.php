<?php
require_once('./fungsi.php');

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
    <style>
        .kotak{
            background-color: #EEF1E0;
            height: 500px;
        }
    </style>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light" style="background-color: #77BB41;">
        <div class="container-fluid">
            <a class="navbar-brand text-light pb-2 px-2" style="font-weight: 600;" href="#">Tatem</a>
            <form class="d-flex">
                <input class="form-control me-2" type="search" placeholder="search" aria-label="search">
                <button class="btn btn-outline-success bg-light me-2" type="submit"><ion-icon name="search"></ion-icon></button>
            </form>
        </div>
    </nav>
    <button class="btn btn-lg mt-2"><ion-icon name="arrow-back-outline"></ion-icon></button>
    <div class="container-fluid">
        <div class="kotak mx-2 mb-3">
            <h4 class="pt-3 px-3">Mengubah produk</h4>
            <form action="tatem-admin.php" class="row" method="post" enctype="multipart/form-data">
                <?php inputFields("Id Produk", "int", "idP", "")?>
                <?php inputFields("Nama Produk", "text", "namaP", "")?>
                <?php inputFields("Harga Produk", "text", "hargaP", "")?>
                <?php inputFields("Upload Gambar", "file", "gambar", "")?>
                <div class="row justify-content-center pt-4">
                    <button type="submit" class="mb-2 mx-2 col-12 col-sm-6 col-md-4 col-lg-3 col-xl-2 btn text-light" style="background-color: #448D09;" name="ubah">Ubah</button>
                    <button type="button" class="mb-2 mx-2 col-12 col-sm-6 col-md-4 col-lg-3 col-xl-2 btn text-light" style="background-color: #DD2902;">Batal</button>
                </div>
            </form>
        </div>
    </div>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>
