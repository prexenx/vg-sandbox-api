<?php

/* @Framework/Form/password_widget.html.php */
class __TwigTemplate_aa7e367b3611ed3bea7ab932dbd1d6971ffe0b37eed6311f8e1e2121e82cce19 extends Twig_Template
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
        $__internal_ded0ed0ee0fe9bbf8364e81f7526b50f26af550b4bb665846f0ef47740939a29 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ded0ed0ee0fe9bbf8364e81f7526b50f26af550b4bb665846f0ef47740939a29->enter($__internal_ded0ed0ee0fe9bbf8364e81f7526b50f26af550b4bb665846f0ef47740939a29_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        $__internal_88aab4b80b0a367b80c58ed5c331d52cb0ed7088b582cbb0c8ae275a1fdd08f9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_88aab4b80b0a367b80c58ed5c331d52cb0ed7088b582cbb0c8ae275a1fdd08f9->enter($__internal_88aab4b80b0a367b80c58ed5c331d52cb0ed7088b582cbb0c8ae275a1fdd08f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
";
        
        $__internal_ded0ed0ee0fe9bbf8364e81f7526b50f26af550b4bb665846f0ef47740939a29->leave($__internal_ded0ed0ee0fe9bbf8364e81f7526b50f26af550b4bb665846f0ef47740939a29_prof);

        
        $__internal_88aab4b80b0a367b80c58ed5c331d52cb0ed7088b582cbb0c8ae275a1fdd08f9->leave($__internal_88aab4b80b0a367b80c58ed5c331d52cb0ed7088b582cbb0c8ae275a1fdd08f9_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/password_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
", "@Framework/Form/password_widget.html.php", "/var/www/html/vg-api/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/password_widget.html.php");
    }
}
