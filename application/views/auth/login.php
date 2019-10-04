<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>SKJ</title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/bootstrap.min.css">
    <!-- Fonts -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/fonts/line-icons.css">
    <!-- Main Style -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/main.css">
    <!-- Responsive Style -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/responsive.css">

  </head>

  <body>

    <div class="wrapper-page">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-5 col-md-12 col-xs-12">
            <div class="card">
              <div class="card-header border-bottom text-center">
                <h4 class="card-title">BKPPD Kota Tasikmalaya</h4>
              </div>
              <div class="card-body">
                <center><div id="infoMessage" style="color:#e22a6f"><?php echo $message;?></div></center>
                <form class="form-horizontal m-t-20" action="<?php echo base_url();?>auth/login" method="POST" >
                  <div class="form-group">
                    <input class="form-control" type="text" required="" placeholder="Username" name="identity">
                  </div>
                  <div class="form-group">
                    <input class="form-control" type="password" required="" placeholder="Password" name="password">
                  </div>
                  <div class="form-group">
                    <div class="custom-control custom-checkbox">
                      <input type="checkbox" class="custom-control-input" id="customCheck1">
                      <label class="custom-control-label" for="customCheck1">Ingat Saya</label>
                    </div>
                  </div>
                  <div class="form-group text-center m-t-20">
                    <button class="btn btn-common btn-block" type="submit">Masuk</button>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Preloader -->
    <div id="preloader">
      <div class="loader" id="loader-1"></div>
    </div>
    <!-- End Preloader -->

    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="<?php echo base_url();?>assets/js/jquery-min.js"></script>
    <script src="<?php echo base_url();?>assets/js/popper.min.js"></script>
    <script src="<?php echo base_url();?>assets/js/bootstrap.min.js"></script>
    <script src="<?php echo base_url();?>assets/js/jquery.app.js"></script>
    <script src="<?php echo base_url();?>assets/js/main.js"></script>

  </body>
</html>