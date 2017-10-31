<?php

/* @Framework/Form/repeated_row.html.php */
class __TwigTemplate_2c2084755f5f2dd42118548121e8f890248bb31d9e6239d670baa9ece48ea6ba extends Twig_Template
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
        $__internal_d615cc44ddd51881fcc0806c725316b945d7d5f9626080b622fafd93478ab92d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d615cc44ddd51881fcc0806c725316b945d7d5f9626080b622fafd93478ab92d->enter($__internal_d615cc44ddd51881fcc0806c725316b945d7d5f9626080b622fafd93478ab92d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/repeated_row.html.php"));

        $__internal_d08754523bf3e4cfa7ed97a74fcc57c14ca86c8859a799e67b6eada720894bd1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d08754523bf3e4cfa7ed97a74fcc57c14ca86c8859a799e67b6eada720894bd1->enter($__internal_d08754523bf3e4cfa7ed97a74fcc57c14ca86c8859a799e67b6eada720894bd1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/repeated_row.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_rows') ?>
";
        
        $__internal_d615cc44ddd51881fcc0806c725316b945d7d5f9626080b622fafd93478ab92d->leave($__internal_d615cc44ddd51881fcc0806c725316b945d7d5f9626080b622fafd93478ab92d_prof);

        
        $__internal_d08754523bf3e4cfa7ed97a74fcc57c14ca86c8859a799e67b6eada720894bd1->leave($__internal_d08754523bf3e4cfa7ed97a74fcc57c14ca86c8859a799e67b6eada720894bd1_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/repeated_row.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_rows') ?>
", "@Framework/Form/repeated_row.html.php", "/var/www/html/vg-api/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/repeated_row.html.php");
    }
}
