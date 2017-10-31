<?php

/* @Framework/FormTable/form_widget_compound.html.php */
class __TwigTemplate_1565c1c888759f54aab56d8960fb13adc5dc44aa890712e77d3550f3456a2d8d extends Twig_Template
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
        $__internal_fa5caaebafc9d7029be75db77a2c0df38d54c10fec69a70ea038c1e781648f8f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fa5caaebafc9d7029be75db77a2c0df38d54c10fec69a70ea038c1e781648f8f->enter($__internal_fa5caaebafc9d7029be75db77a2c0df38d54c10fec69a70ea038c1e781648f8f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

        $__internal_4595245267c6be670499822901c69268a023faab572cfcfff8332b34129770c3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4595245267c6be670499822901c69268a023faab572cfcfff8332b34129770c3->enter($__internal_4595245267c6be670499822901c69268a023faab572cfcfff8332b34129770c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

        // line 1
        echo "<table <?php echo \$view['form']->block(\$form, 'widget_container_attributes'); ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <tr>
        <td colspan=\"2\">
            <?php echo \$view['form']->errors(\$form); ?>
        </td>
    </tr>
    <?php endif; ?>
    <?php echo \$view['form']->block(\$form, 'form_rows'); ?>
    <?php echo \$view['form']->rest(\$form); ?>
</table>
";
        
        $__internal_fa5caaebafc9d7029be75db77a2c0df38d54c10fec69a70ea038c1e781648f8f->leave($__internal_fa5caaebafc9d7029be75db77a2c0df38d54c10fec69a70ea038c1e781648f8f_prof);

        
        $__internal_4595245267c6be670499822901c69268a023faab572cfcfff8332b34129770c3->leave($__internal_4595245267c6be670499822901c69268a023faab572cfcfff8332b34129770c3_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_widget_compound.html.php";
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
        return new Twig_Source("<table <?php echo \$view['form']->block(\$form, 'widget_container_attributes'); ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <tr>
        <td colspan=\"2\">
            <?php echo \$view['form']->errors(\$form); ?>
        </td>
    </tr>
    <?php endif; ?>
    <?php echo \$view['form']->block(\$form, 'form_rows'); ?>
    <?php echo \$view['form']->rest(\$form); ?>
</table>
", "@Framework/FormTable/form_widget_compound.html.php", "/var/www/html/vg-api/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/form_widget_compound.html.php");
    }
}
