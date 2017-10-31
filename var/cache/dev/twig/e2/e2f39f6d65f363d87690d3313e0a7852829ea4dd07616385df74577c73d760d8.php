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
        $__internal_4fa4d886b3f996a014444ee0ee63049d93e68261b8be8b2c44b5b502df4e8a79 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4fa4d886b3f996a014444ee0ee63049d93e68261b8be8b2c44b5b502df4e8a79->enter($__internal_4fa4d886b3f996a014444ee0ee63049d93e68261b8be8b2c44b5b502df4e8a79_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        $__internal_7b1cb10cc86b85d843073f6d34c8be980415e0bee6174e54f2e90d220c22db38 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7b1cb10cc86b85d843073f6d34c8be980415e0bee6174e54f2e90d220c22db38->enter($__internal_7b1cb10cc86b85d843073f6d34c8be980415e0bee6174e54f2e90d220c22db38_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_4fa4d886b3f996a014444ee0ee63049d93e68261b8be8b2c44b5b502df4e8a79->leave($__internal_4fa4d886b3f996a014444ee0ee63049d93e68261b8be8b2c44b5b502df4e8a79_prof);

        
        $__internal_7b1cb10cc86b85d843073f6d34c8be980415e0bee6174e54f2e90d220c22db38->leave($__internal_7b1cb10cc86b85d843073f6d34c8be980415e0bee6174e54f2e90d220c22db38_prof);

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
