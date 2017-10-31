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
        $__internal_2c462f6b42b6942d81488484bd3edb39f361ed60e47097f785571dfcaf6d5ef6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2c462f6b42b6942d81488484bd3edb39f361ed60e47097f785571dfcaf6d5ef6->enter($__internal_2c462f6b42b6942d81488484bd3edb39f361ed60e47097f785571dfcaf6d5ef6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        $__internal_b0cc554581c12acd2ea95431b7517f7143c0a94107ec25e4580002eef16af7a5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b0cc554581c12acd2ea95431b7517f7143c0a94107ec25e4580002eef16af7a5->enter($__internal_b0cc554581c12acd2ea95431b7517f7143c0a94107ec25e4580002eef16af7a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
";
        
        $__internal_2c462f6b42b6942d81488484bd3edb39f361ed60e47097f785571dfcaf6d5ef6->leave($__internal_2c462f6b42b6942d81488484bd3edb39f361ed60e47097f785571dfcaf6d5ef6_prof);

        
        $__internal_b0cc554581c12acd2ea95431b7517f7143c0a94107ec25e4580002eef16af7a5->leave($__internal_b0cc554581c12acd2ea95431b7517f7143c0a94107ec25e4580002eef16af7a5_prof);

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
