<?php

/* @Framework/Form/form_widget_compound.html.php */
class __TwigTemplate_ed9afd192e84b010452112ce16c226d127f0958bca1609d9fa652f4494cd5bad extends Twig_Template
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
        $__internal_d5678269f004e980f02c490b00dca68db00e576d4cd11d08c3593e786dbec965 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d5678269f004e980f02c490b00dca68db00e576d4cd11d08c3593e786dbec965->enter($__internal_d5678269f004e980f02c490b00dca68db00e576d4cd11d08c3593e786dbec965_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        $__internal_6a9b551aa52b87f8e85cc9ed13f8789708d9fba2ae151adbcfe08fd9e0d4aea3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6a9b551aa52b87f8e85cc9ed13f8789708d9fba2ae151adbcfe08fd9e0d4aea3->enter($__internal_6a9b551aa52b87f8e85cc9ed13f8789708d9fba2ae151adbcfe08fd9e0d4aea3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
";
        
        $__internal_d5678269f004e980f02c490b00dca68db00e576d4cd11d08c3593e786dbec965->leave($__internal_d5678269f004e980f02c490b00dca68db00e576d4cd11d08c3593e786dbec965_prof);

        
        $__internal_6a9b551aa52b87f8e85cc9ed13f8789708d9fba2ae151adbcfe08fd9e0d4aea3->leave($__internal_6a9b551aa52b87f8e85cc9ed13f8789708d9fba2ae151adbcfe08fd9e0d4aea3_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_compound.html.php";
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
        return new Twig_Source("<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
", "@Framework/Form/form_widget_compound.html.php", "/var/www/html/vg-api/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_widget_compound.html.php");
    }
}
