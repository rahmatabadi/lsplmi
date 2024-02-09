<?php

class Bill_models extends CI_Model
{
    public function getData()
    {
        return $this->db->select('YEAR(DATE_FORMAT(b.credit_due_date,"%y-%m-%d")) as tahun, 
                                    CASE 
                                        WHEN MONTH(DATE_FORMAT(b.credit_due_date,"%y-%m-%d")) = 1 THEN "January"
                                        WHEN MONTH(DATE_FORMAT(b.credit_due_date,"%y-%m-%d")) = 2 THEN "February"
                                        WHEN MONTH(DATE_FORMAT(b.credit_due_date,"%y-%m-%d")) = 3 THEN "March"
                                        WHEN MONTH(DATE_FORMAT(b.credit_due_date,"%y-%m-%d")) = 4 THEN "April"
                                        WHEN MONTH(DATE_FORMAT(b.credit_due_date,"%y-%m-%d")) = 5 THEN "May"
                                        WHEN MONTH(DATE_FORMAT(b.credit_due_date,"%y-%m-%d")) = 6 THEN "June"
                                        WHEN MONTH(DATE_FORMAT(b.credit_due_date,"%y-%m-%d")) = 7 THEN "July"
                                        WHEN MONTH(DATE_FORMAT(b.credit_due_date,"%y-%m-%d")) = 8 THEN "August"
                                        WHEN MONTH(DATE_FORMAT(b.credit_due_date,"%y-%m-%d")) = 9 THEN "September"
                                        WHEN MONTH(DATE_FORMAT(b.credit_due_date,"%y-%m-%d")) = 10 THEN "October"
                                        WHEN MONTH(DATE_FORMAT(b.credit_due_date,"%y-%m-%d")) = 11 THEN "November"
                                        WHEN MONTH(DATE_FORMAT(b.credit_due_date,"%y-%m-%d")) = 12 THEN "December"
                                    ELSE
                                        "SALAH BULAN"
                                    END  AS bulan, MONTH(DATE_FORMAT(b.credit_due_date,"%y-%m-%d")) as bulan_number, format(sum(b.credit_amount),"C") as tagihan')
                        ->from('account a')
                        ->join('credit b', 'a.account_id = b.credit_account')
                        ->where('b.credit_status', 0)
                        ->group_by(array('MONTH(DATE_FORMAT(b.credit_due_date,"%y-%m-%d"))', 'YEAR(DATE_FORMAT(b.credit_due_date,"%y-%m-%d"))'))
                        ->order_by('YEAR(DATE_FORMAT(b.credit_due_date,"%y-%m-%d")) ASC, MONTH(DATE_FORMAT(b.credit_due_date,"%y-%m-%d")) ASC')
                        ->get()->result_array();
    }

    public function getDataDetailMonth($dataGet) {
        return $this->db->select('a.account_id, a.account_name, b.credit_due_date, format(sum(b.credit_amount), "C") as tagihan')
                        ->from('account a')
                        ->join('credit b', 'a.account_id = b.credit_account and `b`.`credit_status` = 0 and MONTH(DATE_FORMAT(b.credit_due_date, "%y-%m-%d")) = ' . $dataGet['month'] . ' and YEAR(DATE_FORMAT(b.credit_due_date, "%y-%m-%d")) = ' . $dataGet['year'] . '', 'inner')
                        ->group_by('a.account_id')
                        ->order_by('b.credit_due_date' , 'ASC')
                        ->get()->result_array();
    }

    public function getTagihanDetailAccount($dataGet)
    {
        $this->db->select('b.*, format(b.credit_amount, "C") as tagihan');
        $this->db->from('credit b');
        $this->db->where('MONTH(DATE_FORMAT(b.credit_due_date, "%y-%m-%d")) = ', $dataGet['month']);
        $this->db->where('YEAR(DATE_FORMAT(b.credit_due_date, "%y-%m-%d")) = ', $dataGet['year']);
        $this->db->where('credit_account', $dataGet['account']);
        $this->db->where('b.credit_status', 0);
        $result = $this->db->get()->result_array();
        
        return $result;
    }

    
    public function repaymentFull($month, $year, $account)
    {
        return $this->db->where('month(credit_due_date)', $month)
                        ->where('year(credit_due_date)', $year)
                        ->where('credit_account', $account)
                        ->update('credit', array('credit_status' => 1));
    }

    public function repaymentId($id)
    {
        return $this->db->where('credit_id', $id)
                        ->update('credit', array('credit_status' => 1));
    }

    public function getTotal()
    {
        return $this->db->select('IFNULL(format(sum(credit_amount),"C"),0) as jumlah')
        ->where('credit_status', '0')
        ->where('year(credit_due_date)', 'year(now())', FALSE)
        ->where('month(credit_due_date)', 'month(now())', FALSE)
        ->get('credit')->row_array();
    }

    public function getNTotal()
    {
        return $this->db->select('IFNULL(format(sum(credit_amount),"C"),0) as jumlah')
        ->where('credit_status', '0')
        ->where('year(credit_due_date)', 'year(now())', FALSE)
        ->where('month(credit_due_date)', 'month(now())+1', FALSE)
        ->get('credit')->row_array();
    }

    public function getGrandTotal()
    {
        return $this->db->select('IFNULL(format(sum(credit_amount),"C"),0) as jumlah')
        ->where('credit_status', '0')
        ->get('credit')->row_array();
    }

    public function deleteComplaint($id)
    {
        return $this->db->delete('master_category_complaint', array('category_complaint_id' => $id));
    }

    public function updateComplaint($id, $name, $desc, $departementId)
    {
        return $this->db->update('master_category_complaint', array('category_complaint_name' => $name, 'category_complaint_desc' => $desc), array('category_complaint_id' => $id));
    }

}