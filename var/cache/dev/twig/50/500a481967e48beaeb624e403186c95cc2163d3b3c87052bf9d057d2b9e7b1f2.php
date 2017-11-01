<?php

/* TwigBundle:Exception:error.json.twig */
class __TwigTemplate_f990c74fcc083228cd328fbae127dc33ca05ac17cb02af10aa5b338c86ea222d extends Twig_Template
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
        $__internal_7867d3630debf2831419ba06352bf84de31d919791ad10c3baa2b67492691431 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7867d3630debf2831419ba06352bf84de31d919791ad10c3baa2b67492691431->enter($__internal_7867d3630debf2831419ba06352bf84de31d919791ad10c3baa2b67492691431_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        $__internal_73d77e27d8a5edfbcc0e3335e72e0d7ef22ee0aeec08442979435d25d11ff856 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_73d77e27d8a5edfbcc0e3335e72e0d7ef22ee0aeec08442979435d25d11ff856->enter($__internal_73d77e27d8a5edfbcc0e3335e72e0d7ef22ee0aeec08442979435d25d11ff856_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_7867d3630debf2831419ba06352bf84de31d919791ad10c3baa2b67492691431->leave($__internal_7867d3630debf2831419ba06352bf84de31d919791ad10c3baa2b67492691431_prof);

        
        $__internal_73d77e27d8a5edfbcc0e3335e72e0d7ef22ee0aeec08442979435d25d11ff856->leave($__internal_73d77e27d8a5edfbcc0e3335e72e0d7ef22ee0aeec08442979435d25d11ff856_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.json.twig";
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
        return new Twig_Source("{{ { 'error': { 'code': status_code, 'message': status_text } }|json_encode|raw }}
", "TwigBundle:Exception:error.json.twig", "/var/www/html/vg-api/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.json.twig");
    }
}
