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
        $__internal_fe0e9a069f7b017df9fca39c71967329b142da028771ed9ae5169d9b9fe23f30 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fe0e9a069f7b017df9fca39c71967329b142da028771ed9ae5169d9b9fe23f30->enter($__internal_fe0e9a069f7b017df9fca39c71967329b142da028771ed9ae5169d9b9fe23f30_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_container_attributes.html.php"));

        $__internal_728e257efd58c931d03d8d091a0969050f7c821d02b7428220d81dec24bd0125 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_728e257efd58c931d03d8d091a0969050f7c821d02b7428220d81dec24bd0125->enter($__internal_728e257efd58c931d03d8d091a0969050f7c821d02b7428220d81dec24bd0125_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_container_attributes.html.php"));

        // line 1
        echo "<?php if (!empty(\$id)): ?>id=\"<?php echo \$view->escape(\$id) ?>\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
";
        
        $__internal_fe0e9a069f7b017df9fca39c71967329b142da028771ed9ae5169d9b9fe23f30->leave($__internal_fe0e9a069f7b017df9fca39c71967329b142da028771ed9ae5169d9b9fe23f30_prof);

        
        $__internal_728e257efd58c931d03d8d091a0969050f7c821d02b7428220d81dec24bd0125->leave($__internal_728e257efd58c931d03d8d091a0969050f7c821d02b7428220d81dec24bd0125_prof);

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
