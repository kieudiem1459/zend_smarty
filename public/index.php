<?php

include_once '../define.php';

require_once 'Zend/Application.php';
require_once 'Zend/Controller/Front.php';
require_once 'Zend/Controller/Action/Helper/ViewRenderer.php';
//require_once 'Zend/Controller/Router/Route.php';
//require_once 'Zend/Controller/Router/Rewrite.php';
require_once 'Zend/Session.php';


$front = Zend_Controller_Front::getInstance();

//$front_request = new Zend_Controller_Request_Http();
//$front::setRequest($front_request);
//$front->setControllerDirectory('../application/controllers');

/*$router = $front->getRouter();
$route = new Zend_Controller_Router_Route(
    ':controller/:action',
    array(
        'controller' => 'admin'
    )
);
$router->addRoute('admin', $route);*/

$application = new Zend_Application(
    APPLICATION_ENV,
    APPLICATION_PATH . '/configs/application.ini'
);

$config_app = $application->bootstrap()->getOptions();

$view = new Ext_View_Smarty($config_app['smarty']);

$render = new Zend_Controller_Action_Helper_ViewRenderer($view);


$render->setViewBasePathSpec(APPLICATION_PATH . '/smarty')
    ->setViewScriptPathSpec(':controller/:action.:suffix')
    ->setViewScriptPathNoControllerSpec(':action.:suffix')
    ->setViewSuffix('tpl');

Zend_Controller_Action_HelperBroker::addHelper($render);

$layout = Zend_Layout::startMvc(
    array(
        'layoutPath' => APPLICATION_PATH . '/smarty',
        'layout' => 'layout_user',
        'contentKey' => 'content'
    )
);
$layout->setViewSuffix('tpl');
Zend_Session::start();
$userSessionNamespace = new Zend_Session_Namespace('userSessionNamespace');
$front->dispatch();
/*try{

}catch (Exception $e){
    var_dump($e);
}*/









