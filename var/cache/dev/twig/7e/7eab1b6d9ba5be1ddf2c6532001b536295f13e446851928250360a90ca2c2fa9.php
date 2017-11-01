<?php

/* @Framework/Form/range_widget.html.php */
class __TwigTemplate_60a8243ba5df0a2afc62cd72fda73faca628528360437165e8037aefdeedd74c extends Twig_Template
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
        $__internal_8d746450de202fc94d1c4b885caf92b5d3bdd2c7744a5a454af2d48ce92d599d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8d746450de202fc94d1c4b885caf92b5d3bdd2c7744a5a454af2d48ce92d599d->enter($__internal_8d746450de202fc94d1c4b885caf92b5d3bdd2c7744a5a454af2d48ce92d599d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/range_widget.html.php"));

        $__internal_7287202cced65c2f62ba89050bde4f052e49af3546e114d9374128a2a70b9217 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7287202cced65c2f62ba89050bde4f052e49af3546e114d9374128a2a70b9217->enter($__internal_7287202cced65c2f62ba89050bde4f052e49af3546e114d9374128a2a70b9217_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/range_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'range'));
";
        
        $__internal_8d746450de202fc94d1c4b885caf92b5d3bdd2c7744a5a454af2d48ce92d599d->leave($__internal_8d746450de202fc94d1c4b885caf92b5d3bdd2c7744a5a454af2d48ce92d599d_prof);

        
        $__internal_7287202cced65c2f62ba89050bde4f052e49af3546e114d9374128a2a70b9217->leave($__internal_7287202cced65c2f62ba89050bde4f052e49af3546e114d9374128a2a70b9217_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/range_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'range'));
", "@Framework/Form/range_widget.html.php", "/var/www/html/vg-api/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/range_widget.html.php");
    }
}
