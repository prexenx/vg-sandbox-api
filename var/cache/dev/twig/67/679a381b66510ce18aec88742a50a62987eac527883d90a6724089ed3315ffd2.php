<?php

/* @Framework/Form/form.html.php */
class __TwigTemplate_0f0a4f53f66d2dea034ef3c8603781b8affdf27a1f575775b0fa562a2f1b5045 extends Twig_Template
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
        $__internal_f7fa47078367eafd66c2936f7a8391e95ede9755a971e72ba5b6cdb23bed60e9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f7fa47078367eafd66c2936f7a8391e95ede9755a971e72ba5b6cdb23bed60e9->enter($__internal_f7fa47078367eafd66c2936f7a8391e95ede9755a971e72ba5b6cdb23bed60e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        $__internal_040db234713eb69819077cc9c97c058ef21dc70c9f759045d1fcd31ddd66c3af = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_040db234713eb69819077cc9c97c058ef21dc70c9f759045d1fcd31ddd66c3af->enter($__internal_040db234713eb69819077cc9c97c058ef21dc70c9f759045d1fcd31ddd66c3af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        // line 1
        echo "<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
";
        
        $__internal_f7fa47078367eafd66c2936f7a8391e95ede9755a971e72ba5b6cdb23bed60e9->leave($__internal_f7fa47078367eafd66c2936f7a8391e95ede9755a971e72ba5b6cdb23bed60e9_prof);

        
        $__internal_040db234713eb69819077cc9c97c058ef21dc70c9f759045d1fcd31ddd66c3af->leave($__internal_040db234713eb69819077cc9c97c058ef21dc70c9f759045d1fcd31ddd66c3af_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
", "@Framework/Form/form.html.php", "/var/www/html/vg-api/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form.html.php");
    }
}
