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

/* @atoms/button/button.twig */
class __TwigTemplate_b06c50d1804801179c77d4e1180a8430 extends Template
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
        // line 23
        echo "
";
        // line 24
        $context["kind"] = ((twig_in_filter(($context["kind"] ?? null), ["button", "link", "reset", "submit"])) ? (($context["kind"] ?? null)) : ("button"));
        // line 25
        $context["type"] = ((twig_in_filter(($context["type"] ?? null), ["primary", "secondary", "tertiary"])) ? (($context["type"] ?? null)) : (null));
        // line 26
        $context["size"] = ((twig_in_filter(($context["size"] ?? null), ["large", "regular", "small"])) ? (($context["size"] ?? null)) : ("regular"));
        // line 27
        $context["icon_placement"] = ((twig_in_filter(($context["icon_placement"] ?? null), ["before", "after"])) ? (($context["icon_placement"] ?? null)) : ("after"));
        // line 28
        $context["type_class"] = ((($context["type"] ?? null)) ? (twig_sprintf("ct-button--%s", $this->sandbox->ensureToStringAllowed(($context["type"] ?? null), 28, $this->source))) : (""));
        // line 29
        $context["kind_class"] = ((($context["kind"] ?? null)) ? (twig_sprintf("ct-button--%s", $this->sandbox->ensureToStringAllowed(($context["kind"] ?? null), 29, $this->source))) : (""));
        // line 30
        $context["size_class"] = twig_sprintf("ct-button--%s", $this->sandbox->ensureToStringAllowed(($context["size"] ?? null), 30, $this->source));
        // line 31
        $context["dismiss_class"] = ((($context["is_dismissable"] ?? null)) ? ("ct-button--dismiss") : (""));
        // line 32
        $context["is_external"] = ((($context["is_external"] ?? null)) ? ("ct-button--external") : (""));
        // line 33
        $context["theme_class"] = twig_sprintf("ct-theme-%s", ((array_key_exists("theme", $context)) ? (_twig_default_filter($this->sandbox->ensureToStringAllowed(($context["theme"] ?? null), 33, $this->source), "light")) : ("light")));
        // line 34
        $context["modifier_class"] = twig_sprintf("%s %s %s %s %s %s %s", $this->sandbox->ensureToStringAllowed(($context["theme_class"] ?? null), 34, $this->source), $this->sandbox->ensureToStringAllowed(($context["type_class"] ?? null), 34, $this->source), $this->sandbox->ensureToStringAllowed(($context["kind_class"] ?? null), 34, $this->source), $this->sandbox->ensureToStringAllowed(($context["size_class"] ?? null), 34, $this->source), $this->sandbox->ensureToStringAllowed(($context["dismiss_class"] ?? null), 34, $this->source), $this->sandbox->ensureToStringAllowed(($context["is_external"] ?? null), 34, $this->source), ((array_key_exists("modifier_class", $context)) ? (_twig_default_filter($this->sandbox->ensureToStringAllowed(($context["modifier_class"] ?? null), 34, $this->source), "")) : ("")));
        // line 35
        echo "
";
        // line 36
        ob_start(function () { return ''; });
        // line 37
        echo "  ";
        if (($context["icon"] ?? null)) {
            // line 38
            echo "    ";
            ob_start(function () { return ''; });
            // line 39
            echo "      ";
            $this->loadTemplate("@base/icon/icon.twig", "@atoms/button/button.twig", 39)->display(twig_to_array(["symbol" =>             // line 40
($context["icon"] ?? null), "modifier_class" => "ct-button__icon"]));
            // line 43
            echo "    ";
            $context["icon_markup"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 44
            echo "
    ";
            // line 45
            if ((($context["icon_placement"] ?? null) == "before")) {
                // line 46
                echo "      ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["icon_markup"] ?? null), 46, $this->source), "html", null, true);
                ((($context["is_raw_text"] ?? null)) ? (print (($context["text"] ?? null))) : (print ($this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["text"] ?? null), "html", null, true))));
                echo "
    ";
            } else {
                // line 48
                echo "      ";
                ((($context["is_raw_text"] ?? null)) ? (print (($context["text"] ?? null))) : (print ($this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["text"] ?? null), "html", null, true))));
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["icon_markup"] ?? null), 48, $this->source), "html", null, true);
                echo "
    ";
            }
            // line 50
            echo "
  ";
        } else {
            // line 52
            echo "    ";
            ((($context["is_raw_text"] ?? null)) ? (print (($context["text"] ?? null))) : (print ($this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["text"] ?? null), "html", null, true))));
            echo "
  ";
        }
        $context["content_markup"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 55
        echo "
";
        // line 56
        if (($context["is_new_window"] ?? null)) {
            // line 57
            echo "  ";
            $context["is_new_window_content"] = ('' === $tmp = "    <span class=\"ct-visually-hidden\">(Opens in a new tab/window)</span>
  ") ? '' : new Markup($tmp, $this->env->getCharset());
        }
        // line 61
        echo "
";
        // line 62
        if (($context["is_external"] ?? null)) {
            // line 63
            echo "  ";
            ob_start(function () { return ''; });
            // line 64
            echo "    ";
            $this->loadTemplate("@base/icon/icon.twig", "@atoms/button/button.twig", 64)->display(twig_to_array(["symbol" => "upper-right-arrow"]));
            // line 67
            echo "  ";
            $context["is_external_content"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        }
        // line 69
        echo "
";
        // line 70
        if ((($context["kind"] ?? null) == "button")) {
            // line 71
            echo "  <button
    class=\"ct-button ";
            // line 72
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["modifier_class"] ?? null), 72, $this->source), "html", null, true);
            echo "\"
    data-component-name=\"button\"
    ";
            // line 74
            if (($context["is_disabled"] ?? null)) {
                echo "disabled=\"disabled\" aria-disabled=\"true\"";
            }
            // line 75
            echo "    ";
            if ( !twig_test_empty(($context["attributes"] ?? null))) {
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(($context["attributes"] ?? null), 75, $this->source));
            }
            // line 76
            echo "  >
    ";
            // line 77
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["content_markup"] ?? null), 77, $this->source), "html", null, true);
            echo "
  </button>
