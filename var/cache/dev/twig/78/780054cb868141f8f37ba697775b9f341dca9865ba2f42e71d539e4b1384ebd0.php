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
        $__internal_025d5576f1908cfff50a7c40710eb4b728812cf34e44aca58aba7c164c34fde6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_025d5576f1908cfff50a7c40710eb4b728812cf34e44aca58aba7c164c34fde6->enter($__internal_025d5576f1908cfff50a7c40710eb4b728812cf34e44aca58aba7c164c34fde6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        $__internal_c1637f955395902b8fe01b2abeb9c1f38a371dbd39dd2a7bfe99613950f3fa4e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c1637f955395902b8fe01b2abeb9c1f38a371dbd39dd2a7bfe99613950f3fa4e->enter($__internal_c1637f955395902b8fe01b2abeb9c1f38a371dbd39dd2a7bfe99613950f3fa4e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

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
        
        $__internal_025d5576f1908cfff50a7c40710eb4b728812cf34e44aca58aba7c164c34fde6->leave($__internal_025d5576f1908cfff50a7c40710eb4b728812cf34e44aca58aba7c164c34fde6_prof);

        
        $__internal_c1637f955395902b8fe01b2abeb9c1f38a371dbd39dd2a7bfe99613950f3fa4e->leave($__internal_c1637f955395902b8fe01b2abeb9c1f38a371dbd39dd2a7bfe99613950f3fa4e_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_fade19cdc700a1e5584ddb754d193d59422511db1c3e33d8961c506d434665f0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fade19cdc700a1e5584ddb754d193d59422511db1c3e33d8961c506d434665f0->enter($__internal_fade19cdc700a1e5584ddb754d193d59422511db1c3e33d8961c506d434665f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_8da80d839a9180c15c116e471218908370f4fdbe92ba99aeda9b8ea4bc68009d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8da80d839a9180c15c116e471218908370f4fdbe92ba99aeda9b8ea4bc68009d->enter($__internal_8da80d839a9180c15c116e471218908370f4fdbe92ba99aeda9b8ea4bc68009d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_8da80d839a9180c15c116e471218908370f4fdbe92ba99aeda9b8ea4bc68009d->leave($__internal_8da80d839a9180c15c116e471218908370f4fdbe92ba99aeda9b8ea4bc68009d_prof);

        
        $__internal_fade19cdc700a1e5584ddb754d193d59422511db1c3e33d8961c506d434665f0->leave($__internal_fade19cdc700a1e5584ddb754d193d59422511db1c3e33d8961c506d434665f0_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_16a2b4e0a453a4ee49ebbe16c95da1f3d8e6e10174205b6ce76b748d48621824 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_16a2b4e0a453a4ee49ebbe16c95da1f3d8e6e10174205b6ce76b748d48621824->enter($__internal_16a2b4e0a453a4ee49ebbe16c95da1f3d8e6e10174205b6ce76b748d48621824_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_e156882214ead8719f578bdc843275dca51e382a946b6517c097dfa377e2041b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e156882214ead8719f578bdc843275dca51e382a946b6517c097dfa377e2041b->enter($__internal_e156882214ead8719f578bdc843275dca51e382a946b6517c097dfa377e2041b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_e156882214ead8719f578bdc843275dca51e382a946b6517c097dfa377e2041b->leave($__internal_e156882214ead8719f578bdc843275dca51e382a946b6517c097dfa377e2041b_prof);

        
        $__internal_16a2b4e0a453a4ee49ebbe16c95da1f3d8e6e10174205b6ce76b748d48621824->leave($__internal_16a2b4e0a453a4ee49ebbe16c95da1f3d8e6e10174205b6ce76b748d48621824_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_3e0116b5d952e1f2f75a2d77d27cd9a3e9fd3ff5a7d2e0390f1a320fcaee2bd6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3e0116b5d952e1f2f75a2d77d27cd9a3e9fd3ff5a7d2e0390f1a320fcaee2bd6->enter($__internal_3e0116b5d952e1f2f75a2d77d27cd9a3e9fd3ff5a7d2e0390f1a320fcaee2bd6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_c58fb16d0a8288b876cb76b917f672ba747e0c3472400bcd57eb03c8f61a27e0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c58fb16d0a8288b876cb76b917f672ba747e0c3472400bcd57eb03c8f61a27e0->enter($__internal_c58fb16d0a8288b876cb76b917f672ba747e0c3472400bcd57eb03c8f61a27e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_c58fb16d0a8288b876cb76b917f672ba747e0c3472400bcd57eb03c8f61a27e0->leave($__internal_c58fb16d0a8288b876cb76b917f672ba747e0c3472400bcd57eb03c8f61a27e0_prof);

        
        $__internal_3e0116b5d952e1f2f75a2d77d27cd9a3e9fd3ff5a7d2e0390f1a320fcaee2bd6->leave($__internal_3e0116b5d952e1f2f75a2d77d27cd9a3e9fd3ff5a7d2e0390f1a320fcaee2bd6_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_4be6b67aaf4656ae1818501f14c9c456f94236421f12a42e7cb60e87b6b888c5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4be6b67aaf4656ae1818501f14c9c456f94236421f12a42e7cb60e87b6b888c5->enter($__internal_4be6b67aaf4656ae1818501f14c9c456f94236421f12a42e7cb60e87b6b888c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_90ef4c63eaef56bfab78c00f288650504092b3b1b27a03bac7660ce265041429 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_90ef4c63eaef56bfab78c00f288650504092b3b1b27a03bac7660ce265041429->enter($__internal_90ef4c63eaef56bfab78c00f288650504092b3b1b27a03bac7660ce265041429_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_90ef4c63eaef56bfab78c00f288650504092b3b1b27a03bac7660ce265041429->leave($__internal_90ef4c63eaef56bfab78c00f288650504092b3b1b27a03bac7660ce265041429_prof);

        
        $__internal_4be6b67aaf4656ae1818501f14c9c456f94236421f12a42e7cb60e87b6b888c5->leave($__internal_4be6b67aaf4656ae1818501f14c9c456f94236421f12a42e7cb60e87b6b888c5_prof);

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
