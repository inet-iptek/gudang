<?php
    include "config/config.php";

    $nama_barang = val($_POST['nama_barang']);
    $stok = val($_POST['stok']);

    $sql = "INSERT into data(nama_barang,stok) VALUES('$nama_barang','$stok')";
    $add = $conn->query($sql);

    if($add) {
        alert('Berhasil');
        redir('../gudang');
    } else {
        alert('Gagal!');
        redir('tambah.php');
    }
?>