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

/* themes/contrib/civictheme/templates/block/block--system-branding-block.html.twig */
class __TwigTemplate_15aabaa5922879b7cf6d6348b223a670 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'content' => [$this, 'block_content'],
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
    }

    protected function doGetParent(array $context)
    {
        // line 7
        return "block.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("block.html.twig", "themes/contrib/civictheme/templates/block/block--system-branding-block.html.twig", 7);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["show_site_logo", "logos", "url", "title", "theme", "modifier_class", "type", "show_site_name", "site_name", "show_site_slogan", "site_slogan"]);    }

    // line 9
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 10
        echo "  ";
        if (($context["show_site_logo"] ?? null)) {
            // line 11
            echo "    ";
            $this->loadTemplate("@molecules/logo/logo.twig", "themes/contrib/civictheme/templates/block/block--system-branding-block.html.twig", 11)->display(twig_to_array(["logos" =>             // line 12
($context["logos"] ?? null), "url" =>             // line 13
($context["url"] ?? null), "title" =>             // line 14
($context["title"] ?? null), "theme" =>             // line 15
($context["theme"] ?? null), "modifier_class" =>             // line 16
($context["modifier_class"] ?? null), "type" => ((            // line 17
$context["type"]) ?? ("default"))]));
            // line 19
            echo "  ";
        }
        // line 20
        echo "
  ";
        // line 21
        if ((($context["show_site_name"] ?? null) && ($context["site_name"] ?? null))) {
            // line 22
            echo "    ";
            $this->loadTemplate("@atoms/link/link.twig", "themes/contrib/civictheme/templates/block/block--system-branding-block.html.twig", 22)->display(twig_to_array(["theme" =>             // line 23
($context["theme"] ?? null), "text" =>             // line 24
($context["site_name"] ?? null), "url" => $this->extensions['Drupal\Core\Template\TwigExtension']->getPath("<front>"), "attributes" => "rel=\"home\""]));
            // line 28
            echo "  ";
        }
        // line 29
        echo "
  ";
        // line 30
        if ((($context["show_site_slogan"] ?? null) && ($context["site_slogan"] ?? null))) {
            // line 31
            echo "    ";
            $this->loadTemplate("@atoms/paragraph/paragraph.twig", "themes/contrib/civictheme/templates/block/block--system-branding-block.html.twig", 31)->display(twig_to_array(["theme" =>             // line 32
($context["theme"] ?? null), "content" =>             // line 33
($context["site_slogan"] ?? null)]));
            // line 35
            echo "  ";
        }
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "themes/contrib/civictheme/templates/block/block--system-branding-block.html.twig";
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
        return array (  91 => 35,  89 => 33,  88 => 32,  86 => 31,  84 => 30,  81 => 29,  78 => 28,  76 => 24,  75 => 23,  73 => 22,  71 => 21,  68 => 20,  65 => 19,  63 => 17,  62 => 16,  61 => 15,  60 => 14,  59 => 13,  58 => 12,  56 => 11,  53 => 10,  49 => 9,  37 => 7,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/contrib/civictheme/templates/block/block--system-branding-block.html.twig", "C:\\xampp\\htdocs\\project1\\web\\themes\\contrib\\civictheme\\templates\\block\\block--system-branding-block.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 10, "include" => 11);
        static $filters = array();
        static $functions = array("path" => 25);

        try {
            $this->sandbox->checkSecurity(
                ['if', 'include'],
                [],
                ['path']
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
