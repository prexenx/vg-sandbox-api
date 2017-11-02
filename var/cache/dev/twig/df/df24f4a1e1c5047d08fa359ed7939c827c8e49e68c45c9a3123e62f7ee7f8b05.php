<?php

/* @Framework/Form/widget_container_attributes.html.php */
class __TwigTemplate_d55f8f25b1ad32c9ece4fdb561684edeefbc9a935272dda9c9fb69565d4b4b39 extends Twig_Template
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
        $__internal_332e3dad0f949391d2b5e936e9be7e3251d7fc8ce0051fd4c1429f38eb3874cc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_332e3dad0f949391d2b5e936e9be7e3251d7fc8ce0051fd4c1429f38eb3874cc->enter($__internal_332e3dad0f949391d2b5e936e9be7e3251d7fc8ce0051fd4c1429f38eb3874cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_container_attributes.html.php"));

        $__internal_17b797a3d288dff4f0b21ec9794960661345799eb50beec78925963c4586d349 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_17b797a3d288dff4f0b21ec9794960661345799eb50beec78925963c4586d349->enter($__internal_17b797a3d288dff4f0b21ec9794960661345799eb50beec78925963c4586d349_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_container_attributes.html.php"));

        // line 1
        echo "<?php if (!empty(\$id)): ?>id=\"<?php echo \$view->escape(\$id) ?>\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
";
        
        $__internal_332e3dad0f949391d2b5e936e9be7e3251d7fc8ce0051fd4c1429f38eb3874cc->leave($__internal_332e3dad0f949391d2b5e936e9be7e3251d7fc8ce0051fd4c1429f38eb3874cc_prof);

        
        $__internal_17b797a3d288dff4f0b21ec9794960661345799eb50beec78925963c4586d349->leave($__internal_17b797a3d288dff4f0b21ec9794960661345799eb50beec78925963c4586d349_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/widget_container_attributes.html.php";
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
        return new Twig_Source("<?php if (!empty(\$id)): ?>id=\"<?php echo \$view->escape(\$id) ?>\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
", "@Framework/Form/widget_container_attributes.html.php", "/var/www/html/vg-api/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/widget_container_attributes.html.php");
    }
}
