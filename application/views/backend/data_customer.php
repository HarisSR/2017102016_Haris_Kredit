<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0">Data Customer</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item">Home</li>
            <li class="breadcrumb-item">Customer</li>
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
          <h2 class="card-title"><b>List Customer</b></h2>
          <div class="float-right">
            <a href="<?php echo base_url() . 'index.php/Backend/data_customer_add' ?>" class="btn btn-primary">tambah</a>
          </div>
        </div>
        <!-- /.card-header -->
        <div class="card-body p-0">
          <table class="table">
            <thead>
              <tr>
                <th style="width: 10px">No</th>
                <th>Nama Customer</th>
                <th>Jenis Kelamnin</th>
                <th>No. KTP</th>
                <th>No. KK</th>
                <th>Pekerjaan</th>
                <th>No. Telphone</th>
                <th>Alamat</th>
                <th>aksi</th>
              </tr>
            </thead>
            <tbody>
              <?php
              $no = 1;
              foreach ($tbl_customer as $key => $customer) {
              ?>
                <tr>
                  <td><?php echo $no++ ?></td>
                  <td><?php echo $customer->nama_customer ?></td>
                  <td><?php echo $customer->jk ?></td>
                  <td><?php echo $customer->no_ktp ?></td>
                  <td><?php echo $customer->no_kk ?></td>
                  <td><?php echo $customer->pekerjaan ?></td>
                  <td><?php echo $customer->no_telp ?></td>
                  <td><?php echo $customer->alamat ?></td>
                  <td>
                    <a href="<?php echo base_url() . 'index.php/Backend/data_customer_edit/' . $customer->id_customer ?>" class="btn btn-success">Edit</a>
                    <a href="<?php echo base_url() . 'index.php/Backend/data_customer_delete/' . $customer->id_customer ?>" class="btn btn-danger" onclick="return(confirm('apakah anda yakin ?'))">Delete</a>
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