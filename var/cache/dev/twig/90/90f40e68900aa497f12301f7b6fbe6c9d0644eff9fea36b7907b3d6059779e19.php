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
        $__internal_67702db6b4bd35a13ff968919f7ca40a7f21d5bf9cc8255df6d64278cc682e6c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_67702db6b4bd35a13ff968919f7ca40a7f21d5bf9cc8255df6d64278cc682e6c->enter($__internal_67702db6b4bd35a13ff968919f7ca40a7f21d5bf9cc8255df6d64278cc682e6c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $__internal_608ed1f489903b4a29b9881c66960c2f1dddd641bf279af8ae8ebe38f6f12dbc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_608ed1f489903b4a29b9881c66960c2f1dddd641bf279af8ae8ebe38f6f12dbc->enter($__internal_608ed1f489903b4a29b9881c66960c2f1dddd641bf279af8ae8ebe38f6f12dbc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_67702db6b4bd35a13ff968919f7ca40a7f21d5bf9cc8255df6d64278cc682e6c->leave($__internal_67702db6b4bd35a13ff968919f7ca40a7f21d5bf9cc8255df6d64278cc682e6c_prof);

        
        $__internal_608ed1f489903b4a29b9881c66960c2f1dddd641bf279af8ae8ebe38f6f12dbc->leave($__internal_608ed1f489903b4a29b9881c66960c2f1dddd641bf279af8ae8ebe38f6f12dbc_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_33c419990704e07205c2c04d737756f88d08b324103e37818f1b1493e33d0052 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_33c419990704e07205c2c04d737756f88d08b324103e37818f1b1493e33d0052->enter($__internal_33c419990704e07205c2c04d737756f88d08b324103e37818f1b1493e33d0052_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_087c1c6a7865b9dd8d4ae7b03b466e3f296d9ef8e7ddb8077c50c12be0264977 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_087c1c6a7865b9dd8d4ae7b03b466e3f296d9ef8e7ddb8077c50c12be0264977->enter($__internal_087c1c6a7865b9dd8d4ae7b03b466e3f296d9ef8e7ddb8077c50c12be0264977_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_087c1c6a7865b9dd8d4ae7b03b466e3f296d9ef8e7ddb8077c50c12be0264977->leave($__internal_087c1c6a7865b9dd8d4ae7b03b466e3f296d9ef8e7ddb8077c50c12be0264977_prof);

        
        $__internal_33c419990704e07205c2c04d737756f88d08b324103e37818f1b1493e33d0052->leave($__internal_33c419990704e07205c2c04d737756f88d08b324103e37818f1b1493e33d0052_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_ff19d529378dae2b91a63c0c20056b2f4cc8e5bd17c042d70a3e2671aaefb5c4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ff19d529378dae2b91a63c0c20056b2f4cc8e5bd17c042d70a3e2671aaefb5c4->enter($__internal_ff19d529378dae2b91a63c0c20056b2f4cc8e5bd17c042d70a3e2671aaefb5c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_309d2545f3e03fdcbc9286b253ac835b7137b920e90665d739b6df2d0b1adb61 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_309d2545f3e03fdcbc9286b253ac835b7137b920e90665d739b6df2d0b1adb61->enter($__internal_309d2545f3e03fdcbc9286b253ac835b7137b920e90665d739b6df2d0b1adb61_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_309d2545f3e03fdcbc9286b253ac835b7137b920e90665d739b6df2d0b1adb61->leave($__internal_309d2545f3e03fdcbc9286b253ac835b7137b920e90665d739b6df2d0b1adb61_prof);

        
        $__internal_ff19d529378dae2b91a63c0c20056b2f4cc8e5bd17c042d70a3e2671aaefb5c4->leave($__internal_ff19d529378dae2b91a63c0c20056b2f4cc8e5bd17c042d70a3e2671aaefb5c4_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_7c55fb8b0feb81ad3061f12f59b1e715c54fa1b8207da449face08cdac7bd18e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7c55fb8b0feb81ad3061f12f59b1e715c54fa1b8207da449face08cdac7bd18e->enter($__internal_7c55fb8b0feb81ad3061f12f59b1e715c54fa1b8207da449face08cdac7bd18e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_51119f9db8ea7fb720e7bcf265b8030da6c59dfdd31d2ab5e49ced49e1e89077 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_51119f9db8ea7fb720e7bcf265b8030da6c59dfdd31d2ab5e49ced49e1e89077->enter($__internal_51119f9db8ea7fb720e7bcf265b8030da6c59dfdd31d2ab5e49ced49e1e89077_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 141)->display($context);
        
        $__internal_51119f9db8ea7fb720e7bcf265b8030da6c59dfdd31d2ab5e49ced49e1e89077->leave($__internal_51119f9db8ea7fb720e7bcf265b8030da6c59dfdd31d2ab5e49ced49e1e89077_prof);

        
        $__internal_7c55fb8b0feb81ad3061f12f59b1e715c54fa1b8207da449face08cdac7bd18e->leave($__internal_7c55fb8b0feb81ad3061f12f59b1e715c54fa1b8207da449face08cdac7bd18e_prof);

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
