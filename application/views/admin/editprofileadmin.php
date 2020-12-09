<!DOCTYPE html>
<html lang="en">

<head>
  <?php $this->load->view("_includes/head.php") ?>
  <title>Edit Profile | Admin Page | Raven Case</title>
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
          <div class="d-sm-flex align-items-center justify-content-center mt-5">
            <h1 class="mb-0 text-dark text-uppercase font-weight-bold">Edit Profile</h1>
          </div>
          <div class="d-sm-flex align-items-center justify-content-center mb-5">
            <h3 class="mb-0 text-dark font-weight-light">Masukkan nama, alamat, dan telp yang baru</h3>
          </div>

          <!-- Content Row -->
          <div class="row justify-content-center">
            <div class="col-md-6">
              <form action="<?php echo base_url(). 'admin/editprofileadmin/update_admin'; ?>" method="post" enctype="multipart/form-data">
                <form action="<?php echo base_url(). 'admin/editprofileadmin/update_admin'; ?>" method="post" enctype="multipart/form-data">
                  <div class="form-group">
                    <label for="Email">Email</label>
                    <input type="hidden" name="id" class="form-control" value="<?php echo $this->session->userdata('ses_id');?>">
                    <input type="text" name="email" class="form-control" value="<?php echo $this->session->userdata('ses_email');?>">
                  </div>
                  <div class="form-group">
                    <label for="Nama">Nama</label>
                    <input type="text" name="fullname" class="form-control" value="<?php echo $this->session->userdata('ses_fullname');?>">
                  </div>
                  <div class="form-group">
                    <label for="Alamat">Alamat</label>
                    <input type="text" name="alamat" class="form-control" value="<?php echo $this->session->userdata('ses_alamat');?>">
                  </div>
                  <div class="form-group">
                    <label for="Telp">Telp</label>
                    <input type="tel" name="telp" class="form-control" value="<?php echo $this->session->userdata('ses_telp');?>">
                  </div>
                  <div class="form-group">
                    <label for="Pic">Profile Picture</label>
                    <input type="file" class="form-control-file" name="pic" accept="image/jpeg, image/png">
                  </div>
                  <div class="text-center">
                    <button type="submit" class="btn btn-primary mt-3">Save Changes</button>
                  </div>
                </form>
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
