<?php

class LanguagesController extends Controller{
    public function __construct($data = array())
    {
        parent::__construct($data);
        $this->model = new Language();
    }


    public function german(){
        $this->data['info'] = $this->model->getInfoGerman();
    }


    public function france(){
        $this->data['info'] = $this->model->getInfoFrance();
    }


    public function spain(){
        $this->data['info'] = $this->model->getInfoSpain();

    }

    public function children(){
        $this->data['info'] = $this->model->getInfoChildren();
    }

    public function teen(){
        $this->data['info'] = $this->model->getInfoTeen();
    }

    public function adults(){
        $this->data['info'] = $this->model->getInfoAdults();
    }

    public function special(){
        $this->data['info'] = $this->model->getInfoSpecial();
    }

    public function grammar(){
        $this->data['info'] = $this->model->getInfoGrammar();
    }

    public function videoclub(){
        $this->data['info'] = $this->model->getInfoVideoclub();
    }

    public function speaking(){
        $this->data['info'] = $this->model->getInfoSpeaking();
    }


}
