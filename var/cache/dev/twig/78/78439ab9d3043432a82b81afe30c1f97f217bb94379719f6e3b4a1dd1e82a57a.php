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
        $__internal_3dae53ffdf2b45dc5660ee8525eeae9c6df3604d630a886933862199c541b3b5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3dae53ffdf2b45dc5660ee8525eeae9c6df3604d630a886933862199c541b3b5->enter($__internal_3dae53ffdf2b45dc5660ee8525eeae9c6df3604d630a886933862199c541b3b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

        $__internal_32def0b066ea776a697e326d43b6ac6a7a4e9db6bdf7f2e0487bf713c513ec37 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_32def0b066ea776a697e326d43b6ac6a7a4e9db6bdf7f2e0487bf713c513ec37->enter($__internal_32def0b066ea776a697e326d43b6ac6a7a4e9db6bdf7f2e0487bf713c513ec37_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

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
        
        $__internal_3dae53ffdf2b45dc5660ee8525eeae9c6df3604d630a886933862199c541b3b5->leave($__internal_3dae53ffdf2b45dc5660ee8525eeae9c6df3604d630a886933862199c541b3b5_prof);

        
        $__internal_32def0b066ea776a697e326d43b6ac6a7a4e9db6bdf7f2e0487bf713c513ec37->leave($__internal_32def0b066ea776a697e326d43b6ac6a7a4e9db6bdf7f2e0487bf713c513ec37_prof);

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
