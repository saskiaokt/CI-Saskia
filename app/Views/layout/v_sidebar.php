<!-- =============================================== -->

<!-- Left side column. contains the sidebar -->
<aside class="main-sidebar">
  <!-- sidebar: style can be found in sidebar.less -->
  <section class="sidebar">
    <!-- Sidebar user panel -->
    <div class="user-panel">
      <div class="pull-left image">
        <img src="<?= (session()->get('foto')) ? base_url('foto/' . session()->get('foto')) : base_url('foto/default.png') ?>?>" class="img-circle" alt="<?= session()->get('nama_user') ?>">
      </div>
      <div class="pull-left info">
        <p><?= session()->get('nama') ?></p>
        <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
      </div>
    </div>
    <!-- sidebar menu: : style can be found in sidebar.less -->
    <ul class="sidebar-menu" style="margin-top: 30px;" data-widget="tree">
      <li class="header">MENU</li>
      <?php if (session()->get('role') == 'Admin') { ?>
        <li class="">
          <a href="<?= base_url('admin') ?>" class="<?= ($isi == 'v_admin') ? 'bg-green' : '' ?>">
            <i class="fa fa-dashboard"></i> <span>Dashboard</span>
          </a>
        </li>
        <li class="">
          <a href="<?= base_url('/event') ?>" class="<?= ($isi == 'admin/event/v_index' || $isi == 'admin/event/v_tambah' || $isi == 'admin/event/v_edit' || $isi == 'admin/event/v_detail') ? 'bg-green' : '' ?>">
            <i class="fa fa-bullhorn"></i> <span>Data Event</span>
          </a>
        </li>
        <li class="">
          <a href="<?= base_url('/profil_website') ?>" class="<?= ($isi == 'admin/profil_website/v_index') ? 'bg-green' : '' ?>">
            <i class="fa fa-institution"></i> <span>Profil Website</span>
          </a>
        </li>
        <li class="">
          <a href="<?= base_url('/daftar') ?>" class="<?= ($isi == 'admin/pendaftaran/v_index' || $isi == 'admin/pendaftaran/v_detail' || $title == 'Data Pendaftaran') ? 'bg-green' : '' ?>">
            <i class="fa fa-file-text"></i> <span>Pendaftaran</span>
          </a>
        </li>
      <?php } ?>
      <li class="header">MENU TAMBAHAN</li>
      <?php if (session()->get('role') == 'Admin') { ?>
        <li class="">
          <a href="<?= base_url('/pengguna') ?>" class="<?= ($isi == 'admin/user/v_index' || $isi == 'admin/user/v_detail') ? 'bg-green' : '' ?>">
            <i class="fa fa-user" aria-hidden="true"></i> <span>Data Pengguna</span>
          </a>
        </li>
      <?php } ?>
      <li><a href="<?= base_url('/auth/logout') ?>"><i class="fa fa-circle-o text-red"></i> <span>Keluar</span></a></li>
    </ul>
  </section>
  <!-- /.sidebar -->
</aside>