<?php

/* @Framework/Form/radio_widget.html.php */
class __TwigTemplate_4c207954c4848d3ba8071af727830e38825b2c5a569eae3a55468b91f527551a extends Twig_Template
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
        $__internal_30cf474bbfe0b587ad3fd42ac31ba951fbb32a62f4b33535772d4ab08b0c1965 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_30cf474bbfe0b587ad3fd42ac31ba951fbb32a62f4b33535772d4ab08b0c1965->enter($__internal_30cf474bbfe0b587ad3fd42ac31ba951fbb32a62f4b33535772d4ab08b0c1965_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        $__internal_e0b427cda4e4e0eead2aea53fa56dd7ef21501b5b13686b80fa6405c989d1f5c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e0b427cda4e4e0eead2aea53fa56dd7ef21501b5b13686b80fa6405c989d1f5c->enter($__internal_e0b427cda4e4e0eead2aea53fa56dd7ef21501b5b13686b80fa6405c989d1f5c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        // line 1
        echo "<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_30cf474bbfe0b587ad3fd42ac31ba951fbb32a62f4b33535772d4ab08b0c1965->leave($__internal_30cf474bbfe0b587ad3fd42ac31ba951fbb32a62f4b33535772d4ab08b0c1965_prof);

        
        $__internal_e0b427cda4e4e0eead2aea53fa56dd7ef21501b5b13686b80fa6405c989d1f5c->leave($__internal_e0b427cda4e4e0eead2aea53fa56dd7ef21501b5b13686b80fa6405c989d1f5c_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/radio_widget.html.php";
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
        return new Twig_Source("<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
", "@Framework/Form/radio_widget.html.php", "/var/www/html/vg-api/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/radio_widget.html.php");
    }
}
