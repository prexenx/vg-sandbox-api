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
        $__internal_f5167204a228e1078f1253be1c65c72c81b1000efb96fd319b429b498d471b07 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f5167204a228e1078f1253be1c65c72c81b1000efb96fd319b429b498d471b07->enter($__internal_f5167204a228e1078f1253be1c65c72c81b1000efb96fd319b429b498d471b07_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        $__internal_828d2a132f8d887a79cc76461a5028c0add8a8e044608452d7dab306dd81156c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_828d2a132f8d887a79cc76461a5028c0add8a8e044608452d7dab306dd81156c->enter($__internal_828d2a132f8d887a79cc76461a5028c0add8a8e044608452d7dab306dd81156c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        // line 1
        echo "<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
";
        
        $__internal_f5167204a228e1078f1253be1c65c72c81b1000efb96fd319b429b498d471b07->leave($__internal_f5167204a228e1078f1253be1c65c72c81b1000efb96fd319b429b498d471b07_prof);

        
        $__internal_828d2a132f8d887a79cc76461a5028c0add8a8e044608452d7dab306dd81156c->leave($__internal_828d2a132f8d887a79cc76461a5028c0add8a8e044608452d7dab306dd81156c_prof);

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
