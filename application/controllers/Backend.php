<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Backend extends CI_Controller
{

  function __construct()
  {
    parent::__construct();
    if ($this->session->userdata('masuk') != TRUE) {
      $url = base_url() . 'index.php/Login';
      redirect($url);
    }
  }

  // Controller Karyawan

  public function index()
  {
    $this->load->model('M_Karyawan');
    $data['tbl_karyawan'] = $this->M_Karyawan->tampil_data()->result();
    $this->load->view('backend/template/header.php');
    $this->load->view('backend/index.php', $data);
    $this->load->view('backend/template/footer.php');
  }

  function data_karyawan_add()
  {
    $this->load->view('backend/template/header.php');
    $this->load->view('backend/data_karyawan_add.php');
    $this->load->view('backend/template/footer.php');
  }

  function data_karyawan_add_action()
  {
    if (empty($_FILES['photo']['name'])) {
      $nip = $this->input->POST('nip');
      $no_ktp = $this->input->POST('no_ktp');
      $nama = $this->input->POST('nama');
      $jk = $this->input->POST('jk');
      $no_telp = $this->input->POST('no_telp');
      $alamat = $this->input->POST('alamat');

      $data = array(
        'nip' => $nip,
        'no_ktp' => $no_ktp,
        'nama_karyawan' => $nama,
        'alamat' => $alamat,
        'no_ktp' => $no_ktp,
        'no_telp' => $no_telp,
        'jk' => $jk
      );

      $this->load->model('M_Karyawan');
      $this->M_Karyawan->input_data($data, 'tbl_karyawan');
      redirect('Backend');
    } else {
      $config['upload_path'] = "./uploads/";
      $config['allowed_types'] = "jpg|png|gif|jpeg";
      $config['max_size'] = 2048;
      $config['encrypt_name'] = TRUE;
      $this->load->library('upload', $config);
      $this->upload->do_upload('photo');

      $nip = $this->input->POST('nip');
      $no_ktp = $this->input->POST('no_ktp');
      $nama = $this->input->POST('nama');
      $jk = $this->input->POST('jk');
      $no_telp = $this->input->POST('no_telp');
      $alamat = $this->input->POST('alamat');
      $photo = $this->upload->data('file_name');


      $data = array(
        'nip' => $nip,
        'no_ktp' => $no_ktp,
        'nama_karyawan' => $nama,
        'alamat' => $alamat,
        'no_ktp' => $no_ktp,
        'no_telp' => $no_telp,
        'jk' => $jk,
        'photo' => $photo
      );

      $this->load->model('M_Karyawan');
      $this->M_Karyawan->input_data($data, 'tbl_karyawan');
      redirect('Backend');
    }
  }

  function data_karyawan_edit($id_karyawan)
  {
    $where = array(
      'id_karyawan' => $id_karyawan
    );

    $this->load->model('M_Karyawan');
    $data['tbl_karyawan'] = $this->M_Karyawan->view_data($where, 'tbl_karyawan')->result();

    $this->load->view('backend/template/header.php');
    $this->load->view('backend/data_karyawan_edit.php', $data);
    $this->load->view('backend/template/footer.php');
  }

  function data_karyawan_edit_action()
  {
    if (empty($_FILES['photo']['name'])) {
      $id = $this->input->POST('id');
      $nip = $this->input->POST('nip');
      $no_ktp = $this->input->POST('no_ktp');
      $nama = $this->input->POST('nama');
      $jk = $this->input->POST('jk');
      $no_telp = $this->input->POST('no_telp');
      $alamat = $this->input->POST('alamat');

      $data = array(
        'nip' => $nip,
        'no_ktp' => $no_ktp,
        'nama_karyawan' => $nama,
        'alamat' => $alamat,
        'no_ktp' => $no_ktp,
        'no_telp' => $no_telp,
        'jk' => $jk
      );

      $where = array(
        'id_karyawan' => $id
      );

      $this->load->model('M_Karyawan');
      $this->M_Karyawan->update_data($where, $data, 'tbl_karyawan');
      redirect('Backend');
    } else {
      $config['upload_path'] = FCPATH . "/uploads/";
      $config['allowed_types'] = "jpg|png|gif|jpeg";
      $config['max_size'] = 2048;
      $config['encrypt_name'] = TRUE;
      $this->load->library('upload');
      $this->upload->initialize($config);

      $id = $this->input->POST('id');
      $nip = $this->input->POST('nip');
      $no_ktp = $this->input->POST('no_ktp');
      $nama = $this->input->POST('nama');
      $jk = $this->input->POST('jk');
      $no_telp = $this->input->POST('no_telp');
      $alamat = $this->input->POST('alamat');
      $this->upload->do_upload('photo');
      $photo = $this->upload->data('file_name');

      $data = array(
        'nip' => $nip,
        'no_ktp' => $no_ktp,
        'nama_karyawan' => $nama,
        'alamat' => $alamat,
        'no_ktp' => $no_ktp,
        'no_telp' => $no_telp,
        'jk' => $jk,
        'photo' => $photo
      );

      $where = array(
        'id_karyawan' => $id
      );

      $file = $this->db->get_where('tbl_karyawan', ['id_karyawan' => $id])->row();
      unlink("./uploads/" . $file->photo);

      $this->load->model('M_Karyawan');
      $this->M_Karyawan->update_data($where, $data, 'tbl_karyawan');
      redirect('Backend');
    }
  }

  function data_karyawan_delete($id_karyawan)
  {
    $where = array(
      'id_karyawan' => $id_karyawan
    );

    $file = $this->db->get_where('tbl_karyawan', ['id_karyawan' => $id_karyawan])->row();
    unlink("./uploads/" . $file->photo);

    $this->load->model('M_Karyawan');
    $this->M_Karyawan->delete_data($where, 'tbl_karyawan');
    redirect('Backend');
  }

  // Controller Customer

  public function data_customer()
  {
    $this->load->model('M_Customer');
    $data['tbl_customer'] = $this->M_Customer->tampil_data()->result();
    $this->load->view('backend/template/header.php');
    $this->load->view('backend/data_customer.php', $data);
    $this->load->view('backend/template/footer.php');
  }

  function data_customer_add()
  {
    $this->load->view('backend/template/header.php');
    $this->load->view('backend/data_customer_add.php');
    $this->load->view('backend/template/footer.php');
  }

  function data_customer_add_action()
  {
    $nama = $this->input->POST('nama');
    $jk = $this->input->POST('jk');
    $no_ktp = $this->input->POST('no_ktp');
    $no_kk = $this->input->POST('no_kk');
    $pekerjaan = $this->input->POST('pekerjaan');
    $no_telp = $this->input->POST('no_telp');
    $alamat = $this->input->POST('alamat');

    $data = array(
      'nama_customer' => $nama,
      'jk' => $jk,
      'no_ktp' => $no_ktp,
      'no_kk' => $no_kk,
      'pekerjaan' => $pekerjaan,
      'no_telp' => $no_telp,
      'alamat' => $alamat
    );

    $this->load->model('M_Customer');
    $this->M_Customer->input_data($data, 'tbl_customer');
    redirect('Backend/data_customer');
  }

  function data_customer_edit($id_customer)
  {
    $where = array(
      'id_customer' => $id_customer
    );

    $this->load->model('M_Customer');
    $data['tbl_customer'] = $this->M_Customer->view_data($where, 'tbl_customer')->result();

    $this->load->view('backend/template/header.php');
    $this->load->view('backend/data_customer_edit.php', $data);
    $this->load->view('backend/template/footer.php');
  }

  function data_customer_edit_action()
  {
    $id_customer = $this->input->POST('id');
    $nama = $this->input->POST('nama');
    $jk = $this->input->POST('jk');
    $no_ktp = $this->input->POST('no_ktp');
    $no_kk = $this->input->POST('no_kk');
    $pekerjaan = $this->input->POST('pekerjaan');
    $no_telp = $this->input->POST('no_telp');
    $alamat = $this->input->POST('alamat');

    $data = array(
      'nama_customer' => $nama,
      'jk' => $jk,
      'no_ktp' => $no_ktp,
      'no_kk' => $no_kk,
      'pekerjaan' => $pekerjaan,
      'no_telp' => $no_telp,
      'alamat' => $alamat
    );

    $where = array(
      'id_customer' => $id_customer
    );

    $this->load->model('M_Customer');
    $this->M_Customer->update_data($where, $data, 'tbl_customer');
    redirect('Backend/data_customer');
  }

  function data_customer_delete($id_customer)
  {
    $where = array(
      'id_customer' => $id_customer
    );

    $file = $this->db->get_where('tbl_customer', ['id_customer' => $id_customer])->row();
    unlink("./uploads/" . $file->photo);

    $this->load->model('M_Customer');
    $this->M_Customer->delete_data($where, 'tbl_customer');
    redirect('Backend/data_customer');
  }

  // Controller Kendaraan

  public function data_kendaraan()
  {
    $this->load->model('M_Kendaraan');
    $data['tbl_kendaraan'] = $this->M_Kendaraan->tampil_data()->result();
    $this->load->view('backend/template/header.php');
    $this->load->view('backend/data_kendaraan.php', $data);
    $this->load->view('backend/template/footer.php');
  }

  function data_kendaraan_add()
  {
    $this->load->view('backend/template/header.php');
    $this->load->view('backend/data_kendaraan_add.php');
    $this->load->view('backend/template/footer.php');
  }

  function data_kendaraan_add_action()
  {
    if (empty($_FILES['gambar']['name'])) {
      $tipe = $this->input->POST('tipe');
      $merek = $this->input->POST('merek');
      $tanggal = $this->input->POST('tanggal');
      $no_seri = $this->input->POST('no_seri');
      $no_mesin = $this->input->POST('no_mesin');
      $no_kerangka = $this->input->POST('no_kerangka');
      $harga = $this->input->POST('harga');

      $data = array(
        'tipe' => $tipe,
        'merek' => $merek,
        'tahun' => $tanggal,
        'no_seri' => $no_seri,
        'no_mesin' => $no_mesin,
        'no_kerangka' => $no_kerangka,
        'harga' => $harga
      );

      $this->load->model('M_Kendaraan');
      $this->M_Kendaraan->input_data($data, 'tbl_kendaraan');
      redirect('Backend/data_kendaraan');
    } else {
      $config['upload_path'] = "./uploads/";
      $config['allowed_types'] = "jpg|png|gif|jpeg";
      $config['max_size'] = 2048;
      $config['encrypt_name'] = TRUE;
      $this->load->library('upload', $config);
      $this->upload->do_upload('gambar');

      $tipe = $this->input->POST('tipe');
      $merek = $this->input->POST('merek');
      $tanggal = $this->input->POST('tanggal');
      $no_seri = $this->input->POST('no_seri');
      $no_mesin = $this->input->POST('no_mesin');
      $no_kerangka = $this->input->POST('no_kerangka');
      $harga = $this->input->POST('harga');
      $gambar = $this->upload->data('file_name');

      $data = array(
        'tipe' => $tipe,
        'merek' => $merek,
        'tahun' => $tanggal,
        'no_seri' => $no_seri,
        'no_mesin' => $no_mesin,
        'no_kerangka' => $no_kerangka,
        'harga' => $harga,
        'gambar' => $gambar
      );

      $this->load->model('M_Kendaraan');
      $this->M_Kendaraan->input_data($data, 'tbl_kendaraan');
      redirect('Backend/data_kendaraan');
    }
  }

  function data_kendaraan_edit($id_kendaraan)
  {
    $where = array(
      'id_kendaraan' => $id_kendaraan
    );

    $this->load->model('M_Kendaraan');
    $data['tbl_kendaraan'] = $this->M_Kendaraan->view_data($where, 'tbl_kendaraan')->result();

    $this->load->view('backend/template/header.php');
    $this->load->view('backend/data_kendaraan_edit.php', $data);
    $this->load->view('backend/template/footer.php');
  }

  function data_kendaraan_edit_action()
  {
    if (empty($_FILES['gambar']['name'])) {
      $id = $this->input->POST('id');
      $tipe = $this->input->POST('tipe');
      $merek = $this->input->POST('merek');
      $tanggal = $this->input->POST('tanggal');
      $no_seri = $this->input->POST('no_seri');
      $no_mesin = $this->input->POST('no_mesin');
      $no_kerangka = $this->input->POST('no_kerangka');
      $harga = $this->input->POST('harga');

      $data = array(
        'tipe' => $tipe,
        'merek' => $merek,
        'tahun' => $tanggal,
        'no_seri' => $no_seri,
        'no_mesin' => $no_mesin,
        'no_kerangka' => $no_kerangka,
        'harga' => $harga
      );

      $where = array(
        'id_kendaraan' => $id
      );

      $this->load->model('M_Kendaraan');
      $this->M_Kendaraan->update_data($where, $data, 'tbl_kendaraan');
      redirect('Backend/data_kendaraan');
    } else {
      $config['upload_path'] = FCPATH . "/uploads/";
      $config['allowed_types'] = "jpg|png|gif|jpeg";
      $config['max_size'] = 2048;
      $config['encrypt_name'] = TRUE;
      $this->load->library('upload');
      $this->upload->initialize($config);
      $this->upload->do_upload('gambar');

      $id = $this->input->POST('id');
      $tipe = $this->input->POST('tipe');
      $merek = $this->input->POST('merek');
      $tanggal = $this->input->POST('tanggal');
      $no_seri = $this->input->POST('no_seri');
      $no_mesin = $this->input->POST('no_mesin');
      $no_kerangka = $this->input->POST('no_kerangka');
      $harga = $this->input->POST('harga');
      $gambar = $this->upload->data('file_name');

      $data = array(
        'tipe' => $tipe,
        'merek' => $merek,
        'tahun' => $tanggal,
        'no_seri' => $no_seri,
        'no_mesin' => $no_mesin,
        'no_kerangka' => $no_kerangka,
        'harga' => $harga,
        'gambar' => $gambar
      );

      $where = array(
        'id_kendaraan' => $id
      );

      $file = $this->db->get_where('tbl_kendaraan', ['id_kendaraan' => $id])->row();
      unlink("./uploads/" . $file->gambar);

      $this->load->model('M_Kendaraan');
      $this->M_Kendaraan->update_data($where, $data, 'tbl_kendaraan');
      redirect('Backend/data_kendaraan');
    }
  }

  function data_kendaraan_delete($id_kendaraan)
  {
    $where = array(
      'id_kendaraan' => $id_kendaraan
    );

    $file = $this->db->get_where('tbl_kendaraan', ['id_kendaraan' => $id_kendaraan])->row();
    unlink("./uploads/" . $file->gambar);

    $this->load->model('M_Kendaraan');
    $this->M_Kendaraan->delete_data($where, 'tbl_kendaraan');
    redirect('Backend/data_kendaraan');
  }

  // Controller Kredit

  public function data_kredit()
  {
    $this->load->model('M_Kredit');
    $data['tbl_kredit'] = $this->M_Kredit->tampil_data()->result();
    $this->load->view('backend/template/header.php');
    $this->load->view('backend/data_kredit.php', $data);
    $this->load->view('backend/template/footer.php');
  }

  function data_kredit_add()
  {
    $this->load->model('M_Kendaraan');
    $data['tbl_kendaraan'] = $this->M_Kendaraan->tampil_data()->result();

    $this->load->model('M_Customer');
    $data['tbl_customer'] = $this->M_Customer->tampil_data()->result();

    $this->load->view('backend/template/header.php');
    $this->load->view('backend/data_kredit_add.php', $data);
    $this->load->view('backend/template/footer.php');
  }

  function data_kredit_add_action()
  {
    $id_customer = $this->input->POST('id_customer');
    $id_kendaraan = $this->input->POST('merek');
    $dp = $this->input->POST('dp');
    $tanggal_beli = $this->input->POST('tanggal');
    $banyak_angsuran = $this->input->POST('banyak_angsuran');

    // mencari total harga
    $where = array(
      'id_kendaraan' => $id_kendaraan
    );
    $this->load->model('M_Kendaraan');
    $data['tbl_kendaraan'] = $this->M_Kendaraan->view_data($where, 'tbl_kendaraan')->result();
    $harga_cash = 0;
    foreach ($data['tbl_kendaraan'] as $key => $kendaraan) {
      $harga_cash = $kendaraan->harga;
    }
    $sisa_bayar = $harga_cash - $dp;
    $total_bunga = $sisa_bayar * 0.01 * $banyak_angsuran;
    $harus_bayar = $total_bunga + $sisa_bayar;
    $cicilan_bulanan = $harus_bayar / $banyak_angsuran;

    $data = array(
      'id_customer' => $id_customer,
      'id_kendaraan' => $id_kendaraan,
      'dp' => $dp,
      'tanggal_beli' => $tanggal_beli,
      'banyak_angsuran' => $banyak_angsuran,
      'total_bayar' => $harus_bayar,
      'cicilan' => $cicilan_bulanan
    );

    $this->load->model('M_Kredit');
    $this->M_Kredit->input_data($data, 'tbl_kredit');
    // redirect('Backend/data_kredit');
  }

  function data_kredit_edit($id_customer)
  {
    $where = array(
      'id_customer' => $id_customer
    );

    $this->load->model('M_Customer');
    $data['tbl_customer'] = $this->M_Customer->view_data($where, 'tbl_customer')->result();

    $this->load->view('backend/template/header.php');
    $this->load->view('backend/data_customer_edit.php', $data);
    $this->load->view('backend/template/footer.php');
  }

  function data_kredit_edit_action()
  {
    $id_customer = $this->input->POST('id');
    $nama = $this->input->POST('nama');
    $jk = $this->input->POST('jk');
    $no_ktp = $this->input->POST('no_ktp');
    $no_kk = $this->input->POST('no_kk');
    $pekerjaan = $this->input->POST('pekerjaan');
    $no_telp = $this->input->POST('no_telp');
    $alamat = $this->input->POST('alamat');

    $data = array(
      'nama_customer' => $nama,
      'jk' => $jk,
      'no_ktp' => $no_ktp,
      'no_kk' => $no_kk,
      'pekerjaan' => $pekerjaan,
      'no_telp' => $no_telp,
      'alamat' => $alamat
    );

    $where = array(
      'id_customer' => $id_customer
    );

    $this->load->model('M_Customer');
    $this->M_Customer->update_data($where, $data, 'tbl_customer');
    redirect('Backend/data_customer');
  }

  function data_kredit_delete($id_kredit)
  {
    $where = array(
      'id_kredit' => $id_kredit
    );

    $this->load->model('M_Kredit');
    $this->M_Kredit->delete_data($where, 'tbl_kredit');
    redirect('Backend/data_kredit');
  }
}
