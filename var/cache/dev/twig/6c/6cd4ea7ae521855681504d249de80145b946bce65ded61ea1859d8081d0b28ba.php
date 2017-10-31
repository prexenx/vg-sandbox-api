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
        $__internal_c24d97d084f48bcdcb2e74095cc963cd4ddd235fcc3d433b1301f36a1cb578f8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c24d97d084f48bcdcb2e74095cc963cd4ddd235fcc3d433b1301f36a1cb578f8->enter($__internal_c24d97d084f48bcdcb2e74095cc963cd4ddd235fcc3d433b1301f36a1cb578f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:ajax.html.twig"));

        $__internal_d86566b14c12b66bcb607094424ac658a947a5803d1d4b28aca21b86ef6e1441 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d86566b14c12b66bcb607094424ac658a947a5803d1d4b28aca21b86ef6e1441->enter($__internal_d86566b14c12b66bcb607094424ac658a947a5803d1d4b28aca21b86ef6e1441_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c24d97d084f48bcdcb2e74095cc963cd4ddd235fcc3d433b1301f36a1cb578f8->leave($__internal_c24d97d084f48bcdcb2e74095cc963cd4ddd235fcc3d433b1301f36a1cb578f8_prof);

        
        $__internal_d86566b14c12b66bcb607094424ac658a947a5803d1d4b28aca21b86ef6e1441->leave($__internal_d86566b14c12b66bcb607094424ac658a947a5803d1d4b28aca21b86ef6e1441_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_31408acca4ccf93f780b1803e15101be97ec915b93b0111589213cd27947e733 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_31408acca4ccf93f780b1803e15101be97ec915b93b0111589213cd27947e733->enter($__internal_31408acca4ccf93f780b1803e15101be97ec915b93b0111589213cd27947e733_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_7d8db5f357b02aa1edf63d74e9239f6f571879d280d3e98d65c67e39f5d4bc99 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7d8db5f357b02aa1edf63d74e9239f6f571879d280d3e98d65c67e39f5d4bc99->enter($__internal_7d8db5f357b02aa1edf63d74e9239f6f571879d280d3e98d65c67e39f5d4bc99_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

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
        
        $__internal_7d8db5f357b02aa1edf63d74e9239f6f571879d280d3e98d65c67e39f5d4bc99->leave($__internal_7d8db5f357b02aa1edf63d74e9239f6f571879d280d3e98d65c67e39f5d4bc99_prof);

        
        $__internal_31408acca4ccf93f780b1803e15101be97ec915b93b0111589213cd27947e733->leave($__internal_31408acca4ccf93f780b1803e15101be97ec915b93b0111589213cd27947e733_prof);

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
