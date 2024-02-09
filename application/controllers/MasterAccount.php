<?php
defined('BASEPATH') or exit('No direct script access allowed');

class MasterAccount extends CI_Controller
{

        public function __construct()
        {
                parent::__construct();
                $this->load->model('Menu_models', 'menuModels');
                $this->load->model('Master_Account_models', 'masterAccountModels');
                is_cekLogin();
        }

        public function index()
        {
                $roleId = $this->session->userdata('roleId');

                $data['title'] = 'Master Account';
                $data['fullname'] = $this->session->fullname;

                $data['menu'] = $this->menuModels->getMenu($roleId);
                $data['menuDetail'] = $this->menuModels->getMenuDetail($roleId);
                $data['data'] = $this->masterAccountModels->getData();

                $this->load->view('templates/header', $data);
                $this->load->view('templates/topbar', $data);
                $this->load->view('templates/sidebar', $data);
                $this->load->view('templates/footer', $data);
                $this->load->view('masterAccount/index', $data);
        }

        public function createAccount()
        {
                $name = $this->input->post('name');
                $duedate = $this->input->post('duedate');
                $departementId = $this->input->post('departement');

                $create = $this->masterAccountModels->createAccount($name, $duedate);

                if ($create) {
                        echo json_encode(array("success" => "Success"));
                } else {
                        echo json_encode(array("error" => "Failed Create Data"));
                }

        }
}