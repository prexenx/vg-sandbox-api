<?php

/* TwigBundle:Exception:error.xml.twig */
class __TwigTemplate_75346818c51a98bcf281c69879aef63a5ce05872891f16e9f225976d8a225790 extends Twig_Template
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
        $__internal_a1e4df4a806a05fd09ed984bbab04c98525dd1f258572396dba920e1b3afff83 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a1e4df4a806a05fd09ed984bbab04c98525dd1f258572396dba920e1b3afff83->enter($__internal_a1e4df4a806a05fd09ed984bbab04c98525dd1f258572396dba920e1b3afff83_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.xml.twig"));

        $__internal_a3222126b282e519709b3f9eb83d93a1ca7d8d3aa981e8965b20b1913de2eaab = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a3222126b282e519709b3f9eb83d93a1ca7d8d3aa981e8965b20b1913de2eaab->enter($__internal_a3222126b282e519709b3f9eb83d93a1ca7d8d3aa981e8965b20b1913de2eaab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.xml.twig"));

        // line 1
        echo "<?xml version=\"1.0\" encoding=\"";
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" ?>

<error code=\"";
        // line 3
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo "\" message=\"";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo "\" />
";
        
        $__internal_a1e4df4a806a05fd09ed984bbab04c98525dd1f258572396dba920e1b3afff83->leave($__internal_a1e4df4a806a05fd09ed984bbab04c98525dd1f258572396dba920e1b3afff83_prof);

        
        $__internal_a3222126b282e519709b3f9eb83d93a1ca7d8d3aa981e8965b20b1913de2eaab->leave($__internal_a3222126b282e519709b3f9eb83d93a1ca7d8d3aa981e8965b20b1913de2eaab_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.xml.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 3,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?xml version=\"1.0\" encoding=\"{{ _charset }}\" ?>

<error code=\"{{ status_code }}\" message=\"{{ status_text }}\" />
", "TwigBundle:Exception:error.xml.twig", "/var/www/html/vg-api/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.xml.twig");
    }
}
