<?php

/* @Framework/Form/checkbox_widget.html.php */
class __TwigTemplate_b066ce030df96f2c119d78bac4eeabc36e113166075812a0c2113488c3c8ef68 extends Twig_Template
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
        $__internal_123e3a6eb7d2a011cda5410f7dd6711fc36cdfe048f637ea971e4d950856cba7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_123e3a6eb7d2a011cda5410f7dd6711fc36cdfe048f637ea971e4d950856cba7->enter($__internal_123e3a6eb7d2a011cda5410f7dd6711fc36cdfe048f637ea971e4d950856cba7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        $__internal_6001cb87c278ad52a9c4798d288238b0c9eb26550973a1f97183b9509c7e87a0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6001cb87c278ad52a9c4798d288238b0c9eb26550973a1f97183b9509c7e87a0->enter($__internal_6001cb87c278ad52a9c4798d288238b0c9eb26550973a1f97183b9509c7e87a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        // line 1
        echo "<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_123e3a6eb7d2a011cda5410f7dd6711fc36cdfe048f637ea971e4d950856cba7->leave($__internal_123e3a6eb7d2a011cda5410f7dd6711fc36cdfe048f637ea971e4d950856cba7_prof);

        
        $__internal_6001cb87c278ad52a9c4798d288238b0c9eb26550973a1f97183b9509c7e87a0->leave($__internal_6001cb87c278ad52a9c4798d288238b0c9eb26550973a1f97183b9509c7e87a0_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/checkbox_widget.html.php";
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
        return new Twig_Source("<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
", "@Framework/Form/checkbox_widget.html.php", "/var/www/html/vg-api/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/checkbox_widget.html.php");
    }
}
