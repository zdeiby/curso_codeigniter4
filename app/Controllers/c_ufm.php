<?php 

namespace App\Controllers;


class c_ufm extends BaseController{
    protected $helpers = ['url'];

    public function __construct()
    {
        helper('url');
        $this->uri = service('uri');
    }

    public function ufmedellin(){
        $segmentos = $this->uri->getSegments();
        $data['url']=$segmentos[0];
        return view('estructura/nav',$data).view('ufm').view('estructura/footer');
}
    }
    