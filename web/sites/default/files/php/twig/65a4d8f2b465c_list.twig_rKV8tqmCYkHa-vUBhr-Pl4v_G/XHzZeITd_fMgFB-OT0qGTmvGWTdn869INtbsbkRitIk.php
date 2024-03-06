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

/* @organisms/list/list.twig */
class __TwigTemplate_ab0e607345c504abaa369bcbadc20e71 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'header' => [$this, 'block_header'],
            'title' => [$this, 'block_title'],
            'link_above' => [$this, 'block_link_above'],
            'content' => [$this, 'block_content'],
            'list' => [$this, 'block_list'],
            'filters' => [$this, 'block_filters'],
            'rows' => [$this, 'block_rows'],
            'rows_above' => [$this, 'block_rows_above'],
            'results_count' => [$this, 'block_results_count'],
            'rows_below' => [$this, 'block_rows_below'],
            'empty' => [$this, 'block_empty'],
            'list_below' => [$this, 'block_list_below'],
            'pager' => [$this, 'block_pager'],
            'footer' => [$this, 'block_footer'],
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 33
        echo "
";
        // line 34
        $context["with_background_class"] = ((($context["with_background"] ?? null)) ? ("ct-list--with-background") : (""));
        // line 35
        $context["vertical_spacing_class"] = ((twig_in_filter(($context["vertical_spacing"] ?? null), ["top", "bottom", "both"])) ? (twig_sprintf("ct-vertical-spacing-inset--%s", $this->sandbox->ensureToStringAllowed(($context["vertical_spacing"] ?? null), 35, $this->source))) : (""));
        // line 36
        $context["theme_class"] = twig_sprintf("ct-theme-%s", ((array_key_exists("theme", $context)) ? (_twig_default_filter($this->sandbox->ensureToStringAllowed(($context["theme"] ?? null), 36, $this->source), "light")) : ("light")));
        // line 37
        $context["modifier_class"] = twig_sprintf("%s %s %s %s", $this->sandbox->ensureToStringAllowed(($context["theme_class"] ?? null), 37, $this->source), $this->sandbox->ensureToStringAllowed(($context["with_background_class"] ?? null), 37, $this->source), $this->sandbox->ensureToStringAllowed(($context["vertical_spacing_class"] ?? null), 37, $this->source), ((array_key_exists("modifier_class", $context)) ? (_twig_default_filter($this->sandbox->ensureToStringAllowed(($context["modifier_class"] ?? null), 37, $this->source), "")) : ("")));
        // line 38
        echo "
<div class=\"ct-list ";
        // line 39
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["modifier_class"] ?? null), 39, $this->source), "html", null, true);
        echo "\" ";
        if ( !twig_test_empty(($context["attributes"] ?? null))) {
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(($context["attributes"] ?? null), 39, $this->source));
        }
        echo ">
  <div class=\"ct-list__container\">

    ";
        // line 42
        $this->displayBlock('header', $context, $blocks);
        // line 84
        echo "
    ";
        // line 85
        $this->displayBlock('content', $context, $blocks);
        // line 103
        echo "
    ";
        // line 104
        $this->displayBlock('list', $context, $blocks);
        // line 212
        echo "
    ";
        // line 213
        $this->displayBlock('list_below', $context, $blocks);
        // line 247
        echo "
    ";
        // line 248
        $this->displayBlock('footer', $context, $blocks);
        // line 261
        echo "  </div>
