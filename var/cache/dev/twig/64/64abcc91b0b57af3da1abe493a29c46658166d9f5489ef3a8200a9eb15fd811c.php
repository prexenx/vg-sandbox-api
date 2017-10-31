<?php

/* @Framework/Form/reset_widget.html.php */
class __TwigTemplate_b11a7e338446301ba47d959bb7e84bfbb03bcdf508ac525c4b10773bc0322188 extends Twig_Template
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
        $__internal_75547fb984bc044c30892b98dcd18fbdb6d82d4294d34888f2f6f04ac525cacf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_75547fb984bc044c30892b98dcd18fbdb6d82d4294d34888f2f6f04ac525cacf->enter($__internal_75547fb984bc044c30892b98dcd18fbdb6d82d4294d34888f2f6f04ac525cacf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        $__internal_9c5ffd6c6549f826445795da8710963350128ebc49b677fb02c31b63b76349f3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9c5ffd6c6549f826445795da8710963350128ebc49b677fb02c31b63b76349f3->enter($__internal_9c5ffd6c6549f826445795da8710963350128ebc49b677fb02c31b63b76349f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
";
        
        $__internal_75547fb984bc044c30892b98dcd18fbdb6d82d4294d34888f2f6f04ac525cacf->leave($__internal_75547fb984bc044c30892b98dcd18fbdb6d82d4294d34888f2f6f04ac525cacf_prof);

        
        $__internal_9c5ffd6c6549f826445795da8710963350128ebc49b677fb02c31b63b76349f3->leave($__internal_9c5ffd6c6549f826445795da8710963350128ebc49b677fb02c31b63b76349f3_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/reset_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
", "@Framework/Form/reset_widget.html.php", "/var/www/html/vg-api/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/reset_widget.html.php");
    }
}
