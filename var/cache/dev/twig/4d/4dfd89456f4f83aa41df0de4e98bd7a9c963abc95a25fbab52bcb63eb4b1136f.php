<?php

/* TwigBundle:Exception:exception.rdf.twig */
class __TwigTemplate_e2c51f53aa749255053f5ddb628303e49ba33063e495b42212cf63e39a5d6222 extends Twig_Template
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
        $__internal_9e816603fc90eec0d1f308ba9e694017a31cb6434e4f36fc4e28679df976bcc7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9e816603fc90eec0d1f308ba9e694017a31cb6434e4f36fc4e28679df976bcc7->enter($__internal_9e816603fc90eec0d1f308ba9e694017a31cb6434e4f36fc4e28679df976bcc7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        $__internal_a5d864f6af0b2ead0aaa8cb0b2ad09deb1b505af155ab50e107466a27dd71e03 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a5d864f6af0b2ead0aaa8cb0b2ad09deb1b505af155ab50e107466a27dd71e03->enter($__internal_a5d864f6af0b2ead0aaa8cb0b2ad09deb1b505af155ab50e107466a27dd71e03_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/exception.xml.twig", array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception"))));
        echo "
";
        
        $__internal_9e816603fc90eec0d1f308ba9e694017a31cb6434e4f36fc4e28679df976bcc7->leave($__internal_9e816603fc90eec0d1f308ba9e694017a31cb6434e4f36fc4e28679df976bcc7_prof);

        
        $__internal_a5d864f6af0b2ead0aaa8cb0b2ad09deb1b505af155ab50e107466a27dd71e03->leave($__internal_a5d864f6af0b2ead0aaa8cb0b2ad09deb1b505af155ab50e107466a27dd71e03_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.rdf.twig";
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
", "TwigBundle:Exception:exception.rdf.twig", "/var/www/html/vg-api/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.rdf.twig");
    }
}
