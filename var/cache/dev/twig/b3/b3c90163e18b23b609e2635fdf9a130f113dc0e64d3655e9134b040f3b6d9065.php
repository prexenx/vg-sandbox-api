<?php

/* @Framework/Form/form_widget_simple.html.php */
class __TwigTemplate_c4bc749efef7216700e85fc8aa5fbb24b246f3cb382b38bb4121b157521c10bd extends Twig_Template
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
        $__internal_b0b8550bb38101713a0d62678e723f6f8ac429618ed4039ff8bf24b4291cb03d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b0b8550bb38101713a0d62678e723f6f8ac429618ed4039ff8bf24b4291cb03d->enter($__internal_b0b8550bb38101713a0d62678e723f6f8ac429618ed4039ff8bf24b4291cb03d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        $__internal_bd63eaacb978ac7069ff8ee2ef281d6494510f66e5c6be561760b11ecdcfdcf1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bd63eaacb978ac7069ff8ee2ef281d6494510f66e5c6be561760b11ecdcfdcf1->enter($__internal_bd63eaacb978ac7069ff8ee2ef281d6494510f66e5c6be561760b11ecdcfdcf1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        // line 1
        echo "<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
";
        
        $__internal_b0b8550bb38101713a0d62678e723f6f8ac429618ed4039ff8bf24b4291cb03d->leave($__internal_b0b8550bb38101713a0d62678e723f6f8ac429618ed4039ff8bf24b4291cb03d_prof);

        
        $__internal_bd63eaacb978ac7069ff8ee2ef281d6494510f66e5c6be561760b11ecdcfdcf1->leave($__internal_bd63eaacb978ac7069ff8ee2ef281d6494510f66e5c6be561760b11ecdcfdcf1_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_simple.html.php";
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
        return new Twig_Source("<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
", "@Framework/Form/form_widget_simple.html.php", "/var/www/html/vg-api/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_widget_simple.html.php");
    }
}