</div>
";
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["with_background", "vertical_spacing", "theme", "attributes", "title", "link_above", "content", "filters", "rows", "rows_above", "results_count", "rows_below", "empty", "link_below", "pager", "footer"]);    }

    // line 42
    public function block_header($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 43
        echo "      ";
        if (( !twig_test_empty(($context["title"] ?? null)) ||  !twig_test_empty(($context["link_above"] ?? null)))) {
            // line 44
            echo "        <div class=\"ct-list__header\">
          <div class=\"container\">
            <div class=\"row\">
              <div class=\"col-xxs-12 col-m-9\">
                ";
            // line 48
            $this->displayBlock('title', $context, $blocks);
            // line 58
            echo "              </div>
              <div class=\"col-xxs-12 col-m-3\">
                ";
            // line 60
            $this->displayBlock('link_above', $context, $blocks);
            // line 78
            echo "              </div>
            </div>
          </div>
        </div>
      ";
        }
        // line 83
        echo "    ";
    }

    // line 48
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 49
        echo "                  ";
        if (($context["title"] ?? null)) {
            // line 50
            $this->loadTemplate("@atoms/heading/heading.twig", "@organisms/list/list.twig", 50)->display(twig_to_array(["content" =>             // line 51
($context["title"] ?? null), "level" => 2, "theme" =>             // line 53
($context["theme"] ?? null), "modifier_class" => "ct-list__title"]));
            // line 56
            echo "                  ";
        }
        // line 57
        echo "                ";
    }

    // line 60
    public function block_link_above($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 61
        echo "                  ";
        if (($context["link_above"] ?? null)) {
            // line 62
            echo "                    <div class=\"ct-list__link-above\">
                      ";
            // line 63
            $this->loadTemplate("@atoms/button/button.twig", "@organisms/list/list.twig", 63)->display(twig_to_array(["theme" =>             // line 64
($context["theme"] ?? null), "type" => "secondary", "kind" => "link", "size" => "regular", "text" => twig_get_attribute($this->env, $this->source,             // line 68
($context["link_above"] ?? null), "text", [], "any", false, false, true, 68), "url" => twig_get_attribute($this->env, $this->source,             // line 69
($context["link_above"] ?? null), "url", [], "any", false, false, true, 69), "is_new_window" => twig_get_attribute($this->env, $this->source,             // line 70
($context["link_above"] ?? null), "is_external", [], "any", false, false, true, 70), "is_external" => twig_get_attribute($this->env, $this->source,             // line 71
($context["link_above"] ?? null), "is_external", [], "any", false, false, true, 71), "icon" => ((twig_get_attribute($this->env, $this->source,             // line 72
($context["link_above"] ?? null), "is_external", [], "any", false, false, true, 72)) ? ("") : ("right-arrow-2")), "modifier_class" => "ct-list__link-above__link"]));
            // line 75
            echo "                    </div>
                  ";
        }
        // line 77
        echo "                ";
    }

    // line 85
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 86
        echo "      ";
        if (($context["content"] ?? null)) {
            // line 87
            echo "        <div class=\"ct-list__content__wrapper\">
          <div class=\"container\">
            <div class=\"row\">
              <div class=\"col-xxs-12\">
                ";
            // line 91
            $this->loadTemplate("@atoms/paragraph/paragraph.twig", "@organisms/list/list.twig", 91)->display(twig_to_array(["content" =>             // line 92
($context["content"] ?? null), "theme" =>             // line 93
($context["theme"] ?? null), "allow_html" => true, "modifier_class" => "ct-list__content"]));
            // line 97
            echo "              </div>
            </div>
          </div>
        </div>
      ";
        }
        // line 102
        echo "    ";
    }

    // line 104
    public function block_list($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 105
        echo "
      ";
        // line 106
        $this->displayBlock('filters', $context, $blocks);
        // line 119
        echo "
      ";
        // line 120
        $this->displayBlock('rows', $context, $blocks);
        // line 193
        echo "
      ";
        // line 194
        $this->displayBlock('empty', $context, $blocks);
        // line 210
        echo "
    ";
    }

    // line 106
    public function block_filters($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 107
        echo "        ";
        if (($context["filters"] ?? null)) {
            // line 108
            echo "<div class=\"ct-list__filters\">
            <div class=\"container\">
              <div class=\"row\">
                <div class=\"col-xxs-12\">
                  ";
            // line 112
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["filters"] ?? null), 112, $this->source), "html", null, true);
            echo "
                </div>
              </div>
            </div>
          </div>
        ";
        }
        // line 118
        echo "      ";
    }

    // line 120
    public function block_rows($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 121
        echo "        ";
        if (($context["rows"] ?? null)) {
            // line 123
            $this->displayBlock('rows_above', $context, $blocks);
            // line 146
            echo "
          ";
            // line 147
            $this->displayBlock('results_count', $context, $blocks);
            // line 162
            echo "
          <div class=\"ct-list__rows\">
            ";
            // line 164
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["rows"] ?? null), 164, $this->source), "html", null, true);
            echo "
          </div>

          ";
            // line 167
            $this->displayBlock('rows_below', $context, $blocks);
            // line 190
            echo "
        ";
        }
        // line 192
        echo "      ";
    }

    // line 123
    public function block_rows_above($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 124
        echo "            ";
        if (($context["rows_above"] ?? null)) {
            // line 125
            echo "<div class=\"container\">
                <div class=\"row\">
                  <div class=\"col-xxs-12 ct-list__rows-above\">
                    ";
            // line 128
            if ( !is_iterable(($context["rows_above"] ?? null))) {
                // line 129
                echo "                      ";
                $context["rows_above"] = [($context["rows_above"] ?? null)];
                // line 130
                echo "                    ";
            }
            // line 131
            echo "                    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["rows_above"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["rows_above_row"]) {
                // line 132
                echo "                      ";
                if (is_iterable($context["rows_above_row"])) {
                    // line 133
                    echo "                        ";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($context["rows_above_row"], 133, $this->source), "html", null, true);
                    echo "
                      ";
                } else {
                    // line 135
                    echo "                        ";
                    $this->loadTemplate("@atoms/paragraph/paragraph.twig", "@organisms/list/list.twig", 135)->display(twig_to_array(["content" =>                     // line 136
$context["rows_above_row"], "theme" =>                     // line 137
($context["theme"] ?? null)]));
                    // line 139
                    echo "                      ";
                }
                // line 140
                echo "                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['rows_above_row'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 141
            echo "                  </div>
                </div>
              </div>
            ";
        }
        // line 145
        echo "          ";
    }

    // line 147
    public function block_results_count($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 148
        echo "            ";
        if (($context["results_count"] ?? null)) {
            // line 149
            echo "<div class=\"container\">
                <div class=\"row\">
                  <div class=\"col-xxs-12\">
                    ";
            // line 152
            $this->loadTemplate("@atoms/label/label.twig", "@organisms/list/list.twig", 152)->display(twig_to_array(["content" =>             // line 153
($context["results_count"] ?? null), "theme" =>             // line 154
($context["theme"] ?? null), "modifier_class" => "ct-list__results-count"]));
            // line 157
            echo "                  </div>
                </div>
              </div>
            ";
        }
        // line 161
        echo "          ";
    }

    // line 167
    public function block_rows_below($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 168
        echo "            ";
        if (($context["rows_below"] ?? null)) {
            // line 169
            echo "              <div class=\"container\">
                <div class=\"row\">
                  <div class=\"col-xxs-12 ct-list__rows-above\">
                    ";
            // line 172
            if ( !is_iterable(($context["rows_below"] ?? null))) {
                // line 173
                echo "                      ";
                $context["rows_below"] = [($context["rows_below"] ?? null)];
                // line 174
                echo "                    ";
            }
            // line 175
            echo "                    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["rows_below"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["rows_below_row"]) {
                // line 176
                echo "                      ";
                if (is_iterable($context["rows_below_row"])) {
                    // line 177
                    echo "                        ";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($context["rows_below_row"], 177, $this->source), "html", null, true);
                    echo "
                      ";
                } else {
                    // line 179
                    echo "                        ";
                    $this->loadTemplate("@atoms/paragraph/paragraph.twig", "@organisms/list/list.twig", 179)->display(twig_to_array(["content" =>                     // line 180
$context["rows_below_row"], "theme" =>                     // line 181
($context["theme"] ?? null)]));
                    // line 183
                    echo "                      ";
                }
                // line 184
                echo "                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['rows_below_row'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 185
            echo "                  </div>
                </div>
              </div>
            ";
        }
        // line 189
        echo "          ";
    }

    // line 194
    public function block_empty($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 195
        echo "        ";
        if ((array_key_exists("empty", $context) && ( !array_key_exists("rows", $context) || twig_test_empty(($context["rows"] ?? null))))) {
            // line 196
            echo "<div class=\"container\">
            <div class=\"row\">
              <div class=\"col-xxs-12\">
                ";
            // line 199
            $this->loadTemplate("@atoms/paragraph/paragraph.twig", "@organisms/list/list.twig", 199)->display(twig_to_array(["content" =>             // line 200
($context["empty"] ?? null), "allow_html" => true, "theme" =>             // line 202
($context["theme"] ?? null), "modifier_class" => "ct-list__empty-results"]));
            // line 205
            echo "              </div>
            </div>
          </div>
        ";
        }
        // line 209
        echo "      ";
    }

    // line 213
    public function block_list_below($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 214
        echo "      ";
        if (($context["link_below"] ?? null)) {
            // line 215
            echo "        <div class=\"ct-list__link-below\">
          ";
            // line 216
            $this->loadTemplate("@atoms/button/button.twig", "@organisms/list/list.twig", 216)->display(twig_to_array(["theme" =>             // line 217
($context["theme"] ?? null), "type" => "secondary", "kind" => "link", "size" => "large", "text" => twig_get_attribute($this->env, $this->source,             // line 221
($context["link_below"] ?? null), "text", [], "any", false, false, true, 221), "url" => twig_get_attribute($this->env, $this->source,             // line 222
($context["link_below"] ?? null), "url", [], "any", false, false, true, 222), "is_new_window" => twig_get_attribute($this->env, $this->source,             // line 223
($context["link_below"] ?? null), "is_external", [], "any", false, false, true, 223), "is_external" => twig_get_attribute($this->env, $this->source,             // line 224
($context["link_below"] ?? null), "is_external", [], "any", false, false, true, 224), "icon" => ((twig_get_attribute($this->env, $this->source,             // line 225
($context["link_below"] ?? null), "is_external", [], "any", false, false, true, 225)) ? ("") : ("right-arrow-2")), "modifier_class" => "ct-list__link-below__link"]));
            // line 228
            echo "        </div>
      ";
        }
        // line 230
        echo "
      ";
        // line 231
        if ((array_key_exists("pager", $context) &&  !twig_test_empty(($context["pager"] ?? null)))) {
            // line 232
            echo "        <div class=\"ct-list__results-below\">
          ";
            // line 233
            $this->displayBlock('pager', $context, $blocks);
            // line 244
            echo "        </div>
      ";
        }
        // line 246
        echo "    ";
    }

    // line 233
    public function block_pager($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 234
        echo "            <div class=\"container\">
              <div class=\"row\">
                <div class=\"col-xxs-12\">
                  <div class=\"ct-list__pager\">
                    ";
        // line 238
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["pager"] ?? null), 238, $this->source), "html", null, true);
        echo "
                  </div>
                </div>
              </div>
            </div>
          ";
    }

    // line 248
    public function block_footer($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 249
        echo "      ";
        if ( !twig_test_empty(($context["footer"] ?? null))) {
            // line 250
            echo "<footer class=\"ct-list__footer\">
          <div class=\"container\">
            <div class=\"row\">
              <div class=\"col-xxs-12\">
                ";
            // line 254
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["footer"] ?? null), 254, $this->source), "html", null, true);
            echo "
              </div>
            </div>
          </div>
        </footer>
      ";
        }
        // line 260
        echo "    ";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@organisms/list/list.twig";
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
        return array (  544 => 260,  535 => 254,  529 => 250,  526 => 249,  522 => 248,  512 => 238,  506 => 234,  502 => 233,  498 => 246,  494 => 244,  492 => 233,  489 => 232,  487 => 231,  484 => 230,  480 => 228,  478 => 225,  477 => 224,  476 => 223,  475 => 222,  474 => 221,  473 => 217,  472 => 216,  469 => 215,  466 => 214,  462 => 213,  458 => 209,  452 => 205,  450 => 202,  449 => 200,  448 => 199,  443 => 196,  440 => 195,  436 => 194,  432 => 189,  426 => 185,  420 => 184,  417 => 183,  415 => 181,  414 => 180,  412 => 179,  406 => 177,  403 => 176,  398 => 175,  395 => 174,  392 => 173,  390 => 172,  385 => 169,  382 => 168,  378 => 167,  374 => 161,  368 => 157,  366 => 154,  365 => 153,  364 => 152,  359 => 149,  356 => 148,  352 => 147,  348 => 145,  342 => 141,  336 => 140,  333 => 139,  331 => 137,  330 => 136,  328 => 135,  322 => 133,  319 => 132,  314 => 131,  311 => 130,  308 => 129,  306 => 128,  301 => 125,  298 => 124,  294 => 123,  290 => 192,  286 => 190,  284 => 167,  278 => 164,  274 => 162,  272 => 147,  269 => 146,  267 => 123,  264 => 121,  260 => 120,  256 => 118,  247 => 112,  241 => 108,  238 => 107,  234 => 106,  229 => 210,  227 => 194,  224 => 193,  222 => 120,  219 => 119,  217 => 106,  214 => 105,  210 => 104,  206 => 102,  199 => 97,  197 => 93,  196 => 92,  195 => 91,  189 => 87,  186 => 86,  182 => 85,  178 => 77,  174 => 75,  172 => 72,  171 => 71,  170 => 70,  169 => 69,  168 => 68,  167 => 64,  166 => 63,  163 => 62,  160 => 61,  156 => 60,  152 => 57,  149 => 56,  147 => 53,  146 => 51,  145 => 50,  142 => 49,  138 => 48,  134 => 83,  127 => 78,  125 => 60,  121 => 58,  119 => 48,  113 => 44,  110 => 43,  106 => 42,  99 => 261,  97 => 248,  94 => 247,  92 => 213,  89 => 212,  87 => 104,  84 => 103,  82 => 85,  79 => 84,  77 => 42,  67 => 39,  64 => 38,  62 => 37,  60 => 36,  58 => 35,  56 => 34,  53 => 33,);
    }

    public function getSourceContext()
    {
        return new Source("", "@organisms/list/list.twig", "themes/contrib/civictheme/components/03-organisms/list/list.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 34, "if" => 39, "block" => 42, "include" => 50, "for" => 131);
        static $filters = array("format" => 35, "default" => 36, "escape" => 39, "raw" => 39);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if', 'block', 'include', 'for'],
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
