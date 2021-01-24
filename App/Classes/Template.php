<?php 
namespace App\Classes;

class Template {

  public function loader() {
    return new \Twig\Loader\FilesystemLoader([
      '../App/Views/site', 
      '../App/Views/Admin'
      ]);
  }
  public function init() {
    return new \Twig\Environment($this->loader(), [
      'debug' => true,
      'auto_reload' => true
    ]);
  }
}