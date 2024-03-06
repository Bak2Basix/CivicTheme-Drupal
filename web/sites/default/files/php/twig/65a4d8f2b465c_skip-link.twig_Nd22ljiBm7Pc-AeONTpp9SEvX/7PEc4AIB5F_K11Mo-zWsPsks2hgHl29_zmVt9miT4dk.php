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

/* @organisms/skip-link/skip-link.twig */
class __TwigTemplate_b6f871d476ce36b77a32c984507a6535 extends Template
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
        // line 13
        echo "
";
        // line 14
        $context["text"] = ((array_key_exists("text", $context)) ? (_twig_default_filter($this->sandbox->ensureToStringAllowed(($context["text"] ?? null), 14, $this->source), "Skip to main content")) : ("Skip to main content"));
        // line 15
        $context["theme_class"] = twig_sprintf("ct-theme-%s", ((array_key_exists("theme", $context)) ? (_twig_default_filter($this->sandbox->ensureToStringAllowed(($context["theme"] ?? null), 15, $this->source), "light")) : ("light")));
        // line 16
        $context["modifier_class"] = twig_sprintf("%s %s", $this->sandbox->ensureToStringAllowed(($context["theme_class"] ?? null), 16, $this->source), ((array_key_exists("modifier_class", $context)) ? (_twig_default_filter($this->sandbox->ensureToStringAllowed(($context["modifier_class"] ?? null), 16, $this->source), "")) : ("")));
        // line 17
        echo "
";
        // line 18
        if ( !twig_test_empty(($context["text"] ?? null))) {
            // line 19
            echo "  <div class=\"ct-skip-link ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["modifier_class"] ?? null), 19, $this->source), "html", null, true);
            echo "\">
    ";
            // line 20
            $this->loadTemplate("@atoms/link/link.twig", "@organisms/skip-link/skip-link.twig", 20)->display(twig_to_array(["theme" =>             // line 21
($context["theme"] ?? null), "text" =>             // line 22
($context["text"] ?? null), "url" =>             // line 23
($context["url"] ?? null), "title" =>             // line 24
($context["text"] ?? null), "hidden_text" =>             // line 25
($context["text"] ?? null), "modifier_class" => "ct-skip-link__link ct-visually-hidden ct-focusable"]));
            // line 28
            echo "  </div>
";
        }
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["theme", "url"]);    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@organisms/skip-link/skip-link.twig";
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
        return array (  65 => 28,  63 => 25,  62 => 24,  61 => 23,  60 => 22,  59 => 21,  58 => 20,  53 => 19,  51 => 18,  48 => 17,  46 => 16,  44 => 15,  42 => 14,  39 => 13,);
    }

    public function getSourceContext()
    {
        return new Source("", "@organisms/skip-link/skip-link.twig", "themes/contrib/civictheme/components/03-organisms/skip-link/skip-link.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 14, "if" => 18, "include" => 20);
        static $filters = array("default" => 14, "format" => 15, "escape" => 19);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if', 'include'],
                ['default', 'format', 'escape'],
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
