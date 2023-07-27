<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_user extends CI_Model {

    private $table = "users";

    public function saveUserData($name, $age, $city) {
        $data = array(
            'NAME' => $name,
            'AGE' => $age,
            'CITY' => $city,
            'CREATED_AT' => date('Y-m-d H:i:s')
        );

        $this->db->insert($this->table, $data);

        if ($this->db->affected_rows() > 0) {
            $this->session->set_flashdata('pesan', 'Data Berhasil ditambahkan!');
            $this->session->set_flashdata('status', true);
        } else {
            $this->session->set_flashdata('pesan', 'Data Gagal ditambahkan!');
            $this->session->set_flashdata('status', false);
        }
    }

    public function get_all()
    {
        return $this->db->get($this->table)->result();
    }
}