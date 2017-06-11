<div class="logo-wrapper">
    <div class="container">
        <div class="row">
            <div class="col-md-1 col-sm-12 col-xs-12 header-logo text-center">
                <a class="navbar-brand" href="<?php echo base_url(); ?>">
                    <img src="<?=base_url()?>assets/images/instansi-logo.png" class="img-responsive" width="85" height="100" alt="">
                </a>
            </div>
            <div class="col-md-11 col-xs-12 header-title">
                <a href="<?php echo base_url(); ?>">
                    <h1 style="margin-top: 0;"><strong>Penjaminan Mutu Pendidikan</strong></h1>
                    <h3 style="margin-top: -7px;">Direktorat Jenderal Pendidikan Dasar dan Menengah</h3>
                    <h3 style="margin-top: -7px;">Provinsi Yogyakarta</h3>
                </a>
            </div>
                    </div>
        <!-- end row -->
    </div>
    <!-- end container -->
</div>
<div class="container-fluid">
  <nav class="navbar navbar-toggleable-md navbar-light bg-faded bg-primary">
    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <!-- <a class="navbar-brand" href="#">
      <img src="/assets/brand/bootstrap-solid.svg" width="30" height="30" class="d-inline-block align-top" alt="">
      Bootstrap
    </a> -->
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
      <ul class="navbar-nav container">
        <li class="nav-item active">
          <a class="nav-link " href="<?php echo base_url(); ?>" style="color:#FFF">Beranda <span class="sr-only" >(current)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#" style="color:#FFF">Unduhan</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#" style="color:#FFF">Berita</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" style="color:#FFF" aria-haspopup="true" aria-expanded="false">
            Data Pokok
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
            <a class="dropdown-item" href="<?php echo base_url(); ?>index.php/sekolah">Data Sekolah</a>
			<a class="dropdown-item" href="<?php echo base_url(); ?>index.php/kepsek">Data Kepala Sekolah</a>
            <a class="dropdown-item" href="<?php echo base_url(); ?>index.php/data_peserta_didik">Data Peserta Didik</a>
            <a class="dropdown-item" href="<?php echo base_url(); ?>index.php/data_guru">Data Guru</a>
            <a class="dropdown-item" href="<?php echo base_url(); ?>index.php/data_pegawai">Data Pegawai</a>
            <a class="dropdown-item" href="<?php echo base_url(); ?>index.php/data_prestasi">Data Prestasi</a>
            <a class="dropdown-item" href="<?php echo base_url(); ?>index.php/data_aset">Data Aset Bangunan</a>
			<a class="dropdown-item" href="<?php echo base_url(); ?>index.php/data_aset">Aset Tanah</a>

          </div>
      </li>
    </ul>
  </div>
</nav>
</div>
