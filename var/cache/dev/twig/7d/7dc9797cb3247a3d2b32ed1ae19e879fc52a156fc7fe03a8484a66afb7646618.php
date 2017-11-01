<?php

/* @Framework/Form/choice_widget_expanded.html.php */
class __TwigTemplate_4de0477ea84e67d537e00c01861bcd2316ebcc45c19229dc2f6e69e68a04bac4 extends Twig_Template
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
        $__internal_c6331cc945bb40fa503dab1f6c68279bbff91dfe620784d756f7100adcdde4a5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c6331cc945bb40fa503dab1f6c68279bbff91dfe620784d756f7100adcdde4a5->enter($__internal_c6331cc945bb40fa503dab1f6c68279bbff91dfe620784d756f7100adcdde4a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        $__internal_25ce89cc94021af5a9b2c5b27bac21e0d9a89f1e49d06092c1b9b783201c6d8f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_25ce89cc94021af5a9b2c5b27bac21e0d9a89f1e49d06092c1b9b783201c6d8f->enter($__internal_25ce89cc94021af5a9b2c5b27bac21e0d9a89f1e49d06092c1b9b783201c6d8f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
";
        
        $__internal_c6331cc945bb40fa503dab1f6c68279bbff91dfe620784d756f7100adcdde4a5->leave($__internal_c6331cc945bb40fa503dab1f6c68279bbff91dfe620784d756f7100adcdde4a5_prof);

        
        $__internal_25ce89cc94021af5a9b2c5b27bac21e0d9a89f1e49d06092c1b9b783201c6d8f->leave($__internal_25ce89cc94021af5a9b2c5b27bac21e0d9a89f1e49d06092c1b9b783201c6d8f_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget_expanded.html.php";
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
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
", "@Framework/Form/choice_widget_expanded.html.php", "/var/www/html/vg-api/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/choice_widget_expanded.html.php");
    }
}
