<?php
namespace App\Controllers;
use App\Models\m_noticias;

class c_pages_controller extends BaseController
{
    public function show($slug)
    {
        $model=new m_noticias();
        $noticias=$model->findAll();
        $datosValidar=$model->findAll();
       foreach($datosValidar as $datos){
        if($datos['slug']==$slug){
            $data=[
                "noticias"=>$datos,
                "noti"=>$noticias,
            ];
            return  view('estructura/nav').view('page', $data).view('estructura/footer');
        }
       }
    }
}
