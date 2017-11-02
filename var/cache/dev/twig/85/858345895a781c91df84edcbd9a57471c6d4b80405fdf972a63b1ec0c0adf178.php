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
        $__internal_25279508a2c33a231bd746cb9143e9b2182d86d1b8dcfe956839483c4fa61e18 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_25279508a2c33a231bd746cb9143e9b2182d86d1b8dcfe956839483c4fa61e18->enter($__internal_25279508a2c33a231bd746cb9143e9b2182d86d1b8dcfe956839483c4fa61e18_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        $__internal_451a2afb99d055468f0fd3f79e19dae8b73588a645f849b2b974ada9de15f84b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_451a2afb99d055468f0fd3f79e19dae8b73588a645f849b2b974ada9de15f84b->enter($__internal_451a2afb99d055468f0fd3f79e19dae8b73588a645f849b2b974ada9de15f84b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form); ?>
    </td>
</tr>
";
        
        $__internal_25279508a2c33a231bd746cb9143e9b2182d86d1b8dcfe956839483c4fa61e18->leave($__internal_25279508a2c33a231bd746cb9143e9b2182d86d1b8dcfe956839483c4fa61e18_prof);

        
        $__internal_451a2afb99d055468f0fd3f79e19dae8b73588a645f849b2b974ada9de15f84b->leave($__internal_451a2afb99d055468f0fd3f79e19dae8b73588a645f849b2b974ada9de15f84b_prof);

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
