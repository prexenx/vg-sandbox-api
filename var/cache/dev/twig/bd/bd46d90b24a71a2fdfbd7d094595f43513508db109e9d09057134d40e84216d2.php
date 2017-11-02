<?php

/* @Framework/Form/choice_widget.html.php */
class __TwigTemplate_e62b2c7c2a9a32e091b0c93dac30ace0eec2fcf2917da20567e24ddf07af8bda extends Twig_Template
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
        $__internal_78a0d4aa73876b91572fe9646c9b7d57ccc2eb615b5568815a87541aa3d8020f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_78a0d4aa73876b91572fe9646c9b7d57ccc2eb615b5568815a87541aa3d8020f->enter($__internal_78a0d4aa73876b91572fe9646c9b7d57ccc2eb615b5568815a87541aa3d8020f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        $__internal_3190a21d21920281877992389398b17ac8207239fabd888dadbd720b7f6cfc86 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3190a21d21920281877992389398b17ac8207239fabd888dadbd720b7f6cfc86->enter($__internal_3190a21d21920281877992389398b17ac8207239fabd888dadbd720b7f6cfc86_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        // line 1
        echo "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
        
        $__internal_78a0d4aa73876b91572fe9646c9b7d57ccc2eb615b5568815a87541aa3d8020f->leave($__internal_78a0d4aa73876b91572fe9646c9b7d57ccc2eb615b5568815a87541aa3d8020f_prof);

        
        $__internal_3190a21d21920281877992389398b17ac8207239fabd888dadbd720b7f6cfc86->leave($__internal_3190a21d21920281877992389398b17ac8207239fabd888dadbd720b7f6cfc86_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget.html.php";
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
        return new Twig_Source("<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
", "@Framework/Form/choice_widget.html.php", "/var/www/html/vg-api/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/choice_widget.html.php");
    }
}
