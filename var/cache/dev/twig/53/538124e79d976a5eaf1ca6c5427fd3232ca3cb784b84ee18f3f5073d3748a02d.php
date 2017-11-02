<?php

/* @Framework/Form/hidden_widget.html.php */
class __TwigTemplate_ea50645850be2d3e65b2e22602867647400e22011253f8b688287d3b7791711b extends Twig_Template
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
        $__internal_0e58acff9a849b28900d02939a41bd308d0f4b20abc899b4f1c56893c0b16cac = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0e58acff9a849b28900d02939a41bd308d0f4b20abc899b4f1c56893c0b16cac->enter($__internal_0e58acff9a849b28900d02939a41bd308d0f4b20abc899b4f1c56893c0b16cac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        $__internal_7f237ffa4e1ef3df1885b01c5c9827ea5c32402e6816a31b68d37451589729d4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7f237ffa4e1ef3df1885b01c5c9827ea5c32402e6816a31b68d37451589729d4->enter($__internal_7f237ffa4e1ef3df1885b01c5c9827ea5c32402e6816a31b68d37451589729d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
";
        
        $__internal_0e58acff9a849b28900d02939a41bd308d0f4b20abc899b4f1c56893c0b16cac->leave($__internal_0e58acff9a849b28900d02939a41bd308d0f4b20abc899b4f1c56893c0b16cac_prof);

        
        $__internal_7f237ffa4e1ef3df1885b01c5c9827ea5c32402e6816a31b68d37451589729d4->leave($__internal_7f237ffa4e1ef3df1885b01c5c9827ea5c32402e6816a31b68d37451589729d4_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
", "@Framework/Form/hidden_widget.html.php", "/var/www/html/vg-api/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/hidden_widget.html.php");
    }
}
