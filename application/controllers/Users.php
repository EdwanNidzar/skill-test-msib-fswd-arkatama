<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Users extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('M_user');
    }

	public function index()
	{
        $data['title'] = "TES FWSD Arkatama | DASHBOARD";
        $this->load->view('temp/head', $data);
        $this->load->view('temp/navbar');
		$this->load->view('homeview');
        $this->load->view('temp/footer');
	}

    public function data()
	{
        $data['users'] = $this->M_user->get_all();
        $data['title'] = "TES FWSD Arkatama | Data Pengguna";
        $this->load->view('temp/head', $data);
        $this->load->view('temp/navbar');
		$this->load->view('dataview',$data);
        $this->load->view('temp/footer');
	}

    public function input() {
        if ($this->input->post('input')) {
            $input_data = $this->input->post('input');
    
            // Ubah seluruh data menjadi uppercase
            $input_data = strtoupper($input_data);
    
            // Pisahkan nama, usia, dan kota menggunakan regex
            $pattern = '/^([A-Z\s]+)\s+(\d+)\s*(?:TAHUN|THN|TH)?\s+([A-Z\s]+)$/i';
            preg_match($pattern, $input_data, $matches);
    
            if (count($matches) === 4) {
                $name = trim($matches[1]);
                $age = intval($matches[2]);
                $city = strtoupper(trim($matches[3]));
    
                $this->M_user->saveUserData($name, $age, $city);
                redirect('users/data');                
            }
        } else {
            $data['title'] = "TES FWSD Arkatama | DASHBOARD";
            $this->load->view('temp/head', $data);
            $this->load->view('temp/navbar');
            $this->load->view('inputview');
            $this->load->view('temp/footer');
        }
    }

}
