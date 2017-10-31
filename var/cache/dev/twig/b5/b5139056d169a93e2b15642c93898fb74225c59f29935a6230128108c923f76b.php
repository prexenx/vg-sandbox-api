<?php

/* @Framework/Form/form_rows.html.php */
class __TwigTemplate_55c0545347de4b707b3b8fafff7f36a3eb5744b739d4c17784603f098ef17d2b extends Twig_Template
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
        $__internal_f71e368c593c19206567534a03dbf92357ed8b848cec846bbc898ccd5fd2fdcf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f71e368c593c19206567534a03dbf92357ed8b848cec846bbc898ccd5fd2fdcf->enter($__internal_f71e368c593c19206567534a03dbf92357ed8b848cec846bbc898ccd5fd2fdcf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        $__internal_06f060085d6c3b2095911b4b8519e0b7a7967b8757999d85f2523cf90dd7cb9d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_06f060085d6c3b2095911b4b8519e0b7a7967b8757999d85f2523cf90dd7cb9d->enter($__internal_06f060085d6c3b2095911b4b8519e0b7a7967b8757999d85f2523cf90dd7cb9d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_f71e368c593c19206567534a03dbf92357ed8b848cec846bbc898ccd5fd2fdcf->leave($__internal_f71e368c593c19206567534a03dbf92357ed8b848cec846bbc898ccd5fd2fdcf_prof);

        
        $__internal_06f060085d6c3b2095911b4b8519e0b7a7967b8757999d85f2523cf90dd7cb9d->leave($__internal_06f060085d6c3b2095911b4b8519e0b7a7967b8757999d85f2523cf90dd7cb9d_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rows.html.php";
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
        return new Twig_Source("<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
", "@Framework/Form/form_rows.html.php", "/var/www/html/vg-api/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_rows.html.php");
    }
}
