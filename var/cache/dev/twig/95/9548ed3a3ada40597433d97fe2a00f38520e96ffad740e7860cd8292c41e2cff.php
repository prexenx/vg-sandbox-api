<?php

/* WebProfilerBundle:Profiler:bag.html.twig */
class __TwigTemplate_ce1507a147d189be1f7840f7d041984ebb6378a54b3b5fa6eb7bb8e633a51cc3 extends Twig_Template
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
        $__internal_f027c19e299ce46f3521a4f825c44d77c4e0058993e882c4b4244e0107a93101 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f027c19e299ce46f3521a4f825c44d77c4e0058993e882c4b4244e0107a93101->enter($__internal_f027c19e299ce46f3521a4f825c44d77c4e0058993e882c4b4244e0107a93101_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:bag.html.twig"));

        $__internal_b7f950d1b72a43d0a46514477c9a827f254083ab8b7b763c3cac53ce47131aa9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b7f950d1b72a43d0a46514477c9a827f254083ab8b7b763c3cac53ce47131aa9->enter($__internal_b7f950d1b72a43d0a46514477c9a827f254083ab8b7b763c3cac53ce47131aa9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:bag.html.twig"));

        // line 1
        echo "<table class=\"";
        echo twig_escape_filter($this->env, ((array_key_exists("class", $context)) ? (_twig_default_filter((isset($context["class"]) ? $context["class"] : $this->getContext($context, "class")), "")) : ("")), "html", null, true);
        echo "\">
    <thead>
        <tr>
            <th scope=\"col\" class=\"key\">";
        // line 4
        echo twig_escape_filter($this->env, ((array_key_exists("labels", $context)) ? ($this->getAttribute((isset($context["labels"]) ? $context["labels"] : $this->getContext($context, "labels")), 0, array(), "array")) : ("Key")), "html", null, true);
        echo "</th>
            <th scope=\"col\">";
        // line 5
        echo twig_escape_filter($this->env, ((array_key_exists("labels", $context)) ? ($this->getAttribute((isset($context["labels"]) ? $context["labels"] : $this->getContext($context, "labels")), 1, array(), "array")) : ("Value")), "html", null, true);
        echo "</th>
        </tr>
    </thead>
    <tbody>
        ";
        // line 9
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_sort_filter($this->getAttribute((isset($context["bag"]) ? $context["bag"] : $this->getContext($context, "bag")), "keys", array())));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["key"]) {
            // line 10
            echo "            <tr>
                <th>";
            // line 11
            echo twig_escape_filter($this->env, $context["key"], "html", null, true);
            echo "</th>
                <td>";
            // line 12
            echo call_user_func_array($this->env->getFunction('profiler_dump')->getCallable(), array($this->env, $this->getAttribute((isset($context["bag"]) ? $context["bag"] : $this->getContext($context, "bag")), "get", array(0 => $context["key"]), "method"), ((array_key_exists("maxDepth", $context)) ? (_twig_default_filter((isset($context["maxDepth"]) ? $context["maxDepth"] : $this->getContext($context, "maxDepth")), 0)) : (0))));
            echo "</td>
            </tr>
        ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 15
            echo "            <tr>
                <td colspan=\"2\">(no data)</td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['key'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 19
        echo "    </tbody>
</table>
";
        
        $__internal_f027c19e299ce46f3521a4f825c44d77c4e0058993e882c4b4244e0107a93101->leave($__internal_f027c19e299ce46f3521a4f825c44d77c4e0058993e882c4b4244e0107a93101_prof);

        
        $__internal_b7f950d1b72a43d0a46514477c9a827f254083ab8b7b763c3cac53ce47131aa9->leave($__internal_b7f950d1b72a43d0a46514477c9a827f254083ab8b7b763c3cac53ce47131aa9_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:bag.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 19,  63 => 15,  55 => 12,  51 => 11,  48 => 10,  43 => 9,  36 => 5,  32 => 4,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<table class=\"{{ class|default('') }}\">
    <thead>
        <tr>
            <th scope=\"col\" class=\"key\">{{ labels is defined ? labels[0] : 'Key' }}</th>
            <th scope=\"col\">{{ labels is defined ? labels[1] : 'Value' }}</th>
        </tr>
    </thead>
    <tbody>
        {% for key in bag.keys|sort %}
            <tr>
                <th>{{ key }}</th>
                <td>{{ profiler_dump(bag.get(key), maxDepth=maxDepth|default(0)) }}</td>
            </tr>
        {% else %}
            <tr>
                <td colspan=\"2\">(no data)</td>
            </tr>
        {% endfor %}
    </tbody>
</table>
", "WebProfilerBundle:Profiler:bag.html.twig", "/var/www/html/vg-api/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/bag.html.twig");
    }
}
