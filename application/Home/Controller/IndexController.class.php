<?php
namespace Home\Controller;
use Common\Controller\HomeBaseController;
class IndexController extends HomeBaseController {
    public function index(){
        //$this->show('','utf-8');
        $this->display();
    }
}