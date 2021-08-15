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

/* showImage.twig */
class __TwigTemplate_ae0ef03c647c94ffde68edb28cf353f954138a8c3254ab21b19ee1854cc97cdd extends Template
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
        $this->loadTemplate("header.twig", "showImage.twig", 1)->display($context);
        // line 2
        echo "
    ";
        // line 3
        $this->loadTemplate("show.twig", "showImage.twig", 3)->display($context);
        // line 4
        echo "

";
        // line 6
        $this->loadTemplate("footer.twig", "showImage.twig", 6)->display($context);
    }

    public function getTemplateName()
    {
        return "showImage.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  48 => 6,  44 => 4,  42 => 3,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% include 'header.twig' %}

    {% include 'show.twig' %}


{% include 'footer.twig'%}", "showImage.twig", "C:\\OpenServer\\domains\\localhost\\my_php\\3_PHP\\templates\\showImage.twig");
    }
}
