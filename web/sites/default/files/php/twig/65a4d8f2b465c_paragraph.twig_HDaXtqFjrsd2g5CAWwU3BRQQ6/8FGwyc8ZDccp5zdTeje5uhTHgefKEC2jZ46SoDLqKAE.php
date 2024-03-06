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

/* @atoms/paragraph/paragraph.twig */
class __TwigTemplate_98b78caad328107631422765d90277c9 extends Template
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
        // line 15
        echo "
";
        // line 16
        $context["size_class"] = twig_sprintf("ct-paragraph--%s", ((array_key_exists("size", $context)) ? (_twig_default_filter($this->sandbox->ensureToStringAllowed(($context["size"] ?? null), 16, $this->source), "regular")) : ("regular")));
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
            echo "<div class=\"ct-paragraph ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["modifier_class"] ?? null), 21, $this->source), "html", null, true);
            echo "\" ";
            if ( !twig_test_empty(($context["attributes"] ?? null))) {
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(($context["attributes"] ?? null), 21, $this->source));
            }
            echo ">
    ";
            // line 22
            if (($context["allow_html"] ?? null)) {
                // line 23
                echo "      ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["content"] ?? null), 23, $this->source), "html", null, true);
                echo "
    ";
            } else {
                // line 25
                echo "      ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, twig_striptags($this->sandbox->ensureToStringAllowed(($context["content"] ?? null), 25, $this->source)), "html", null, true);
                echo "
    ";
            }
            // line 27
            echo "  </div>";
        }
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["size", "theme", "content", "attributes", "allow_html"]);    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@atoms/paragraph/paragraph.twig";
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
        return array (  76 => 27,  70 => 25,  64 => 23,  62 => 22,  53 => 21,  51 => 20,  48 => 19,  46 => 18,  44 => 17,  42 => 16,  39 => 15,);
    }

    public function getSourceContext()
    {
        return new Source("", "@atoms/paragraph/paragraph.twig", "themes/contrib/civictheme/components/01-atoms/paragraph/paragraph.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 16, "if" => 20);
        static $filters = array("format" => 16, "default" => 16, "escape" => 21, "raw" => 21, "striptags" => 25);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if'],
                ['format', 'default', 'escape', 'raw', 'striptags'],
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
