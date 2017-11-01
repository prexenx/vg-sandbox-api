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
        $__internal_4bf85bc6e40bcb25d9978f38c7c6dc66b43543b11578b33d6a5a36be5d6937b3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4bf85bc6e40bcb25d9978f38c7c6dc66b43543b11578b33d6a5a36be5d6937b3->enter($__internal_4bf85bc6e40bcb25d9978f38c7c6dc66b43543b11578b33d6a5a36be5d6937b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        $__internal_d6d0f1663fd93b0198540ddeca50d5a00703cea8b69b13e0a65299cfc1c4ad38 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d6d0f1663fd93b0198540ddeca50d5a00703cea8b69b13e0a65299cfc1c4ad38->enter($__internal_d6d0f1663fd93b0198540ddeca50d5a00703cea8b69b13e0a65299cfc1c4ad38_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_4bf85bc6e40bcb25d9978f38c7c6dc66b43543b11578b33d6a5a36be5d6937b3->leave($__internal_4bf85bc6e40bcb25d9978f38c7c6dc66b43543b11578b33d6a5a36be5d6937b3_prof);

        
        $__internal_d6d0f1663fd93b0198540ddeca50d5a00703cea8b69b13e0a65299cfc1c4ad38->leave($__internal_d6d0f1663fd93b0198540ddeca50d5a00703cea8b69b13e0a65299cfc1c4ad38_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_909422c68d2c7cbb8ad2cd514aebe065822850a9dc3185209e1d7eed6d085864 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_909422c68d2c7cbb8ad2cd514aebe065822850a9dc3185209e1d7eed6d085864->enter($__internal_909422c68d2c7cbb8ad2cd514aebe065822850a9dc3185209e1d7eed6d085864_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_4eca567f08af707926fe179775f57a6f3c53db3c74d2c899d0a1017cb63b6bb1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4eca567f08af707926fe179775f57a6f3c53db3c74d2c899d0a1017cb63b6bb1->enter($__internal_4eca567f08af707926fe179775f57a6f3c53db3c74d2c899d0a1017cb63b6bb1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_4eca567f08af707926fe179775f57a6f3c53db3c74d2c899d0a1017cb63b6bb1->leave($__internal_4eca567f08af707926fe179775f57a6f3c53db3c74d2c899d0a1017cb63b6bb1_prof);

        
        $__internal_909422c68d2c7cbb8ad2cd514aebe065822850a9dc3185209e1d7eed6d085864->leave($__internal_909422c68d2c7cbb8ad2cd514aebe065822850a9dc3185209e1d7eed6d085864_prof);

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
