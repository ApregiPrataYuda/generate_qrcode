<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Multiple_model extends CI_Model {

    public function generatekode()
    {
            $this->db->select('kode_qr');
            $this->db->from('dataqr');
            $this->db->order_by('kode_qr', 'desc');
            $this->db->limit(1);
            $data = $this->db->get();
            $data2 = $data->result();
            $q = "";
            foreach($data2 as $tr)
            {
                $q = $tr->kode_qr;
            }
            $kode=substr($q, -4);
            $num=(int)$kode;
            $no = 1;
            if($num==0 || $num==null)
            {
                $temp = 1;
            }
            else
            {
                $temp=$num + $no;
            }
            $semua = "ABC".str_pad($temp, 4, 0, STR_PAD_LEFT);	
            return $semua;
    }

    public function add($arr)
    {
        $this->db->insert_batch('dataqr',$arr);
    }
}