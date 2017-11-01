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
        $__internal_1b06d3373880b22df7f534477a139c132b5cd25a6a8dd3cced2cd04ca780ce46 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1b06d3373880b22df7f534477a139c132b5cd25a6a8dd3cced2cd04ca780ce46->enter($__internal_1b06d3373880b22df7f534477a139c132b5cd25a6a8dd3cced2cd04ca780ce46_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        $__internal_77cbe4f648ff22bf8891c55e0ee499856e4ecdf228ba486d4b4b411374fc61dd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_77cbe4f648ff22bf8891c55e0ee499856e4ecdf228ba486d4b4b411374fc61dd->enter($__internal_77cbe4f648ff22bf8891c55e0ee499856e4ecdf228ba486d4b4b411374fc61dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        // line 1
        echo "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
        
        $__internal_1b06d3373880b22df7f534477a139c132b5cd25a6a8dd3cced2cd04ca780ce46->leave($__internal_1b06d3373880b22df7f534477a139c132b5cd25a6a8dd3cced2cd04ca780ce46_prof);

        
        $__internal_77cbe4f648ff22bf8891c55e0ee499856e4ecdf228ba486d4b4b411374fc61dd->leave($__internal_77cbe4f648ff22bf8891c55e0ee499856e4ecdf228ba486d4b4b411374fc61dd_prof);

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
