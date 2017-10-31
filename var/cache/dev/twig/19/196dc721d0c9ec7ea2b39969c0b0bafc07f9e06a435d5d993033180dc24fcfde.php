<?php

/* @Framework/Form/datetime_widget.html.php */
class __TwigTemplate_778736b8705914278325e7076dce7fab7dcdab669ccf87192bfd99aa4bc2c813 extends Twig_Template
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
        $__internal_d86cadc1420e0642339d1489d3e06f6029f27629487fa4162aa63d64cf797da4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d86cadc1420e0642339d1489d3e06f6029f27629487fa4162aa63d64cf797da4->enter($__internal_d86cadc1420e0642339d1489d3e06f6029f27629487fa4162aa63d64cf797da4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        $__internal_c654fc9c0a8c5bb54ece6b8da9ac24c7dbcadbc20f963151493ae1aa3f4b5ab0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c654fc9c0a8c5bb54ece6b8da9ac24c7dbcadbc20f963151493ae1aa3f4b5ab0->enter($__internal_c654fc9c0a8c5bb54ece6b8da9ac24c7dbcadbc20f963151493ae1aa3f4b5ab0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        // line 1
        echo "<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
";
        
        $__internal_d86cadc1420e0642339d1489d3e06f6029f27629487fa4162aa63d64cf797da4->leave($__internal_d86cadc1420e0642339d1489d3e06f6029f27629487fa4162aa63d64cf797da4_prof);

        
        $__internal_c654fc9c0a8c5bb54ece6b8da9ac24c7dbcadbc20f963151493ae1aa3f4b5ab0->leave($__internal_c654fc9c0a8c5bb54ece6b8da9ac24c7dbcadbc20f963151493ae1aa3f4b5ab0_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/datetime_widget.html.php";
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
        return new Twig_Source("<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
", "@Framework/Form/datetime_widget.html.php", "/var/www/html/vg-api/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/datetime_widget.html.php");
    }
}
