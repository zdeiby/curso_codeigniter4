<?php 

namespace App\Controllers;


class c_nav extends BaseController{
    protected $helpers = ['url'];

    public function __construct()
    {
        helper(['url','form']);
        $this->uri = service('uri');
       
    }

    public function nav(){
        $segmentos = $this->uri->getSegments();
        $data['url']=$segmentos[0]; 
        return view('estructura/nav');
}
    public function navE(){
        $menu1= $this->request->getVar('menu');
        
        
        $data=[
            "menu"=>$menu1,
           
        ];
      //   return print_r($data);
    }
    }
    