<?php

/* WebProfilerBundle:Collector:router.html.twig */
class __TwigTemplate_271a9b21ad867a1e7a96b345af4ead1a42491c8979c3cc449fd0fc8550c1d82d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
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
        $__internal_0777d6e98e10b756201ddfc29126bd08bd7a86ecb6acd29377c64f4c4e804eb9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0777d6e98e10b756201ddfc29126bd08bd7a86ecb6acd29377c64f4c4e804eb9->enter($__internal_0777d6e98e10b756201ddfc29126bd08bd7a86ecb6acd29377c64f4c4e804eb9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $__internal_8516fc7fbad18dfd70802aa4e9f6375f563e98f8faef358b2a2916a3d10190f9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8516fc7fbad18dfd70802aa4e9f6375f563e98f8faef358b2a2916a3d10190f9->enter($__internal_8516fc7fbad18dfd70802aa4e9f6375f563e98f8faef358b2a2916a3d10190f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0777d6e98e10b756201ddfc29126bd08bd7a86ecb6acd29377c64f4c4e804eb9->leave($__internal_0777d6e98e10b756201ddfc29126bd08bd7a86ecb6acd29377c64f4c4e804eb9_prof);

        
        $__internal_8516fc7fbad18dfd70802aa4e9f6375f563e98f8faef358b2a2916a3d10190f9->leave($__internal_8516fc7fbad18dfd70802aa4e9f6375f563e98f8faef358b2a2916a3d10190f9_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_1c47f836037f5c0c39d24b011a4f787e7a0db550a5f0a03604869ba7c7199e6b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1c47f836037f5c0c39d24b011a4f787e7a0db550a5f0a03604869ba7c7199e6b->enter($__internal_1c47f836037f5c0c39d24b011a4f787e7a0db550a5f0a03604869ba7c7199e6b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_d09021bee298f38fb4adb1725768ccaf1b2f6a94609ed21d43b602e0e4b74825 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d09021bee298f38fb4adb1725768ccaf1b2f6a94609ed21d43b602e0e4b74825->enter($__internal_d09021bee298f38fb4adb1725768ccaf1b2f6a94609ed21d43b602e0e4b74825_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_d09021bee298f38fb4adb1725768ccaf1b2f6a94609ed21d43b602e0e4b74825->leave($__internal_d09021bee298f38fb4adb1725768ccaf1b2f6a94609ed21d43b602e0e4b74825_prof);

        
        $__internal_1c47f836037f5c0c39d24b011a4f787e7a0db550a5f0a03604869ba7c7199e6b->leave($__internal_1c47f836037f5c0c39d24b011a4f787e7a0db550a5f0a03604869ba7c7199e6b_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_df76140172d60d623a431d1da56ac225379ab72f31bff8eb5c927a97e4465aed = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_df76140172d60d623a431d1da56ac225379ab72f31bff8eb5c927a97e4465aed->enter($__internal_df76140172d60d623a431d1da56ac225379ab72f31bff8eb5c927a97e4465aed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_022f83257bc0781c701432347a223b2160946971f665c6198959c2ad413a90a2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_022f83257bc0781c701432347a223b2160946971f665c6198959c2ad413a90a2->enter($__internal_022f83257bc0781c701432347a223b2160946971f665c6198959c2ad413a90a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_022f83257bc0781c701432347a223b2160946971f665c6198959c2ad413a90a2->leave($__internal_022f83257bc0781c701432347a223b2160946971f665c6198959c2ad413a90a2_prof);

        
        $__internal_df76140172d60d623a431d1da56ac225379ab72f31bff8eb5c927a97e4465aed->leave($__internal_df76140172d60d623a431d1da56ac225379ab72f31bff8eb5c927a97e4465aed_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_0b6e2babb33b4f4c4b3a867bf22ab9b3e3517727356f138d5da0e8e59eba5c84 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0b6e2babb33b4f4c4b3a867bf22ab9b3e3517727356f138d5da0e8e59eba5c84->enter($__internal_0b6e2babb33b4f4c4b3a867bf22ab9b3e3517727356f138d5da0e8e59eba5c84_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_437ee90774cc67f10f863b3e84750226a9dd8bea33e1ad329f81cf5872311e9f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_437ee90774cc67f10f863b3e84750226a9dd8bea33e1ad329f81cf5872311e9f->enter($__internal_437ee90774cc67f10f863b3e84750226a9dd8bea33e1ad329f81cf5872311e9f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_437ee90774cc67f10f863b3e84750226a9dd8bea33e1ad329f81cf5872311e9f->leave($__internal_437ee90774cc67f10f863b3e84750226a9dd8bea33e1ad329f81cf5872311e9f_prof);

        
        $__internal_0b6e2babb33b4f4c4b3a867bf22ab9b3e3517727356f138d5da0e8e59eba5c84->leave($__internal_0b6e2babb33b4f4c4b3a867bf22ab9b3e3517727356f138d5da0e8e59eba5c84_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 13,  85 => 12,  71 => 7,  68 => 6,  59 => 5,  42 => 3,  11 => 1,);
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

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "WebProfilerBundle:Collector:router.html.twig", "/var/www/html/vg-api/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
