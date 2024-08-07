<?php
   include 'db.php';
   session_start();

     $jumlah = $_POST['jumlah'];

    //echo $nama;
    //echo $nim;
    //echo $alamat;

    $nama_gambar = $_FILES['bukti']['name'];
    $tmp_name = $_FILES['bukti']['tmp_name'];
    $uname = $_SESSION['data_user']['username'];

    move_uploaded_file($tmp_name,'images/'.$nama_gambar);

    $querySQL = "INSERT INTO transaksi(username, jenis, jumlah, bukti) 
    VALUES ('$uname', 'pertamax', '$jumlah', '$nama_gambar')"; 

    $conn->query($querySQL);

    header('Location: order.php')


?>