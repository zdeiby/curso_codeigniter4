<?php 

namespace App\Controllers;


class c_editar_inicio extends BaseController{
    protected $helpers = ['url'];

    public function __construct()
    {
        helper('url');
        $this->uri = service('uri');
    }

    public function editar(){
        $segmentos = $this->uri->getSegments();
        $data['url']=$segmentos[0];
        return view('estructura/nav',$data).view('editar_inicio').view('estructura/footer');
}
    }
    