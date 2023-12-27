<?php

  $ds = DIRECTORY_SEPARATOR;
  $base_dir = realpath(dirname(__FILE__)  . $ds . '..' . $ds . '..' . $ds . '..') . $ds;
  require_once("{$base_dir}pages{$ds}core{$ds}header.php");

?>
  
  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Dashboard</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="dashboard.php">Home</a></li>
          <li class="breadcrumb-item active">Dashboard Konsumen</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section dashboard">
      <div class="row">

        <!-- Start Ngoding Disini -->
        <form action="proses-tambah-data-pelanggan.php" method="post">
  <div class="form-group">
    <label for="nama"><strong>Nama</strong></label>
    <input type="text" class="form-control" id="nama" name="nama" required>
  </div>
  <div class="form-group">
    <label for="alamat"><strong>Alamat</strong></label>
    <input type="text" class="form-control" id="alamat" name="alamat" required>
  </div>
  <div class="form-group">
    <label for="no_telp"><strong>Nomor Telepon</strong></label>
    <input type="text" class="form-control" id="no_telp" name="no_telp" required>
  </div>
  <div class="form-group">
    <label for="jenis_kelamin"><strong>Jenis Kelamin</strong></label>
    <select class="form-control" id="jenis_kelamin" name="jenis_kelamin">
      <option value="laki-laki">Laki-laki</option>
      <option value="perempuan">Perempuan</option>
    </select>
  </div>
  <button type="submit" class="btn btn-primary"><strong>Tambah Data</strong></button>
</form>


        <!-- End Ngoding Disini -->

      </div>
    </section>

  </main><!-- End #main -->


<?php
  require_once("{$base_dir}pages{$ds}core{$ds}footer.php");
?> 