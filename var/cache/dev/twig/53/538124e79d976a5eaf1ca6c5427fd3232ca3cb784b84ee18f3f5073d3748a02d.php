<?php

/* @Framework/Form/hidden_widget.html.php */
class __TwigTemplate_ea50645850be2d3e65b2e22602867647400e22011253f8b688287d3b7791711b extends Twig_Template
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
        $__internal_35cec78a8b230e4f3a9f2a0decd3cb533fc7bb1c4c263755ba2411612ff030de = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_35cec78a8b230e4f3a9f2a0decd3cb533fc7bb1c4c263755ba2411612ff030de->enter($__internal_35cec78a8b230e4f3a9f2a0decd3cb533fc7bb1c4c263755ba2411612ff030de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        $__internal_a492ce3546435317abd4f6dbc01d61d4e30a3b8ec003d9597da02c8b59d0592a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a492ce3546435317abd4f6dbc01d61d4e30a3b8ec003d9597da02c8b59d0592a->enter($__internal_a492ce3546435317abd4f6dbc01d61d4e30a3b8ec003d9597da02c8b59d0592a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
";
        
        $__internal_35cec78a8b230e4f3a9f2a0decd3cb533fc7bb1c4c263755ba2411612ff030de->leave($__internal_35cec78a8b230e4f3a9f2a0decd3cb533fc7bb1c4c263755ba2411612ff030de_prof);

        
        $__internal_a492ce3546435317abd4f6dbc01d61d4e30a3b8ec003d9597da02c8b59d0592a->leave($__internal_a492ce3546435317abd4f6dbc01d61d4e30a3b8ec003d9597da02c8b59d0592a_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
", "@Framework/Form/hidden_widget.html.php", "/var/www/html/vg-api/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/hidden_widget.html.php");
    }
}
