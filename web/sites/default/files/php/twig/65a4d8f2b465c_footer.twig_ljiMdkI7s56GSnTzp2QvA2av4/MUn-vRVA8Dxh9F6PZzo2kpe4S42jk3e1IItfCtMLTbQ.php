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

/* @organisms/footer/footer.twig */
class __TwigTemplate_2f172440d3a009b79146bc2ab08710ff extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'content_top1' => [$this, 'block_content_top1'],
            'content_top2' => [$this, 'block_content_top2'],
            'content_middle1' => [$this, 'block_content_middle1'],
            'content_middle2' => [$this, 'block_content_middle2'],
            'content_middle3' => [$this, 'block_content_middle3'],
            'content_middle4' => [$this, 'block_content_middle4'],
            'content_bottom1' => [$this, 'block_content_bottom1'],
            'content_bottom2' => [$this, 'block_content_bottom2'],
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 20
        echo "
";
        // line 21
        $context["theme_class"] = twig_sprintf("ct-theme-%s", ((array_key_exists("theme", $context)) ? (_twig_default_filter($this->sandbox->ensureToStringAllowed(($context["theme"] ?? null), 21, $this->source), "light")) : ("light")));
        // line 22
        $context["modifier_class"] = twig_sprintf("%s %s", $this->sandbox->ensureToStringAllowed(($context["theme_class"] ?? null), 22, $this->source), ((array_key_exists("modifier_class", $context)) ? (_twig_default_filter($this->sandbox->ensureToStringAllowed(($context["modifier_class"] ?? null), 22, $this->source), "")) : ("")));
        // line 23
        echo "
";
        // line 24
        if (((((((( !twig_test_empty(($context["content_top1"] ?? null)) ||  !twig_test_empty(($context["content_top2"] ?? null))) ||  !twig_test_empty(($context["content_middle1"] ?? null))) ||  !twig_test_empty(($context["content_middle2"] ?? null))) ||  !twig_test_empty(($context["content_middle3"] ?? null))) ||  !twig_test_empty(($context["content_middle4"] ?? null))) ||  !twig_test_empty(($context["content_bottom1"] ?? null))) ||  !twig_test_empty(($context["content_bottom2"] ?? null)))) {
            // line 25
            echo "  <footer class=\"ct-footer ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["modifier_class"] ?? null), 25, $this->source), "html", null, true);
            echo "\" role=\"contentinfo\" data-component-name=\"ct-footer\" ";
            if (($context["background_image"] ?? null)) {
                echo "style=\"background-image: url('";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["background_image"] ?? null), 25, $this->source), "html", null, true);
                echo "')\"";
            }
            echo ">

    ";
            // line 27
            if (( !twig_test_empty(($context["content_top1"] ?? null)) ||  !twig_test_empty(($context["content_top2"] ?? null)))) {
                // line 28
                echo "      <div class=\"container ct-footer__top\">
        <div class=\"row\">

          ";
                // line 31
                if ( !twig_test_empty(($context["content_top1"] ?? null))) {
                    // line 32
                    $this->displayBlock('content_top1', $context, $blocks);
                }
                // line 40
                echo "
          ";
                // line 41
                if ( !twig_test_empty(($context["content_top2"] ?? null))) {
                    // line 42
                    $this->displayBlock('content_top2', $context, $blocks);
                }
                // line 50
                echo "
        </div>
      </div>
    ";
            }
            // line 54
            echo "
    ";
            // line 55
            if (((( !twig_test_empty(($context["content_middle1"] ?? null)) ||  !twig_test_empty(($context["content_middle2"] ?? null))) ||  !twig_test_empty(($context["content_middle3"] ?? null))) ||  !twig_test_empty(($context["content_middle4"] ?? null)))) {
                // line 56
                echo "      <div class=\"container ct-footer__middle\">
        <div class=\"row\">

          ";
                // line 59
                if ( !twig_test_empty(($context["content_middle1"] ?? null))) {
                    // line 60
                    $this->displayBlock('content_middle1', $context, $blocks);
                }
                // line 68
                echo "
          ";
                // line 69
                if ( !twig_test_empty(($context["content_middle2"] ?? null))) {
                    // line 70
                    $this->displayBlock('content_middle2', $context, $blocks);
                }
                // line 78
                echo "
          ";
                // line 79
                if ( !twig_test_empty(($context["content_middle3"] ?? null))) {
                    // line 80
                    $this->displayBlock('content_middle3', $context, $blocks);
                }
                // line 88
                echo "
          ";
                // line 89
                if ( !twig_test_empty(($context["content_middle4"] ?? null))) {
                    // line 90
                    $this->displayBlock('content_middle4', $context, $blocks);
                }
                // line 98
                echo "
        </div>
      </div>
    ";
            }
            // line 102
            echo "
    ";
            // line 103
            if (( !twig_test_empty(($context["content_bottom1"] ?? null)) ||  !twig_test_empty(($context["content_bottom2"] ?? null)))) {
                // line 104
                echo "      <div class=\"container ct-footer__bottom\">
        <div class=\"row\">

          ";
                // line 107
                if ( !twig_test_empty(($context["content_bottom1"] ?? null))) {
                    // line 108
                    $this->displayBlock('content_bottom1', $context, $blocks);
                }
                // line 116
                echo "
          ";
                // line 117
                if ( !twig_test_empty(($context["content_bottom2"] ?? null))) {
                    // line 118
                    $this->displayBlock('content_bottom2', $context, $blocks);
                }
                // line 126
                echo "
        </div>
      </div>
    ";
            }
            // line 130
            echo "
  </footer>
