<?php

/* core/themes/classy/templates/layout/region.html.twig */
class __TwigTemplate_ff1309b44325dbecec21c7034225b37c1c43bb1c186ce2edae227086c621267b extends Twig_Template
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
        $__internal_25c1f3b2265a12a988db1d4e0b5fe4dbaef683de136626573c0e56323341f322 = $this->env->getExtension("Drupal\\webprofiler\\Twig\\Extension\\ProfilerExtension");
        $__internal_25c1f3b2265a12a988db1d4e0b5fe4dbaef683de136626573c0e56323341f322->enter($__internal_25c1f3b2265a12a988db1d4e0b5fe4dbaef683de136626573c0e56323341f322_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "core/themes/classy/templates/layout/region.html.twig"));

        $tags = array("set" => 16, "if" => 21);
        $filters = array("clean_class" => 18);
        $functions = array();

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array('set', 'if'),
                array('clean_class'),
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
        $context["classes"] = array(0 => "region", 1 => ("region-" . \Drupal\Component\Utility\Html::getClass(        // line 18
(isset($context["region"]) ? $context["region"] : null))));
        // line 21
        if ((isset($context["content"]) ? $context["content"] : null)) {
            // line 22
            echo "  <div";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute((isset($context["attributes"]) ? $context["attributes"] : null), "addClass", array(0 => (isset($context["classes"]) ? $context["classes"] : null)), "method"), "html", null, true));
            echo ">
    ";
            // line 23
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, (isset($context["content"]) ? $context["content"] : null), "html", null, true));
            echo "
  </div>
";
        }
        
        $__internal_25c1f3b2265a12a988db1d4e0b5fe4dbaef683de136626573c0e56323341f322->leave($__internal_25c1f3b2265a12a988db1d4e0b5fe4dbaef683de136626573c0e56323341f322_prof);

    }

    public function getTemplateName()
    {
        return "core/themes/classy/templates/layout/region.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  56 => 23,  51 => 22,  49 => 21,  47 => 18,  46 => 16,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "core/themes/classy/templates/layout/region.html.twig", "D:\\Work\\d8\\core\\themes\\classy\\templates\\layout\\region.html.twig");
    }
}
