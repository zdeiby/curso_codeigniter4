<?php 

namespace App\Controllers;
use App\Models\m_noticias;


class c_agg_noticia extends BaseController{
    protected $helpers = ['url'];

    public function __construct()
    {
        helper('url');
        $this->uri = service('uri');
    }

    public function aggNoticia(){
        $titulo = $this->request->getVar('titulo');
        $url = $this->request->getVar('url');
        $texto = $this->request->getVar('texto');
        
        $datos = [
            'titulo' => $titulo,
            'url' => $url,
            'texto' => $texto,
        ];
        
        
        var_dump($datos);
        $model = new m_noticias();
        if($datos['titulo'] !=''){
            var_dump($model->insert($datos)); 
        }
       


        $segmentos = $this->uri->getSegments();
        $data['url']=$segmentos[0];
        return view('estructura/nav',$datos).view('agg_noticia').view('estructura/footer');
}
    }
    