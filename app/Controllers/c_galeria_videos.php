<?php 

namespace App\Controllers;


class c_galeria_videos extends BaseController{
    protected $helpers = ['url'];

    public function __construct()
    {
        helper('url');
        $this->uri = service('uri');
    }

    public function galeria_videos(){
        $segmentos = $this->uri->getSegments();
        $data['url']=$segmentos[0];
        return view('estructura/nav',$data).view('galeria_videos').view('estructura/footer');
}
    }
    