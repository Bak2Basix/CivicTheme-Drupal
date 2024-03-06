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

/* @atoms/label/label.twig */
class __TwigTemplate_465b8529bd7d1d10d89c264c055aaf29 extends Template
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
        // line 14
        echo "
";
        // line 15
        $context["size"] = ((twig_in_filter(($context["size"] ?? null), ["extra-large", "large", "regular", "small", "extra-small"])) ? (($context["size"] ?? null)) : ("regular"));
        // line 16
        $context["size_class"] = twig_sprintf("ct-label--%s", $this->sandbox->ensureToStringAllowed(($context["size"] ?? null), 16, $this->source));
        // line 17
        $context["theme_class"] = twig_sprintf("ct-theme-%s", ((array_key_exists("theme", $context)) ? (_twig_default_filter($this->sandbox->ensureToStringAllowed(($context["theme"] ?? null), 17, $this->source), "light")) : ("light")));
        // line 18
        $context["modifier_class"] = twig_sprintf("%s %s %s", $this->sandbox->ensureToStringAllowed(($context["theme_class"] ?? null), 18, $this->source), $this->sandbox->ensureToStringAllowed(($context["size_class"] ?? null), 18, $this->source), ((array_key_exists("modifier_class", $context)) ? (_twig_default_filter($this->sandbox->ensureToStringAllowed(($context["modifier_class"] ?? null), 18, $this->source), "")) : ("")));
        // line 19
        echo "
";
        // line 20
        if ( !twig_test_empty(($context["content"] ?? null))) {
            // line 21
            echo "<label
    class=\"ct-label ";
            // line 22
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["modifier_class"] ?? null), 22, $this->source), "html", null, true);
            echo "\"
    ";
            // line 23
            if ( !twig_test_empty(($context["attributes"] ?? null))) {
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(($context["attributes"] ?? null), 23, $this->source));
            }
            // line 24
            echo "  >
    ";
            // line 25
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["content"] ?? null), 25, $this->source), "html", null, true);
            echo "
  </label>";
        }
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["theme", "content", "attributes"]);    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@atoms/label/label.twig";
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
        return array (  69 => 25,  66 => 24,  62 => 23,  58 => 22,  55 => 21,  53 => 20,  50 => 19,  48 => 18,  46 => 17,  44 => 16,  42 => 15,  39 => 14,);
    }

    public function getSourceContext()
    {
        return new Source("", "@atoms/label/label.twig", "themes/contrib/civictheme/components/01-atoms/label/label.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 15, "if" => 20);
        static $filters = array("format" => 16, "default" => 17, "escape" => 22, "raw" => 23);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if'],
                ['format', 'default', 'escape', 'raw'],
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
