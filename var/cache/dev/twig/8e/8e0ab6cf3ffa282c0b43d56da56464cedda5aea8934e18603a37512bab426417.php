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
        $__internal_129b5405f136c341c8da5be4c00db0219f4363752b88a89e8a76409cba0478cb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_129b5405f136c341c8da5be4c00db0219f4363752b88a89e8a76409cba0478cb->enter($__internal_129b5405f136c341c8da5be4c00db0219f4363752b88a89e8a76409cba0478cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:info.html.twig"));

        $__internal_a7f5d77745ed95ff2052bb0285b71d749af92971f92552a832c31c4599eff2cc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a7f5d77745ed95ff2052bb0285b71d749af92971f92552a832c31c4599eff2cc->enter($__internal_a7f5d77745ed95ff2052bb0285b71d749af92971f92552a832c31c4599eff2cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:info.html.twig"));

        // line 3
        $context["messages"] = array("no_token" => array("status" => "error", "title" => (((((        // line 6
array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("There are no profiles") : ("Token not found")), "message" => (((((        // line 7
array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("No profiles found in the database.") : ((("Token \"" . ((array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "")) : (""))) . "\" was not found in the database.")))));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_129b5405f136c341c8da5be4c00db0219f4363752b88a89e8a76409cba0478cb->leave($__internal_129b5405f136c341c8da5be4c00db0219f4363752b88a89e8a76409cba0478cb_prof);

        
        $__internal_a7f5d77745ed95ff2052bb0285b71d749af92971f92552a832c31c4599eff2cc->leave($__internal_a7f5d77745ed95ff2052bb0285b71d749af92971f92552a832c31c4599eff2cc_prof);

    }

    // line 11
    public function block_summary($context, array $blocks = array())
    {
        $__internal_2c7b25270b6aec55d3d3b174e43a18d0c0d0d7dd3bbd3c2bbc4692ee0e335fdb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2c7b25270b6aec55d3d3b174e43a18d0c0d0d7dd3bbd3c2bbc4692ee0e335fdb->enter($__internal_2c7b25270b6aec55d3d3b174e43a18d0c0d0d7dd3bbd3c2bbc4692ee0e335fdb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        $__internal_58d6ff9e0d2d6ab2dff25f5ebbca4e7517caf5f229c86966225cb34e66e87aa7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_58d6ff9e0d2d6ab2dff25f5ebbca4e7517caf5f229c86966225cb34e66e87aa7->enter($__internal_58d6ff9e0d2d6ab2dff25f5ebbca4e7517caf5f229c86966225cb34e66e87aa7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

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
        
        $__internal_58d6ff9e0d2d6ab2dff25f5ebbca4e7517caf5f229c86966225cb34e66e87aa7->leave($__internal_58d6ff9e0d2d6ab2dff25f5ebbca4e7517caf5f229c86966225cb34e66e87aa7_prof);

        
        $__internal_2c7b25270b6aec55d3d3b174e43a18d0c0d0d7dd3bbd3c2bbc4692ee0e335fdb->leave($__internal_2c7b25270b6aec55d3d3b174e43a18d0c0d0d7dd3bbd3c2bbc4692ee0e335fdb_prof);

    }

    // line 19
    public function block_panel($context, array $blocks = array())
    {
        $__internal_28b226322faed2fcebf6f233271bbab71197a9390d752c27a9b5ace5ea102a4a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_28b226322faed2fcebf6f233271bbab71197a9390d752c27a9b5ace5ea102a4a->enter($__internal_28b226322faed2fcebf6f233271bbab71197a9390d752c27a9b5ace5ea102a4a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_d2d5fc8e27114802941110bb3b27bb006f7dd6d61242434a5182590742802e6b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d2d5fc8e27114802941110bb3b27bb006f7dd6d61242434a5182590742802e6b->enter($__internal_d2d5fc8e27114802941110bb3b27bb006f7dd6d61242434a5182590742802e6b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 20
        echo "    <h2>";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["messages"]) ? $context["messages"] : $this->getContext($context, "messages")), (isset($context["about"]) ? $context["about"] : $this->getContext($context, "about")), array(), "array"), "title", array()), "html", null, true);
        echo "</h2>
    <p>";
        // line 21
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["messages"]) ? $context["messages"] : $this->getContext($context, "messages")), (isset($context["about"]) ? $context["about"] : $this->getContext($context, "about")), array(), "array"), "message", array()), "html", null, true);
        echo "</p>
";
        
        $__internal_d2d5fc8e27114802941110bb3b27bb006f7dd6d61242434a5182590742802e6b->leave($__internal_d2d5fc8e27114802941110bb3b27bb006f7dd6d61242434a5182590742802e6b_prof);

        
        $__internal_28b226322faed2fcebf6f233271bbab71197a9390d752c27a9b5ace5ea102a4a->leave($__internal_28b226322faed2fcebf6f233271bbab71197a9390d752c27a9b5ace5ea102a4a_prof);

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
