<?php   

namespace App\Controllers;
use App\Models\userModel;

class holamundo extends BaseController
{
    public function index()
    {
        $db1= new userModel();
        $db1->GETusuarios();
        print_r($db1->name) ;
        return view('hola_mundo');
    }
}
