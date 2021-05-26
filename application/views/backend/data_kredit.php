<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0">Data Kredit</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item">Home</li>
            <li class="breadcrumb-item">Kredit</li>
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
          <h2 class="card-title"><b>List Kredit</b></h2>
          <div class="float-right">
            <a href="<?php echo base_url() . 'index.php/Backend/data_kredit_add' ?>" class="btn btn-primary">tambah</a>
          </div>
        </div>
        <!-- /.card-header -->
        <div class="card-body p-0">
          <table class="table">
            <thead>
              <tr>
                <th style="width: 10px">No</th>
                <th>Nama Customer</th>
                <th>Nomor KTP</th>
                <th>Merek</th>
                <th>Tipe</th>
                <th>DP</th>
                <th>Tanggal Beli</th>
                <th>Harga</th>
                <th>Banyak Angsuran</th>
                <th>Total Bayar</th>
                <th>Cicilan</th>
                <th>aksi</th>
              </tr>
            </thead>
            <tbody>
              <?php
              $no = 1;
              foreach ($tbl_kredit as $key => $kredit) {
              ?>
                <tr>
                  <td><?php echo $no++ ?></td>
                  <td><?php echo $kredit->nama_customer ?></td>
                  <td><?php echo $kredit->no_ktp ?></td>
                  <td><?php echo $kredit->merek ?></td>
                  <td><?php echo $kredit->tipe ?></td>
                  <td><?php echo $kredit->dp ?></td>
                  <td><?php echo $kredit->tanggal_beli ?></td>
                  <td><?php echo $kredit->harga ?></td>
                  <td><?php echo $kredit->banyak_angsuran ?></td>
                  <td><?php echo $kredit->total_bayar ?></td>
                  <td><?php echo $kredit->cicilan ?></td>
                  <td>
                    <a href="<?php echo base_url() . 'index.php/Backend/data_kredit_delete/' . $kredit->id_kredit ?>" class="btn btn-danger" onclick="return(confirm('apakah anda yakin ?'))">Delete</a>
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