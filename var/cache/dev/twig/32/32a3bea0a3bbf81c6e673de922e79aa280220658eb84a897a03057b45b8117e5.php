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
        $__internal_9fb47a2aa04a330705227e648219a67d313cd418156b98f13114216778cf5027 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9fb47a2aa04a330705227e648219a67d313cd418156b98f13114216778cf5027->enter($__internal_9fb47a2aa04a330705227e648219a67d313cd418156b98f13114216778cf5027_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:open.html.twig"));

        $__internal_744a97e74ce7067083d480ea909051c57eee63160ff9a41029ff914e10da24fe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_744a97e74ce7067083d480ea909051c57eee63160ff9a41029ff914e10da24fe->enter($__internal_744a97e74ce7067083d480ea909051c57eee63160ff9a41029ff914e10da24fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:open.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9fb47a2aa04a330705227e648219a67d313cd418156b98f13114216778cf5027->leave($__internal_9fb47a2aa04a330705227e648219a67d313cd418156b98f13114216778cf5027_prof);

        
        $__internal_744a97e74ce7067083d480ea909051c57eee63160ff9a41029ff914e10da24fe->leave($__internal_744a97e74ce7067083d480ea909051c57eee63160ff9a41029ff914e10da24fe_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_5931ccd3d5bf588500a0569ed28ff7e24b61ed954a47cbf48ba2fc934b11d1de = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5931ccd3d5bf588500a0569ed28ff7e24b61ed954a47cbf48ba2fc934b11d1de->enter($__internal_5931ccd3d5bf588500a0569ed28ff7e24b61ed954a47cbf48ba2fc934b11d1de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_bc380d2d52054a1468868285a54408599ffd5478035bb3e966e9b0536b03aec8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bc380d2d52054a1468868285a54408599ffd5478035bb3e966e9b0536b03aec8->enter($__internal_bc380d2d52054a1468868285a54408599ffd5478035bb3e966e9b0536b03aec8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        ";
        // line 5
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/open.css.twig");
        echo "
    </style>
";
        
        $__internal_bc380d2d52054a1468868285a54408599ffd5478035bb3e966e9b0536b03aec8->leave($__internal_bc380d2d52054a1468868285a54408599ffd5478035bb3e966e9b0536b03aec8_prof);

        
        $__internal_5931ccd3d5bf588500a0569ed28ff7e24b61ed954a47cbf48ba2fc934b11d1de->leave($__internal_5931ccd3d5bf588500a0569ed28ff7e24b61ed954a47cbf48ba2fc934b11d1de_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_dc2530c9a1dc18dadeb52c95dbfe00dc37739d96a651bed601539e29f68de869 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dc2530c9a1dc18dadeb52c95dbfe00dc37739d96a651bed601539e29f68de869->enter($__internal_dc2530c9a1dc18dadeb52c95dbfe00dc37739d96a651bed601539e29f68de869_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_a04fd616fcb439cd174b7f00dcf09913f9412e18f6d531d7412d7a6acd16bde1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a04fd616fcb439cd174b7f00dcf09913f9412e18f6d531d7412d7a6acd16bde1->enter($__internal_a04fd616fcb439cd174b7f00dcf09913f9412e18f6d531d7412d7a6acd16bde1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_a04fd616fcb439cd174b7f00dcf09913f9412e18f6d531d7412d7a6acd16bde1->leave($__internal_a04fd616fcb439cd174b7f00dcf09913f9412e18f6d531d7412d7a6acd16bde1_prof);

        
        $__internal_dc2530c9a1dc18dadeb52c95dbfe00dc37739d96a651bed601539e29f68de869->leave($__internal_dc2530c9a1dc18dadeb52c95dbfe00dc37739d96a651bed601539e29f68de869_prof);

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
