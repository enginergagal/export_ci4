<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        return view('welcome_message');
    }
    public function fpdf(){
      $mpdf = new \Mpdf\Mpdf();
  		$html = view('html_to_pdf',[]);
  		$mpdf->WriteHTML($html);
  		$this->response->setHeader('Content-Type', 'application/pdf');
  		$mpdf->Output('output.pdf','I'); // opens in browser
      //return view('welcome_message');
  		//$mpdf->Output('arjun.pdf','D'); // it downloads the file into the user system, with give name

    }
}
