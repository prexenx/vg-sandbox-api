<?php

/* WebProfilerBundle:Collector:exception.css.twig */
class __TwigTemplate_a0440aea81d5dfe45c3b4826722d36a4f68b8ad76064c526da155f87b52c580c extends Twig_Template
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
        $__internal_5ac4e7c2b43a437de127b413c0c4597bf0a9f1babcb651d16c3614c4099b9a3e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5ac4e7c2b43a437de127b413c0c4597bf0a9f1babcb651d16c3614c4099b9a3e->enter($__internal_5ac4e7c2b43a437de127b413c0c4597bf0a9f1babcb651d16c3614c4099b9a3e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.css.twig"));

        $__internal_1dc8b4ff68a243cdadb696c081c4aff2c5162e23a185b626a6e1d45c7e548ffc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1dc8b4ff68a243cdadb696c081c4aff2c5162e23a185b626a6e1d45c7e548ffc->enter($__internal_1dc8b4ff68a243cdadb696c081c4aff2c5162e23a185b626a6e1d45c7e548ffc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.css.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/exception.css.twig");
        echo "

.container {
    max-width: auto;
    margin: 0;
    padding: 0;
}
.container .container {
    padding: 0;
}

.exception-summary {
    background: #FFF;
    border: 1px solid #E0E0E0;
    box-shadow: 0 0 1px rgba(128, 128, 128, .2);
    margin: 1em 0;
    padding: 10px;
}
.exception-summary.exception-without-message {
    display: none;
}

.exception-message {
    color: #B0413E;
}

.exception-metadata,
.exception-illustration {
    display: none;
}

.exception-message-wrapper .container {
    min-height: auto;
}
";
        
        $__internal_5ac4e7c2b43a437de127b413c0c4597bf0a9f1babcb651d16c3614c4099b9a3e->leave($__internal_5ac4e7c2b43a437de127b413c0c4597bf0a9f1babcb651d16c3614c4099b9a3e_prof);

        
        $__internal_1dc8b4ff68a243cdadb696c081c4aff2c5162e23a185b626a6e1d45c7e548ffc->leave($__internal_1dc8b4ff68a243cdadb696c081c4aff2c5162e23a185b626a6e1d45c7e548ffc_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:exception.css.twig";
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
        return new Twig_Source("{{ include('@Twig/exception.css.twig') }}

.container {
    max-width: auto;
    margin: 0;
    padding: 0;
}
.container .container {
    padding: 0;
}

.exception-summary {
    background: #FFF;
    border: 1px solid #E0E0E0;
    box-shadow: 0 0 1px rgba(128, 128, 128, .2);
    margin: 1em 0;
    padding: 10px;
}
.exception-summary.exception-without-message {
    display: none;
}

.exception-message {
    color: #B0413E;
}

.exception-metadata,
.exception-illustration {
    display: none;
}

.exception-message-wrapper .container {
    min-height: auto;
}
", "WebProfilerBundle:Collector:exception.css.twig", "/var/www/html/vg-api/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/exception.css.twig");
    }
}
