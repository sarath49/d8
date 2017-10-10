<?php

/* @classy/misc/status-messages.html.twig */
class __TwigTemplate_59accd533e70f4d1c54f318bf02ba4ba1f2365cc34283e268db54ff5c097af40 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'messages' => array($this, 'block_messages'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c880c9d03dd2c6996531a8752bd5363adbfbf06a242724ed5aa30053b1bb17a9 = $this->env->getExtension("Drupal\\webprofiler\\Twig\\Extension\\ProfilerExtension");
        $__internal_c880c9d03dd2c6996531a8752bd5363adbfbf06a242724ed5aa30053b1bb17a9->enter($__internal_c880c9d03dd2c6996531a8752bd5363adbfbf06a242724ed5aa30053b1bb17a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@classy/misc/status-messages.html.twig"));

        $tags = array("block" => 24, "for" => 25, "set" => 27, "if" => 33);
        $filters = array("without" => 32, "length" => 39, "first" => 46);
        $functions = array();

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array('block', 'for', 'set', 'if'),
                array('without', 'length', 'first'),
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

        // line 24
        $this->displayBlock('messages', $context, $blocks);
        
        $__internal_c880c9d03dd2c6996531a8752bd5363adbfbf06a242724ed5aa30053b1bb17a9->leave($__internal_c880c9d03dd2c6996531a8752bd5363adbfbf06a242724ed5aa30053b1bb17a9_prof);

    }

    public function block_messages($context, array $blocks = array())
    {
        $__internal_15b611b4f0bed299607379ca1f9a731dce57821f82546ca45d92ef9e60ea4b41 = $this->env->getExtension("Drupal\\webprofiler\\Twig\\Extension\\ProfilerExtension");
        $__internal_15b611b4f0bed299607379ca1f9a731dce57821f82546ca45d92ef9e60ea4b41->enter($__internal_15b611b4f0bed299607379ca1f9a731dce57821f82546ca45d92ef9e60ea4b41_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "messages"));

        // line 25
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["message_list"]) ? $context["message_list"] : null));
        foreach ($context['_seq'] as $context["type"] => $context["messages"]) {
            // line 26
            echo "  ";
            // line 27
            $context["classes"] = array(0 => "messages", 1 => ("messages--" .             // line 29
$context["type"]));
            // line 32
            echo "  <div role=\"contentinfo\" aria-label=\"";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute((isset($context["status_headings"]) ? $context["status_headings"] : null), $context["type"], array(), "array"), "html", null, true));
            echo "\"";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, twig_without($this->getAttribute((isset($context["attributes"]) ? $context["attributes"] : null), "addClass", array(0 => (isset($context["classes"]) ? $context["classes"] : null)), "method"), "role", "aria-label"), "html", null, true));
            echo ">
    ";
            // line 33
            if (($context["type"] == "error")) {
                // line 34
                echo "      <div role=\"alert\">
    ";
            }
            // line 36
            echo "      ";
            if ($this->getAttribute((isset($context["status_headings"]) ? $context["status_headings"] : null), $context["type"], array(), "array")) {
                // line 37
                echo "        <h2 class=\"visually-hidden\">";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute((isset($context["status_headings"]) ? $context["status_headings"] : null), $context["type"], array(), "array"), "html", null, true));
                echo "</h2>
      ";
            }
            // line 39
            echo "      ";
            if ((twig_length_filter($this->env, $context["messages"]) > 1)) {
                // line 40
                echo "        <ul class=\"messages__list\">
          ";
                // line 41
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($context["messages"]);
                foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                    // line 42
                    echo "            <li class=\"messages__item\">";
                    echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $context["message"], "html", null, true));
                    echo "</li>
          ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 44
                echo "        </ul>
      ";
            } else {
                // line 46
                echo "        ";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, twig_first($this->env, $context["messages"]), "html", null, true));
                echo "
      ";
            }
            // line 48
            echo "    ";
            if (($context["type"] == "error")) {
                // line 49
                echo "      </div>
    ";
            }
            // line 51
            echo "  </div>
  ";
            // line 53
            echo "  ";
            $context["attributes"] = $this->getAttribute((isset($context["attributes"]) ? $context["attributes"] : null), "removeClass", array(0 => (isset($context["classes"]) ? $context["classes"] : null)), "method");
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['type'], $context['messages'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_15b611b4f0bed299607379ca1f9a731dce57821f82546ca45d92ef9e60ea4b41->leave($__internal_15b611b4f0bed299607379ca1f9a731dce57821f82546ca45d92ef9e60ea4b41_prof);

    }

    public function getTemplateName()
    {
        return "@classy/misc/status-messages.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  129 => 53,  126 => 51,  122 => 49,  119 => 48,  113 => 46,  109 => 44,  100 => 42,  96 => 41,  93 => 40,  90 => 39,  84 => 37,  81 => 36,  77 => 34,  75 => 33,  68 => 32,  66 => 29,  65 => 27,  63 => 26,  59 => 25,  47 => 24,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@classy/misc/status-messages.html.twig", "/home/ntuser/lampstack-5.6.31-0/apache2/htdocs/d8/core/themes/classy/templates/misc/status-messages.html.twig");
    }
}
