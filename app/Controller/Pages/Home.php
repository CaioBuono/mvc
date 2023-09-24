<?php

namespace App\Controller\Pages;

use \App\Utils\View;

class Home extends Page {


  /**
   * Método responsável por retornar o conteúdo (view) da nossa home
   * @return string
   */
  public static function getHome() {
    //VIEW DA HOME
    $content = View::render('pages/home', [
        'name'        => 'PROJETO - MVC',
        'description' => 'Testando o modelo MVC',
        'testando'    => 'Controlando páginas'
    ]);


    //RETORNA A VIEW DA PÁGINA
    return parent::getPage('PROJETO - CONTROLE DE MVC', $content);
  }

}