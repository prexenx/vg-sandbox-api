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
        $__internal_7b955158096fe364d1d1dacd8ccee32ad8b2f24bff972e4fa32101f03b8dd3af = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7b955158096fe364d1d1dacd8ccee32ad8b2f24bff972e4fa32101f03b8dd3af->enter($__internal_7b955158096fe364d1d1dacd8ccee32ad8b2f24bff972e4fa32101f03b8dd3af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_attributes.html.php"));

        $__internal_81cdb7fe993dd02fd377d0fd5529027109dbad4cacf8898688bfd614bc613304 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_81cdb7fe993dd02fd377d0fd5529027109dbad4cacf8898688bfd614bc613304->enter($__internal_81cdb7fe993dd02fd377d0fd5529027109dbad4cacf8898688bfd614bc613304_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_attributes.html.php"));

        // line 1
        echo "id=\"<?php echo \$view->escape(\$id) ?>\" name=\"<?php echo \$view->escape(\$full_name) ?>\"<?php if (\$disabled): ?> disabled=\"disabled\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
";
        
        $__internal_7b955158096fe364d1d1dacd8ccee32ad8b2f24bff972e4fa32101f03b8dd3af->leave($__internal_7b955158096fe364d1d1dacd8ccee32ad8b2f24bff972e4fa32101f03b8dd3af_prof);

        
        $__internal_81cdb7fe993dd02fd377d0fd5529027109dbad4cacf8898688bfd614bc613304->leave($__internal_81cdb7fe993dd02fd377d0fd5529027109dbad4cacf8898688bfd614bc613304_prof);

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
