<!-- Sidebar -->
<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

  <!-- Sidebar - Brand -->
  <a class="sidebar-brand d-flex align-items-center justify-content-center" href="<?= base_url('dashboard') ?>">
    <div class="sidebar-brand-icon rotate-n-15">
      <!-- ICON -->
      <!-- <i class="fas fa-laugh-wink"></i> -->
    </div>
    <div class="sidebar-brand-text mx-3">LAPEMAS</div>
  </a>

  <!-- Divider -->
  <hr class="sidebar-divider my-0">

  <!-- Nav Item - Dashboard -->
  <li class="nav-item active">
    <a class="nav-link" href="<?= base_url('dashboard') ?>">
      <i class="fas fa-fw fa-tachometer-alt"></i>
      <span>Dashboard</span></a>
  </li>

  <!-- Divider -->
  <hr class="sidebar-divider">

  <!-- Heading -->
  <div class="sidebar-heading">
    Laporan
  </div>
  <!-- Nav Item - Charts -->
  <li class="nav-item">
    <a class="nav-link" href="<?= base_url('dashboard/laporan') ?>">
      <i class="fas fa-comment"></i>
      <span>laporan Warga</span></a>
  </li>

  <!-- Heading -->
  <div class="sidebar-heading">
    Manage
  </div>
  <!-- Nav Item - Charts -->
  <li class="nav-item">
    <a class="nav-link" href="#">
      <i class="fas fa-fw fa-list-ul"></i>
      <span>Kategori</span></a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="#">
      <i class="fas fa-fw fa-newspaper"></i>
      <span>Berita</span></a>
  </li>

  <!-- batas suara masyarakat -->
  <hr class="sidebar-divider">




  <!-- Divider -->
  <hr class="sidebar-divider d-none d-md-block">

  <!-- Sidebar Toggler (Sidebar) -->
  <div class="text-center d-none d-md-inline">
    <button class="rounded-circle border-0" id="sidebarToggle"></button>
  </div>

</ul>
<!-- End of Sidebar -->