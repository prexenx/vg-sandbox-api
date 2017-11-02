<?php

/* TwigBundle:Exception:exception.atom.twig */
class __TwigTemplate_25e1cf98148b6bc04fcd7424b374dc0e71a9ea83edb419cd097a352b889341bc extends Twig_Template
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
        $__internal_633130ac90c4d433be57e22c2cf13518566f2eb6d8759dd26ca826fd7889da56 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_633130ac90c4d433be57e22c2cf13518566f2eb6d8759dd26ca826fd7889da56->enter($__internal_633130ac90c4d433be57e22c2cf13518566f2eb6d8759dd26ca826fd7889da56_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        $__internal_c8b7a78e6aecdd42069d20e668ddd420633a1b21152ef9746fdc513c5ccd70f0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c8b7a78e6aecdd42069d20e668ddd420633a1b21152ef9746fdc513c5ccd70f0->enter($__internal_c8b7a78e6aecdd42069d20e668ddd420633a1b21152ef9746fdc513c5ccd70f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/exception.xml.twig", array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception"))));
        echo "
";
        
        $__internal_633130ac90c4d433be57e22c2cf13518566f2eb6d8759dd26ca826fd7889da56->leave($__internal_633130ac90c4d433be57e22c2cf13518566f2eb6d8759dd26ca826fd7889da56_prof);

        
        $__internal_c8b7a78e6aecdd42069d20e668ddd420633a1b21152ef9746fdc513c5ccd70f0->leave($__internal_c8b7a78e6aecdd42069d20e668ddd420633a1b21152ef9746fdc513c5ccd70f0_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.atom.twig";
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
", "TwigBundle:Exception:exception.atom.twig", "/var/www/html/vg-api/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.atom.twig");
    }
}
