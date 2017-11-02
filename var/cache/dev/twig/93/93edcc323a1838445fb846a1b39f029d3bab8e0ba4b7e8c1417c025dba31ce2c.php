<?php

/* @Framework/Form/percent_widget.html.php */
class __TwigTemplate_cac257098c8279fda9a9512b28a98612d4ed1d862d7158997c8dcf80cf23abee extends Twig_Template
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
        $__internal_72453ecc801badf2ec1f8b17bb9c41320fd86d01293d9736cc55e2f5462bad90 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_72453ecc801badf2ec1f8b17bb9c41320fd86d01293d9736cc55e2f5462bad90->enter($__internal_72453ecc801badf2ec1f8b17bb9c41320fd86d01293d9736cc55e2f5462bad90_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/percent_widget.html.php"));

        $__internal_091c80db8afc572b54ce89050ec5d796bd8a796b7c554368cb69e63d8651bdb1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_091c80db8afc572b54ce89050ec5d796bd8a796b7c554368cb69e63d8651bdb1->enter($__internal_091c80db8afc572b54ce89050ec5d796bd8a796b7c554368cb69e63d8651bdb1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/percent_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?> %
";
        
        $__internal_72453ecc801badf2ec1f8b17bb9c41320fd86d01293d9736cc55e2f5462bad90->leave($__internal_72453ecc801badf2ec1f8b17bb9c41320fd86d01293d9736cc55e2f5462bad90_prof);

        
        $__internal_091c80db8afc572b54ce89050ec5d796bd8a796b7c554368cb69e63d8651bdb1->leave($__internal_091c80db8afc572b54ce89050ec5d796bd8a796b7c554368cb69e63d8651bdb1_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/percent_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?> %
", "@Framework/Form/percent_widget.html.php", "/var/www/html/vg-api/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/percent_widget.html.php");
    }
}
