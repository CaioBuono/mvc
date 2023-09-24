<?php

namespace App\Utils;

class View {


  /**
   * Método responsável por retornar o conteúdo de uma view
   * @param stirng $view
   * @return string
   */
  private static function getContentView($view) {
    $file = __DIR__ . '/../../resources/view/' . $view . '.html';
    return file_exists($file) ? file_get_contents($file) : '';
  }


  /**
   * Método responsávle por retornar o conteúdo renderizado de uma view 
   * @param string
   * @return string
   */
  public static function render($view) {
    //CONTEÚDO DA VIEW
    $contentView = self::getContentView($view);

    //RETORNA O CONTEÚDO RENDERIZADO
    return $contentView;
  }

}