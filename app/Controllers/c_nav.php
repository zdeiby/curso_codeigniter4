<?php 

namespace App\Controllers;


class c_nav extends BaseController{
    protected $helpers = ['url'];
    protected $session;

    public function __construct()
    {   $this->session = \Config\Services::session();
        helper(['url','form']);
        $this->uri = service('uri');
       
    }

    public function nav(){
        $segmentos = $this->uri->getSegments();
        $data['url']=$segmentos[0]; 
       // $datos=$this->session->get();
        return view('estructura/nav');
}
    public function navE(){
        $menu1= $this->request->getVar('menu');
        
        
        $data=[
            "menu"=>$menu1,
           
        ];
      //   return print_r($data);
    }

    public function destroySession(){
        $confirm= $this->request->getVar('session');
        $this->session->destroy();
    }
    }
    