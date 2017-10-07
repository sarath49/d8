<?php

/* {# inline_template_start #}{#

Description text for the Tour Example.

#}

{% trans %}


<h2>The Tour:</h2>
<p>Click the 'Tour' icon in the admin menu bar to start.</p>
<div class="button" id="tour-id-1">First item.</div>
<div class="button" id="tour-id-2">Second item.</div>
<div class="button" id="tour-id-3">Third item.</div>
<div class="button" id="tour-id-4">Fourth item.</div>

<h2>About Tours</h2>

<p>The Tour module allows you you make instructional tours of user interfaces.</p>

<p>The Tour module comes with Drupal 8 and makes it easy for developers to add
    &quot;Tours&quot; for guiding users through unfamiliar user interfaces.</p>

<p>Each tour is comprised of a series of tooltips that provide contextual
    information about an interface. The user can start a tour by clicking the
    &quot;Tour&quot; icon on the right side of the Drupal 8 toolbar. The tour icon is only
    visible when there is a tour available on the current page.</p>

<p>The Tour module provides the Tour API, which makes it easy for developers to
    add tours to their modules. In most cases, adding a tour is as simple as
    creating a YAML file in the config directory in their module, containing the
    expected data. For a detailed example of such a file, see
    config/install/tour.tour.tour-example.yml.</p>

<p>If you are interested in building tours through a user interface, you may
    want to look at the Tour UI module: <a href="https://drupal.org/project/tour_ui">https://drupal.org/project/tour_ui</a></p>

<p>The Tour module uses the Joyride jQuery plugin for its underlying
    functionality. You can find more information about Joyride at
    <a href="https://github.com/zurb/joyride">https://github.com/zurb/joyride</a></p>

{% endtrans %}
 */
