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

/* @molecules/tabs/tabs.twig */
class __TwigTemplate_5d48254f6f889e88702e98d6646b3679 extends Template
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
        // line 24
        echo "
";
        // line 25
        $context["vertical_spacing_class"] = ((twig_in_filter(($context["vertical_spacing"] ?? null), ["top", "bottom", "both"])) ? (twig_sprintf("ct-vertical-spacing--%s", $this->sandbox->ensureToStringAllowed(($context["vertical_spacing"] ?? null), 25, $this->source))) : (""));
        // line 26
        $context["theme_class"] = twig_sprintf("ct-theme-%s", ((array_key_exists("theme", $context)) ? (_twig_default_filter($this->sandbox->ensureToStringAllowed(($context["theme"] ?? null), 26, $this->source), "light")) : ("light")));
        // line 27
        $context["modifier_class"] = twig_sprintf("%s %s %s", $this->sandbox->ensureToStringAllowed(($context["theme_class"] ?? null), 27, $this->source), $this->sandbox->ensureToStringAllowed(($context["vertical_spacing_class"] ?? null), 27, $this->source), ((array_key_exists("modifier_class", $context)) ? (_twig_default_filter($this->sandbox->ensureToStringAllowed(($context["modifier_class"] ?? null), 27, $this->source), "")) : ("")));
        // line 28
        echo "
";
        // line 30
        if ((twig_test_empty(($context["links"] ?? null)) &&  !twig_test_empty(($context["panels"] ?? null)))) {
            // line 31
            echo "  ";
            $context["links"] = [];
            // line 32
            echo "  ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["panels"] ?? null));
            foreach ($context['_seq'] as $context["k"] => $context["panel"]) {
                // line 33
                echo "    ";
                $context["link_id"] = ($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["panel"], "id", [], "any", false, false, true, 33), 33, $this->source) . "-tab");
                // line 34
                echo "    ";
                $context["links"] = twig_array_merge($this->sandbox->ensureToStringAllowed(($context["links"] ?? null), 34, $this->source), [["text" => twig_get_attribute($this->env, $this->source,                 // line 35
$context["panel"], "title", [], "any", false, false, true, 35), "url" => ("#" . $this->sandbox->ensureToStringAllowed(                // line 36
($context["link_id"] ?? null), 36, $this->source)), "attributes" => (((("role=\"tab\" id=\"" . $this->sandbox->ensureToStringAllowed(                // line 37
($context["link_id"] ?? null), 37, $this->source)) . "\" aria-controls=\"") . $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["panel"], "id", [], "any", false, false, true, 37), 37, $this->source)) . "\""), "link_id" =>                 // line 38
($context["link_id"] ?? null)]]);
                // line 40
                echo "  ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['k'], $context['panel'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        // line 42
        echo "
