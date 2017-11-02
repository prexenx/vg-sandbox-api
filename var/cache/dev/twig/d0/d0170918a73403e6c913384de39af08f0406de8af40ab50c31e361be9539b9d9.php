<?php

/* @Framework/Form/integer_widget.html.php */
class __TwigTemplate_ba1ba2186f62667908311c2b494e5b6e02ec94ce71b9bfcb6d25ca8f48330458 extends Twig_Template
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
        $__internal_104bd11333ffb0b29fab2a40d58b51f174e2434419326908c80023505ff02886 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_104bd11333ffb0b29fab2a40d58b51f174e2434419326908c80023505ff02886->enter($__internal_104bd11333ffb0b29fab2a40d58b51f174e2434419326908c80023505ff02886_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        $__internal_a8f62fb3727041ce6155fe696c9c7c31105a3f5714c6e89a315ffb2edcdf6be4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a8f62fb3727041ce6155fe696c9c7c31105a3f5714c6e89a315ffb2edcdf6be4->enter($__internal_a8f62fb3727041ce6155fe696c9c7c31105a3f5714c6e89a315ffb2edcdf6be4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
";
        
        $__internal_104bd11333ffb0b29fab2a40d58b51f174e2434419326908c80023505ff02886->leave($__internal_104bd11333ffb0b29fab2a40d58b51f174e2434419326908c80023505ff02886_prof);

        
        $__internal_a8f62fb3727041ce6155fe696c9c7c31105a3f5714c6e89a315ffb2edcdf6be4->leave($__internal_a8f62fb3727041ce6155fe696c9c7c31105a3f5714c6e89a315ffb2edcdf6be4_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/integer_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
", "@Framework/Form/integer_widget.html.php", "/var/www/html/vg-api/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/integer_widget.html.php");
    }
}
