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
        $__internal_12e667e4e4dc8404898fc528fd934752fc18d5a1bc297851bc4fb4169f1e1d83 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_12e667e4e4dc8404898fc528fd934752fc18d5a1bc297851bc4fb4169f1e1d83->enter($__internal_12e667e4e4dc8404898fc528fd934752fc18d5a1bc297851bc4fb4169f1e1d83_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $__internal_3e4519c1bc304cd925e3cefaad0ce374682f72d0b3751541dde2dc9fb17d3755 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3e4519c1bc304cd925e3cefaad0ce374682f72d0b3751541dde2dc9fb17d3755->enter($__internal_3e4519c1bc304cd925e3cefaad0ce374682f72d0b3751541dde2dc9fb17d3755_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_12e667e4e4dc8404898fc528fd934752fc18d5a1bc297851bc4fb4169f1e1d83->leave($__internal_12e667e4e4dc8404898fc528fd934752fc18d5a1bc297851bc4fb4169f1e1d83_prof);

        
        $__internal_3e4519c1bc304cd925e3cefaad0ce374682f72d0b3751541dde2dc9fb17d3755->leave($__internal_3e4519c1bc304cd925e3cefaad0ce374682f72d0b3751541dde2dc9fb17d3755_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_f573b35a85eed9ccf3f62303370c45271dd9a51ead9d25d9d9a94d1ff59fcd05 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f573b35a85eed9ccf3f62303370c45271dd9a51ead9d25d9d9a94d1ff59fcd05->enter($__internal_f573b35a85eed9ccf3f62303370c45271dd9a51ead9d25d9d9a94d1ff59fcd05_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_06639aa5dbb394a6003ed497fb9c8e203940a23cdfa38d08770d89db28bd0fe0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_06639aa5dbb394a6003ed497fb9c8e203940a23cdfa38d08770d89db28bd0fe0->enter($__internal_06639aa5dbb394a6003ed497fb9c8e203940a23cdfa38d08770d89db28bd0fe0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_06639aa5dbb394a6003ed497fb9c8e203940a23cdfa38d08770d89db28bd0fe0->leave($__internal_06639aa5dbb394a6003ed497fb9c8e203940a23cdfa38d08770d89db28bd0fe0_prof);

        
        $__internal_f573b35a85eed9ccf3f62303370c45271dd9a51ead9d25d9d9a94d1ff59fcd05->leave($__internal_f573b35a85eed9ccf3f62303370c45271dd9a51ead9d25d9d9a94d1ff59fcd05_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_4691789f548dc7fdf01f2622f687684fcc3c3e7e12a3654b7b46a09506c63ab4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4691789f548dc7fdf01f2622f687684fcc3c3e7e12a3654b7b46a09506c63ab4->enter($__internal_4691789f548dc7fdf01f2622f687684fcc3c3e7e12a3654b7b46a09506c63ab4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_8b5c5be0dee32ec7a775d4abbffee9feee932ff410b7cbc724b122a718489bb8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8b5c5be0dee32ec7a775d4abbffee9feee932ff410b7cbc724b122a718489bb8->enter($__internal_8b5c5be0dee32ec7a775d4abbffee9feee932ff410b7cbc724b122a718489bb8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_8b5c5be0dee32ec7a775d4abbffee9feee932ff410b7cbc724b122a718489bb8->leave($__internal_8b5c5be0dee32ec7a775d4abbffee9feee932ff410b7cbc724b122a718489bb8_prof);

        
        $__internal_4691789f548dc7fdf01f2622f687684fcc3c3e7e12a3654b7b46a09506c63ab4->leave($__internal_4691789f548dc7fdf01f2622f687684fcc3c3e7e12a3654b7b46a09506c63ab4_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_1d6bf1c92508bb31f9d08d72a657a1f0034969690bdb1e9c54e12e87b9732bf8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1d6bf1c92508bb31f9d08d72a657a1f0034969690bdb1e9c54e12e87b9732bf8->enter($__internal_1d6bf1c92508bb31f9d08d72a657a1f0034969690bdb1e9c54e12e87b9732bf8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_6ca3aeee55644b98bf752f4d673bebac4f9b8ea069622dcdc18ec5674033bda7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6ca3aeee55644b98bf752f4d673bebac4f9b8ea069622dcdc18ec5674033bda7->enter($__internal_6ca3aeee55644b98bf752f4d673bebac4f9b8ea069622dcdc18ec5674033bda7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_6ca3aeee55644b98bf752f4d673bebac4f9b8ea069622dcdc18ec5674033bda7->leave($__internal_6ca3aeee55644b98bf752f4d673bebac4f9b8ea069622dcdc18ec5674033bda7_prof);

        
        $__internal_1d6bf1c92508bb31f9d08d72a657a1f0034969690bdb1e9c54e12e87b9732bf8->leave($__internal_1d6bf1c92508bb31f9d08d72a657a1f0034969690bdb1e9c54e12e87b9732bf8_prof);

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
