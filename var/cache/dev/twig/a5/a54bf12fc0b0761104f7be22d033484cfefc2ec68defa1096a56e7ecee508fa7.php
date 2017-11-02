<?php

/* @Framework/Form/password_widget.html.php */
class __TwigTemplate_aa7e367b3611ed3bea7ab932dbd1d6971ffe0b37eed6311f8e1e2121e82cce19 extends Twig_Template
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
        $__internal_aa7b18341c817ccff6c5358ff660a09c9ed6d81e5c46edaec659ffa10e7f2afd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_aa7b18341c817ccff6c5358ff660a09c9ed6d81e5c46edaec659ffa10e7f2afd->enter($__internal_aa7b18341c817ccff6c5358ff660a09c9ed6d81e5c46edaec659ffa10e7f2afd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        $__internal_cc25bed58f5e7d86effc5798aea80fbde831d84caedbc5aba78d99263693d1d9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cc25bed58f5e7d86effc5798aea80fbde831d84caedbc5aba78d99263693d1d9->enter($__internal_cc25bed58f5e7d86effc5798aea80fbde831d84caedbc5aba78d99263693d1d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
";
        
        $__internal_aa7b18341c817ccff6c5358ff660a09c9ed6d81e5c46edaec659ffa10e7f2afd->leave($__internal_aa7b18341c817ccff6c5358ff660a09c9ed6d81e5c46edaec659ffa10e7f2afd_prof);

        
        $__internal_cc25bed58f5e7d86effc5798aea80fbde831d84caedbc5aba78d99263693d1d9->leave($__internal_cc25bed58f5e7d86effc5798aea80fbde831d84caedbc5aba78d99263693d1d9_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/password_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
", "@Framework/Form/password_widget.html.php", "/var/www/html/vg-api/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/password_widget.html.php");
    }
}
