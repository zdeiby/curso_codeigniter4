<?php 

namespace App\Controllers;


class c_galeria extends BaseController{
    protected $helpers = ['url'];

    public function __construct()
    {   $this->session = \Config\Services::session();
        helper('url');
        $this->uri = service('uri');
    }

    public function galerie(){
        $segmentos = $this->uri->getSegments();
        $datosNav['datosNav']=$this->session->get();
        $data['url']=$segmentos[0];
        return view('estructura/nav', $datosNav).view('galeria').view('estructura/footer');
}
    }
    