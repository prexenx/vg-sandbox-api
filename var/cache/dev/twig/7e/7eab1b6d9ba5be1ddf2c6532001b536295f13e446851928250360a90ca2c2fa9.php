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
        $__internal_2cfcf0a5d2077106b9365e38b4f4b90d71d0ab096136b2092d4edf5543206997 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2cfcf0a5d2077106b9365e38b4f4b90d71d0ab096136b2092d4edf5543206997->enter($__internal_2cfcf0a5d2077106b9365e38b4f4b90d71d0ab096136b2092d4edf5543206997_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/range_widget.html.php"));

        $__internal_e035b545591f4317ef898a86c0f605a8878109e72b6a188edcc0cbb1f114e7f9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e035b545591f4317ef898a86c0f605a8878109e72b6a188edcc0cbb1f114e7f9->enter($__internal_e035b545591f4317ef898a86c0f605a8878109e72b6a188edcc0cbb1f114e7f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/range_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'range'));
";
        
        $__internal_2cfcf0a5d2077106b9365e38b4f4b90d71d0ab096136b2092d4edf5543206997->leave($__internal_2cfcf0a5d2077106b9365e38b4f4b90d71d0ab096136b2092d4edf5543206997_prof);

        
        $__internal_e035b545591f4317ef898a86c0f605a8878109e72b6a188edcc0cbb1f114e7f9->leave($__internal_e035b545591f4317ef898a86c0f605a8878109e72b6a188edcc0cbb1f114e7f9_prof);

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
