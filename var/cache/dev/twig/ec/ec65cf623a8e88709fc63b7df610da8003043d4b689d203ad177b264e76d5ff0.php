<?php

/* TwigBundle:Exception:exception.atom.twig */
class __TwigTemplate_25e1cf98148b6bc04fcd7424b374dc0e71a9ea83edb419cd097a352b889341bc extends Twig_Template
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
        $__internal_086e79b2081cdbac61bca8f9afaa6d1ad119e91f15bc7c847c72f9ce844996e5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_086e79b2081cdbac61bca8f9afaa6d1ad119e91f15bc7c847c72f9ce844996e5->enter($__internal_086e79b2081cdbac61bca8f9afaa6d1ad119e91f15bc7c847c72f9ce844996e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        $__internal_a22abf18b7ada250f4794575cc295d7fa3c222af7248e89a493b7f5e8d1c122b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a22abf18b7ada250f4794575cc295d7fa3c222af7248e89a493b7f5e8d1c122b->enter($__internal_a22abf18b7ada250f4794575cc295d7fa3c222af7248e89a493b7f5e8d1c122b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/exception.xml.twig", array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception"))));
        echo "
";
        
        $__internal_086e79b2081cdbac61bca8f9afaa6d1ad119e91f15bc7c847c72f9ce844996e5->leave($__internal_086e79b2081cdbac61bca8f9afaa6d1ad119e91f15bc7c847c72f9ce844996e5_prof);

        
        $__internal_a22abf18b7ada250f4794575cc295d7fa3c222af7248e89a493b7f5e8d1c122b->leave($__internal_a22abf18b7ada250f4794575cc295d7fa3c222af7248e89a493b7f5e8d1c122b_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.atom.twig";
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
        return new Twig_Source("{{ include('@Twig/Exception/exception.xml.twig', { exception: exception }) }}
", "TwigBundle:Exception:exception.atom.twig", "/var/www/html/vg-api/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.atom.twig");
    }
}
