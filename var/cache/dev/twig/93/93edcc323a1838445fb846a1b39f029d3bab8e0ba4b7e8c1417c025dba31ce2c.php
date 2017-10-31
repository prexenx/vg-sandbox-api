<?php

/* @Framework/Form/percent_widget.html.php */
class __TwigTemplate_cac257098c8279fda9a9512b28a98612d4ed1d862d7158997c8dcf80cf23abee extends Twig_Template
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
        $__internal_0ff98d2cbfd08cb427cc4ea50a78b040ae62a524c5b19b80555cdbce4a4ddb0e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0ff98d2cbfd08cb427cc4ea50a78b040ae62a524c5b19b80555cdbce4a4ddb0e->enter($__internal_0ff98d2cbfd08cb427cc4ea50a78b040ae62a524c5b19b80555cdbce4a4ddb0e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/percent_widget.html.php"));

        $__internal_1e731391810cc1718c9e61c737f60595195886cd4470bc26939c8552b7b5b392 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1e731391810cc1718c9e61c737f60595195886cd4470bc26939c8552b7b5b392->enter($__internal_1e731391810cc1718c9e61c737f60595195886cd4470bc26939c8552b7b5b392_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/percent_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?> %
";
        
        $__internal_0ff98d2cbfd08cb427cc4ea50a78b040ae62a524c5b19b80555cdbce4a4ddb0e->leave($__internal_0ff98d2cbfd08cb427cc4ea50a78b040ae62a524c5b19b80555cdbce4a4ddb0e_prof);

        
        $__internal_1e731391810cc1718c9e61c737f60595195886cd4470bc26939c8552b7b5b392->leave($__internal_1e731391810cc1718c9e61c737f60595195886cd4470bc26939c8552b7b5b392_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/percent_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?> %
", "@Framework/Form/percent_widget.html.php", "/var/www/html/vg-api/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/percent_widget.html.php");
    }
}
