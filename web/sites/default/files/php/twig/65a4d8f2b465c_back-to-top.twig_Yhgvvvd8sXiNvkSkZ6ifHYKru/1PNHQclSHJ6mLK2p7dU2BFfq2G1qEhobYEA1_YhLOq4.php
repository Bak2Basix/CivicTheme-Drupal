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

/* @organisms/back-to-top/back-to-top.twig */
class __TwigTemplate_743a9878f4f3461fa72deab127366b56 extends Template
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
        echo "
<div class=\"ct-back-to-top\" data-component-name=\"back-to-top\" data-scrollspy data-scrollspy-offset=\"400\">
  ";
        // line 9
        $this->loadTemplate("@atoms/button/button.twig", "@organisms/back-to-top/back-to-top.twig", 9)->display(twig_to_array(["kind" => "link", "type" => "primary", "icon" => "up-arrow", "url" => "#top", "title" => "Return focus to the top of the page", "modifier_class" => "ct-back-to-top__button"]));
        // line 17
        echo "</div>
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@organisms/back-to-top/back-to-top.twig";
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
        return array (  45 => 17,  43 => 9,  39 => 7,);
    }

    public function getSourceContext()
    {
        return new Source("", "@organisms/back-to-top/back-to-top.twig", "themes/contrib/civictheme/components/03-organisms/back-to-top/back-to-top.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("include" => 9);
        static $filters = array();
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['include'],
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
