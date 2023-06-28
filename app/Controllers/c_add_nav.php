<?php 

namespace App\Controllers;


class c_add_nav extends BaseController{
    protected $helpers = ['url'];

    public function __construct()
    {
        helper('url');
        $this->uri = service('uri');
    }

    public function editarNav(){
        $segmentos = $this->uri->getSegments();
        $data['url']=$segmentos[0];
        return view('estructura/nav',$data).view('add-nav').view('estructura/footer');
}
    }
    