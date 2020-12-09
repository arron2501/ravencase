<!DOCTYPE html>
<html lang="en">

<head>
  <?php $this->load->view("_includes/head.php") ?>
  <title>List Users | Admin Page | Raven Case</title>
</head>

<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">

    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion toggled" id="accordionSidebar">

      <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="<?php echo site_url('admin') ?>">
        <div class="sidebar-brand-icon rotate-n-15">
          <i class="fas fa-laugh-wink"></i>
        </div>
        <div class="sidebar-brand-text mx-3">Hi, Admin!</div>
      </a>

      <!-- Divider -->
      <hr class="sidebar-divider my-0">

      <!-- Nav Item - Dashboard -->
      <li class="nav-item <?php echo $this->uri->segment(2) == '' ? : '' ?>">
        <a class="nav-link" href="<?php echo site_url('admin') ?>">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Home</span>
        </a>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider">

      <!-- Heading -->
      <div class="sidebar-heading">
        Menu
      </div>

      <li class="nav-item">
        <a class="nav-link" href="produk">
          <i class="fas fa-fw fa-cog"></i>
          <span>List Produk</span>
        </a>
      </li>

      <!-- Nav Item - Pages Collapse Menu -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
          <i class="fas fa-fw fa-cog"></i>
          <span>List Order</span>
        </a>
        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Sales :</h6>
            <a class="collapse-item" href="orders">Orders</a>
            <a class="collapse-item" href="detailorders">Detail Orders</a>
          </div>
        </div>
      </li>

      <!-- Nav Item - Charts -->
      <li class="nav-item active">
        <a class="nav-link" href="users">
          <i class="fas fa-fw fa-users"></i>
          <span>List Users</span>
        </a>
      </li>


      <li class="nav-item">
        <a class="nav-link" href="changepassword">
          <i class="fas fa-fw fa-pen-alt"></i>
          <span>Ganti Password</span>
        </a>
      </li>

      <!-- Divider -->


      <!-- Heading -->


      <!-- Divider -->
      <hr class="sidebar-divider d-none d-md-block">

      <!-- Sidebar Toggler (Sidebar) -->
      <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
      </div>

    </ul>

    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">

        <!-- Topbar -->
        <?php $this->load->view("_includes/navbar.php") ?>
        <!-- End of Topbar -->

        <!-- Begin Page Content -->
        <div class="container-fluid text-center">

          <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-center mt-5">
            <h1 class="mb-0 text-dark text-uppercase font-weight-bold">List Users</h1>
          </div>
          <div class="d-sm-flex align-items-center justify-content-center mb-5">
            <h3 class="mb-0 text-dark font-weight-light">Daftar user yang teregistrasi</h3>
          </div>

          <!-- Content Row -->
          <div class="row justify-content-center">
            <div class="col-md-10 text-center">
              <a class="btn btn-outline-primary shadow-sm mb-5" href="registeradmin">
                <span class="fa fa-plus"></span> Tambah Admin
              </a>
              <table class="table table-hover table-striped table-dark mg-5">
                <thead class="text-uppercase font-weight-bold">
		              <tr>
              			<th>No</th>
              			<th>Email</th>
              			<th>Fullname</th>
              			<th>Alamat</th>
                    <th>Telp</th>
		              </tr>
                </thead>
              		<?php
              		$no = 1;
              		foreach($data as $u){
              		?>
              		<tr>
              			<td><?php echo $no++ ?></td>
              			<td><?php echo $u->email ?></td>
              			<td>
                      <?php if ($u->fullname == $this->session->userdata('ses_fullname')): ?>
                        <?php echo $u->fullname ?> (You)
                      <?php else: ?>
                        <?php echo $u->fullname ?>
                      <?php endif; ?>
                    </td>
                    <td><?php echo $u->alamat ?></td>
                    <td><?php echo $u->telp ?></td>
              		</tr>
              		<?php } ?>
	              </table>
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