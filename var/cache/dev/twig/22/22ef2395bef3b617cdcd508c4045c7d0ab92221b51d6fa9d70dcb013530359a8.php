<?php

/* TwigBundle:Exception:exception.js.twig */
class __TwigTemplate_2bd48a2f0f83f19f623bc82875cfcb02b60e5331798bdd65ac9be1dec946f1ef extends Twig_Template
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
        $__internal_b050e9b2db3d53425f97e5c87f8b4b782f49b2c45985b1ebc9f9b251e0f335ea = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b050e9b2db3d53425f97e5c87f8b4b782f49b2c45985b1ebc9f9b251e0f335ea->enter($__internal_b050e9b2db3d53425f97e5c87f8b4b782f49b2c45985b1ebc9f9b251e0f335ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        $__internal_c671c474ac258a858bec5c4d64ea0e0ccf5ea182a377d358744b1c3c9d873b6b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c671c474ac258a858bec5c4d64ea0e0ccf5ea182a377d358744b1c3c9d873b6b->enter($__internal_c671c474ac258a858bec5c4d64ea0e0ccf5ea182a377d358744b1c3c9d873b6b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_include($this->env, $context, "@Twig/Exception/exception.txt.twig", array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception"))));
        echo "
*/
";
        
        $__internal_b050e9b2db3d53425f97e5c87f8b4b782f49b2c45985b1ebc9f9b251e0f335ea->leave($__internal_b050e9b2db3d53425f97e5c87f8b4b782f49b2c45985b1ebc9f9b251e0f335ea_prof);

        
        $__internal_c671c474ac258a858bec5c4d64ea0e0ccf5ea182a377d358744b1c3c9d873b6b->leave($__internal_c671c474ac258a858bec5c4d64ea0e0ccf5ea182a377d358744b1c3c9d873b6b_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.js.twig";
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
{{ include('@Twig/Exception/exception.txt.twig', { exception: exception }) }}
*/
", "TwigBundle:Exception:exception.js.twig", "/var/www/html/vg-api/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.js.twig");
    }
}
