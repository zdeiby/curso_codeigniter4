<?php 

namespace App\Controllers;


class C_config extends BaseController{
    protected $helpers = ['url'];

    public function __construct()
    {    $this->session = \Config\Services::session();
        helper('url');
        $this->uri = service('uri');
    }

    public function editarNav(){
        $segmentos = $this->uri->getSegments();
        $datosNav['datosNav']=$this->session->get();
        $data['url']=$segmentos[0];
        return view('estructura/nav',$datosNav).view('config').view('estructura/footer');
}
    }
    