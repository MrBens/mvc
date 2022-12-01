<?php

class Presentation extends Controller{

    public function index(){
        $this->render('fonctionnalTraining');
    }

    public function cycling(){
        $this->render('cycling');
    }

    public function crossfit(){
        $this->render('crossfit');
    }

    public function fonctionnalTraining(){
        $this->render('fonctionnalTraining');
    }

    public function personnalTraining(){
        $this->render('personnalTraining');
    }
}