";
        }
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["theme", "content_top1", "content_top2", "content_middle1", "content_middle2", "content_middle3", "content_middle4", "content_bottom1", "content_bottom2", "background_image"]);    }

    // line 32
    public function block_content_top1($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 33
        echo "              <div class=\"col-xxs-12 col-m-6\">
                <div class=\"ct-footer__top__content-top1\">";
        // line 35
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["content_top1"] ?? null), 35, $this->source), "html", null, true);
        // line 36
        echo "</div>
              </div>
            ";
    }

    // line 42
    public function block_content_top2($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 43
        echo "              <div class=\"col-xxs-12 col-m-6\">
                <div class=\"ct-footer__top__content-top2\">";
        // line 45
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["content_top2"] ?? null), 45, $this->source), "html", null, true);
        // line 46
        echo "</div>
              </div>
            ";
    }

    // line 60
    public function block_content_middle1($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 61
        echo "              <div class=\"col-xxs-12 col-m-3\">
                <div class=\"ct-footer__middle__content-middle1\">";
        // line 63
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["content_middle1"] ?? null), 63, $this->source), "html", null, true);
        // line 64
        echo "</div>
              </div>
            ";
    }

    // line 70
    public function block_content_middle2($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 71
        echo "              <div class=\"col-xxs-12 col-m-3\">
                <div class=\"ct-footer__middle__content-middle2\">";
        // line 73
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["content_middle2"] ?? null), 73, $this->source), "html", null, true);
        // line 74
        echo "</div>
              </div>
            ";
    }

    // line 80
    public function block_content_middle3($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 81
        echo "              <div class=\"col-xxs-12 col-m-3\">
                <div class=\"ct-footer__middle__content-middle3\">";
        // line 83
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["content_middle3"] ?? null), 83, $this->source), "html", null, true);
        // line 84
        echo "</div>
              </div>
            ";
    }

    // line 90
    public function block_content_middle4($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 91
        echo "              <div class=\"col-xxs-12 col-m-3\">
                <div class=\"ct-footer__middle__content-middle4\">";
        // line 93
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["content_middle4"] ?? null), 93, $this->source), "html", null, true);
        // line 94
        echo "</div>
              </div>
            ";
    }

    // line 108
    public function block_content_bottom1($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 109
        echo "              <div class=\"col-xxs-12 col-m-7\">
                <div class=\"ct-footer__bottom__content-bottom1\">";
        // line 111
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["content_bottom1"] ?? null), 111, $this->source), "html", null, true);
        // line 112
        echo "</div>
              </div>
            ";
    }

    // line 118
    public function block_content_bottom2($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 119
        echo "              <div class=\"col-xxs-12 col-m-5\">
                <div class=\"ct-footer__bottom__content-bottom2\">";
        // line 121
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["content_bottom2"] ?? null), 121, $this->source), "html", null, true);
        // line 122
        echo "</div>
              </div>
            ";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@organisms/footer/footer.twig";
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
        return array (  293 => 122,  291 => 121,  288 => 119,  284 => 118,  278 => 112,  276 => 111,  273 => 109,  269 => 108,  263 => 94,  261 => 93,  258 => 91,  254 => 90,  248 => 84,  246 => 83,  243 => 81,  239 => 80,  233 => 74,  231 => 73,  228 => 71,  224 => 70,  218 => 64,  216 => 63,  213 => 61,  209 => 60,  203 => 46,  201 => 45,  198 => 43,  194 => 42,  188 => 36,  186 => 35,  183 => 33,  179 => 32,  171 => 130,  165 => 126,  162 => 118,  160 => 117,  157 => 116,  154 => 108,  152 => 107,  147 => 104,  145 => 103,  142 => 102,  136 => 98,  133 => 90,  131 => 89,  128 => 88,  125 => 80,  123 => 79,  120 => 78,  117 => 70,  115 => 69,  112 => 68,  109 => 60,  107 => 59,  102 => 56,  100 => 55,  97 => 54,  91 => 50,  88 => 42,  86 => 41,  83 => 40,  80 => 32,  78 => 31,  73 => 28,  71 => 27,  59 => 25,  57 => 24,  54 => 23,  52 => 22,  50 => 21,  47 => 20,);
    }

    public function getSourceContext()
    {
        return new Source("", "@organisms/footer/footer.twig", "themes/contrib/civictheme/components/03-organisms/footer/footer.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 21, "if" => 24, "block" => 32);
        static $filters = array("format" => 21, "default" => 21, "escape" => 25);
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
