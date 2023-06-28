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
        $editable= $this->request->getVar('editable');
        echo $editable."HOLAAAA";
        return view('estructura/nav');
}
    public function navE(){
      //  $editable= $this->request->getVar('editable');
       // echo $editable."HOLAAAA";
    }
    }
    