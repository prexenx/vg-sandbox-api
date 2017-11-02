<?php

/* WebProfilerBundle:Collector:exception.html.twig */
class __TwigTemplate_eea103b01954e5a2ff17745badd28aa3acd578cb05991c3878591f306da66ec9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a3e1759d845f6a34c31353c35eb144230533f6adcf0009222a0dbe8fac917792 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a3e1759d845f6a34c31353c35eb144230533f6adcf0009222a0dbe8fac917792->enter($__internal_a3e1759d845f6a34c31353c35eb144230533f6adcf0009222a0dbe8fac917792_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $__internal_91427ab436392b9112a275666d9dda4b3e0f129062edbabda346d5e0bb27d314 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_91427ab436392b9112a275666d9dda4b3e0f129062edbabda346d5e0bb27d314->enter($__internal_91427ab436392b9112a275666d9dda4b3e0f129062edbabda346d5e0bb27d314_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a3e1759d845f6a34c31353c35eb144230533f6adcf0009222a0dbe8fac917792->leave($__internal_a3e1759d845f6a34c31353c35eb144230533f6adcf0009222a0dbe8fac917792_prof);

        
        $__internal_91427ab436392b9112a275666d9dda4b3e0f129062edbabda346d5e0bb27d314->leave($__internal_91427ab436392b9112a275666d9dda4b3e0f129062edbabda346d5e0bb27d314_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_eb33509e39c72aa8c9ed71869a6af39699d83b45277071cc51dacdca0cb0df8e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_eb33509e39c72aa8c9ed71869a6af39699d83b45277071cc51dacdca0cb0df8e->enter($__internal_eb33509e39c72aa8c9ed71869a6af39699d83b45277071cc51dacdca0cb0df8e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_db441ceab7afab647706e1173257747f4491d8755f91ed6af6e87a531a4456b2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_db441ceab7afab647706e1173257747f4491d8755f91ed6af6e87a531a4456b2->enter($__internal_db441ceab7afab647706e1173257747f4491d8755f91ed6af6e87a531a4456b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_db441ceab7afab647706e1173257747f4491d8755f91ed6af6e87a531a4456b2->leave($__internal_db441ceab7afab647706e1173257747f4491d8755f91ed6af6e87a531a4456b2_prof);

        
        $__internal_eb33509e39c72aa8c9ed71869a6af39699d83b45277071cc51dacdca0cb0df8e->leave($__internal_eb33509e39c72aa8c9ed71869a6af39699d83b45277071cc51dacdca0cb0df8e_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_626b9c2799eb85995c5a0585c1153f989662e228665e9cfe0088084c3f2d49f0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_626b9c2799eb85995c5a0585c1153f989662e228665e9cfe0088084c3f2d49f0->enter($__internal_626b9c2799eb85995c5a0585c1153f989662e228665e9cfe0088084c3f2d49f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_b50b790832ef9f2cddc7e237f06b5dbd1e22c7bbd824f73ba91fa827b7859676 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b50b790832ef9f2cddc7e237f06b5dbd1e22c7bbd824f73ba91fa827b7859676->enter($__internal_b50b790832ef9f2cddc7e237f06b5dbd1e22c7bbd824f73ba91fa827b7859676_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_b50b790832ef9f2cddc7e237f06b5dbd1e22c7bbd824f73ba91fa827b7859676->leave($__internal_b50b790832ef9f2cddc7e237f06b5dbd1e22c7bbd824f73ba91fa827b7859676_prof);

        
        $__internal_626b9c2799eb85995c5a0585c1153f989662e228665e9cfe0088084c3f2d49f0->leave($__internal_626b9c2799eb85995c5a0585c1153f989662e228665e9cfe0088084c3f2d49f0_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_9532e78882d548766e9bf79ab300bf11ddfeba3e89318eb9e443f993f665a6ba = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9532e78882d548766e9bf79ab300bf11ddfeba3e89318eb9e443f993f665a6ba->enter($__internal_9532e78882d548766e9bf79ab300bf11ddfeba3e89318eb9e443f993f665a6ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_7cae2adc5ee94f37f2a2751184359171b903e385625548441d07a71b16426093 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7cae2adc5ee94f37f2a2751184359171b903e385625548441d07a71b16426093->enter($__internal_7cae2adc5ee94f37f2a2751184359171b903e385625548441d07a71b16426093_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_7cae2adc5ee94f37f2a2751184359171b903e385625548441d07a71b16426093->leave($__internal_7cae2adc5ee94f37f2a2751184359171b903e385625548441d07a71b16426093_prof);

        
        $__internal_9532e78882d548766e9bf79ab300bf11ddfeba3e89318eb9e443f993f665a6ba->leave($__internal_9532e78882d548766e9bf79ab300bf11ddfeba3e89318eb9e443f993f665a6ba_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 33,  135 => 32,  129 => 28,  127 => 27,  123 => 25,  114 => 24,  103 => 21,  97 => 17,  95 => 16,  90 => 14,  85 => 13,  76 => 12,  63 => 9,  57 => 6,  54 => 5,  51 => 4,  42 => 3,  11 => 1,);
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

{% block head %}
    {% if collector.hasexception %}
        <style>
            {{ render(path('_profiler_exception_css', { token: token })) }}
        </style>
    {% endif %}
    {{ parent() }}
{% endblock %}

{% block menu %}
    <span class=\"label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/exception.svg') }}</span>
        <strong>Exception</strong>
        {% if collector.hasexception %}
            <span class=\"count\">
                <span>1</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    <h2>Exceptions</h2>

    {% if not collector.hasexception %}
        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    {% else %}
        <div class=\"sf-reset\">
            {{ render(path('_profiler_exception', { token: token })) }}
        </div>
    {% endif %}
{% endblock %}
", "WebProfilerBundle:Collector:exception.html.twig", "/var/www/html/vg-api/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/exception.html.twig");
    }
}
