<?php

/* @Framework/Form/date_widget.html.php */
class __TwigTemplate_9bb4f2ebe8129fb222ea61b44811ebcce6113f043807abbe5fa358d3ee4e3cf7 extends Twig_Template
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
        $__internal_d3f20dc35321a8d6840b0b8b5196863695ac4637b3d66a78881537e361457009 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d3f20dc35321a8d6840b0b8b5196863695ac4637b3d66a78881537e361457009->enter($__internal_d3f20dc35321a8d6840b0b8b5196863695ac4637b3d66a78881537e361457009_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/date_widget.html.php"));

        $__internal_41b12b1e307c5305150f4d9ab5c27a3fc89bda5ed2cea55aeb6ec295022f04f0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_41b12b1e307c5305150f4d9ab5c27a3fc89bda5ed2cea55aeb6ec295022f04f0->enter($__internal_41b12b1e307c5305150f4d9ab5c27a3fc89bda5ed2cea55aeb6ec295022f04f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/date_widget.html.php"));

        // line 1
        echo "<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo str_replace(array('";
        // line 5
        echo twig_escape_filter($this->env, (isset($context["year"]) ? $context["year"] : $this->getContext($context, "year")), "html", null, true);
        echo "', '";
        echo twig_escape_filter($this->env, (isset($context["month"]) ? $context["month"] : $this->getContext($context, "month")), "html", null, true);
        echo "', '";
        echo twig_escape_filter($this->env, (isset($context["day"]) ? $context["day"] : $this->getContext($context, "day")), "html", null, true);
        echo "'), array(
            \$view['form']->widget(\$form['year']),
            \$view['form']->widget(\$form['month']),
            \$view['form']->widget(\$form['day']),
        ), \$date_pattern) ?>
    </div>
<?php endif ?>
";
        
        $__internal_d3f20dc35321a8d6840b0b8b5196863695ac4637b3d66a78881537e361457009->leave($__internal_d3f20dc35321a8d6840b0b8b5196863695ac4637b3d66a78881537e361457009_prof);

        
        $__internal_41b12b1e307c5305150f4d9ab5c27a3fc89bda5ed2cea55aeb6ec295022f04f0->leave($__internal_41b12b1e307c5305150f4d9ab5c27a3fc89bda5ed2cea55aeb6ec295022f04f0_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/date_widget.html.php";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 5,  25 => 1,);
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
        <?php echo str_replace(array('{{ year }}', '{{ month }}', '{{ day }}'), array(
            \$view['form']->widget(\$form['year']),
            \$view['form']->widget(\$form['month']),
            \$view['form']->widget(\$form['day']),
        ), \$date_pattern) ?>
    </div>
<?php endif ?>
", "@Framework/Form/date_widget.html.php", "/var/www/html/vg-api/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/date_widget.html.php");
    }
}
