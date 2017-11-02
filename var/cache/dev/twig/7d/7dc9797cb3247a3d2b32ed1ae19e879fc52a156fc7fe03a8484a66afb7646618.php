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
        $__internal_b466f05662e1e1cabefa9c9efaac87df76a375bd6b28c365ba75d06f514790f8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b466f05662e1e1cabefa9c9efaac87df76a375bd6b28c365ba75d06f514790f8->enter($__internal_b466f05662e1e1cabefa9c9efaac87df76a375bd6b28c365ba75d06f514790f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        $__internal_26e4d1a75c551c4886d290ead043a538870a34472ad1b887b358d2dff0828aa5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_26e4d1a75c551c4886d290ead043a538870a34472ad1b887b358d2dff0828aa5->enter($__internal_26e4d1a75c551c4886d290ead043a538870a34472ad1b887b358d2dff0828aa5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
";
        
        $__internal_b466f05662e1e1cabefa9c9efaac87df76a375bd6b28c365ba75d06f514790f8->leave($__internal_b466f05662e1e1cabefa9c9efaac87df76a375bd6b28c365ba75d06f514790f8_prof);

        
        $__internal_26e4d1a75c551c4886d290ead043a538870a34472ad1b887b358d2dff0828aa5->leave($__internal_26e4d1a75c551c4886d290ead043a538870a34472ad1b887b358d2dff0828aa5_prof);

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
