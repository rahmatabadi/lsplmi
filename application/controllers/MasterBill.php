<?php
defined('BASEPATH') or exit('No direct script access allowed');

class MasterBill extends CI_Controller
{

        public function __construct()
        {
                parent::__construct();
                $this->load->model('Menu_models', 'menuModels');
                $this->load->model('Master_Bill_models', 'masterBillModels');
                is_cekLogin();
        }

        public function index()
        {
                $roleId = $this->session->userdata('roleId');

                $data['title'] = 'Register Bill';
                $data['fullname'] = $this->session->fullname;

                $data['menu'] = $this->menuModels->getMenu($roleId);
                $data['menuDetail'] = $this->menuModels->getMenuDetail($roleId);
                $data['account'] = $this->masterBillModels->getAccount();
                // $data['data'] = $this->masterBillModels->getData();

                $this->load->view('templates/header', $data);
                $this->load->view('templates/topbar', $data);
                $this->load->view('templates/sidebar', $data);
                $this->load->view('templates/footer', $data);
                $this->load->view('masterBill/index', $data);
        }

        public function createBill()
        {
                $account = $this->input->post('account');
                $billName = $this->input->post('billName');
                $nominal = $this->input->post('nominal');
                $tenor = $this->input->post('tenor');
                $dueDate = $this->input->post('dueDate');

                $create = $this->masterBillModels->createBill($account, $billName, $nominal, $tenor, $dueDate, $this->session->fullname);
                
                if ($create) {
                        echo json_encode(array("success" => "Success"));
                } else {
                        echo json_encode(array("error" => "Failed Create Data"));
                }

        }

}