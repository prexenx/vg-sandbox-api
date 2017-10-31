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
        $__internal_e07bc0b252dda68b623195c7ff089d058306a72ae695ab18ceca26eb94564d2a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e07bc0b252dda68b623195c7ff089d058306a72ae695ab18ceca26eb94564d2a->enter($__internal_e07bc0b252dda68b623195c7ff089d058306a72ae695ab18ceca26eb94564d2a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_attributes.html.php"));

        $__internal_40e0f69f09d9dc315c3066d35bc6368f07a2967d60c218b64f9fad33b9b9455d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_40e0f69f09d9dc315c3066d35bc6368f07a2967d60c218b64f9fad33b9b9455d->enter($__internal_40e0f69f09d9dc315c3066d35bc6368f07a2967d60c218b64f9fad33b9b9455d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_attributes.html.php"));

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
        
        $__internal_e07bc0b252dda68b623195c7ff089d058306a72ae695ab18ceca26eb94564d2a->leave($__internal_e07bc0b252dda68b623195c7ff089d058306a72ae695ab18ceca26eb94564d2a_prof);

        
        $__internal_40e0f69f09d9dc315c3066d35bc6368f07a2967d60c218b64f9fad33b9b9455d->leave($__internal_40e0f69f09d9dc315c3066d35bc6368f07a2967d60c218b64f9fad33b9b9455d_prof);

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
