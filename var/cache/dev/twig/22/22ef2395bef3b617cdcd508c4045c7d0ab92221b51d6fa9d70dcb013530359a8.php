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
        $__internal_9c6ac0d753f9800096539b50f5445bf70d02038fa253b1ede08cd9f5d28c10f7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9c6ac0d753f9800096539b50f5445bf70d02038fa253b1ede08cd9f5d28c10f7->enter($__internal_9c6ac0d753f9800096539b50f5445bf70d02038fa253b1ede08cd9f5d28c10f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        $__internal_ee7560e3937826eb17863ad4042e0c8059484cee241b5ff6874f931895dbda16 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ee7560e3937826eb17863ad4042e0c8059484cee241b5ff6874f931895dbda16->enter($__internal_ee7560e3937826eb17863ad4042e0c8059484cee241b5ff6874f931895dbda16_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_include($this->env, $context, "@Twig/Exception/exception.txt.twig", array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception"))));
        echo "
*/
";
        
        $__internal_9c6ac0d753f9800096539b50f5445bf70d02038fa253b1ede08cd9f5d28c10f7->leave($__internal_9c6ac0d753f9800096539b50f5445bf70d02038fa253b1ede08cd9f5d28c10f7_prof);

        
        $__internal_ee7560e3937826eb17863ad4042e0c8059484cee241b5ff6874f931895dbda16->leave($__internal_ee7560e3937826eb17863ad4042e0c8059484cee241b5ff6874f931895dbda16_prof);

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
