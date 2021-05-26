<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0">Data Kendaraan</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item">Home</li>
            <li class="breadcrumb-item">Kendaraan</li>
          </ol>
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>
  <!-- /.content-header -->

  <!-- Main content -->
  <div class="content">
    <div class="container-fluid">
      <div class="card">
        <div class="card-header float-left">
          <h2 class="card-title"><b>List Kendaraan</b></h2>
          <div class="float-right">
            <a href="<?php echo base_url() . 'index.php/Backend/data_kendaraan_add' ?>" class="btn btn-primary">tambah</a>
          </div>
        </div>
        <!-- /.card-header -->
        <div class="card-body p-0">
          <table class="table">
            <thead>
              <tr>
                <th style="width: 10px">No</th>
                <th>Tipe</th>
                <th>Merek</th>
                <th>Tahun Dibuat</th>
                <th>Nomor Seri</th>
                <th>Nomor Mesin</th>
                <th>Nomor Kerangka</th>
                <th>Gambar</th>
                <th>Harga</th>
                <th>aksi</th>
              </tr>
            </thead>
            <tbody>
              <?php
              $no = 1;
              foreach ($tbl_kendaraan as $key => $kendaraan) {
              ?>
                <tr>
                  <td><?php echo $no++ ?></td>
                  <td><?php echo $kendaraan->tipe ?></td>
                  <td><?php echo $kendaraan->merek ?></td>
                  <td><?php echo $kendaraan->tahun ?></td>
                  <td><?php echo $kendaraan->no_seri ?></td>
                  <td><?php echo $kendaraan->no_mesin ?></td>
                  <td><?php echo $kendaraan->no_kerangka ?></td>
                  <td><img src="<?php echo base_url() ?>uploads/<?php echo $kendaraan->gambar ?>" alt="" width="100"></td>
                  <td><?php echo $kendaraan->harga ?></td>
                  <td>
                    <a href="<?php echo base_url() . 'index.php/Backend/data_kendaraan_edit/' . $kendaraan->id_kendaraan ?>" class="btn btn-success">Edit</a>
                    <a href="<?php echo base_url() . 'index.php/Backend/data_kendaraan_delete/' . $kendaraan->id_kendaraan ?>" class="btn btn-danger" onclick="return(confirm('apakah anda yakin ?'))">Delete</a>
                  </td>
                </tr>
              <?php } ?>
            </tbody>
          </table>
        </div>
        <!-- /.card-body -->
      </div>
      <!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>
  <!-- /.content -->
</div>
<!-- /.content-wrapper -->