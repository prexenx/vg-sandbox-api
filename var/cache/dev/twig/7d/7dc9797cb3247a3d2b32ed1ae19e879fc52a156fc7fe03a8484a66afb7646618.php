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
        $__internal_39f0bcf7d9d275bf7cce4afcb52c1171a8d85b5577a7c6c15d48297dfad068cd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_39f0bcf7d9d275bf7cce4afcb52c1171a8d85b5577a7c6c15d48297dfad068cd->enter($__internal_39f0bcf7d9d275bf7cce4afcb52c1171a8d85b5577a7c6c15d48297dfad068cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        $__internal_b850d5a5827bc9d676afc61432d9e0cb6bbc21f43ceac3402fa2c76c91e1dac5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b850d5a5827bc9d676afc61432d9e0cb6bbc21f43ceac3402fa2c76c91e1dac5->enter($__internal_b850d5a5827bc9d676afc61432d9e0cb6bbc21f43ceac3402fa2c76c91e1dac5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
";
        
        $__internal_39f0bcf7d9d275bf7cce4afcb52c1171a8d85b5577a7c6c15d48297dfad068cd->leave($__internal_39f0bcf7d9d275bf7cce4afcb52c1171a8d85b5577a7c6c15d48297dfad068cd_prof);

        
        $__internal_b850d5a5827bc9d676afc61432d9e0cb6bbc21f43ceac3402fa2c76c91e1dac5->leave($__internal_b850d5a5827bc9d676afc61432d9e0cb6bbc21f43ceac3402fa2c76c91e1dac5_prof);

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
