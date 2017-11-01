<?php

/* @Framework/Form/choice_options.html.php */
class __TwigTemplate_83cfcb1e69337d48bfde75635f0e55055c0cbadbbfc96f4bdf61eee09aa3b5dc extends Twig_Template
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
        $__internal_84c82e41548b7182a065f8fe5f84084d4e8bca0daeb63d7036a7dd685030e65e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_84c82e41548b7182a065f8fe5f84084d4e8bca0daeb63d7036a7dd685030e65e->enter($__internal_84c82e41548b7182a065f8fe5f84084d4e8bca0daeb63d7036a7dd685030e65e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        $__internal_1623b7d1855fdceea327088f3fed500d22310e7913513e2ea1d5dc388c0da57d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1623b7d1855fdceea327088f3fed500d22310e7913513e2ea1d5dc388c0da57d->enter($__internal_1623b7d1855fdceea327088f3fed500d22310e7913513e2ea1d5dc388c0da57d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
";
        
        $__internal_84c82e41548b7182a065f8fe5f84084d4e8bca0daeb63d7036a7dd685030e65e->leave($__internal_84c82e41548b7182a065f8fe5f84084d4e8bca0daeb63d7036a7dd685030e65e_prof);

        
        $__internal_1623b7d1855fdceea327088f3fed500d22310e7913513e2ea1d5dc388c0da57d->leave($__internal_1623b7d1855fdceea327088f3fed500d22310e7913513e2ea1d5dc388c0da57d_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_options.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
", "@Framework/Form/choice_options.html.php", "/var/www/html/vg-api/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/choice_options.html.php");
    }
}
