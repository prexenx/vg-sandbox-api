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
        $__internal_492569fa8f84c18e1dedabc8fe8cd5a1e18e49a7adf4312f378e6593a7e05f9d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_492569fa8f84c18e1dedabc8fe8cd5a1e18e49a7adf4312f378e6593a7e05f9d->enter($__internal_492569fa8f84c18e1dedabc8fe8cd5a1e18e49a7adf4312f378e6593a7e05f9d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        $__internal_b1ca0d11839eccf41dce4b528f72d99d98f9c4c5068285a6378dfc070891b96a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b1ca0d11839eccf41dce4b528f72d99d98f9c4c5068285a6378dfc070891b96a->enter($__internal_b1ca0d11839eccf41dce4b528f72d99d98f9c4c5068285a6378dfc070891b96a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form); ?>
    </td>
</tr>
";
        
        $__internal_492569fa8f84c18e1dedabc8fe8cd5a1e18e49a7adf4312f378e6593a7e05f9d->leave($__internal_492569fa8f84c18e1dedabc8fe8cd5a1e18e49a7adf4312f378e6593a7e05f9d_prof);

        
        $__internal_b1ca0d11839eccf41dce4b528f72d99d98f9c4c5068285a6378dfc070891b96a->leave($__internal_b1ca0d11839eccf41dce4b528f72d99d98f9c4c5068285a6378dfc070891b96a_prof);

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
