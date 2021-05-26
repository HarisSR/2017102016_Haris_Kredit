<?php

class Login extends CI_Controller
{

  function __construct()
  {
    parent::__construct();
    $this->load->model('M_Login');
  }

  public function index()
  {
    $this->load->view('backend/login.php');
  }

  function auth()
  {
    $username = htmlspecialchars($this->input->post('username', TRUE), ENT_QUOTES);
    $password = htmlspecialchars($this->input->post('password', TRUE), ENT_QUOTES);

    $check_admin = $this->M_Login->auth_admin($username, $password);

    if ($check_admin->num_rows() > 0) {
      $data = $check_admin->row_array();
      $this->session->set_userdata('masuk', TRUE);

      if ($data['status'] == 'aktif') {
        $this->session->set_userdata('akses', 'Aktif');
        $this->session->set_userdata('ses_id', $data['username']);
        $this->session->set_userdata('ses_nama', $data['nama_admin']);
        redirect('Backend');
      }
    } else {
      echo $this->session->set_flashdata(
        'msg',
        '<div class="register-reg" style="background-color: red; padding: 10px; color: white;">

                    <button type="button" class="close" data-dismiss="alert" aria-label="close">
                    <span aria-hidden="true">&times;</span>
                    </button> username atau password salah !

                </div>'
      );

      redirect('Login');
    }
  }

  public function logout()
  {
    $this->session->sess_destroy();
    $url = base_url() . 'index.php/Login';
    redirect($url);
  }
}
