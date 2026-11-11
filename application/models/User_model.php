
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User_model extends CI_Model
{
    public function get_by_username($username)
    {
        return $this->db
                    ->get_where('users', array(
                        'username' => $username
                    ))
                    ->row();
    }

    public function get_by_id($id)
    {
        return $this->db
                    ->get_where('users', array(
                        'id' => $id
                    ))
                    ->row();
    }

    public function insert($data)
    {
        return $this->db->insert('users', $data);
    }

    public function get_all()
    {
        return $this->db
                    ->order_by('id', 'DESC')
                    ->get('users')
                    ->result();
    }

    public function count_all()
    {
        return $this->db->count_all('users');
    }

    public function count_admin()
    {
        return $this->db
                    ->where('role', 'admin')
                    ->count_all_results('users');
    }

    public function delete($id)
    {
        return $this->db->delete('users', array(
            'id' => $id
        ));
    }
}
