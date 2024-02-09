<?php

class Master_Account_models extends CI_Model
{
    public function getData()
    {
        return $this->db->select('a.*,IFNULL(format(sum(b.credit_amount),"C"),0) as jumlah')
                        ->from('account a')
                        ->join('credit b', 'a.account_id = b.credit_account', 'LEFT')
                        ->group_by(array('a.account_id', 'b.credit_account'))
                        ->get()
                        ->result_array();
    }
    
    public function createAccount($name, $duedate)
    {
        date_default_timezone_set('Asia/Jakarta');
        $data = array(
            'account_name' => $name,
            'account_date' => $duedate
        );

        return $this->db->insert('account', $data);
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