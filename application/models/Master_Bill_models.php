<?php

class Master_Bill_models extends CI_Model
{
    public function getAccount()
    {
        return $this->db->get('account')->result_array();
    }

    public function createBill($account, $billName, $nominal, $tenor, $dueDate, $maker)
    {
        //Get Tanggal Tagihan
        $this->db->select('account_date');
        $this->db->from('account');
        $this->db->where('account_id', $account);
        $this->db->limit(1);
        $getDate = $this->db->get()->result_array();

        if (!empty($getDate)) {
            $finalStartDate = $dueDate ."-". $getDate[0]["account_date"];

            $time = strtotime($finalStartDate);
            $finalStartDate = date("Y-m-d", strtotime("-1 month", $time));

            for ($x = 1; $x <= $tenor; $x++) {
                $time = strtotime($finalStartDate);
                $final = date("Y-m-d", strtotime("+1 month", $time));
                //echo "Tagihan Ke : $x Tanggal Jatuh Tempo : $final \n";
                $finalStartDate = $final;

                $data = [
                    'credit_desc'               => $billName,
                    'credit_amount'             => $nominal,
                    'credit_installment'        => $x,
                    'credit_installment_finsih' => $tenor,
                    'credit_due_date'           => $finalStartDate,
                    'credit_account'            => $account,
                    'credit_status'             => '0',
                    'create_by'                 => $maker
                ];
                
                $this->db->insert('credit', $data);
            } 

            return true;
        } else {
            return false;
        }
    }

}