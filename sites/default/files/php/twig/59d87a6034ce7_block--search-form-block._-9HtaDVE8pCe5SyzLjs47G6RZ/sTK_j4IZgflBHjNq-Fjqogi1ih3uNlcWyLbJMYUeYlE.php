<?php

/* @classy/block/block--search-form-block.html.twig */
class __TwigTemplate_3f1b43b3817fe6b644b11f2517ed7110e0a19d4d1a72d64a42b366122f2f2ea1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f398f4aad4d8e80878e34e04039151bab273be08300ca5a2cc3f6d014ec312f1 = $this->env->getExtension("Drupal\\webprofiler\\Twig\\Extension\\ProfilerExtension");
        $__internal_f398f4aad4d8e80878e34e04039151bab273be08300ca5a2cc3f6d014ec312f1->enter($__internal_f398f4aad4d8e80878e34e04039151bab273be08300ca5a2cc3f6d014ec312f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@classy/block/block--search-form-block.html.twig"));

        $tags = array("set" => 30, "if" => 38, "block" => 42);
        $filters = array();
        $functions = array();

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array('set', 'if', 'block'),
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

        // line 30
        $context["classes"] = array(0 => "block", 1 => "block-search", 2 => "container-inline");
        // line 36
        echo "<div";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute((isset($context["attributes"]) ? $context["attributes"] : null), "addClass", array(0 => (isset($context["classes"]) ? $context["classes"] : null)), "method"), "html", null, true));
        echo ">
  ";
        // line 37
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, (isset($context["title_prefix"]) ? $context["title_prefix"] : null), "html", null, true));
        echo "
  ";
        // line 38
        if ((isset($context["label"]) ? $context["label"] : null)) {
            // line 39
            echo "    <h2";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, (isset($context["title_attributes"]) ? $context["title_attributes"] : null), "html", null, true));
            echo ">";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, (isset($context["label"]) ? $context["label"] : null), "html", null, true));
            echo "</h2>
  ";
        }
        // line 41
        echo "  ";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, (isset($context["title_suffix"]) ? $context["title_suffix"] : null), "html", null, true));
        echo "
  ";
        // line 42
        $this->displayBlock('content', $context, $blocks);
        // line 45
        echo "</div>
";
        
        $__internal_f398f4aad4d8e80878e34e04039151bab273be08300ca5a2cc3f6d014ec312f1->leave($__internal_f398f4aad4d8e80878e34e04039151bab273be08300ca5a2cc3f6d014ec312f1_prof);

    }

    // line 42
    public function block_content($context, array $blocks = array())
    {
        $__internal_7ded9d85583f79b4d75cda18a7b0e88d414f0478893350fd06adb150da646046 = $this->env->getExtension("Drupal\\webprofiler\\Twig\\Extension\\ProfilerExtension");
        $__internal_7ded9d85583f79b4d75cda18a7b0e88d414f0478893350fd06adb150da646046->enter($__internal_7ded9d85583f79b4d75cda18a7b0e88d414f0478893350fd06adb150da646046_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 43
        echo "    ";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, (isset($context["content"]) ? $context["content"] : null), "html", null, true));
        echo "
  ";
        
        $__internal_7ded9d85583f79b4d75cda18a7b0e88d414f0478893350fd06adb150da646046->leave($__internal_7ded9d85583f79b4d75cda18a7b0e88d414f0478893350fd06adb150da646046_prof);

    }

    public function getTemplateName()
    {
        return "@classy/block/block--search-form-block.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  89 => 43,  83 => 42,  75 => 45,  73 => 42,  68 => 41,  60 => 39,  58 => 38,  54 => 37,  49 => 36,  47 => 30,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@classy/block/block--search-form-block.html.twig", "/home/ntuser/lampstack-5.6.31-0/apache2/htdocs/d8/core/themes/classy/templates/block/block--search-form-block.html.twig");
    }
}
