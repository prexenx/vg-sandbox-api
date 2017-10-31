<?php

/* @Framework/Form/money_widget.html.php */
class __TwigTemplate_23590107bdabbee7ba3bc6315ef49b74f605fb3ca142b6e3214cd963be60c40d extends Twig_Template
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
        $__internal_aa32f38180a16a144ecbdb8d04110505eae9531c7ef273740881d29159c964ab = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_aa32f38180a16a144ecbdb8d04110505eae9531c7ef273740881d29159c964ab->enter($__internal_aa32f38180a16a144ecbdb8d04110505eae9531c7ef273740881d29159c964ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        $__internal_ed630385a10c4ad345a7b29388bef05f6d1a922e306b50127c943c0b4506e8f3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ed630385a10c4ad345a7b29388bef05f6d1a922e306b50127c943c0b4506e8f3->enter($__internal_ed630385a10c4ad345a7b29388bef05f6d1a922e306b50127c943c0b4506e8f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        // line 1
        echo "<?php echo str_replace('";
        echo twig_escape_filter($this->env, (isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget")), "html", null, true);
        echo "', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
";
        
        $__internal_aa32f38180a16a144ecbdb8d04110505eae9531c7ef273740881d29159c964ab->leave($__internal_aa32f38180a16a144ecbdb8d04110505eae9531c7ef273740881d29159c964ab_prof);

        
        $__internal_ed630385a10c4ad345a7b29388bef05f6d1a922e306b50127c943c0b4506e8f3->leave($__internal_ed630385a10c4ad345a7b29388bef05f6d1a922e306b50127c943c0b4506e8f3_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/money_widget.html.php";
    }

    public function isTraitable()
    {
        return false;
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
        return new Twig_Source("<?php echo str_replace('{{ widget }}', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
", "@Framework/Form/money_widget.html.php", "/var/www/html/vg-api/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/money_widget.html.php");
    }
}
