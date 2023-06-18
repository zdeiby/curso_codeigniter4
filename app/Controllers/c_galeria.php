<?php 

namespace App\Controllers;


class c_galeria extends BaseController{
    protected $helpers = ['url'];

    public function __construct()
    {
        helper('url');
        $this->uri = service('uri');
    }

    public function galerie(){
        $segmentos = $this->uri->getSegments();
        $data['url']=$segmentos[0];
        return view('estructura/nav',$data).view('galeria').view('estructura/footer');
}
    }
    