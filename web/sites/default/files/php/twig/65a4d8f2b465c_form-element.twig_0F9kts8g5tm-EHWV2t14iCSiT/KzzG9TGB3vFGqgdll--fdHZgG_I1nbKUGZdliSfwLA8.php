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

/* @molecules/form-element/form-element.twig */
class __TwigTemplate_35c51c05332d3bc8fa931c165e382f30 extends Template
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
        $context["theme_class"] = twig_sprintf("ct-theme-%s", ((array_key_exists("theme", $context)) ? (_twig_default_filter($this->sandbox->ensureToStringAllowed(($context["theme"] ?? null), 22, $this->source), "light")) : ("light")));
        // line 23
        $context["type_class"] = (( !twig_test_empty(($context["type"] ?? null))) ? (twig_sprintf("ct-form-element--%s", $this->sandbox->ensureToStringAllowed(($context["type"] ?? null), 23, $this->source))) : (""));
        // line 24
        $context["name_class"] = (( !twig_test_empty(($context["name"] ?? null))) ? (twig_sprintf("ct-form-element--%s", $this->sandbox->ensureToStringAllowed(($context["name"] ?? null), 24, $this->source))) : (""));
        // line 25
        $context["label_class"] = ((!twig_in_filter(($context["label_display"] ?? null), ["after", "before"])) ? ("ct-form-element--no-label") : (twig_sprintf("ct-form-element--label--%s", $this->sandbox->ensureToStringAllowed(($context["title_display"] ?? null), 25, $this->source))));
        // line 26
        $context["description_class"] = ((!twig_in_filter(($context["description_display"] ?? null), ["after", "before"])) ? ("ct-form-element--no-description") : (twig_sprintf("ct-form-element--label--%s", $this->sandbox->ensureToStringAllowed(($context["description_display"] ?? null), 26, $this->source))));
        // line 27
        $context["disabled_class"] = (((($context["disabled"] ?? null) == "disabled")) ? ("ct-form-element--form-disabled") : (""));
        // line 28
        $context["error_class"] = (( !twig_test_empty(($context["errors"] ?? null))) ? ("ct-form-element--error") : (""));
        // line 29
        $context["modifier_class"] = twig_sprintf("%s %s %s %s %s %s %s %s", $this->sandbox->ensureToStringAllowed(($context["theme_class"] ?? null), 29, $this->source), $this->sandbox->ensureToStringAllowed(($context["type_class"] ?? null), 29, $this->source), $this->sandbox->ensureToStringAllowed(($context["name_class"] ?? null), 29, $this->source), $this->sandbox->ensureToStringAllowed(($context["label_class"] ?? null), 29, $this->source), $this->sandbox->ensureToStringAllowed(($context["description_class"] ?? null), 29, $this->source), $this->sandbox->ensureToStringAllowed(($context["disabled_class"] ?? null), 29, $this->source), $this->sandbox->ensureToStringAllowed(($context["error_class"] ?? null), 29, $this->source), ((array_key_exists("modifier_class", $context)) ? (_twig_default_filter($this->sandbox->ensureToStringAllowed(($context["modifier_class"] ?? null), 29, $this->source), "")) : ("")));
        // line 30
        echo "
";
        // line 31
        $context["description_modifier_class"] = twig_sprintf("%s %s", ((array_key_exists("description_visibility_class", $context)) ? (_twig_default_filter($this->sandbox->ensureToStringAllowed(($context["description_visibility_class"] ?? null), 31, $this->source), "")) : ("")), ((array_key_exists("description_display_class", $context)) ? (_twig_default_filter($this->sandbox->ensureToStringAllowed(($context["description_display_class"] ?? null), 31, $this->source), "")) : ("")));
        // line 32
        echo "
