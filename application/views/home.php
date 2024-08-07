<html>

<link href=" <?php base_url('assets/bootstrap.css'); ?>" rel="stylesheet">

<link href=" <?php base_url('assets/style.css'); ?>" rel="stylesheet">

<head>
  <title>Florasol</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
  <link href="simak2/assets/layout.css" rel="stylesheet" type="text/css" media="all">
  <link href=" assets/bootstrap.css" rel="stylesheet">
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

      <?php
      echo $this->session->userdata['data_user'][0]['username'];
      //echo'<pre>'; print_r($this->session->userdata['data_user']); echo '</pre>'; die();

      ?>
    </div>
    <div>
      <ul class="nav justify-content-end navbar-nav">
        <li class="nav-item">
          <a class="nav-link" href="<?php echo base_url(); ?>login/logout">Logout</a>
        </li>
      </ul>
    </div>
  </nav>



  </nav>
  <div id="demo" class="carousel slide" data-bs-ride="carousel">

    <!-- The slideshow/carousel -->
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="images/klg2.jpg" alt="Los Angeles" class="d-block" style="width:100%">
      </div>
    </div>
    <div class=" backgroundss4 " style="margin-top: 10px;">
      <div class=" p-5 text-white backgroundss4">
        <div class="row">
          <div class="col-sm-6 backgroundss4 text-dark ">
            <div class="borders">
              <h3 align="center" style="font-weight:1000 ;">BBM BERKUALITAS</h3>
              <img class="d-block mx-auto" src="images/Asset 8.png" style="width:300px; margin-top:30px;margin-bottom:10px ">
              <h4 align="center" style="margin-top:30px">Bahan Bakar dengan kualitas terjamin</h4>
            </div>
          </div>
          <div class="col-sm-6  backgroundss4 text-dark smb ">
            <div class="borders">
              <h3 align="center" style="font-weight:1000 ;">HARGA TERJANGKAU</h3>
              <img class="d-block mx-auto" src="images/Asset 5.png" style="width:150px; margin-top:30px; margin-bottom:10px">
              <h4 align="center" style="margin-top:30px"> Harga dijual lebih murah</h4>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class=" mt-10 backgroundss" style="margin-top: 50px;">
      <div class="mt-100px p-5 text-white backgroundss3" style="padding-left: 100%;padding-right: 100%; padding-bottom: 1000px">
        <div class="row">
          <div class="col-sm-4 p-3 backgroundss3 text-white">
            <img src="images/bbm.jpeg" style="width: 100%;height: 100%;" class="borderss">
          </div>
          <div class="col-sm-8 p-3 backgrounds3 text-black">
            <h1>TENTANG KAMI</h1>
            <p class="smb">"PT. Florasol adalah suatu perusahaan penyalur BBM PT. Pertamina (PERSERO). Bentuk penyaluran penyaluran yang kami gunakan adalah AMT (Agen Minyak Tanah) dan Pertashop (Pertamina Shop).
              Untuk menguatkan supply BBM di wilayah Nusa Tenggara Timur terutama di daerah Flores Timur, Pertamina mengaktifkan kembali Terminal BBM (TBBM) Larantuka yang sempat di non aktifkan pada 2008. TBBM Larantuka dilengkapi dengan dermaga dengan kapasitas 1.500 DWT untuk menerima pasokan melalui tanker dari Terminat BBM Tenau,"</p>
            <a href="about us & contact us.html" class="btn text-light backgroundss">Baca Selengkapnya</a>
          </div>
        </div>
      </div>
    </div>
    <div class="container-fluid mt-3">
      <div class="row">
        <div class="col p-3 bg-white text-dark">
          <div class="container-fluid" style="margin-top:80px">
            <div class="container mt-3" align="center">
              <h2>PESAN BBM</h2>
              <div class="card" style="width:300px; border: 2px solid">
                <img class="card-img-top" src="images/Asset 3.png" alt="Card image" style="width:25%; align-self: center; margin-bottom: 20px; margin-top: 30px;">Pesan berbagai
                jenis
                bahan bakar disini
                <div class="card-body">
                  <a href="order.html" class="btn text-light backgroundss">Kunjungi</a>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col p-3 bg-white text-dark">
          <div class="container-fluid" style="margin-top:80px">
            <div class="container mt-3" align="center">
              <h2>HUBUNGI KAMI</h2>
              <div class="card" style="width:300px; border: 2px solid">
                <img class="card-img-top" src="images/Asset 4.png" alt="Card image" style="width:25%; align-self: center; margin-bottom: 20px; margin-top: 30px;">Ingin bertanya ?
                hubungi kami
                <div class="card-body">
                  <a href="about us & contact us.html" class="btn text-light backgroundss">Kunjungi</a>
                </div>
              </div>
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
  </div>









</body>

</html>