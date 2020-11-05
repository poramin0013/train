<?php
class Train extends CI_Model
{
    function __construct()
    {
    parent::__construct();
    }

    function about_insert($data)
    {
        $this->db->insert('test', $data);
    }

    

    function showall()
    {
       
    $this->db->where('To_huayrat <=','09.00');
        $query = $this->db->get('test');
        
        return $query;
    }
}

