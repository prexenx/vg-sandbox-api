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
        $__internal_13ee121abe626e1b53b8fc908b19b5d8ae86af0a646643b10799cf701e242c71 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_13ee121abe626e1b53b8fc908b19b5d8ae86af0a646643b10799cf701e242c71->enter($__internal_13ee121abe626e1b53b8fc908b19b5d8ae86af0a646643b10799cf701e242c71_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:info.html.twig"));

        $__internal_1509c6f0993a3240f959f5ea6137f3a1e6f3bbeaf9b5da1ad08edc623e0efd13 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1509c6f0993a3240f959f5ea6137f3a1e6f3bbeaf9b5da1ad08edc623e0efd13->enter($__internal_1509c6f0993a3240f959f5ea6137f3a1e6f3bbeaf9b5da1ad08edc623e0efd13_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:info.html.twig"));

        // line 3
        $context["messages"] = array("no_token" => array("status" => "error", "title" => (((((        // line 6
array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("There are no profiles") : ("Token not found")), "message" => (((((        // line 7
array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("No profiles found in the database.") : ((("Token \"" . ((array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "")) : (""))) . "\" was not found in the database.")))));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_13ee121abe626e1b53b8fc908b19b5d8ae86af0a646643b10799cf701e242c71->leave($__internal_13ee121abe626e1b53b8fc908b19b5d8ae86af0a646643b10799cf701e242c71_prof);

        
        $__internal_1509c6f0993a3240f959f5ea6137f3a1e6f3bbeaf9b5da1ad08edc623e0efd13->leave($__internal_1509c6f0993a3240f959f5ea6137f3a1e6f3bbeaf9b5da1ad08edc623e0efd13_prof);

    }

    // line 11
    public function block_summary($context, array $blocks = array())
    {
        $__internal_44353a1d383945d891826eb86b0fe65b5eade10af125cee1b73ec3eb7c7962c9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_44353a1d383945d891826eb86b0fe65b5eade10af125cee1b73ec3eb7c7962c9->enter($__internal_44353a1d383945d891826eb86b0fe65b5eade10af125cee1b73ec3eb7c7962c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        $__internal_e113eca1c676e22ab4ca0bfef01ff4c2181afc1695615dca23b0467cf680001d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e113eca1c676e22ab4ca0bfef01ff4c2181afc1695615dca23b0467cf680001d->enter($__internal_e113eca1c676e22ab4ca0bfef01ff4c2181afc1695615dca23b0467cf680001d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

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
        
        $__internal_e113eca1c676e22ab4ca0bfef01ff4c2181afc1695615dca23b0467cf680001d->leave($__internal_e113eca1c676e22ab4ca0bfef01ff4c2181afc1695615dca23b0467cf680001d_prof);

        
        $__internal_44353a1d383945d891826eb86b0fe65b5eade10af125cee1b73ec3eb7c7962c9->leave($__internal_44353a1d383945d891826eb86b0fe65b5eade10af125cee1b73ec3eb7c7962c9_prof);

    }

    // line 19
    public function block_panel($context, array $blocks = array())
    {
        $__internal_cc33a7f3718869efcc8dee3d1e095486af8eb6263a1b06c136c5094071241e94 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cc33a7f3718869efcc8dee3d1e095486af8eb6263a1b06c136c5094071241e94->enter($__internal_cc33a7f3718869efcc8dee3d1e095486af8eb6263a1b06c136c5094071241e94_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_d517dd29f1539f993beab503766d4f83954f0180cf075589ac6fbfc4f30f13fc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d517dd29f1539f993beab503766d4f83954f0180cf075589ac6fbfc4f30f13fc->enter($__internal_d517dd29f1539f993beab503766d4f83954f0180cf075589ac6fbfc4f30f13fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 20
        echo "    <h2>";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["messages"]) ? $context["messages"] : $this->getContext($context, "messages")), (isset($context["about"]) ? $context["about"] : $this->getContext($context, "about")), array(), "array"), "title", array()), "html", null, true);
        echo "</h2>
    <p>";
        // line 21
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["messages"]) ? $context["messages"] : $this->getContext($context, "messages")), (isset($context["about"]) ? $context["about"] : $this->getContext($context, "about")), array(), "array"), "message", array()), "html", null, true);
        echo "</p>
";
        
        $__internal_d517dd29f1539f993beab503766d4f83954f0180cf075589ac6fbfc4f30f13fc->leave($__internal_d517dd29f1539f993beab503766d4f83954f0180cf075589ac6fbfc4f30f13fc_prof);

        
        $__internal_cc33a7f3718869efcc8dee3d1e095486af8eb6263a1b06c136c5094071241e94->leave($__internal_cc33a7f3718869efcc8dee3d1e095486af8eb6263a1b06c136c5094071241e94_prof);

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
