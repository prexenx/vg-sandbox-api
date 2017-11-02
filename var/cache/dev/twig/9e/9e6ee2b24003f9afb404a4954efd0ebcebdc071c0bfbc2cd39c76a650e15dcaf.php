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
        $__internal_321cfcf0fabd53543dcff0dc57bca1f885963b30f7450676a2b61149bac277bd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_321cfcf0fabd53543dcff0dc57bca1f885963b30f7450676a2b61149bac277bd->enter($__internal_321cfcf0fabd53543dcff0dc57bca1f885963b30f7450676a2b61149bac277bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        $__internal_7580462f2b3350d45cf17b3df3aa85a129039520b7487d26aa29a58587c8e007 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7580462f2b3350d45cf17b3df3aa85a129039520b7487d26aa29a58587c8e007->enter($__internal_7580462f2b3350d45cf17b3df3aa85a129039520b7487d26aa29a58587c8e007_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
";
        
        $__internal_321cfcf0fabd53543dcff0dc57bca1f885963b30f7450676a2b61149bac277bd->leave($__internal_321cfcf0fabd53543dcff0dc57bca1f885963b30f7450676a2b61149bac277bd_prof);

        
        $__internal_7580462f2b3350d45cf17b3df3aa85a129039520b7487d26aa29a58587c8e007->leave($__internal_7580462f2b3350d45cf17b3df3aa85a129039520b7487d26aa29a58587c8e007_prof);

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
