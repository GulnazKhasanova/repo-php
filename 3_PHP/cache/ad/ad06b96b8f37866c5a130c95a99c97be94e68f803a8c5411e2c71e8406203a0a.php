<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* header.twig */
class __TwigTemplate_11bce38bf5b9e29a3bb715204222eb6f8629a4b2c79151198dfa8136f98f27e0 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<!doctype html>
<html lang=\"en\">
<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\"
          content=\"width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"ie=edge\">
    <title>Document</title>
    <style>
        .window_img{
            position: relative;
            display: flex;
        }
        .mini_img{
            width: 250px;
            margin: 10px;
            border-radius: 5px;
            box-shadow: 0 0 5px #a3a3a3;
        }
        main{
            width: auto;
            height: auto;
        }
        .img{
            width: 800px;
            border: 1px solid #2c3e50;
            border-radius: 7px;
        }
        
    </style>
</head>
<body>
<header>
   
</header>";
    }

    public function getTemplateName()
    {
        return "header.twig";
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!doctype html>
<html lang=\"en\">
<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\"
          content=\"width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"ie=edge\">
    <title>Document</title>
    <style>
        .window_img{
            position: relative;
            display: flex;
        }
        .mini_img{
            width: 250px;
            margin: 10px;
            border-radius: 5px;
            box-shadow: 0 0 5px #a3a3a3;
        }
        main{
            width: auto;
            height: auto;
        }
        .img{
            width: 800px;
            border: 1px solid #2c3e50;
            border-radius: 7px;
        }
        
    </style>
</head>
<body>
<header>
   
</header>", "header.twig", "C:\\OpenServer\\domains\\localhost\\my_php\\3_PHP\\templates\\header.twig");
    }
}
