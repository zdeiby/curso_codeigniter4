<?php 

namespace App\Controllers;
use App\Models\M_textos;

class C_admin_page extends BaseController{
    protected $helpers = ['url'];

    public function __construct()
    {   $this->session = \Config\Services::session();
        helper('url');
        $this->uri = service('uri');
    }

    public function adminPage(){
        $segmentos = $this->uri->getSegments();
        $model=new M_textos();
        $home=$model->findAll();
        $datosView=["tof"=>"true",
                    "home"=>$home,
                    "datosNav"=> $this->session->get()  ];
        return view('estructura/nav', $datosView).view('admin-page').view('estructura/footer');
}
public function fc_admin(){
    $titulonew = $this->request->getVar('titulonew');
    $textonew = $this->request->getVar('textonew');
    $datanew=['id'=>6,
          'titulo'=>$titulonew,
          'texto'=>$textonew];
    $model=new M_textos();
    $model->save($datanew);
    echo $titulonew.$textonew;
    
  }
    }
    