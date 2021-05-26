<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0">Tambah Data Karyawan</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item">Home</li>
            <li class="breadcrumb-item">Karyawan</li>
            <li class="breadcrumb-item">Tambah Karyawan</li>
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
        <div class="card-header">
          <h3 class="card-title"><b>Form Karyawan</b></h3>
        </div>
        <!-- /.card-header -->
        <div class="card-body p-3">
          <?php foreach ($tbl_kendaraan as $key => $kendaraan) { ?>
            <form action="<?php echo base_url() . 'index.php/Backend/data_kendaraan_edit_action' ?>" method="POST" enctype="multipart/form-data">
              <input type="hidden" name="id" value="<?php echo $kendaraan->id_kendaraan ?>">
              <div class="row">
                <div class="col-md-4">
                  <div class="form-group">
                    <label>Tipe</label>
                    <input type="text" class="form-control" name="tipe" placeholder="masukan tipe kendaraan" value="<?php echo $kendaraan->tipe ?>">
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="form-group">
                    <label>Merek</label>
                    <input type="text" class="form-control" name="merek" placeholder="masukan merek kendaraan" value="<?php echo $kendaraan->merek ?>">
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="form-group">
                    <label>Tahun/Tanggal Dibuat</label>
                    <input type="date" class="form-control" name="tanggal" placeholder="masukan tahun kendarran dibuat" value="<?php echo $kendaraan->tahun ?>">
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-4">
                  <div class="form-group">
                    <label>Nomor Seri</label>
                    <input class="form-control" type="text" name="no_seri" placeholder="masukan nomor seri kendaraan" value="<?php echo $kendaraan->no_seri ?>">
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="form-group">
                    <label>Nomor Mesin</label>
                    <input type="text" name="no_mesin" class="form-control" placeholder="masukan nomor mesin kendaraan" value="<?php echo $kendaraan->no_mesin ?>">
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="form-group">
                    <label>Nomor Kerangka</label>
                    <input type="text" name="no_kerangka" class="form-control" placeholder="masukan nomor kerangka kendaraan" value="<?php echo $kendaraan->no_kerangka ?>">
                  </div>
                </div>
              </div>
              <div class="form-group">
                <label>Gambar</label>
                <input type="file" name="gambar" class="form-control" placeholder="masukan gambar kendaraan">
              </div>
              <div class="form-group">
                <label>Harga</label>
                <input type="number" name="harga" class="form-control" placeholder="masukan harga kendaraan" value="<?php echo $kendaraan->harga ?>">
              </div>
              <button type="submit" class="btn btn-primary float-right" name="submit">update</button>
            </form>
          <?php } ?>
        </div>
        <!-- /.card-body -->
      </div>
      <!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>
  <!-- /.content -->
</div>
<!-- /.content-wrapper -->