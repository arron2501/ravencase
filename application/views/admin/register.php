<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Register | Raven Case</title>
  <link rel="shortcut icon" href="img/shortcut.png" type="image/x-icon">

  <!-- Custom fonts for this template-->
  <link href="<?php echo base_url('vendor/fontawesome-free/css/all.min.css') ?>" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="<?php echo base_url('css/sb-admin-2.min.css') ?>" rel="stylesheet">
  <style>
    .centered {
      position: absolute;
      top: 50%;
      left: 50%;
      transform: translate(-50%, -50%);
    }
    .bg-register-image {
      background-image : url('<?php echo base_url('img/loginimage.jpg'); ?>');
      background-size: 350px;
    }
  </style>
</head>

<body class="bg-gradient-primary">

  <div class="container centered">

    <div class="card o-hidden border-0 shadow-lg my-5">
      <div class="card-body p-0">
        <!-- Nested Row within Card Body -->
        <div class="row">
          <div class="col-lg-5 d-none d-lg-block bg-register-image"></div>
          <div class="col-lg-7">
            <div class="p-5">
              <div class="text-center">
                <h1 class="h4 text-gray-900 mb-4">Create an Account!</h1>
              </div>
              <form action="submitregister" method="post" class="user">
                <?php echo $this->session->flashdata('msg');?>
                <div class="form-group">
                  <input type="text" name="fullname" class="form-control form-control-user" placeholder="Full Name">
                </div>
                <div class="form-group">
                  <input type="email" name="email" class="form-control form-control-user" placeholder="Email Address">
                </div>
                <div class="form-group row">
                  <div class="col-sm-6 mb-3 mb-sm-0">
                    <input type="password" name="password" class="form-control form-control-user" placeholder="Password">
                  </div>
                  <div class="col-sm-6">
                    <input type="password" name="password_conf" class="form-control form-control-user" placeholder="Repeat Password">
                  </div>
                </div>
                <div>
                  <button type="submit" class="btn btn-primary btn-user btn-block">Register</button>
                </div>
              </form>
              <hr>
              <div class="text-center">
                <a class="small" href="login">Already have an account? Login!</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

  </div>

  <!-- Bootstrap core JavaScript-->
  <script src="<?php echo base_url ('vendor/jquery/jquery.min.js') ?>"</script>
  <script src="<?php echo base_url ('vendor/bootstrap/js/bootstrap.bundle.min.js') ?>"</script>

  <!-- Core plugin JavaScript-->
  <script src="<?php echo base_url ('vendor/jquery-easing/jquery.easing.min.js') ?>"</script>

  <!-- Custom scripts for all pages-->
  <script src="<?php echo base_url ('js/sb-admin-2.min.js') ?>"</script>

</body>

</html>
