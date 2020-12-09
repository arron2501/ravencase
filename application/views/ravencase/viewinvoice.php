<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link href="<?php echo base_url('vendor/fontawesome-free/css/stylesheet.css') ?>" rel="stylesheet" type="text/css">

    <title>Your invoice | Raven Case</title>
    <link rel="shortcut icon" href="<?php base_url(); ?>img/shortcut.png" type="image/x-icon">
    <style>
      body, html {
        height: 100%;
        margin: 0;
      }
      .container {
        font-family: 'doubledecker_dots_demoregular';
      }
      .centered {
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);order: 3px solid #89D5D2;
      }
      @media print {
        #printPageButton {
          display: none;
        }
        #homeButton {
          display: none;
        }
      }
      @page {
        size: auto;
        margin: 0mm;
      }
    </style>
  </head>
  <body>

    <div class="container pt-5 mb-5 text-center">
      <img src="<?php base_url(); ?>img/logo.png" class="mx-auto mb-3 stroke" style="border: 1px;" width="100px" alt="Raven Store">
    </div>

    <div class="container text-center justift-content-center">
      <p>Thank you for ordering !</p>
      <div class="col-md-12">
          <h4>Your order details :</h4>
          <h4><?php echo $this->session->userdata('ses_fullname');?></h4>
          <h4><?php echo $this->session->userdata('ses_alamat');?></h4>
          <h4><?php echo $this->session->userdata('ses_telp');?></h4>
          <table class="table table-striped">
              <thead>
                  <tr>
                      <th>Produk</th>
                      <th>Harga</th>
                      <th>Qty</th>
                  </tr>
              </thead>
              <?php foreach($data as $u){ ?>
              <tbody>
                <td><?php echo $u->nama_produk ?></td>
                <td><?php echo $u->harga_satuan ?></td>
                <td><?php echo $u->qty ?></td>
                <?php } ?>
                <?php foreach($subtotal as $s){ ?>
                <tr>
                  <td colspan="2">Subtotal : </td>
                  <td colspan="2">Rp <?php echo $s->subtotal; ?></td>
                </tr>
                <?php } ?>
              </tbody>


          </table>
      </div>
      <button id="printPageButton" onClick="window.print();">print</button>

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
            jQuery('#detail_cart').load("<?php echo base_url();?>load_order");
        });
      </script>

  </body>
</html>
