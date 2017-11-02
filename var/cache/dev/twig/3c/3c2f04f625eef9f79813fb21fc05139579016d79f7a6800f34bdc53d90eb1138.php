<?php

/* @Framework/Form/email_widget.html.php */
class __TwigTemplate_b6b22c788782de2f892fda828deb22a92f511fa6df6a087c9b97a59596f2cab9 extends Twig_Template
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
        $__internal_4640ebf2c61067f689912ba1b0cf47e92d66cd758be8f993d86242d08edf6bc4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4640ebf2c61067f689912ba1b0cf47e92d66cd758be8f993d86242d08edf6bc4->enter($__internal_4640ebf2c61067f689912ba1b0cf47e92d66cd758be8f993d86242d08edf6bc4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        $__internal_5bf520bdbe98f3ed3dabd0d49765318eddf226f4a0a00d7a487beb20e69febf6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5bf520bdbe98f3ed3dabd0d49765318eddf226f4a0a00d7a487beb20e69febf6->enter($__internal_5bf520bdbe98f3ed3dabd0d49765318eddf226f4a0a00d7a487beb20e69febf6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
";
        
        $__internal_4640ebf2c61067f689912ba1b0cf47e92d66cd758be8f993d86242d08edf6bc4->leave($__internal_4640ebf2c61067f689912ba1b0cf47e92d66cd758be8f993d86242d08edf6bc4_prof);

        
        $__internal_5bf520bdbe98f3ed3dabd0d49765318eddf226f4a0a00d7a487beb20e69febf6->leave($__internal_5bf520bdbe98f3ed3dabd0d49765318eddf226f4a0a00d7a487beb20e69febf6_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/email_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
", "@Framework/Form/email_widget.html.php", "/var/www/html/vg-api/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/email_widget.html.php");
    }
}
