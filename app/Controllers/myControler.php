<?php 

namespace App\Controllers;
use App\Models\userModel;

class myControler extends BaseController{
    public $session;
    public function __construct()
    {
        $this->session=\Config\Services::session();
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

public function ponerdatos(){

    $newData=[
        'name'=>'novatos',
        'email'=>'novatod@info.com',
        'login'=>true,
    ];
   
    $this->session->set($newData);
    echo $this->session->get('email');
    
}

public function leerdatos(){
  if($this->session->has('name')){
    echo "email: " . $this->session->get('email')."<br>";
    echo "name: " . $this->session->get('name')."<br>";
    echo "login: " . $this->session->get('login')."<br>";
    
  }else{
    echo "no hay datos";
  }
    
    
}
public function quitardatos(){
    $this->session->remove('login');
}
public function borrartodo(){
    $this->session->destroy();
}


    public function formulario(){
        $estructura=view('estructura/header').view('estructura/formulario');
        
    
        return $estructura;
    }

  
    }
    