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
        $__internal_dd3316671d42737589166d4fb281b9d996945685d06861372d86c003b0da74c4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dd3316671d42737589166d4fb281b9d996945685d06861372d86c003b0da74c4->enter($__internal_dd3316671d42737589166d4fb281b9d996945685d06861372d86c003b0da74c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        $__internal_9dfbc17cdb4d79ddf9c5ff4ede07a3d867bce98830fd8dddcab2d1aa0ade790d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9dfbc17cdb4d79ddf9c5ff4ede07a3d867bce98830fd8dddcab2d1aa0ade790d->enter($__internal_9dfbc17cdb4d79ddf9c5ff4ede07a3d867bce98830fd8dddcab2d1aa0ade790d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
";
        
        $__internal_dd3316671d42737589166d4fb281b9d996945685d06861372d86c003b0da74c4->leave($__internal_dd3316671d42737589166d4fb281b9d996945685d06861372d86c003b0da74c4_prof);

        
        $__internal_9dfbc17cdb4d79ddf9c5ff4ede07a3d867bce98830fd8dddcab2d1aa0ade790d->leave($__internal_9dfbc17cdb4d79ddf9c5ff4ede07a3d867bce98830fd8dddcab2d1aa0ade790d_prof);

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
