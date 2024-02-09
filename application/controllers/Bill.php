<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Bill extends CI_Controller
{

        public function __construct()
        {
                parent::__construct();
                $this->load->model('Menu_models', 'menuModels');
                $this->load->model('Bill_models', 'BillModels');
                is_cekLogin();
        }

        public function index()
        {
                $roleId = $this->session->userdata('roleId');

                $data['title'] = 'Monthly Bill Summary';
                $data['fullname'] = $this->session->fullname;

                $data['menu'] = $this->menuModels->getMenu($roleId);
                $data['menuDetail'] = $this->menuModels->getMenuDetail($roleId);
                $data['data'] = $this->BillModels->getData();

                $this->load->view('templates/header', $data);
                $this->load->view('templates/topbar', $data);
                $this->load->view('templates/sidebar', $data);
                $this->load->view('templates/footer', $data);
                $this->load->view('bill/index', $data);
        }

        public function detail()
        {
                $roleId = $this->session->userdata('roleId');
                $data['month'] = $_GET['month'];
                $data['year'] = $_GET['year'];

                $data['title'] = 'Monthly Bill';
                $data['fullname'] = $this->session->fullname;

                $data['menu'] = $this->menuModels->getMenu($roleId);
                $data['menuDetail'] = $this->menuModels->getMenuDetail($roleId);
                $data['data'] = $this->BillModels->getDataDetailMonth($data);

                $this->load->view('templates/header', $data);
                $this->load->view('templates/topbar', $data);
                $this->load->view('templates/sidebar', $data);
                $this->load->view('templates/footer', $data);
                $this->load->view('bill/detail_month', $data);
        }

        public function detail_account()
        {
                $roleId = $this->session->userdata('roleId');
                $data['month'] = $_GET['month'];
                $data['year'] = $_GET['year'];
                $data['account'] = $_GET['account'];

                $data['title'] = 'Account Bill';
                $data['fullname'] = $this->session->fullname;

                $data['menu'] = $this->menuModels->getMenu($roleId);
                $data['menuDetail'] = $this->menuModels->getMenuDetail($roleId);
                $data['data'] = $this->BillModels->getTagihanDetailAccount($data);

                $this->load->view('templates/header', $data);
                $this->load->view('templates/topbar', $data);
                $this->load->view('templates/sidebar', $data);
                $this->load->view('templates/footer', $data);
                $this->load->view('bill/detail_account', $data);
        }

        public function repaymentId()
        {
                $id = $this->input->post('id');

                $create = $this->BillModels->repaymentId($id);

                if ($create) {
                        echo json_encode(array("success" => "Success"));
                } else {
                        echo json_encode(array("error" => "Failed Repayment"));
                }

        }

        public function repaymentFull()
        {
                $month = $this->input->post('month');
                $year = $this->input->post('year');
                $account = $this->input->post('account');

                $create = $this->BillModels->repaymentFull($month, $year, $account);

                if ($create) {
                        echo json_encode(array("success" => "Success"));
                } else {
                        echo json_encode(array("error" => "Failed Repayment"));
                }

        }
}