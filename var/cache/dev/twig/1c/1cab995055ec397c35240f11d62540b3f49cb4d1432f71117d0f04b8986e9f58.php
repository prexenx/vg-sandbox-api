<?php

/* @Framework/Form/hidden_row.html.php */
class __TwigTemplate_2720788833a71414dfdf5b8ea66866a83837e78fff47f3b7f9a84f64b8e41b5c extends Twig_Template
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
        $__internal_842900597dcb566e970a3377bb0ca0dc1a0dd3a0d1b404177cea8719877ef5e4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_842900597dcb566e970a3377bb0ca0dc1a0dd3a0d1b404177cea8719877ef5e4->enter($__internal_842900597dcb566e970a3377bb0ca0dc1a0dd3a0d1b404177cea8719877ef5e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_row.html.php"));

        $__internal_0b6e2f7312fa9e6c9801955f2f25ec4beaba8826172523723a4799fce18d79c6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0b6e2f7312fa9e6c9801955f2f25ec4beaba8826172523723a4799fce18d79c6->enter($__internal_0b6e2f7312fa9e6c9801955f2f25ec4beaba8826172523723a4799fce18d79c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_row.html.php"));

        // line 1
        echo "<?php echo \$view['form']->widget(\$form) ?>
";
        
        $__internal_842900597dcb566e970a3377bb0ca0dc1a0dd3a0d1b404177cea8719877ef5e4->leave($__internal_842900597dcb566e970a3377bb0ca0dc1a0dd3a0d1b404177cea8719877ef5e4_prof);

        
        $__internal_0b6e2f7312fa9e6c9801955f2f25ec4beaba8826172523723a4799fce18d79c6->leave($__internal_0b6e2f7312fa9e6c9801955f2f25ec4beaba8826172523723a4799fce18d79c6_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_row.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->widget(\$form) ?>
", "@Framework/Form/hidden_row.html.php", "/var/www/html/vg-api/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/hidden_row.html.php");
    }
}
