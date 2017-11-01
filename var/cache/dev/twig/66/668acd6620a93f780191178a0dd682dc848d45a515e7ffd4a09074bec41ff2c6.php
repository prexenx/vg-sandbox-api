<?php

/* TwigBundle:Exception:error.rdf.twig */
class __TwigTemplate_d12cbb5f4a307c8c52b86d49a3fa7692f6156370fcf85666fca66457e95b92aa extends Twig_Template
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
        $__internal_246721d501e18dc81d45525863bc721820b83f772a646f9e79a85cb179be0b65 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_246721d501e18dc81d45525863bc721820b83f772a646f9e79a85cb179be0b65->enter($__internal_246721d501e18dc81d45525863bc721820b83f772a646f9e79a85cb179be0b65_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        $__internal_991d9dbb0f8eb2f0e91fd49e51ad49e5198b558f7922500fefe82eb817107e59 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_991d9dbb0f8eb2f0e91fd49e51ad49e5198b558f7922500fefe82eb817107e59->enter($__internal_991d9dbb0f8eb2f0e91fd49e51ad49e5198b558f7922500fefe82eb817107e59_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/error.xml.twig");
        echo "
";
        
        $__internal_246721d501e18dc81d45525863bc721820b83f772a646f9e79a85cb179be0b65->leave($__internal_246721d501e18dc81d45525863bc721820b83f772a646f9e79a85cb179be0b65_prof);

        
        $__internal_991d9dbb0f8eb2f0e91fd49e51ad49e5198b558f7922500fefe82eb817107e59->leave($__internal_991d9dbb0f8eb2f0e91fd49e51ad49e5198b558f7922500fefe82eb817107e59_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.rdf.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{{ include('@Twig/Exception/error.xml.twig') }}
", "TwigBundle:Exception:error.rdf.twig", "/var/www/html/vg-api/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.rdf.twig");
    }
}
