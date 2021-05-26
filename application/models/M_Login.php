<?php

class M_Login extends CI_Model
{

  function auth_admin($username, $password)
  {
    $query = $this->db->query("select * from tbl_user_admin where username='$username' and password='$password' limit 1");

    return $query;
  }
}
