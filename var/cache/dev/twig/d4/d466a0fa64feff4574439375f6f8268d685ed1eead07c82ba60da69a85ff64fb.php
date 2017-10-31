<?php

/* @Framework/Form/form_row.html.php */
class __TwigTemplate_b632ec1ad4aa4e1b3827332303259c76e58847b8b35f06122460eec0dd34a7e2 extends Twig_Template
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
        $__internal_35face85c1d5054f9d83ca86a4e3dabe170016e67663e11b5562286af6efcedd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_35face85c1d5054f9d83ca86a4e3dabe170016e67663e11b5562286af6efcedd->enter($__internal_35face85c1d5054f9d83ca86a4e3dabe170016e67663e11b5562286af6efcedd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        $__internal_5880a6ec0b9d8c0bf69d86ee1d63572f4fd2fe2cabdb2158973c5fc34418dc5a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5880a6ec0b9d8c0bf69d86ee1d63572f4fd2fe2cabdb2158973c5fc34418dc5a->enter($__internal_5880a6ec0b9d8c0bf69d86ee1d63572f4fd2fe2cabdb2158973c5fc34418dc5a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_35face85c1d5054f9d83ca86a4e3dabe170016e67663e11b5562286af6efcedd->leave($__internal_35face85c1d5054f9d83ca86a4e3dabe170016e67663e11b5562286af6efcedd_prof);

        
        $__internal_5880a6ec0b9d8c0bf69d86ee1d63572f4fd2fe2cabdb2158973c5fc34418dc5a->leave($__internal_5880a6ec0b9d8c0bf69d86ee1d63572f4fd2fe2cabdb2158973c5fc34418dc5a_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_row.html.php";
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
        return new Twig_Source("<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
", "@Framework/Form/form_row.html.php", "/var/www/html/vg-api/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_row.html.php");
    }
}
