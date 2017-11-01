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
        $__internal_fd8da65a3ad5142845543843bacdcb1e0516863a70ad729a974c87c65d1bb8b4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fd8da65a3ad5142845543843bacdcb1e0516863a70ad729a974c87c65d1bb8b4->enter($__internal_fd8da65a3ad5142845543843bacdcb1e0516863a70ad729a974c87c65d1bb8b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_attributes.html.php"));

        $__internal_22d20f2ff046ddea6ddef12147f6345dacaf6898a140c4c0a18ce2fea12566b6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_22d20f2ff046ddea6ddef12147f6345dacaf6898a140c4c0a18ce2fea12566b6->enter($__internal_22d20f2ff046ddea6ddef12147f6345dacaf6898a140c4c0a18ce2fea12566b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_attributes.html.php"));

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
        
        $__internal_fd8da65a3ad5142845543843bacdcb1e0516863a70ad729a974c87c65d1bb8b4->leave($__internal_fd8da65a3ad5142845543843bacdcb1e0516863a70ad729a974c87c65d1bb8b4_prof);

        
        $__internal_22d20f2ff046ddea6ddef12147f6345dacaf6898a140c4c0a18ce2fea12566b6->leave($__internal_22d20f2ff046ddea6ddef12147f6345dacaf6898a140c4c0a18ce2fea12566b6_prof);

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
