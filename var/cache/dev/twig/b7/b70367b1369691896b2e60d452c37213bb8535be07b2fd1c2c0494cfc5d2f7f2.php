<?php

/* @Framework/Form/number_widget.html.php */
class __TwigTemplate_de3459c6b7722a16b4ca00949276e814c1c70f11bdfb5b73c778248107efd7b5 extends Twig_Template
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
        $__internal_a191a34f5cd314460006a9fd65e5d51f55fea08c8cd697c9d7cff1fb6ff359f7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a191a34f5cd314460006a9fd65e5d51f55fea08c8cd697c9d7cff1fb6ff359f7->enter($__internal_a191a34f5cd314460006a9fd65e5d51f55fea08c8cd697c9d7cff1fb6ff359f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/number_widget.html.php"));

        $__internal_7142f4eae30fcdf80b45bec821da8289f2780ef04ae13a418f09588d8db987f9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7142f4eae30fcdf80b45bec821da8289f2780ef04ae13a418f09588d8db987f9->enter($__internal_7142f4eae30fcdf80b45bec821da8289f2780ef04ae13a418f09588d8db987f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/number_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?>
";
        
        $__internal_a191a34f5cd314460006a9fd65e5d51f55fea08c8cd697c9d7cff1fb6ff359f7->leave($__internal_a191a34f5cd314460006a9fd65e5d51f55fea08c8cd697c9d7cff1fb6ff359f7_prof);

        
        $__internal_7142f4eae30fcdf80b45bec821da8289f2780ef04ae13a418f09588d8db987f9->leave($__internal_7142f4eae30fcdf80b45bec821da8289f2780ef04ae13a418f09588d8db987f9_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/number_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?>
", "@Framework/Form/number_widget.html.php", "/var/www/html/vg-api/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/number_widget.html.php");
    }
}
