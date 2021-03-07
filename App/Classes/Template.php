<?php
namespace App\Classes;

class Template
{
    public function loader()
    {
        return new \Twig\Loader\FilesystemLoader([
          dirname(__FILE__, 2).'/Views/site/',
          dirname(__FILE__, 2).'/Views/Admin/'
      ]); 
    }
    public function init()
    {
        return new \Twig\Environment($this->loader(), [
          'debug' => true,
          'auto_reload' => true
        ]);
    }
}
