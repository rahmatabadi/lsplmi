<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Apl1 extends CI_Controller
{

        public function __construct()
        {
                parent::__construct();
                $this->load->model('Menu_models', 'menuModels');
                $this->load->model('Apl1_models', 'apl1Models');
                is_cekLogin();
        }

        public function index()
        {
                $roleId = $this->session->userdata('roleId');

                $data['title'] = 'PERMOHONAN SERTIFIKASI KOMPETENSI';
                $data['fullname'] = $this->session->fullname;

                $data['menu'] = $this->menuModels->getMenu($roleId);
                $data['menuDetail'] = $this->menuModels->getMenuDetail($roleId);
                $data['create'] = 'apl1/create';
                //$data['data'] = $this->masterAccountModels->getData();

                $this->load->view('templates/header', $data);
                $this->load->view('templates/topbar', $data);
                $this->load->view('templates/sidebar', $data);
                $this->load->view('templates/footer', $data);
                $this->load->view('apl1/index', $data);
        }

        public function create()
        {
                $roleId = $this->session->userdata('roleId');

                $data['title'] = 'PERMOHONAN SERTIFIKASI KOMPETENSI';
                $data['fullname'] = $this->session->fullname;

                $data['menu'] = $this->menuModels->getMenu($roleId);
                $data['menuDetail'] = $this->menuModels->getMenuDetail($roleId);
                //$data['data'] = $this->masterAccountModels->getData();

                $this->load->view('templates/header', $data);
                $this->load->view('templates/topbar', $data);
                $this->load->view('templates/sidebar', $data);
                $this->load->view('templates/footer', $data);
                $this->load->view('apl1/create', $data);
        }
}