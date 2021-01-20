<?php

namespace App\Controller;

use App\Classes\Uri;

class Controller {

  const NAMESPACE_CONTROLLER = '\\App\\Controllers\\';
  
  const FOLDERS_CONTROLLER = ['Site', 'Admin'];

  const ERROR_CONTROLLER = '\\App\\Controllers\\Erro\\ErroController';
  
  private $controller;
  private $uri;

  public function __construct() {
    $this->uri = new URI;
  }

  private function getController() {

    if($this->uri->emptyUri()) {
      $explodeUri = array_filter(explode('/', $this->uri->getUri()));
      return ucfirst($explodeUri[1].'Controller');
    }

  }


}