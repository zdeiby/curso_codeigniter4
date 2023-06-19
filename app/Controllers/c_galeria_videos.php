<?php 

namespace App\Controllers;
use App\Models\m_multimedia;


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
        $model = new m_multimedia();
        $datos['multimedia'] = $model->findAll();
        return view('estructura/nav',$data).view('galeria_videos',$datos).view('estructura/footer');
}
    }
    