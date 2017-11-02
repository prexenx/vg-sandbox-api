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
        $__internal_434234a5f3cb516a76c4a2471cf72cef30e146b5759bda5957185f586616560e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_434234a5f3cb516a76c4a2471cf72cef30e146b5759bda5957185f586616560e->enter($__internal_434234a5f3cb516a76c4a2471cf72cef30e146b5759bda5957185f586616560e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $__internal_65f9f564c6332fd51072f502b26c10f8c34347ab74ea6c92a9d9b633736ba7a1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_65f9f564c6332fd51072f502b26c10f8c34347ab74ea6c92a9d9b633736ba7a1->enter($__internal_65f9f564c6332fd51072f502b26c10f8c34347ab74ea6c92a9d9b633736ba7a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_434234a5f3cb516a76c4a2471cf72cef30e146b5759bda5957185f586616560e->leave($__internal_434234a5f3cb516a76c4a2471cf72cef30e146b5759bda5957185f586616560e_prof);

        
        $__internal_65f9f564c6332fd51072f502b26c10f8c34347ab74ea6c92a9d9b633736ba7a1->leave($__internal_65f9f564c6332fd51072f502b26c10f8c34347ab74ea6c92a9d9b633736ba7a1_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_f5490c92fc99f90ac43d707f1ce1eb5aae8ba42a1b4a791b4a52ffc26f3ba416 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f5490c92fc99f90ac43d707f1ce1eb5aae8ba42a1b4a791b4a52ffc26f3ba416->enter($__internal_f5490c92fc99f90ac43d707f1ce1eb5aae8ba42a1b4a791b4a52ffc26f3ba416_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_6885252dab2aee8c8f9ec81d03282640962832eec1f93b882e14e696e15d839b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6885252dab2aee8c8f9ec81d03282640962832eec1f93b882e14e696e15d839b->enter($__internal_6885252dab2aee8c8f9ec81d03282640962832eec1f93b882e14e696e15d839b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_6885252dab2aee8c8f9ec81d03282640962832eec1f93b882e14e696e15d839b->leave($__internal_6885252dab2aee8c8f9ec81d03282640962832eec1f93b882e14e696e15d839b_prof);

        
        $__internal_f5490c92fc99f90ac43d707f1ce1eb5aae8ba42a1b4a791b4a52ffc26f3ba416->leave($__internal_f5490c92fc99f90ac43d707f1ce1eb5aae8ba42a1b4a791b4a52ffc26f3ba416_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_7e2fdb1ce266fda89e8fd478517624758442802a767580d2e0822f2bc7067919 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7e2fdb1ce266fda89e8fd478517624758442802a767580d2e0822f2bc7067919->enter($__internal_7e2fdb1ce266fda89e8fd478517624758442802a767580d2e0822f2bc7067919_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_d5271bdb7bf93f59f97130a494dbc4ba82d41a60ebd678a17793ef4d7c242c67 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d5271bdb7bf93f59f97130a494dbc4ba82d41a60ebd678a17793ef4d7c242c67->enter($__internal_d5271bdb7bf93f59f97130a494dbc4ba82d41a60ebd678a17793ef4d7c242c67_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_d5271bdb7bf93f59f97130a494dbc4ba82d41a60ebd678a17793ef4d7c242c67->leave($__internal_d5271bdb7bf93f59f97130a494dbc4ba82d41a60ebd678a17793ef4d7c242c67_prof);

        
        $__internal_7e2fdb1ce266fda89e8fd478517624758442802a767580d2e0822f2bc7067919->leave($__internal_7e2fdb1ce266fda89e8fd478517624758442802a767580d2e0822f2bc7067919_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_b44fcff930eaf22c4661f2c9df801e007c95e29ce187ed15926be719e384d563 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b44fcff930eaf22c4661f2c9df801e007c95e29ce187ed15926be719e384d563->enter($__internal_b44fcff930eaf22c4661f2c9df801e007c95e29ce187ed15926be719e384d563_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_bc5277cf6c537e83f33c89f2be5a05a5c2ea1a62ae5dc577c8aff0b8a4cf8728 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bc5277cf6c537e83f33c89f2be5a05a5c2ea1a62ae5dc577c8aff0b8a4cf8728->enter($__internal_bc5277cf6c537e83f33c89f2be5a05a5c2ea1a62ae5dc577c8aff0b8a4cf8728_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_bc5277cf6c537e83f33c89f2be5a05a5c2ea1a62ae5dc577c8aff0b8a4cf8728->leave($__internal_bc5277cf6c537e83f33c89f2be5a05a5c2ea1a62ae5dc577c8aff0b8a4cf8728_prof);

        
        $__internal_b44fcff930eaf22c4661f2c9df801e007c95e29ce187ed15926be719e384d563->leave($__internal_b44fcff930eaf22c4661f2c9df801e007c95e29ce187ed15926be719e384d563_prof);

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
