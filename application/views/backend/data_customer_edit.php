<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0">Update Data Customer</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item">Home</li>
            <li class="breadcrumb-item">Customer</li>
            <li class="breadcrumb-item">Update Customer</li>
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
          <h3 class="card-title"><b>Form Update Customer</b></h3>
        </div>
        <!-- /.card-header -->
        <div class="card-body p-3">
          <?php foreach ($tbl_customer as $key => $customer) { ?>
            <form action="<?php echo base_url() . 'index.php/Backend/data_customer_edit_action' ?>" method="POST">
              <input type="hidden" name="id" value="<?php echo $customer->id_customer ?>">
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <label>Nomor KK</label>
                    <input type="text" class="form-control" name="no_kk" placeholder="masukan Nomor KK" value="<?php echo $customer->no_kk ?>">
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label>Nomor KTP</label>
                    <input type="text" class="form-control" name="no_ktp" placeholder="masukan Nomor KTP" value="<?php echo $customer->no_ktp ?>">
                  </div>
                </div>
              </div>
              <div class="form-group">
                <label for="exampleInputPassword1">Nama Customer</label>
                <input type="text" name="nama" class="form-control" placeholder="masukan nama lengkap" value="<?php echo $customer->nama_customer ?>">
              </div>
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <label>Jenis Kelamin</label>
                    <select name="jk" class="form-control">
                      <?php if ($customer->jk == "laki-laki") { ?>
                        <option value="laki-laki" selected>laki-laki</option>
                        <option value="perempuan">perempuan</option>
                      <?php } elseif ($customer->jk == "perempuan") { ?>
                        <option value="laki-laki">laki-laki</option>
                        <option value="perempuan" selected>perempuan</option>
                      <?php } else { ?>
                        <option value="laki-laki">laki-laki</option>
                        <option value="perempuan">perempuan</option>
                      <?php } ?>
                    </select>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label>No. Telp</label>
                    <input type="text" name="no_telp" class="form-control" placeholder="masukan nomor telphone / handphone" value="<?php echo $customer->no_telp ?>">
                  </div>
                </div>
              </div>
              <div class="form-group">
                <label>Pekerjaan</label>
                <input type="text" name="pekerjaan" class="form-control" placeholder="masukan pekerjaan" value="<?php echo $customer->pekerjaan ?>">
              </div>
              <div class="form-group">
                <label>Alamat</label>
                <textarea class="form-control" name="alamat" cols="10" rows="5" placeholder="masukan alamat"><?php echo $customer->alamat ?></textarea>
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