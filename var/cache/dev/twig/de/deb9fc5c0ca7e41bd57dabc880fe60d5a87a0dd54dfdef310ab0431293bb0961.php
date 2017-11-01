<?php

/* @Framework/FormTable/button_row.html.php */
class __TwigTemplate_6c7a7c62399ac5ced96e0f5d371ff168731df67ad61203e1a84b10b1fc86d141 extends Twig_Template
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
        $__internal_790783c2e9e1000eff9eb104f27f09527358c4d21a08befe440c4af05fd5a6ea = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_790783c2e9e1000eff9eb104f27f09527358c4d21a08befe440c4af05fd5a6ea->enter($__internal_790783c2e9e1000eff9eb104f27f09527358c4d21a08befe440c4af05fd5a6ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        $__internal_b65e7ff48e18bf4d7c4da800389ec51f300b378b2af65cf79aadbc3dec51b2bc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b65e7ff48e18bf4d7c4da800389ec51f300b378b2af65cf79aadbc3dec51b2bc->enter($__internal_b65e7ff48e18bf4d7c4da800389ec51f300b378b2af65cf79aadbc3dec51b2bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        // line 1
        echo "<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form); ?>
    </td>
</tr>
";
        
        $__internal_790783c2e9e1000eff9eb104f27f09527358c4d21a08befe440c4af05fd5a6ea->leave($__internal_790783c2e9e1000eff9eb104f27f09527358c4d21a08befe440c4af05fd5a6ea_prof);

        
        $__internal_b65e7ff48e18bf4d7c4da800389ec51f300b378b2af65cf79aadbc3dec51b2bc->leave($__internal_b65e7ff48e18bf4d7c4da800389ec51f300b378b2af65cf79aadbc3dec51b2bc_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/button_row.html.php";
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
        return new Twig_Source("<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form); ?>
    </td>
</tr>
", "@Framework/FormTable/button_row.html.php", "/var/www/html/vg-api/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/button_row.html.php");
    }
}
