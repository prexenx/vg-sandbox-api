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
        $__internal_ea9b3852334809bab1d7171d563a2a2164a3f99cde796151e99843f204394958 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ea9b3852334809bab1d7171d563a2a2164a3f99cde796151e99843f204394958->enter($__internal_ea9b3852334809bab1d7171d563a2a2164a3f99cde796151e99843f204394958_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        $__internal_b4e5d8373b81ac0b216e7a00ffa2c5361757dec6460ddf04a66ef1731af2175a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b4e5d8373b81ac0b216e7a00ffa2c5361757dec6460ddf04a66ef1731af2175a->enter($__internal_b4e5d8373b81ac0b216e7a00ffa2c5361757dec6460ddf04a66ef1731af2175a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
";
        
        $__internal_ea9b3852334809bab1d7171d563a2a2164a3f99cde796151e99843f204394958->leave($__internal_ea9b3852334809bab1d7171d563a2a2164a3f99cde796151e99843f204394958_prof);

        
        $__internal_b4e5d8373b81ac0b216e7a00ffa2c5361757dec6460ddf04a66ef1731af2175a->leave($__internal_b4e5d8373b81ac0b216e7a00ffa2c5361757dec6460ddf04a66ef1731af2175a_prof);

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
