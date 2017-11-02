<?php

/* TwigBundle::layout.html.twig */
class __TwigTemplate_557751efe79df22ea1cb86f41bc2c4713401ad42382c473cab619c9a73afb738 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d1226488798f12e34f93b4adbde37a9ff0f6d062b497628a84ca4307e8227094 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d1226488798f12e34f93b4adbde37a9ff0f6d062b497628a84ca4307e8227094->enter($__internal_d1226488798f12e34f93b4adbde37a9ff0f6d062b497628a84ca4307e8227094_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle::layout.html.twig"));

        $__internal_7606635993d133c57bb4e4cce05cded4669863894d379365fd2c226dbcf788a0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7606635993d133c57bb4e4cce05cded4669863894d379365fd2c226dbcf788a0->enter($__internal_7606635993d133c57bb4e4cce05cded4669863894d379365fd2c226dbcf788a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle::layout.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\" />
        <title>";
        // line 7
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 8
        echo twig_include($this->env, $context, "@Twig/images/favicon.png.base64");
        echo "\">
        <style>";
        // line 9
        echo twig_include($this->env, $context, "@Twig/exception.css.twig");
        echo "</style>
        ";
        // line 10
        $this->displayBlock('head', $context, $blocks);
        // line 11
        echo "    </head>
    <body>
        <header>
            <div class=\"container\">
                <h1 class=\"logo\">";
        // line 15
        echo twig_include($this->env, $context, "@Twig/images/symfony-logo.svg");
        echo " Symfony Exception</h1>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/doc\">
                        <span class=\"icon\">";
        // line 19
        echo twig_include($this->env, $context, "@Twig/images/icon-book.svg");
        echo "</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Docs
                    </a>
                </div>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/support\">
                        <span class=\"icon\">";
        // line 26
        echo twig_include($this->env, $context, "@Twig/images/icon-support.svg");
        echo "</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Support
                    </a>
                </div>
            </div>
        </header>

        ";
        // line 33
        $this->displayBlock('body', $context, $blocks);
        // line 34
        echo "        ";
        echo twig_include($this->env, $context, "@Twig/base_js.html.twig");
        echo "
    </body>
</html>
";
        
        $__internal_d1226488798f12e34f93b4adbde37a9ff0f6d062b497628a84ca4307e8227094->leave($__internal_d1226488798f12e34f93b4adbde37a9ff0f6d062b497628a84ca4307e8227094_prof);

        
        $__internal_7606635993d133c57bb4e4cce05cded4669863894d379365fd2c226dbcf788a0->leave($__internal_7606635993d133c57bb4e4cce05cded4669863894d379365fd2c226dbcf788a0_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_b498c1e729e952ff32da538b52f80e4c714cda1d3db12be0ec11f0301a0fd894 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b498c1e729e952ff32da538b52f80e4c714cda1d3db12be0ec11f0301a0fd894->enter($__internal_b498c1e729e952ff32da538b52f80e4c714cda1d3db12be0ec11f0301a0fd894_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_fb3aeccdfd78309bacb0a956748b0ea1837f779f437783fcc722ee7350706948 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fb3aeccdfd78309bacb0a956748b0ea1837f779f437783fcc722ee7350706948->enter($__internal_fb3aeccdfd78309bacb0a956748b0ea1837f779f437783fcc722ee7350706948_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_fb3aeccdfd78309bacb0a956748b0ea1837f779f437783fcc722ee7350706948->leave($__internal_fb3aeccdfd78309bacb0a956748b0ea1837f779f437783fcc722ee7350706948_prof);

        
        $__internal_b498c1e729e952ff32da538b52f80e4c714cda1d3db12be0ec11f0301a0fd894->leave($__internal_b498c1e729e952ff32da538b52f80e4c714cda1d3db12be0ec11f0301a0fd894_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_7ce38c87f1c2781dbd288862b7108412558d105b3ac04a178ee423d962881fa2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7ce38c87f1c2781dbd288862b7108412558d105b3ac04a178ee423d962881fa2->enter($__internal_7ce38c87f1c2781dbd288862b7108412558d105b3ac04a178ee423d962881fa2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_5b89a85cc6fdae08124089e5ba5da29d2e8f38f046c626f702b3f871c80d20bf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5b89a85cc6fdae08124089e5ba5da29d2e8f38f046c626f702b3f871c80d20bf->enter($__internal_5b89a85cc6fdae08124089e5ba5da29d2e8f38f046c626f702b3f871c80d20bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_5b89a85cc6fdae08124089e5ba5da29d2e8f38f046c626f702b3f871c80d20bf->leave($__internal_5b89a85cc6fdae08124089e5ba5da29d2e8f38f046c626f702b3f871c80d20bf_prof);

        
        $__internal_7ce38c87f1c2781dbd288862b7108412558d105b3ac04a178ee423d962881fa2->leave($__internal_7ce38c87f1c2781dbd288862b7108412558d105b3ac04a178ee423d962881fa2_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_4eaec932e4bff4bc6faddb8304d2ce7ef6463322defa935a99eead1bc7efbe5b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4eaec932e4bff4bc6faddb8304d2ce7ef6463322defa935a99eead1bc7efbe5b->enter($__internal_4eaec932e4bff4bc6faddb8304d2ce7ef6463322defa935a99eead1bc7efbe5b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_bd72510f49a345cb51812630d4052d816873eeb2e40913633df3d1f377b1d4ce = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bd72510f49a345cb51812630d4052d816873eeb2e40913633df3d1f377b1d4ce->enter($__internal_bd72510f49a345cb51812630d4052d816873eeb2e40913633df3d1f377b1d4ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_bd72510f49a345cb51812630d4052d816873eeb2e40913633df3d1f377b1d4ce->leave($__internal_bd72510f49a345cb51812630d4052d816873eeb2e40913633df3d1f377b1d4ce_prof);

        
        $__internal_4eaec932e4bff4bc6faddb8304d2ce7ef6463322defa935a99eead1bc7efbe5b->leave($__internal_4eaec932e4bff4bc6faddb8304d2ce7ef6463322defa935a99eead1bc7efbe5b_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  137 => 33,  120 => 10,  103 => 7,  88 => 34,  86 => 33,  76 => 26,  66 => 19,  59 => 15,  53 => 11,  51 => 10,  47 => 9,  43 => 8,  39 => 7,  33 => 4,  28 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"{{ _charset }}\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\" />
        <title>{% block title %}{% endblock %}</title>
        <link rel=\"icon\" type=\"image/png\" href=\"{{ include('@Twig/images/favicon.png.base64') }}\">
        <style>{{ include('@Twig/exception.css.twig') }}</style>
        {% block head %}{% endblock %}
    </head>
    <body>
        <header>
            <div class=\"container\">
                <h1 class=\"logo\">{{ include('@Twig/images/symfony-logo.svg') }} Symfony Exception</h1>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/doc\">
                        <span class=\"icon\">{{ include('@Twig/images/icon-book.svg') }}</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Docs
                    </a>
                </div>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/support\">
                        <span class=\"icon\">{{ include('@Twig/images/icon-support.svg') }}</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Support
                    </a>
                </div>
            </div>
        </header>

        {% block body %}{% endblock %}
        {{ include('@Twig/base_js.html.twig') }}
    </body>
</html>
", "TwigBundle::layout.html.twig", "/var/www/html/vg-api/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/layout.html.twig");
    }
}
