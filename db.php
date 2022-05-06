<?php
$data = new mysqli("localhost", "root", "", "ppl");
if($data->connect_error){
    die("Koneksi gagal");
}?>