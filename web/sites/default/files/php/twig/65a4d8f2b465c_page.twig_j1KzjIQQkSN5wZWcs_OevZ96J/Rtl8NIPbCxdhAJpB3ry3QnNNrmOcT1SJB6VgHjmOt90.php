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

/* @templates/page/page.twig */
class __TwigTemplate_64499e1b01eaec838796b7b3d9799c0d extends Template
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
            'banner' => [$this, 'block_banner'],
            'highlighted' => [$this, 'block_highlighted'],
            'content' => [$this, 'block_content'],
            'footer' => [$this, 'block_footer'],
            'back_to_top' => [$this, 'block_back_to_top'],
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 14
        echo "
";
        // line 15
        $context["theme_class"] = twig_sprintf("ct-theme-%s", ((array_key_exists("theme", $context)) ? (_twig_default_filter($this->sandbox->ensureToStringAllowed(($context["theme"] ?? null), 15, $this->source), "light")) : ("light")));
        // line 16
        $context["modifier_class"] = twig_sprintf("%s %s", $this->sandbox->ensureToStringAllowed(($context["theme_class"] ?? null), 16, $this->source), ((array_key_exists("modifier_class", $context)) ? (_twig_default_filter($this->sandbox->ensureToStringAllowed(($context["modifier_class"] ?? null), 16, $this->source), "")) : ("")));
        // line 17
        echo "
<div class=\"ct-page ";
        // line 18
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["modifier_class"] ?? null), 18, $this->source), "html", null, true);
        echo "\" ";
        if ( !twig_test_empty(($context["attributes"] ?? null))) {
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(($context["attributes"] ?? null), 18, $this->source));
        }
        echo ">
  <a id=\"top\"></a>

  ";
        // line 21
        $this->displayBlock('header', $context, $blocks);
        // line 33
        echo "
  <a id=\"banner\"></a>

  ";
        // line 36
        $this->displayBlock('banner', $context, $blocks);
        // line 39
        echo "
  ";
        // line 40
        if ( !twig_test_empty(($context["highlighted"] ?? null))) {
            // line 41
            echo "    ";
            $this->displayBlock('highlighted', $context, $blocks);
            // line 50
            echo "  ";
        }
        // line 51
        echo "
  <a id=\"main-content\" tabindex=\"-1\"></a>
  ";
        // line 53
        $this->displayBlock('content', $context, $blocks);
        // line 66
        echo "
  ";
        // line 67
        $this->displayBlock('footer', $context, $blocks);
        // line 82
        echo "
  ";
        // line 83
        $this->displayBlock('back_to_top', $context, $blocks);
        // line 88
        echo "</div>
