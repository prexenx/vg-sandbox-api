<?php

/* @Framework/FormTable/button_row.html.php */
class __TwigTemplate_6c7a7c62399ac5ced96e0f5d371ff168731df67ad61203e1a84b10b1fc86d141 extends Twig_Template
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
        $__internal_9d0162a117a960fa91fa130f9510396123a214cbd41061a29c5308af1afb177f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9d0162a117a960fa91fa130f9510396123a214cbd41061a29c5308af1afb177f->enter($__internal_9d0162a117a960fa91fa130f9510396123a214cbd41061a29c5308af1afb177f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        $__internal_bf888bf9c25ea636495d25749f45bbf573183bb392e6e19147e50eb753babbb6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bf888bf9c25ea636495d25749f45bbf573183bb392e6e19147e50eb753babbb6->enter($__internal_bf888bf9c25ea636495d25749f45bbf573183bb392e6e19147e50eb753babbb6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        // line 1
        echo "<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form); ?>
    </td>
</tr>
";
        
        $__internal_9d0162a117a960fa91fa130f9510396123a214cbd41061a29c5308af1afb177f->leave($__internal_9d0162a117a960fa91fa130f9510396123a214cbd41061a29c5308af1afb177f_prof);

        
        $__internal_bf888bf9c25ea636495d25749f45bbf573183bb392e6e19147e50eb753babbb6->leave($__internal_bf888bf9c25ea636495d25749f45bbf573183bb392e6e19147e50eb753babbb6_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/button_row.html.php";
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
        return new Twig_Source("<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form); ?>
    </td>
</tr>
", "@Framework/FormTable/button_row.html.php", "/var/www/html/vg-api/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/button_row.html.php");
    }
}
