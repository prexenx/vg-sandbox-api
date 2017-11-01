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
        $__internal_e9bb4efcb85445a3984e31bede3f08a3be639b5a135f78e8ec76339e5d8d7f6a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e9bb4efcb85445a3984e31bede3f08a3be639b5a135f78e8ec76339e5d8d7f6a->enter($__internal_e9bb4efcb85445a3984e31bede3f08a3be639b5a135f78e8ec76339e5d8d7f6a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.txt.twig"));

        $__internal_eb340e3cb4e71305bfa6c59ca81d875a5a5701cb93dd122cdcc5c5d846da07be = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eb340e3cb4e71305bfa6c59ca81d875a5a5701cb93dd122cdcc5c5d846da07be->enter($__internal_eb340e3cb4e71305bfa6c59ca81d875a5a5701cb93dd122cdcc5c5d846da07be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.txt.twig"));

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
        
        $__internal_e9bb4efcb85445a3984e31bede3f08a3be639b5a135f78e8ec76339e5d8d7f6a->leave($__internal_e9bb4efcb85445a3984e31bede3f08a3be639b5a135f78e8ec76339e5d8d7f6a_prof);

        
        $__internal_eb340e3cb4e71305bfa6c59ca81d875a5a5701cb93dd122cdcc5c5d846da07be->leave($__internal_eb340e3cb4e71305bfa6c59ca81d875a5a5701cb93dd122cdcc5c5d846da07be_prof);

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
