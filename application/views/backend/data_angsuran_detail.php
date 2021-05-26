<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0">Data Detail Angsuran</h1>
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
          <h2 class="card-title"><b>List Angsuran</b></h2>
        </div>
        <!-- /.card-header -->
        <div class="card-body p-0">
          <table class="table" style="border-bottom: 1px solid black;">
            <thead>
              <tr>
                <th style="width: 10px">No</th>
                <th>ID Angsuran</th>
                <th>ID Kredit</th>
                <th>Nomor KTP</th>
                <th>Nama</th>
                <th>Tanggal Angsur</th>
                <th>Angsuran Ke</th>
                <th>aksi</th>
              </tr>
            </thead>
            <tbody>
              <?php
              $no = 1;
              foreach ($tbl_angsuran as $key => $angsuran) {
              ?>
                <tr>
                  <td><?php echo $no++ ?></td>
                  <td><?php echo $angsuran->id_angsuran ?></td>
                  <td><?php echo $angsuran->id_kredit ?></td>
                  <td><?php echo $angsuran->no_ktp ?></td>
                  <td><?php echo $angsuran->nama_customer ?></td>
                  <td><?php echo $angsuran->tanggal_angsur ?></td>
                  <td><?php echo $angsuran->angsuran_ke ?></td>
                  <td>
                    <a href="<?php echo base_url() . 'index.php/Backend/data_angsuran_delete/' . $angsuran->id_angsuran ?>" class="btn btn-danger" onclick="return(confirm('apakah anda yakin ?'))">Delete</a>
                  </td>
                </tr>
              <?php } ?>
            </tbody>
          </table>
          <?php
          $total_angsuran = 0;
          $total = 0;
          $cicilan = 0;
          $id_kredit = 0;
          $banyak_angsuran = 0;

          if (count($tbl_angsuran) < 1) {
            foreach ($tbl_kredit as $key => $kredit) {
              $total = $kredit->total_bayar;
              $cicilan = $kredit->cicilan;
              // $total_angsuran++;
              $banyak_angsuran =  $kredit->banyak_angsuran;
              $id_kredit = $kredit->id_kredit;
            }
          } else {
            foreach ($tbl_angsuran as $key => $angsuran) {
              $total = $angsuran->total_bayar;
              $cicilan = $angsuran->cicilan;
              $total_angsuran++;
              $banyak_angsuran =  $angsuran->banyak_angsuran;
              $id_kredit = $angsuran->id_kredit;
            }
          }

          $total_terangsur = $total_angsuran * $cicilan;
          ?>
          <div class="row p-3">
            <div class="col">
              <form action="<?php echo base_url() . 'index.php/Backend/data_angsuran_add' ?>" method="POST">
                <input type="hidden" name="id_kredit" value="<?php echo $id_kredit ?>">
                <input type="hidden" name="angsuran_ke" value="<?php echo count($tbl_angsuran) + 1; ?>">
                <div class="form-row">
                  <div class="col">
                    <label for="">Tambah Angsuran</label><br>
                    <input type="date" name="tanggal" class="form-control" required>
                  </div>
                  <div class="col">
                    <label for="angsur">&nbsp;</label><br>
                    <input type="text" class="form-control" disabled value="<?php echo "Rp. " . $cicilan ?>">
                  </div>
                  <div class="col">
                    <label for="">&nbsp;</label><br>
                    <button class="btn btn-primary">tambah</button>
                  </div>
                </div>
              </form>
            </div>
            <div class="col"></div>
          </div>
          <h2 class="card-title float-right p-3">
            <b>
              Total yang Harus Dibayar : Rp. <?php echo $total ?><br>
              Cicilan Perbulan : Rp. <?php echo $cicilan ?><br>
              <hr>
              Total Terangsur : (<?php echo $total_angsuran; ?>) Rp. <?php echo $total_terangsur; ?><br>
              Sisa : (<?php echo $banyak_angsuran - $total_angsuran ?>)Rp. <?php echo $total - $total_terangsur ?>
            </b>
          </h2>
        </div>
        <!-- /.card-body -->
      </div>
      <!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>
  <!-- /.content -->
</div>
<!-- /.content-wrapper -->