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
        $__internal_dacd341e06ecfef49ff6cb0fe3bf99bf22e89da29e1069a78bac986ebe3db426 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dacd341e06ecfef49ff6cb0fe3bf99bf22e89da29e1069a78bac986ebe3db426->enter($__internal_dacd341e06ecfef49ff6cb0fe3bf99bf22e89da29e1069a78bac986ebe3db426_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        $__internal_b316019c7bdc5062e182a43979db97634dc940cb85c0d62e04941c9182c974bb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b316019c7bdc5062e182a43979db97634dc940cb85c0d62e04941c9182c974bb->enter($__internal_b316019c7bdc5062e182a43979db97634dc940cb85c0d62e04941c9182c974bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_dacd341e06ecfef49ff6cb0fe3bf99bf22e89da29e1069a78bac986ebe3db426->leave($__internal_dacd341e06ecfef49ff6cb0fe3bf99bf22e89da29e1069a78bac986ebe3db426_prof);

        
        $__internal_b316019c7bdc5062e182a43979db97634dc940cb85c0d62e04941c9182c974bb->leave($__internal_b316019c7bdc5062e182a43979db97634dc940cb85c0d62e04941c9182c974bb_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_93d6699fd84b64b120ffe7d2dca015c445def6228176c2c69cc5536575b20738 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_93d6699fd84b64b120ffe7d2dca015c445def6228176c2c69cc5536575b20738->enter($__internal_93d6699fd84b64b120ffe7d2dca015c445def6228176c2c69cc5536575b20738_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_0d5e65fb3436cb4098b14534fa1c930af522b90ef27cd7c0472440628f8ddcb9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0d5e65fb3436cb4098b14534fa1c930af522b90ef27cd7c0472440628f8ddcb9->enter($__internal_0d5e65fb3436cb4098b14534fa1c930af522b90ef27cd7c0472440628f8ddcb9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_0d5e65fb3436cb4098b14534fa1c930af522b90ef27cd7c0472440628f8ddcb9->leave($__internal_0d5e65fb3436cb4098b14534fa1c930af522b90ef27cd7c0472440628f8ddcb9_prof);

        
        $__internal_93d6699fd84b64b120ffe7d2dca015c445def6228176c2c69cc5536575b20738->leave($__internal_93d6699fd84b64b120ffe7d2dca015c445def6228176c2c69cc5536575b20738_prof);

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
