<?php

/* WebProfilerBundle:Profiler:ajax_layout.html.twig */
class __TwigTemplate_c1db206247f7cf22df7ffb07b540cf2511f1c809dd2520be7bd0ee51cd084580 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d4af4b576201384d283d9cff7514960b2940f3ee5e9d3437778b5d20449a8663 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d4af4b576201384d283d9cff7514960b2940f3ee5e9d3437778b5d20449a8663->enter($__internal_d4af4b576201384d283d9cff7514960b2940f3ee5e9d3437778b5d20449a8663_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        $__internal_f5375fe20dd5895d6c7658d80df8c9d99d6a1ad9468dc9669342b766d284d258 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f5375fe20dd5895d6c7658d80df8c9d99d6a1ad9468dc9669342b766d284d258->enter($__internal_f5375fe20dd5895d6c7658d80df8c9d99d6a1ad9468dc9669342b766d284d258_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_d4af4b576201384d283d9cff7514960b2940f3ee5e9d3437778b5d20449a8663->leave($__internal_d4af4b576201384d283d9cff7514960b2940f3ee5e9d3437778b5d20449a8663_prof);

        
        $__internal_f5375fe20dd5895d6c7658d80df8c9d99d6a1ad9468dc9669342b766d284d258->leave($__internal_f5375fe20dd5895d6c7658d80df8c9d99d6a1ad9468dc9669342b766d284d258_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_a2fda7c55426fc0ce0d1772884e4d391bc4e37a88bb2150395f1cc2593b3cad6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a2fda7c55426fc0ce0d1772884e4d391bc4e37a88bb2150395f1cc2593b3cad6->enter($__internal_a2fda7c55426fc0ce0d1772884e4d391bc4e37a88bb2150395f1cc2593b3cad6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_cf4973b030b3161418d04ea92037edbed8da5e816addd1ddc228f920a1f968d7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cf4973b030b3161418d04ea92037edbed8da5e816addd1ddc228f920a1f968d7->enter($__internal_cf4973b030b3161418d04ea92037edbed8da5e816addd1ddc228f920a1f968d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_cf4973b030b3161418d04ea92037edbed8da5e816addd1ddc228f920a1f968d7->leave($__internal_cf4973b030b3161418d04ea92037edbed8da5e816addd1ddc228f920a1f968d7_prof);

        
        $__internal_a2fda7c55426fc0ce0d1772884e4d391bc4e37a88bb2150395f1cc2593b3cad6->leave($__internal_a2fda7c55426fc0ce0d1772884e4d391bc4e37a88bb2150395f1cc2593b3cad6_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  26 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block panel '' %}
", "WebProfilerBundle:Profiler:ajax_layout.html.twig", "/var/www/html/vg-api/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/ajax_layout.html.twig");
    }
}
