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
        $__internal_6bb9f256b72a0dcd43e02b44d7938a75a8c55da47200187fc2a0b559443def8c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6bb9f256b72a0dcd43e02b44d7938a75a8c55da47200187fc2a0b559443def8c->enter($__internal_6bb9f256b72a0dcd43e02b44d7938a75a8c55da47200187fc2a0b559443def8c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        $__internal_a9da125254c6a1b93f32362ae747a7f87295951cdab275dcee238ace4c81a25d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a9da125254c6a1b93f32362ae747a7f87295951cdab275dcee238ace4c81a25d->enter($__internal_a9da125254c6a1b93f32362ae747a7f87295951cdab275dcee238ace4c81a25d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        // line 1
        echo "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
        
        $__internal_6bb9f256b72a0dcd43e02b44d7938a75a8c55da47200187fc2a0b559443def8c->leave($__internal_6bb9f256b72a0dcd43e02b44d7938a75a8c55da47200187fc2a0b559443def8c_prof);

        
        $__internal_a9da125254c6a1b93f32362ae747a7f87295951cdab275dcee238ace4c81a25d->leave($__internal_a9da125254c6a1b93f32362ae747a7f87295951cdab275dcee238ace4c81a25d_prof);

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
