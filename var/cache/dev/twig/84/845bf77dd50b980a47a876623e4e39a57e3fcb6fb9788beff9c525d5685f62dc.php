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
        $__internal_73133e30eb8f444e7b41f4e2c71a340aa2d6960c57bb6ad284ee8db374f9f53f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_73133e30eb8f444e7b41f4e2c71a340aa2d6960c57bb6ad284ee8db374f9f53f->enter($__internal_73133e30eb8f444e7b41f4e2c71a340aa2d6960c57bb6ad284ee8db374f9f53f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle::layout.html.twig"));

        $__internal_418b411d5880e65202416b6da724cf28e2a8cfd71a9f7fa7b7bd59d980d16a86 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_418b411d5880e65202416b6da724cf28e2a8cfd71a9f7fa7b7bd59d980d16a86->enter($__internal_418b411d5880e65202416b6da724cf28e2a8cfd71a9f7fa7b7bd59d980d16a86_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle::layout.html.twig"));

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
        
        $__internal_73133e30eb8f444e7b41f4e2c71a340aa2d6960c57bb6ad284ee8db374f9f53f->leave($__internal_73133e30eb8f444e7b41f4e2c71a340aa2d6960c57bb6ad284ee8db374f9f53f_prof);

        
        $__internal_418b411d5880e65202416b6da724cf28e2a8cfd71a9f7fa7b7bd59d980d16a86->leave($__internal_418b411d5880e65202416b6da724cf28e2a8cfd71a9f7fa7b7bd59d980d16a86_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_b219012f84e7b3d2db329e3bda827e398451190fbd0a25ff4db9c1dd36ca5fa9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b219012f84e7b3d2db329e3bda827e398451190fbd0a25ff4db9c1dd36ca5fa9->enter($__internal_b219012f84e7b3d2db329e3bda827e398451190fbd0a25ff4db9c1dd36ca5fa9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_d92184b683a803aec5fea8fd7a6ffe29b9e3e14267d049228df3e99e5d8e2a3c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d92184b683a803aec5fea8fd7a6ffe29b9e3e14267d049228df3e99e5d8e2a3c->enter($__internal_d92184b683a803aec5fea8fd7a6ffe29b9e3e14267d049228df3e99e5d8e2a3c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_d92184b683a803aec5fea8fd7a6ffe29b9e3e14267d049228df3e99e5d8e2a3c->leave($__internal_d92184b683a803aec5fea8fd7a6ffe29b9e3e14267d049228df3e99e5d8e2a3c_prof);

        
        $__internal_b219012f84e7b3d2db329e3bda827e398451190fbd0a25ff4db9c1dd36ca5fa9->leave($__internal_b219012f84e7b3d2db329e3bda827e398451190fbd0a25ff4db9c1dd36ca5fa9_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_4c8a6dddc2ace65fe520aaa5c9af1156da50d34ea8611d828417c57c9c8bcc20 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4c8a6dddc2ace65fe520aaa5c9af1156da50d34ea8611d828417c57c9c8bcc20->enter($__internal_4c8a6dddc2ace65fe520aaa5c9af1156da50d34ea8611d828417c57c9c8bcc20_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_04045ee4b34ac8bef148d3f3a5f889abd2a89d451484b7430e25ec4b4ac79ad8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_04045ee4b34ac8bef148d3f3a5f889abd2a89d451484b7430e25ec4b4ac79ad8->enter($__internal_04045ee4b34ac8bef148d3f3a5f889abd2a89d451484b7430e25ec4b4ac79ad8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_04045ee4b34ac8bef148d3f3a5f889abd2a89d451484b7430e25ec4b4ac79ad8->leave($__internal_04045ee4b34ac8bef148d3f3a5f889abd2a89d451484b7430e25ec4b4ac79ad8_prof);

        
        $__internal_4c8a6dddc2ace65fe520aaa5c9af1156da50d34ea8611d828417c57c9c8bcc20->leave($__internal_4c8a6dddc2ace65fe520aaa5c9af1156da50d34ea8611d828417c57c9c8bcc20_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_bfb62af6e8916c35219f23f486f84569826f64dbaa0576b80c3511609bb5d3c9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bfb62af6e8916c35219f23f486f84569826f64dbaa0576b80c3511609bb5d3c9->enter($__internal_bfb62af6e8916c35219f23f486f84569826f64dbaa0576b80c3511609bb5d3c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_22c67d09365b870b4bcd223a56d83b11e82c73a783070f67144eb7b8c2077fd9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_22c67d09365b870b4bcd223a56d83b11e82c73a783070f67144eb7b8c2077fd9->enter($__internal_22c67d09365b870b4bcd223a56d83b11e82c73a783070f67144eb7b8c2077fd9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_22c67d09365b870b4bcd223a56d83b11e82c73a783070f67144eb7b8c2077fd9->leave($__internal_22c67d09365b870b4bcd223a56d83b11e82c73a783070f67144eb7b8c2077fd9_prof);

        
        $__internal_bfb62af6e8916c35219f23f486f84569826f64dbaa0576b80c3511609bb5d3c9->leave($__internal_bfb62af6e8916c35219f23f486f84569826f64dbaa0576b80c3511609bb5d3c9_prof);

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
