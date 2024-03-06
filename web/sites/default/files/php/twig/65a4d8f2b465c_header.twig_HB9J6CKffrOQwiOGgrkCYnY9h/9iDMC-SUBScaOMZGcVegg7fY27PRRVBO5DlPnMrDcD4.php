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

/* @organisms/header/header.twig */
class __TwigTemplate_79b5273c213c2f72b8faaa95fd417515 extends Template
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
            'content_top3' => [$this, 'block_content_top3'],
            'content_middle1' => [$this, 'block_content_middle1'],
            'content_middle2' => [$this, 'block_content_middle2'],
            'content_middle3' => [$this, 'block_content_middle3'],
            'content_bottom1' => [$this, 'block_content_bottom1'],
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
        $context["theme_class"] = twig_sprintf("ct-theme-%s", ((array_key_exists("theme", $context)) ? (_twig_default_filter($this->sandbox->ensureToStringAllowed(($context["theme"] ?? null), 19, $this->source), "light")) : ("light")));
        // line 20
        $context["modifier_class"] = twig_sprintf("%s %s", $this->sandbox->ensureToStringAllowed(($context["theme_class"] ?? null), 20, $this->source), ((array_key_exists("modifier_class", $context)) ? (_twig_default_filter($this->sandbox->ensureToStringAllowed(($context["modifier_class"] ?? null), 20, $this->source), "")) : ("")));
        // line 21
        echo "
