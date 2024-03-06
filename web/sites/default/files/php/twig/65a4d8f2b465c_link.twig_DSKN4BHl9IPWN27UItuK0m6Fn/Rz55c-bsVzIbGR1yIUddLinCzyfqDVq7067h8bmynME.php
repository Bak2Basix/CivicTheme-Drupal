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

/* @atoms/link/link.twig */
class __TwigTemplate_611cda9015beb1d7e20319a322ea61b5 extends Template
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
        // line 21
        echo "
";
        // line 22
        $context["text"] = ((array_key_exists("text", $context)) ? (_twig_default_filter($this->sandbox->ensureToStringAllowed(($context["text"] ?? null), 22, $this->source), "")) : (""));
        // line 23
        $context["only_icon_class"] = ((( !twig_test_empty(($context["icon"] ?? null)) && twig_test_empty(($context["text"] ?? null)))) ? ("ct-link--only-icon") : (""));
        // line 24
        $context["icon_placement"] = ((twig_in_filter(($context["icon_placement"] ?? null), ["before", "after"])) ? (($context["icon_placement"] ?? null)) : ("after"));
        // line 25
        $context["is_external_class"] = ((($context["is_external"] ?? null)) ? ("ct-link--external") : (""));
        // line 26
        $context["is_active_class"] = ((($context["is_active"] ?? null)) ? ("ct-link--active") : (""));
        // line 27
        $context["is_disabled_class"] = ((($context["is_disabled"] ?? null)) ? ("ct-link--disabled") : (""));
        // line 28
        $context["theme_class"] = twig_sprintf("ct-theme-%s", ((array_key_exists("theme", $context)) ? (_twig_default_filter($this->sandbox->ensureToStringAllowed(($context["theme"] ?? null), 28, $this->source), "light")) : ("light")));
        // line 29
        $context["modifier_class"] = twig_trim_filter(twig_sprintf("%s %s %s %s %s %s", $this->sandbox->ensureToStringAllowed(($context["theme_class"] ?? null), 29, $this->source), $this->sandbox->ensureToStringAllowed(($context["is_external_class"] ?? null), 29, $this->source), $this->sandbox->ensureToStringAllowed(($context["is_active_class"] ?? null), 29, $this->source), $this->sandbox->ensureToStringAllowed(($context["is_disabled_class"] ?? null), 29, $this->source), $this->sandbox->ensureToStringAllowed(($context["only_icon_class"] ?? null), 29, $this->source), ((array_key_exists("modifier_class", $context)) ? (_twig_default_filter($this->sandbox->ensureToStringAllowed(($context["modifier_class"] ?? null), 29, $this->source), "")) : (""))));
        // line 30
        echo "
";
        // line 31
        $context["attributes"] = ((($context["is_disabled"] ?? null)) ? (($this->sandbox->ensureToStringAllowed(($context["attributes"] ?? null), 31, $this->source) . " disabled")) : (($context["attributes"] ?? null)));
        // line 32
        echo "
