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

/* themes/contrib/civictheme/templates/layout/html.html.twig */
class __TwigTemplate_43d7202e4376f6c1a9511f34dc88f356 extends Template
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
        // line 7
        $context["body_classes"] = [((        // line 8
($context["logged_in"] ?? null)) ? ("user-logged-in") : ("")), (( !        // line 9
($context["root_path"] ?? null)) ? ("path-frontpage") : (("path-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(($context["root_path"] ?? null), 9, $this->source))))), ((        // line 10
($context["node_type"] ?? null)) ? (("page-node-type-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(($context["node_type"] ?? null), 10, $this->source)))) : ("")), ((        // line 11
($context["db_offline"] ?? null)) ? ("db-offline") : (""))];
        // line 13
        echo "<!DOCTYPE html>
<html";
        // line 14
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["html_attributes"] ?? null), 14, $this->source), "html", null, true);
        echo ">
<head>
  <head-placeholder token=\"";
        // line 16
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["placeholder_token"] ?? null), 16, $this->source), "html", null, true);
        echo "\">
    <title>";
        // line 17
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\TwigExtension']->safeJoin($this->env, $this->sandbox->ensureToStringAllowed(($context["head_title"] ?? null), 17, $this->source), " | "));
        echo "</title>
    <css-placeholder token=\"";
        // line 18
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["placeholder_token"] ?? null), 18, $this->source), "html", null, true);
        echo "\">
      <js-placeholder token=\"";
        // line 19
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["placeholder_token"] ?? null), 19, $this->source), "html", null, true);
        echo "\">
</head>
<body";
        // line 21
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [($context["body_classes"] ?? null)], "method", false, false, true, 21), 21, $this->source), "html", null, true);
        echo ">

";
        // line 23
        $this->loadTemplate("@organisms/skip-link/skip-link.twig", "themes/contrib/civictheme/templates/layout/html.html.twig", 23)->display(twig_to_array(["url" => "#main-content", "theme" =>         // line 25
($context["skip_link_theme"] ?? null)]));
        // line 27
        echo "
";
        // line 28
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["page_top"] ?? null), 28, $this->source), "html", null, true);
        echo "
";
        // line 29
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["page"] ?? null), 29, $this->source), "html", null, true);
        echo "
";
        // line 30
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["page_bottom"] ?? null), 30, $this->source), "html", null, true);
        echo "
<js-bottom-placeholder token=\"";
        // line 31
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["placeholder_token"] ?? null), 31, $this->source), "html", null, true);
        echo "\">
</body>
</html>
";
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["logged_in", "root_path", "node_type", "db_offline", "html_attributes", "placeholder_token", "head_title", "attributes", "skip_link_theme", "page_top", "page", "page_bottom"]);    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "themes/contrib/civictheme/templates/layout/html.html.twig";
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
        return array (  93 => 31,  89 => 30,  85 => 29,  81 => 28,  78 => 27,  76 => 25,  75 => 23,  70 => 21,  65 => 19,  61 => 18,  57 => 17,  53 => 16,  48 => 14,  45 => 13,  43 => 11,  42 => 10,  41 => 9,  40 => 8,  39 => 7,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/contrib/civictheme/templates/layout/html.html.twig", "C:\\xampp\\htdocs\\project1\\web\\themes\\contrib\\civictheme\\templates\\layout\\html.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 7, "include" => 23);
        static $filters = array("clean_class" => 9, "escape" => 14, "safe_join" => 17);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['set', 'include'],
                ['clean_class', 'escape', 'safe_join'],
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
