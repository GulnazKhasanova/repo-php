<?php

namespace app\pageControllers;

use app\model\Product;
use Twig\Loader\FilesystemLoader;
use Twig\Environment;
use app\config\config;

class HomeController
{
    private $defaultAction = 'base';
    private $action;
   


    public function runAction($action = null) {
        
        $this->action = $action ?: $this->defaultAction;
        $method = "action" . ucfirst($this->action);
        if(method_exists($this, $method)){
            $this->$method();
        }
     }
    public function actionBase(){
        $product = new Product();
        $result = $product->getAll();        
        $url = 'http://'. $_SERVER['HTTP_HOST'] .'/my_php/img/';

        echo $this->renderTemplate('base', ['products'=> $result, 'url' => $url]);
    }

    public function actionShow(){
        $id = $_GET['i'];
        $product = new Product();
        $result = $product->getOne($id);
        $url = 'http://'. $_SERVER['HTTP_HOST'] .'/my_php/img/';
             
        echo $this->renderTemplate('showImage', ['product'=> $result, 'url' => $url]);
    }


    public function renderTemplate($template, $params =[]){

        $loader = new FilesystemLoader( ROOT_DIR .'/./templates/');
        $twig = new Environment($loader, [
        'debug' => true,
        'cache' => ROOT_DIR .'/./cache/']);

        $twig->addExtension(new \Twig\Extension\DebugExtension()); 

        return $twig->render($template .'.twig', $params);
    }
}
  
