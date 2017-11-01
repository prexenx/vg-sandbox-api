<?php

/* @Framework/Form/form_row.html.php */
class __TwigTemplate_b632ec1ad4aa4e1b3827332303259c76e58847b8b35f06122460eec0dd34a7e2 extends Twig_Template
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
        $__internal_37ba106adcf8b622b1684879c701938232aa02e94080e05cda7e903ac6a88cdd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_37ba106adcf8b622b1684879c701938232aa02e94080e05cda7e903ac6a88cdd->enter($__internal_37ba106adcf8b622b1684879c701938232aa02e94080e05cda7e903ac6a88cdd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        $__internal_d350ad02ffcd76c0813158752718b18bdf521b9676d49523beb37d658ce81266 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d350ad02ffcd76c0813158752718b18bdf521b9676d49523beb37d658ce81266->enter($__internal_d350ad02ffcd76c0813158752718b18bdf521b9676d49523beb37d658ce81266_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_37ba106adcf8b622b1684879c701938232aa02e94080e05cda7e903ac6a88cdd->leave($__internal_37ba106adcf8b622b1684879c701938232aa02e94080e05cda7e903ac6a88cdd_prof);

        
        $__internal_d350ad02ffcd76c0813158752718b18bdf521b9676d49523beb37d658ce81266->leave($__internal_d350ad02ffcd76c0813158752718b18bdf521b9676d49523beb37d658ce81266_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_row.html.php";
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
        return new Twig_Source("<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
", "@Framework/Form/form_row.html.php", "/var/www/html/vg-api/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_row.html.php");
    }
}
