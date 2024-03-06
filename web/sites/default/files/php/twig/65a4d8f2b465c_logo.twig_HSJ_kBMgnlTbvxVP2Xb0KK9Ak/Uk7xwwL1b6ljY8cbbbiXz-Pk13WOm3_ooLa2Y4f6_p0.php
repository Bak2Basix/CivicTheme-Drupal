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

/* @molecules/logo/logo.twig */
class __TwigTemplate_6290056dd2ea8d1f34d4cdaba5d49702 extends Template
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
        $context["type"] = ((twig_in_filter(($context["type"] ?? null), ["default", "inline", "stacked", "inline-stacked"])) ? (($context["type"] ?? null)) : ("default"));
        // line 27
        $context["type_class"] = twig_sprintf("ct-logo--%s", ((array_key_exists("type", $context)) ? (_twig_default_filter($this->sandbox->ensureToStringAllowed(($context["type"] ?? null), 27, $this->source), "default")) : ("default")));
        // line 28
        $context["theme_class"] = twig_sprintf("ct-theme-%s", ((array_key_exists("theme", $context)) ? (_twig_default_filter($this->sandbox->ensureToStringAllowed(($context["theme"] ?? null), 28, $this->source), "light")) : ("light")));
        // line 29
        $context["modifier_class"] = twig_sprintf("%s %s %s", $this->sandbox->ensureToStringAllowed(($context["theme_class"] ?? null), 29, $this->source), $this->sandbox->ensureToStringAllowed(($context["type_class"] ?? null), 29, $this->source), ((array_key_exists("modifier_class", $context)) ? (_twig_default_filter($this->sandbox->ensureToStringAllowed(($context["modifier_class"] ?? null), 29, $this->source), "")) : ("")));
        // line 30
        echo "
";
        // line 31
        if ( !twig_test_empty(($context["logos"] ?? null))) {
            // line 32
            echo "  ";
            if ( !twig_test_empty(($context["url"] ?? null))) {
                // line 33
                echo "    <a class=\"ct-logo ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["modifier_class"] ?? null), 33, $this->source), "html", null, true);
                echo "\" href=\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["url"] ?? null), 33, $this->source), "html", null, true);
                echo "\" title=\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ((array_key_exists("title", $context)) ? (_twig_default_filter($this->sandbox->ensureToStringAllowed(($context["title"] ?? null), 33, $this->source), "Click to go to the homepage")) : ("Click to go to the homepage")), "html", null, true);
                echo "\" ";
                if ( !twig_test_empty(($context["attributes"] ?? null))) {
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(($context["attributes"] ?? null), 33, $this->source));
                }
                echo ">
  ";
            } else {
                // line 35
                echo "    <div class=\"ct-logo ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["modifier_class"] ?? null), 35, $this->source), "html", null, true);
                echo "\" ";
                if ( !twig_test_empty(($context["attributes"] ?? null))) {
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(($context["attributes"] ?? null), 35, $this->source));
                }
                echo ">
  ";
            }
            // line 37
            echo "
  ";
            // line 38
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["logos"] ?? null));
            foreach ($context['_seq'] as $context["logo_type"] => $context["logo"]) {
                // line 39
                echo "    ";
                if ((((($context["type"] ?? null) == "default") && ($context["logo_type"] == "primary")) || (($context["type"] ?? null) != "default"))) {
                    // line 40
                    echo "      ";
                    if (($context["logo_type"] == "secondary")) {
                        // line 41
                        echo "        <span class=\"ct-logo__stripe ";
                        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar((((($context["type"] ?? null) == "inline")) ? ("hide-xxs show-l") : ("")));
                        echo "\"></span>
      ";
                    }
                    // line 43
                    echo "      ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($context["logo"]);
                    foreach ($context['_seq'] as $context["breakpoint"] => $context["img"]) {
                        // line 44
                        echo "        ";
                        $this->loadTemplate("@atoms/image/image.twig", "@molecules/logo/logo.twig", 44)->display(twig_to_array(["theme" =>                         // line 45
($context["theme"] ?? null), "url" => twig_get_attribute($this->env, $this->source,                         // line 46
$context["img"], "url", [], "any", false, false, true, 46), "alt" => twig_get_attribute($this->env, $this->source,                         // line 47
$context["img"], "alt", [], "any", false, false, true, 47), "modifier_class" => ((("ct-logo__image ct-logo__image--" .                         // line 48
$context["breakpoint"]) . " ") . ((($context["breakpoint"] == "mobile")) ? (((((($context["type"] ?? null) == "inline") && ($context["logo_type"] == "secondary"))) ? ("hide-xxs") : ("hide-l"))) : ("hide-xxs show-l")))]));
                        // line 50
                        echo "      ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['breakpoint'], $context['img'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 51
                    echo "    ";
                }
                // line 52
                echo "  ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['logo_type'], $context['logo'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 53
            echo "
  ";
            // line 54
            if ( !twig_test_empty(($context["url"] ?? null))) {
                // line 55
                echo "    </a>
  ";
            } else {
                // line 57
                echo "    </div>
  ";
            }
        }
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["theme", "logos", "url", "title", "attributes"]);    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@molecules/logo/logo.twig";
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
        return array (  137 => 57,  133 => 55,  131 => 54,  128 => 53,  122 => 52,  119 => 51,  113 => 50,  111 => 48,  110 => 47,  109 => 46,  108 => 45,  106 => 44,  101 => 43,  95 => 41,  92 => 40,  89 => 39,  85 => 38,  82 => 37,  72 => 35,  58 => 33,  55 => 32,  53 => 31,  50 => 30,  48 => 29,  46 => 28,  44 => 27,  42 => 26,  39 => 25,);
    }

    public function getSourceContext()
    {
        return new Source("", "@molecules/logo/logo.twig", "themes/contrib/civictheme/components/02-molecules/logo/logo.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 26, "if" => 31, "for" => 38, "include" => 44);
        static $filters = array("format" => 27, "default" => 27, "escape" => 33, "raw" => 33);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if', 'for', 'include'],
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
