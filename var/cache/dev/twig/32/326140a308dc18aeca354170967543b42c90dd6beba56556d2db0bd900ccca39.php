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
        $__internal_140aac35bb8bdc0e4c700f24d65d985de5a4da9691d21ba6bd782895c407217e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_140aac35bb8bdc0e4c700f24d65d985de5a4da9691d21ba6bd782895c407217e->enter($__internal_140aac35bb8bdc0e4c700f24d65d985de5a4da9691d21ba6bd782895c407217e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        $__internal_6ee4c15bf25343b478eeebc7e28e66287f6b59c12cf4d24bd130ef2622b47618 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6ee4c15bf25343b478eeebc7e28e66287f6b59c12cf4d24bd130ef2622b47618->enter($__internal_6ee4c15bf25343b478eeebc7e28e66287f6b59c12cf4d24bd130ef2622b47618_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
        
        $__internal_140aac35bb8bdc0e4c700f24d65d985de5a4da9691d21ba6bd782895c407217e->leave($__internal_140aac35bb8bdc0e4c700f24d65d985de5a4da9691d21ba6bd782895c407217e_prof);

        
        $__internal_6ee4c15bf25343b478eeebc7e28e66287f6b59c12cf4d24bd130ef2622b47618->leave($__internal_6ee4c15bf25343b478eeebc7e28e66287f6b59c12cf4d24bd130ef2622b47618_prof);

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
