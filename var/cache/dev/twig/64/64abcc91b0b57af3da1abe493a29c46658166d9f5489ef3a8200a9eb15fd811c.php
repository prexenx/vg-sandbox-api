<?php

/* @Framework/Form/reset_widget.html.php */
class __TwigTemplate_b11a7e338446301ba47d959bb7e84bfbb03bcdf508ac525c4b10773bc0322188 extends Twig_Template
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
        $__internal_087d76eb8acdd153479c62b12d2787601a5f9e0d7e2295fb72831a254d8b02e1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_087d76eb8acdd153479c62b12d2787601a5f9e0d7e2295fb72831a254d8b02e1->enter($__internal_087d76eb8acdd153479c62b12d2787601a5f9e0d7e2295fb72831a254d8b02e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        $__internal_fde5fb490f66af0b370e045a58d235020a541198fd176f4e41b458526608940f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fde5fb490f66af0b370e045a58d235020a541198fd176f4e41b458526608940f->enter($__internal_fde5fb490f66af0b370e045a58d235020a541198fd176f4e41b458526608940f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
";
        
        $__internal_087d76eb8acdd153479c62b12d2787601a5f9e0d7e2295fb72831a254d8b02e1->leave($__internal_087d76eb8acdd153479c62b12d2787601a5f9e0d7e2295fb72831a254d8b02e1_prof);

        
        $__internal_fde5fb490f66af0b370e045a58d235020a541198fd176f4e41b458526608940f->leave($__internal_fde5fb490f66af0b370e045a58d235020a541198fd176f4e41b458526608940f_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/reset_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
", "@Framework/Form/reset_widget.html.php", "/var/www/html/vg-api/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/reset_widget.html.php");
    }
}
