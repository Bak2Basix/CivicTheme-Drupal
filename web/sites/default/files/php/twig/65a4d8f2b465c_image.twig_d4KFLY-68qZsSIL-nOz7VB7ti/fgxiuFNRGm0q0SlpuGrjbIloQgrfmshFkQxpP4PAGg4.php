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

/* @atoms/image/image.twig */
class __TwigTemplate_83c5bc41deddc2765dd38c67f8137bb5 extends Template
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
        // line 16
        echo "
";
        // line 17
        $context["theme_class"] = twig_sprintf("ct-theme-%s", ((array_key_exists("theme", $context)) ? (_twig_default_filter($this->sandbox->ensureToStringAllowed(($context["theme"] ?? null), 17, $this->source), "light")) : ("light")));
        // line 18
        $context["modifier_class"] = twig_sprintf("%s %s", $this->sandbox->ensureToStringAllowed(($context["theme_class"] ?? null), 18, $this->source), ((array_key_exists("modifier_class", $context)) ? (_twig_default_filter($this->sandbox->ensureToStringAllowed(($context["modifier_class"] ?? null), 18, $this->source), "")) : ("")));
        // line 19
        echo "
";
        // line 20
        if ( !twig_test_empty(($context["url"] ?? null))) {
            // line 21
            echo "  <img
    class=\"ct-image ";
            // line 22
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["modifier_class"] ?? null), 22, $this->source), "html", null, true);
            echo "\"
    src=\"";
            // line 23
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["url"] ?? null), 23, $this->source), "html", null, true);
            echo "\"
    ";
            // line 24
            if ( !(null === ($context["alt"] ?? null))) {
                echo "alt=\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["alt"] ?? null), 24, $this->source), "html", null, true);
                echo "\"";
            }
            // line 25
            echo "    ";
            if ( !twig_test_empty(($context["width"] ?? null))) {
                echo "width=\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["width"] ?? null), 25, $this->source), "html", null, true);
                echo "\"";
            }
            // line 26
            echo "    ";
            if ( !twig_test_empty(($context["height"] ?? null))) {
                echo "height=\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["height"] ?? null), 26, $this->source), "html", null, true);
                echo "\"";
            }
            // line 27
            echo "    ";
            if ( !twig_test_empty(($context["attributes"] ?? null))) {
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(($context["attributes"] ?? null), 27, $this->source));
            }
            // line 28
            echo "  />
";
        }
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["theme", "url", "alt", "width", "height", "attributes"]);    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@atoms/image/image.twig";
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
        return array (  87 => 28,  82 => 27,  75 => 26,  68 => 25,  62 => 24,  58 => 23,  54 => 22,  51 => 21,  49 => 20,  46 => 19,  44 => 18,  42 => 17,  39 => 16,);
    }

    public function getSourceContext()
    {
        return new Source("", "@atoms/image/image.twig", "themes/contrib/civictheme/components/01-atoms/image/image.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 17, "if" => 20);
        static $filters = array("format" => 17, "default" => 17, "escape" => 22, "raw" => 27);
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
