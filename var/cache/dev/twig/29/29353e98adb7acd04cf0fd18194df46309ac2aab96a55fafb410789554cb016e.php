<?php

/* @Framework/Form/widget_attributes.html.php */
class __TwigTemplate_360ad8ceeaaff0b463f9da1df255526350eedf5ab49cf896cec5b36c1615d657 extends Twig_Template
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
        $__internal_53b2fb7f2056ed87d9d56480d5495500dc799d71776d784b64028d81f30b9a3c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_53b2fb7f2056ed87d9d56480d5495500dc799d71776d784b64028d81f30b9a3c->enter($__internal_53b2fb7f2056ed87d9d56480d5495500dc799d71776d784b64028d81f30b9a3c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_attributes.html.php"));

        $__internal_6f03781c97b0cbb14d9badd79e58220c7a6ad6ea75f89c24123c2c84b86fe119 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6f03781c97b0cbb14d9badd79e58220c7a6ad6ea75f89c24123c2c84b86fe119->enter($__internal_6f03781c97b0cbb14d9badd79e58220c7a6ad6ea75f89c24123c2c84b86fe119_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_attributes.html.php"));

        // line 1
        echo "id=\"<?php echo \$view->escape(\$id) ?>\" name=\"<?php echo \$view->escape(\$full_name) ?>\"<?php if (\$disabled): ?> disabled=\"disabled\"<?php endif ?>
<?php if (\$required): ?> required=\"required\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
";
        
        $__internal_53b2fb7f2056ed87d9d56480d5495500dc799d71776d784b64028d81f30b9a3c->leave($__internal_53b2fb7f2056ed87d9d56480d5495500dc799d71776d784b64028d81f30b9a3c_prof);

        
        $__internal_6f03781c97b0cbb14d9badd79e58220c7a6ad6ea75f89c24123c2c84b86fe119->leave($__internal_6f03781c97b0cbb14d9badd79e58220c7a6ad6ea75f89c24123c2c84b86fe119_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/widget_attributes.html.php";
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
<?php if (\$required): ?> required=\"required\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
", "@Framework/Form/widget_attributes.html.php", "/var/www/html/vg-api/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/widget_attributes.html.php");
    }
}
