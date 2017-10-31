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
        $__internal_38e12d61c466afa6f287452aef419dcef0ea9c6ccc3742835eb0e64509d74b6c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_38e12d61c466afa6f287452aef419dcef0ea9c6ccc3742835eb0e64509d74b6c->enter($__internal_38e12d61c466afa6f287452aef419dcef0ea9c6ccc3742835eb0e64509d74b6c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle::layout.html.twig"));

        $__internal_60cf522fad5b4d12b42318d9e5cc4e871c195c57ae7e5220c958f2d0f21f200d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_60cf522fad5b4d12b42318d9e5cc4e871c195c57ae7e5220c958f2d0f21f200d->enter($__internal_60cf522fad5b4d12b42318d9e5cc4e871c195c57ae7e5220c958f2d0f21f200d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle::layout.html.twig"));

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
        
        $__internal_38e12d61c466afa6f287452aef419dcef0ea9c6ccc3742835eb0e64509d74b6c->leave($__internal_38e12d61c466afa6f287452aef419dcef0ea9c6ccc3742835eb0e64509d74b6c_prof);

        
        $__internal_60cf522fad5b4d12b42318d9e5cc4e871c195c57ae7e5220c958f2d0f21f200d->leave($__internal_60cf522fad5b4d12b42318d9e5cc4e871c195c57ae7e5220c958f2d0f21f200d_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_2fa68097bb2d923483971fa5ed3b0472161912c8004cb309ef02c17e322fb6f0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2fa68097bb2d923483971fa5ed3b0472161912c8004cb309ef02c17e322fb6f0->enter($__internal_2fa68097bb2d923483971fa5ed3b0472161912c8004cb309ef02c17e322fb6f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_d30663a93e73befb97dd60d74a1d556cbb939f6cb55681d5113f82514e11fd76 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d30663a93e73befb97dd60d74a1d556cbb939f6cb55681d5113f82514e11fd76->enter($__internal_d30663a93e73befb97dd60d74a1d556cbb939f6cb55681d5113f82514e11fd76_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_d30663a93e73befb97dd60d74a1d556cbb939f6cb55681d5113f82514e11fd76->leave($__internal_d30663a93e73befb97dd60d74a1d556cbb939f6cb55681d5113f82514e11fd76_prof);

        
        $__internal_2fa68097bb2d923483971fa5ed3b0472161912c8004cb309ef02c17e322fb6f0->leave($__internal_2fa68097bb2d923483971fa5ed3b0472161912c8004cb309ef02c17e322fb6f0_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_edf86f1d86e31003443e608c08f64cb3b65f23c3206e854065c8f2c229f24eaa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_edf86f1d86e31003443e608c08f64cb3b65f23c3206e854065c8f2c229f24eaa->enter($__internal_edf86f1d86e31003443e608c08f64cb3b65f23c3206e854065c8f2c229f24eaa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_ae66140e27dce8503e980cb7465ee93c62e20810078bbf94dcd3bfe611f418b3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ae66140e27dce8503e980cb7465ee93c62e20810078bbf94dcd3bfe611f418b3->enter($__internal_ae66140e27dce8503e980cb7465ee93c62e20810078bbf94dcd3bfe611f418b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_ae66140e27dce8503e980cb7465ee93c62e20810078bbf94dcd3bfe611f418b3->leave($__internal_ae66140e27dce8503e980cb7465ee93c62e20810078bbf94dcd3bfe611f418b3_prof);

        
        $__internal_edf86f1d86e31003443e608c08f64cb3b65f23c3206e854065c8f2c229f24eaa->leave($__internal_edf86f1d86e31003443e608c08f64cb3b65f23c3206e854065c8f2c229f24eaa_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_ff3eecb9e174f77164b31478600b81395926a1d144f739db2c86ff9a7b6ad19b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ff3eecb9e174f77164b31478600b81395926a1d144f739db2c86ff9a7b6ad19b->enter($__internal_ff3eecb9e174f77164b31478600b81395926a1d144f739db2c86ff9a7b6ad19b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_ab42dd5bb2a76388f10544c5953ef8fd72d26c8d2a51d7fb41fe50180938dce8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ab42dd5bb2a76388f10544c5953ef8fd72d26c8d2a51d7fb41fe50180938dce8->enter($__internal_ab42dd5bb2a76388f10544c5953ef8fd72d26c8d2a51d7fb41fe50180938dce8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_ab42dd5bb2a76388f10544c5953ef8fd72d26c8d2a51d7fb41fe50180938dce8->leave($__internal_ab42dd5bb2a76388f10544c5953ef8fd72d26c8d2a51d7fb41fe50180938dce8_prof);

        
        $__internal_ff3eecb9e174f77164b31478600b81395926a1d144f739db2c86ff9a7b6ad19b->leave($__internal_ff3eecb9e174f77164b31478600b81395926a1d144f739db2c86ff9a7b6ad19b_prof);

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
