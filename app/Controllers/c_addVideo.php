<?php 

namespace App\Controllers;
use App\Models\m_multimedia;


class c_addVideo extends BaseController{
    protected $helpers = ['url'];

    public function __construct()
    {
        helper('url');
        $this->uri = service('uri');
    }

    public function aggVideos(){
        $titulo = $this->request->getVar('titulo');
        $url = $this->request->getVar('url');
        
        $datos = [
            'name' => $titulo,
            'url' => $url,
            'slug' => str_replace(' ', '-', $titulo),
        ];
        
        
        //var_dump($datos);
        $model = new m_multimedia();
        if($datos['name'] !=''){
            $model->insert($datos); 
        }
     //  var_dump($datos);


        $segmentos = $this->uri->getSegments();
        $data['url']=$segmentos[0];
        return view('estructura/nav',$datos).view('agg_videos').view('estructura/footer');
}
    }
    