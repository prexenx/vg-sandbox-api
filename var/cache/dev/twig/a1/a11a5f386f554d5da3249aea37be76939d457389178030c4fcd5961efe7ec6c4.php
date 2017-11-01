<?php

/* @Framework/Form/url_widget.html.php */
class __TwigTemplate_fc935a0174becc03202acf9781f1903f7cee091dd30fb116455c97999b1590ee extends Twig_Template
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
        $__internal_b58c9c5c29902dc9f9e02158ed6346ccaf184eaf89a34dcb280dde3a441ed858 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b58c9c5c29902dc9f9e02158ed6346ccaf184eaf89a34dcb280dde3a441ed858->enter($__internal_b58c9c5c29902dc9f9e02158ed6346ccaf184eaf89a34dcb280dde3a441ed858_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        $__internal_9d0f33c050970f5ca12648494816f1f959c5a61219ad142f25ee927990e599a4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9d0f33c050970f5ca12648494816f1f959c5a61219ad142f25ee927990e599a4->enter($__internal_9d0f33c050970f5ca12648494816f1f959c5a61219ad142f25ee927990e599a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
";
        
        $__internal_b58c9c5c29902dc9f9e02158ed6346ccaf184eaf89a34dcb280dde3a441ed858->leave($__internal_b58c9c5c29902dc9f9e02158ed6346ccaf184eaf89a34dcb280dde3a441ed858_prof);

        
        $__internal_9d0f33c050970f5ca12648494816f1f959c5a61219ad142f25ee927990e599a4->leave($__internal_9d0f33c050970f5ca12648494816f1f959c5a61219ad142f25ee927990e599a4_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/url_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
", "@Framework/Form/url_widget.html.php", "/var/www/html/vg-api/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/url_widget.html.php");
    }
}
