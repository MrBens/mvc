<?php

class Main extends Controller{

    public function index(){
        $this->render('home');
    }

    public function contact(){
        $this->render('contact');
    }

    public function presentation(){
        $this->render('presentation');
    }
}