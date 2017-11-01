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
        $__internal_d449a32e11e17de703cd97f573d36c3e8f90814063598de6bd77ffe4b2ee03ad = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d449a32e11e17de703cd97f573d36c3e8f90814063598de6bd77ffe4b2ee03ad->enter($__internal_d449a32e11e17de703cd97f573d36c3e8f90814063598de6bd77ffe4b2ee03ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $__internal_932af39166c19da4ef54a5e5706a57335edd9f71351276ecd4f4dac21f10e9a4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_932af39166c19da4ef54a5e5706a57335edd9f71351276ecd4f4dac21f10e9a4->enter($__internal_932af39166c19da4ef54a5e5706a57335edd9f71351276ecd4f4dac21f10e9a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d449a32e11e17de703cd97f573d36c3e8f90814063598de6bd77ffe4b2ee03ad->leave($__internal_d449a32e11e17de703cd97f573d36c3e8f90814063598de6bd77ffe4b2ee03ad_prof);

        
        $__internal_932af39166c19da4ef54a5e5706a57335edd9f71351276ecd4f4dac21f10e9a4->leave($__internal_932af39166c19da4ef54a5e5706a57335edd9f71351276ecd4f4dac21f10e9a4_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_38eb3518ff97b08b2f711e968f0956a561e20dddae265c83027d6c3ff9c10770 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_38eb3518ff97b08b2f711e968f0956a561e20dddae265c83027d6c3ff9c10770->enter($__internal_38eb3518ff97b08b2f711e968f0956a561e20dddae265c83027d6c3ff9c10770_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_e72ea90ba5633a02ed7fce77df850976275beb1be8a25e677189a1954d83025d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e72ea90ba5633a02ed7fce77df850976275beb1be8a25e677189a1954d83025d->enter($__internal_e72ea90ba5633a02ed7fce77df850976275beb1be8a25e677189a1954d83025d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_e72ea90ba5633a02ed7fce77df850976275beb1be8a25e677189a1954d83025d->leave($__internal_e72ea90ba5633a02ed7fce77df850976275beb1be8a25e677189a1954d83025d_prof);

        
        $__internal_38eb3518ff97b08b2f711e968f0956a561e20dddae265c83027d6c3ff9c10770->leave($__internal_38eb3518ff97b08b2f711e968f0956a561e20dddae265c83027d6c3ff9c10770_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_f642ac6382bd5df6106ec53003386b8d506482b233f6e7e74dc76f826a6bf7d1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f642ac6382bd5df6106ec53003386b8d506482b233f6e7e74dc76f826a6bf7d1->enter($__internal_f642ac6382bd5df6106ec53003386b8d506482b233f6e7e74dc76f826a6bf7d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_691014d3ec6a3afd73e709c3b29bf05a0282bea77b5c40f1cb798067f28a2e6c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_691014d3ec6a3afd73e709c3b29bf05a0282bea77b5c40f1cb798067f28a2e6c->enter($__internal_691014d3ec6a3afd73e709c3b29bf05a0282bea77b5c40f1cb798067f28a2e6c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_691014d3ec6a3afd73e709c3b29bf05a0282bea77b5c40f1cb798067f28a2e6c->leave($__internal_691014d3ec6a3afd73e709c3b29bf05a0282bea77b5c40f1cb798067f28a2e6c_prof);

        
        $__internal_f642ac6382bd5df6106ec53003386b8d506482b233f6e7e74dc76f826a6bf7d1->leave($__internal_f642ac6382bd5df6106ec53003386b8d506482b233f6e7e74dc76f826a6bf7d1_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_d25e478d7644c7bc43759fe9dd3aef4d1ae3009f727638a2d2b7e723185a7b68 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d25e478d7644c7bc43759fe9dd3aef4d1ae3009f727638a2d2b7e723185a7b68->enter($__internal_d25e478d7644c7bc43759fe9dd3aef4d1ae3009f727638a2d2b7e723185a7b68_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_7b419790a1877791c2648146f53d0a687221830b2125bf18cc7967be116e6155 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7b419790a1877791c2648146f53d0a687221830b2125bf18cc7967be116e6155->enter($__internal_7b419790a1877791c2648146f53d0a687221830b2125bf18cc7967be116e6155_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_7b419790a1877791c2648146f53d0a687221830b2125bf18cc7967be116e6155->leave($__internal_7b419790a1877791c2648146f53d0a687221830b2125bf18cc7967be116e6155_prof);

        
        $__internal_d25e478d7644c7bc43759fe9dd3aef4d1ae3009f727638a2d2b7e723185a7b68->leave($__internal_d25e478d7644c7bc43759fe9dd3aef4d1ae3009f727638a2d2b7e723185a7b68_prof);

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
