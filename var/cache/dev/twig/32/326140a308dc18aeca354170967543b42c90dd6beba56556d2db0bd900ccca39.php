<?php

/* @Framework/Form/form_rest.html.php */
class __TwigTemplate_8a3f0989ba06f098af01f877d490765993dcc2b84af8c137603292024f972310 extends Twig_Template
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
        $__internal_f68cf19e127842c3a992abbdb0f0b03812c25667d019cfb43fb9a8832395c47c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f68cf19e127842c3a992abbdb0f0b03812c25667d019cfb43fb9a8832395c47c->enter($__internal_f68cf19e127842c3a992abbdb0f0b03812c25667d019cfb43fb9a8832395c47c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        $__internal_6a9a4af60fa81c41cbdbce71d9a34f8e28ffd4bbc3913105c564fb7a0fa9bc92 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6a9a4af60fa81c41cbdbce71d9a34f8e28ffd4bbc3913105c564fb7a0fa9bc92->enter($__internal_6a9a4af60fa81c41cbdbce71d9a34f8e28ffd4bbc3913105c564fb7a0fa9bc92_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
        
        $__internal_f68cf19e127842c3a992abbdb0f0b03812c25667d019cfb43fb9a8832395c47c->leave($__internal_f68cf19e127842c3a992abbdb0f0b03812c25667d019cfb43fb9a8832395c47c_prof);

        
        $__internal_6a9a4af60fa81c41cbdbce71d9a34f8e28ffd4bbc3913105c564fb7a0fa9bc92->leave($__internal_6a9a4af60fa81c41cbdbce71d9a34f8e28ffd4bbc3913105c564fb7a0fa9bc92_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rest.html.php";
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
        return new Twig_Source("<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
", "@Framework/Form/form_rest.html.php", "/var/www/html/vg-api/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_rest.html.php");
    }
}
