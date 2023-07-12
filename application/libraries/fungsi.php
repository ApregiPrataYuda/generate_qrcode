<?php


 Class Fungsi
{
    protected $ci;

    function __construct()
    {
        $this->ci =&  get_instance();
    }

    
    public function Pdf_generator($html, $filename, $paper , $orentation)
    {
     // instantiate and use the dompdf class
       $dompdf = new  Dompdf\Dompdf();
       $dompdf->loadHtml($html);
       
        //for your gen qr-code img to pdf
       $dompdf->set_option('isRemoteEnabled', TRUE);

       // (Optional) Setup the paper size and orientation
        $dompdf->setPaper($paper, $orentation);

       // Render the HTML as PDF
        $dompdf->render();

       // Output the generated PDF to Browser
          $dompdf->stream($filename, array('attachment' => 0));
    
    }
}