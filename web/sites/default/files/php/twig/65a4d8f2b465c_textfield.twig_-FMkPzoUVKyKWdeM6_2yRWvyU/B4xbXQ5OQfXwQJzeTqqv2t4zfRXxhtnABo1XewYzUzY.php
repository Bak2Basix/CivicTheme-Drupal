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

/* @atoms/textfield/textfield.twig */
class __TwigTemplate_68a720a9a0d13a4938bfe1b671fb01b4 extends Template
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
        // line 15
        echo "
";
        // line 16
        $context["disabled_class"] = ((($context["disabled"] ?? null)) ? ("ct-input--disabled disabled") : (""));
        // line 17
        $context["required_class"] = ((($context["required"] ?? null)) ? ("ct-input--required required") : (""));
        // line 18
        $context["theme_class"] = twig_sprintf("ct-theme-%s", ((array_key_exists("theme", $context)) ? (_twig_default_filter($this->sandbox->ensureToStringAllowed(($context["theme"] ?? null), 18, $this->source), "light")) : ("light")));
        // line 19
        $context["modifier_class"] = twig_sprintf("%s %s %s %s", $this->sandbox->ensureToStringAllowed(($context["theme_class"] ?? null), 19, $this->source), $this->sandbox->ensureToStringAllowed(($context["disabled_class"] ?? null), 19, $this->source), $this->sandbox->ensureToStringAllowed(($context["required_class"] ?? null), 19, $this->source), ((array_key_exists("modifier_class", $context)) ? (_twig_default_filter($this->sandbox->ensureToStringAllowed(($context["modifier_class"] ?? null), 19, $this->source), "")) : ("")));
        // line 20
        echo "
<input
  type=\"";
        // line 22
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["type"] ?? null), 22, $this->source), "html", null, true);
        echo "\"
  value=\"";
        // line 23
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["value"] ?? null), 23, $this->source), "html", null, true);
        echo "\"
  class=\"ct-textfield ct-input__element ";
        // line 24
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["modifier_class"] ?? null), 24, $this->source), "html", null, true);
        echo "\"
  ";
        // line 25
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(((($context["disabled"] ?? null)) ? ("disabled") : ("")));
        echo "
  ";
        // line 26
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(((($context["required"] ?? null)) ? ("required") : ("")));
        echo "
  ";
        // line 27
        if (($context["placeholder"] ?? null)) {
            echo "placeholder=\"";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["placeholder"] ?? null), 27, $this->source), "html", null, true);
            echo "\"";
        }
        // line 28
        echo "  ";
        if ( !twig_test_empty(($context["attributes"] ?? null))) {
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(($context["attributes"] ?? null), 28, $this->source));
        }
        // line 29
        echo "/>
";
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["disabled", "required", "theme", "type", "value", "placeholder", "attributes"]);    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@atoms/textfield/textfield.twig";
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
        return array (  85 => 29,  80 => 28,  74 => 27,  70 => 26,  66 => 25,  62 => 24,  58 => 23,  54 => 22,  50 => 20,  48 => 19,  46 => 18,  44 => 17,  42 => 16,  39 => 15,);
    }

    public function getSourceContext()
    {
        return new Source("", "@atoms/textfield/textfield.twig", "themes/contrib/civictheme/components/01-atoms/textfield/textfield.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 16, "if" => 27);
        static $filters = array("format" => 18, "default" => 18, "escape" => 22, "raw" => 28);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if'],
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
