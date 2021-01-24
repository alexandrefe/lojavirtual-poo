<?php
use App\Classes\Template;
use App\Classes\Parameters;

$template = new Template;
$twig = $template->init();

/**
 * Chamando o Controller digitado na url
 */
$callController = new App\Controllers\Controller;
$calledController = $callController->controller();
$controller = new $calledController();
$controller->setTwig($twig);

/**
 * Chamando o método digitado na url
 */
$callMethod = new App\Controllers\Method;
$method = $callMethod->method($controller);
/**
 * Chamando o controller atraves da classe controller e da classe method
 */
$parameters = new Parameters;
$parameter = $parameters->getParamaterMethod($controller, $method);
$controller->$method($parameter);