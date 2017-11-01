<?php

/* @Framework/Form/button_row.html.php */
class __TwigTemplate_24c4e726ac72505d9c2f0b4824eae99525e0fd81f9207eba39c6d2770c9f9655 extends Twig_Template
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
        $__internal_d4f1c532f2f9af2e44458bc8d401618f49f27f8dce496d3c36d42e25367f1156 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d4f1c532f2f9af2e44458bc8d401618f49f27f8dce496d3c36d42e25367f1156->enter($__internal_d4f1c532f2f9af2e44458bc8d401618f49f27f8dce496d3c36d42e25367f1156_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        $__internal_85a166611882f22dd30fbe0990b72fa8fa0fca96c8fb663eac5aa0b669130a60 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_85a166611882f22dd30fbe0990b72fa8fa0fca96c8fb663eac5aa0b669130a60->enter($__internal_85a166611882f22dd30fbe0990b72fa8fa0fca96c8fb663eac5aa0b669130a60_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_d4f1c532f2f9af2e44458bc8d401618f49f27f8dce496d3c36d42e25367f1156->leave($__internal_d4f1c532f2f9af2e44458bc8d401618f49f27f8dce496d3c36d42e25367f1156_prof);

        
        $__internal_85a166611882f22dd30fbe0990b72fa8fa0fca96c8fb663eac5aa0b669130a60->leave($__internal_85a166611882f22dd30fbe0990b72fa8fa0fca96c8fb663eac5aa0b669130a60_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_row.html.php";
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
    <?php echo \$view['form']->widget(\$form) ?>
</div>
", "@Framework/Form/button_row.html.php", "/var/www/html/vg-api/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/button_row.html.php");
    }
}
