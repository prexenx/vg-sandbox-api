<?php

/* TwigBundle:Exception:error.rdf.twig */
class __TwigTemplate_d12cbb5f4a307c8c52b86d49a3fa7692f6156370fcf85666fca66457e95b92aa extends Twig_Template
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
        $__internal_ee4ff8758f83f8ff723b439760fb022310e2791801cffb6ab7a3a43af14c0fd4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ee4ff8758f83f8ff723b439760fb022310e2791801cffb6ab7a3a43af14c0fd4->enter($__internal_ee4ff8758f83f8ff723b439760fb022310e2791801cffb6ab7a3a43af14c0fd4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        $__internal_e30fd4f5503db678a532b1a23c97a55c102bf2a24f3b7aef6f0611a090b46772 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e30fd4f5503db678a532b1a23c97a55c102bf2a24f3b7aef6f0611a090b46772->enter($__internal_e30fd4f5503db678a532b1a23c97a55c102bf2a24f3b7aef6f0611a090b46772_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/error.xml.twig");
        echo "
";
        
        $__internal_ee4ff8758f83f8ff723b439760fb022310e2791801cffb6ab7a3a43af14c0fd4->leave($__internal_ee4ff8758f83f8ff723b439760fb022310e2791801cffb6ab7a3a43af14c0fd4_prof);

        
        $__internal_e30fd4f5503db678a532b1a23c97a55c102bf2a24f3b7aef6f0611a090b46772->leave($__internal_e30fd4f5503db678a532b1a23c97a55c102bf2a24f3b7aef6f0611a090b46772_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.rdf.twig";
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
", "TwigBundle:Exception:error.rdf.twig", "/var/www/html/vg-api/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.rdf.twig");
    }
}
