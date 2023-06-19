<?php

namespace App\Controllers;
use App\Models\userModel;

class Home extends BaseController
{   
    public $modelHome;
    public $form;
    protected $helpers = ['url'];

    public function __construct()
    {
        helper('url');
        $this->uri = service('uri');
    }

    public function index()
    {   
        
      $segmentos = $this->uri->getSegments();
      $data['url']=$segmentos;
      
      return view('estructura/nav').view('welcome_message'). view('estructura/footer');
    }
}