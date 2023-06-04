<?php

namespace App\Controllers;
use App\Models\userModel;

class Home extends BaseController
{   
    public $modelHome;
    public $form;
   // public function __construct(){   helper form
      //  helper('form'); 
   /// }

   public function form2(){
    $formulario= view('estructura/header').view('estructura/form2').view('estructura/body');
    return $formulario;
   }

   public function guarda2(){
    $userModel=new userModel();
    $data=[
        'name'=> $this->request->getPost('name'),
        'email'=>$this->request->getPost('email'),

    ];

    $userModel->post($data);
   }

    public function guarda(){
            $userModel = new userModel();
        $data = [
            'name' => $this->request->getPost('name'),
            'email' => $this->request->getPost('email')
        ];
        print_r($data['name']);
        if($data['name']!=''){
            $userModel->post($data);
        }else{
            echo "lo siento papu no colocaste info";
        }  
    }
    public function formulario(){
        $estructura=view('estructura/header').view('estructura/formulario');
        
      
        return $estructura;
    }

   // public function __construct(){  // para leer el modelo recien creado 
       
   // }
    public function index()
    {   
        $this->modelHome= new userModel();
        $data=$this->modelHome->paginates(5);
        $send['nombre']=$data;
        $getOne=$this->modelHome->getOne('');
       // print_r($getOne);
        $get['one']=$getOne='lalal';
      //  $estructura=view('estructura/header').view('estructura/body',$get);
      //$post=$this->modelHome->post(['name'=>'jav','email'=>'javier']);
       // print_r($post);
        $update=$this->modelHome->updates('22',['name'=>'paco','email'=>'paco@gmail.com']);
       // $borrar=$this->modelHome->deleteOne('1');
      $estructura=view('estructura/header').view('estructura/body',$send).view('estructura/formulario').view('estructura/formulario2');
        
      
      return $estructura;
    }

    public function imagenManipulacion(){
        $imagen=\Config\Services::image()->withFile('imagen.jpg')
        ->reorient()
        ->rotate(180) 
        ->fit(150,250) //recortar  fit(150,250,'letf) //la recorta desde la izquierda
        ->resize(200,200)  //encoge
        ->save('imagen2.jpg');
       
        return view('estructura/imagen');
    }
}