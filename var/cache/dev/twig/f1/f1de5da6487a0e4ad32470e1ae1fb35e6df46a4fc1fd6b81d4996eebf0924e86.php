<?php

/* @Framework/Form/form_enctype.html.php */
class __TwigTemplate_c138e78fedd041f2dd0585472e0fc1c9f1afd481848fdd7079214723c70b35f4 extends Twig_Template
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
        $__internal_a84a97350d14af1a98c3690d74bec7d70e79b516995b49a103044ced630c8b9b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a84a97350d14af1a98c3690d74bec7d70e79b516995b49a103044ced630c8b9b->enter($__internal_a84a97350d14af1a98c3690d74bec7d70e79b516995b49a103044ced630c8b9b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        $__internal_6301e81473950cde07ad1fcc252d813b1a61b9a852313f30686921a3e046ffa3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6301e81473950cde07ad1fcc252d813b1a61b9a852313f30686921a3e046ffa3->enter($__internal_6301e81473950cde07ad1fcc252d813b1a61b9a852313f30686921a3e046ffa3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        // line 1
        echo "<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
";
        
        $__internal_a84a97350d14af1a98c3690d74bec7d70e79b516995b49a103044ced630c8b9b->leave($__internal_a84a97350d14af1a98c3690d74bec7d70e79b516995b49a103044ced630c8b9b_prof);

        
        $__internal_6301e81473950cde07ad1fcc252d813b1a61b9a852313f30686921a3e046ffa3->leave($__internal_6301e81473950cde07ad1fcc252d813b1a61b9a852313f30686921a3e046ffa3_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_enctype.html.php";
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
        return new Twig_Source("<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
", "@Framework/Form/form_enctype.html.php", "/var/www/html/vg-api/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_enctype.html.php");
    }
}
