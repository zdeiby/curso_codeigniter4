<?php 

namespace App\Controllers;


class c_loginadm extends BaseController{
    protected $helpers = ['url'];

    public function __construct()
    {
        helper('url');
        $this->uri = service('uri');
    }

    public function login(){
        $segmentos = $this->uri->getSegments();
        $data['url']=$segmentos[0];
        return view('loginadmin');
}
    }
    