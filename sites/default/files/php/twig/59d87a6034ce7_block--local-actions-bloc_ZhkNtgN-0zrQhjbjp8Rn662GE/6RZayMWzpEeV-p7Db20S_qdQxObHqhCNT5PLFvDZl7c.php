<?php

/* core/themes/seven/templates/block--local-actions-block.html.twig */
class __TwigTemplate_81debda05de8a0993a63e936e7b6c89520d588fc374cb00cf2e7d137991f8767 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@block/block.html.twig", "core/themes/seven/templates/block--local-actions-block.html.twig", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@block/block.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_4cef1fb70a84e79499ff49f277e789177e24af88a12ca1a2ea6ce79cecf5f33c = $this->env->getExtension("Drupal\\webprofiler\\Twig\\Extension\\ProfilerExtension");
        $__internal_4cef1fb70a84e79499ff49f277e789177e24af88a12ca1a2ea6ce79cecf5f33c->enter($__internal_4cef1fb70a84e79499ff49f277e789177e24af88a12ca1a2ea6ce79cecf5f33c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "core/themes/seven/templates/block--local-actions-block.html.twig"));

        $tags = array("if" => 9);
        $filters = array();
        $functions = array();

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array('if'),
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

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4cef1fb70a84e79499ff49f277e789177e24af88a12ca1a2ea6ce79cecf5f33c->leave($__internal_4cef1fb70a84e79499ff49f277e789177e24af88a12ca1a2ea6ce79cecf5f33c_prof);

    }

    // line 8
    public function block_content($context, array $blocks = array())
    {
        $__internal_f9d7de89bd9ec183149cb9f5af96e15fb14ae73f36b4598e03e3e47de28f0718 = $this->env->getExtension("Drupal\\webprofiler\\Twig\\Extension\\ProfilerExtension");
        $__internal_f9d7de89bd9ec183149cb9f5af96e15fb14ae73f36b4598e03e3e47de28f0718->enter($__internal_f9d7de89bd9ec183149cb9f5af96e15fb14ae73f36b4598e03e3e47de28f0718_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 9
        echo "  ";
        if ((isset($context["content"]) ? $context["content"] : null)) {
            // line 10
            echo "    <ul class=\"action-links\">
      ";
            // line 11
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, (isset($context["content"]) ? $context["content"] : null), "html", null, true));
            echo "
    </ul>
  ";
        }
        
        $__internal_f9d7de89bd9ec183149cb9f5af96e15fb14ae73f36b4598e03e3e47de28f0718->leave($__internal_f9d7de89bd9ec183149cb9f5af96e15fb14ae73f36b4598e03e3e47de28f0718_prof);

    }

    public function getTemplateName()
    {
        return "core/themes/seven/templates/block--local-actions-block.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  70 => 11,  67 => 10,  64 => 9,  58 => 8,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "core/themes/seven/templates/block--local-actions-block.html.twig", "/home/ntuser/lampstack-5.6.31-0/apache2/htdocs/d8/core/themes/seven/templates/block--local-actions-block.html.twig");
    }
}
