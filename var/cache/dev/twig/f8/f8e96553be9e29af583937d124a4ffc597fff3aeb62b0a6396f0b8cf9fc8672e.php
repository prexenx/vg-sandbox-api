<?php

/* @Framework/Form/attributes.html.php */
class __TwigTemplate_4219b825e7d8afd7ef6a1ceb91ffdcc1ca0745e31a4920d350f15f0240b87cb1 extends Twig_Template
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
        $__internal_d10f0363a49d0c326f85ab15223dcb270edf278dee17770980852e108bd9ecd9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d10f0363a49d0c326f85ab15223dcb270edf278dee17770980852e108bd9ecd9->enter($__internal_d10f0363a49d0c326f85ab15223dcb270edf278dee17770980852e108bd9ecd9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/attributes.html.php"));

        $__internal_358d77fd2463ed51387e88c3bf7fcf0dd6e80d2ffc5e53d01dbe28f513aab5c1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_358d77fd2463ed51387e88c3bf7fcf0dd6e80d2ffc5e53d01dbe28f513aab5c1->enter($__internal_358d77fd2463ed51387e88c3bf7fcf0dd6e80d2ffc5e53d01dbe28f513aab5c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/attributes.html.php"));

        // line 1
        echo "<?php foreach (\$attr as \$k => \$v): ?>
<?php if ('placeholder' === \$k || 'title' === \$k): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$v, array(), \$translation_domain) : \$v)) ?>
<?php elseif (true === \$v): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$k)) ?>
<?php elseif (false !== \$v): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$v)) ?>
<?php endif ?>
<?php endforeach ?>
";
        
        $__internal_d10f0363a49d0c326f85ab15223dcb270edf278dee17770980852e108bd9ecd9->leave($__internal_d10f0363a49d0c326f85ab15223dcb270edf278dee17770980852e108bd9ecd9_prof);

        
        $__internal_358d77fd2463ed51387e88c3bf7fcf0dd6e80d2ffc5e53d01dbe28f513aab5c1->leave($__internal_358d77fd2463ed51387e88c3bf7fcf0dd6e80d2ffc5e53d01dbe28f513aab5c1_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/attributes.html.php";
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
        return new Twig_Source("<?php foreach (\$attr as \$k => \$v): ?>
<?php if ('placeholder' === \$k || 'title' === \$k): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$v, array(), \$translation_domain) : \$v)) ?>
<?php elseif (true === \$v): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$k)) ?>
<?php elseif (false !== \$v): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$v)) ?>
<?php endif ?>
<?php endforeach ?>
", "@Framework/Form/attributes.html.php", "/var/www/html/vg-api/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/attributes.html.php");
    }
}
