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

/* @base/icon/icon.twig */
class __TwigTemplate_77f2a02d8157227d901293952d69dfb9 extends Template
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
        $context["assets_dir"] = ((array_key_exists("assets_dir", $context)) ? (_twig_default_filter($this->sandbox->ensureToStringAllowed(($context["assets_dir"] ?? null), 16, $this->source), "@civictheme/../assets")) : ("@civictheme/../assets"));
        // line 17
        echo "
";
        // line 18
        if ( !twig_test_empty(($context["symbol"] ?? null))) {
            // line 19
            echo "  ";
            $context["source"] = twig_source($this->env, ((($this->sandbox->ensureToStringAllowed(($context["assets_dir"] ?? null), 19, $this->source) . "/icons/") . $this->sandbox->ensureToStringAllowed(($context["symbol"] ?? null), 19, $this->source)) . ".svg"), true);
            // line 20
            echo "  ";
            if ( !twig_test_empty(($context["source"] ?? null))) {
                // line 21
                echo "    ";
                $context["attributes"] = (((((("class=\"ct-icon " . ((($context["size"] ?? null)) ? (("ct-icon--size-" . $this->sandbox->ensureToStringAllowed(($context["size"] ?? null), 21, $this->source))) : (""))) . " ") . ((array_key_exists("modifier_class", $context)) ? (_twig_default_filter($this->sandbox->ensureToStringAllowed(($context["modifier_class"] ?? null), 21, $this->source), "")) : (""))) . "\" aria-hidden=\"true\" role=\"img\" ") . ((array_key_exists("alt", $context)) ? ((("alt=\"" . $this->sandbox->ensureToStringAllowed(($context["alt"] ?? null), 21, $this->source)) . "\"")) : (""))) . ((array_key_exists("attributes", $context)) ? (_twig_default_filter($this->sandbox->ensureToStringAllowed(($context["attributes"] ?? null), 21, $this->source), "")) : ("")));
                // line 22
                echo "    ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(twig_replace_filter($this->sandbox->ensureToStringAllowed(($context["source"] ?? null), 22, $this->source), ["<svg " => (("<svg " . $this->sandbox->ensureToStringAllowed(($context["attributes"] ?? null), 22, $this->source)) . " ")]));
                echo "
  ";
            }
        }
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["symbol", "size", "modifier_class", "alt"]);    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@base/icon/icon.twig";
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
        return array (  58 => 22,  55 => 21,  52 => 20,  49 => 19,  47 => 18,  44 => 17,  42 => 16,  39 => 15,);
    }

    public function getSourceContext()
    {
        return new Source("", "@base/icon/icon.twig", "themes/contrib/civictheme/components/00-base/icon/icon.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 16, "if" => 18);
        static $filters = array("default" => 16, "raw" => 22, "replace" => 22);
        static $functions = array("source" => 19);

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if'],
                ['default', 'raw', 'replace'],
                ['source']
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
