<?php

/* TwigBundle:Exception:error.css.twig */
class __TwigTemplate_779a23d8b42e3533c00bd514b20928df0d0c7fa86fe8c7d9f8195c03a8cf3ee6 extends Twig_Template
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
        $__internal_42d0ffbecb1dbb25749d7d39e6a6eca7cc5db29c134029a9c35cc1fb1a96e17f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_42d0ffbecb1dbb25749d7d39e6a6eca7cc5db29c134029a9c35cc1fb1a96e17f->enter($__internal_42d0ffbecb1dbb25749d7d39e6a6eca7cc5db29c134029a9c35cc1fb1a96e17f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

        $__internal_ff0a9f70bda91a6fa0086ad17e0b1384f28ea1753728454942b32adabc1c1d68 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ff0a9f70bda91a6fa0086ad17e0b1384f28ea1753728454942b32adabc1c1d68->enter($__internal_ff0a9f70bda91a6fa0086ad17e0b1384f28ea1753728454942b32adabc1c1d68_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "css", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "css", null, true);
        echo "

*/
";
        
        $__internal_42d0ffbecb1dbb25749d7d39e6a6eca7cc5db29c134029a9c35cc1fb1a96e17f->leave($__internal_42d0ffbecb1dbb25749d7d39e6a6eca7cc5db29c134029a9c35cc1fb1a96e17f_prof);

        
        $__internal_ff0a9f70bda91a6fa0086ad17e0b1384f28ea1753728454942b32adabc1c1d68->leave($__internal_ff0a9f70bda91a6fa0086ad17e0b1384f28ea1753728454942b32adabc1c1d68_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.css.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("/*
{{ status_code }} {{ status_text }}

*/
", "TwigBundle:Exception:error.css.twig", "/var/www/html/vg-api/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.css.twig");
    }
}
