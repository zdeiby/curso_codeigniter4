<?php 

namespace App\Controllers;
use App\Models\M_puntosAtencion;


class c_contactenos extends BaseController{
    protected $helpers = ['url'];

    public function __construct()
    {
        helper('url');
        $this->uri = service('uri');
    }

    public function contactar(){ 
        $datos=new M_puntosAtencion();
        $segmentos = $this->uri->getSegments();
        $barrio = $this->request->getVar('barrio');
        $direccion = $this->request->getVar('direccion');
        $dir=['barrio'=>$barrio,
            'direccion'=>$direccion];
       
       
        $mostrar['direcciones']=$datos->findAll();
       if($barrio !='' && $direccion !=''){
        $datos->insert($dir);
       
       }  
        $data['tof']="true";
        return view('estructura/nav',$data).view('contactenos',$mostrar).view('estructura/footer');
}
 public function cDelete(){
    $direccionBorrar = $this->request->getVar('id');
    $datosBorrar=new M_puntosAtencion();
    $datosBorrar->delete( $direccionBorrar);
    
}
   
    }
    