";
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["theme", "attributes", "highlighted", "header_theme", "header_top_1", "header_top_2", "header_top_3", "header_middle_1", "header_middle_2", "header_middle_3", "header_bottom_1", "banner", "content", "content_top", "content_bottom", "sidebar", "hide_sidebar", "content_contained", "vertical_spacing", "sidebar_attributes", "content_attributes", "footer_theme", "footer_logo", "footer_background_image", "footer_top_1", "footer_top_2", "footer_middle_1", "footer_middle_2", "footer_middle_3", "footer_middle_4", "footer_bottom_1", "footer_bottom_2"]);    }

    // line 21
    public function block_header($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 22
        echo "    ";
        $this->loadTemplate("@organisms/header/header.twig", "@templates/page/page.twig", 22)->display(twig_to_array(["theme" =>         // line 23
($context["header_theme"] ?? null), "content_top1" =>         // line 24
($context["header_top_1"] ?? null), "content_top2" =>         // line 25
($context["header_top_2"] ?? null), "content_top3" =>         // line 26
($context["header_top_3"] ?? null), "content_middle1" =>         // line 27
($context["header_middle_1"] ?? null), "content_middle2" =>         // line 28
($context["header_middle_2"] ?? null), "content_middle3" =>         // line 29
($context["header_middle_3"] ?? null), "content_bottom1" =>         // line 30
($context["header_bottom_1"] ?? null)]));
        // line 32
        echo "  ";
    }

    // line 36
    public function block_banner($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 37
        echo "    ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["banner"] ?? null), 37, $this->source), "html", null, true);
        echo "
  ";
    }

    // line 41
    public function block_highlighted($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 42
        echo "      <div class=\"container\">
        <div class=\"row\">
          <div class=\"col-xxs-12\">
            ";
        // line 45
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["highlighted"] ?? null), 45, $this->source), "html", null, true);
        echo "
          </div>
        </div>
      </div>
    ";
    }

    // line 53
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 54
        echo "    ";
        $this->loadTemplate("@base/layout/layout.twig", "@templates/page/page.twig", 54)->display(twig_to_array(["content" =>         // line 55
($context["content"] ?? null), "content_top" =>         // line 56
($context["content_top"] ?? null), "content_bottom" =>         // line 57
($context["content_bottom"] ?? null), "sidebar" =>         // line 58
($context["sidebar"] ?? null), "hide_sidebar" =>         // line 59
($context["hide_sidebar"] ?? null), "is_contained" =>         // line 60
($context["content_contained"] ?? null), "vertical_spacing" =>         // line 61
($context["vertical_spacing"] ?? null), "sidebar_attributes" =>         // line 62
($context["sidebar_attributes"] ?? null), "content_attributes" =>         // line 63
($context["content_attributes"] ?? null)]));
        // line 65
        echo "  ";
    }

    // line 67
    public function block_footer($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 68
        echo "    ";
        $this->loadTemplate("@organisms/footer/footer.twig", "@templates/page/page.twig", 68)->display(twig_to_array(["theme" =>         // line 69
($context["footer_theme"] ?? null), "logo" =>         // line 70
($context["footer_logo"] ?? null), "background_image" =>         // line 71
($context["footer_background_image"] ?? null), "content_top1" =>         // line 72
($context["footer_top_1"] ?? null), "content_top2" =>         // line 73
($context["footer_top_2"] ?? null), "content_middle1" =>         // line 74
($context["footer_middle_1"] ?? null), "content_middle2" =>         // line 75
($context["footer_middle_2"] ?? null), "content_middle3" =>         // line 76
($context["footer_middle_3"] ?? null), "content_middle4" =>         // line 77
($context["footer_middle_4"] ?? null), "content_bottom1" =>         // line 78
($context["footer_bottom_1"] ?? null), "content_bottom2" =>         // line 79
($context["footer_bottom_2"] ?? null)]));
        // line 81
        echo "  ";
    }

    // line 83
    public function block_back_to_top($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 84
        echo "    ";
        $this->loadTemplate("@organisms/back-to-top/back-to-top.twig", "@templates/page/page.twig", 84)->display(twig_to_array(["theme" =>         // line 85
($context["theme"] ?? null)]));
        // line 87
        echo "  ";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@templates/page/page.twig";
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
        return array (  205 => 87,  203 => 85,  201 => 84,  197 => 83,  193 => 81,  191 => 79,  190 => 78,  189 => 77,  188 => 76,  187 => 75,  186 => 74,  185 => 73,  184 => 72,  183 => 71,  182 => 70,  181 => 69,  179 => 68,  175 => 67,  171 => 65,  169 => 63,  168 => 62,  167 => 61,  166 => 60,  165 => 59,  164 => 58,  163 => 57,  162 => 56,  161 => 55,  159 => 54,  155 => 53,  146 => 45,  141 => 42,  137 => 41,  130 => 37,  126 => 36,  122 => 32,  120 => 30,  119 => 29,  118 => 28,  117 => 27,  116 => 26,  115 => 25,  114 => 24,  113 => 23,  111 => 22,  107 => 21,  101 => 88,  99 => 83,  96 => 82,  94 => 67,  91 => 66,  89 => 53,  85 => 51,  82 => 50,  79 => 41,  77 => 40,  74 => 39,  72 => 36,  67 => 33,  65 => 21,  55 => 18,  52 => 17,  50 => 16,  48 => 15,  45 => 14,);
    }

    public function getSourceContext()
    {
        return new Source("", "@templates/page/page.twig", "themes/contrib/civictheme/components/04-templates/page/page.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 15, "if" => 18, "block" => 21, "include" => 22);
        static $filters = array("format" => 15, "default" => 15, "escape" => 18, "raw" => 18);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if', 'block', 'include'],
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
