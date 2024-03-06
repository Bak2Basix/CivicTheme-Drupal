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

/* @atoms/select/select.twig */
class __TwigTemplate_693c21d52edf985d3bbbe74fbf89d8fb extends Template
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
        // line 25
        echo "
";
        // line 26
        $context["required_class"] = ((($context["required"] ?? null)) ? ("ct-input--required required") : (""));
        // line 27
        $context["error_class"] = ((($context["has_error"] ?? null)) ? ("ct-input--error error") : (""));
        // line 28
        $context["theme_class"] = twig_sprintf("ct-theme-%s", ((array_key_exists("theme", $context)) ? (_twig_default_filter($this->sandbox->ensureToStringAllowed(($context["theme"] ?? null), 28, $this->source), "light")) : ("light")));
        // line 29
        $context["modifier_class"] = twig_sprintf("%s %s %s %s", $this->sandbox->ensureToStringAllowed(($context["theme_class"] ?? null), 29, $this->source), $this->sandbox->ensureToStringAllowed(($context["required_class"] ?? null), 29, $this->source), $this->sandbox->ensureToStringAllowed(($context["error_class"] ?? null), 29, $this->source), ((array_key_exists("modifier_class", $context)) ? (_twig_default_filter($this->sandbox->ensureToStringAllowed(($context["modifier_class"] ?? null), 29, $this->source), "")) : ("")));
        // line 30
        echo "
";
        // line 31
        if ( !twig_test_empty(($context["options"] ?? null))) {
            // line 32
            echo "  <select
    class=\"ct-select ct-input__element ";
            // line 33
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["modifier_class"] ?? null), 33, $this->source), "html", null, true);
            echo "\"
    ";
            // line 34
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(((($context["is_multiple"] ?? null)) ? ("multiple") : ("")));
            echo "
    ";
            // line 35
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(((($context["disabled"] ?? null)) ? ("disabled") : ("")));
            echo "
    ";
            // line 36
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(((($context["required"] ?? null)) ? ("required") : ("")));
            echo "
    ";
            // line 37
            if ( !twig_test_empty(($context["attributes"] ?? null))) {
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(($context["attributes"] ?? null), 37, $this->source));
            }
            // line 38
            echo "  >
    ";
            // line 39
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["options"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["option"]) {
                // line 40
                echo "      ";
                if ((twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, true, 40) == "optgroup")) {
                    // line 41
                    echo "        <optgroup label=\"";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["option"], "label", [], "any", false, false, true, 41), 41, $this->source), "html", null, true);
                    echo "\">
          ";
                    // line 42
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["option"], "options", [], "any", false, false, true, 42));
                    foreach ($context['_seq'] as $context["_key"] => $context["sub_option"]) {
                        // line 43
                        echo "            ";
                        if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, $context["sub_option"], "label", [], "any", false, false, true, 43))) {
                            // line 44
                            echo "              <option value=\"";
                            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ((twig_get_attribute($this->env, $this->source, $context["sub_option"], "value", [], "any", true, true, true, 44)) ? (_twig_default_filter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["sub_option"], "value", [], "any", false, false, true, 44), 44, $this->source), "")) : ("")), "html", null, true);
                            echo "\" ";
                            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(((twig_get_attribute($this->env, $this->source, $context["sub_option"], "selected", [], "any", false, false, true, 44)) ? ("selected=\"selected\"") : ("")));
                            echo ">";
                            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["sub_option"], "label", [], "any", false, false, true, 44), 44, $this->source), "html", null, true);
                            echo "</option>
            ";
                        }
                        // line 46
                        echo "          ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sub_option'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 47
                    echo "        </optgroup>
      ";
                } elseif ((twig_get_attribute($this->env, $this->source,                 // line 48
$context["option"], "type", [], "any", false, false, true, 48) == "option")) {
                    // line 49
                    echo "        ";
                    if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, $context["option"], "label", [], "any", false, false, true, 49))) {
                        // line 50
                        echo "          <option value=\"";
                        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ((twig_get_attribute($this->env, $this->source, $context["option"], "value", [], "any", true, true, true, 50)) ? (_twig_default_filter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["option"], "value", [], "any", false, false, true, 50), 50, $this->source), "")) : ("")), "html", null, true);
                        echo "\" ";
                        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(((twig_get_attribute($this->env, $this->source, $context["option"], "selected", [], "any", false, false, true, 50)) ? ("selected=\"selected\"") : ("")));
                        echo ">";
                        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["option"], "label", [], "any", false, false, true, 50), 50, $this->source), "html", null, true);
                        echo "</option>
        ";
                    }
                    // line 52
                    echo "      ";
                }
                // line 53
                echo "    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 54
            echo "  </select>
";
        }
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["required", "has_error", "theme", "options", "is_multiple", "disabled", "attributes"]);    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@atoms/select/select.twig";
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
        return array (  143 => 54,  137 => 53,  134 => 52,  124 => 50,  121 => 49,  119 => 48,  116 => 47,  110 => 46,  100 => 44,  97 => 43,  93 => 42,  88 => 41,  85 => 40,  81 => 39,  78 => 38,  74 => 37,  70 => 36,  66 => 35,  62 => 34,  58 => 33,  55 => 32,  53 => 31,  50 => 30,  48 => 29,  46 => 28,  44 => 27,  42 => 26,  39 => 25,);
    }

    public function getSourceContext()
    {
        return new Source("", "@atoms/select/select.twig", "themes/contrib/civictheme/components/01-atoms/select/select.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 26, "if" => 31, "for" => 39);
        static $filters = array("format" => 28, "default" => 28, "escape" => 33, "raw" => 37);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if', 'for'],
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
