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
        $__internal_c97665b950bf86eb8a64fcdcc8a162f0ff2fc029934005287ec59d4a50367b0c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c97665b950bf86eb8a64fcdcc8a162f0ff2fc029934005287ec59d4a50367b0c->enter($__internal_c97665b950bf86eb8a64fcdcc8a162f0ff2fc029934005287ec59d4a50367b0c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        $__internal_1ae1accacc1dfa73f3527fe2ea76c0fb472719a249f1faaf188d0ef763feea42 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1ae1accacc1dfa73f3527fe2ea76c0fb472719a249f1faaf188d0ef763feea42->enter($__internal_1ae1accacc1dfa73f3527fe2ea76c0fb472719a249f1faaf188d0ef763feea42_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
";
        
        $__internal_c97665b950bf86eb8a64fcdcc8a162f0ff2fc029934005287ec59d4a50367b0c->leave($__internal_c97665b950bf86eb8a64fcdcc8a162f0ff2fc029934005287ec59d4a50367b0c_prof);

        
        $__internal_1ae1accacc1dfa73f3527fe2ea76c0fb472719a249f1faaf188d0ef763feea42->leave($__internal_1ae1accacc1dfa73f3527fe2ea76c0fb472719a249f1faaf188d0ef763feea42_prof);

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
