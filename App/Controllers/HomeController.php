<?php
namespace  App\Controllers;

class HomeController{
    public function index(){
        \App\Views\MainView::render('home');
    }
}

?>