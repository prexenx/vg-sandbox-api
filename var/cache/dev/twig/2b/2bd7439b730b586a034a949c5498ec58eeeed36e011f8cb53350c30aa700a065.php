<?php

/* @Framework/Form/checkbox_widget.html.php */
class __TwigTemplate_b066ce030df96f2c119d78bac4eeabc36e113166075812a0c2113488c3c8ef68 extends Twig_Template
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
        $__internal_7fbcafcdc79ca4b641d4936823023bf10bfc7efb8d33afcd434f4cf1ef72c3ca = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7fbcafcdc79ca4b641d4936823023bf10bfc7efb8d33afcd434f4cf1ef72c3ca->enter($__internal_7fbcafcdc79ca4b641d4936823023bf10bfc7efb8d33afcd434f4cf1ef72c3ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        $__internal_44f5c1a45b22f1c5ea162b3fb9888b081addb3b3c152da7241a85402df0aec9c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_44f5c1a45b22f1c5ea162b3fb9888b081addb3b3c152da7241a85402df0aec9c->enter($__internal_44f5c1a45b22f1c5ea162b3fb9888b081addb3b3c152da7241a85402df0aec9c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        // line 1
        echo "<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_7fbcafcdc79ca4b641d4936823023bf10bfc7efb8d33afcd434f4cf1ef72c3ca->leave($__internal_7fbcafcdc79ca4b641d4936823023bf10bfc7efb8d33afcd434f4cf1ef72c3ca_prof);

        
        $__internal_44f5c1a45b22f1c5ea162b3fb9888b081addb3b3c152da7241a85402df0aec9c->leave($__internal_44f5c1a45b22f1c5ea162b3fb9888b081addb3b3c152da7241a85402df0aec9c_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/checkbox_widget.html.php";
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
        return new Twig_Source("<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
", "@Framework/Form/checkbox_widget.html.php", "/var/www/html/vg-api/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/checkbox_widget.html.php");
    }
}
