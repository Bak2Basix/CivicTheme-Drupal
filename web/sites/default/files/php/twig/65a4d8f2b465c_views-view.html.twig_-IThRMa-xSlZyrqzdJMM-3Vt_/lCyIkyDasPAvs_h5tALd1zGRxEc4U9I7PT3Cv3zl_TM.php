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

/* themes/contrib/civictheme/templates/views/views-view.html.twig */
class __TwigTemplate_28be3ec75ac72f877fd492b04b629753 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'footer' => [$this, 'block_footer'],
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
    }

    protected function doGetParent(array $context)
    {
        // line 7
        return "@organisms/list/list.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("@organisms/list/list.twig", "themes/contrib/civictheme/templates/views/views-view.html.twig", 7);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["attachment_after", "more", "footer", "feed_icons"]);    }

    // line 10
    public function block_footer($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 11
        echo "  ";
        if ((array_key_exists("attachment_after", $context) &&  !twig_test_empty(($context["attachment_after"] ?? null)))) {
            // line 12
            echo "    <div class=\"ct-list__attachment-after\">
      <div class=\"container\">
        <div class=\"row\">
          <div class=\"col-xxs-12\">
            ";
            // line 16
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["attachment_after"] ?? null), 16, $this->source), "html", null, true);
            echo "
          </div>
        </div>
      </div>
    </div>
  ";
        }
        // line 22
        echo "
  ";
        // line 23
        if ((array_key_exists("more", $context) &&  !twig_test_empty(($context["more"] ?? null)))) {
            // line 24
            echo "    <div class=\"ct-list__more\">
      <div class=\"container\">
        <div class=\"row\">
          <div class=\"col-xxs-12\">
            ";
            // line 28
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["more"] ?? null), 28, $this->source), "html", null, true);
            echo "
          </div>
        </div>
      </div>
    </div>
  ";
        }
        // line 34
        echo "
  ";
        // line 35
        if (($context["footer"] ?? null)) {
            // line 36
            echo "    <footer class=\"ct-list__footer\">
      <div class=\"container\">
        <div class=\"row\">
          <div class=\"col-xxs-12\">
            ";
            // line 40
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["footer"] ?? null), 40, $this->source), "html", null, true);
            echo "
          </div>
        </div>
      </div>
    </footer>
  ";
        }
        // line 46
        echo "
  ";
        // line 47
        if ((array_key_exists("feed_icons", $context) &&  !twig_test_empty(($context["feed_icons"] ?? null)))) {
            // line 48
            echo "    <div class=\"ct-list__feed-icons\">
      <div class=\"container\">
        <div class=\"row\">
          <div class=\"col-xxs-12\">
            ";
            // line 52
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["feed_icons"] ?? null), 52, $this->source), "html", null, true);
            echo "
          </div>
        </div>
      </div>
    </div>
  ";
        }
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "themes/contrib/civictheme/templates/views/views-view.html.twig";
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
        return array (  122 => 52,  116 => 48,  114 => 47,  111 => 46,  102 => 40,  96 => 36,  94 => 35,  91 => 34,  82 => 28,  76 => 24,  74 => 23,  71 => 22,  62 => 16,  56 => 12,  53 => 11,  49 => 10,  37 => 7,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/contrib/civictheme/templates/views/views-view.html.twig", "C:\\xampp\\htdocs\\project1\\web\\themes\\contrib\\civictheme\\templates\\views\\views-view.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 11);
        static $filters = array("escape" => 16);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['if'],
                ['escape'],
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
