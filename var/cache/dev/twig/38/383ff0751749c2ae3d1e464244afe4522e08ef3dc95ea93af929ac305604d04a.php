<?php

/* TwigBundle:Exception:exception.css.twig */
class __TwigTemplate_682ba5685a8dabbb82e1eeaec0b55313e2aa4da871e1b850f298bacb93d21afd extends Twig_Template
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
        $__internal_9bee95b51797e0843c8a3169ed7df24fab922285e320362f2db077ef2a2d1791 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9bee95b51797e0843c8a3169ed7df24fab922285e320362f2db077ef2a2d1791->enter($__internal_9bee95b51797e0843c8a3169ed7df24fab922285e320362f2db077ef2a2d1791_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        $__internal_b5ed4fcac0b191e62d636337a8575b1a259c0b1832b83e90c6e5f31f09854e5a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b5ed4fcac0b191e62d636337a8575b1a259c0b1832b83e90c6e5f31f09854e5a->enter($__internal_b5ed4fcac0b191e62d636337a8575b1a259c0b1832b83e90c6e5f31f09854e5a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_include($this->env, $context, "@Twig/Exception/exception.txt.twig", array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception"))));
        echo "
*/
";
        
        $__internal_9bee95b51797e0843c8a3169ed7df24fab922285e320362f2db077ef2a2d1791->leave($__internal_9bee95b51797e0843c8a3169ed7df24fab922285e320362f2db077ef2a2d1791_prof);

        
        $__internal_b5ed4fcac0b191e62d636337a8575b1a259c0b1832b83e90c6e5f31f09854e5a->leave($__internal_b5ed4fcac0b191e62d636337a8575b1a259c0b1832b83e90c6e5f31f09854e5a_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.css.twig";
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
", "TwigBundle:Exception:exception.css.twig", "/var/www/html/vg-api/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.css.twig");
    }
}
