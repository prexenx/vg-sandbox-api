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
        $__internal_2bb8a9c083d69f5b189a9337071ed20b1342e81199fafb93069906b36d69e5a4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2bb8a9c083d69f5b189a9337071ed20b1342e81199fafb93069906b36d69e5a4->enter($__internal_2bb8a9c083d69f5b189a9337071ed20b1342e81199fafb93069906b36d69e5a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/percent_widget.html.php"));

        $__internal_c40a2be7b0302649a2a3313afa84af9ccffb568ec4cd5376f40f039605bc71dd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c40a2be7b0302649a2a3313afa84af9ccffb568ec4cd5376f40f039605bc71dd->enter($__internal_c40a2be7b0302649a2a3313afa84af9ccffb568ec4cd5376f40f039605bc71dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/percent_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?> %
";
        
        $__internal_2bb8a9c083d69f5b189a9337071ed20b1342e81199fafb93069906b36d69e5a4->leave($__internal_2bb8a9c083d69f5b189a9337071ed20b1342e81199fafb93069906b36d69e5a4_prof);

        
        $__internal_c40a2be7b0302649a2a3313afa84af9ccffb568ec4cd5376f40f039605bc71dd->leave($__internal_c40a2be7b0302649a2a3313afa84af9ccffb568ec4cd5376f40f039605bc71dd_prof);

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
