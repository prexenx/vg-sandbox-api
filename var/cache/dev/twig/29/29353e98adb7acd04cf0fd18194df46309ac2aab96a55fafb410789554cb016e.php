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
        $__internal_244fbc81679eaa67ae0d74f0124019e7a45e061262a4759de1f94388a5ca328f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_244fbc81679eaa67ae0d74f0124019e7a45e061262a4759de1f94388a5ca328f->enter($__internal_244fbc81679eaa67ae0d74f0124019e7a45e061262a4759de1f94388a5ca328f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_attributes.html.php"));

        $__internal_8d6080b6f39a0738511360c5c7ac92b902a28a1a67ff81c1575a00cb73a2a4d5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8d6080b6f39a0738511360c5c7ac92b902a28a1a67ff81c1575a00cb73a2a4d5->enter($__internal_8d6080b6f39a0738511360c5c7ac92b902a28a1a67ff81c1575a00cb73a2a4d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_attributes.html.php"));

        // line 1
        echo "id=\"<?php echo \$view->escape(\$id) ?>\" name=\"<?php echo \$view->escape(\$full_name) ?>\"<?php if (\$disabled): ?> disabled=\"disabled\"<?php endif ?>
<?php if (\$required): ?> required=\"required\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
";
        
        $__internal_244fbc81679eaa67ae0d74f0124019e7a45e061262a4759de1f94388a5ca328f->leave($__internal_244fbc81679eaa67ae0d74f0124019e7a45e061262a4759de1f94388a5ca328f_prof);

        
        $__internal_8d6080b6f39a0738511360c5c7ac92b902a28a1a67ff81c1575a00cb73a2a4d5->leave($__internal_8d6080b6f39a0738511360c5c7ac92b902a28a1a67ff81c1575a00cb73a2a4d5_prof);

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
