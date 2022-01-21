<?php defined('BASEPATH') OR exit('no direct script access allowed');

class M_Users extends CI_Model
{
    private $_table = "users";

    public function getAll()
    {
        $this->db->select("*");
        $this->db->from($this->_table.' a');

        $query = $this->db->get();
        return $query;
    }

    public function getById($id)
    {
        return $this->db->get_where($this->_table, ["id" => $id])->row();
    }

    public function getAll_Jabatan()
    {
        return $this->db->get($this->_table2)->result();
    }
    
    public function save($data = array())
    {
        return $this->db->insert($this->_table, $data);
    }
    
    public function update($id, $data = array())
    {
        return $this->db->update($this->_table, $data, array('id' => $id));
    }

    public function delete($id)
    {
        return $this->db->delete($this->_table, array("id" => $id));
    }

}