class __TwigTemplate_8eb069aa64989bbc1e8c8b8a8fc0da76e0500245fd50283894cc6f9755a86b9b extends Twig_Template
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
        $__internal_fd50762b0af10192cf751731fbedc15d64deeebecb7928f20fe463f3dfb31c4b = $this->env->getExtension("Drupal\\webprofiler\\Twig\\Extension\\ProfilerExtension");
        $__internal_fd50762b0af10192cf751731fbedc15d64deeebecb7928f20fe463f3dfb31c4b->enter($__internal_fd50762b0af10192cf751731fbedc15d64deeebecb7928f20fe463f3dfb31c4b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "{# inline_template_start #}{#

Description text for the Tour Example.

#}

{% trans %}


<h2>The Tour:</h2>
<p>Click the 'Tour' icon in the admin menu bar to start.</p>
<div class=\"button\" id=\"tour-id-1\">First item.</div>
<div class=\"button\" id=\"tour-id-2\">Second item.</div>
<div class=\"button\" id=\"tour-id-3\">Third item.</div>
<div class=\"button\" id=\"tour-id-4\">Fourth item.</div>

<h2>About Tours</h2>

<p>The Tour module allows you you make instructional tours of user interfaces.</p>

<p>The Tour module comes with Drupal 8 and makes it easy for developers to add
    &quot;Tours&quot; for guiding users through unfamiliar user interfaces.</p>

<p>Each tour is comprised of a series of tooltips that provide contextual
    information about an interface. The user can start a tour by clicking the
    &quot;Tour&quot; icon on the right side of the Drupal 8 toolbar. The tour icon is only
    visible when there is a tour available on the current page.</p>

<p>The Tour module provides the Tour API, which makes it easy for developers to
    add tours to their modules. In most cases, adding a tour is as simple as
    creating a YAML file in the config directory in their module, containing the
    expected data. For a detailed example of such a file, see
    config/install/tour.tour.tour-example.yml.</p>

<p>If you are interested in building tours through a user interface, you may
    want to look at the Tour UI module: <a href=\"https://drupal.org/project/tour_ui\">https://drupal.org/project/tour_ui</a></p>

<p>The Tour module uses the Joyride jQuery plugin for its underlying
    functionality. You can find more information about Joyride at
    <a href=\"https://github.com/zurb/joyride\">https://github.com/zurb/joyride</a></p>

{% endtrans %}
"));

        $tags = array("trans" => 7);
        $filters = array();
        $functions = array();

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array('trans'),
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

        // line 6
        echo "
";
        // line 7
        echo t("<h2>The Tour:</h2>
<p>Click the 'Tour' icon in the admin menu bar to start.</p>
<div class=\"button\" id=\"tour-id-1\">First item.</div>
<div class=\"button\" id=\"tour-id-2\">Second item.</div>
<div class=\"button\" id=\"tour-id-3\">Third item.</div>
<div class=\"button\" id=\"tour-id-4\">Fourth item.</div>

<h2>About Tours</h2>

<p>The Tour module allows you you make instructional tours of user interfaces.</p>

<p>The Tour module comes with Drupal 8 and makes it easy for developers to add
    &quot;Tours&quot; for guiding users through unfamiliar user interfaces.</p>

<p>Each tour is comprised of a series of tooltips that provide contextual
    information about an interface. The user can start a tour by clicking the
    &quot;Tour&quot; icon on the right side of the Drupal 8 toolbar. The tour icon is only
    visible when there is a tour available on the current page.</p>

<p>The Tour module provides the Tour API, which makes it easy for developers to
    add tours to their modules. In most cases, adding a tour is as simple as
    creating a YAML file in the config directory in their module, containing the
    expected data. For a detailed example of such a file, see
    config/install/tour.tour.tour-example.yml.</p>

<p>If you are interested in building tours through a user interface, you may
    want to look at the Tour UI module: <a href=\"https://drupal.org/project/tour_ui\">https://drupal.org/project/tour_ui</a></p>

<p>The Tour module uses the Joyride jQuery plugin for its underlying
    functionality. You can find more information about Joyride at
    <a href=\"https://github.com/zurb/joyride\">https://github.com/zurb/joyride</a></p>", array());
        
        $__internal_fd50762b0af10192cf751731fbedc15d64deeebecb7928f20fe463f3dfb31c4b->leave($__internal_fd50762b0af10192cf751731fbedc15d64deeebecb7928f20fe463f3dfb31c4b_prof);

    }

    public function getTemplateName()
    {
        return "{# inline_template_start #}{#

Description text for the Tour Example.

#}

{% trans %}


<h2>The Tour:</h2>
<p>Click the 'Tour' icon in the admin menu bar to start.</p>
<div class=\"button\" id=\"tour-id-1\">First item.</div>
<div class=\"button\" id=\"tour-id-2\">Second item.</div>
<div class=\"button\" id=\"tour-id-3\">Third item.</div>
<div class=\"button\" id=\"tour-id-4\">Fourth item.</div>

<h2>About Tours</h2>

<p>The Tour module allows you you make instructional tours of user interfaces.</p>

<p>The Tour module comes with Drupal 8 and makes it easy for developers to add
    &quot;Tours&quot; for guiding users through unfamiliar user interfaces.</p>

<p>Each tour is comprised of a series of tooltips that provide contextual
    information about an interface. The user can start a tour by clicking the
    &quot;Tour&quot; icon on the right side of the Drupal 8 toolbar. The tour icon is only
    visible when there is a tour available on the current page.</p>

<p>The Tour module provides the Tour API, which makes it easy for developers to
    add tours to their modules. In most cases, adding a tour is as simple as
    creating a YAML file in the config directory in their module, containing the
    expected data. For a detailed example of such a file, see
    config/install/tour.tour.tour-example.yml.</p>

<p>If you are interested in building tours through a user interface, you may
    want to look at the Tour UI module: <a href=\"https://drupal.org/project/tour_ui\">https://drupal.org/project/tour_ui</a></p>

<p>The Tour module uses the Joyride jQuery plugin for its underlying
    functionality. You can find more information about Joyride at
    <a href=\"https://github.com/zurb/joyride\">https://github.com/zurb/joyride</a></p>

{% endtrans %}
";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  133 => 7,  130 => 6,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "{# inline_template_start #}{#

Description text for the Tour Example.

#}

{% trans %}


<h2>The Tour:</h2>
<p>Click the 'Tour' icon in the admin menu bar to start.</p>
<div class=\"button\" id=\"tour-id-1\">First item.</div>
<div class=\"button\" id=\"tour-id-2\">Second item.</div>
<div class=\"button\" id=\"tour-id-3\">Third item.</div>
<div class=\"button\" id=\"tour-id-4\">Fourth item.</div>

<h2>About Tours</h2>

<p>The Tour module allows you you make instructional tours of user interfaces.</p>

<p>The Tour module comes with Drupal 8 and makes it easy for developers to add
    &quot;Tours&quot; for guiding users through unfamiliar user interfaces.</p>

<p>Each tour is comprised of a series of tooltips that provide contextual
    information about an interface. The user can start a tour by clicking the
    &quot;Tour&quot; icon on the right side of the Drupal 8 toolbar. The tour icon is only
    visible when there is a tour available on the current page.</p>

<p>The Tour module provides the Tour API, which makes it easy for developers to
    add tours to their modules. In most cases, adding a tour is as simple as
    creating a YAML file in the config directory in their module, containing the
    expected data. For a detailed example of such a file, see
    config/install/tour.tour.tour-example.yml.</p>

<p>If you are interested in building tours through a user interface, you may
    want to look at the Tour UI module: <a href=\"https://drupal.org/project/tour_ui\">https://drupal.org/project/tour_ui</a></p>

<p>The Tour module uses the Joyride jQuery plugin for its underlying
    functionality. You can find more information about Joyride at
    <a href=\"https://github.com/zurb/joyride\">https://github.com/zurb/joyride</a></p>

{% endtrans %}
", "");
    }
}
