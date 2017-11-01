<?php

/* @Framework/Form/button_attributes.html.php */
class __TwigTemplate_ceccfb8815419d994e8106f136582c5da865a2eab32088ce143c7e5302ce81d1 extends Twig_Template
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
        $__internal_f2ab86b9da4c0e935edb2cfa75d5c5d5af542c8cbc9f297643e29799d03b2e70 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f2ab86b9da4c0e935edb2cfa75d5c5d5af542c8cbc9f297643e29799d03b2e70->enter($__internal_f2ab86b9da4c0e935edb2cfa75d5c5d5af542c8cbc9f297643e29799d03b2e70_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_attributes.html.php"));

        $__internal_0fad4e411bedfb027300e7dee25289d9de16cd04d63e9fc00cf9e1f9c47371bd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0fad4e411bedfb027300e7dee25289d9de16cd04d63e9fc00cf9e1f9c47371bd->enter($__internal_0fad4e411bedfb027300e7dee25289d9de16cd04d63e9fc00cf9e1f9c47371bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_attributes.html.php"));

        // line 1
        echo "id=\"<?php echo \$view->escape(\$id) ?>\" name=\"<?php echo \$view->escape(\$full_name) ?>\"<?php if (\$disabled): ?> disabled=\"disabled\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
";
        
        $__internal_f2ab86b9da4c0e935edb2cfa75d5c5d5af542c8cbc9f297643e29799d03b2e70->leave($__internal_f2ab86b9da4c0e935edb2cfa75d5c5d5af542c8cbc9f297643e29799d03b2e70_prof);

        
        $__internal_0fad4e411bedfb027300e7dee25289d9de16cd04d63e9fc00cf9e1f9c47371bd->leave($__internal_0fad4e411bedfb027300e7dee25289d9de16cd04d63e9fc00cf9e1f9c47371bd_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_attributes.html.php";
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
        return new Twig_Source("id=\"<?php echo \$view->escape(\$id) ?>\" name=\"<?php echo \$view->escape(\$full_name) ?>\"<?php if (\$disabled): ?> disabled=\"disabled\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
", "@Framework/Form/button_attributes.html.php", "/var/www/html/vg-api/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/button_attributes.html.php");
    }
}
