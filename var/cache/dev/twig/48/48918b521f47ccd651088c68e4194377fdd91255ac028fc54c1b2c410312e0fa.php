<?php

/* @Framework/Form/container_attributes.html.php */
class __TwigTemplate_6a55a53c51247ec69bccd8b24b50cbda4839c8b324c578ba89d9a88c7bdb8dd5 extends Twig_Template
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
        $__internal_54a6f5486d270f7ba03d3ace598c9c30e32b063f094ea82a33420022e07258ba = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_54a6f5486d270f7ba03d3ace598c9c30e32b063f094ea82a33420022e07258ba->enter($__internal_54a6f5486d270f7ba03d3ace598c9c30e32b063f094ea82a33420022e07258ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        $__internal_547351f3d6a34a3243fbe49fdf70451919e9518c40f1b4ec51d826f24bce83cb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_547351f3d6a34a3243fbe49fdf70451919e9518c40f1b4ec51d826f24bce83cb->enter($__internal_547351f3d6a34a3243fbe49fdf70451919e9518c40f1b4ec51d826f24bce83cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
";
        
        $__internal_54a6f5486d270f7ba03d3ace598c9c30e32b063f094ea82a33420022e07258ba->leave($__internal_54a6f5486d270f7ba03d3ace598c9c30e32b063f094ea82a33420022e07258ba_prof);

        
        $__internal_547351f3d6a34a3243fbe49fdf70451919e9518c40f1b4ec51d826f24bce83cb->leave($__internal_547351f3d6a34a3243fbe49fdf70451919e9518c40f1b4ec51d826f24bce83cb_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/container_attributes.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
", "@Framework/Form/container_attributes.html.php", "/var/www/html/vg-api/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/container_attributes.html.php");
    }
}
