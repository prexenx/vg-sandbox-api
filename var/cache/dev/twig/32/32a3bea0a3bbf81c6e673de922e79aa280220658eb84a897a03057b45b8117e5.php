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
        $__internal_0615dbf5b329004c1ce9528f8e4e44954c0f29426aae8a867483f0df046c2e4f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0615dbf5b329004c1ce9528f8e4e44954c0f29426aae8a867483f0df046c2e4f->enter($__internal_0615dbf5b329004c1ce9528f8e4e44954c0f29426aae8a867483f0df046c2e4f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:open.html.twig"));

        $__internal_e886e2b8d75243548b510b71fb04df4e8b3ef9bbab1defba951fd6029f78e087 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e886e2b8d75243548b510b71fb04df4e8b3ef9bbab1defba951fd6029f78e087->enter($__internal_e886e2b8d75243548b510b71fb04df4e8b3ef9bbab1defba951fd6029f78e087_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:open.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0615dbf5b329004c1ce9528f8e4e44954c0f29426aae8a867483f0df046c2e4f->leave($__internal_0615dbf5b329004c1ce9528f8e4e44954c0f29426aae8a867483f0df046c2e4f_prof);

        
        $__internal_e886e2b8d75243548b510b71fb04df4e8b3ef9bbab1defba951fd6029f78e087->leave($__internal_e886e2b8d75243548b510b71fb04df4e8b3ef9bbab1defba951fd6029f78e087_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_f3592bea76c1a3c2e87e603da818b20cc358b0bd59cc2e0d62794c88c78d41b5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f3592bea76c1a3c2e87e603da818b20cc358b0bd59cc2e0d62794c88c78d41b5->enter($__internal_f3592bea76c1a3c2e87e603da818b20cc358b0bd59cc2e0d62794c88c78d41b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_0a1e6ef95a2744fff513efead0cd6fc4c3b4799fa8f82fbc92827645699713a8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0a1e6ef95a2744fff513efead0cd6fc4c3b4799fa8f82fbc92827645699713a8->enter($__internal_0a1e6ef95a2744fff513efead0cd6fc4c3b4799fa8f82fbc92827645699713a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        ";
        // line 5
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/open.css.twig");
        echo "
    </style>
";
        
        $__internal_0a1e6ef95a2744fff513efead0cd6fc4c3b4799fa8f82fbc92827645699713a8->leave($__internal_0a1e6ef95a2744fff513efead0cd6fc4c3b4799fa8f82fbc92827645699713a8_prof);

        
        $__internal_f3592bea76c1a3c2e87e603da818b20cc358b0bd59cc2e0d62794c88c78d41b5->leave($__internal_f3592bea76c1a3c2e87e603da818b20cc358b0bd59cc2e0d62794c88c78d41b5_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_0f7c1a7b8ccb530677f313319f58a8f17a485f154428a36a25b3dba28c6df9f2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0f7c1a7b8ccb530677f313319f58a8f17a485f154428a36a25b3dba28c6df9f2->enter($__internal_0f7c1a7b8ccb530677f313319f58a8f17a485f154428a36a25b3dba28c6df9f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_f4bcd50a9a7ae59f39a3d579aad8a2d81b7b0ce1d2af9ccd3ecc686b1c54dc15 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f4bcd50a9a7ae59f39a3d579aad8a2d81b7b0ce1d2af9ccd3ecc686b1c54dc15->enter($__internal_f4bcd50a9a7ae59f39a3d579aad8a2d81b7b0ce1d2af9ccd3ecc686b1c54dc15_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_f4bcd50a9a7ae59f39a3d579aad8a2d81b7b0ce1d2af9ccd3ecc686b1c54dc15->leave($__internal_f4bcd50a9a7ae59f39a3d579aad8a2d81b7b0ce1d2af9ccd3ecc686b1c54dc15_prof);

        
        $__internal_0f7c1a7b8ccb530677f313319f58a8f17a485f154428a36a25b3dba28c6df9f2->leave($__internal_0f7c1a7b8ccb530677f313319f58a8f17a485f154428a36a25b3dba28c6df9f2_prof);

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
