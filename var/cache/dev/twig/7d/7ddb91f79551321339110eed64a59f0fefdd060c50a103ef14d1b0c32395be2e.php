<?php

/* TwigBundle:Exception:error.atom.twig */
class __TwigTemplate_3c25aa4c6058049745c8bc7637fe8d29873589b7b7e55a9df885714ffc611052 extends Twig_Template
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
        $__internal_1192a933b6cd85d3875383b7292e8fee1d239357c78b6e080bb415739c13f569 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1192a933b6cd85d3875383b7292e8fee1d239357c78b6e080bb415739c13f569->enter($__internal_1192a933b6cd85d3875383b7292e8fee1d239357c78b6e080bb415739c13f569_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        $__internal_e4699157417f52e91514003204ada3f9546140f04fe6659e7622ef7e30487c1f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e4699157417f52e91514003204ada3f9546140f04fe6659e7622ef7e30487c1f->enter($__internal_e4699157417f52e91514003204ada3f9546140f04fe6659e7622ef7e30487c1f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/error.xml.twig");
        echo "
";
        
        $__internal_1192a933b6cd85d3875383b7292e8fee1d239357c78b6e080bb415739c13f569->leave($__internal_1192a933b6cd85d3875383b7292e8fee1d239357c78b6e080bb415739c13f569_prof);

        
        $__internal_e4699157417f52e91514003204ada3f9546140f04fe6659e7622ef7e30487c1f->leave($__internal_e4699157417f52e91514003204ada3f9546140f04fe6659e7622ef7e30487c1f_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.atom.twig";
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
        return new Twig_Source("{{ include('@Twig/Exception/error.xml.twig') }}
", "TwigBundle:Exception:error.atom.twig", "/var/www/html/vg-api/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.atom.twig");
    }
}
