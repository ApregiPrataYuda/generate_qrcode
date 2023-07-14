<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class qr_model extends CI_Model {

	
	public function checkdata()
	{
        $this->db->from('dataqr');
        $this->db->order_by('id', 'desc');
        $query = $this->db->get();
        return $query;
	}

  public function get_count_all() {
    return $this->db->count_all('dataqr');
}

  public function getdata($limit, $start) {
    $this->db->order_by('id', 'desc');
    $query =  $this->db->get('dataqr',$limit, $start);
     return $query;
  }

  public function Add($post) {
        $this->db->insert('dataqr',$post);
 }

//  function data($number,$offset){
//   return $query = $this->db->get('dataqr',$number,$offset)->result();		
// }

// function jumlah_data(){
//   return $this->db->get('dataqr')->num_rows();
// }




public function singelpdf($codex)  {
    $query = $this->db->query("SELECT * FROM dataqr WHERE  kode_qr = '$codex' ");
    return $query;
}

public function singelexcel($codex)  {
    $query = $this->db->query("SELECT * FROM dataqr WHERE  kode_qr = '$codex' ");
    return $query;
}

public function delete($kode_qr){
  $this->db->where_in('kode_qr', $kode_qr);
$this->db->delete('dataqr');
}


function checkimg($kode_qr){
  $this->db->from('dataqr');
  $this->db->where_in('kode_qr', $kode_qr);
 $query =  $this->db->get();
 return $query;
}




function ambilalldata() {
  $sql = "SELECT * FROM dataqr ORDER BY kode_qr DESC";
  $query = $this->db->query($sql)->result();
  return $query;
}

function alls($pointpost) {
  $sql = "SELECT * FROM dataqr WHERE kode_qr = '$pointpost'";
  $query = $this->db->query($sql)->result();
  return $query;
}
}
