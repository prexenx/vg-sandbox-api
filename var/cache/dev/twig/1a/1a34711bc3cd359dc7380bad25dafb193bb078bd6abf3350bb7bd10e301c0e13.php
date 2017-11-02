<?php

/* TwigBundle:Exception:error.css.twig */
class __TwigTemplate_779a23d8b42e3533c00bd514b20928df0d0c7fa86fe8c7d9f8195c03a8cf3ee6 extends Twig_Template
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
        $__internal_ea433167f04fb013c931057ec41879e92f00cb7606898f59a9c0e0f52ca96f3c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ea433167f04fb013c931057ec41879e92f00cb7606898f59a9c0e0f52ca96f3c->enter($__internal_ea433167f04fb013c931057ec41879e92f00cb7606898f59a9c0e0f52ca96f3c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

        $__internal_a550f1b541cfff6316f67b61ad967917e7d01cf88363bb685437dc79874eacc1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a550f1b541cfff6316f67b61ad967917e7d01cf88363bb685437dc79874eacc1->enter($__internal_a550f1b541cfff6316f67b61ad967917e7d01cf88363bb685437dc79874eacc1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "css", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "css", null, true);
        echo "

*/
";
        
        $__internal_ea433167f04fb013c931057ec41879e92f00cb7606898f59a9c0e0f52ca96f3c->leave($__internal_ea433167f04fb013c931057ec41879e92f00cb7606898f59a9c0e0f52ca96f3c_prof);

        
        $__internal_a550f1b541cfff6316f67b61ad967917e7d01cf88363bb685437dc79874eacc1->leave($__internal_a550f1b541cfff6316f67b61ad967917e7d01cf88363bb685437dc79874eacc1_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.css.twig";
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
", "TwigBundle:Exception:error.css.twig", "/var/www/html/vg-api/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.css.twig");
    }
}
