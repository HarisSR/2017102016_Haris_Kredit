<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0">Data Karyawan</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item">Home</li>
            <li class="breadcrumb-item">Karyawan</li>
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
          <h2 class="card-title"><b>List Karyawan</b></h2>
          <div class="float-right">
            <a href="<?php echo base_url() . 'index.php/Backend/data_karyawan_add' ?>" class="btn btn-primary">tambah</a>
          </div>
        </div>
        <!-- /.card-header -->
        <div class="card-body p-0">
          <table class="table">
            <thead>
              <tr>
                <th style="width: 10px">No</th>
                <th>NIP</th>
                <th>Nama</th>
                <th>Jenis Kelamin</th>
                <th>No. KTP</th>
                <th>No. Telp</th>
                <th>Alamat</th>
                <th>Photo</th>
                <th>aksi</th>
              </tr>
            </thead>
            <tbody>
              <?php
              $no = 1;
              foreach ($tbl_karyawan as $key => $karyawan) {
              ?>
                <tr>
                  <td><?php echo $no++ ?></td>
                  <td><?php echo $karyawan->nip ?></td>
                  <td><?php echo $karyawan->nama_karyawan ?></td>
                  <td><?php echo $karyawan->jk ?></td>
                  <td><?php echo $karyawan->no_ktp ?></td>
                  <td><?php echo $karyawan->no_telp ?></td>
                  <td><?php echo $karyawan->alamat ?></td>
                  <td><img src="<?php echo base_url() ?>uploads/<?php echo $karyawan->photo ?>" alt="" width="100"></td>
                  <td>
                    <a href="<?php echo base_url() . 'index.php/Backend/data_karyawan_edit/' . $karyawan->id_karyawan ?>" class="btn btn-success">Edit</a>
                    <a href="<?php echo base_url() . 'index.php/Backend/data_karyawan_delete/' . $karyawan->id_karyawan ?>" class="btn btn-danger" onclick="return(confirm('apakah anda yakin ?'))">Delete</a>
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