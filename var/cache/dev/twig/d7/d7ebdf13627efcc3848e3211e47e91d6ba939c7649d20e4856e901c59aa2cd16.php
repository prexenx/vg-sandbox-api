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
        $__internal_58aaaa0a3f4d29e51299c71c972b7d4650a0e1e321ea0a391a672b537a1a8913 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_58aaaa0a3f4d29e51299c71c972b7d4650a0e1e321ea0a391a672b537a1a8913->enter($__internal_58aaaa0a3f4d29e51299c71c972b7d4650a0e1e321ea0a391a672b537a1a8913_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.json.twig"));

        $__internal_3d272a8a8bb4a5a40b45844bb7473b1f43cc548fd2402eb1f77bd74aaa033381 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3d272a8a8bb4a5a40b45844bb7473b1f43cc548fd2402eb1f77bd74aaa033381->enter($__internal_3d272a8a8bb4a5a40b45844bb7473b1f43cc548fd2402eb1f77bd74aaa033381_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "exception" => $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "toarray", array()))));
        echo "
";
        
        $__internal_58aaaa0a3f4d29e51299c71c972b7d4650a0e1e321ea0a391a672b537a1a8913->leave($__internal_58aaaa0a3f4d29e51299c71c972b7d4650a0e1e321ea0a391a672b537a1a8913_prof);

        
        $__internal_3d272a8a8bb4a5a40b45844bb7473b1f43cc548fd2402eb1f77bd74aaa033381->leave($__internal_3d272a8a8bb4a5a40b45844bb7473b1f43cc548fd2402eb1f77bd74aaa033381_prof);

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