";
        // line 43
        $context["link_items"] = [];
        // line 44
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["links"] ?? null));
        foreach ($context['_seq'] as $context["k"] => $context["link"]) {
            // line 45
            ob_start(function () { return ''; });
            // line 46
            echo "    ";
            $this->loadTemplate("@atoms/link/link.twig", "@molecules/tabs/tabs.twig", 46)->display(twig_to_array(["theme" =>             // line 47
($context["theme"] ?? null), "text" => twig_get_attribute($this->env, $this->source,             // line 48
$context["link"], "text", [], "any", false, false, true, 48), "url" => twig_get_attribute($this->env, $this->source,             // line 49
$context["link"], "url", [], "any", false, false, true, 49), "is_new_window" => ((twig_get_attribute($this->env, $this->source,             // line 50
$context["link"], "is_new_window", [], "any", true, true, true, 50)) ? (twig_get_attribute($this->env, $this->source, $context["link"], "is_new_window", [], "any", false, false, true, 50)) : (false)), "is_external" => ((twig_get_attribute($this->env, $this->source,             // line 51
$context["link"], "is_external", [], "any", true, true, true, 51)) ? (twig_get_attribute($this->env, $this->source, $context["link"], "is_external", [], "any", false, false, true, 51)) : (false)), "modifier_class" => ((twig_get_attribute($this->env, $this->source,             // line 52
$context["link"], "modifier_class", [], "any", false, false, true, 52)) ? (twig_get_attribute($this->env, $this->source, $context["link"], "modifier_class", [], "any", false, false, true, 52)) : ("")), "attributes" => ("data-tabs-tab " . ((twig_get_attribute($this->env, $this->source,             // line 53
$context["link"], "attributes", [], "any", false, false, true, 53)) ? (twig_get_attribute($this->env, $this->source, $context["link"], "attributes", [], "any", false, false, true, 53)) : ("")))]));
            // line 55
            echo "  ";
            $context["link"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 56
            $context["link_items"] = twig_array_merge($this->sandbox->ensureToStringAllowed(($context["link_items"] ?? null), 56, $this->source), [$context["link"]]);
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['k'], $context['link'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 58
        echo "
";
        // line 59
        if (( !twig_test_empty(($context["panels"] ?? null)) ||  !twig_test_empty(($context["link_items"] ?? null)))) {
            // line 60
            echo "  <div class=\"ct-tabs ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["modifier_class"] ?? null), 60, $this->source), "html", null, true);
            echo "\" data-tabs-panel ";
            if ( !twig_test_empty(($context["attributes"] ?? null))) {
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["attributes"] ?? null), 60, $this->source), "html", null, true);
            }
            echo ">
    ";
            // line 61
            $this->loadTemplate("@base/item-list/item-list.twig", "@molecules/tabs/tabs.twig", 61)->display(twig_to_array(["items" =>             // line 62
($context["link_items"] ?? null), "no_gap" => true, "modifier_class" => "ct-tabs__links"]));
            // line 66
            echo "
    ";
            // line 67
            if ( !twig_test_empty(($context["panels"] ?? null))) {
                // line 68
                echo "      <div class=\"ct-tabs__panels\">
        ";
                // line 69
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["panels"] ?? null));
                foreach ($context['_seq'] as $context["k"] => $context["panel"]) {
                    // line 70
                    echo "          ";
                    if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, $context["panel"], "content", [], "any", false, false, true, 70))) {
                        // line 71
                        echo "            <div class=\"ct-tabs__panels__panel ";
                        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(((twig_get_attribute($this->env, $this->source, $context["panel"], "is_selected", [], "any", false, false, true, 71)) ? ("selected") : ("")));
                        echo "\" data-tabs-panel id=\"";
                        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["panel"], "id", [], "any", false, false, true, 71), 71, $this->source), "html", null, true);
                        echo "\" role=\"tabpanel\" aria-labelledby=\"";
                        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (($__internal_compile_0 = ($context["links"] ?? null)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0[$context["k"]] ?? null) : null), "link_id", [], "any", false, false, true, 71), 71, $this->source), "html", null, true);
                        echo "\">
              ";
                        // line 72
                        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["panel"], "content", [], "any", false, false, true, 72), 72, $this->source), "html", null, true);
                        echo "
            </div>
          ";
                    }
                    // line 75
                    echo "        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['k'], $context['panel'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 76
                echo "      </div>
    ";
            }
            // line 78
            echo "  </div>
";
        }
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["vertical_spacing", "theme", "links", "panels", "attributes"]);    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@molecules/tabs/tabs.twig";
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
        return array (  165 => 78,  161 => 76,  155 => 75,  149 => 72,  140 => 71,  137 => 70,  133 => 69,  130 => 68,  128 => 67,  125 => 66,  123 => 62,  122 => 61,  113 => 60,  111 => 59,  108 => 58,  102 => 56,  99 => 55,  97 => 53,  96 => 52,  95 => 51,  94 => 50,  93 => 49,  92 => 48,  91 => 47,  89 => 46,  87 => 45,  83 => 44,  81 => 43,  78 => 42,  71 => 40,  69 => 38,  68 => 37,  67 => 36,  66 => 35,  64 => 34,  61 => 33,  56 => 32,  53 => 31,  51 => 30,  48 => 28,  46 => 27,  44 => 26,  42 => 25,  39 => 24,);
    }

    public function getSourceContext()
    {
        return new Source("", "@molecules/tabs/tabs.twig", "themes/contrib/civictheme/components/02-molecules/tabs/tabs.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 25, "if" => 30, "for" => 32, "include" => 46);
        static $filters = array("format" => 25, "default" => 26, "merge" => 34, "escape" => 60);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if', 'for', 'include'],
                ['format', 'default', 'merge', 'escape'],
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
