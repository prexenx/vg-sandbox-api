<?php

/* @Framework/Form/form_widget.html.php */
class __TwigTemplate_e001961956581a242824cecc21b918cb739b13eb41516e2d2efebde14b4c936e extends Twig_Template
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
        $__internal_5f6017cf0ec0702d1cb99993ecc0c9d7ba6183ed8d2d01d578a64a8fe5e34131 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5f6017cf0ec0702d1cb99993ecc0c9d7ba6183ed8d2d01d578a64a8fe5e34131->enter($__internal_5f6017cf0ec0702d1cb99993ecc0c9d7ba6183ed8d2d01d578a64a8fe5e34131_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        $__internal_25b4499db18d6279a719d8449136583c58d8951259f36b9050dc4bbd72f4e1aa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_25b4499db18d6279a719d8449136583c58d8951259f36b9050dc4bbd72f4e1aa->enter($__internal_25b4499db18d6279a719d8449136583c58d8951259f36b9050dc4bbd72f4e1aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        // line 1
        echo "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
        
        $__internal_5f6017cf0ec0702d1cb99993ecc0c9d7ba6183ed8d2d01d578a64a8fe5e34131->leave($__internal_5f6017cf0ec0702d1cb99993ecc0c9d7ba6183ed8d2d01d578a64a8fe5e34131_prof);

        
        $__internal_25b4499db18d6279a719d8449136583c58d8951259f36b9050dc4bbd72f4e1aa->leave($__internal_25b4499db18d6279a719d8449136583c58d8951259f36b9050dc4bbd72f4e1aa_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget.html.php";
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
        return new Twig_Source("<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
", "@Framework/Form/form_widget.html.php", "/var/www/html/vg-api/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_widget.html.php");
    }
}
