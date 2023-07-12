<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dash_m extends CI_Model {


    function get()  {
         $sql = "SELECT * FROM dataqr";
         $query = $this->db->query($sql);
         return $query;
    }

}