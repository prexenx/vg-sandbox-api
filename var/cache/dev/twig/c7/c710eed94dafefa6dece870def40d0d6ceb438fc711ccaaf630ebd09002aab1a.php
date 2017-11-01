<?php

/* WebProfilerBundle:Profiler:toolbar_redirect.html.twig */
class __TwigTemplate_777a7a9b327085f24bf97568393455d4a39fee819858ea242c95c32c1da5a4f4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_468b07b77b96f29f8dc210385cf8b29e430fd9a18f952468ef24dc78ef0a64af = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_468b07b77b96f29f8dc210385cf8b29e430fd9a18f952468ef24dc78ef0a64af->enter($__internal_468b07b77b96f29f8dc210385cf8b29e430fd9a18f952468ef24dc78ef0a64af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $__internal_32d14aa319c491f3f1b123ad6dde0eab95a7005faf8558710bf9b4507491959f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_32d14aa319c491f3f1b123ad6dde0eab95a7005faf8558710bf9b4507491959f->enter($__internal_32d14aa319c491f3f1b123ad6dde0eab95a7005faf8558710bf9b4507491959f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_468b07b77b96f29f8dc210385cf8b29e430fd9a18f952468ef24dc78ef0a64af->leave($__internal_468b07b77b96f29f8dc210385cf8b29e430fd9a18f952468ef24dc78ef0a64af_prof);

        
        $__internal_32d14aa319c491f3f1b123ad6dde0eab95a7005faf8558710bf9b4507491959f->leave($__internal_32d14aa319c491f3f1b123ad6dde0eab95a7005faf8558710bf9b4507491959f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_d09099d13f1d1696c4872118d2ffa2bb1a0f38003726836fb943bbbe0acfff7e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d09099d13f1d1696c4872118d2ffa2bb1a0f38003726836fb943bbbe0acfff7e->enter($__internal_d09099d13f1d1696c4872118d2ffa2bb1a0f38003726836fb943bbbe0acfff7e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_a752c950868dd9e999ea2d13780fd9bab48b6cfed8728855a001d324b11ce8d0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a752c950868dd9e999ea2d13780fd9bab48b6cfed8728855a001d324b11ce8d0->enter($__internal_a752c950868dd9e999ea2d13780fd9bab48b6cfed8728855a001d324b11ce8d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_a752c950868dd9e999ea2d13780fd9bab48b6cfed8728855a001d324b11ce8d0->leave($__internal_a752c950868dd9e999ea2d13780fd9bab48b6cfed8728855a001d324b11ce8d0_prof);

        
        $__internal_d09099d13f1d1696c4872118d2ffa2bb1a0f38003726836fb943bbbe0acfff7e->leave($__internal_d09099d13f1d1696c4872118d2ffa2bb1a0f38003726836fb943bbbe0acfff7e_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_a5557d6924e9e383a6d03ebdd5739a26885174f73b3bc974fb328c2a334a4196 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a5557d6924e9e383a6d03ebdd5739a26885174f73b3bc974fb328c2a334a4196->enter($__internal_a5557d6924e9e383a6d03ebdd5739a26885174f73b3bc974fb328c2a334a4196_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_4ee99b3250a6e5b46feb39133fc11ac52741731f35a4755a52479abb3e12d483 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4ee99b3250a6e5b46feb39133fc11ac52741731f35a4755a52479abb3e12d483->enter($__internal_4ee99b3250a6e5b46feb39133fc11ac52741731f35a4755a52479abb3e12d483_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
        
        $__internal_4ee99b3250a6e5b46feb39133fc11ac52741731f35a4755a52479abb3e12d483->leave($__internal_4ee99b3250a6e5b46feb39133fc11ac52741731f35a4755a52479abb3e12d483_prof);

        
        $__internal_a5557d6924e9e383a6d03ebdd5739a26885174f73b3bc974fb328c2a334a4196->leave($__internal_a5557d6924e9e383a6d03ebdd5739a26885174f73b3bc974fb328c2a334a4196_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 8,  68 => 6,  59 => 5,  41 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block title 'Redirection Intercepted' %}

{% block body %}
    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"{{ location }}\">{{ location }}</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
{% endblock %}
", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", "/var/www/html/vg-api/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/toolbar_redirect.html.twig");
    }
}
