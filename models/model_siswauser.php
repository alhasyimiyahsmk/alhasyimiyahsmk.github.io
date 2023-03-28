<?php

class model_siswauser extends CI_model
{
    //READ
    public function getallsiswauser()
    {
        return $this->db->get('tbl_user2')->result_array();
    }
  
    public function getsiswauserbyid($id)
    {
        return $this->db->get_where('tbl_user2', ['id' => $id])->row_array();
    }
    public function countallsiswauser()
    {
        return $this->db->get('tbl_user2')->num_rows();
    }

        
}
