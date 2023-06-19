<?php 

namespace App\Controllers;


class c_mas_noticias extends BaseController{
    protected $helpers = ['url'];

    public function __construct()
    {
        helper('url');
        $this->uri = service('uri');
    }

    public function masNoticias(){
        $segmentos = $this->uri->getSegments();
        $data['url']=$segmentos[0];
        return view('estructura/nav',$data).view('mas_noticias').view('estructura/footer');
}
    }
    