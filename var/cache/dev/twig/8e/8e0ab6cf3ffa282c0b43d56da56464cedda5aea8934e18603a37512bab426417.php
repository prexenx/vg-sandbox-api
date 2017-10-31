<?php

/* WebProfilerBundle:Profiler:info.html.twig */
class __TwigTemplate_113185595451bdabb4214db35262642caea2857588ea609d5e07f7b6a8597bb9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Profiler:info.html.twig", 1);
        $this->blocks = array(
            'summary' => array($this, 'block_summary'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c24fab9ff66aa7468ec831b1e7a8250d1874b1497a67fac22db7ccbbc97114a7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c24fab9ff66aa7468ec831b1e7a8250d1874b1497a67fac22db7ccbbc97114a7->enter($__internal_c24fab9ff66aa7468ec831b1e7a8250d1874b1497a67fac22db7ccbbc97114a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:info.html.twig"));

        $__internal_354329e90b05d70ed24ec6198dbb6d3fcf4862081515a95473c9d5a7699e175c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_354329e90b05d70ed24ec6198dbb6d3fcf4862081515a95473c9d5a7699e175c->enter($__internal_354329e90b05d70ed24ec6198dbb6d3fcf4862081515a95473c9d5a7699e175c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:info.html.twig"));

        // line 3
        $context["messages"] = array("no_token" => array("status" => "error", "title" => (((((        // line 6
array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("There are no profiles") : ("Token not found")), "message" => (((((        // line 7
array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("No profiles found in the database.") : ((("Token \"" . ((array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "")) : (""))) . "\" was not found in the database.")))));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c24fab9ff66aa7468ec831b1e7a8250d1874b1497a67fac22db7ccbbc97114a7->leave($__internal_c24fab9ff66aa7468ec831b1e7a8250d1874b1497a67fac22db7ccbbc97114a7_prof);

        
        $__internal_354329e90b05d70ed24ec6198dbb6d3fcf4862081515a95473c9d5a7699e175c->leave($__internal_354329e90b05d70ed24ec6198dbb6d3fcf4862081515a95473c9d5a7699e175c_prof);

    }

    // line 11
    public function block_summary($context, array $blocks = array())
    {
        $__internal_fa1f7ad7b2f8304e9c9112f1a1ce79a21d44f5b44230be6e0b43c60a1fe3c8be = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fa1f7ad7b2f8304e9c9112f1a1ce79a21d44f5b44230be6e0b43c60a1fe3c8be->enter($__internal_fa1f7ad7b2f8304e9c9112f1a1ce79a21d44f5b44230be6e0b43c60a1fe3c8be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        $__internal_af55efad2aaf93510866a48da92970d7e94f0c605b39153f1c2eab8662bd811d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_af55efad2aaf93510866a48da92970d7e94f0c605b39153f1c2eab8662bd811d->enter($__internal_af55efad2aaf93510866a48da92970d7e94f0c605b39153f1c2eab8662bd811d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        // line 12
        echo "    <div class=\"status status-";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["messages"]) ? $context["messages"] : $this->getContext($context, "messages")), (isset($context["about"]) ? $context["about"] : $this->getContext($context, "about")), array(), "array"), "status", array()), "html", null, true);
        echo "\">
        <div class=\"container\">
            <h2>";
        // line 14
        echo twig_escape_filter($this->env, twig_title_string_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["messages"]) ? $context["messages"] : $this->getContext($context, "messages")), (isset($context["about"]) ? $context["about"] : $this->getContext($context, "about")), array(), "array"), "status", array())), "html", null, true);
        echo "</h2>
        </div>
    </div>
";
        
        $__internal_af55efad2aaf93510866a48da92970d7e94f0c605b39153f1c2eab8662bd811d->leave($__internal_af55efad2aaf93510866a48da92970d7e94f0c605b39153f1c2eab8662bd811d_prof);

        
        $__internal_fa1f7ad7b2f8304e9c9112f1a1ce79a21d44f5b44230be6e0b43c60a1fe3c8be->leave($__internal_fa1f7ad7b2f8304e9c9112f1a1ce79a21d44f5b44230be6e0b43c60a1fe3c8be_prof);

    }

    // line 19
    public function block_panel($context, array $blocks = array())
    {
        $__internal_ff7aaa0f641cf8301c04a8a7c6d699cde9710c8ce05e41d02bfda20d77b71d84 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ff7aaa0f641cf8301c04a8a7c6d699cde9710c8ce05e41d02bfda20d77b71d84->enter($__internal_ff7aaa0f641cf8301c04a8a7c6d699cde9710c8ce05e41d02bfda20d77b71d84_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_5c77d251024ca468e056d63f8e37e6d4b1ea142cda6b3561a9cf652aefd868f9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5c77d251024ca468e056d63f8e37e6d4b1ea142cda6b3561a9cf652aefd868f9->enter($__internal_5c77d251024ca468e056d63f8e37e6d4b1ea142cda6b3561a9cf652aefd868f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 20
        echo "    <h2>";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["messages"]) ? $context["messages"] : $this->getContext($context, "messages")), (isset($context["about"]) ? $context["about"] : $this->getContext($context, "about")), array(), "array"), "title", array()), "html", null, true);
        echo "</h2>
    <p>";
        // line 21
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["messages"]) ? $context["messages"] : $this->getContext($context, "messages")), (isset($context["about"]) ? $context["about"] : $this->getContext($context, "about")), array(), "array"), "message", array()), "html", null, true);
        echo "</p>
";
        
        $__internal_5c77d251024ca468e056d63f8e37e6d4b1ea142cda6b3561a9cf652aefd868f9->leave($__internal_5c77d251024ca468e056d63f8e37e6d4b1ea142cda6b3561a9cf652aefd868f9_prof);

        
        $__internal_ff7aaa0f641cf8301c04a8a7c6d699cde9710c8ce05e41d02bfda20d77b71d84->leave($__internal_ff7aaa0f641cf8301c04a8a7c6d699cde9710c8ce05e41d02bfda20d77b71d84_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:info.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  89 => 21,  84 => 20,  75 => 19,  61 => 14,  55 => 12,  46 => 11,  36 => 1,  34 => 7,  33 => 6,  32 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% set messages = {
    'no_token' : {
        status:  'error',
        title:   (token|default('') == 'latest') ? 'There are no profiles' : 'Token not found',
        message: (token|default('') == 'latest') ? 'No profiles found in the database.' : 'Token \"' ~ token|default('') ~ '\" was not found in the database.'
    }
} %}

{% block summary %}
    <div class=\"status status-{{ messages[about].status }}\">
        <div class=\"container\">
            <h2>{{ messages[about].status|title }}</h2>
        </div>
    </div>
{% endblock %}

{% block panel %}
    <h2>{{ messages[about].title }}</h2>
    <p>{{ messages[about].message }}</p>
{% endblock %}
", "WebProfilerBundle:Profiler:info.html.twig", "/var/www/html/vg-api/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/info.html.twig");
    }
}
