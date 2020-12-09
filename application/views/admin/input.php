<!DOCTYPE html>
<html lang="en">

<head>
  <?php $this->load->view("_includes/head.php") ?>
  <title>Tambah Produk | Admin Page | Raven Case</title>
</head>

<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">

    <!-- Sidebar -->
    <?php $this->load->view("_includes/sidebar.php") ?>
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">

        <!-- Topbar -->
        <?php $this->load->view("_includes/navbar.php") ?>
        <!-- End of Topbar -->

        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-center mb-2">
            <h1 class="mb-0 text-dark text-uppercase font-weight-bold mt-5">Tambah Produk</h1>
          </div>
          <div class="d-sm-flex align-items-center justify-content-center mb-4">
            <h3 class="mb-0 text-dark text-dark font-weight-light mb-4">Masukkan nama, harga, dan nama gambar produk</h3>
          </div>

          <!-- Content Row -->
          <div class="row justify-content-center">
            <div class="col-md-4">
              	<form action="<?php echo base_url(). 'admin/produk/tambah'; ?>" method="post" enctype="multipart/form-data">
                  <div class="form-group">
                    <label for="nama_produk">Nama Produk</label>
                    <input type="text" class="form-control" name="nama_produk" placeholder="Masukkan nama produk">
                  </div>
                  <div class="form-group">
                    <label for="nama_produk">Harga Produk</label>
                    <input type="text" class="form-control" name="harga_produk" placeholder="Masukkan harga produk">
                  </div>
                  <div class="form-group">
                    <label for="nama_produk">Gambar Produk</label>
                    <input type="file" class="form-control-file" name="gambar_produk" accept="image/jpeg, image/png">
                  </div>
                  <div class="text-center">
                    <button type="submit" class="btn btn-primary mt-3">Tambah Produk</button>
                  </div>
              	</form>
            </div>
          </div>
          <!-- Content Row -->
        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->

      <!-- Footer -->
      <?php $this->load->view("_includes/footer.php") ?>
      <!-- End of Footer -->

    </div>
    <!-- End of Content Wrapper -->

  </div>
  <!-- End of Page Wrapper -->

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <!-- Logout Modal-->
  <?php $this->load->view("_includes/modal.php") ?>

  <!-- Bootstrap core JavaScript-->
  <?php $this->load->view("_includes/javascript.php") ?>
</body>

</html>