";
        // line 22
        if ((((((( !twig_test_empty(($context["content_top1"] ?? null)) ||  !twig_test_empty(($context["content_top2"] ?? null))) ||  !twig_test_empty(($context["content_top3"] ?? null))) ||  !twig_test_empty(($context["content_middle1"] ?? null))) ||  !twig_test_empty(($context["content_middle2"] ?? null))) ||  !twig_test_empty(($context["content_middle3"] ?? null))) ||  !twig_test_empty(($context["content_bottom1"] ?? null)))) {
            // line 23
            echo "  <header class=\"ct-header ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["modifier_class"] ?? null), 23, $this->source), "html", null, true);
            echo "\" role=\"banner\">

    ";
            // line 25
            if ((( !twig_test_empty(($context["content_top1"] ?? null)) ||  !twig_test_empty(($context["content_top2"] ?? null))) ||  !twig_test_empty(($context["content_top3"] ?? null)))) {
                // line 26
                echo "      <div class=\"ct-header__top hide-xxs show-m\">

        ";
                // line 28
                if ( !twig_test_empty(($context["content_top1"] ?? null))) {
                    // line 29
                    echo "          ";
                    $this->displayBlock('content_top1', $context, $blocks);
                    // line 40
                    echo "        ";
                }
                // line 41
                echo "
        ";
                // line 42
                if (( !twig_test_empty(($context["content_top2"] ?? null)) ||  !twig_test_empty(($context["content_top3"] ?? null)))) {
                    // line 43
                    echo "          <div class=\"container\">
            <div class=\"row\">

              ";
                    // line 46
                    $this->displayBlock('content_top2', $context, $blocks);
                    // line 53
                    echo "
              ";
                    // line 54
                    $this->displayBlock('content_top3', $context, $blocks);
                    // line 61
                    echo "
            </div>
          </div>
        ";
                }
                // line 65
                echo "      </div>
    ";
            }
            // line 67
            echo "
    ";
            // line 68
            if ((( !twig_test_empty(($context["content_middle1"] ?? null)) ||  !twig_test_empty(($context["content_middle2"] ?? null))) ||  !twig_test_empty(($context["content_middle3"] ?? null)))) {
                // line 69
                echo "      <div class=\"ct-header__middle\">

        ";
                // line 71
                if ( !twig_test_empty(($context["content_middle1"] ?? null))) {
                    // line 72
                    echo "          ";
                    $this->displayBlock('content_middle1', $context, $blocks);
                    // line 83
                    echo "        ";
                }
                // line 84
                echo "
        ";
                // line 85
                if (( !twig_test_empty(($context["content_middle2"] ?? null)) ||  !twig_test_empty(($context["content_middle3"] ?? null)))) {
                    // line 86
                    echo "          <div class=\"container\">
            <div class=\"row row--no-wrap\">
              ";
                    // line 88
                    $this->displayBlock('content_middle2', $context, $blocks);
                    // line 95
                    echo "
              ";
                    // line 96
                    $this->displayBlock('content_middle3', $context, $blocks);
                    // line 103
                    echo "            </div>
          </div>
        ";
                }
                // line 106
                echo "      </div>
    ";
            }
            // line 108
            echo "
    ";
            // line 109
            if ( !twig_test_empty(($context["content_bottom1"] ?? null))) {
                // line 110
                echo "      ";
                $this->displayBlock('content_bottom1', $context, $blocks);
                // line 121
                echo "    ";
            }
            // line 122
            echo "
  </header>
";
        }
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["theme", "content_top1", "content_top2", "content_top3", "content_middle1", "content_middle2", "content_middle3", "content_bottom1"]);    }

    // line 29
    public function block_content_top1($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 30
        echo "            <div class=\"container\">
              <div class=\"row\">
                <div class=\"col-xxs-12\">
                  <div class=\"ct-header__content-top1\">
                    ";
        // line 34
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["content_top1"] ?? null), 34, $this->source), "html", null, true);
        echo "
                  </div>
                </div>
              </div>
            </div>
          ";
    }

    // line 46
    public function block_content_top2($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 47
        echo "                <div class=\"col-xxs-12 col-m-5\">
                  <div class=\"ct-header__content-top2\">
                    ";
        // line 49
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["content_top2"] ?? null), 49, $this->source), "html", null, true);
        echo "
                  </div>
                </div>
              ";
    }

    // line 54
    public function block_content_top3($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 55
        echo "                <div class=\"col-xxs-12 col-m-7\">
                  <div class=\"ct-header__content-top3\">
                    ";
        // line 57
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["content_top3"] ?? null), 57, $this->source), "html", null, true);
        echo "
                  </div>
                </div>
              ";
    }

    // line 72
    public function block_content_middle1($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 73
        echo "            <div class=\"container\">
              <div class=\"row\">
                <div class=\"col-xxs-12\">
                  <div class=\"ct-header__content-middle1\">
                    ";
        // line 77
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["content_middle1"] ?? null), 77, $this->source), "html", null, true);
        echo "
                  </div>
                </div>
              </div>
            </div>
          ";
    }

    // line 88
    public function block_content_middle2($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 89
        echo "                <div class=\"col col--no-grow\">
                  <div class=\"ct-header__content-middle2\">
                    ";
        // line 91
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["content_middle2"] ?? null), 91, $this->source), "html", null, true);
        echo "
                  </div>
                </div>
              ";
    }

    // line 96
    public function block_content_middle3($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 97
        echo "                <div class=\"col\">
                  <div class=\"ct-header__content-middle3\">
                    ";
        // line 99
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["content_middle3"] ?? null), 99, $this->source), "html", null, true);
        echo "
                  </div>
                </div>
              ";
    }

    // line 110
    public function block_content_bottom1($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 111
        echo "        <div class=\"container\">
          <div class=\"row\">
            <div class=\"col-xxs-12\">
              <div class=\"ct-header__content-bottom1\">
                ";
        // line 115
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["content_bottom1"] ?? null), 115, $this->source), "html", null, true);
        echo "
              </div>
            </div>
          </div>
        </div>
      ";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@organisms/header/header.twig";
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
        return array (  280 => 115,  274 => 111,  270 => 110,  262 => 99,  258 => 97,  254 => 96,  246 => 91,  242 => 89,  238 => 88,  228 => 77,  222 => 73,  218 => 72,  210 => 57,  206 => 55,  202 => 54,  194 => 49,  190 => 47,  186 => 46,  176 => 34,  170 => 30,  166 => 29,  158 => 122,  155 => 121,  152 => 110,  150 => 109,  147 => 108,  143 => 106,  138 => 103,  136 => 96,  133 => 95,  131 => 88,  127 => 86,  125 => 85,  122 => 84,  119 => 83,  116 => 72,  114 => 71,  110 => 69,  108 => 68,  105 => 67,  101 => 65,  95 => 61,  93 => 54,  90 => 53,  88 => 46,  83 => 43,  81 => 42,  78 => 41,  75 => 40,  72 => 29,  70 => 28,  66 => 26,  64 => 25,  58 => 23,  56 => 22,  53 => 21,  51 => 20,  49 => 19,  46 => 18,);
    }

    public function getSourceContext()
    {
        return new Source("", "@organisms/header/header.twig", "themes/contrib/civictheme/components/03-organisms/header/header.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 19, "if" => 22, "block" => 29);
        static $filters = array("format" => 19, "default" => 19, "escape" => 23);
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
