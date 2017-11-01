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
        $__internal_7c0eed36ad39f3f6aaa0ace9e09126611715b6d6c99d3492eec1624d6a9a99a1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7c0eed36ad39f3f6aaa0ace9e09126611715b6d6c99d3492eec1624d6a9a99a1->enter($__internal_7c0eed36ad39f3f6aaa0ace9e09126611715b6d6c99d3492eec1624d6a9a99a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.json.twig"));

        $__internal_15e18c82630c74ccdbacf613743fa1c6afdb6cd7cb36245865289a23150819a2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_15e18c82630c74ccdbacf613743fa1c6afdb6cd7cb36245865289a23150819a2->enter($__internal_15e18c82630c74ccdbacf613743fa1c6afdb6cd7cb36245865289a23150819a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "exception" => $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "toarray", array()))));
        echo "
";
        
        $__internal_7c0eed36ad39f3f6aaa0ace9e09126611715b6d6c99d3492eec1624d6a9a99a1->leave($__internal_7c0eed36ad39f3f6aaa0ace9e09126611715b6d6c99d3492eec1624d6a9a99a1_prof);

        
        $__internal_15e18c82630c74ccdbacf613743fa1c6afdb6cd7cb36245865289a23150819a2->leave($__internal_15e18c82630c74ccdbacf613743fa1c6afdb6cd7cb36245865289a23150819a2_prof);

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
