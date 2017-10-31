<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_a0445fe8613430c43d2b8978fed1fe057294160ea90774a904b8b21dda404737 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "TwigBundle:Exception:exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
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
        $__internal_98d7a226c9537e3d203be37628082e5e302d1739a702833ff66b88b4f8290c2d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_98d7a226c9537e3d203be37628082e5e302d1739a702833ff66b88b4f8290c2d->enter($__internal_98d7a226c9537e3d203be37628082e5e302d1739a702833ff66b88b4f8290c2d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $__internal_80ef4b98dfbeb1e94b263d185254ca101d58c7b211434a6224f7857431f2bace = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_80ef4b98dfbeb1e94b263d185254ca101d58c7b211434a6224f7857431f2bace->enter($__internal_80ef4b98dfbeb1e94b263d185254ca101d58c7b211434a6224f7857431f2bace_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_98d7a226c9537e3d203be37628082e5e302d1739a702833ff66b88b4f8290c2d->leave($__internal_98d7a226c9537e3d203be37628082e5e302d1739a702833ff66b88b4f8290c2d_prof);

        
        $__internal_80ef4b98dfbeb1e94b263d185254ca101d58c7b211434a6224f7857431f2bace->leave($__internal_80ef4b98dfbeb1e94b263d185254ca101d58c7b211434a6224f7857431f2bace_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_0d573f0b41f516217657a869b9f7cdc92f87be00160406910f87b96806f444bf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0d573f0b41f516217657a869b9f7cdc92f87be00160406910f87b96806f444bf->enter($__internal_0d573f0b41f516217657a869b9f7cdc92f87be00160406910f87b96806f444bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_2a444d2873000de321a5abf44216bae277dab8104f206a4feb3d2662bb4d7734 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2a444d2873000de321a5abf44216bae277dab8104f206a4feb3d2662bb4d7734->enter($__internal_2a444d2873000de321a5abf44216bae277dab8104f206a4feb3d2662bb4d7734_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
";
        
        $__internal_2a444d2873000de321a5abf44216bae277dab8104f206a4feb3d2662bb4d7734->leave($__internal_2a444d2873000de321a5abf44216bae277dab8104f206a4feb3d2662bb4d7734_prof);

        
        $__internal_0d573f0b41f516217657a869b9f7cdc92f87be00160406910f87b96806f444bf->leave($__internal_0d573f0b41f516217657a869b9f7cdc92f87be00160406910f87b96806f444bf_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_2404defcd0575ebbad1f5ff0279eec27a9d9ad22a04027638938d1092f0a9b96 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2404defcd0575ebbad1f5ff0279eec27a9d9ad22a04027638938d1092f0a9b96->enter($__internal_2404defcd0575ebbad1f5ff0279eec27a9d9ad22a04027638938d1092f0a9b96_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_f6ef187ecc2bc5610e6056c84bb88f7f776aa19380cace1595da8baf5114fc04 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f6ef187ecc2bc5610e6056c84bb88f7f776aa19380cace1595da8baf5114fc04->enter($__internal_f6ef187ecc2bc5610e6056c84bb88f7f776aa19380cace1595da8baf5114fc04_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_f6ef187ecc2bc5610e6056c84bb88f7f776aa19380cace1595da8baf5114fc04->leave($__internal_f6ef187ecc2bc5610e6056c84bb88f7f776aa19380cace1595da8baf5114fc04_prof);

        
        $__internal_2404defcd0575ebbad1f5ff0279eec27a9d9ad22a04027638938d1092f0a9b96->leave($__internal_2404defcd0575ebbad1f5ff0279eec27a9d9ad22a04027638938d1092f0a9b96_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_507e568e39d8edaf6ded6f025bac175488c5bb4ed50af339fd68d58fc77a42a2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_507e568e39d8edaf6ded6f025bac175488c5bb4ed50af339fd68d58fc77a42a2->enter($__internal_507e568e39d8edaf6ded6f025bac175488c5bb4ed50af339fd68d58fc77a42a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_e42aeacecbed1821520c589d2b33a375d9064b8cdeb3aac8bae325c30921ffc8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e42aeacecbed1821520c589d2b33a375d9064b8cdeb3aac8bae325c30921ffc8->enter($__internal_e42aeacecbed1821520c589d2b33a375d9064b8cdeb3aac8bae325c30921ffc8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 141)->display($context);
        
        $__internal_e42aeacecbed1821520c589d2b33a375d9064b8cdeb3aac8bae325c30921ffc8->leave($__internal_e42aeacecbed1821520c589d2b33a375d9064b8cdeb3aac8bae325c30921ffc8_prof);

        
        $__internal_507e568e39d8edaf6ded6f025bac175488c5bb4ed50af339fd68d58fc77a42a2->leave($__internal_507e568e39d8edaf6ded6f025bac175488c5bb4ed50af339fd68d58fc77a42a2_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  226 => 141,  217 => 140,  200 => 137,  191 => 136,  51 => 4,  42 => 3,  11 => 1,);
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

{% block head %}
    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
", "TwigBundle:Exception:exception_full.html.twig", "/var/www/html/vg-api/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}
