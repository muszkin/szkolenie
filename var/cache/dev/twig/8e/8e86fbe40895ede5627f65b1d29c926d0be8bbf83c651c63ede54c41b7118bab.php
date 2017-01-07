<?php

/* AppBundle:Index:index.html.twig */
class __TwigTemplate_1556ea06b3e6873bef146f398e817c92fd1eafdb565cf02de88e85ed7db1d4bd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "AppBundle:Index:index.html.twig", 1);
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
        $__internal_06653460813ede7ef7d3fde0f26ad61777531981a5e4b2f80060dbecff22a74a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_06653460813ede7ef7d3fde0f26ad61777531981a5e4b2f80060dbecff22a74a->enter($__internal_06653460813ede7ef7d3fde0f26ad61777531981a5e4b2f80060dbecff22a74a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Index:index.html.twig"));

        $__internal_3c04e5a1b0d2331e5a1eea9ad721addac0e79844c6aa53342a0a33e97108163e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3c04e5a1b0d2331e5a1eea9ad721addac0e79844c6aa53342a0a33e97108163e->enter($__internal_3c04e5a1b0d2331e5a1eea9ad721addac0e79844c6aa53342a0a33e97108163e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Index:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_06653460813ede7ef7d3fde0f26ad61777531981a5e4b2f80060dbecff22a74a->leave($__internal_06653460813ede7ef7d3fde0f26ad61777531981a5e4b2f80060dbecff22a74a_prof);

        
        $__internal_3c04e5a1b0d2331e5a1eea9ad721addac0e79844c6aa53342a0a33e97108163e->leave($__internal_3c04e5a1b0d2331e5a1eea9ad721addac0e79844c6aa53342a0a33e97108163e_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_9f9c8d8d1761e17516679ee689c4db142b9e0f434aa4ec6bc30cdd54135371ed = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9f9c8d8d1761e17516679ee689c4db142b9e0f434aa4ec6bc30cdd54135371ed->enter($__internal_9f9c8d8d1761e17516679ee689c4db142b9e0f434aa4ec6bc30cdd54135371ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_0ef0f1ef0b390573fb47c7fa6521bb4e942617dd30afca3a8ac169187a0643d3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0ef0f1ef0b390573fb47c7fa6521bb4e942617dd30afca3a8ac169187a0643d3->enter($__internal_0ef0f1ef0b390573fb47c7fa6521bb4e942617dd30afca3a8ac169187a0643d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "
    <p><a href=\"";
        // line 5
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("listAction");
        echo "\">Books </a> - <a href=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("category_index");
        echo "\">Categories</a></p>
";
        
        $__internal_0ef0f1ef0b390573fb47c7fa6521bb4e942617dd30afca3a8ac169187a0643d3->leave($__internal_0ef0f1ef0b390573fb47c7fa6521bb4e942617dd30afca3a8ac169187a0643d3_prof);

        
        $__internal_9f9c8d8d1761e17516679ee689c4db142b9e0f434aa4ec6bc30cdd54135371ed->leave($__internal_9f9c8d8d1761e17516679ee689c4db142b9e0f434aa4ec6bc30cdd54135371ed_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle:Index:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  52 => 5,  49 => 4,  40 => 3,  11 => 1,);
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

    <p><a href=\"{{ path(\"listAction\") }}\">Books </a> - <a href=\"{{ path(\"category_index\") }}\">Categories</a></p>
{% endblock %}", "AppBundle:Index:index.html.twig", "/home/muszkin/public_html/szkolenie/src/AppBundle/Resources/views/Index/index.html.twig");
    }
}
