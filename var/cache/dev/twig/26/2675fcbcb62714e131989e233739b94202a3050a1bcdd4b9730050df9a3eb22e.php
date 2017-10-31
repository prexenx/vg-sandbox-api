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
        $__internal_752b0648c38e175bbe3a9d41f68e91a353a074bd28f3e2ad291bd2d336f5886e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_752b0648c38e175bbe3a9d41f68e91a353a074bd28f3e2ad291bd2d336f5886e->enter($__internal_752b0648c38e175bbe3a9d41f68e91a353a074bd28f3e2ad291bd2d336f5886e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $__internal_386322e17921f5f6486259ff0afbbd5a79f21d644fe7f4fd4a7fde2442e93715 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_386322e17921f5f6486259ff0afbbd5a79f21d644fe7f4fd4a7fde2442e93715->enter($__internal_386322e17921f5f6486259ff0afbbd5a79f21d644fe7f4fd4a7fde2442e93715_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_752b0648c38e175bbe3a9d41f68e91a353a074bd28f3e2ad291bd2d336f5886e->leave($__internal_752b0648c38e175bbe3a9d41f68e91a353a074bd28f3e2ad291bd2d336f5886e_prof);

        
        $__internal_386322e17921f5f6486259ff0afbbd5a79f21d644fe7f4fd4a7fde2442e93715->leave($__internal_386322e17921f5f6486259ff0afbbd5a79f21d644fe7f4fd4a7fde2442e93715_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_664f389f47fb7e36fa0e4b7156f7e41df5b3fce25000a5b89f763299b69968f8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_664f389f47fb7e36fa0e4b7156f7e41df5b3fce25000a5b89f763299b69968f8->enter($__internal_664f389f47fb7e36fa0e4b7156f7e41df5b3fce25000a5b89f763299b69968f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_a02cb806abe296ef6e86ede07f0dba30afa3981878f57c641748e239c8a4e2c6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a02cb806abe296ef6e86ede07f0dba30afa3981878f57c641748e239c8a4e2c6->enter($__internal_a02cb806abe296ef6e86ede07f0dba30afa3981878f57c641748e239c8a4e2c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_a02cb806abe296ef6e86ede07f0dba30afa3981878f57c641748e239c8a4e2c6->leave($__internal_a02cb806abe296ef6e86ede07f0dba30afa3981878f57c641748e239c8a4e2c6_prof);

        
        $__internal_664f389f47fb7e36fa0e4b7156f7e41df5b3fce25000a5b89f763299b69968f8->leave($__internal_664f389f47fb7e36fa0e4b7156f7e41df5b3fce25000a5b89f763299b69968f8_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_2d7985a68afc8f443ab30e97e934250ce2018addc780480aa2423233503ba659 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2d7985a68afc8f443ab30e97e934250ce2018addc780480aa2423233503ba659->enter($__internal_2d7985a68afc8f443ab30e97e934250ce2018addc780480aa2423233503ba659_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_24acec2ca526740258866431de3b2541f4ea0b3c93d8ca76684e534fcdd766b2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_24acec2ca526740258866431de3b2541f4ea0b3c93d8ca76684e534fcdd766b2->enter($__internal_24acec2ca526740258866431de3b2541f4ea0b3c93d8ca76684e534fcdd766b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_24acec2ca526740258866431de3b2541f4ea0b3c93d8ca76684e534fcdd766b2->leave($__internal_24acec2ca526740258866431de3b2541f4ea0b3c93d8ca76684e534fcdd766b2_prof);

        
        $__internal_2d7985a68afc8f443ab30e97e934250ce2018addc780480aa2423233503ba659->leave($__internal_2d7985a68afc8f443ab30e97e934250ce2018addc780480aa2423233503ba659_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_5a55c23f755106ed21db7d3fcb3660e17ba60933d30c7438b114ece7b3948ff4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5a55c23f755106ed21db7d3fcb3660e17ba60933d30c7438b114ece7b3948ff4->enter($__internal_5a55c23f755106ed21db7d3fcb3660e17ba60933d30c7438b114ece7b3948ff4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_2afbc3d277260521124a54b8b32fbfbc61916551600b2bc72b4c069a1f6c00aa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2afbc3d277260521124a54b8b32fbfbc61916551600b2bc72b4c069a1f6c00aa->enter($__internal_2afbc3d277260521124a54b8b32fbfbc61916551600b2bc72b4c069a1f6c00aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_2afbc3d277260521124a54b8b32fbfbc61916551600b2bc72b4c069a1f6c00aa->leave($__internal_2afbc3d277260521124a54b8b32fbfbc61916551600b2bc72b4c069a1f6c00aa_prof);

        
        $__internal_5a55c23f755106ed21db7d3fcb3660e17ba60933d30c7438b114ece7b3948ff4->leave($__internal_5a55c23f755106ed21db7d3fcb3660e17ba60933d30c7438b114ece7b3948ff4_prof);

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
