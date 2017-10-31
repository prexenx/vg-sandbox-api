<?php

/* @Framework/Form/choice_options.html.php */
class __TwigTemplate_83cfcb1e69337d48bfde75635f0e55055c0cbadbbfc96f4bdf61eee09aa3b5dc extends Twig_Template
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
        $__internal_1e62fd1974de644c06d02f17a9e53134796fd42ec3b1964f812099ab770149a1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1e62fd1974de644c06d02f17a9e53134796fd42ec3b1964f812099ab770149a1->enter($__internal_1e62fd1974de644c06d02f17a9e53134796fd42ec3b1964f812099ab770149a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        $__internal_a96f85c72ddc2c16b2b4429f1bf258a99066693ba11ecc5073896ef04ae2f738 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a96f85c72ddc2c16b2b4429f1bf258a99066693ba11ecc5073896ef04ae2f738->enter($__internal_a96f85c72ddc2c16b2b4429f1bf258a99066693ba11ecc5073896ef04ae2f738_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
";
        
        $__internal_1e62fd1974de644c06d02f17a9e53134796fd42ec3b1964f812099ab770149a1->leave($__internal_1e62fd1974de644c06d02f17a9e53134796fd42ec3b1964f812099ab770149a1_prof);

        
        $__internal_a96f85c72ddc2c16b2b4429f1bf258a99066693ba11ecc5073896ef04ae2f738->leave($__internal_a96f85c72ddc2c16b2b4429f1bf258a99066693ba11ecc5073896ef04ae2f738_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_options.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
", "@Framework/Form/choice_options.html.php", "/var/www/html/vg-api/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/choice_options.html.php");
    }
}
