<?php
namespace App\Views;

class MainView {
    #renderizando o Home 
public static function render($filename) {
    include('pages/'.$filename.'.php');
}
#renderizano o painel
    public static  function renderPainel($filename){
        include('painel/'.$filename.'.php');
    }
}
?>