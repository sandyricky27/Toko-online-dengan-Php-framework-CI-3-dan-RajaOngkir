<?php 

class M_pelanggan extends CI_Model
{
    public function register($data)
    {
        $this->db->insert('tbl_pelanggan', $data);
    }

    public function get_all_data()
    {
        $this->db->select('*');
        $this->db->from('tbl_pelanggan');
        $this->db->order_by('id_pelanggan','desc');
        return $this->db->get()->result();
    }
}

?>