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

/* @organisms/message/message.twig */
class __TwigTemplate_e275a3553af882723690c9a91020b5c8 extends Template
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
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter($this->sandbox->ensureToStringAllowed(($context["type"] ?? null), 14, $this->source), "information")) : ("information"));
        // line 15
        $context["type_class"] = twig_sprintf("ct-message--%s", $this->sandbox->ensureToStringAllowed(($context["type"] ?? null), 15, $this->source));
        // line 16
        $context["theme_class"] = twig_sprintf("ct-theme-%s", ((array_key_exists("theme", $context)) ? (_twig_default_filter($this->sandbox->ensureToStringAllowed(($context["theme"] ?? null), 16, $this->source), "light")) : ("light")));
        // line 17
        $context["modifier_class"] = twig_sprintf("%s %s %s", $this->sandbox->ensureToStringAllowed(($context["theme_class"] ?? null), 17, $this->source), $this->sandbox->ensureToStringAllowed(($context["type_class"] ?? null), 17, $this->source), ((array_key_exists("modifier_class", $context)) ? (_twig_default_filter($this->sandbox->ensureToStringAllowed(($context["modifier_class"] ?? null), 17, $this->source), "")) : ("")));
        // line 18
        echo "
";
        // line 19
        $context["icons"] = ["information" => "information-mark", "warning" => "exclamation-mark-1", "error" => "close-outline", "success" => "approve"];
        // line 25
        echo "
<div
  class=\"ct-message ";
        // line 27
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["modifier_class"] ?? null), 27, $this->source), "html", null, true);
        echo "\"
  role=\"";
        // line 28
        if ((($context["type"] ?? null) == "error")) {
            echo "alert";
        } else {
            echo "contentinfo";
        }
        echo "\"
  aria-label=\"";
        // line 29
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["type"] ?? null), 29, $this->source), "html", null, true);
        echo "\"
  ";
        // line 30
        if ((($context["type"] ?? null) == "error")) {
            echo "aria-live=\"polite\"";
        }
        // line 31
        echo "  ";
        if ( !twig_test_empty(($context["attributes"] ?? null))) {
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(($context["attributes"] ?? null), 31, $this->source));
        }
        // line 32
        echo ">
  ";
        // line 33
        if (twig_get_attribute($this->env, $this->source, ($context["icons"] ?? null), ($context["type"] ?? null), [], "array", true, true, true, 33)) {
            // line 34
            echo "    <div class=\"ct-message__icon\">
      ";
            // line 35
            $this->loadTemplate("@base/icon/icon.twig", "@organisms/message/message.twig", 35)->display(twig_to_array(["symbol" => (($__internal_compile_0 =             // line 36
($context["icons"] ?? null)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0[($context["type"] ?? null)] ?? null) : null), "size" => "regular"]));
            // line 39
            echo "    </div>
  ";
        }
        // line 41
        echo "
  <div class=\"ct-message__content\">
    ";
        // line 43
        if (($context["title"] ?? null)) {
            // line 44
            echo "      <div class=\"ct-message__title\">";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title"] ?? null), 44, $this->source), "html", null, true);
            echo "</div>
    ";
        }
        // line 46
        echo "
    ";
        // line 47
        if (($context["description"] ?? null)) {
            // line 48
            echo "      <div class=\"ct-message__summary\">";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(twig_striptags($this->sandbox->ensureToStringAllowed(($context["description"] ?? null), 48, $this->source), "<strong>,<a>,<pre>,<ul>,<ol>,<li>"));
            echo "</div>
    ";
        }
        // line 50
        echo "  </div>
</div>
";
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["theme", "attributes", "title", "description"]);    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@organisms/message/message.twig";
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
        return array (  122 => 50,  116 => 48,  114 => 47,  111 => 46,  105 => 44,  103 => 43,  99 => 41,  95 => 39,  93 => 36,  92 => 35,  89 => 34,  87 => 33,  84 => 32,  79 => 31,  75 => 30,  71 => 29,  63 => 28,  59 => 27,  55 => 25,  53 => 19,  50 => 18,  48 => 17,  46 => 16,  44 => 15,  42 => 14,  39 => 13,);
    }

    public function getSourceContext()
    {
        return new Source("", "@organisms/message/message.twig", "themes/contrib/civictheme/components/03-organisms/message/message.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 14, "if" => 28, "include" => 35);
        static $filters = array("default" => 14, "format" => 15, "escape" => 27, "raw" => 31, "striptags" => 48);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if', 'include'],
                ['default', 'format', 'escape', 'raw', 'striptags'],
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
