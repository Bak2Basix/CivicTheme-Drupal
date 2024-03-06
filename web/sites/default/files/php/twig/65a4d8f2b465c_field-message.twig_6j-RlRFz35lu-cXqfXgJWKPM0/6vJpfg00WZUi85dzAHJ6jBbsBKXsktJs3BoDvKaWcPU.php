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

/* @atoms/field-message/field-message.twig */
class __TwigTemplate_ba303fdb0bdfee712dea3a4b8ac64541 extends Template
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
        $context["theme_class"] = twig_sprintf("ct-theme-%s", ((array_key_exists("theme", $context)) ? (_twig_default_filter($this->sandbox->ensureToStringAllowed(($context["theme"] ?? null), 15, $this->source), "light")) : ("light")));
        // line 16
        $context["type"] = ((twig_in_filter(($context["type"] ?? null), ["error", "info", "warning", "success"])) ? (($context["type"] ?? null)) : ("information"));
        // line 17
        $context["type_class"] = twig_sprintf("ct-field-message--%s", ((array_key_exists("type", $context)) ? (_twig_default_filter($this->sandbox->ensureToStringAllowed(($context["type"] ?? null), 17, $this->source), "information")) : ("information")));
        // line 18
        $context["modifier_class"] = twig_sprintf("%s %s %s", $this->sandbox->ensureToStringAllowed(($context["theme_class"] ?? null), 18, $this->source), $this->sandbox->ensureToStringAllowed(($context["type_class"] ?? null), 18, $this->source), ((array_key_exists("modifier_class", $context)) ? (_twig_default_filter($this->sandbox->ensureToStringAllowed(($context["modifier_class"] ?? null), 18, $this->source), "")) : ("")));
        // line 19
        $context["icons"] = ["information" => "information-mark", "warning" => "exclamation-mark-1", "error" => "close-outline", "success" => "approve"];
        // line 25
        echo "
";
        // line 26
        if ( !twig_test_empty(($context["content"] ?? null))) {
            // line 27
            echo "<div class=\"ct-field-message ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["modifier_class"] ?? null), 27, $this->source), "html", null, true);
            echo "\" ";
            if ( !twig_test_empty(($context["attributes"] ?? null))) {
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(($context["attributes"] ?? null), 27, $this->source));
            }
            echo ">
    ";
            // line 28
            if (twig_get_attribute($this->env, $this->source, ($context["icons"] ?? null), ($context["type"] ?? null), [], "array", true, true, true, 28)) {
                // line 29
                echo "      ";
                $this->loadTemplate("@base/icon/icon.twig", "@atoms/field-message/field-message.twig", 29)->display(twig_to_array(["symbol" => (($__internal_compile_0 =                 // line 30
($context["icons"] ?? null)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0[($context["type"] ?? null)] ?? null) : null), "size" => "regular", "modifier_class" => "ct-field-message__icon"]));
                // line 34
                echo "    ";
            }
            // line 35
            echo "    ";
            if ( !twig_test_empty(($context["content"] ?? null))) {
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["content"] ?? null), 35, $this->source), "html", null, true);
            }
            // line 36
            echo "  </div>";
        }
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["theme", "content", "attributes"]);    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@atoms/field-message/field-message.twig";
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
        return array (  80 => 36,  75 => 35,  72 => 34,  70 => 30,  68 => 29,  66 => 28,  57 => 27,  55 => 26,  52 => 25,  50 => 19,  48 => 18,  46 => 17,  44 => 16,  42 => 15,  39 => 14,);
    }

    public function getSourceContext()
    {
        return new Source("", "@atoms/field-message/field-message.twig", "themes/contrib/civictheme/components/01-atoms/field-message/field-message.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 15, "if" => 26, "include" => 29);
        static $filters = array("format" => 15, "default" => 15, "escape" => 27, "raw" => 27);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if', 'include'],
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
