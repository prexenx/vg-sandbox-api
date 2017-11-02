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
        $__internal_3637896b3bd5f7be8ae96c8ef0434a3fc518730a060924d978b6fb10603ea2d4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3637896b3bd5f7be8ae96c8ef0434a3fc518730a060924d978b6fb10603ea2d4->enter($__internal_3637896b3bd5f7be8ae96c8ef0434a3fc518730a060924d978b6fb10603ea2d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        $__internal_5e1ae49c4c5c41234c72f320e43d99657d02a7b1d77f26d45f9264c857248836 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5e1ae49c4c5c41234c72f320e43d99657d02a7b1d77f26d45f9264c857248836->enter($__internal_5e1ae49c4c5c41234c72f320e43d99657d02a7b1d77f26d45f9264c857248836_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        // line 1
        echo "<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_3637896b3bd5f7be8ae96c8ef0434a3fc518730a060924d978b6fb10603ea2d4->leave($__internal_3637896b3bd5f7be8ae96c8ef0434a3fc518730a060924d978b6fb10603ea2d4_prof);

        
        $__internal_5e1ae49c4c5c41234c72f320e43d99657d02a7b1d77f26d45f9264c857248836->leave($__internal_5e1ae49c4c5c41234c72f320e43d99657d02a7b1d77f26d45f9264c857248836_prof);

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
