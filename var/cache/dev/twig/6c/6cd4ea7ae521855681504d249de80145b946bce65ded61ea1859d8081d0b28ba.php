<?php

/* WebProfilerBundle:Collector:ajax.html.twig */
class __TwigTemplate_bf636c72382727f158163e84ef54c7a4d84ddd21881a9d64d702f7a8ffad194d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:ajax.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f271a1ee774e4a0ce9e6a2ace2d553f5f064755379d4e625d2348829965fa66a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f271a1ee774e4a0ce9e6a2ace2d553f5f064755379d4e625d2348829965fa66a->enter($__internal_f271a1ee774e4a0ce9e6a2ace2d553f5f064755379d4e625d2348829965fa66a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:ajax.html.twig"));

        $__internal_a254405d58a374b7aa6061400c1a80ceabb76e52e704545c17b73ee8f966c04e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a254405d58a374b7aa6061400c1a80ceabb76e52e704545c17b73ee8f966c04e->enter($__internal_a254405d58a374b7aa6061400c1a80ceabb76e52e704545c17b73ee8f966c04e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f271a1ee774e4a0ce9e6a2ace2d553f5f064755379d4e625d2348829965fa66a->leave($__internal_f271a1ee774e4a0ce9e6a2ace2d553f5f064755379d4e625d2348829965fa66a_prof);

        
        $__internal_a254405d58a374b7aa6061400c1a80ceabb76e52e704545c17b73ee8f966c04e->leave($__internal_a254405d58a374b7aa6061400c1a80ceabb76e52e704545c17b73ee8f966c04e_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_05356b3584b17a0e7885498b633fd4be2044a1c64c1b970fb92875daa5fa9895 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_05356b3584b17a0e7885498b633fd4be2044a1c64c1b970fb92875daa5fa9895->enter($__internal_05356b3584b17a0e7885498b633fd4be2044a1c64c1b970fb92875daa5fa9895_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_90cf7c5538441183b35833d914c889e90e12da288f25df0bb19020e7c948c695 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_90cf7c5538441183b35833d914c889e90e12da288f25df0bb19020e7c948c695->enter($__internal_90cf7c5538441183b35833d914c889e90e12da288f25df0bb19020e7c948c695_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        // line 4
        echo "    ";
        ob_start();
        // line 5
        echo "        ";
        echo twig_include($this->env, $context, "@WebProfiler/Icon/ajax.svg");
        echo "
        <span class=\"sf-toolbar-value sf-toolbar-ajax-request-counter\">0</span>
    ";
        $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 8
        echo "
    ";
        // line 9
        $context["text"] = ('' === $tmp = "        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    ") ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 29
        echo "
    ";
        // line 30
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/toolbar_item.html.twig", array("link" => false));
        echo "
";
        
        $__internal_90cf7c5538441183b35833d914c889e90e12da288f25df0bb19020e7c948c695->leave($__internal_90cf7c5538441183b35833d914c889e90e12da288f25df0bb19020e7c948c695_prof);

        
        $__internal_05356b3584b17a0e7885498b633fd4be2044a1c64c1b970fb92875daa5fa9895->leave($__internal_05356b3584b17a0e7885498b633fd4be2044a1c64c1b970fb92875daa5fa9895_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:ajax.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 30,  82 => 29,  62 => 9,  59 => 8,  52 => 5,  49 => 4,  40 => 3,  11 => 1,);
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

{% block toolbar %}
    {% set icon %}
        {{ include('@WebProfiler/Icon/ajax.svg') }}
        <span class=\"sf-toolbar-value sf-toolbar-ajax-request-counter\">0</span>
    {% endset %}

    {% set text %}
        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    {% endset %}

    {{ include('@WebProfiler/Profiler/toolbar_item.html.twig', { link: false }) }}
{% endblock %}
", "WebProfilerBundle:Collector:ajax.html.twig", "/var/www/html/vg-api/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/ajax.html.twig");
    }
}
