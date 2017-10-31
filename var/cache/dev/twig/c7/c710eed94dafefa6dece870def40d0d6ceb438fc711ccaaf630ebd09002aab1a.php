<?php

/* WebProfilerBundle:Profiler:toolbar_redirect.html.twig */
class __TwigTemplate_777a7a9b327085f24bf97568393455d4a39fee819858ea242c95c32c1da5a4f4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f871f341f3f397fbaa66e3ef020d95423c528922305067513c746ca2ab0f2adf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f871f341f3f397fbaa66e3ef020d95423c528922305067513c746ca2ab0f2adf->enter($__internal_f871f341f3f397fbaa66e3ef020d95423c528922305067513c746ca2ab0f2adf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $__internal_2f482fdcbaf3a785102985acdcb4b3c362ee3b6dc17e3ce68c2a4802210cbbaa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2f482fdcbaf3a785102985acdcb4b3c362ee3b6dc17e3ce68c2a4802210cbbaa->enter($__internal_2f482fdcbaf3a785102985acdcb4b3c362ee3b6dc17e3ce68c2a4802210cbbaa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f871f341f3f397fbaa66e3ef020d95423c528922305067513c746ca2ab0f2adf->leave($__internal_f871f341f3f397fbaa66e3ef020d95423c528922305067513c746ca2ab0f2adf_prof);

        
        $__internal_2f482fdcbaf3a785102985acdcb4b3c362ee3b6dc17e3ce68c2a4802210cbbaa->leave($__internal_2f482fdcbaf3a785102985acdcb4b3c362ee3b6dc17e3ce68c2a4802210cbbaa_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_96861060b2a8b994e5aabbbdc1858553c2537cd257f9abaec3f71ea7df96a8b8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_96861060b2a8b994e5aabbbdc1858553c2537cd257f9abaec3f71ea7df96a8b8->enter($__internal_96861060b2a8b994e5aabbbdc1858553c2537cd257f9abaec3f71ea7df96a8b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_d003fc5ef55aa1763baa93a94ee48f6cfe2afa663b73065dd1ccda0ee31d12a4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d003fc5ef55aa1763baa93a94ee48f6cfe2afa663b73065dd1ccda0ee31d12a4->enter($__internal_d003fc5ef55aa1763baa93a94ee48f6cfe2afa663b73065dd1ccda0ee31d12a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_d003fc5ef55aa1763baa93a94ee48f6cfe2afa663b73065dd1ccda0ee31d12a4->leave($__internal_d003fc5ef55aa1763baa93a94ee48f6cfe2afa663b73065dd1ccda0ee31d12a4_prof);

        
        $__internal_96861060b2a8b994e5aabbbdc1858553c2537cd257f9abaec3f71ea7df96a8b8->leave($__internal_96861060b2a8b994e5aabbbdc1858553c2537cd257f9abaec3f71ea7df96a8b8_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_cddd497c3efdfe165431d2d9973d2216a491317db97828291bab8111ab70dada = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cddd497c3efdfe165431d2d9973d2216a491317db97828291bab8111ab70dada->enter($__internal_cddd497c3efdfe165431d2d9973d2216a491317db97828291bab8111ab70dada_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_570221e53ef1f9c29d36c7e867ea41db3e2764e1d9ee09731a952f40df3a1189 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_570221e53ef1f9c29d36c7e867ea41db3e2764e1d9ee09731a952f40df3a1189->enter($__internal_570221e53ef1f9c29d36c7e867ea41db3e2764e1d9ee09731a952f40df3a1189_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
        
        $__internal_570221e53ef1f9c29d36c7e867ea41db3e2764e1d9ee09731a952f40df3a1189->leave($__internal_570221e53ef1f9c29d36c7e867ea41db3e2764e1d9ee09731a952f40df3a1189_prof);

        
        $__internal_cddd497c3efdfe165431d2d9973d2216a491317db97828291bab8111ab70dada->leave($__internal_cddd497c3efdfe165431d2d9973d2216a491317db97828291bab8111ab70dada_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 8,  68 => 6,  59 => 5,  41 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block title 'Redirection Intercepted' %}

{% block body %}
    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"{{ location }}\">{{ location }}</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
{% endblock %}
", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", "/var/www/html/vg-api/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/toolbar_redirect.html.twig");
    }
}
