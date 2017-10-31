<?php

/* @Framework/Form/form.html.php */
class __TwigTemplate_0f0a4f53f66d2dea034ef3c8603781b8affdf27a1f575775b0fa562a2f1b5045 extends Twig_Template
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
        $__internal_921fdb5d8f89674bd77ac68536cb30a2c419d8f650a35e9a3eb9b10c263c40e8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_921fdb5d8f89674bd77ac68536cb30a2c419d8f650a35e9a3eb9b10c263c40e8->enter($__internal_921fdb5d8f89674bd77ac68536cb30a2c419d8f650a35e9a3eb9b10c263c40e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        $__internal_56fa59776e0ab3cefd96038ae8947afae87b400efd813681e33665ad6d4171d8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_56fa59776e0ab3cefd96038ae8947afae87b400efd813681e33665ad6d4171d8->enter($__internal_56fa59776e0ab3cefd96038ae8947afae87b400efd813681e33665ad6d4171d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        // line 1
        echo "<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
";
        
        $__internal_921fdb5d8f89674bd77ac68536cb30a2c419d8f650a35e9a3eb9b10c263c40e8->leave($__internal_921fdb5d8f89674bd77ac68536cb30a2c419d8f650a35e9a3eb9b10c263c40e8_prof);

        
        $__internal_56fa59776e0ab3cefd96038ae8947afae87b400efd813681e33665ad6d4171d8->leave($__internal_56fa59776e0ab3cefd96038ae8947afae87b400efd813681e33665ad6d4171d8_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
", "@Framework/Form/form.html.php", "/var/www/html/vg-api/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form.html.php");
    }
}
