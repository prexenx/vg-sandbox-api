<?php

/* TwigBundle:Exception:error.js.twig */
class __TwigTemplate_241a6704198530e9565c230530e67bb690d4fa74ca82ca559486f836ec4818a3 extends Twig_Template
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
        $__internal_8334539cfb91eae363925eba0879f76ac83f3a0f6d40af33d608c1dadfaec399 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8334539cfb91eae363925eba0879f76ac83f3a0f6d40af33d608c1dadfaec399->enter($__internal_8334539cfb91eae363925eba0879f76ac83f3a0f6d40af33d608c1dadfaec399_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

        $__internal_912d724ebc6c0003493499b3f36554699922b948163478cdfd24a98803560f3e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_912d724ebc6c0003493499b3f36554699922b948163478cdfd24a98803560f3e->enter($__internal_912d724ebc6c0003493499b3f36554699922b948163478cdfd24a98803560f3e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "js", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "js", null, true);
        echo "

*/
";
        
        $__internal_8334539cfb91eae363925eba0879f76ac83f3a0f6d40af33d608c1dadfaec399->leave($__internal_8334539cfb91eae363925eba0879f76ac83f3a0f6d40af33d608c1dadfaec399_prof);

        
        $__internal_912d724ebc6c0003493499b3f36554699922b948163478cdfd24a98803560f3e->leave($__internal_912d724ebc6c0003493499b3f36554699922b948163478cdfd24a98803560f3e_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.js.twig";
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
{{ status_code }} {{ status_text }}

*/
", "TwigBundle:Exception:error.js.twig", "/var/www/html/vg-api/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.js.twig");
    }
}
