<?php

/* core/themes/classy/templates/form/form-element-label.html.twig */
class __TwigTemplate_16b65145646fea93cee2e26c8dfdc05a60001f9b4be193217660b03e257671e8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_214dfb3459ed8e43ea7e417d17c4ec906aefba414cdcaebebc390a8785cf5484 = $this->env->getExtension("Drupal\\webprofiler\\Twig\\Extension\\ProfilerExtension");
        $__internal_214dfb3459ed8e43ea7e417d17c4ec906aefba414cdcaebebc390a8785cf5484->enter($__internal_214dfb3459ed8e43ea7e417d17c4ec906aefba414cdcaebebc390a8785cf5484_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "core/themes/classy/templates/form/form-element-label.html.twig"));

        $tags = array("set" => 16, "if" => 23);
        $filters = array();
        $functions = array();

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array('set', 'if'),
                array(),
                array()
            );
        } catch (Twig_Sandbox_SecurityError $e) {
            $e->setSourceContext($this->getSourceContext());

            if ($e instanceof Twig_Sandbox_SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof Twig_Sandbox_SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof Twig_Sandbox_SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

        // line 16
        $context["classes"] = array(0 => (((        // line 17
(isset($context["title_display"]) ? $context["title_display"] : null) == "after")) ? ("option") : ("")), 1 => (((        // line 18
(isset($context["title_display"]) ? $context["title_display"] : null) == "invisible")) ? ("visually-hidden") : ("")), 2 => ((        // line 19
(isset($context["required"]) ? $context["required"] : null)) ? ("js-form-required") : ("")), 3 => ((        // line 20
(isset($context["required"]) ? $context["required"] : null)) ? ("form-required") : ("")));
        // line 23
        if (( !twig_test_empty((isset($context["title"]) ? $context["title"] : null)) || (isset($context["required"]) ? $context["required"] : null))) {
            // line 24
            echo "<label";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute((isset($context["attributes"]) ? $context["attributes"] : null), "addClass", array(0 => (isset($context["classes"]) ? $context["classes"] : null)), "method"), "html", null, true));
            echo ">";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, (isset($context["title"]) ? $context["title"] : null), "html", null, true));
            echo "</label>";
        }
        
        $__internal_214dfb3459ed8e43ea7e417d17c4ec906aefba414cdcaebebc390a8785cf5484->leave($__internal_214dfb3459ed8e43ea7e417d17c4ec906aefba414cdcaebebc390a8785cf5484_prof);

    }

    public function getTemplateName()
    {
        return "core/themes/classy/templates/form/form-element-label.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  54 => 24,  52 => 23,  50 => 20,  49 => 19,  48 => 18,  47 => 17,  46 => 16,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "core/themes/classy/templates/form/form-element-label.html.twig", "/home/ntuser/lampstack-5.6.31-0/apache2/htdocs/d8/core/themes/classy/templates/form/form-element-label.html.twig");
    }
}