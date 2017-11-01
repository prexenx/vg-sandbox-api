<?php

/* @Framework/Form/form_rows.html.php */
class __TwigTemplate_55c0545347de4b707b3b8fafff7f36a3eb5744b739d4c17784603f098ef17d2b extends Twig_Template
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
        $__internal_cf83b9dde000b01452e5a69f87aac95ed5c9bad54fcef30fb57a18114ea81214 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cf83b9dde000b01452e5a69f87aac95ed5c9bad54fcef30fb57a18114ea81214->enter($__internal_cf83b9dde000b01452e5a69f87aac95ed5c9bad54fcef30fb57a18114ea81214_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        $__internal_8435ccfd240fba5ee1af7bc11bfd481cb2ae8660b736cabdbeebe71a2c0ad286 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8435ccfd240fba5ee1af7bc11bfd481cb2ae8660b736cabdbeebe71a2c0ad286->enter($__internal_8435ccfd240fba5ee1af7bc11bfd481cb2ae8660b736cabdbeebe71a2c0ad286_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_cf83b9dde000b01452e5a69f87aac95ed5c9bad54fcef30fb57a18114ea81214->leave($__internal_cf83b9dde000b01452e5a69f87aac95ed5c9bad54fcef30fb57a18114ea81214_prof);

        
        $__internal_8435ccfd240fba5ee1af7bc11bfd481cb2ae8660b736cabdbeebe71a2c0ad286->leave($__internal_8435ccfd240fba5ee1af7bc11bfd481cb2ae8660b736cabdbeebe71a2c0ad286_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rows.html.php";
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
        return new Twig_Source("<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
", "@Framework/Form/form_rows.html.php", "/var/www/html/vg-api/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_rows.html.php");
    }
}
