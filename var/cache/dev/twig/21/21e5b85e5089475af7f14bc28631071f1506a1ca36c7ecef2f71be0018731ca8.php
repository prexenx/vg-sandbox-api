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
        $__internal_9a8ca74237f38641a0f8e5baa2cc92b91665a0e1cc51f054a8176d9b4c254989 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9a8ca74237f38641a0f8e5baa2cc92b91665a0e1cc51f054a8176d9b4c254989->enter($__internal_9a8ca74237f38641a0f8e5baa2cc92b91665a0e1cc51f054a8176d9b4c254989_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        $__internal_3b47df3d6d81cd0c4242b8b8cf98b81040f7b3b4df49208cc7e04c092dbb77fa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3b47df3d6d81cd0c4242b8b8cf98b81040f7b3b4df49208cc7e04c092dbb77fa->enter($__internal_3b47df3d6d81cd0c4242b8b8cf98b81040f7b3b4df49208cc7e04c092dbb77fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        // line 1
        echo "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
        
        $__internal_9a8ca74237f38641a0f8e5baa2cc92b91665a0e1cc51f054a8176d9b4c254989->leave($__internal_9a8ca74237f38641a0f8e5baa2cc92b91665a0e1cc51f054a8176d9b4c254989_prof);

        
        $__internal_3b47df3d6d81cd0c4242b8b8cf98b81040f7b3b4df49208cc7e04c092dbb77fa->leave($__internal_3b47df3d6d81cd0c4242b8b8cf98b81040f7b3b4df49208cc7e04c092dbb77fa_prof);

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
