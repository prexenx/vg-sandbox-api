<?php

/* @Framework/Form/textarea_widget.html.php */
class __TwigTemplate_a441bdc43adfc92e1b8af991adafd4f6abc72eb7a04ad88082a179b86a9c50c9 extends Twig_Template
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
        $__internal_5b0701a5c676972ef6027ae5e3c06ccb348e5d32dd3850e55879f6b20b9163ea = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5b0701a5c676972ef6027ae5e3c06ccb348e5d32dd3850e55879f6b20b9163ea->enter($__internal_5b0701a5c676972ef6027ae5e3c06ccb348e5d32dd3850e55879f6b20b9163ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        $__internal_118b9accef4204af66756ddc2a99005f6f8a57b8716dd8a9c7d57078acffecd0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_118b9accef4204af66756ddc2a99005f6f8a57b8716dd8a9c7d57078acffecd0->enter($__internal_118b9accef4204af66756ddc2a99005f6f8a57b8716dd8a9c7d57078acffecd0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
        
        $__internal_5b0701a5c676972ef6027ae5e3c06ccb348e5d32dd3850e55879f6b20b9163ea->leave($__internal_5b0701a5c676972ef6027ae5e3c06ccb348e5d32dd3850e55879f6b20b9163ea_prof);

        
        $__internal_118b9accef4204af66756ddc2a99005f6f8a57b8716dd8a9c7d57078acffecd0->leave($__internal_118b9accef4204af66756ddc2a99005f6f8a57b8716dd8a9c7d57078acffecd0_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/textarea_widget.html.php";
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
        return new Twig_Source("<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
", "@Framework/Form/textarea_widget.html.php", "/var/www/html/vg-api/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/textarea_widget.html.php");
    }
}
