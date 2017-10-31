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
        $__internal_dc85ce03cc1cdc5299192f273b7d4157584a4bb6f80f81a2606b59a1b00bfa32 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dc85ce03cc1cdc5299192f273b7d4157584a4bb6f80f81a2606b59a1b00bfa32->enter($__internal_dc85ce03cc1cdc5299192f273b7d4157584a4bb6f80f81a2606b59a1b00bfa32_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        $__internal_98e79ae26bfc2e2cf9de846e9e20dbcd5f186f0f3ab2b57be672aefe6e06510a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_98e79ae26bfc2e2cf9de846e9e20dbcd5f186f0f3ab2b57be672aefe6e06510a->enter($__internal_98e79ae26bfc2e2cf9de846e9e20dbcd5f186f0f3ab2b57be672aefe6e06510a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
";
        
        $__internal_dc85ce03cc1cdc5299192f273b7d4157584a4bb6f80f81a2606b59a1b00bfa32->leave($__internal_dc85ce03cc1cdc5299192f273b7d4157584a4bb6f80f81a2606b59a1b00bfa32_prof);

        
        $__internal_98e79ae26bfc2e2cf9de846e9e20dbcd5f186f0f3ab2b57be672aefe6e06510a->leave($__internal_98e79ae26bfc2e2cf9de846e9e20dbcd5f186f0f3ab2b57be672aefe6e06510a_prof);

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
