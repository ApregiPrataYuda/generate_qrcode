<?php

class counter_m extends CI_model
{
    public function get($id = null)
    {
       $this->db->from('dataqr');
       if ($id != null) {
          $this->db->where('id', $id);
       }
        $query = $this->db->get();
        return  $query;
    }
}