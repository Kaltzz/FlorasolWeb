<!DOCTYPE html>
<html lang="">

<link href=" <?= base_url('assets/'); ?>bootstrap.css" rel="stylesheet">

<link href=" <?= base_url('assets/'); ?>style.css" rel="stylesheet">


<head>
    <title>Florasol</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <link href="assets/layout.css" rel="stylesheet" type="text/css" media="all">
    <link href="assets/bootstrap.css" rel="stylesheet">
    <script src="assets/bootstrap.bundle.js"></script>

    <link href=" assets/style.css" rel="stylesheet">
</head>

<body style="height:1500px">

    <nav class="navbar navbar-expand-sm backgroundss warnatext fixed-top">
        <div class="container-fluid">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavbar">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="collapsibleNavbar">

                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="<?= base_url(); ?>home">Beranda</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= base_url(); ?>home/order">Order</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= base_url(); ?>home/abs">Contact</a>
                    </li>
                </ul>

            </div>
        </div>
        <div>
            <ul class="nav justify-content-end navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo base_url(); ?>login/logout">Logout</a>
                </li>
            </ul>
        </div>
    </nav>
    <div class="row">
        <div class="col-sm-4 p-3 backgroundss4 text-dark smb ">
            <img src="<?= base_url('images/'); ?>pertamina.png" style=" width: 70%; margin-top: 150px; margin-left: 150px;">
        </div>
        <div class="col-sm-8 p-3 backgroundss4 text-dark smb">
            <h1 style="margin-top: 180px; font-weight: 1000;">Order BBM secara Online</h1>
            <h4>Sekarang anda dapat memesan BBM secara online melalui website</h4>
        </div>
    </div>
    <div class=" mt-10 backgroundss" style="margin-top: 50px;">
        <div class="mt-100px p-5 text-white backgroundss3" style="padding-left: 100%;padding-right: 100%; padding-bottom: 1000px">
            <div class="row">
            </div>
            <div class="container-fluid mt-3">
                <div class="row">
                    <div class="col p-3 bg-white text-dark">
                        <div class="container-fluid" style="margin-top:80px">
                            <div class="container mt-3" align="center">
                                <div class="card" style="width:300px; border: 2px solid">
                                    <img class="card-img-top" src="<?= base_url('images/'); ?>pertamax2.png" alt="Card image" style="width:50%; align-self: center; margin-bottom: 20px; margin-top: 30px;">Pertamax
                                    dengan oktan 95 ideal untuk mesin-mesin kendaraan modern yang berkompresi diantara
                                    9:1 sampai 11:1
                                    <h6 style="font-weight:1000">Rp.12k/liter</h6>
                                    <div class="card-body">
                                        <form action="<?= base_url(); ?>home/pertamax/" method="post" enctype="multipart/form-data">
                                            <input type="number" class="form-control" id="jumlah" placeholder="banyaknya BBM (ltr)" name="jumlah">
                                            <br>
                                            <input type="submit" name="submit" value="Pesan" class="btn text-light backgroundss">
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="container-fluid" style="margin-top:80px">
                            <div class="container mt-3" align="center">
                                <div class="card" style="width:300px; border: 2px solid">
                                    <img class="card-img-top" src="<?= base_url('images/'); ?>minyaktanah.png" alt="Card image" style="width:50%; align-self: center; margin-bottom: 20px; margin-top: 30px;">Minyak
                                    tanah memiliki kegunaan diantaranya yaitu sebagai bahan bakar
                                    <h6 style="font-weight:1000">Rp.7k/liter</h6>
                                    <div class="card-body">
                                        <form action="<?= base_url(); ?>home/mt/" method="post" enctype="multipart/form-data">
                                            <input type="number" class="form-control" id="jumlah" placeholder="banyaknya BBM (ltr)" name="jumlah">
                                            <br>
                                            <input type="submit" name="submit" value="Pesan" class="btn text-light backgroundss">
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col p-3 bg-white text-dark">
                        <div class="container-fluid" style="margin-top:80px">
                            <div class="container mt-3" align="center">
                                <div class="card" style="width:300px; border: 2px solid">
                                    <img class="card-img-top" src="<?= base_url('images/'); ?>pertalite.png" alt="Card image" style="width:50%; align-self: center; margin-bottom: 20px; margin-top: 30px;">Pertalite
                                    dengan oktan 91 ideal untuk mesin-mesin kendaraan modern yang berkompresi diantara
                                    9:1 sampai 10:1
                                    <h6 style="font-weight:1000">Rp.9k/liter</h6>
                                    <div class="card-body">
                                        <form action="<?= base_url(); ?>home/pertalite" method="post" enctype="multipart/form-data">
                                            <input type="number" class="form-control" id="jumlah" placeholder="banyaknya BBM (ltr)" name="jumlah">
                                            <br>
                                            <input type="submit" name="submit" value="Pesan" class="btn text-light backgroundss">
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="container-fluid" style="margin-top:80px">
                            <div class="container mt-3" align="center">
                                <div class="card" style="width:300px; border: 2px solid">
                                    <img class="card-img-top" src="<?= base_url('images/'); ?>dexlite.png" alt="Card image" style="width:50%; align-self: center; margin-bottom: 20px; margin-top: 30px;">Bahan
                                    bakar Dexlite memiliki angka oktan 51 diperuntukkan mobil diesel
                                    <h6 style="font-weight:1000">Rp.10k/liter</h6>
                                    <div class="card-body">
                                        <form action="<?= base_url(); ?>home/dexlite" method="post" enctype="multipart/form-data">
                                            <input type="number" class="form-control" id="jumlah" placeholder="banyaknya BBM (ltr)" name="jumlah">
                                            <br>
                                            <input type="submit" name="submit" value="Pesan" class="btn text-light backgroundss">
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col p-3 bg-white text-dark">
                        <div class="container-fluid" style="margin-top:80px">
                            <div class="container mt-3" align="center">
                                <div class="card" style="width:300px; border: 2px solid">
                                    <img class="card-img-top" src="<?= base_url('images/'); ?>premium.png" alt="Card image" style="width:50%; align-self: center; margin-bottom: 23px; margin-top: 30px;">
                                    Oktan Premium adalah 88. digunakan untuk bahan bakar kendaraan bermotor dengan
                                    kompresi rendah di bawah 9:1.
                                    <h6 style="font-weight:1000">Rp.8k/liter</h6>
                                    <div class="card-body">
                                        <form action="<?= base_url(); ?>home/premium" method="post" enctype="multipart/form-data">
                                            <input type="number" class="form-control" id="jumlah" placeholder="banyaknya BBM (ltr)" name="jumlah">
                                            <br>
                                            <input type="submit" name="submit" value="Pesan" class="btn text-light backgroundss">
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="container-fluid" style="margin-top:80px">
                            <div class="container mt-3" align="center">
                                <div class="card" style="width:300px; border: 2px solid">
                                <img class="card-img-top" src="<?= base_url('images/'); ?>solar.png" alt="Card image" style="width:50%; align-self: center; margin-bottom: 23px; margin-top: 30px;">
                                    biasanya digunakan untuk bahan bakar mobil diesel
                                    <h6 style="font-weight:1000">Rp.7k/liter</h6>
                                    <div class="card-body">
                                    <form action="<?= base_url(); ?>home/solar" method="post" enctype="multipart/form-data">
                                            <input type="number" class="form-control" id="jumlah" placeholder="banyaknya BBM (ltr)" name="jumlah">
                                            <br>
                                            <input type="submit" name="submit" value="Pesan" class="btn text-light backgroundss">
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class=" backgroundss">
            <div class=" p-5 text-white backgroundss3" style="padding-left: 100%;padding-right: 100%; padding-bottom: 1000px">
                <h1 class="container text-dark"> Keranjang </h2>
                    <br>
                    <table class="table backgroundss text-white table container">
                        <thead>
                            <tr>
                                <td>No.</td>
                                <td>Nama Barang</td>
                                <td>Jumlah</td>
                                <td>Harga</td>
                                <td>Total Harga</td>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $no = 1;
                            $total_fix = 0;
                            foreach ($cart as $data) {
                                $harga_total = $data['harga_satuan'] * $data['jumlah'];
                                $total_fix = $total_fix + $harga_total;
                                echo '
                                <tr>
                                    <td>' . $no . '</td>
                                    <td>' . $data['nama_barang'] . '</td>
                                    <td>' . $data['jumlah'] . '</td>
                                    <td>Rp. ' . $data['harga_satuan'] . '</td>
                                    <td>Rp. ' . $harga_total . '</td>
                                </tr>
                            ';
                                $no = $no + 1;
                            }
                            ?>
                        </tbody>
                    </table>
                    <form action="<?= base_url(); ?>home/hapus/" method="post" enctype="multipart/form-data">
                        <br>
                        <input type="submit" name="submit" value="Kosongkan Keranjang" class="btn text-light bg-dark" style="margin-left:50px">
                    </form>
                    <br>
                    <div class="text-dark" style="margin-left:50px">
                        <?php
                        $this->session->userdata['data_user'][0]['total'] =  $total_fix;
                        ?>
                        <h2>
                            Total : Rp. <?= $total_fix ?>
                        </h2>
                    </div>
                    <form action="<?= base_url(); ?>home/form/" method="post" enctype="multipart/form-data">
                        <br>
                        <input type="submit" name="submit" value="Checkout" class="btn text-light backgroundss" style="margin-left:1250px">
                    </form>
            </div>
        </div>


        <div class=" mt-10 backgroundss" style="margin-top: 100px;">
            <div class="mt-100px p-5 text-white backgroundss" style="padding-left: 100%;padding-right: 100%;">
                <div class="row">
                    <h1 align="center">FLORASOL</h1>
                    <h6 align="center" style="font-weight:100; font-size:small">Copyright © 2022 PT. Florasol All
                        Rights Reserved</h6>
                </div>
            </div>
        </div>
    </div>


</body>

</html>