<?php

/* TwigBundle:Exception:error.txt.twig */
class __TwigTemplate_7567692e4c1afd46436b723d8f4367726634a9c32a0484774a81bf15f4e6d589 extends Twig_Template
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
        $__internal_731f834564777740ec7ac61cfa062bc79150c9ea6014552eb57dfd92e857b56e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_731f834564777740ec7ac61cfa062bc79150c9ea6014552eb57dfd92e857b56e->enter($__internal_731f834564777740ec7ac61cfa062bc79150c9ea6014552eb57dfd92e857b56e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.txt.twig"));

        $__internal_8846d41877442c394290f0103e549dc253a974562f8e69ac2bc4c2689a43ce84 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8846d41877442c394290f0103e549dc253a974562f8e69ac2bc4c2689a43ce84->enter($__internal_8846d41877442c394290f0103e549dc253a974562f8e69ac2bc4c2689a43ce84_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.txt.twig"));

        // line 1
        echo "Oops! An Error Occurred
=======================

The server returned a \"";
        // line 4
        echo (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code"));
        echo " ";
        echo (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text"));
        echo "\".

Something is broken. Please let us know what you were doing when this error occurred.
We will fix it as soon as possible. Sorry for any inconvenience caused.
";
        
        $__internal_731f834564777740ec7ac61cfa062bc79150c9ea6014552eb57dfd92e857b56e->leave($__internal_731f834564777740ec7ac61cfa062bc79150c9ea6014552eb57dfd92e857b56e_prof);

        
        $__internal_8846d41877442c394290f0103e549dc253a974562f8e69ac2bc4c2689a43ce84->leave($__internal_8846d41877442c394290f0103e549dc253a974562f8e69ac2bc4c2689a43ce84_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 4,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("Oops! An Error Occurred
=======================

The server returned a \"{{ status_code }} {{ status_text }}\".

Something is broken. Please let us know what you were doing when this error occurred.
We will fix it as soon as possible. Sorry for any inconvenience caused.
", "TwigBundle:Exception:error.txt.twig", "/var/www/html/vg-api/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.txt.twig");
    }
}
