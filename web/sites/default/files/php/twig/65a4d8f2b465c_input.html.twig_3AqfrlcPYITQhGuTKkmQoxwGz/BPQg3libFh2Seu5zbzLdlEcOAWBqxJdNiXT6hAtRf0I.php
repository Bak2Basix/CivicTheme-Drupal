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

/* themes/contrib/civictheme/templates/form/input.html.twig */
class __TwigTemplate_3c8eb3808f165d55075c72a02011fabf extends Template
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
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 7
        $this->loadTemplate("@atoms/input/input.twig", "themes/contrib/civictheme/templates/form/input.html.twig", 7)->display(twig_array_merge($context, ["type" => twig_get_attribute($this->env, $this->source,         // line 8
($context["attributes"] ?? null), "offsetGet", ["type"], "method", false, false, true, 8), "value" => twig_get_attribute($this->env, $this->source,         // line 9
($context["attributes"] ?? null), "offsetGet", ["value"], "method", false, false, true, 9), "attributes" => $this->extensions['Drupal\Core\Template\TwigExtension']->withoutFilter(        // line 10
($context["attributes"] ?? null), "type", "value")]));
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["attributes"]);    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "themes/contrib/civictheme/templates/form/input.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable()
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo()
    {
        return array (  42 => 10,  41 => 9,  40 => 8,  39 => 7,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/contrib/civictheme/templates/form/input.html.twig", "C:\\xampp\\htdocs\\project1\\web\\themes\\contrib\\civictheme\\templates\\form\\input.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("include" => 7);
        static $filters = array("without" => 10);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['include'],
                ['without'],
                []
            );
        } catch (SecurityError $e) {
            $e->setSourceContext($this->source);

            if ($e instanceof SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

    }
}
