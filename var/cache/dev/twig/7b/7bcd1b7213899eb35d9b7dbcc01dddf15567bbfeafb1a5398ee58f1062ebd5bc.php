<?php

/* @Framework/Form/radio_widget.html.php */
class __TwigTemplate_4c207954c4848d3ba8071af727830e38825b2c5a569eae3a55468b91f527551a extends Twig_Template
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
        $__internal_2c4468554e87043ae8619ccc0362739b31c6995543dce13d3fc79f6ecab7515b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2c4468554e87043ae8619ccc0362739b31c6995543dce13d3fc79f6ecab7515b->enter($__internal_2c4468554e87043ae8619ccc0362739b31c6995543dce13d3fc79f6ecab7515b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        $__internal_1a752a6869dcf92ceb60b2ec801f716ade206c764aa2abd1015c35695b545302 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1a752a6869dcf92ceb60b2ec801f716ade206c764aa2abd1015c35695b545302->enter($__internal_1a752a6869dcf92ceb60b2ec801f716ade206c764aa2abd1015c35695b545302_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        // line 1
        echo "<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_2c4468554e87043ae8619ccc0362739b31c6995543dce13d3fc79f6ecab7515b->leave($__internal_2c4468554e87043ae8619ccc0362739b31c6995543dce13d3fc79f6ecab7515b_prof);

        
        $__internal_1a752a6869dcf92ceb60b2ec801f716ade206c764aa2abd1015c35695b545302->leave($__internal_1a752a6869dcf92ceb60b2ec801f716ade206c764aa2abd1015c35695b545302_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/radio_widget.html.php";
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
        return new Twig_Source("<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
", "@Framework/Form/radio_widget.html.php", "/var/www/html/vg-api/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/radio_widget.html.php");
    }
}