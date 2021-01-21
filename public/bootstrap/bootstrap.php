<?php
/**
 * Chamando o Controller digitado na url
 */
$callController = new App\Controllers\Controller;
$calledController = $callController->controller();
$controller = new $calledController();

/**
 * Chamando o método digitado na url
 */
$callMethod = new App\Controllers\Method;
$method = $callMethod->method($controller);
/**
 * Chamando o controller atraves da classe controller e da classe method
 */
$controller->$method();