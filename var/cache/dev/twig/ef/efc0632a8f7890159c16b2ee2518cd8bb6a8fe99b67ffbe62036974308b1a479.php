<?php

/* @Framework/Form/form_label.html.php */
class __TwigTemplate_f4d503e16f4e486eed21045ad0ba6806230009f2905b6caceea0004d7690f480 extends Twig_Template
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
        $__internal_3427497e1d7ceec9419174cbb05a02d3542a0e2851ea91c3373a90a23c7f3c5e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3427497e1d7ceec9419174cbb05a02d3542a0e2851ea91c3373a90a23c7f3c5e->enter($__internal_3427497e1d7ceec9419174cbb05a02d3542a0e2851ea91c3373a90a23c7f3c5e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_label.html.php"));

        $__internal_b6cdbae22a6a2c59b6bbbff92b8d8473fb4b2adeb01e77a11e05e19ca4baa59a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b6cdbae22a6a2c59b6bbbff92b8d8473fb4b2adeb01e77a11e05e19ca4baa59a->enter($__internal_b6cdbae22a6a2c59b6bbbff92b8d8473fb4b2adeb01e77a11e05e19ca4baa59a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_label.html.php"));

        // line 1
        echo "<?php if (false !== \$label): ?>
<?php if (\$required) { \$label_attr['class'] = trim((isset(\$label_attr['class']) ? \$label_attr['class'] : '').' required'); } ?>
<?php if (!\$compound) { \$label_attr['for'] = \$id; } ?>
<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<label<?php if (\$label_attr) { echo ' '.\$view['form']->block(\$form, 'attributes', array('attr' => \$label_attr)); } ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></label>
<?php endif ?>
";
        
        $__internal_3427497e1d7ceec9419174cbb05a02d3542a0e2851ea91c3373a90a23c7f3c5e->leave($__internal_3427497e1d7ceec9419174cbb05a02d3542a0e2851ea91c3373a90a23c7f3c5e_prof);

        
        $__internal_b6cdbae22a6a2c59b6bbbff92b8d8473fb4b2adeb01e77a11e05e19ca4baa59a->leave($__internal_b6cdbae22a6a2c59b6bbbff92b8d8473fb4b2adeb01e77a11e05e19ca4baa59a_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_label.html.php";
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
        return new Twig_Source("<?php if (false !== \$label): ?>
<?php if (\$required) { \$label_attr['class'] = trim((isset(\$label_attr['class']) ? \$label_attr['class'] : '').' required'); } ?>
<?php if (!\$compound) { \$label_attr['for'] = \$id; } ?>
<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<label<?php if (\$label_attr) { echo ' '.\$view['form']->block(\$form, 'attributes', array('attr' => \$label_attr)); } ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></label>
<?php endif ?>
", "@Framework/Form/form_label.html.php", "/var/www/html/vg-api/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_label.html.php");
    }
}
