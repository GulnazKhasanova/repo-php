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

/* base.twig */
class __TwigTemplate_64c3a90d9f939aa20fbc31c82bb40cb4877050fbbc873b1e5311d682e70debbf extends Template
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
        $this->loadTemplate("header.twig", "base.twig", 1)->display($context);
        // line 2
        echo "
    ";
        // line 3
        $this->loadTemplate("home.twig", "base.twig", 3)->display($context);
        // line 4
        echo "

";
        // line 6
        $this->loadTemplate("header.twig", "base.twig", 6)->display($context);
    }

    public function getTemplateName()
    {
        return "base.twig";
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

    {% include 'home.twig' %}


{% include 'header.twig'%}", "base.twig", "C:\\OpenServer\\domains\\localhost\\my_php\\3_PHP\\templates\\base.twig");
    }
}
