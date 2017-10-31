<?php

/* WebProfilerBundle:Profiler:header.html.twig */
class __TwigTemplate_f545079df56ed261d295b0d61c4fae1a5f7899660a3ec42f2ba952680c997647 extends Twig_Template
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
        $__internal_2292894eaea39c10a7a328fdfee47723e302eaf3b48d6584dbb5ca5ce0684c13 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2292894eaea39c10a7a328fdfee47723e302eaf3b48d6584dbb5ca5ce0684c13->enter($__internal_2292894eaea39c10a7a328fdfee47723e302eaf3b48d6584dbb5ca5ce0684c13_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:header.html.twig"));

        $__internal_0c81fbb1442ca30167b41a03fe20e64041aac34a9b384249adde80832ddf132b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0c81fbb1442ca30167b41a03fe20e64041aac34a9b384249adde80832ddf132b->enter($__internal_0c81fbb1442ca30167b41a03fe20e64041aac34a9b384249adde80832ddf132b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:header.html.twig"));

        // line 1
        echo "<div id=\"header\">
    <div class=\"container\">
        <h1>";
        // line 3
        echo twig_include($this->env, $context, "@WebProfiler/Icon/symfony.svg");
        echo " Symfony <span>Profiler</span></h1>

        <div class=\"search\">
            <form method=\"get\" action=\"https://symfony.com/search\" target=\"_blank\">
                <div class=\"form-row\">
                    <input name=\"q\" id=\"search-id\" type=\"search\" placeholder=\"search on symfony.com\">
                    <button type=\"submit\" class=\"btn\">Search</button>
                </div>
           </form>
        </div>
    </div>
</div>
";
        
        $__internal_2292894eaea39c10a7a328fdfee47723e302eaf3b48d6584dbb5ca5ce0684c13->leave($__internal_2292894eaea39c10a7a328fdfee47723e302eaf3b48d6584dbb5ca5ce0684c13_prof);

        
        $__internal_0c81fbb1442ca30167b41a03fe20e64041aac34a9b384249adde80832ddf132b->leave($__internal_0c81fbb1442ca30167b41a03fe20e64041aac34a9b384249adde80832ddf132b_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  29 => 3,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div id=\"header\">
    <div class=\"container\">
        <h1>{{ include('@WebProfiler/Icon/symfony.svg') }} Symfony <span>Profiler</span></h1>

        <div class=\"search\">
            <form method=\"get\" action=\"https://symfony.com/search\" target=\"_blank\">
                <div class=\"form-row\">
                    <input name=\"q\" id=\"search-id\" type=\"search\" placeholder=\"search on symfony.com\">
                    <button type=\"submit\" class=\"btn\">Search</button>
                </div>
           </form>
        </div>
    </div>
</div>
", "WebProfilerBundle:Profiler:header.html.twig", "/var/www/html/vg-api/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/header.html.twig");
    }
}
