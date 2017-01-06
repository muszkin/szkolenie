<?php

/* AppBundle:Book:index.html.twig */
class __TwigTemplate_78522fc60b330aceec229c81284249826d6211b330103f094f37b3352e720e86 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "AppBundle:Book:index.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b25731ab68ba673de8c16849067074807658ef2850833a3ed5d782d2757e3a65 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b25731ab68ba673de8c16849067074807658ef2850833a3ed5d782d2757e3a65->enter($__internal_b25731ab68ba673de8c16849067074807658ef2850833a3ed5d782d2757e3a65_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Book:index.html.twig"));

        $__internal_bcb156350250ae1a62631aa0aa90a38ed66008211c3d9e35609be73b206a08dc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bcb156350250ae1a62631aa0aa90a38ed66008211c3d9e35609be73b206a08dc->enter($__internal_bcb156350250ae1a62631aa0aa90a38ed66008211c3d9e35609be73b206a08dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Book:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b25731ab68ba673de8c16849067074807658ef2850833a3ed5d782d2757e3a65->leave($__internal_b25731ab68ba673de8c16849067074807658ef2850833a3ed5d782d2757e3a65_prof);

        
        $__internal_bcb156350250ae1a62631aa0aa90a38ed66008211c3d9e35609be73b206a08dc->leave($__internal_bcb156350250ae1a62631aa0aa90a38ed66008211c3d9e35609be73b206a08dc_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_bde5392f7a37f50ced5eb0e0ef6dadb06903c8b4e5052982f2d9d8e68c1128ae = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bde5392f7a37f50ced5eb0e0ef6dadb06903c8b4e5052982f2d9d8e68c1128ae->enter($__internal_bde5392f7a37f50ced5eb0e0ef6dadb06903c8b4e5052982f2d9d8e68c1128ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_741079d8ccd87b6e2b82d6ee1944f61064e9cf530348a9974036e8967aa16e18 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_741079d8ccd87b6e2b82d6ee1944f61064e9cf530348a9974036e8967aa16e18->enter($__internal_741079d8ccd87b6e2b82d6ee1944f61064e9cf530348a9974036e8967aa16e18_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["books"] ?? $this->getContext($context, "books")));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["book"]) {
            // line 5
            echo "        <p>";
            echo twig_escape_filter($this->env, $this->getAttribute($context["book"], "title", array()), "html", null, true);
            echo " (";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["book"], "category", array()), "name", array()), "html", null, true);
            echo ")- <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("editBook", array("book_id" => $this->getAttribute($context["book"], "id", array()))), "html", null, true);
            echo "\">Edit</a> - <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("showBook", array("book_id" => $this->getAttribute($context["book"], "id", array()))), "html", null, true);
            echo "\">Show</a> - <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("deleteBook", array("book_id" => $this->getAttribute($context["book"], "id", array()))), "html", null, true);
            echo "\">Delete</a></p>
        ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 7
            echo "        <p>Nothing to show</p>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['book'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 9
        echo "    <a href=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("addBook");
        echo "\">Add</a>
";
        
        $__internal_741079d8ccd87b6e2b82d6ee1944f61064e9cf530348a9974036e8967aa16e18->leave($__internal_741079d8ccd87b6e2b82d6ee1944f61064e9cf530348a9974036e8967aa16e18_prof);

        
        $__internal_bde5392f7a37f50ced5eb0e0ef6dadb06903c8b4e5052982f2d9d8e68c1128ae->leave($__internal_bde5392f7a37f50ced5eb0e0ef6dadb06903c8b4e5052982f2d9d8e68c1128ae_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle:Book:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 9,  71 => 7,  55 => 5,  49 => 4,  40 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '::base.html.twig' %}

{% block body %}
    {% for book in books %}
        <p>{{ book.title }} ({{ book.category.name }})- <a href=\"{{ path('editBook',{\"book_id\":book.id}) }}\">Edit</a> - <a href=\"{{ path('showBook',{\"book_id\":book.id}) }}\">Show</a> - <a href=\"{{ path('deleteBook',{\"book_id\":book.id}) }}\">Delete</a></p>
        {% else %}
        <p>Nothing to show</p>
    {% endfor %}
    <a href=\"{{ path(\"addBook\") }}\">Add</a>
{% endblock %}

", "AppBundle:Book:index.html.twig", "/home/muszkin/public_html/szkolenie/src/AppBundle/Resources/views/Book/index.html.twig");
    }
}
