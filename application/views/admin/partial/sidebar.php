<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="#" class="brand-link">
      <img src="<?php echo base_url()?>/assets/admin/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light">Admin Panel</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          
          <li class="nav-item">
            <a href="<?= base_url()?>admin/" class="nav-link">
              <i class="nav-icon fa fa-home"></i>
              <p>
                Home
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="<?= base_url()?>admin/user" class="nav-link">
              <i class="nav-icon fa fa-user"></i>
              <p>
                User
              </p>
            </a>
          </li>
          
           <li class="nav-item">
            <a href="<?= base_url()?>admin/paket" class="nav-link">
              <i class="nav-icon fa fa-list-ul"></i>
              <p>
                Paket
              </p>
            </a>
          </li>

          <li class="nav-item">
            <a href="<?= base_url()?>admin/artikel" class="nav-link">
              <i class="nav-icon fas fa-newspaper"></i>
              <p>
                Artikel
              </p>
            </a>
          </li>

          <li class="nav-item">
            <a href="<?= base_url()?>admin/galeri" class="nav-link">
              <i class="nav-icon fa fa-picture-o"></i>
              <p>
                Galeri
              </p>
            </a>
          </li>

          <li class="nav-item">
            <a href="<?= base_url()?>admin/testimoni" class="nav-link">
              <i class="nav-icon fa fa-users"></i>
              <p>
                Testimoni
              </p>
            </a>
          </li>

        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>