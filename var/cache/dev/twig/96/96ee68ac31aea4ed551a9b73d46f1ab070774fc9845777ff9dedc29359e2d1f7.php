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
        $__internal_60d3dd20bd904fd22409d7cf0a2fbffdb2e4c112fd12e5215cf98559ebebb97a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_60d3dd20bd904fd22409d7cf0a2fbffdb2e4c112fd12e5215cf98559ebebb97a->enter($__internal_60d3dd20bd904fd22409d7cf0a2fbffdb2e4c112fd12e5215cf98559ebebb97a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        $__internal_1cbea5ddf3cc87bf1d9e0a183b5806eebffe9b05f5b77344f1f92cf76ace7d8d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1cbea5ddf3cc87bf1d9e0a183b5806eebffe9b05f5b77344f1f92cf76ace7d8d->enter($__internal_1cbea5ddf3cc87bf1d9e0a183b5806eebffe9b05f5b77344f1f92cf76ace7d8d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        // line 1
        echo "<?php echo str_replace('";
        echo twig_escape_filter($this->env, (isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget")), "html", null, true);
        echo "', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
";
        
        $__internal_60d3dd20bd904fd22409d7cf0a2fbffdb2e4c112fd12e5215cf98559ebebb97a->leave($__internal_60d3dd20bd904fd22409d7cf0a2fbffdb2e4c112fd12e5215cf98559ebebb97a_prof);

        
        $__internal_1cbea5ddf3cc87bf1d9e0a183b5806eebffe9b05f5b77344f1f92cf76ace7d8d->leave($__internal_1cbea5ddf3cc87bf1d9e0a183b5806eebffe9b05f5b77344f1f92cf76ace7d8d_prof);

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
