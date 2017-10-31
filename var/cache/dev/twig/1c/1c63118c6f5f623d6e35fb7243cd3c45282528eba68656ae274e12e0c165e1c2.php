<?php

/* @Framework/Form/collection_widget.html.php */
class __TwigTemplate_f325b1f096b0df6de0c34c5225aae844be899332f8a4faf098feb5a173f21806 extends Twig_Template
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
        $__internal_c61157fa134b10dea461932006f9596d6e21a8467319a7b4a9cac704bc38c293 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c61157fa134b10dea461932006f9596d6e21a8467319a7b4a9cac704bc38c293->enter($__internal_c61157fa134b10dea461932006f9596d6e21a8467319a7b4a9cac704bc38c293_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        $__internal_bbeb4ed567b4bcf5e5677ccb07bd75e7a45c53d75f743baf650f4b3ebd919150 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bbeb4ed567b4bcf5e5677ccb07bd75e7a45c53d75f743baf650f4b3ebd919150->enter($__internal_bbeb4ed567b4bcf5e5677ccb07bd75e7a45c53d75f743baf650f4b3ebd919150_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        // line 1
        echo "<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
";
        
        $__internal_c61157fa134b10dea461932006f9596d6e21a8467319a7b4a9cac704bc38c293->leave($__internal_c61157fa134b10dea461932006f9596d6e21a8467319a7b4a9cac704bc38c293_prof);

        
        $__internal_bbeb4ed567b4bcf5e5677ccb07bd75e7a45c53d75f743baf650f4b3ebd919150->leave($__internal_bbeb4ed567b4bcf5e5677ccb07bd75e7a45c53d75f743baf650f4b3ebd919150_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/collection_widget.html.php";
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
        return new Twig_Source("<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
", "@Framework/Form/collection_widget.html.php", "/var/www/html/vg-api/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/collection_widget.html.php");
    }
}
