<?php

/* TwigBundle:Exception:error.js.twig */
class __TwigTemplate_241a6704198530e9565c230530e67bb690d4fa74ca82ca559486f836ec4818a3 extends Twig_Template
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
        $__internal_98c7bd6bdb46f2005baa52b131328882fcc004a7d9b94fbcaeaa18ea442043de = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_98c7bd6bdb46f2005baa52b131328882fcc004a7d9b94fbcaeaa18ea442043de->enter($__internal_98c7bd6bdb46f2005baa52b131328882fcc004a7d9b94fbcaeaa18ea442043de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

        $__internal_3b3c7bfb917005ddc0d4f2247b53c70bf40b10c6369f39d3a4f316ea8b2efb85 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3b3c7bfb917005ddc0d4f2247b53c70bf40b10c6369f39d3a4f316ea8b2efb85->enter($__internal_3b3c7bfb917005ddc0d4f2247b53c70bf40b10c6369f39d3a4f316ea8b2efb85_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "js", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "js", null, true);
        echo "

*/
";
        
        $__internal_98c7bd6bdb46f2005baa52b131328882fcc004a7d9b94fbcaeaa18ea442043de->leave($__internal_98c7bd6bdb46f2005baa52b131328882fcc004a7d9b94fbcaeaa18ea442043de_prof);

        
        $__internal_3b3c7bfb917005ddc0d4f2247b53c70bf40b10c6369f39d3a4f316ea8b2efb85->leave($__internal_3b3c7bfb917005ddc0d4f2247b53c70bf40b10c6369f39d3a4f316ea8b2efb85_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.js.twig";
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
", "TwigBundle:Exception:error.js.twig", "/var/www/html/vg-api/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.js.twig");
    }
}
