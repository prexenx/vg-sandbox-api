<?php

/* WebProfilerBundle:Profiler:open.html.twig */
class __TwigTemplate_41a4f428285cf8048b32852885389c9b4f854e9a95c531bcbc95978060c0536c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/base.html.twig", "WebProfilerBundle:Profiler:open.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c955238a3c24f5dd237e91e29ef37a5db6567384b9a66408df673550b37f4a71 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c955238a3c24f5dd237e91e29ef37a5db6567384b9a66408df673550b37f4a71->enter($__internal_c955238a3c24f5dd237e91e29ef37a5db6567384b9a66408df673550b37f4a71_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:open.html.twig"));

        $__internal_7df89bbfa62c8a3dfb9776cfe9fb79291fe245dac09c2fc071dcbafe32154e15 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7df89bbfa62c8a3dfb9776cfe9fb79291fe245dac09c2fc071dcbafe32154e15->enter($__internal_7df89bbfa62c8a3dfb9776cfe9fb79291fe245dac09c2fc071dcbafe32154e15_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:open.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c955238a3c24f5dd237e91e29ef37a5db6567384b9a66408df673550b37f4a71->leave($__internal_c955238a3c24f5dd237e91e29ef37a5db6567384b9a66408df673550b37f4a71_prof);

        
        $__internal_7df89bbfa62c8a3dfb9776cfe9fb79291fe245dac09c2fc071dcbafe32154e15->leave($__internal_7df89bbfa62c8a3dfb9776cfe9fb79291fe245dac09c2fc071dcbafe32154e15_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_c1db6100f37d34ed399e5de602ce336a3e5c828c818e1acb89272bdb54f5bb6c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c1db6100f37d34ed399e5de602ce336a3e5c828c818e1acb89272bdb54f5bb6c->enter($__internal_c1db6100f37d34ed399e5de602ce336a3e5c828c818e1acb89272bdb54f5bb6c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_ec20baa464ead6266a4fe2d9e0583f8b9eb6c1af716c1c3f1e93f0439433cfb3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ec20baa464ead6266a4fe2d9e0583f8b9eb6c1af716c1c3f1e93f0439433cfb3->enter($__internal_ec20baa464ead6266a4fe2d9e0583f8b9eb6c1af716c1c3f1e93f0439433cfb3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        ";
        // line 5
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/open.css.twig");
        echo "
    </style>
";
        
        $__internal_ec20baa464ead6266a4fe2d9e0583f8b9eb6c1af716c1c3f1e93f0439433cfb3->leave($__internal_ec20baa464ead6266a4fe2d9e0583f8b9eb6c1af716c1c3f1e93f0439433cfb3_prof);

        
        $__internal_c1db6100f37d34ed399e5de602ce336a3e5c828c818e1acb89272bdb54f5bb6c->leave($__internal_c1db6100f37d34ed399e5de602ce336a3e5c828c818e1acb89272bdb54f5bb6c_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_51c8584f06c4ae7dfc6ab360936ff92071efb791764f3e4b243750de9156d589 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_51c8584f06c4ae7dfc6ab360936ff92071efb791764f3e4b243750de9156d589->enter($__internal_51c8584f06c4ae7dfc6ab360936ff92071efb791764f3e4b243750de9156d589_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_85fbca2249598c870a49415872c42591d277c3fb8d8e24b483e708fadada2db4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_85fbca2249598c870a49415872c42591d277c3fb8d8e24b483e708fadada2db4->enter($__internal_85fbca2249598c870a49415872c42591d277c3fb8d8e24b483e708fadada2db4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "<div class=\"header\">
    <h1>";
        // line 11
        echo twig_escape_filter($this->env, (isset($context["file"]) ? $context["file"] : $this->getContext($context, "file")), "html", null, true);
        echo " <small>line ";
        echo twig_escape_filter($this->env, (isset($context["line"]) ? $context["line"] : $this->getContext($context, "line")), "html", null, true);
        echo "</small></h1>
    <a class=\"doc\" href=\"https://symfony.com/doc/";
        // line 12
        echo twig_escape_filter($this->env, twig_constant("Symfony\\Component\\HttpKernel\\Kernel::VERSION"), "html", null, true);
        echo "/reference/configuration/framework.html#ide\" rel=\"help\">Open in your IDE?</a>
</div>
<div class=\"source\">
    ";
        // line 15
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\CodeExtension')->fileExcerpt((isset($context["filename"]) ? $context["filename"] : $this->getContext($context, "filename")), (isset($context["line"]) ? $context["line"] : $this->getContext($context, "line")),  -1);
        echo "
</div>
";
        
        $__internal_85fbca2249598c870a49415872c42591d277c3fb8d8e24b483e708fadada2db4->leave($__internal_85fbca2249598c870a49415872c42591d277c3fb8d8e24b483e708fadada2db4_prof);

        
        $__internal_51c8584f06c4ae7dfc6ab360936ff92071efb791764f3e4b243750de9156d589->leave($__internal_51c8584f06c4ae7dfc6ab360936ff92071efb791764f3e4b243750de9156d589_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:open.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 15,  84 => 12,  78 => 11,  75 => 10,  66 => 9,  53 => 5,  50 => 4,  41 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/base.html.twig' %}

{% block head %}
    <style>
        {{ include('@WebProfiler/Profiler/open.css.twig') }}
    </style>
{% endblock %}

{% block body %}
<div class=\"header\">
    <h1>{{ file }} <small>line {{ line }}</small></h1>
    <a class=\"doc\" href=\"https://symfony.com/doc/{{ constant('Symfony\\\\Component\\\\HttpKernel\\\\Kernel::VERSION') }}/reference/configuration/framework.html#ide\" rel=\"help\">Open in your IDE?</a>
</div>
<div class=\"source\">
    {{ filename|file_excerpt(line, -1) }}
</div>
{% endblock %}
", "WebProfilerBundle:Profiler:open.html.twig", "/var/www/html/vg-api/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/open.html.twig");
    }
}
