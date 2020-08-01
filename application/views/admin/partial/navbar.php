<!-- Navbar -->
<nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
    </ul>
    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- Notifications Dropdown Menu -->
      <li class="nav-item dropdown">
        <a class="nav-link text-dark" data-toggle="dropdown" href="#">
          <i class="fa fa-user"></i>
          <?= $this->session->nama ?>
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <span class="dropdown-item dropdown-header">My Profile</span>
          <div class="dropdown-divider"></div>
          <!-- nama -->
          <a class="dropdown-item">
            <i class="fa fa-user mr-2"></i>Nama
            <span class="float-right"><?= $this->session->nama ?></span>
          </a>
          <!--  -->
          <!-- nama -->
          <a class="dropdown-item">
            <i class="fa fa-user mr-2"></i>Username
            <span class="float-right"><?= $this->session->un ?></span>
          </a>
          <!--  -->
          <div class="dropdown-divider"></div>
          <div class="dropdown-item dropdown-footer">
            <a class="btn btn-danger" href="<?= base_url('admin/user/out'); ?>">Logout</a>
          </div>
        </div>
      </li>
    </ul>
</nav>
  <!-- /.navbar -->