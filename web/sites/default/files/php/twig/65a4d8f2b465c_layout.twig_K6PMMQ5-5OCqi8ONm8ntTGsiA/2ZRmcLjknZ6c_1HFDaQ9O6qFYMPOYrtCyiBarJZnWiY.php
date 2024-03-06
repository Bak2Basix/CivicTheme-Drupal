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

/* @base/layout/layout.twig */
class __TwigTemplate_c1b21810b7de7455789408d3df199488 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'content_top' => [$this, 'block_content_top'],
            'sidebar' => [$this, 'block_sidebar'],
            'content' => [$this, 'block_content'],
            'content_bottom' => [$this, 'block_content_bottom'],
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 32
        echo "
";
        // line 33
        $context["has_sidebar"] =  !twig_test_empty(($context["sidebar"] ?? null));
        // line 34
        if (($context["hide_sidebar"] ?? null)) {
            // line 35
            echo "  ";
            $context["has_sidebar"] = false;
        }
        // line 37
        $context["vertical_spacing"] = ((($context["has_sidebar"] ?? null)) ? ("top") : (($context["vertical_spacing"] ?? null)));
        // line 38
        $context["vertical_spacing_class"] = ((twig_in_filter(($context["vertical_spacing"] ?? null), ["top", "bottom", "both"])) ? (twig_sprintf("ct-vertical-spacing--%s", $this->sandbox->ensureToStringAllowed(($context["vertical_spacing"] ?? null), 38, $this->source))) : (""));
        // line 39
        $context["theme_class"] = twig_sprintf("ct-theme-%s", ((array_key_exists("theme", $context)) ? (_twig_default_filter($this->sandbox->ensureToStringAllowed(($context["theme"] ?? null), 39, $this->source), "light")) : ("light")));
        // line 40
        $context["modifier_class"] = twig_sprintf("%s %s %s", $this->sandbox->ensureToStringAllowed(($context["theme_class"] ?? null), 40, $this->source), $this->sandbox->ensureToStringAllowed(($context["vertical_spacing_class"] ?? null), 40, $this->source), ((array_key_exists("modifier_class", $context)) ? (_twig_default_filter($this->sandbox->ensureToStringAllowed(($context["modifier_class"] ?? null), 40, $this->source), "")) : ("")));
        // line 41
        echo "
";
        // line 42
        if ((($context["content"] ?? null) || ($context["sidebar"] ?? null))) {
            // line 43
            echo "  <main class=\"ct-layout ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["modifier_class"] ?? null), 43, $this->source), "html", null, true);
            echo "\" role=\"main\">
    <a id=\"main-content\" tabindex=\"-1\"></a>

    ";
            // line 46
            $this->displayBlock('content_top', $context, $blocks);
            // line 51
            echo "
    <div class=\"ct-layout__inner ";
            // line 52
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar((((($context["has_sidebar"] ?? null) || ($context["is_contained"] ?? null))) ? ("container") : ("")));
            echo "\">

      ";
            // line 54
            if ((($context["has_sidebar"] ?? null) || ($context["is_contained"] ?? null))) {
                // line 55
                echo "      <div class=\"row\">
      ";
            }
            // line 57
            echo "
        ";
            // line 58
            if (($context["has_sidebar"] ?? null)) {
                // line 59
                echo "          ";
                $this->displayBlock('sidebar', $context, $blocks);
                // line 64
                echo "        ";
            }
            // line 65
            echo "
        ";
            // line 66
            $this->displayBlock('content', $context, $blocks);
            // line 71
            echo "
      ";
            // line 72
            if ((($context["has_sidebar"] ?? null) || ($context["is_contained"] ?? null))) {
                // line 73
                echo "      </div>
      ";
            }
            // line 75
            echo "    </div>

    ";
            // line 77
            $this->displayBlock('content_bottom', $context, $blocks);
            // line 82
            echo "
  </main>
";
        }
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["sidebar", "hide_sidebar", "theme", "content", "is_contained", "content_top", "sidebar_attributes", "content_attributes", "content_bottom"]);    }

    // line 46
    public function block_content_top($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 47
        echo "      ";
        if ( !twig_test_empty(($context["content_top"] ?? null))) {
            // line 48
            echo "        ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["content_top"] ?? null), 48, $this->source), "html", null, true);
            echo "
      ";
        }
        // line 50
        echo "    ";
    }

    // line 59
    public function block_sidebar($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 60
        echo "            <aside class=\"ct-layout__sidebar ";
        if (($context["has_sidebar"] ?? null)) {
            echo "col-m-3 col-xxs-12";
        }
        echo "\" role=\"complementary\" ";
        if (($context["sidebar_attributes"] ?? null)) {
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["sidebar_attributes"] ?? null), 60, $this->source), "html", null, true);
        }
        echo ">
              ";
        // line 61
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["sidebar"] ?? null), 61, $this->source), "html", null, true);
        echo "
            </aside>
          ";
    }

    // line 66
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 67
        echo "          <section class=\"ct-layout__main ";
        if (($context["has_sidebar"] ?? null)) {
            echo "col-m-8 col-m-offset-1 col-xxs-12";
        } elseif (($context["is_contained"] ?? null)) {
            echo " col-m-12 col-xxs-12";
        }
        echo "\" ";
        if (($context["content_attributes"] ?? null)) {
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["content_attributes"] ?? null), 67, $this->source), "html", null, true);
        }
        echo ">
            ";
        // line 68
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["content"] ?? null), 68, $this->source), "html", null, true);
        echo "
          </section>
        ";
    }

    // line 77
    public function block_content_bottom($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 78
        echo "      ";
        if ( !twig_test_empty(($context["content_bottom"] ?? null))) {
            // line 79
            echo "        ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["content_bottom"] ?? null), 79, $this->source), "html", null, true);
            echo "
      ";
        }
        // line 81
        echo "    ";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@base/layout/layout.twig";
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
        return array (  205 => 81,  199 => 79,  196 => 78,  192 => 77,  185 => 68,  172 => 67,  168 => 66,  161 => 61,  150 => 60,  146 => 59,  142 => 50,  136 => 48,  133 => 47,  129 => 46,  121 => 82,  119 => 77,  115 => 75,  111 => 73,  109 => 72,  106 => 71,  104 => 66,  101 => 65,  98 => 64,  95 => 59,  93 => 58,  90 => 57,  86 => 55,  84 => 54,  79 => 52,  76 => 51,  74 => 46,  67 => 43,  65 => 42,  62 => 41,  60 => 40,  58 => 39,  56 => 38,  54 => 37,  50 => 35,  48 => 34,  46 => 33,  43 => 32,);
    }

    public function getSourceContext()
    {
        return new Source("", "@base/layout/layout.twig", "themes/contrib/civictheme/components/00-base/layout/layout.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 33, "if" => 34, "block" => 46);
        static $filters = array("format" => 38, "default" => 39, "escape" => 43);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if', 'block'],
                ['format', 'default', 'escape'],
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
