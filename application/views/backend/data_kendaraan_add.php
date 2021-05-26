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
          <form action="<?php echo base_url() . 'index.php/Backend/data_kendaraan_add_action' ?>" method="POST" enctype="multipart/form-data">
            <div class="row">
              <div class="col-md-4">
                <div class="form-group">
                  <label>Tipe</label>
                  <input type="text" class="form-control" name="tipe" placeholder="masukan tipe kendaraan">
                </div>
              </div>
              <div class="col-md-4">
                <div class="form-group">
                  <label>Merek</label>
                  <input type="text" class="form-control" name="merek" placeholder="masukan merek kendaraan">
                </div>
              </div>
              <div class="col-md-4">
                <div class="form-group">
                  <label>Tahun/Tanggal Dibuat</label>
                  <input type="date" class="form-control" name="tanggal" placeholder="masukan tahun kendarran dibuat">
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-4">
                <div class="form-group">
                  <label>Nomor Seri</label>
                  <input class="form-control" type="text" name="no_seri" placeholder="masukan nomor seri kendaraan">
                </div>
              </div>
              <div class="col-md-4">
                <div class="form-group">
                  <label>Nomor Mesin</label>
                  <input type="text" name="no_mesin" class="form-control" placeholder="masukan nomor mesin kendaraan">
                </div>
              </div>
              <div class="col-md-4">
                <div class="form-group">
                  <label>Nomor Kerangka</label>
                  <input type="text" name="no_kerangka" class="form-control" placeholder="masukan nomor kerangka kendaraan">
                </div>
              </div>
            </div>
            <div class="form-group">
              <label>Gambar</label>
              <input type="file" name="gambar" class="form-control" placeholder="masukan gambar kendaraan">
            </div>
            <div class="form-group">
              <label>Harga</label>
              <input type="number" name="harga" class="form-control" placeholder="masukan harga kendaraan">
            </div>
            <button type="submit" class="btn btn-primary float-right" name="submit">tambah</button>
          </form>
        </div>
        <!-- /.card-body -->
      </div>
      <!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>
  <!-- /.content -->
</div>
<!-- /.content-wrapper -->