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

/* home.twig */
class __TwigTemplate_48409534053c56f52b3fb8e03a6e945079c6989956b080b6bc7af5b753875ac5 extends Template
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
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["products"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 2
            echo "<pre>
<div class=\"window_img\">
        <a href=\"new_prod.php?c=home&a=show&i=";
            // line 4
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "id", [], "any", false, false, false, 4), "html", null, true);
            echo "\"  target=\"_blank\"><img class=\"mini_img\" src=\"";
            echo twig_escape_filter($this->env, ($context["url"] ?? null), "html", null, true);
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "imgmini", [], "any", false, false, false, 4), "html", null, true);
            echo "\"  
                                            data-src=\"";
            // line 5
            echo twig_escape_filter($this->env, ($context["url"] ?? null), "html", null, true);
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "imgmini", [], "any", false, false, false, 5), "html", null, true);
            echo "\" alt=\"картинка лета\"/></a>
    </div>
</pre>
<div>";
            // line 8
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "alias", [], "any", false, false, false, 8), "html", null, true);
            echo "</div>
<div>";
            // line 9
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "price", [], "any", false, false, false, 9), "html", null, true);
            echo "</div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 11
        echo "

";
    }

    public function getTemplateName()
    {
        return "home.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  71 => 11,  63 => 9,  59 => 8,  52 => 5,  45 => 4,  41 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% for item in products %}
<pre>
<div class=\"window_img\">
        <a href=\"new_prod.php?c=home&a=show&i={{ item.id }}\"  target=\"_blank\"><img class=\"mini_img\" src=\"{{url}}{{item.imgmini}}\"  
                                            data-src=\"{{url}}{{item.imgmini}}\" alt=\"картинка лета\"/></a>
    </div>
</pre>
<div>{{ item.alias }}</div>
<div>{{ item.price }}</div>
{% endfor %}


", "home.twig", "C:\\OpenServer\\domains\\localhost\\my_php\\3_PHP\\templates\\home.twig");
    }
}
