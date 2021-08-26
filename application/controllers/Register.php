<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Register extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->model('auth');
    }

    public function index()
    {
        $this->load->view('view_register');
    }

    public function proses()
    {
        $this->form_validation->set_rules('nama', 'nama', 'trim|required|min_length[1]|max_length[255]|is_unique[tb_user.nama]');
        $this->form_validation->set_rules('email', 'email', 'trim|required|min_length[1]|max_length[255]');
        $this->form_validation->set_rules('no_telp', 'no_telp', 'required|max_length[13]|numeric');
        $this->form_validation->set_rules('password', 'password', 'trim|required|min_length[1]|max_length[255]');
        $this->form_validation->set_rules('password2', 'Confirm Password', 'matches[password]');
        $this->form_validation->set_rules('berat_badan', 'berat_badan', 'required|max_length[12]|numeric');
        $this->form_validation->set_rules('tinggi_badan', 'tinggi_badan', 'required|max_length[12]|numeric');
        if ($this->form_validation->run() == true) {
            $nama = $this->input->post('nama');
            $email = $this->input->post('email');
            $no_telp = $this->input->post('no_telp');
            $password = $this->input->post('password');
            $berat_badan = $this->input->post('berat_badan');
            $tinggi_badan = $this->input->post('tinggi_badan');
            $indeks = $this->input->post('indeks');
            $keterangan = $this->input->post('keterangan');

            $cm = $tinggi_badan / 100;
            $kuadrat = pow($cm, 2);
            $indeks = $berat_badan / $kuadrat;
            if ($indeks >= 25) {
                $keterangan = "Obesitas";
            } else if (($indeks >= 23) and ($indeks <= 24.9)) {
                $keterangan = "kelebihan berat badan";
            } else if (($indeks >= 18.5) and ($indeks <= 22.9)) {
                $keterangan = "Normal";
            } else if ($indeks < 18.5) {
                $keterangan = "Kurus";
            }

            $this->auth->register($nama, $email, $no_telp, $password, $berat_badan, $tinggi_badan, $indeks, $keterangan);
            $this->session->set_flashdata('success_register', 'Proses Pendaftaran User Berhasil');
            redirect('login');
        } else {
            $this->session->set_flashdata('error', validation_errors());
            redirect('register');
        }
    }
}
