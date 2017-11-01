<?php

/* @Framework/FormTable/hidden_row.html.php */
class __TwigTemplate_51533ba3375d6c04eb507c224985522b57d84babdd7e22c92b938f3bbb5fd5f2 extends Twig_Template
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
        $__internal_1347742afa2c35c76661a6b1422a45999e783d25f17cd4fc1b0e53f0ad21cd41 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1347742afa2c35c76661a6b1422a45999e783d25f17cd4fc1b0e53f0ad21cd41->enter($__internal_1347742afa2c35c76661a6b1422a45999e783d25f17cd4fc1b0e53f0ad21cd41_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        $__internal_e11dd7449c51448010b9a0eab6d391cc4e1786eed2c2a450b51582009775705e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e11dd7449c51448010b9a0eab6d391cc4e1786eed2c2a450b51582009775705e->enter($__internal_e11dd7449c51448010b9a0eab6d391cc4e1786eed2c2a450b51582009775705e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form); ?>
    </td>
</tr>
";
        
        $__internal_1347742afa2c35c76661a6b1422a45999e783d25f17cd4fc1b0e53f0ad21cd41->leave($__internal_1347742afa2c35c76661a6b1422a45999e783d25f17cd4fc1b0e53f0ad21cd41_prof);

        
        $__internal_e11dd7449c51448010b9a0eab6d391cc4e1786eed2c2a450b51582009775705e->leave($__internal_e11dd7449c51448010b9a0eab6d391cc4e1786eed2c2a450b51582009775705e_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/hidden_row.html.php";
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
        return new Twig_Source("<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form); ?>
    </td>
</tr>
", "@Framework/FormTable/hidden_row.html.php", "/var/www/html/vg-api/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/hidden_row.html.php");
    }
}
