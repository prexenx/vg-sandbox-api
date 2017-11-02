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
        $__internal_7ffbcc0dcd42345dae7809bff966dbe49a2fdb21d6ec307b919e22533ad2964e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7ffbcc0dcd42345dae7809bff966dbe49a2fdb21d6ec307b919e22533ad2964e->enter($__internal_7ffbcc0dcd42345dae7809bff966dbe49a2fdb21d6ec307b919e22533ad2964e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        $__internal_9aff20291e9a2cb6a576e2241c01008169dadf75c6b26d640607cc1ac6c824ff = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9aff20291e9a2cb6a576e2241c01008169dadf75c6b26d640607cc1ac6c824ff->enter($__internal_9aff20291e9a2cb6a576e2241c01008169dadf75c6b26d640607cc1ac6c824ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        // line 1
        echo "<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
";
        
        $__internal_7ffbcc0dcd42345dae7809bff966dbe49a2fdb21d6ec307b919e22533ad2964e->leave($__internal_7ffbcc0dcd42345dae7809bff966dbe49a2fdb21d6ec307b919e22533ad2964e_prof);

        
        $__internal_9aff20291e9a2cb6a576e2241c01008169dadf75c6b26d640607cc1ac6c824ff->leave($__internal_9aff20291e9a2cb6a576e2241c01008169dadf75c6b26d640607cc1ac6c824ff_prof);

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
