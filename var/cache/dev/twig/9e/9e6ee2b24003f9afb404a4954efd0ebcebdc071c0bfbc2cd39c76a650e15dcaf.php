<?php

/* @Framework/Form/search_widget.html.php */
class __TwigTemplate_26ac9cb2285450468c679e9903ca162b3bdda681c7a1c7ee0ad053ff5e88a823 extends Twig_Template
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
        $__internal_98b7d3e128a284f8ea1e25c6d7c4e3f7ae80b1b9831f93e5347403aebc9259ac = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_98b7d3e128a284f8ea1e25c6d7c4e3f7ae80b1b9831f93e5347403aebc9259ac->enter($__internal_98b7d3e128a284f8ea1e25c6d7c4e3f7ae80b1b9831f93e5347403aebc9259ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        $__internal_6ce12a6c6ad5f552ce5df2522151b8c17faacbb20fcf5183ed9148ab8df3854e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6ce12a6c6ad5f552ce5df2522151b8c17faacbb20fcf5183ed9148ab8df3854e->enter($__internal_6ce12a6c6ad5f552ce5df2522151b8c17faacbb20fcf5183ed9148ab8df3854e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
";
        
        $__internal_98b7d3e128a284f8ea1e25c6d7c4e3f7ae80b1b9831f93e5347403aebc9259ac->leave($__internal_98b7d3e128a284f8ea1e25c6d7c4e3f7ae80b1b9831f93e5347403aebc9259ac_prof);

        
        $__internal_6ce12a6c6ad5f552ce5df2522151b8c17faacbb20fcf5183ed9148ab8df3854e->leave($__internal_6ce12a6c6ad5f552ce5df2522151b8c17faacbb20fcf5183ed9148ab8df3854e_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/search_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
", "@Framework/Form/search_widget.html.php", "/var/www/html/vg-api/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/search_widget.html.php");
    }
}
