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

/* themes/contrib/civictheme/templates/navigation/menu-local-tasks.html.twig */
class __TwigTemplate_9005a1dfecf039f5dd9db5cbca2d263d extends Template
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
        if (twig_get_attribute($this->env, $this->source, ($context["links"] ?? null), "primary", [], "any", false, false, true, 7)) {
            // line 8
            echo "  <h2 class=\"ct-visually-hidden\">";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Primary tabs"));
            echo "</h2>
  ";
            // line 9
            $this->loadTemplate("@molecules/tabs/tabs.twig", "themes/contrib/civictheme/templates/navigation/menu-local-tasks.html.twig", 9)->display(twig_array_merge($context, ["links" => twig_get_attribute($this->env, $this->source,             // line 10
($context["links"] ?? null), "primary", [], "any", false, false, true, 10), "vertical_spacing" => "top", "modifier_class" => "ct-tabs--local-tasks ct-tabs--local-tasks--primary"]));
        }
        // line 15
        echo "
";
        // line 16
        if (twig_get_attribute($this->env, $this->source, ($context["links"] ?? null), "secondary", [], "any", false, false, true, 16)) {
            // line 17
            echo "  <h2 class=\"ct-visually-hidden\">";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Secondary tabs"));
            echo "</h2>
  ";
            // line 18
            $this->loadTemplate("@molecules/tabs/tabs.twig", "themes/contrib/civictheme/templates/navigation/menu-local-tasks.html.twig", 18)->display(twig_array_merge($context, ["links" => twig_get_attribute($this->env, $this->source,             // line 19
($context["links"] ?? null), "secondary", [], "any", false, false, true, 19), "modifier_class" => "ct-tabs--local-tasks ct-tabs--local-tasks--secondary"]));
        }
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["links"]);    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "themes/contrib/civictheme/templates/navigation/menu-local-tasks.html.twig";
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
        return array (  61 => 19,  60 => 18,  55 => 17,  53 => 16,  50 => 15,  47 => 10,  46 => 9,  41 => 8,  39 => 7,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/contrib/civictheme/templates/navigation/menu-local-tasks.html.twig", "C:\\xampp\\htdocs\\project1\\web\\themes\\contrib\\civictheme\\templates\\navigation\\menu-local-tasks.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 7, "include" => 9);
        static $filters = array("t" => 8);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['if', 'include'],
                ['t'],
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
