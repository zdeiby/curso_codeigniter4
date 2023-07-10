<?php 

namespace App\Controllers;
use App\Models\m_noticias;



class c_mas_noticias extends BaseController{
    protected $helpers = ['url'];

    public function __construct()
    {    $this->session = \Config\Services::session();
        helper(['url','form']);
        $this->uri = service('uri');
    }

    public function masNoticias(){
       
      
        $segmentos = $this->uri->getSegments();
        $model=new m_noticias();
        $datosNav['datosNav']=$this->session->get();
        $titulo = $this->request->getVar('titulo');
        $url = $this->request->getVar('url');
        $texto = $this->request->getVar('texto');
        $id = $this->request->getVar('id');
        $datos = [
            'id'=>$id,
            'titulo' => $titulo,
            'url' => $url,
            'texto' => $texto,
        ];
        if($datos['titulo'] !=''){
            var_dump($model->save($datos)); 
        }
        
        $datos['noticias']=$model->findAll();
        $data['url']=$segmentos[0];
        return view('estructura/nav',$datosNav).view('mas_noticias',$datos).view('estructura/footer');
}
public function miMetodo()
{
    //$request = \Config\Services::Request();
    $model=new m_noticias();
    $ident = $this->request->getVar('id');
    $model->delete($ident);
    return $this->response->setJSON(['message' => 'Datos recibidos correctamente']);
}
    
    }
    