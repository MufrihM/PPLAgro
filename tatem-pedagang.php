<?php
    include('./db.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pedagang</title>
    <style>
        .card-title{
            font-weight: 600;
        }
    </style>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light" style="background-color: #77BB41;">
        <div class="container-fluid">
            <a class="navbar-brand text-light pb-2 px-2 card-title" href="#">Tatem</a>
            <form class="d-flex">
                <input class="form-control me-2" type="search" placeholder="search" aria-label="search">
                <button class="btn btn-outline-success bg-light me-2" type="submit"><ion-icon name="search"></ion-icon></button>
            </form>
        </div>
    </nav>
    <button class="btn btn-lg mt-3 ms-2 rounded-circle"><ion-icon name="arrow-back-outline"></ion-icon></button>
    <div class="container-fluid">
        <div class="row">
        <?php
        $sql = "select * from produk";
        $result = mysqli_query($data, $sql);
        while($row = mysqli_fetch_assoc($result)){
            $name = $row['Nama'];
            $harga = $row['Harga'];
            $img = $row['Foto'];
            echo "
            <div class=\"my-3 col-sm-12 col-md-6 col-lg-4 col-xl-3 rounded-5\">
                <div class=\"card ms-2 mb-3\" style=\" height: 300px; background-color: #CAF4A9;\">
                    <img src=$img class=\"card-img-top\" height=\"200px\">
                    <div class=\"card-body\">
                        <h5 class=\"card-title\">$name</h5>
                        <div class=\"d-flex justify-content-start\">
                            <h6>RP.$harga</h6>
                        </div>
                    </div>
                </div>
            </div>
        ";
}?>      
        </div>
    </div>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>