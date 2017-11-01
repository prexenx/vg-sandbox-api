<?php

/* @Framework/Form/hidden_widget.html.php */
class __TwigTemplate_ea50645850be2d3e65b2e22602867647400e22011253f8b688287d3b7791711b extends Twig_Template
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
        $__internal_0c014e7feecec6a95844312727ebf7b1d52963564f1ecb136466bb21cc8d9e83 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0c014e7feecec6a95844312727ebf7b1d52963564f1ecb136466bb21cc8d9e83->enter($__internal_0c014e7feecec6a95844312727ebf7b1d52963564f1ecb136466bb21cc8d9e83_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        $__internal_92e49ca0a41e9d807b9a5d3536084206ec43e25c7291e6719e7abb7b10c8ac1d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_92e49ca0a41e9d807b9a5d3536084206ec43e25c7291e6719e7abb7b10c8ac1d->enter($__internal_92e49ca0a41e9d807b9a5d3536084206ec43e25c7291e6719e7abb7b10c8ac1d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
";
        
        $__internal_0c014e7feecec6a95844312727ebf7b1d52963564f1ecb136466bb21cc8d9e83->leave($__internal_0c014e7feecec6a95844312727ebf7b1d52963564f1ecb136466bb21cc8d9e83_prof);

        
        $__internal_92e49ca0a41e9d807b9a5d3536084206ec43e25c7291e6719e7abb7b10c8ac1d->leave($__internal_92e49ca0a41e9d807b9a5d3536084206ec43e25c7291e6719e7abb7b10c8ac1d_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
", "@Framework/Form/hidden_widget.html.php", "/var/www/html/vg-api/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/hidden_widget.html.php");
    }
}
