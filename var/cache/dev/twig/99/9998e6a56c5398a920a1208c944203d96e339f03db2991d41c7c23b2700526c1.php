<?php

/* TwigBundle:Exception:error.js.twig */
class __TwigTemplate_241a6704198530e9565c230530e67bb690d4fa74ca82ca559486f836ec4818a3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_5a942532fe716527e6d4a154a4db8e42a91f589ff59d40661e04b23886b29cb3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5a942532fe716527e6d4a154a4db8e42a91f589ff59d40661e04b23886b29cb3->enter($__internal_5a942532fe716527e6d4a154a4db8e42a91f589ff59d40661e04b23886b29cb3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

        $__internal_fe1a417556d3fbc7de175cee06b0367bee2721b920de8543e6613cd0a4167df9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fe1a417556d3fbc7de175cee06b0367bee2721b920de8543e6613cd0a4167df9->enter($__internal_fe1a417556d3fbc7de175cee06b0367bee2721b920de8543e6613cd0a4167df9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "js", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "js", null, true);
        echo "

*/
";
        
        $__internal_5a942532fe716527e6d4a154a4db8e42a91f589ff59d40661e04b23886b29cb3->leave($__internal_5a942532fe716527e6d4a154a4db8e42a91f589ff59d40661e04b23886b29cb3_prof);

        
        $__internal_fe1a417556d3fbc7de175cee06b0367bee2721b920de8543e6613cd0a4167df9->leave($__internal_fe1a417556d3fbc7de175cee06b0367bee2721b920de8543e6613cd0a4167df9_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("/*
{{ status_code }} {{ status_text }}

*/
", "TwigBundle:Exception:error.js.twig", "/var/www/html/vg-api/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.js.twig");
    }
}
