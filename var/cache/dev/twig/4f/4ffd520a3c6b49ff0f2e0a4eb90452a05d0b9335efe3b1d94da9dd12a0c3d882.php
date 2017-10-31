<?php

/* @Framework/Form/form_end.html.php */
class __TwigTemplate_8692cf7b359b4b6135ca3e0825f657cec5fed3f5f1dbeb75f72df5d9f0c08acb extends Twig_Template
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
        $__internal_f255e01ee51c7f02bece02fa9c4d4f3ed812a2d581abac9b8b22b29a449942af = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f255e01ee51c7f02bece02fa9c4d4f3ed812a2d581abac9b8b22b29a449942af->enter($__internal_f255e01ee51c7f02bece02fa9c4d4f3ed812a2d581abac9b8b22b29a449942af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        $__internal_7010259ac369a6b28b4e3b6be98e612810c2d44e9704ff1ae98bd32844e805c9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7010259ac369a6b28b4e3b6be98e612810c2d44e9704ff1ae98bd32844e805c9->enter($__internal_7010259ac369a6b28b4e3b6be98e612810c2d44e9704ff1ae98bd32844e805c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_f255e01ee51c7f02bece02fa9c4d4f3ed812a2d581abac9b8b22b29a449942af->leave($__internal_f255e01ee51c7f02bece02fa9c4d4f3ed812a2d581abac9b8b22b29a449942af_prof);

        
        $__internal_7010259ac369a6b28b4e3b6be98e612810c2d44e9704ff1ae98bd32844e805c9->leave($__internal_7010259ac369a6b28b4e3b6be98e612810c2d44e9704ff1ae98bd32844e805c9_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_end.html.php";
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
        return new Twig_Source("<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
", "@Framework/Form/form_end.html.php", "/var/www/html/vg-api/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_end.html.php");
    }
}
