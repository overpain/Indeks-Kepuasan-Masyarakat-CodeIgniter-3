<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        is_logged_in();
        $this->load->model('polling');
    }

    public function index()
    {
        $this->load->model('polling');
        $data['title'] = 'Dashboard';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['graph'] = $this->polling->graph();
        $data['menu'] = $this->db->get('polling')->result_array();

        $date_start = $this->input->get('date_start');
        $date_ended = $this->input->get('date_ended');

        $data['graph'] = $this->polling->graph($date_start, $date_ended);

        $this->db->select('*');
        if (!empty($date_start) && !empty($date_ended)) {
            $this->db->where('tanggal >=', $date_start);
            $this->db->where('tanggal <=', $date_ended);
        }
        $getdata = $this->db->get('polling')->result_array();
        $data['menu'] = $getdata;

        $data['date_start'] = $date_start;
        $data['date_ended'] = $date_ended;

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('admin/index', $data);
        $this->load->view('templates/footer');
    }

    public function dataset()
    {
        $this->load->model('polling');
        $data['title'] = 'Polling';
        $data['menu'] = $this->db->get('polling')->result_array();
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();


        $date_start = $this->input->get('date_start');
        $date_ended = $this->input->get('date_ended');

        $data['graph'] = $this->polling->graph($date_start, $date_ended);

        $this->db->select('*');
        if (!empty($date_start) && !empty($date_ended)) {
            $this->db->where('tanggal >=', $date_start);
            $this->db->where('tanggal <=', $date_ended);
        }
        $getdata = $this->db->get('polling')->result_array();
        $data['menu'] = $getdata;

        $data['date_start'] = $date_start;
        $data['date_ended'] = $date_ended;

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('admin/dataset', $data);
        $this->load->view('templates/footer');
    }

    public function pdf()
    {
        $this->load->library('mypdf');
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();


        $date_start = $this->input->get('date_start');
        $date_ended = $this->input->get('date_ended');

        $data['graph'] = $this->polling->graph($date_start, $date_ended);

        $this->db->select('*');
        if (!empty($date_start) && !empty($date_ended)) {
            $this->db->where('tanggal >=', $date_start);
            $this->db->where('tanggal <=', $date_ended);
        }
        $getdata = $this->db->get('polling')->result_array();
        $data['menu'] = $getdata;

        $this->mypdf->generate('templates/pdf', $data, 'laporan-ikm', 'A4', 'potrait');
    }
}
