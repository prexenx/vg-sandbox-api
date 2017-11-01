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
        $__internal_6d506ccf24af286e23d3f07ac03845415a735211d2fb2ac25e936b80607b7a14 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6d506ccf24af286e23d3f07ac03845415a735211d2fb2ac25e936b80607b7a14->enter($__internal_6d506ccf24af286e23d3f07ac03845415a735211d2fb2ac25e936b80607b7a14_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        $__internal_734794d09ad919559fb1a04e09926b57b136b224f10b5026cc367f5e1130470b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_734794d09ad919559fb1a04e09926b57b136b224f10b5026cc367f5e1130470b->enter($__internal_734794d09ad919559fb1a04e09926b57b136b224f10b5026cc367f5e1130470b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/exception.xml.twig", array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception"))));
        echo "
";
        
        $__internal_6d506ccf24af286e23d3f07ac03845415a735211d2fb2ac25e936b80607b7a14->leave($__internal_6d506ccf24af286e23d3f07ac03845415a735211d2fb2ac25e936b80607b7a14_prof);

        
        $__internal_734794d09ad919559fb1a04e09926b57b136b224f10b5026cc367f5e1130470b->leave($__internal_734794d09ad919559fb1a04e09926b57b136b224f10b5026cc367f5e1130470b_prof);

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
