<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0">Data Angsuran</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item">Home</li>
            <li class="breadcrumb-item">Angsuran</li>
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
          <h2 class="card-title"><b>Cari Angsuran Kredit</b></h2>
          <div class="float-right">
            <!-- <a href="<?php echo base_url() . 'index.php/Backend/data_angsuran_detail' ?>" class="btn btn-primary">tambah</a> -->
          </div>
        </div>
        <!-- /.card-header -->
        <div class="card-body p-3">
          <form action="<?php echo base_url() . 'index.php/Backend/data_angsuran_detail' ?>" method="POST">
            <div class="form-group">
              <label>ID Kredit</label>
              <select name="id_kredit" class="form-control">
                <?php foreach ($tbl_kredit as $key => $kredit) { ?>
                  <option value="<?php echo $kredit->id_kredit ?>"><?php echo $kredit->id_kredit ?></option>
                <?php } ?>
              </select>
            </div>
            <button type="submit" class="btn btn-primary float-right" name="submit">tampilkan</button>
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