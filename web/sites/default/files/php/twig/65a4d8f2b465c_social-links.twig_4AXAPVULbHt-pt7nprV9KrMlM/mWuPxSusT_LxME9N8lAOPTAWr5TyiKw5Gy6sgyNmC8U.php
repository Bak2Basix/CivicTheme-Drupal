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

/* @organisms/social-links/social-links.twig */
class __TwigTemplate_288654abe9ba41d1bd495d2c7ccdc113 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'items' => [$this, 'block_items'],
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 18
        echo "
";
        // line 19
        $context["with_border_class"] = ((($context["with_border"] ?? null)) ? ("ct-social-links--with-border") : (""));
        // line 20
        $context["theme_class"] = twig_sprintf("ct-theme-%s", ((array_key_exists("theme", $context)) ? (_twig_default_filter($this->sandbox->ensureToStringAllowed(($context["theme"] ?? null), 20, $this->source), "light")) : ("light")));
        // line 21
        $context["modifier_class"] = twig_sprintf("%s %s %s", $this->sandbox->ensureToStringAllowed(($context["theme_class"] ?? null), 21, $this->source), $this->sandbox->ensureToStringAllowed(($context["with_border_class"] ?? null), 21, $this->source), ((array_key_exists("modifier_class", $context)) ? (_twig_default_filter($this->sandbox->ensureToStringAllowed(($context["modifier_class"] ?? null), 21, $this->source), "")) : ("")));
        // line 22
        echo "
";
        // line 23
        if ( !twig_test_empty(($context["items"] ?? null))) {
            // line 24
            echo "  <div class=\"ct-social-links ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["modifier_class"] ?? null), 24, $this->source), "html", null, true);
            echo "\" ";
            if ( !twig_test_empty(($context["attributes"] ?? null))) {
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(($context["attributes"] ?? null), 24, $this->source));
            }
            echo ">

    ";
            // line 26
            $this->displayBlock('items', $context, $blocks);
            // line 53
            echo "
  </div>
";
        }
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["with_border", "theme", "items", "attributes"]);    }

    // line 26
    public function block_items($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 27
        echo "      ";
        $context["items_rendered"] = [];
        // line 28
        echo "      ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["items"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 29
            ob_start(function () { return ''; });
            // line 30
            echo "          ";
            $this->loadTemplate("@atoms/button/button.twig", "@organisms/social-links/social-links.twig", 30)->display(twig_to_array(["theme" =>             // line 31
($context["theme"] ?? null), "kind" => "link", "type" => "tertiary", "icon" => ((( !twig_get_attribute($this->env, $this->source,             // line 34
$context["item"], "icon_html", [], "any", true, true, true, 34) || twig_test_empty(twig_get_attribute($this->env, $this->source, $context["item"], "icon_html", [], "any", false, false, true, 34)))) ? (twig_get_attribute($this->env, $this->source, $context["item"], "icon", [], "any", false, false, true, 34)) : (null)), "text" => (((twig_get_attribute($this->env, $this->source,             // line 35
$context["item"], "icon_html", [], "any", true, true, true, 35) &&  !(null === twig_get_attribute($this->env, $this->source, $context["item"], "icon_html", [], "any", false, false, true, 35)))) ? (twig_get_attribute($this->env, $this->source, $context["item"], "icon_html", [], "any", false, false, true, 35)) : (null)), "url" => twig_get_attribute($this->env, $this->source,             // line 36
$context["item"], "url", [], "any", false, false, true, 36), "is_external" => false, "is_new_window" => true, "is_raw_text" => true, "modifier_class" => "ct-social-links__button", "attributes" => (((twig_get_attribute($this->env, $this->source,             // line 41
$context["item"], "title", [], "any", true, true, true, 41) &&  !twig_test_empty(twig_get_attribute($this->env, $this->source, $context["item"], "title", [], "any", false, false, true, 41)))) ? (((" title=\"" . twig_get_attribute($this->env, $this->source, $context["item"], "title", [], "any", false, false, true, 41)) . "\"")) : (""))]));
            // line 43
            echo "        ";
            $context["item_rendered"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 44
            $context["items_rendered"] = twig_array_merge($this->sandbox->ensureToStringAllowed(($context["items_rendered"] ?? null), 44, $this->source), [($context["item_rendered"] ?? null)]);
            // line 45
            echo "      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 46
        echo "
      ";
        // line 47
        $this->loadTemplate("@base/item-list/item-list.twig", "@organisms/social-links/social-links.twig", 47)->display(twig_to_array(["items" =>         // line 48
($context["items_rendered"] ?? null), "direction" => "horizontal", "modifier_class" => "ct-social-links__list"]));
        // line 52
        echo "    ";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@organisms/social-links/social-links.twig";
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
        return array (  113 => 52,  111 => 48,  110 => 47,  107 => 46,  101 => 45,  99 => 44,  96 => 43,  94 => 41,  93 => 36,  92 => 35,  91 => 34,  90 => 31,  88 => 30,  86 => 29,  81 => 28,  78 => 27,  74 => 26,  66 => 53,  64 => 26,  54 => 24,  52 => 23,  49 => 22,  47 => 21,  45 => 20,  43 => 19,  40 => 18,);
    }

    public function getSourceContext()
    {
        return new Source("", "@organisms/social-links/social-links.twig", "themes/contrib/civictheme/components/03-organisms/social-links/social-links.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 19, "if" => 23, "block" => 26, "for" => 28, "include" => 30);
        static $filters = array("format" => 20, "default" => 20, "escape" => 24, "raw" => 24, "merge" => 44);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if', 'block', 'for', 'include'],
                ['format', 'default', 'escape', 'raw', 'merge'],
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
