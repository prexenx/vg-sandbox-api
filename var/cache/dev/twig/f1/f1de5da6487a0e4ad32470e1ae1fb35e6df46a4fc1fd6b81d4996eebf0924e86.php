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
        $__internal_8e1bee4e3f63251f669d83ce679df37a576ff65ccd7450f4171d54a095782111 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8e1bee4e3f63251f669d83ce679df37a576ff65ccd7450f4171d54a095782111->enter($__internal_8e1bee4e3f63251f669d83ce679df37a576ff65ccd7450f4171d54a095782111_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        $__internal_0d48074ff0ac68eb885907c64df110f1e958422f6af92b16389ff901b234e313 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0d48074ff0ac68eb885907c64df110f1e958422f6af92b16389ff901b234e313->enter($__internal_0d48074ff0ac68eb885907c64df110f1e958422f6af92b16389ff901b234e313_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        // line 1
        echo "<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
";
        
        $__internal_8e1bee4e3f63251f669d83ce679df37a576ff65ccd7450f4171d54a095782111->leave($__internal_8e1bee4e3f63251f669d83ce679df37a576ff65ccd7450f4171d54a095782111_prof);

        
        $__internal_0d48074ff0ac68eb885907c64df110f1e958422f6af92b16389ff901b234e313->leave($__internal_0d48074ff0ac68eb885907c64df110f1e958422f6af92b16389ff901b234e313_prof);

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
