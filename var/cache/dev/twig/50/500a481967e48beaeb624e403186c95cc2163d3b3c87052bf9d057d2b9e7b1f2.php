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
        $__internal_aa9779fa57584dc625fd3c353fa417d8f9689db6fd1a18c49323554e6417f4d2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_aa9779fa57584dc625fd3c353fa417d8f9689db6fd1a18c49323554e6417f4d2->enter($__internal_aa9779fa57584dc625fd3c353fa417d8f9689db6fd1a18c49323554e6417f4d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        $__internal_e6a9ece9e89f1f66e295fbe6f3dd1659e682ed64066dfa638e0770b7280513b0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e6a9ece9e89f1f66e295fbe6f3dd1659e682ed64066dfa638e0770b7280513b0->enter($__internal_e6a9ece9e89f1f66e295fbe6f3dd1659e682ed64066dfa638e0770b7280513b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_aa9779fa57584dc625fd3c353fa417d8f9689db6fd1a18c49323554e6417f4d2->leave($__internal_aa9779fa57584dc625fd3c353fa417d8f9689db6fd1a18c49323554e6417f4d2_prof);

        
        $__internal_e6a9ece9e89f1f66e295fbe6f3dd1659e682ed64066dfa638e0770b7280513b0->leave($__internal_e6a9ece9e89f1f66e295fbe6f3dd1659e682ed64066dfa638e0770b7280513b0_prof);

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
