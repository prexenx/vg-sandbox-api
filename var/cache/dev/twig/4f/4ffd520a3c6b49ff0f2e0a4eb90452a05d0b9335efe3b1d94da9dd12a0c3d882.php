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
        $__internal_e0b66572afe0d5f77c46fb9ae82f4f18299626446e7747941de816ea72510326 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e0b66572afe0d5f77c46fb9ae82f4f18299626446e7747941de816ea72510326->enter($__internal_e0b66572afe0d5f77c46fb9ae82f4f18299626446e7747941de816ea72510326_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        $__internal_07ab40c09e2ea55dbc9fe5d47af7c076acb12335a2b83693ce5887379f6c358e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_07ab40c09e2ea55dbc9fe5d47af7c076acb12335a2b83693ce5887379f6c358e->enter($__internal_07ab40c09e2ea55dbc9fe5d47af7c076acb12335a2b83693ce5887379f6c358e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_e0b66572afe0d5f77c46fb9ae82f4f18299626446e7747941de816ea72510326->leave($__internal_e0b66572afe0d5f77c46fb9ae82f4f18299626446e7747941de816ea72510326_prof);

        
        $__internal_07ab40c09e2ea55dbc9fe5d47af7c076acb12335a2b83693ce5887379f6c358e->leave($__internal_07ab40c09e2ea55dbc9fe5d47af7c076acb12335a2b83693ce5887379f6c358e_prof);

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
