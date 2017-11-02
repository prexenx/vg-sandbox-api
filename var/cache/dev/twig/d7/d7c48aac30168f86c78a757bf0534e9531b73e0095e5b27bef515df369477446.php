<?php

/* @Framework/Form/repeated_row.html.php */
class __TwigTemplate_2c2084755f5f2dd42118548121e8f890248bb31d9e6239d670baa9ece48ea6ba extends Twig_Template
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
        $__internal_ca22f69a4d4591d63022498bb55da901162907dfdf8f0738b9210b9aef2c5c2c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ca22f69a4d4591d63022498bb55da901162907dfdf8f0738b9210b9aef2c5c2c->enter($__internal_ca22f69a4d4591d63022498bb55da901162907dfdf8f0738b9210b9aef2c5c2c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/repeated_row.html.php"));

        $__internal_37adc5f62377b6a5d968d324a014cce42b5afc0cbb0854d5a025d35997713e6e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_37adc5f62377b6a5d968d324a014cce42b5afc0cbb0854d5a025d35997713e6e->enter($__internal_37adc5f62377b6a5d968d324a014cce42b5afc0cbb0854d5a025d35997713e6e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/repeated_row.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_rows') ?>
";
        
        $__internal_ca22f69a4d4591d63022498bb55da901162907dfdf8f0738b9210b9aef2c5c2c->leave($__internal_ca22f69a4d4591d63022498bb55da901162907dfdf8f0738b9210b9aef2c5c2c_prof);

        
        $__internal_37adc5f62377b6a5d968d324a014cce42b5afc0cbb0854d5a025d35997713e6e->leave($__internal_37adc5f62377b6a5d968d324a014cce42b5afc0cbb0854d5a025d35997713e6e_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/repeated_row.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_rows') ?>
", "@Framework/Form/repeated_row.html.php", "/var/www/html/vg-api/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/repeated_row.html.php");
    }
}