<div class=\"ct-form-element ";
        // line 33
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["modifier_class"] ?? null), 33, $this->source), "html", null, true);
        echo "\" ";
        if ( !twig_test_empty(($context["attributes"] ?? null))) {
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(($context["attributes"] ?? null), 33, $this->source));
        }
        echo ">
  ";
        // line 34
        if (( !twig_test_empty(($context["label"] ?? null)) && twig_in_filter(($context["label_display"] ?? null), ["before", "invisible"]))) {
            // line 35
            echo "    ";
            $this->loadTemplate("@atoms/label/label.twig", "@molecules/form-element/form-element.twig", 35)->display(twig_to_array(["theme" =>             // line 36
($context["theme"] ?? null), "content" =>             // line 37
($context["label"] ?? null), "modifier_class" => ("ct-form-element__label" . (((            // line 38
($context["label_display"] ?? null) == "invisible")) ? ("ct-visually-hidden") : (""))), "attributes" => ((            // line 39
($context["id"] ?? null)) ? ((("for=\"" . ($context["id"] ?? null)) . "\"")) : (""))]));
            // line 41
            echo "  ";
        }
        // line 42
        echo "
  ";
        // line 43
        if ( !twig_test_empty(($context["prefix"] ?? null))) {
            // line 44
            echo "    <span class=\"ct-form-element__prefix\">";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["prefix"] ?? null), 44, $this->source), "html", null, true);
            echo "</span>
  ";
        }
        // line 46
        echo "
  ";
        // line 47
        if (( !twig_test_empty(($context["description"] ?? null)) && (($context["description_display"] ?? null) == "before"))) {
            // line 48
            echo "    ";
            $this->loadTemplate("@atoms/field-description/field-description.twig", "@molecules/form-element/form-element.twig", 48)->display(twig_to_array(["theme" =>             // line 49
($context["theme"] ?? null), "content" =>             // line 50
($context["description"] ?? null), "modifier_class" => ("ct-form-element__description " .             // line 51
($context["description_modifier_class"] ?? null))]));
            // line 53
            echo "  ";
        }
        // line 54
        echo "
  ";
        // line 55
        if ( !twig_test_empty(($context["children"] ?? null))) {
            // line 56
            echo "    ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["children"] ?? null), 56, $this->source), "html", null, true);
            echo "
  ";
        }
        // line 58
        echo "
  ";
        // line 59
        if ( !twig_test_empty(($context["suffix"] ?? null))) {
            // line 60
            echo "    <span class=\"ct-form-element__suffix\">";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["suffix"] ?? null), 60, $this->source), "html", null, true);
            echo "</span>
  ";
        }
        // line 62
        echo "
  ";
        // line 63
        if (( !twig_test_empty(($context["label"] ?? null)) && (($context["label_display"] ?? null) == "after"))) {
            // line 64
            echo "    ";
            $this->loadTemplate("@atoms/label/label.twig", "@molecules/form-element/form-element.twig", 64)->display(twig_to_array(["theme" =>             // line 65
($context["theme"] ?? null), "content" =>             // line 66
($context["label"] ?? null), "attributes" => ((            // line 67
($context["id"] ?? null)) ? ((("for=\"" . ($context["id"] ?? null)) . "\"")) : ("")), "modifier_class" => "ct-form-element__label"]));
            // line 70
            echo "  ";
        }
        // line 71
        echo "
  ";
        // line 72
        if (( !twig_test_empty(($context["description"] ?? null)) && twig_in_filter(($context["description_display"] ?? null), ["after", "invisible"]))) {
            // line 73
            echo "    ";
            $this->loadTemplate("@atoms/field-description/field-description.twig", "@molecules/form-element/form-element.twig", 73)->display(twig_to_array(["theme" =>             // line 74
($context["theme"] ?? null), "content" =>             // line 75
($context["description"] ?? null), "modifier_class" => ("ct-form-element__description" . (((            // line 76
($context["description_display"] ?? null) == "invisible")) ? ("ct-visually-hidden") : ("")))]));
            // line 78
            echo "  ";
        }
        // line 79
        echo "
  ";
        // line 80
        if (($context["errors"] ?? null)) {
            // line 81
            echo "    ";
            $this->loadTemplate("@atoms/field-message/field-message.twig", "@molecules/form-element/form-element.twig", 81)->display(twig_to_array(["theme" =>             // line 82
($context["theme"] ?? null), "type" => "error", "content" =>             // line 84
($context["errors"] ?? null), "modifier_class" => "ct-form-element__message"]));
            // line 87
            echo "  ";
        }
        // line 88
        echo "</div>
";
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["theme", "type", "name", "label_display", "title_display", "description_display", "disabled", "errors", "description_visibility_class", "description_display_class", "attributes", "label", "id", "prefix", "description", "children", "suffix"]);    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@molecules/form-element/form-element.twig";
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
        return array (  174 => 88,  171 => 87,  169 => 84,  168 => 82,  166 => 81,  164 => 80,  161 => 79,  158 => 78,  156 => 76,  155 => 75,  154 => 74,  152 => 73,  150 => 72,  147 => 71,  144 => 70,  142 => 67,  141 => 66,  140 => 65,  138 => 64,  136 => 63,  133 => 62,  127 => 60,  125 => 59,  122 => 58,  116 => 56,  114 => 55,  111 => 54,  108 => 53,  106 => 51,  105 => 50,  104 => 49,  102 => 48,  100 => 47,  97 => 46,  91 => 44,  89 => 43,  86 => 42,  83 => 41,  81 => 39,  80 => 38,  79 => 37,  78 => 36,  76 => 35,  74 => 34,  66 => 33,  63 => 32,  61 => 31,  58 => 30,  56 => 29,  54 => 28,  52 => 27,  50 => 26,  48 => 25,  46 => 24,  44 => 23,  42 => 22,  39 => 21,);
    }

    public function getSourceContext()
    {
        return new Source("", "@molecules/form-element/form-element.twig", "themes/contrib/civictheme/components/02-molecules/form-element/form-element.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 22, "if" => 33, "include" => 35);
        static $filters = array("format" => 22, "default" => 22, "escape" => 33, "raw" => 33);
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