";
        } elseif ((        // line 79
($context["kind"] ?? null) == "link")) {
            // line 80
            echo "  <a
    class=\"ct-button ";
            // line 81
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["modifier_class"] ?? null), 81, $this->source), "html", null, true);
            echo "\"
    role=\"button\"
    data-component-name=\"button\"
    ";
            // line 84
            if (($context["url"] ?? null)) {
                echo "href=\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["url"] ?? null), 84, $this->source), "html", null, true);
                echo "\"";
            }
            // line 85
            echo "    ";
            if (($context["is_disabled"] ?? null)) {
                echo "disabled=\"disabled\" aria-disabled=\"true\"";
            }
            // line 86
            echo "    ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(((($context["is_new_window"] ?? null)) ? ("target=\"_blank\" aria-label=\"Opens in a new tab\"") : ("")));
            echo "
    ";
            // line 87
            if ( !twig_test_empty(($context["attributes"] ?? null))) {
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(($context["attributes"] ?? null), 87, $this->source));
            }
            // line 88
            echo "  >
    ";
            // line 89
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["content_markup"] ?? null), 89, $this->source), "html", null, true);
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["is_new_window_content"] ?? null), 89, $this->source), "html", null, true);
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["is_external_content"] ?? null), 89, $this->source), "html", null, true);
            echo "
  </a>
";
        } elseif (twig_in_filter(        // line 91
($context["kind"] ?? null), ["reset", "submit"])) {
            // line 92
            echo "  <input
    type=\"";
            // line 93
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["kind"] ?? null), 93, $this->source), "html", null, true);
            echo "\"
    class=\"ct-button ";
            // line 94
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["modifier_class"] ?? null), 94, $this->source), "html", null, true);
            echo "\"
    data-component-name=\"button\"
    value=\"";
            // line 96
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, twig_trim_filter(((($context["is_raw_text"] ?? null)) ? ($this->sandbox->ensureToStringAllowed(($context["text"] ?? null), 96, $this->source)) : (($context["text"] ?? null)))), "html", null, true);
            echo "\"
    ";
            // line 97
            if (($context["is_disabled"] ?? null)) {
                echo "disabled=\"disabled\" aria-disabled=\"true\"";
            }
            // line 98
            echo "    ";
            if ( !twig_test_empty(($context["attributes"] ?? null))) {
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(($context["attributes"] ?? null), 98, $this->source));
            }
            // line 99
            echo "  />
";
        }
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["is_dismissable", "theme", "icon", "is_raw_text", "text", "is_new_window", "is_disabled", "attributes", "url"]);    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@atoms/button/button.twig";
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
        return array (  235 => 99,  230 => 98,  226 => 97,  222 => 96,  217 => 94,  213 => 93,  210 => 92,  208 => 91,  201 => 89,  198 => 88,  194 => 87,  189 => 86,  184 => 85,  178 => 84,  172 => 81,  169 => 80,  167 => 79,  162 => 77,  159 => 76,  154 => 75,  150 => 74,  145 => 72,  142 => 71,  140 => 70,  137 => 69,  133 => 67,  130 => 64,  127 => 63,  125 => 62,  122 => 61,  117 => 57,  115 => 56,  112 => 55,  105 => 52,  101 => 50,  94 => 48,  87 => 46,  85 => 45,  82 => 44,  79 => 43,  77 => 40,  75 => 39,  72 => 38,  69 => 37,  67 => 36,  64 => 35,  62 => 34,  60 => 33,  58 => 32,  56 => 31,  54 => 30,  52 => 29,  50 => 28,  48 => 27,  46 => 26,  44 => 25,  42 => 24,  39 => 23,);
    }

    public function getSourceContext()
    {
        return new Source("", "@atoms/button/button.twig", "themes/contrib/civictheme/components/01-atoms/button/button.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 24, "if" => 37, "include" => 39);
        static $filters = array("format" => 28, "default" => 33, "escape" => 46, "raw" => 46, "trim" => 96);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if', 'include'],
                ['format', 'default', 'escape', 'raw', 'trim'],
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
