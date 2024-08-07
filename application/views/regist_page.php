<html>
<link href=" <?= base_url('assets/'); ?>bootstrap.css" rel="stylesheet">

<link href=" <?= base_url('assets/'); ?>style.css" rel="stylesheet">


<head>
</head>

<body>
<section class="vh-100">
  <div class="container-fluid h-custom">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-md-9 col-lg-6 col-xl-5">
      </div>
      <div class="col-md-8 col-lg-6 col-xl-4 offset-xl-1">


      <form action="<?php echo base_url();?>login/aksi_regist" method="POST" enctype="multipart/form-data">
    

          <!-- Email input -->
          <div class="form-outline mb-4">
          <label class="form-label" for="form3Example3" style="font-weight: Bold ">NIK</label>
            <input type="text" id="form3Example3" name="NIK" class="form-control form-control-lg"
              placeholder="Masukkan Username" >
            
          </div>

          <div class="form-outline mb-4">
          <label class="form-label" for="form3Example3" style="font-weight: Bold ">Username</label>
            <input type="text" id="form3Example3" name="username" class="form-control form-control-lg"
              placeholder="Masukkan Username" >
            
          </div>

          <!-- Password input -->
          <div class="form-outline mb-3">
          <label class="form-label" for="form3Example4" style="font-weight: Bold ">Password</label>
            <input type="password" name=password id="form3Example4" class="form-control form-control-lg"
              placeholder="Enter password" />
            
          </div>

          <div class="d-flex justify-content-between align-items-center">
            <!-- Checkbox -->

          <div class="text-center text-lg-start mt-4 pt-2">
            <button type="submit" class="btn backgroundss btn-lg text-white"
              style="padding-left: 2.5rem; padding-right: 2.5rem;">Regist</button>
            <p class="small fw-bold mt-2 pt-1 mb-0">Sudah Punya Akun ?<a href="<?= base_url(); ?>login/index"
                class="link-danger">Login</a></p>
          </div>

        </form>
      </div>
    </div>
  </div>
  <div
    class="d-flex flex-column flex-md-row text-center text-md-start justify-content-between py-4 px-4 px-xl-5 backgroundss">
    <!-- Copyright -->
    <div class="text-white mb-3 mb-md-0" align="center">
    </div>
    <!-- Copyright -->

    <!-- Right -->
    <!-- Right -->
  </div>
</section>
</body>

</html>