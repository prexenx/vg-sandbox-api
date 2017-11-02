<?php

/* @Framework/Form/submit_widget.html.php */
class __TwigTemplate_8f02584d14211053dfb65474ec78e06b8875887fc4cc2f46fb6fb49ef60bfe70 extends Twig_Template
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
        $__internal_c711a6f06d23955612ca8cf10b9d71627dbc153ae36e55d1a5d8525540a2c3cd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c711a6f06d23955612ca8cf10b9d71627dbc153ae36e55d1a5d8525540a2c3cd->enter($__internal_c711a6f06d23955612ca8cf10b9d71627dbc153ae36e55d1a5d8525540a2c3cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        $__internal_bc26c0d413a925fb5c48e78864e7c2a3e45cde4fc7481402545654a47cfb4b08 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bc26c0d413a925fb5c48e78864e7c2a3e45cde4fc7481402545654a47cfb4b08->enter($__internal_bc26c0d413a925fb5c48e78864e7c2a3e45cde4fc7481402545654a47cfb4b08_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
";
        
        $__internal_c711a6f06d23955612ca8cf10b9d71627dbc153ae36e55d1a5d8525540a2c3cd->leave($__internal_c711a6f06d23955612ca8cf10b9d71627dbc153ae36e55d1a5d8525540a2c3cd_prof);

        
        $__internal_bc26c0d413a925fb5c48e78864e7c2a3e45cde4fc7481402545654a47cfb4b08->leave($__internal_bc26c0d413a925fb5c48e78864e7c2a3e45cde4fc7481402545654a47cfb4b08_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/submit_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
", "@Framework/Form/submit_widget.html.php", "/var/www/html/vg-api/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/submit_widget.html.php");
    }
}
