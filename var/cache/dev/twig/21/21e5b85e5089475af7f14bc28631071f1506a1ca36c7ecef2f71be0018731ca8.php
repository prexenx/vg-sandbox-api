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
        $__internal_2936d8f759ccd71797a4383ac7569f073db58313185eba49e0a1cfde21072445 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2936d8f759ccd71797a4383ac7569f073db58313185eba49e0a1cfde21072445->enter($__internal_2936d8f759ccd71797a4383ac7569f073db58313185eba49e0a1cfde21072445_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        $__internal_c8f3555403b549123147ec76674d7ef5e44ee6f27931a446f654fffb2165d498 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c8f3555403b549123147ec76674d7ef5e44ee6f27931a446f654fffb2165d498->enter($__internal_c8f3555403b549123147ec76674d7ef5e44ee6f27931a446f654fffb2165d498_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        // line 1
        echo "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
        
        $__internal_2936d8f759ccd71797a4383ac7569f073db58313185eba49e0a1cfde21072445->leave($__internal_2936d8f759ccd71797a4383ac7569f073db58313185eba49e0a1cfde21072445_prof);

        
        $__internal_c8f3555403b549123147ec76674d7ef5e44ee6f27931a446f654fffb2165d498->leave($__internal_c8f3555403b549123147ec76674d7ef5e44ee6f27931a446f654fffb2165d498_prof);

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
