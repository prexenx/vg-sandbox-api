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
        $__internal_1ed6cb0d259c41872e4a522e291f6537bed86905ee73072ba497b5b2c90822f3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1ed6cb0d259c41872e4a522e291f6537bed86905ee73072ba497b5b2c90822f3->enter($__internal_1ed6cb0d259c41872e4a522e291f6537bed86905ee73072ba497b5b2c90822f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

        $__internal_cc1c2bd6b9cc2eb6b4017ec44e1c10ea39df3880b0628f2f81778610c8ad2d29 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cc1c2bd6b9cc2eb6b4017ec44e1c10ea39df3880b0628f2f81778610c8ad2d29->enter($__internal_cc1c2bd6b9cc2eb6b4017ec44e1c10ea39df3880b0628f2f81778610c8ad2d29_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

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
        
        $__internal_1ed6cb0d259c41872e4a522e291f6537bed86905ee73072ba497b5b2c90822f3->leave($__internal_1ed6cb0d259c41872e4a522e291f6537bed86905ee73072ba497b5b2c90822f3_prof);

        
        $__internal_cc1c2bd6b9cc2eb6b4017ec44e1c10ea39df3880b0628f2f81778610c8ad2d29->leave($__internal_cc1c2bd6b9cc2eb6b4017ec44e1c10ea39df3880b0628f2f81778610c8ad2d29_prof);

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
