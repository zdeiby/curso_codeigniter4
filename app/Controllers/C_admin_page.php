<?php 

namespace App\Controllers;
use App\Models\m_noticias;

class C_admin_page extends BaseController{
    protected $helpers = ['url'];

    public function __construct()
    {
        helper('url');
        $this->uri = service('uri');
    }

    public function adminPage(){
        $segmentos = $this->uri->getSegments();
       // $model=new m_noticias();
       // $datos['noticias']=$model->findAll();

        $data['url']=$segmentos[0];
        return view('estructura/nav',$data).view('admin-page').view('estructura/footer');
}
    }
    