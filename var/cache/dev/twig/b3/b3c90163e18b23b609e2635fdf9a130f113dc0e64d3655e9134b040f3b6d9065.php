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
        $__internal_657c3ac2e998c158a4cc40dc83ef9853189abb658abbfe5a85b470744b6c90c8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_657c3ac2e998c158a4cc40dc83ef9853189abb658abbfe5a85b470744b6c90c8->enter($__internal_657c3ac2e998c158a4cc40dc83ef9853189abb658abbfe5a85b470744b6c90c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        $__internal_3c02395c27254ede010c186bd03cf65c13f872257869422f5b2826f6f6954857 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3c02395c27254ede010c186bd03cf65c13f872257869422f5b2826f6f6954857->enter($__internal_3c02395c27254ede010c186bd03cf65c13f872257869422f5b2826f6f6954857_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        // line 1
        echo "<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
";
        
        $__internal_657c3ac2e998c158a4cc40dc83ef9853189abb658abbfe5a85b470744b6c90c8->leave($__internal_657c3ac2e998c158a4cc40dc83ef9853189abb658abbfe5a85b470744b6c90c8_prof);

        
        $__internal_3c02395c27254ede010c186bd03cf65c13f872257869422f5b2826f6f6954857->leave($__internal_3c02395c27254ede010c186bd03cf65c13f872257869422f5b2826f6f6954857_prof);

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
