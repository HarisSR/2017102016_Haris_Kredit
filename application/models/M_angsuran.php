<?php

class M_Angsuran extends CI_Model
{

  function tampil_data($id_kredit)
  {
    $this->db->select('*');
    $this->db->from('tbl_angsuran');
    $this->db->join('tbl_kredit', 'tbl_angsuran.id_kredit = tbl_kredit.id_kredit');
    $this->db->join('tbl_customer', 'tbl_kredit.id_customer = tbl_customer.id_customer');
    $this->db->where($id_kredit);
    $this->db->order_by('id_angsuran', 'ASC');

    return $this->db->get();
  }

  function input_data($data, $table)
  {
    $this->db->insert($table,  $data);
  }

  function view_data($where, $table)
  {
    $this->db->select('*');
    $this->db->from('tbl_angsuran');
    $this->db->join('tbl_kredit', 'tbl_angsuran.id_kredit = tbl_kredit.id_kredit');
    $this->db->join('tbl_customer', 'tbl_kredit.id_customer = tbl_customer.id_customer');
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
