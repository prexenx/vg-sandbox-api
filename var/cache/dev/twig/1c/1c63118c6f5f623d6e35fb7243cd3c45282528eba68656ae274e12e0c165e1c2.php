<?php

/* @Framework/Form/collection_widget.html.php */
class __TwigTemplate_f325b1f096b0df6de0c34c5225aae844be899332f8a4faf098feb5a173f21806 extends Twig_Template
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
        $__internal_fa15a8344692b470ab78bacea807cbccd20ad5a7d946d9e83e56499783808c92 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fa15a8344692b470ab78bacea807cbccd20ad5a7d946d9e83e56499783808c92->enter($__internal_fa15a8344692b470ab78bacea807cbccd20ad5a7d946d9e83e56499783808c92_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        $__internal_d568532abd08c997812b8786b1540c3c46fe41ab59c7e008c9e0a311203129c3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d568532abd08c997812b8786b1540c3c46fe41ab59c7e008c9e0a311203129c3->enter($__internal_d568532abd08c997812b8786b1540c3c46fe41ab59c7e008c9e0a311203129c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        // line 1
        echo "<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
";
        
        $__internal_fa15a8344692b470ab78bacea807cbccd20ad5a7d946d9e83e56499783808c92->leave($__internal_fa15a8344692b470ab78bacea807cbccd20ad5a7d946d9e83e56499783808c92_prof);

        
        $__internal_d568532abd08c997812b8786b1540c3c46fe41ab59c7e008c9e0a311203129c3->leave($__internal_d568532abd08c997812b8786b1540c3c46fe41ab59c7e008c9e0a311203129c3_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/collection_widget.html.php";
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
        return new Twig_Source("<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
", "@Framework/Form/collection_widget.html.php", "/var/www/html/vg-api/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/collection_widget.html.php");
    }
}
