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
        $__internal_2de23e7faa57ae2ab587fc76695d74d2a10fbeceacbda0f77be324692806ac0e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2de23e7faa57ae2ab587fc76695d74d2a10fbeceacbda0f77be324692806ac0e->enter($__internal_2de23e7faa57ae2ab587fc76695d74d2a10fbeceacbda0f77be324692806ac0e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        $__internal_d34bceaee89a227c9334f6719142d51e079e114dfaba9ceebd41f53b4439affb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d34bceaee89a227c9334f6719142d51e079e114dfaba9ceebd41f53b4439affb->enter($__internal_d34bceaee89a227c9334f6719142d51e079e114dfaba9ceebd41f53b4439affb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/exception.xml.twig", array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception"))));
        echo "
";
        
        $__internal_2de23e7faa57ae2ab587fc76695d74d2a10fbeceacbda0f77be324692806ac0e->leave($__internal_2de23e7faa57ae2ab587fc76695d74d2a10fbeceacbda0f77be324692806ac0e_prof);

        
        $__internal_d34bceaee89a227c9334f6719142d51e079e114dfaba9ceebd41f53b4439affb->leave($__internal_d34bceaee89a227c9334f6719142d51e079e114dfaba9ceebd41f53b4439affb_prof);

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
