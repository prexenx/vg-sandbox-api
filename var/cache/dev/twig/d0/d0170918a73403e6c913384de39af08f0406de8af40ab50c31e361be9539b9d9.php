<?php

/* @Framework/Form/integer_widget.html.php */
class __TwigTemplate_ba1ba2186f62667908311c2b494e5b6e02ec94ce71b9bfcb6d25ca8f48330458 extends Twig_Template
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
        $__internal_42de6e2a4bf2735689b7c2eb9fc6a4de32d8b02084e81117bba1b7ecc1ed15fc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_42de6e2a4bf2735689b7c2eb9fc6a4de32d8b02084e81117bba1b7ecc1ed15fc->enter($__internal_42de6e2a4bf2735689b7c2eb9fc6a4de32d8b02084e81117bba1b7ecc1ed15fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        $__internal_879b9dee6c658ae5ed134b7e00f5210a6e04e8f11c724d499ba0a72386e7b807 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_879b9dee6c658ae5ed134b7e00f5210a6e04e8f11c724d499ba0a72386e7b807->enter($__internal_879b9dee6c658ae5ed134b7e00f5210a6e04e8f11c724d499ba0a72386e7b807_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
";
        
        $__internal_42de6e2a4bf2735689b7c2eb9fc6a4de32d8b02084e81117bba1b7ecc1ed15fc->leave($__internal_42de6e2a4bf2735689b7c2eb9fc6a4de32d8b02084e81117bba1b7ecc1ed15fc_prof);

        
        $__internal_879b9dee6c658ae5ed134b7e00f5210a6e04e8f11c724d499ba0a72386e7b807->leave($__internal_879b9dee6c658ae5ed134b7e00f5210a6e04e8f11c724d499ba0a72386e7b807_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/integer_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
", "@Framework/Form/integer_widget.html.php", "/var/www/html/vg-api/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/integer_widget.html.php");
    }
}
