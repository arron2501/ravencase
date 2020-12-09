<!DOCTYPE html>
<html lang="en">

<head>
  <?php $this->load->view("_includes/head.php") ?>
  <title>List Produk | Admin Page | Raven Case</title>
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

      <li class="nav-item active">
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
      <li class="nav-item">
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
          <div class="d-sm-flex align-items-center justify-content-center mt-5 mb-2">
            <h1 class="mb-0 text-gray-800 font-weight-bold text-uppercase">List Produk</h1>
          </div>

          <div class="d-sm-flex align-items-center justify-content-center mb-5">
            <h3 class="text-dark font-weight-light">Tambah, Edit, Hapus, dan Cari Produk</h3>
          </div>

          <div class="row justify-content-center">
            <div class="col-md-3 mb-3 d-sm-flex align-items-center">
              <a class="btn btn-outline-primary shadow-sm" href="tambah">
                <span class="fa fa-plus"></span> Tambah Produk
              </a>
            </div>
            <div class="col-md-3">
              <form action="search" method="get">
                <div class="input-group mb-3">
                  <input type="text" class="form-control shadow-sm" placeholder="Cari Produk (ID Produk / Nama Produk)" name="keyword" aria-describedby="basic-addon2">
                  <div class="input-group-append">
                    <button class="btn btn-outline-primary shadow-sm" type="submit">
                      <span class="fa fa-search"></span>
                    </button>
                  </div>
                </div>
              </form>
            </div>
          </div>

          <!-- Content Row -->
          <div class="row justify-content-center">
            <div class="col-md-6 text-center">
              <div class="table-responsive">
                <table class="table table-hover table-striped table-dark mt-3 mb-5" id="dataTable" width="100%" cellspacing="0">
                  <thead class="text-center font-weight-bold text-uppercase">
                    <tr>
                			<th>ID</th>
                			<th>Nama Produk</th>
                			<th>Harga Produk</th>
                			<th>Gambar Produk</th>
                      <th>Action</th>
  		              </tr>
                  </thead>
                  <tbody>
                    <?php
                    foreach ($data as $u): ?>
                		<tr>
                			<td style="vertical-align: middle;"><?php echo $u->id_produk ?></td>
                			<td style="vertical-align: middle;"><?php echo $u->nama_produk ?></td>
                			<td style="vertical-align: middle;"><?php echo $u->harga_produk ?></td>
                      <td><img width="50" height="50" style="vertical-align: middle;" src="<?php echo ('img/'.$u->gambar_produk) ?>" class="img-fluid rounded mx-auto d-block" /></td>
                      <td class="text-center" style="vertical-align: middle;">
                        <a href="<?php echo site_url('admin/produk/edit/'.$u->id_produk) ?>"class="btn btn-small text-warning">
                          <i class="fas fa-pen"></i>
                        </a>
                        <a href="<?php echo site_url('admin/produk/hapus/'.$u->id_produk) ?>" class="btn btn-small text-danger">
                          <i class="fas fa-trash"></i>
                        </a>
                      </td>
                		</tr>
                		<?php endforeach; ?>
                    </tbody>
                  </table>
                </div>
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
