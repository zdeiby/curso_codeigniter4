<?php 

namespace App\Controllers;

class login extends BaseController{

    public function desdeLogin(){
        $dato['nombre']="Deiby Graciano";


        return view('login_view',$dato);
}
    }
    