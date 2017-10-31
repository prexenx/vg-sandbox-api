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
        $__internal_3ba3d0e14681516ac3cf0f1d784e7fae18a168398517eb6fab28bf3b283c23a3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3ba3d0e14681516ac3cf0f1d784e7fae18a168398517eb6fab28bf3b283c23a3->enter($__internal_3ba3d0e14681516ac3cf0f1d784e7fae18a168398517eb6fab28bf3b283c23a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        $__internal_2c4f49a3f1f2b0c8239aba149bd094dbba373f8c855e62305f0823acde4352a5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2c4f49a3f1f2b0c8239aba149bd094dbba373f8c855e62305f0823acde4352a5->enter($__internal_2c4f49a3f1f2b0c8239aba149bd094dbba373f8c855e62305f0823acde4352a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

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
        
        $__internal_3ba3d0e14681516ac3cf0f1d784e7fae18a168398517eb6fab28bf3b283c23a3->leave($__internal_3ba3d0e14681516ac3cf0f1d784e7fae18a168398517eb6fab28bf3b283c23a3_prof);

        
        $__internal_2c4f49a3f1f2b0c8239aba149bd094dbba373f8c855e62305f0823acde4352a5->leave($__internal_2c4f49a3f1f2b0c8239aba149bd094dbba373f8c855e62305f0823acde4352a5_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_a63eda66b50e684508436f8f8aab6b66ee9f3d1398534036f18cba858b55195e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a63eda66b50e684508436f8f8aab6b66ee9f3d1398534036f18cba858b55195e->enter($__internal_a63eda66b50e684508436f8f8aab6b66ee9f3d1398534036f18cba858b55195e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_0c4e35163ab00790841eac12cd8f1ea9c2be507f1fe0e4d7b6e03371420dc27e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0c4e35163ab00790841eac12cd8f1ea9c2be507f1fe0e4d7b6e03371420dc27e->enter($__internal_0c4e35163ab00790841eac12cd8f1ea9c2be507f1fe0e4d7b6e03371420dc27e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_0c4e35163ab00790841eac12cd8f1ea9c2be507f1fe0e4d7b6e03371420dc27e->leave($__internal_0c4e35163ab00790841eac12cd8f1ea9c2be507f1fe0e4d7b6e03371420dc27e_prof);

        
        $__internal_a63eda66b50e684508436f8f8aab6b66ee9f3d1398534036f18cba858b55195e->leave($__internal_a63eda66b50e684508436f8f8aab6b66ee9f3d1398534036f18cba858b55195e_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_2aa2bf8e2c5fc9ba0bb3bd4a2e1a8ea1237a049c0763f7acb18fa122c2b1ecc2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2aa2bf8e2c5fc9ba0bb3bd4a2e1a8ea1237a049c0763f7acb18fa122c2b1ecc2->enter($__internal_2aa2bf8e2c5fc9ba0bb3bd4a2e1a8ea1237a049c0763f7acb18fa122c2b1ecc2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_bca8eacc7d17ff03f3251db63dab0214c841d777597396b8207bdffc57127c74 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bca8eacc7d17ff03f3251db63dab0214c841d777597396b8207bdffc57127c74->enter($__internal_bca8eacc7d17ff03f3251db63dab0214c841d777597396b8207bdffc57127c74_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_bca8eacc7d17ff03f3251db63dab0214c841d777597396b8207bdffc57127c74->leave($__internal_bca8eacc7d17ff03f3251db63dab0214c841d777597396b8207bdffc57127c74_prof);

        
        $__internal_2aa2bf8e2c5fc9ba0bb3bd4a2e1a8ea1237a049c0763f7acb18fa122c2b1ecc2->leave($__internal_2aa2bf8e2c5fc9ba0bb3bd4a2e1a8ea1237a049c0763f7acb18fa122c2b1ecc2_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_9ff9ea5df2c0b2c61a514f926e520c3800f8cc7bf5f52c4298939a771fa9a217 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9ff9ea5df2c0b2c61a514f926e520c3800f8cc7bf5f52c4298939a771fa9a217->enter($__internal_9ff9ea5df2c0b2c61a514f926e520c3800f8cc7bf5f52c4298939a771fa9a217_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_452f71058bf02aebf33f83678af1a891c1220e74e581b6621ee829eac4f34ea7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_452f71058bf02aebf33f83678af1a891c1220e74e581b6621ee829eac4f34ea7->enter($__internal_452f71058bf02aebf33f83678af1a891c1220e74e581b6621ee829eac4f34ea7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_452f71058bf02aebf33f83678af1a891c1220e74e581b6621ee829eac4f34ea7->leave($__internal_452f71058bf02aebf33f83678af1a891c1220e74e581b6621ee829eac4f34ea7_prof);

        
        $__internal_9ff9ea5df2c0b2c61a514f926e520c3800f8cc7bf5f52c4298939a771fa9a217->leave($__internal_9ff9ea5df2c0b2c61a514f926e520c3800f8cc7bf5f52c4298939a771fa9a217_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_e85c462afd13ce97847b4a25728ed6e5e30d2fd3aafc97867b181a9efe8683f8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e85c462afd13ce97847b4a25728ed6e5e30d2fd3aafc97867b181a9efe8683f8->enter($__internal_e85c462afd13ce97847b4a25728ed6e5e30d2fd3aafc97867b181a9efe8683f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_658d33d0e3999915604ab69e4eb16d279f28687cd520669f5ecef6430e6702f9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_658d33d0e3999915604ab69e4eb16d279f28687cd520669f5ecef6430e6702f9->enter($__internal_658d33d0e3999915604ab69e4eb16d279f28687cd520669f5ecef6430e6702f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_658d33d0e3999915604ab69e4eb16d279f28687cd520669f5ecef6430e6702f9->leave($__internal_658d33d0e3999915604ab69e4eb16d279f28687cd520669f5ecef6430e6702f9_prof);

        
        $__internal_e85c462afd13ce97847b4a25728ed6e5e30d2fd3aafc97867b181a9efe8683f8->leave($__internal_e85c462afd13ce97847b4a25728ed6e5e30d2fd3aafc97867b181a9efe8683f8_prof);

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
