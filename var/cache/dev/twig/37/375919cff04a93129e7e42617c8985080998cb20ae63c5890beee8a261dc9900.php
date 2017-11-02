<?php

/* @Framework/Form/choice_attributes.html.php */
class __TwigTemplate_fdb318e11753e5a8a32edca442f6e8632c52d540925730827ef4a09b1c7cbdd0 extends Twig_Template
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
        $__internal_abe29417ed1bf8c398e3e6dbdcdedc6603a42c74cd96c204c2a0cb80203136d7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_abe29417ed1bf8c398e3e6dbdcdedc6603a42c74cd96c204c2a0cb80203136d7->enter($__internal_abe29417ed1bf8c398e3e6dbdcdedc6603a42c74cd96c204c2a0cb80203136d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_attributes.html.php"));

        $__internal_5f0d6ac3e738daa75501039e3d9fcfeb0809a896d5a42b0b41c5cc413c25a976 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5f0d6ac3e738daa75501039e3d9fcfeb0809a896d5a42b0b41c5cc413c25a976->enter($__internal_5f0d6ac3e738daa75501039e3d9fcfeb0809a896d5a42b0b41c5cc413c25a976_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_attributes.html.php"));

        // line 1
        echo "<?php if (\$disabled): ?>disabled=\"disabled\" <?php endif ?>
<?php foreach (\$choice_attr as \$k => \$v): ?>
<?php if (\$v === true): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$k)) ?>
<?php elseif (\$v !== false): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$v)) ?>
<?php endif ?>
<?php endforeach ?>
";
        
        $__internal_abe29417ed1bf8c398e3e6dbdcdedc6603a42c74cd96c204c2a0cb80203136d7->leave($__internal_abe29417ed1bf8c398e3e6dbdcdedc6603a42c74cd96c204c2a0cb80203136d7_prof);

        
        $__internal_5f0d6ac3e738daa75501039e3d9fcfeb0809a896d5a42b0b41c5cc413c25a976->leave($__internal_5f0d6ac3e738daa75501039e3d9fcfeb0809a896d5a42b0b41c5cc413c25a976_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_attributes.html.php";
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
        return new Twig_Source("<?php if (\$disabled): ?>disabled=\"disabled\" <?php endif ?>
<?php foreach (\$choice_attr as \$k => \$v): ?>
<?php if (\$v === true): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$k)) ?>
<?php elseif (\$v !== false): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$v)) ?>
<?php endif ?>
<?php endforeach ?>
", "@Framework/Form/choice_attributes.html.php", "/var/www/html/vg-api/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/choice_attributes.html.php");
    }
}
