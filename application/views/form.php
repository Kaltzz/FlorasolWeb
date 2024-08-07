<!DOCTYPE html>
<html lang="">

<link href=" <?= base_url('assets/'); ?>bootstrap.css" rel="stylesheet">

<link href=" <?= base_url('assets/'); ?>style.css" rel="stylesheet">

<head>
  <title>Florasol</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
  <link href="simak2/assets/layout.css" rel="stylesheet" type="text/css" media="all">
  <link href=" assets/bootstrap.css" rel="stylesheet">
  <script src="assets/bootstrap.bundle.js"></script>

  <link href=" assets/style.css" rel="stylesheet">
</head>

<body style="height:auto">

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
        </li>
        </ul>
      </div>
    </div>
  </nav>
  <div class="row">
    <div class="col-sm-6 p-3 backgroundss4 text-dark smb ">
      <img src="<?= base_url('images/'); ?>pesan2.png" style=" width: 70%; margin-top: 150px; margin-left: 150px;">
    </div>
    <div class="col-sm-6 p-3 backgroundss4 text-dark smb">
      <div class="container mt-5" Style="padding-top:120px">
        <h2 style="font-weight:1000">DATA PESANAN</h2>
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
        <div>
          <h2>
            Total : Rp. <?= $total_fix ?>
          </h2>
        </div>
        <form action="<?= base_url(); ?>home/beli" method="POST" enctype="multipart/form-data">
          <div class="mb-3">
            <label for="formFile" class="form-label">Upload bukti pembayaran</label>
            <input class="form-control" type="file" id="formFile" name="bukti">
          </div>
          <input type="submit" name="submit" value="Pesan" class="btn text-light backgroundss">

        </form>
      </div>
    </div>
  </div>
  <div class=" mt-10 backgroundss" style="margin-top: 100px;">
    <div class="mt-100px p-5 text-white backgroundss" style="padding-left: 100%;padding-right: 100%;">
      <div class="row">
        <h1 align="center">FLORASOL</h1>
        <h6 align="center" style="font-weight:100; font-size:small">Copyright © 2022 PT. Florasol All Rights Reserved</h6>
      </div>
    </div>
  </div>



</body>

</html>