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
        $__internal_beac9d4de11a5888308edcde36c3981eb2300898a47b7f4f5394f4fd7e1e36c0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_beac9d4de11a5888308edcde36c3981eb2300898a47b7f4f5394f4fd7e1e36c0->enter($__internal_beac9d4de11a5888308edcde36c3981eb2300898a47b7f4f5394f4fd7e1e36c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        $__internal_e0323e4c000f97dad29df7563645a2e8e843e3c9a9ddd55c3ad7862353b94832 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e0323e4c000f97dad29df7563645a2e8e843e3c9a9ddd55c3ad7862353b94832->enter($__internal_e0323e4c000f97dad29df7563645a2e8e843e3c9a9ddd55c3ad7862353b94832_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
";
        
        $__internal_beac9d4de11a5888308edcde36c3981eb2300898a47b7f4f5394f4fd7e1e36c0->leave($__internal_beac9d4de11a5888308edcde36c3981eb2300898a47b7f4f5394f4fd7e1e36c0_prof);

        
        $__internal_e0323e4c000f97dad29df7563645a2e8e843e3c9a9ddd55c3ad7862353b94832->leave($__internal_e0323e4c000f97dad29df7563645a2e8e843e3c9a9ddd55c3ad7862353b94832_prof);

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
