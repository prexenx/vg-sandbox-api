<?php

/* ::base.html.twig */
class __TwigTemplate_f643e4913a1b3c4cc915f199b581facdeffebcf7070f86b02f959a213c194c07 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_faf69e4bcbf5f7f7b3ee49b143f3e895d9fe7c08616db58ed07aa56a69d6afce = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_faf69e4bcbf5f7f7b3ee49b143f3e895d9fe7c08616db58ed07aa56a69d6afce->enter($__internal_faf69e4bcbf5f7f7b3ee49b143f3e895d9fe7c08616db58ed07aa56a69d6afce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        $__internal_368497d2073030cfaaa8dc245986cdb55979aa41a67649176e9aba8e04b65d60 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_368497d2073030cfaaa8dc245986cdb55979aa41a67649176e9aba8e04b65d60->enter($__internal_368497d2073030cfaaa8dc245986cdb55979aa41a67649176e9aba8e04b65d60_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_faf69e4bcbf5f7f7b3ee49b143f3e895d9fe7c08616db58ed07aa56a69d6afce->leave($__internal_faf69e4bcbf5f7f7b3ee49b143f3e895d9fe7c08616db58ed07aa56a69d6afce_prof);

        
        $__internal_368497d2073030cfaaa8dc245986cdb55979aa41a67649176e9aba8e04b65d60->leave($__internal_368497d2073030cfaaa8dc245986cdb55979aa41a67649176e9aba8e04b65d60_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_9b420dff2d43cc529aee81e3fc1d238b6ff50cf0321fdc75e1ae906b25a3fe0d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9b420dff2d43cc529aee81e3fc1d238b6ff50cf0321fdc75e1ae906b25a3fe0d->enter($__internal_9b420dff2d43cc529aee81e3fc1d238b6ff50cf0321fdc75e1ae906b25a3fe0d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_e5763713e59927831e8e85ded9ac9ca41fa77422114ab718779161bc7102340f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e5763713e59927831e8e85ded9ac9ca41fa77422114ab718779161bc7102340f->enter($__internal_e5763713e59927831e8e85ded9ac9ca41fa77422114ab718779161bc7102340f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_e5763713e59927831e8e85ded9ac9ca41fa77422114ab718779161bc7102340f->leave($__internal_e5763713e59927831e8e85ded9ac9ca41fa77422114ab718779161bc7102340f_prof);

        
        $__internal_9b420dff2d43cc529aee81e3fc1d238b6ff50cf0321fdc75e1ae906b25a3fe0d->leave($__internal_9b420dff2d43cc529aee81e3fc1d238b6ff50cf0321fdc75e1ae906b25a3fe0d_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_165d905cf61e17e2a0ed9cb51e4453377d6a9435de1b6dc35857494cb4740d9d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_165d905cf61e17e2a0ed9cb51e4453377d6a9435de1b6dc35857494cb4740d9d->enter($__internal_165d905cf61e17e2a0ed9cb51e4453377d6a9435de1b6dc35857494cb4740d9d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_c914de65d833a741eb6256021c39cdace2b6815b582901deaa26d41d765e6392 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c914de65d833a741eb6256021c39cdace2b6815b582901deaa26d41d765e6392->enter($__internal_c914de65d833a741eb6256021c39cdace2b6815b582901deaa26d41d765e6392_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_c914de65d833a741eb6256021c39cdace2b6815b582901deaa26d41d765e6392->leave($__internal_c914de65d833a741eb6256021c39cdace2b6815b582901deaa26d41d765e6392_prof);

        
        $__internal_165d905cf61e17e2a0ed9cb51e4453377d6a9435de1b6dc35857494cb4740d9d->leave($__internal_165d905cf61e17e2a0ed9cb51e4453377d6a9435de1b6dc35857494cb4740d9d_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_9cc07773d33bc0079b309aa2f1052fd5ee9949f4aa46e78ce490f441f60d025a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9cc07773d33bc0079b309aa2f1052fd5ee9949f4aa46e78ce490f441f60d025a->enter($__internal_9cc07773d33bc0079b309aa2f1052fd5ee9949f4aa46e78ce490f441f60d025a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_341d92726419a8f161a8ec2f634283bd82dddac41693700d1d0abd65f9019307 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_341d92726419a8f161a8ec2f634283bd82dddac41693700d1d0abd65f9019307->enter($__internal_341d92726419a8f161a8ec2f634283bd82dddac41693700d1d0abd65f9019307_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_341d92726419a8f161a8ec2f634283bd82dddac41693700d1d0abd65f9019307->leave($__internal_341d92726419a8f161a8ec2f634283bd82dddac41693700d1d0abd65f9019307_prof);

        
        $__internal_9cc07773d33bc0079b309aa2f1052fd5ee9949f4aa46e78ce490f441f60d025a->leave($__internal_9cc07773d33bc0079b309aa2f1052fd5ee9949f4aa46e78ce490f441f60d025a_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_6b35a3c1d0b1afc33e66d6010a7f2ded7e614a12efe751cd545a3314baeb092f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6b35a3c1d0b1afc33e66d6010a7f2ded7e614a12efe751cd545a3314baeb092f->enter($__internal_6b35a3c1d0b1afc33e66d6010a7f2ded7e614a12efe751cd545a3314baeb092f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_de290f430f6a8ad720201d3a5b715a71696ff0390691160cf985f7bbdd972eb4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_de290f430f6a8ad720201d3a5b715a71696ff0390691160cf985f7bbdd972eb4->enter($__internal_de290f430f6a8ad720201d3a5b715a71696ff0390691160cf985f7bbdd972eb4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_de290f430f6a8ad720201d3a5b715a71696ff0390691160cf985f7bbdd972eb4->leave($__internal_de290f430f6a8ad720201d3a5b715a71696ff0390691160cf985f7bbdd972eb4_prof);

        
        $__internal_6b35a3c1d0b1afc33e66d6010a7f2ded7e614a12efe751cd545a3314baeb092f->leave($__internal_6b35a3c1d0b1afc33e66d6010a7f2ded7e614a12efe751cd545a3314baeb092f_prof);

    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 11,  100 => 10,  83 => 6,  65 => 5,  53 => 12,  50 => 11,  48 => 10,  41 => 7,  39 => 6,  35 => 5,  29 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>{% block title %}Welcome!{% endblock %}</title>
        {% block stylesheets %}{% endblock %}
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
    </head>
    <body>
        {% block body %}{% endblock %}
        {% block javascripts %}{% endblock %}
    </body>
</html>
", "::base.html.twig", "/var/www/html/vg-api/app/Resources/views/base.html.twig");
    }
}
