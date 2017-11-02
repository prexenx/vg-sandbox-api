<?php

/* @Framework/Form/range_widget.html.php */
class __TwigTemplate_60a8243ba5df0a2afc62cd72fda73faca628528360437165e8037aefdeedd74c extends Twig_Template
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
        $__internal_d865c4a81f8a5c464e7910de5e648209daaae43164f88c862675500a6ac0e025 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d865c4a81f8a5c464e7910de5e648209daaae43164f88c862675500a6ac0e025->enter($__internal_d865c4a81f8a5c464e7910de5e648209daaae43164f88c862675500a6ac0e025_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/range_widget.html.php"));

        $__internal_aef3a6ba42239455e8e41865447822c48e53db72e73351053cd7d1c6ea044da6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aef3a6ba42239455e8e41865447822c48e53db72e73351053cd7d1c6ea044da6->enter($__internal_aef3a6ba42239455e8e41865447822c48e53db72e73351053cd7d1c6ea044da6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/range_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'range'));
";
        
        $__internal_d865c4a81f8a5c464e7910de5e648209daaae43164f88c862675500a6ac0e025->leave($__internal_d865c4a81f8a5c464e7910de5e648209daaae43164f88c862675500a6ac0e025_prof);

        
        $__internal_aef3a6ba42239455e8e41865447822c48e53db72e73351053cd7d1c6ea044da6->leave($__internal_aef3a6ba42239455e8e41865447822c48e53db72e73351053cd7d1c6ea044da6_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/range_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'range'));
", "@Framework/Form/range_widget.html.php", "/var/www/html/vg-api/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/range_widget.html.php");
    }
}
