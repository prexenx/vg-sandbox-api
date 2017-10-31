<?php

/* TwigBundle:Exception:exception.json.twig */
class __TwigTemplate_3bd3ec95b85ac30ffdfc6ab10e5dc7b1585317b158bbdd9dc4017054d32150bc extends Twig_Template
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
        $__internal_8ada9c07b8e84b9eb1047505bc3619f02c2802f4a4eed1761127d0d6d25338b7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8ada9c07b8e84b9eb1047505bc3619f02c2802f4a4eed1761127d0d6d25338b7->enter($__internal_8ada9c07b8e84b9eb1047505bc3619f02c2802f4a4eed1761127d0d6d25338b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.json.twig"));

        $__internal_d7604a7032507dae78a50389ee90f121e53b9379cdab3cbafc410b08a81d06c9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d7604a7032507dae78a50389ee90f121e53b9379cdab3cbafc410b08a81d06c9->enter($__internal_d7604a7032507dae78a50389ee90f121e53b9379cdab3cbafc410b08a81d06c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "exception" => $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "toarray", array()))));
        echo "
";
        
        $__internal_8ada9c07b8e84b9eb1047505bc3619f02c2802f4a4eed1761127d0d6d25338b7->leave($__internal_8ada9c07b8e84b9eb1047505bc3619f02c2802f4a4eed1761127d0d6d25338b7_prof);

        
        $__internal_d7604a7032507dae78a50389ee90f121e53b9379cdab3cbafc410b08a81d06c9->leave($__internal_d7604a7032507dae78a50389ee90f121e53b9379cdab3cbafc410b08a81d06c9_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.json.twig";
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
        return new Twig_Source("{{ { 'error': { 'code': status_code, 'message': status_text, 'exception': exception.toarray } }|json_encode|raw }}
", "TwigBundle:Exception:exception.json.twig", "/var/www/html/vg-api/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.json.twig");
    }
}
