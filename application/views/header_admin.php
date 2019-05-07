<nav class="navbar navbar-expand-sm navbar-light fixed-top">
  <a class="navbar-brand" href="<?php echo base_url(); ?>">
  	<img src="<?php echo base_url('assets/images/logo_itera.png')?>">
  </a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

 <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url('admin');?>">HOME <span class="sr-only">(current)</span></a>
      </li>   

      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          MAHASISWA
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="<?php echo base_url('admin/c_admin_daftarmhs');?>">DAFTAR MAHASISWA</a>
          <a class="dropdown-item" href="<?php echo base_url('admin/c_admin_berkas');?>">BERKAS KERJA PRAKTIK</a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url('admin/c_admin_jadwal');?>">SEMINAR</a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url('admin/#');?>">LIVE CHAT</a>
      </li>

      <?php
        if(empty($nama)){
      ?>
      <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url('c_login');?>">LOGIN</a>
      </li>
      <?php
        }else{
      ?>
      <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url('c_login/keluar');?>">LOGOUT</a>
      </li>
      <?php
        }
      ?>

	</ul>
 </div>
</nav>