<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link href="<?php echo base_url('vendor/fontawesome-free/css/stylesheet.css') ?>" rel="stylesheet" type="text/css">

    <title>Our Products | 100% QUALITY CUSTOM CASES | Raven Case</title>
    <link rel="shortcut icon" href="<?php base_url(); ?>img/shortcut.png" type="image/x-icon">
    <style>
      body, html {
        padding-top: 40px;
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
            <li class="nav-item active">
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
      <div class="row mb-5 mt-3">
          <div class="col-md-7">
              <h1>Produk</h1>
              <div class="row">
              <?php foreach ($data as $row) : ?>
                  <div class="col-md-4 mb-5 justify-content-center">
                      <div class="thumbnail">
                          <img class="mb-3" width="200" src="<?php echo base_url().'img/'.$row->gambar_produk;?>">
                          <div class="caption">
                              <h4><?php echo $row->nama_produk;?></h4>
                              <div class="row">
                                  <div class="col-md-7">
                                      <h5><?php echo 'Rp '.number_format($row->harga_produk);?></h5>
                                  </div>
                                  <div class="col-md-5 mb-3">
                                      <input type="number" name="quantity" id="<?php echo $row->id_produk;?>" value="1" class="quantity form-control">
                                  </div>
                              </div>
                              <button class="add_cart btn btn-success btn-block" data-idproduk="<?php echo $row->id_produk;?>" data-namaproduk="<?php echo $row->nama_produk;?>" data-hargaproduk="<?php echo $row->harga_produk;?>">Add To Cart</button>
                          </div>
                      </div>
                  </div>
              <?php endforeach;?>

              </div>

          </div>

          <!-- Keranjang -->
          <div class="col-md-5">
              <h1>Shopping Cart</h1>
              <table class="table table-striped text-center">
                  <thead>
                      <tr>
                          <td>Produk</td>
                          <td>Harga</td>
                          <td>Qty</td>
                          <td>Subtotal</td>
                          <td>Aksi</td>
                      </tr>
                  </thead>
                  <tbody id="detail_cart">

                  </tbody>

              </table>
              <a href="checkout"><button type="submit" class="btn btn-primary btn-block">Checkout</button></a>
          </div>
          <!-- END Keranjang -->

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
    <script type="text/javascript">
        jQuery.noConflict()
        jQuery(document).ready(function(e){
            jQuery('.add_cart').click(function(){
                var id_produk    = jQuery(this).data("idproduk");
                var nama_produk  = jQuery(this).data("namaproduk");
                var harga_produk = jQuery(this).data("hargaproduk");
                var quantity     = jQuery('#' + id_produk).val();
                jQuery.ajax({
                    url : "<?php echo base_url();?>add_to_cart",
                    method : "POST",
                    data : {id_produk: id_produk, nama_produk: nama_produk, harga_produk: harga_produk, quantity: quantity},
                    success: function(data){
                        jQuery('#detail_cart').html(data);
                    }
                });
            });

            // Load shopping cart
            jQuery('#detail_cart').load("<?php echo base_url();?>load_cart");

            //Hapus Item Cart
            jQuery(document).on('click','.hapus_cart',function(){
                var row_id=jQuery(this).attr("id"); //mengambil row_id dari artibut id
                jQuery.ajax({
                    url : "<?php echo base_url();?>hapus_cart",
                    method : "POST",
                    data : {row_id : row_id},
                    success :function(data){
                        jQuery('#detail_cart').html(data);
                    }
                });
            });
        });
      </script>
  </body>
</html>
