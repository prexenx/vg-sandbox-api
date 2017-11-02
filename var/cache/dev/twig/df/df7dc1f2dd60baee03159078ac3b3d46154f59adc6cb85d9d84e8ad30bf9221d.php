<?php

/* @Framework/Form/button_widget.html.php */
class __TwigTemplate_5eb68b8b23f3ff18809b5aa2876145b67fa4a3032a18bfecdef47a47ba15eb80 extends Twig_Template
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
        $__internal_86511ffed4982aa483e0468c44769ce1ffea40a17dcb5873435e42e43feebb03 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_86511ffed4982aa483e0468c44769ce1ffea40a17dcb5873435e42e43feebb03->enter($__internal_86511ffed4982aa483e0468c44769ce1ffea40a17dcb5873435e42e43feebb03_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        $__internal_5f9cbf87e5c87ce4bb9d1f8d2acd300228214982b9a387c5e270056780b6fca6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5f9cbf87e5c87ce4bb9d1f8d2acd300228214982b9a387c5e270056780b6fca6->enter($__internal_5f9cbf87e5c87ce4bb9d1f8d2acd300228214982b9a387c5e270056780b6fca6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        // line 1
        echo "<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<button type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'button' ?>\" <?php echo \$view['form']->block(\$form, 'button_attributes') ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></button>
";
        
        $__internal_86511ffed4982aa483e0468c44769ce1ffea40a17dcb5873435e42e43feebb03->leave($__internal_86511ffed4982aa483e0468c44769ce1ffea40a17dcb5873435e42e43feebb03_prof);

        
        $__internal_5f9cbf87e5c87ce4bb9d1f8d2acd300228214982b9a387c5e270056780b6fca6->leave($__internal_5f9cbf87e5c87ce4bb9d1f8d2acd300228214982b9a387c5e270056780b6fca6_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_widget.html.php";
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
        return new Twig_Source("<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<button type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'button' ?>\" <?php echo \$view['form']->block(\$form, 'button_attributes') ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></button>
", "@Framework/Form/button_widget.html.php", "/var/www/html/vg-api/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/button_widget.html.php");
    }
}
