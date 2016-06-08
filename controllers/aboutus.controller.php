<?php

class AboutusController extends Controller{
    public function __construct($data = array())
    {
        parent::__construct($data);
        $this->model = new About();
    }

    public function index(){
        $this->data['about'] = $this->model->getInfo();
    }
}