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

/* themes/contrib/civictheme/templates/form/input--submit.html.twig */
class __TwigTemplate_76886cac437143b19c935b0bf360f142 extends Template
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
        if (twig_in_filter("secondary", ($context["modifier_class"] ?? null))) {
            // line 8
            echo "  ";
            $context["type"] = "secondary";
        } else {
            // line 10
            echo "  ";
            $context["type"] = "primary";
        }
        // line 12
        ob_start(function () { return ''; });
        // line 13
        echo "  ";
        $this->loadTemplate("@atoms/button/button.twig", "themes/contrib/civictheme/templates/form/input--submit.html.twig", 13)->display(twig_to_array(["type" =>         // line 14
($context["type"] ?? null), "text" => twig_get_attribute($this->env, $this->source,         // line 15
($context["attributes"] ?? null), "value", [], "any", false, false, true, 15), "modifier_class" =>         // line 16
($context["modifier_class"] ?? null), "attributes" =>         // line 17
($context["attributes"] ?? null), "kind" => "submit", "theme" =>         // line 19
($context["theme"] ?? null)]));
        $context["children"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 22
        $this->loadTemplate("@molecules/form-element/form-element.twig", "themes/contrib/civictheme/templates/form/input--submit.html.twig", 22)->display(twig_to_array(["type" => "submit", "children" =>         // line 24
($context["children"] ?? null)]));
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["modifier_class", "attributes", "theme"]);    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "themes/contrib/civictheme/templates/form/input--submit.html.twig";
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
        return array (  61 => 24,  60 => 22,  57 => 19,  56 => 17,  55 => 16,  54 => 15,  53 => 14,  51 => 13,  49 => 12,  45 => 10,  41 => 8,  39 => 7,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/contrib/civictheme/templates/form/input--submit.html.twig", "C:\\xampp\\htdocs\\project1\\web\\themes\\contrib\\civictheme\\templates\\form\\input--submit.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 7, "set" => 8, "include" => 13);
        static $filters = array();
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['if', 'set', 'include'],
                [],
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
