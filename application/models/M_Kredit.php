<?php

class M_Kredit extends CI_Model
{

  function tampil_data()
  {
    $this->db->select('*');
    $this->db->from('tbl_kredit');
    $this->db->join('tbl_customer', 'tbl_kredit.id_customer = tbl_customer.id_customer');
    $this->db->join('tbl_kendaraan', 'tbl_kredit.id_kendaraan = tbl_kendaraan.id_kendaraan');

    return $this->db->get();
  }

  function input_data($data, $table)
  {
    $this->db->insert($table,  $data);
  }

  function view_data($where, $table)
  {
    $this->db->select('*');
    $this->db->from($table);
    $this->db->where($where);

    return $this->db->get();
  }

  function update_data($where, $data, $table)
  {
    $this->db->where($where);
    $this->db->update($table, $data);
  }

  function delete_data($where, $table)
  {
    $this->db->where($where);
    $this->db->delete($table);
  }
}
