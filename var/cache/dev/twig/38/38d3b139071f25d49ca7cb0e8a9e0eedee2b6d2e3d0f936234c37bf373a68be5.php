<?php

/* @Framework/FormTable/form_row.html.php */
class __TwigTemplate_4bdb5873e6399783a6d42460a67a15324ade4e3534a91bc36f1ae0aac9faaa3c extends Twig_Template
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
        $__internal_091846f69c894e7086b7931e6628ad4fd55fff4d8bd2e07a1a4cbde44d8e1c98 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_091846f69c894e7086b7931e6628ad4fd55fff4d8bd2e07a1a4cbde44d8e1c98->enter($__internal_091846f69c894e7086b7931e6628ad4fd55fff4d8bd2e07a1a4cbde44d8e1c98_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        $__internal_54c845ef736f4a7b22122310fb501b653e00c3de16c533a2d087fd90c5505c3a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_54c845ef736f4a7b22122310fb501b653e00c3de16c533a2d087fd90c5505c3a->enter($__internal_54c845ef736f4a7b22122310fb501b653e00c3de16c533a2d087fd90c5505c3a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        // line 1
        echo "<tr>
    <td>
        <?php echo \$view['form']->label(\$form); ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form); ?>
        <?php echo \$view['form']->widget(\$form); ?>
    </td>
</tr>
";
        
        $__internal_091846f69c894e7086b7931e6628ad4fd55fff4d8bd2e07a1a4cbde44d8e1c98->leave($__internal_091846f69c894e7086b7931e6628ad4fd55fff4d8bd2e07a1a4cbde44d8e1c98_prof);

        
        $__internal_54c845ef736f4a7b22122310fb501b653e00c3de16c533a2d087fd90c5505c3a->leave($__internal_54c845ef736f4a7b22122310fb501b653e00c3de16c533a2d087fd90c5505c3a_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_row.html.php";
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
    <td>
        <?php echo \$view['form']->label(\$form); ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form); ?>
        <?php echo \$view['form']->widget(\$form); ?>
    </td>
</tr>
", "@Framework/FormTable/form_row.html.php", "/var/www/html/vg-api/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/form_row.html.php");
    }
}
