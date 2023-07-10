<?php
namespace App\Controllers;
use App\Models\m_noticias;

class c_pages_controller extends BaseController
{
    public function __construct()
    {    $this->session = \Config\Services::session();
        helper('url');
        $this->uri = service('uri');
    }

    public function show($slug)
    {
        $model=new m_noticias();
        $noticias=$model->findAll();
        $datosValidar=$model->findAll();
        $datosNav['datosNav']=$this->session->get();
       foreach($datosValidar as $datos){
        if($datos['slug']==$slug){
            $data=[
                "noticias"=>$datos,
                "noti"=>$noticias,
            ];
            return  view('estructura/nav',$datosNav).view('page', $data).view('estructura/footer');
        }
       }
    }
}
