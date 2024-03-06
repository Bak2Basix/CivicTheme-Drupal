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

/* @atoms/input/input.twig */
class __TwigTemplate_b71a8c010f7e5a27202d6ad196a81a67 extends Template
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
        if ( !twig_test_empty(($context["type"] ?? null))) {
            // line 23
            echo "
  ";
            // line 24
            $context["state"] = (((twig_test_empty(($context["state"] ?? null)) || (($context["state"] ?? null) == "none"))) ? ("default") : (($context["state"] ?? null)));
            // line 25
            echo "  ";
            $context["state_class"] = twig_sprintf("ct-input--%s", $this->sandbox->ensureToStringAllowed(($context["state"] ?? null), 25, $this->source));
            // line 26
            echo "  ";
            $context["disabled_class"] = ((($context["disabled"] ?? null)) ? ("ct-input--disabled disabled") : (""));
            // line 27
            echo "  ";
            $context["required_class"] = ((($context["required"] ?? null)) ? ("ct-input--required required") : (""));
            // line 28
            echo "  ";
            $context["type_class"] = twig_sprintf("ct-input--%s", $this->sandbox->ensureToStringAllowed(($context["type"] ?? null), 28, $this->source));
            // line 29
            echo "  ";
            $context["theme_class"] = twig_sprintf("ct-theme-%s", ((array_key_exists("theme", $context)) ? (_twig_default_filter($this->sandbox->ensureToStringAllowed(($context["theme"] ?? null), 29, $this->source), "light")) : ("light")));
            // line 30
            echo "  ";
            $context["civictheme_input_modifier_class"] = twig_sprintf("%s %s %s %s %s %s", $this->sandbox->ensureToStringAllowed(($context["theme_class"] ?? null), 30, $this->source), $this->sandbox->ensureToStringAllowed(($context["state_class"] ?? null), 30, $this->source), $this->sandbox->ensureToStringAllowed(($context["disabled_class"] ?? null), 30, $this->source), $this->sandbox->ensureToStringAllowed(($context["required_class"] ?? null), 30, $this->source), $this->sandbox->ensureToStringAllowed(($context["type_class"] ?? null), 30, $this->source), ((array_key_exists("modifier_class", $context)) ? (_twig_default_filter($this->sandbox->ensureToStringAllowed(($context["modifier_class"] ?? null), 30, $this->source), "")) : ("")));
            // line 31
            echo "
  ";
            // line 32
            if ((($context["type"] ?? null) == "hidden")) {
                // line 33
                echo "    <input
      type=\"";
                // line 34
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["type"] ?? null), 34, $this->source), "html", null, true);
                echo "\"
      value=\"";
                // line 35
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["value"] ?? null), 35, $this->source), "html", null, true);
                echo "\"
      ";
                // line 36
                if ( !twig_test_empty(($context["attributes"] ?? null))) {
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(($context["attributes"] ?? null), 36, $this->source));
                }
                // line 37
                echo "    />
  ";
            } else {
                // line 39
                echo "    <div class=\"ct-input ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["civictheme_input_modifier_class"] ?? null), 39, $this->source), "html", null, true);
                echo "\" ";
                if ( !twig_test_empty(($context["attributes"] ?? null))) {
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(($context["attributes"] ?? null), 39, $this->source));
                }
                echo ">
      ";
                // line 40
                if ((($context["type"] ?? null) == "textarea")) {
                    // line 41
                    echo "        ";
                    $this->loadTemplate("@atoms/textarea/textarea.twig", "@atoms/input/input.twig", 41)->display($context);
                    // line 42
                    echo "      ";
                } elseif ((($context["type"] ?? null) == "radio")) {
                    // line 43
                    echo "        ";
                    $this->loadTemplate("@atoms/radio/radio.twig", "@atoms/input/input.twig", 43)->display($context);
                    // line 44
                    echo "      ";
                } elseif ((($context["type"] ?? null) == "checkbox")) {
                    // line 45
                    echo "        ";
                    $this->loadTemplate("@atoms/checkbox/checkbox.twig", "@atoms/input/input.twig", 45)->display($context);
                    // line 46
                    echo "      ";
                } elseif (((($context["type"] ?? null) == "submit") || (($context["type"] ?? null) == "reset"))) {
                    // line 47
                    echo "        ";
                    $this->loadTemplate("@atoms/button/button.twig", "@atoms/input/input.twig", 47)->display(twig_to_array(["kind" =>                     // line 48
($context["type"] ?? null), "text" =>                     // line 49
($context["value"] ?? null), "modifier_class" =>                     // line 50
($context["civictheme_input_modifier_class"] ?? null)]));
                    // line 52
                    echo "      ";
                } else {
                    // line 53
                    echo "        ";
                    $this->loadTemplate("@atoms/textfield/textfield.twig", "@atoms/input/input.twig", 53)->display($context);
                    // line 54
                    echo "      ";
                }
                // line 55
                echo "    </div>
  ";
            }
        }
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["type", "disabled", "required", "theme", "modifier_class", "value", "attributes"]);    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@atoms/input/input.twig";
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
        return array (  135 => 55,  132 => 54,  129 => 53,  126 => 52,  124 => 50,  123 => 49,  122 => 48,  120 => 47,  117 => 46,  114 => 45,  111 => 44,  108 => 43,  105 => 42,  102 => 41,  100 => 40,  91 => 39,  87 => 37,  83 => 36,  79 => 35,  75 => 34,  72 => 33,  70 => 32,  67 => 31,  64 => 30,  61 => 29,  58 => 28,  55 => 27,  52 => 26,  49 => 25,  47 => 24,  44 => 23,  42 => 22,  39 => 21,);
    }

    public function getSourceContext()
    {
        return new Source("", "@atoms/input/input.twig", "themes/contrib/civictheme/components/01-atoms/input/input.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 22, "set" => 24, "include" => 41);
        static $filters = array("format" => 25, "default" => 29, "escape" => 34, "raw" => 36);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['if', 'set', 'include'],
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
