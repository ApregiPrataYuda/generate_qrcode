<?php
 Class counterdata
{
    protected $ci;

    function __construct()
    {
        $this->ci =&  get_instance();
    }

    public function count_data()
    {
     $this->ci->load->model('counter_m');
       return $this->ci->counter_m->get()->num_rows();
    }
}