<!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

      <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
        <div class="sidebar-brand-icon rotate-n-15">
         <i class="fab fa-goodreads"></i>
        </div>
        <div class="sidebar-brand-text mx-3">Aplikasi Pengadaan</div>
      </a>

      <!-- Divider -->
      <hr class="sidebar-divider my-0">

      <!-- Nav Item - Dashboard -->
      <li class="nav-item">
        <a class="nav-link" href="<?=base_url();?>beranda_pemilik/index">
          <i class="fas fa-eye fa-fw"></i>
          <span>Lihat Data Suplier</span></a>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider">

      <!-- Heading -->
      <div class="sidebar-heading">
        Interface
      </div>

      <!-- Nav Item - Pages Collapse Menu -->
      <li class="nav-item">
        <a class="nav-link " href="<?=base_url();?>users">
          <i class="fas fa-user fa-fw"></i>
          <span>Profil User </span>
        </a>
      </li>
    
      <!-- Nav Item - Input Data Collapse Menu -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseInput"
          aria-expanded="true" aria-controls="collapseInput">
           <i class="fas fa-pencil-alt fa-fw"></i>
          <span>Input Data</span>
        </a>
        <div id="collapseInput" class="collapse" aria-labelledby="headinginput" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Input Data </h6>
            <a class="collapse-item"href="<?=base_url();?>beranda_pemilik/inputView">Suplier</a>
          </div>
        </div>
      </li>

      <!-- Nav Item - Kelola Data Collapse Menu -->

      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseKelola"
          aria-expanded="true" aria-controls="collapseKelola">
          <i class="fas fa-pen-square fa-fw"></i>
          <span>Kelola Data</span>
        </a>
        <div id="collapseKelola" class="collapse" aria-labelledby="headingKelola" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Kelola Data </h6>
            <a class="collapse-item" href="<?=base_url();?>beranda_pemilik/updateView">Suplier</a>
          </div>
        </div>
      </li>
      <!-- Nav Item - Cetak Data Collapse Menu -->

      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseCetak"
          aria-expanded="true" aria-controls="collapseCetak">
          <i class="fas fa-print fa-fw"></i>
          <span>Cetak Data</span>
        </a>
        <div id="collapseCetak" class="collapse" aria-labelledby="headingCetak" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Cetak Data </h6>
            <a class="collapse-item" href="<?=base_url();?>beranda_pemilik/ViewBarang">Barang</a>
            <a class="collapse-item" href="<?=base_url();?>beranda_pemilik/ViewPemesanan">Pemesanan</a>
            <a class="collapse-item" href="<?=base_url();?>beranda_pemilik/ViewBarangMasuk">Barang Masuk</a>
          </div>
        </div>
      </li>
      <!-- Nav Item - Log Out -->
      <li class="nav-item">
        <a class="nav-link" href="#" data-toggle="modal" data-target="#logoutModal">
         <i class="fas fa-sign-out-alt fa-fw"></i>
          <span>Log Out</span></a>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider d-none d-md-block">

      <!-- Sidebar Toggler (Sidebar) -->
      <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
      </div>

    </ul>
    <!-- End of Sidebar -->
