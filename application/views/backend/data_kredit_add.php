<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0">Tambah Data Kredit</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item">Home</li>
            <li class="breadcrumb-item">Kredit</li>
            <li class="breadcrumb-item">Tambah Kredit</li>
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
          <h3 class="card-title"><b>Form Tambah Kredit</b></h3>
        </div>
        <!-- /.card-header -->
        <div class="card-body p-3">
          <form action="<?php echo base_url() . 'index.php/Backend/data_kredit_add_action' ?>" method="POST">
            <div class="form-group">
              <label>Nomor KTP - Nama Lengkap</label>
              <select name="id_customer" class="form-control">
                <?php foreach ($tbl_customer as $key => $customer) { ?>
                  <option value="<?php echo $customer->id_customer ?>"><?php echo $customer->no_ktp . " - " . $customer->nama_customer ?></option>
                <?php } ?>
              </select>
            </div>
            <div class="form-group">
              <label for="exampleInputPassword1">Merek - Tipe - Harga</label>
              <select class="form-control" name="merek">
                <?php foreach ($tbl_kendaraan as $key => $kendaraan) { ?>
                  <option value="<?php echo $kendaraan->id_kendaraan ?>"><?php echo $kendaraan->merek . " - " . $kendaraan->tipe . " - Rp. " . $kendaraan->harga ?></option>
                <?php } ?>
              </select>
            </div>
            <div class="row">
              <div class="col-md-4">
                <div class="form-group">
                  <label>DP Awal</label>
                  <input type="number" class="form-control" name="dp" placeholder="masuakn dp">
                </div>
              </div>
              <div class="col-md-4">
                <div class="form-group">
                  <label>Tanggal</label>
                  <input type="date" name="tanggal" class="form-control">
                </div>
              </div>
              <div class="col-md-4">
                <div class="form-group">
                  <label>Banyak Angsuran</label>
                  <select name="banyak_angsuran" class="form-control">
                    <?php for ($i = 1; $i < 60; $i++) { ?>
                      <option value="<?php echo $i ?>"><?php echo $i ?></option>
                    <?php } ?>
                  </select>
                </div>
              </div>
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

<script src="<?php echo base_url() . 'assets/plugins/jquery/jquery.min.js' ?>"></script>
<script>
  $(document).ready(function() {
    $('#btn-cari').click(function() {
      var no_ktp = document.getElementById('no_ktp').value;
      window.location = "http://localhost:8888/2017102016_Haris_Kredit/index.php/Backend/cariCustomer/" + no_ktp;
    });
  });
</script>