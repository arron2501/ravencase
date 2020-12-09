<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link href="<?php echo base_url('vendor/fontawesome-free/css/stylesheet.css') ?>" rel="stylesheet" type="text/css">

    <title>Change Password | 100% QUALITY CUSTOM CASES | Raven Case</title>
    <link rel="shortcut icon" href="<?php base_url(); ?>img/shortcut.png" type="image/x-icon">
    <style>
      body, html {
        padding-top: 50px;
      }
      .container {
        font-family: 'doubledecker_dots_demoregular';
      }
      .jumbotron {
        margin-bottom: 20px;
      }
      .blackshadow {
        text-shadow: 2px 2px black;
      }
      .whiteshadow {
        text-shadow: 2px 2px white;
      }
      .displayastro {
        background-image: url('<?php base_url(); ?>img/displayastro.jpg');
        background-size: cover;
        height: 1000px;
        padding-top: 40px;
        text-align: center;
      }
      .displaydoodle {
        background-image: url('<?php base_url(); ?>img/displaydoodle.jpg');
        background-size: cover;
        height: 1000px;
        padding-top: 50px;
        text-align: center;
      }
      .displayneon {
        background-image: url('<?php base_url(); ?>img/displayneon.jpg');
        background-size: cover;
        height: 1000px;
        padding-top: 45px;
        text-align: center;
      }
      .dropdown:hover > .dropdown-menu {
        display: block;
      }
      a:link {
        text-decoration: none;
      }
      a:hover {
        color: #DE6B28;
      }
      .parallax {
        height: auto;
        background-attachment: fixed;
        background-size: cover;
        background-position: 50% 50%;
      }
      .intro {
        background-image: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url('<?php base_url(); ?>img/landing.jpg');
        height: 100%;
        background-position: center;
        background-repeat: no-repeat;
        background-size: cover;
        margin-bottom: 20px;
      }
      .blur {
        filter: blur(8px);
        -webkit-filter: blur(8px);
      }
      .centered {
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
      }
      .stroke {
        -webkit-filter: drop-shadow(1px 1px 0 white)
                        drop-shadow(-1px 1px 0 white)
                        drop-shadow(1px -1px 0 white)
                        drop-shadow(-1px -1px 0 white);

        filter: drop-shadow(1px 1px 0 white)
                drop-shadow(-1px 1px 0 white)
                drop-shadow(1px -1px 0 white)
                drop-shadow(-1px -1px 0 white);
      }
      .navbar {
        border: 3px solid #89D5D2;
      }
    </style>
  </head>
  <body>
    <!-- START NAVBAR -->
    <nav class="navbar navbar-expand-md navbar-brand-center fixed-top navbar-light" style="background-color: #BBF1F1">
      <div class="container">
        <a class="navbar-brand d-md-none" href="#"><img src="<?php base_url(); ?>img/logo.png" width="30" height="30" alt="Raven Store"></a>
        <a class="navbar-brand d-none d-md-block" href="home">
          <img src="<?php base_url(); ?>img/logo.png" class="align-top" width="30" height="30" alt="Raven Store">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarToggle" aria-controls="navbarToggle" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-between" id="navbarToggle">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link" href="home">HOME </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="customcase">PRODUCTS </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">FAQ</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">ABOUT US</a>
            </li>
          </ul>
          <ul class="navbar-nav navbar-right">
            <?php if ($this->session->userdata('masuk') != TRUE): ?>
              <li>
                <a href="login" class="btn">LOGIN</a>
                <a href="register" class="btn btn-outline-primary">SIGN UP</a>
              </li>
              <?php else: ?>
                <li class="nav-item">
                  <a class="nav-link" href="checkout">
                    <img src="<?php base_url(); ?>img/cart.png" class=" align-top" width="23" height="23" alt="Cart">
                  </a>
                </li>
                <li class="nav-item active dropdown">
                  <a class="nav-link" href="#">
                    <img class="img-profile rounded-circle align-top" width="25" height="25" src="<?php echo base_url('img/'.$this->session->userdata('ses_pic')); ?>" />
                    &nbsp;<?php echo $this->session->userdata('ses_fullname');?>
                  </a>
                  <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                    <a class="dropdown-item" href="vieworders">My Orders</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="editprofile">Edit Profile</a>
                    <a class="dropdown-item" href="change_password">Change Password</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="logout">Logout</a>
                  </div>
                </li>
            <?php endif; ?>
          </ul>
        </div>
      </div>
    </nav>
    <!-- END NAVBAR -->
    <div class="container">
      <h1 class="text-uppercase font-weight-light text-center mt-5 mb-5">Change Password</h1>
    <div class="row justify-content-center">
      <div class="col-md-4">
          <form action="submitchange_password" method="post">
            <div class="form-group">
              <label for="password">Password Lama</label>
              <input type="password" class="form-control" name="old" value="<?php echo set_value('old');?>" required placeholder="Masukkan password lama anda">
            </div>
            <div class="form-group">
              <label for="nama_produk">Password Baru</label>
              <input type="password" class="form-control" name="new" value="<?php echo set_value('new');?>"  required placeholder="Masukkan password baru anda">
            </div>
            <div class="form-group">
              <label for="nama_produk">Ketik Ulang Passowrd Baru</label>
              <input type="password" class="form-control" name="re_new" value="<?php echo set_value('re_new'); ?>" required placeholder="Masukkan kembali password baru anda">
            </div>
            <div class="text-center">
              <button type="submit" class="btn btn-primary mt-3">Change Password</button>
            </div>
          </form>
      </div>
    </div>
  </div>

    <div class="container">
      <div class="row justify-content-center fixed-bottom bg-dark">
        <div class="pt-3 text-light">
          <p>&copy; 2020 Raven Store. All Rights Reserved.</p>
        </div>
      </div>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script type="text/javascript" src="<?php echo base_url().'assets/js/jquery-2.2.3.min.js'?>"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script type="text/javascript" src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>
