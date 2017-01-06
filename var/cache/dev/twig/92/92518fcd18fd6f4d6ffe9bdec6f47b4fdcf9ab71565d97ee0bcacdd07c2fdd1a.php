<?php

/* category/index.html.twig */
class __TwigTemplate_3228618a16b268ae33d4e45165e755a73572f155613b1df098c3f86a49caef18 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "category/index.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_27e6f2cde7db3b57427658e8c7b28c22271b76f8a36ae943e718a65bd5d476ab = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_27e6f2cde7db3b57427658e8c7b28c22271b76f8a36ae943e718a65bd5d476ab->enter($__internal_27e6f2cde7db3b57427658e8c7b28c22271b76f8a36ae943e718a65bd5d476ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "category/index.html.twig"));

        $__internal_c32a348c7ca4500f6b20d74ae245e1afe628ffb22c6bb3d744ee112e48b4bca2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c32a348c7ca4500f6b20d74ae245e1afe628ffb22c6bb3d744ee112e48b4bca2->enter($__internal_c32a348c7ca4500f6b20d74ae245e1afe628ffb22c6bb3d744ee112e48b4bca2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "category/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_27e6f2cde7db3b57427658e8c7b28c22271b76f8a36ae943e718a65bd5d476ab->leave($__internal_27e6f2cde7db3b57427658e8c7b28c22271b76f8a36ae943e718a65bd5d476ab_prof);

        
        $__internal_c32a348c7ca4500f6b20d74ae245e1afe628ffb22c6bb3d744ee112e48b4bca2->leave($__internal_c32a348c7ca4500f6b20d74ae245e1afe628ffb22c6bb3d744ee112e48b4bca2_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_671e7a2cf1366f68501f497f3168266d44fd783e023dc8d2ae495e0d90ef3e1d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_671e7a2cf1366f68501f497f3168266d44fd783e023dc8d2ae495e0d90ef3e1d->enter($__internal_671e7a2cf1366f68501f497f3168266d44fd783e023dc8d2ae495e0d90ef3e1d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_7bf643b477b81befa9416a0a69c0647afe7be12dea5f8a5bd5fe466c1e6ed12f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7bf643b477b81befa9416a0a69c0647afe7be12dea5f8a5bd5fe466c1e6ed12f->enter($__internal_7bf643b477b81befa9416a0a69c0647afe7be12dea5f8a5bd5fe466c1e6ed12f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Categories list</h1>

    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Name</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 15
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["categories"] ?? $this->getContext($context, "categories")));
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 16
            echo "            <tr>
                <td><a href=\"";
            // line 17
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("category_show", array("id" => $this->getAttribute($context["category"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["category"], "id", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 18
            echo twig_escape_filter($this->env, $this->getAttribute($context["category"], "name", array()), "html", null, true);
            echo "</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"";
            // line 22
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("category_show", array("id" => $this->getAttribute($context["category"], "id", array()))), "html", null, true);
            echo "\">show</a>
                        </li>
                        <li>
                            <a href=\"";
            // line 25
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("category_edit", array("id" => $this->getAttribute($context["category"], "id", array()))), "html", null, true);
            echo "\">edit</a>
                        </li>
                    </ul>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 31
        echo "        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 36
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("category_new");
        echo "\">Create a new category</a>
        </li>
    </ul>
";
        
        $__internal_7bf643b477b81befa9416a0a69c0647afe7be12dea5f8a5bd5fe466c1e6ed12f->leave($__internal_7bf643b477b81befa9416a0a69c0647afe7be12dea5f8a5bd5fe466c1e6ed12f_prof);

        
        $__internal_671e7a2cf1366f68501f497f3168266d44fd783e023dc8d2ae495e0d90ef3e1d->leave($__internal_671e7a2cf1366f68501f497f3168266d44fd783e023dc8d2ae495e0d90ef3e1d_prof);

    }

    public function getTemplateName()
    {
        return "category/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  107 => 36,  100 => 31,  88 => 25,  82 => 22,  75 => 18,  69 => 17,  66 => 16,  62 => 15,  49 => 4,  40 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block body %}
    <h1>Categories list</h1>

    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Name</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        {% for category in categories %}
            <tr>
                <td><a href=\"{{ path('category_show', { 'id': category.id }) }}\">{{ category.id }}</a></td>
                <td>{{ category.name }}</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"{{ path('category_show', { 'id': category.id }) }}\">show</a>
                        </li>
                        <li>
                            <a href=\"{{ path('category_edit', { 'id': category.id }) }}\">edit</a>
                        </li>
                    </ul>
                </td>
            </tr>
        {% endfor %}
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"{{ path('category_new') }}\">Create a new category</a>
        </li>
    </ul>
{% endblock %}
", "category/index.html.twig", "/home/muszkin/public_html/szkolenie/app/Resources/views/category/index.html.twig");
    }
}
