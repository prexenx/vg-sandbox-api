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
        $__internal_2e5fa6c218c7745932c4cac7b5cb7d8162dccc0f1f14eb02e54df1603f43d448 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2e5fa6c218c7745932c4cac7b5cb7d8162dccc0f1f14eb02e54df1603f43d448->enter($__internal_2e5fa6c218c7745932c4cac7b5cb7d8162dccc0f1f14eb02e54df1603f43d448_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        $__internal_9f6296fbd1f383876de96dc28cb0add0a98698dbad42731359cbee0d1c10ed15 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9f6296fbd1f383876de96dc28cb0add0a98698dbad42731359cbee0d1c10ed15->enter($__internal_9f6296fbd1f383876de96dc28cb0add0a98698dbad42731359cbee0d1c10ed15_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/exception.xml.twig", array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception"))));
        echo "
";
        
        $__internal_2e5fa6c218c7745932c4cac7b5cb7d8162dccc0f1f14eb02e54df1603f43d448->leave($__internal_2e5fa6c218c7745932c4cac7b5cb7d8162dccc0f1f14eb02e54df1603f43d448_prof);

        
        $__internal_9f6296fbd1f383876de96dc28cb0add0a98698dbad42731359cbee0d1c10ed15->leave($__internal_9f6296fbd1f383876de96dc28cb0add0a98698dbad42731359cbee0d1c10ed15_prof);

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
