<?php
namespace App\Controllers;
use App\Models\m_multimedia;

class c_pages_multimedia extends BaseController
{
    public function show($slug)
    {
        $model=new m_multimedia();  //modelo
        $multimedia=$model->findAll();   //get BD enviar a la vista
        $datosValidar=$model->findAll();  //get DB validacion
       foreach($datosValidar as $datos){
        if($datos['slug']==$slug){
            $data=[
                "multimedia"=>$datos,
                "noti"=>$multimedia,
            ];
            return  view('estructura/nav').view('page_multimedia_videos', $data).view('estructura/footer');
        }
       }
    }
}
