<?php

/* @Framework/Form/form_errors.html.php */
class __TwigTemplate_54879764e5899aaafcdff10faf3341c43ed0963368b5f2b6dd1cbaf43c434cf4 extends Twig_Template
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
        $__internal_2edd8e67401472ce69344f891fa2f5a44dbeb11d6bac4eba5f7aaabef7ab588c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2edd8e67401472ce69344f891fa2f5a44dbeb11d6bac4eba5f7aaabef7ab588c->enter($__internal_2edd8e67401472ce69344f891fa2f5a44dbeb11d6bac4eba5f7aaabef7ab588c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        $__internal_d33d5eff7f017868e1136cc458c73116ccc666f64bf0ab057dd7536a8fb5d2cc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d33d5eff7f017868e1136cc458c73116ccc666f64bf0ab057dd7536a8fb5d2cc->enter($__internal_d33d5eff7f017868e1136cc458c73116ccc666f64bf0ab057dd7536a8fb5d2cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        // line 1
        echo "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
        
        $__internal_2edd8e67401472ce69344f891fa2f5a44dbeb11d6bac4eba5f7aaabef7ab588c->leave($__internal_2edd8e67401472ce69344f891fa2f5a44dbeb11d6bac4eba5f7aaabef7ab588c_prof);

        
        $__internal_d33d5eff7f017868e1136cc458c73116ccc666f64bf0ab057dd7536a8fb5d2cc->leave($__internal_d33d5eff7f017868e1136cc458c73116ccc666f64bf0ab057dd7536a8fb5d2cc_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_errors.html.php";
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
        return new Twig_Source("<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
", "@Framework/Form/form_errors.html.php", "/var/www/html/vg-api/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_errors.html.php");
    }
}
