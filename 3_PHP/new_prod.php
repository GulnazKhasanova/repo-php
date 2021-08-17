<?php
    include "./engine/Autoload.php";
    include "./config/config.php";
    
    use app\engine\Autoload;
    use app\model\{Product,user};

    spl_autoload_register([new Autoload(),'loadClass']);
   
    use Twig\Loader\FilesystemLoader;
    use Twig\Environment;

require_once './vendor/autoload.php';

$loader = new FilesystemLoader(__DIR__.'/./templates/');

$twig = new Environment($loader, [
    'debug' => true,
    'cache' => __DIR__.'/./cache/']);
  
    $twig->addExtension(new \Twig\Extension\DebugExtension()); 

//    READ
   
   $controllerName = $_GET['c'] ?: 'home';
   $controllerClass = "app\\pageControllers\\" . ucfirst($controllerName)."Controller";

   $actionName = $_GET['a'];
   $id = $_GET['i'];

   
    
   try { 
       if(class_exists($controllerClass)){
            $controller = new $controllerClass();
            $controller->runAction($actionName);
         }
    
}
catch (LoaderError $e) {
    echo "Template is'nt found ";
}
catch (SuntaxError $e){
    echo "Suntax error";
    echo $e->getMessage();
}
catch (RuntimeError $e){

}
//CREATE
//    $product = new Product("","rem","152","RASSIA","Matreshka","1",0, "0");
//    $product->add();



    //    UPDATE

//$product->name = "";
//$product->update();/*нужно создать*/
//
////DELETE
//    $product->del();



?>