";
        // line 33
        if (( !twig_test_empty(($context["text"] ?? null)) ||  !twig_test_empty(($context["icon"] ?? null)))) {
            // line 34
            echo "  ";
            ob_start(function () { return ''; });
            // line 35
            echo "    ";
            if (($context["icon"] ?? null)) {
                // line 36
                echo "      ";
                ob_start(function () { return ''; });
                // line 37
                echo "        ";
                $this->loadTemplate("@base/icon/icon.twig", "@atoms/link/link.twig", 37)->display(twig_to_array(["symbol" =>                 // line 38
($context["icon"] ?? null), "modifier_class" => "ct-link__icon"]));
                // line 41
                echo "      ";
                $context["icon_markup"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
                // line 42
                echo "
      ";
                // line 43
                if ((($context["icon_placement"] ?? null) == "before")) {
                    // line 44
                    echo "        ";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["icon_markup"] ?? null), 44, $this->source), "html", null, true);
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(($context["text"] ?? null), 44, $this->source));
                    echo "
      ";
                } else {
                    // line 46
                    echo "        ";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(($context["text"] ?? null), 46, $this->source));
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["icon_markup"] ?? null), 46, $this->source), "html", null, true);
                    echo "
      ";
                }
                // line 48
                echo "
    ";
            } else {
                // line 50
                echo "      ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(($context["text"] ?? null), 50, $this->source));
                echo "
    ";
            }
            // line 52
            echo "  ";
            $context["content_markup"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 53
            echo "
  ";
            // line 54
            if (($context["is_new_window"] ?? null)) {
                // line 55
                echo "    ";
                $context["is_new_window_content"] = ('' === $tmp = "      <span class=\"ct-visually-hidden\">(Opens in a new tab/window)</span>
    ") ? '' : new Markup($tmp, $this->env->getCharset());
                // line 58
                echo "  ";
            }
            // line 59
            echo "
  ";
            // line 60
            if ((($context["is_external"] ?? null) &&  !twig_test_empty(($context["text"] ?? null)))) {
                // line 61
                echo "    ";
                ob_start(function () { return ''; });
                // line 62
                echo "      ";
                $this->loadTemplate("@base/icon/icon.twig", "@atoms/link/link.twig", 62)->display(twig_to_array(["symbol" => "upper-right-arrow"]));
                // line 65
                echo "    ";
                $context["is_external_content"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
                // line 66
                echo "  ";
            }
            // line 67
            echo "
  <a
    class=\"ct-link ";
            // line 69
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["modifier_class"] ?? null), 69, $this->source), "html", null, true);
            echo "\"
    ";
            // line 70
            if ( !twig_test_empty(($context["url"] ?? null))) {
                echo "href=\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["url"] ?? null), 70, $this->source), "html", null, true);
                echo "\"";
            }
            // line 71
            echo "    ";
            if ( !twig_test_empty(($context["title"] ?? null))) {
                echo "title=\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title"] ?? null), 71, $this->source), "html", null, true);
                echo "\"";
            }
            // line 72
            echo "    ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(((($context["is_new_window"] ?? null)) ? ("target=\"_blank\" aria-label=\"Opens in a new tab\"") : ("")));
            echo "
    ";
            // line 73
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(((($context["disabled"] ?? null)) ? ("disabled") : ("")));
            echo "
    ";
            // line 74
            if ( !twig_test_empty(($context["attributes"] ?? null))) {
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(($context["attributes"] ?? null), 74, $this->source));
            }
            // line 75
            echo "  >
    ";
            // line 76
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["content_markup"] ?? null), 76, $this->source), "html", null, true);
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["is_new_window_content"] ?? null), 76, $this->source), "html", null, true);
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["is_external_content"] ?? null), 76, $this->source), "html", null, true);
            echo "
  </a>
";
        }
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["icon", "is_external", "is_active", "is_disabled", "theme", "is_new_window", "url", "title", "disabled"]);    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@atoms/link/link.twig";
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
        return array (  182 => 76,  179 => 75,  175 => 74,  171 => 73,  166 => 72,  159 => 71,  153 => 70,  149 => 69,  145 => 67,  142 => 66,  139 => 65,  136 => 62,  133 => 61,  131 => 60,  128 => 59,  125 => 58,  121 => 55,  119 => 54,  116 => 53,  113 => 52,  107 => 50,  103 => 48,  96 => 46,  89 => 44,  87 => 43,  84 => 42,  81 => 41,  79 => 38,  77 => 37,  74 => 36,  71 => 35,  68 => 34,  66 => 33,  63 => 32,  61 => 31,  58 => 30,  56 => 29,  54 => 28,  52 => 27,  50 => 26,  48 => 25,  46 => 24,  44 => 23,  42 => 22,  39 => 21,);
    }

    public function getSourceContext()
    {
        return new Source("", "@atoms/link/link.twig", "themes/contrib/civictheme/components/01-atoms/link/link.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 22, "if" => 33, "include" => 37);
        static $filters = array("default" => 22, "format" => 28, "trim" => 29, "escape" => 44, "raw" => 44);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if', 'include'],
                ['default', 'format', 'trim', 'escape', 'raw'],
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
