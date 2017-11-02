<?php

/* WebProfilerBundle:Profiler:toolbar_redirect.html.twig */
class __TwigTemplate_777a7a9b327085f24bf97568393455d4a39fee819858ea242c95c32c1da5a4f4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_9b71e00636476d148bdf854c7e97dc625f7e510950d70502ec5efb3cae540a15 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9b71e00636476d148bdf854c7e97dc625f7e510950d70502ec5efb3cae540a15->enter($__internal_9b71e00636476d148bdf854c7e97dc625f7e510950d70502ec5efb3cae540a15_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $__internal_26a5990e8544c3da018ff45f42880f5bf838f21cdd0d23620ebb9e62c7bf9c5d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_26a5990e8544c3da018ff45f42880f5bf838f21cdd0d23620ebb9e62c7bf9c5d->enter($__internal_26a5990e8544c3da018ff45f42880f5bf838f21cdd0d23620ebb9e62c7bf9c5d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9b71e00636476d148bdf854c7e97dc625f7e510950d70502ec5efb3cae540a15->leave($__internal_9b71e00636476d148bdf854c7e97dc625f7e510950d70502ec5efb3cae540a15_prof);

        
        $__internal_26a5990e8544c3da018ff45f42880f5bf838f21cdd0d23620ebb9e62c7bf9c5d->leave($__internal_26a5990e8544c3da018ff45f42880f5bf838f21cdd0d23620ebb9e62c7bf9c5d_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_274ab4eacfcfbb61fd7fefa9d3accdb19f8eb58c5f3c3397e487a1eaf904cab3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_274ab4eacfcfbb61fd7fefa9d3accdb19f8eb58c5f3c3397e487a1eaf904cab3->enter($__internal_274ab4eacfcfbb61fd7fefa9d3accdb19f8eb58c5f3c3397e487a1eaf904cab3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_065b3e41a658d1b17d639cd08efb62ec77fa8c710d6fc2edc86fc579196b1ee6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_065b3e41a658d1b17d639cd08efb62ec77fa8c710d6fc2edc86fc579196b1ee6->enter($__internal_065b3e41a658d1b17d639cd08efb62ec77fa8c710d6fc2edc86fc579196b1ee6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_065b3e41a658d1b17d639cd08efb62ec77fa8c710d6fc2edc86fc579196b1ee6->leave($__internal_065b3e41a658d1b17d639cd08efb62ec77fa8c710d6fc2edc86fc579196b1ee6_prof);

        
        $__internal_274ab4eacfcfbb61fd7fefa9d3accdb19f8eb58c5f3c3397e487a1eaf904cab3->leave($__internal_274ab4eacfcfbb61fd7fefa9d3accdb19f8eb58c5f3c3397e487a1eaf904cab3_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_e5434d3136da9e278428ccb3ef9b2d23b9a38afa4030c725fa7459c12c1506f5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e5434d3136da9e278428ccb3ef9b2d23b9a38afa4030c725fa7459c12c1506f5->enter($__internal_e5434d3136da9e278428ccb3ef9b2d23b9a38afa4030c725fa7459c12c1506f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_ae326417a597470b4b48676ddb7ead59fe78c1059652da9f7c8947aac1a91830 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ae326417a597470b4b48676ddb7ead59fe78c1059652da9f7c8947aac1a91830->enter($__internal_ae326417a597470b4b48676ddb7ead59fe78c1059652da9f7c8947aac1a91830_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
        
        $__internal_ae326417a597470b4b48676ddb7ead59fe78c1059652da9f7c8947aac1a91830->leave($__internal_ae326417a597470b4b48676ddb7ead59fe78c1059652da9f7c8947aac1a91830_prof);

        
        $__internal_e5434d3136da9e278428ccb3ef9b2d23b9a38afa4030c725fa7459c12c1506f5->leave($__internal_e5434d3136da9e278428ccb3ef9b2d23b9a38afa4030c725fa7459c12c1506f5_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 8,  68 => 6,  59 => 5,  41 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block title 'Redirection Intercepted' %}

{% block body %}
    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"{{ location }}\">{{ location }}</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
{% endblock %}
", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", "/var/www/html/vg-api/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/toolbar_redirect.html.twig");
    }
}
