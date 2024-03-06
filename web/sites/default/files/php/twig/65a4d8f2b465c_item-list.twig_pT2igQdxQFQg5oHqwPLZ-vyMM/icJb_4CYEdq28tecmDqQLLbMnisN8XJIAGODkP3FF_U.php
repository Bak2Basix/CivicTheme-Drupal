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

/* @base/item-list/item-list.twig */
class __TwigTemplate_09acfc4dd5180f4835460f4a0fe34bd6 extends Template
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
        $context["direction"] = ((twig_in_filter(($context["direction"] ?? null), ["horizontal", "vertical"])) ? (($context["direction"] ?? null)) : ("horizontal"));
        // line 17
        $context["size"] = ((twig_in_filter(($context["size"] ?? null), ["small", "regular", "large"])) ? (($context["size"] ?? null)) : ("regular"));
        // line 18
        $context["direction_class"] = twig_sprintf("ct-item-list--%s", $this->sandbox->ensureToStringAllowed(($context["direction"] ?? null), 18, $this->source));
        // line 19
        $context["size_class"] = twig_sprintf("ct-item-list--%s", $this->sandbox->ensureToStringAllowed(($context["size"] ?? null), 19, $this->source));
        // line 20
        $context["no_gap_class"] = ((($context["no_gap"] ?? null)) ? ("ct-item-list--no-gap") : (""));
        // line 21
        $context["modifier_class"] = twig_sprintf("%s %s %s %s", $this->sandbox->ensureToStringAllowed(($context["direction_class"] ?? null), 21, $this->source), $this->sandbox->ensureToStringAllowed(($context["size_class"] ?? null), 21, $this->source), $this->sandbox->ensureToStringAllowed(($context["no_gap_class"] ?? null), 21, $this->source), ((array_key_exists("modifier_class", $context)) ? (_twig_default_filter($this->sandbox->ensureToStringAllowed(($context["modifier_class"] ?? null), 21, $this->source), "")) : ("")));
        // line 22
        echo "
";
        // line 23
        if (($context["items"] ?? null)) {
            // line 24
            echo "  <ul class=\"ct-item-list ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["modifier_class"] ?? null), 24, $this->source), "html", null, true);
            echo "\" ";
            if ( !twig_test_empty(($context["attributes"] ?? null))) {
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(($context["attributes"] ?? null), 24, $this->source));
            }
            echo ">
    ";
            // line 25
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["items"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 26
                echo "      ";
                if ( !twig_test_empty($context["item"])) {
                    // line 27
                    echo "        <li class=\"ct-item-list__item\">
          ";
                    // line 28
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($context["item"], 28, $this->source), "html", null, true);
                    echo "
        </li>
      ";
                }
                // line 31
                echo "    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 32
            echo "  </ul>
";
        }
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["no_gap", "items", "attributes"]);    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@base/item-list/item-list.twig";
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
        return array (  90 => 32,  84 => 31,  78 => 28,  75 => 27,  72 => 26,  68 => 25,  59 => 24,  57 => 23,  54 => 22,  52 => 21,  50 => 20,  48 => 19,  46 => 18,  44 => 17,  42 => 16,  39 => 15,);
    }

    public function getSourceContext()
    {
        return new Source("", "@base/item-list/item-list.twig", "themes/contrib/civictheme/components/00-base/item-list/item-list.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 16, "if" => 23, "for" => 25);
        static $filters = array("format" => 18, "default" => 21, "escape" => 24, "raw" => 24);
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
