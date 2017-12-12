<?php
namespace Home\Controller;
use Think\Controller;
class HomeController extends Controller {
    public function index(){
       
    //$this->redirect('home/index/error');
        $this->display();
    }
    
    public function error(){
         
        $this->display();
    
    }
    
    public function item(){
        $this->redirect('home/index/error');
       // $this->display();
    
    }
   
}