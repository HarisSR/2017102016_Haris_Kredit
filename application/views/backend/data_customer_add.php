<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0">Tambah Data Customer</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item">Home</li>
            <li class="breadcrumb-item">Customer</li>
            <li class="breadcrumb-item">Tambah Customer</li>
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
          <h3 class="card-title"><b>Form Customer</b></h3>
        </div>
        <!-- /.card-header -->
        <div class="card-body p-3">
          <form action="<?php echo base_url() . 'index.php/Backend/data_customer_add_action' ?>" method="POST">
            <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                  <label>Nomor KK</label>
                  <input type="text" class="form-control" name="no_kk" placeholder="masukan Nomor KK">
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label>Nomor KTP</label>
                  <input type="text" class="form-control" name="no_ktp" placeholder="masukan Nomor KTP">
                </div>
              </div>
            </div>
            <div class="form-group">
              <label for="exampleInputPassword1">Nama Customer</label>
              <input type="text" name="nama" class="form-control" placeholder="masukan nama lengkap">
            </div>
            <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                  <label>Jenis Kelamin</label>
                  <select name="jk" class="form-control">
                    <option value="laki-laki">laki-laki</option>
                    <option value="perempuan">perempuan</option>
                  </select>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label>No. Telp</label>
                  <input type="text" name="no_telp" class="form-control" placeholder="masukan nomor telphone / handphone">
                </div>
              </div>
            </div>
            <div class="form-group">
              <label>Pekerjaan</label>
              <input type="text" name="pekerjaan" class="form-control" placeholder="masukan pekerjaan">
            </div>
            <div class="form-group">
              <label>Alamat</label>
              <textarea class="form-control" name="alamat" cols="10" rows="5" placeholder="masukan alamat"></textarea>
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