<!doctype html>
<?php
  
?>

<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/css/font-awesome.min.css" rel="stylesheet">
    <link href="assets/css/style.css" rel="stylesheet">

    <title>Login</title>
  </head>
  <body>
    <section class="form-01-main">
      <div class="form-cover">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="form-sub-main">
              <div class="_main_head_as">
                <a href="#">
                  <img src="assets/images/ve.jpg">
                </a>
              </div>
              
            <form action="<?php echo base_url();?>login/aksi_login" method="POST" enctype="multipart/form-data">
              <div class="form-group">
                  <input id="email" name="username" class="form-control _ge_de_ol" type="text" placeholder="username">
              </div>

              <div class="form-group">                                              
                <input id="password" type="password" class="form-control" name="password" placeholder="********" >
                <i toggle="#password" class="fa fa-fw fa-eye toggle-password field-icon"></i>
              </div>

              <div>
                <p>belum punya akun?</p>
                <a  style="color:white" href="register.php">Daftar</a>
              </div>

              <div class="form-group">
                <div class="check_box_main">
                  <a href="#" class="pas-text"></a>
                </div>
              </div>

              <input type="submit" name="submit" value="Log In">

            </form>

                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      </div>
    </section>
  </body>
</html>