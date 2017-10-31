<?php

/* @Framework/Form/number_widget.html.php */
class __TwigTemplate_de3459c6b7722a16b4ca00949276e814c1c70f11bdfb5b73c778248107efd7b5 extends Twig_Template
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
        $__internal_c4f9819104be1a5b9d2b1497b3112cff9e9da4238bda83570b11ee41187bf759 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c4f9819104be1a5b9d2b1497b3112cff9e9da4238bda83570b11ee41187bf759->enter($__internal_c4f9819104be1a5b9d2b1497b3112cff9e9da4238bda83570b11ee41187bf759_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/number_widget.html.php"));

        $__internal_ee1c1b5cafd15c57c15e720c7bae4984f0c2a51406971459e9ffd9a9fdb06291 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ee1c1b5cafd15c57c15e720c7bae4984f0c2a51406971459e9ffd9a9fdb06291->enter($__internal_ee1c1b5cafd15c57c15e720c7bae4984f0c2a51406971459e9ffd9a9fdb06291_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/number_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?>
";
        
        $__internal_c4f9819104be1a5b9d2b1497b3112cff9e9da4238bda83570b11ee41187bf759->leave($__internal_c4f9819104be1a5b9d2b1497b3112cff9e9da4238bda83570b11ee41187bf759_prof);

        
        $__internal_ee1c1b5cafd15c57c15e720c7bae4984f0c2a51406971459e9ffd9a9fdb06291->leave($__internal_ee1c1b5cafd15c57c15e720c7bae4984f0c2a51406971459e9ffd9a9fdb06291_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/number_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?>
", "@Framework/Form/number_widget.html.php", "/var/www/html/vg-api/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/number_widget.html.php");
    }
}
