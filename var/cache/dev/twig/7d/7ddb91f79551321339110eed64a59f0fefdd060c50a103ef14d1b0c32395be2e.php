<?php

/* TwigBundle:Exception:error.atom.twig */
class __TwigTemplate_3c25aa4c6058049745c8bc7637fe8d29873589b7b7e55a9df885714ffc611052 extends Twig_Template
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
        $__internal_3495d0566575dce6827bee39682e1fcabb846a8f05cfac26ee7bbfbad8d149f9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3495d0566575dce6827bee39682e1fcabb846a8f05cfac26ee7bbfbad8d149f9->enter($__internal_3495d0566575dce6827bee39682e1fcabb846a8f05cfac26ee7bbfbad8d149f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        $__internal_7639a118508e50dea6ddcce72b9814055927628b2949b60d090febd09b10e651 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7639a118508e50dea6ddcce72b9814055927628b2949b60d090febd09b10e651->enter($__internal_7639a118508e50dea6ddcce72b9814055927628b2949b60d090febd09b10e651_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/error.xml.twig");
        echo "
";
        
        $__internal_3495d0566575dce6827bee39682e1fcabb846a8f05cfac26ee7bbfbad8d149f9->leave($__internal_3495d0566575dce6827bee39682e1fcabb846a8f05cfac26ee7bbfbad8d149f9_prof);

        
        $__internal_7639a118508e50dea6ddcce72b9814055927628b2949b60d090febd09b10e651->leave($__internal_7639a118508e50dea6ddcce72b9814055927628b2949b60d090febd09b10e651_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.atom.twig";
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
", "TwigBundle:Exception:error.atom.twig", "/var/www/html/vg-api/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.atom.twig");
    }
}
