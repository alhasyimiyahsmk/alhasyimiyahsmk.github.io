<?php
class mu_login extends CI_Model{
    function cekadmin($nim,$password){
        $hasil=$this->db->query("SELECT * FROM tbl_user WHERE Nim='$nim' AND password='$password'");
        return $hasil;
    }
  
}
