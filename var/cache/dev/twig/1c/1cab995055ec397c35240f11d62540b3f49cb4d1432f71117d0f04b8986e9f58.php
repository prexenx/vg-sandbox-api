<?php

/* @Framework/Form/hidden_row.html.php */
class __TwigTemplate_2720788833a71414dfdf5b8ea66866a83837e78fff47f3b7f9a84f64b8e41b5c extends Twig_Template
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
        $__internal_bf3f7251368cb3914b9f1ad67f1f38efe28a2e2227fed74e2a841720d934b048 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bf3f7251368cb3914b9f1ad67f1f38efe28a2e2227fed74e2a841720d934b048->enter($__internal_bf3f7251368cb3914b9f1ad67f1f38efe28a2e2227fed74e2a841720d934b048_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_row.html.php"));

        $__internal_e445c0642fbd5590f104c260f856edbe791f598937478efa969acce3c4366a76 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e445c0642fbd5590f104c260f856edbe791f598937478efa969acce3c4366a76->enter($__internal_e445c0642fbd5590f104c260f856edbe791f598937478efa969acce3c4366a76_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_row.html.php"));

        // line 1
        echo "<?php echo \$view['form']->widget(\$form) ?>
";
        
        $__internal_bf3f7251368cb3914b9f1ad67f1f38efe28a2e2227fed74e2a841720d934b048->leave($__internal_bf3f7251368cb3914b9f1ad67f1f38efe28a2e2227fed74e2a841720d934b048_prof);

        
        $__internal_e445c0642fbd5590f104c260f856edbe791f598937478efa969acce3c4366a76->leave($__internal_e445c0642fbd5590f104c260f856edbe791f598937478efa969acce3c4366a76_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_row.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->widget(\$form) ?>
", "@Framework/Form/hidden_row.html.php", "/var/www/html/vg-api/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/hidden_row.html.php");
    }
}
