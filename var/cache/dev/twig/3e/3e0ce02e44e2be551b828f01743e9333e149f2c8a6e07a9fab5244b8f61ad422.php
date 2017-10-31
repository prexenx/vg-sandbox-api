<?php

/* @Framework/Form/form_widget.html.php */
class __TwigTemplate_e001961956581a242824cecc21b918cb739b13eb41516e2d2efebde14b4c936e extends Twig_Template
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
        $__internal_27deafaa0e3950ef0347bfe8029f464e32660e18a9d1ce94e079cec9b5491e08 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_27deafaa0e3950ef0347bfe8029f464e32660e18a9d1ce94e079cec9b5491e08->enter($__internal_27deafaa0e3950ef0347bfe8029f464e32660e18a9d1ce94e079cec9b5491e08_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        $__internal_0b8bff755eca056057c2cf2d83ec57955c8e90205a260e996ded33efa5e46a4b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0b8bff755eca056057c2cf2d83ec57955c8e90205a260e996ded33efa5e46a4b->enter($__internal_0b8bff755eca056057c2cf2d83ec57955c8e90205a260e996ded33efa5e46a4b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        // line 1
        echo "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
        
        $__internal_27deafaa0e3950ef0347bfe8029f464e32660e18a9d1ce94e079cec9b5491e08->leave($__internal_27deafaa0e3950ef0347bfe8029f464e32660e18a9d1ce94e079cec9b5491e08_prof);

        
        $__internal_0b8bff755eca056057c2cf2d83ec57955c8e90205a260e996ded33efa5e46a4b->leave($__internal_0b8bff755eca056057c2cf2d83ec57955c8e90205a260e996ded33efa5e46a4b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget.html.php";
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
        return new Twig_Source("<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
", "@Framework/Form/form_widget.html.php", "/var/www/html/vg-api/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_widget.html.php");
    }
}
