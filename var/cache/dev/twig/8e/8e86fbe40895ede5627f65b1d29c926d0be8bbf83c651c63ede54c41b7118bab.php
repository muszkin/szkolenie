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
        $__internal_ba20e535cb3c0995f9d17c69d6e8af159a82505a4e5cbd1304fc376d5003636c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ba20e535cb3c0995f9d17c69d6e8af159a82505a4e5cbd1304fc376d5003636c->enter($__internal_ba20e535cb3c0995f9d17c69d6e8af159a82505a4e5cbd1304fc376d5003636c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Index:index.html.twig"));

        $__internal_fd385701c8776a9c3dfabded65f93e23ac23d34d3971b990bca142b3652523ad = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fd385701c8776a9c3dfabded65f93e23ac23d34d3971b990bca142b3652523ad->enter($__internal_fd385701c8776a9c3dfabded65f93e23ac23d34d3971b990bca142b3652523ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Index:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ba20e535cb3c0995f9d17c69d6e8af159a82505a4e5cbd1304fc376d5003636c->leave($__internal_ba20e535cb3c0995f9d17c69d6e8af159a82505a4e5cbd1304fc376d5003636c_prof);

        
        $__internal_fd385701c8776a9c3dfabded65f93e23ac23d34d3971b990bca142b3652523ad->leave($__internal_fd385701c8776a9c3dfabded65f93e23ac23d34d3971b990bca142b3652523ad_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_754e20ed5cd923d3d4a30cfa7078e9f725c03a14d1901a05eb4150aeac5869fc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_754e20ed5cd923d3d4a30cfa7078e9f725c03a14d1901a05eb4150aeac5869fc->enter($__internal_754e20ed5cd923d3d4a30cfa7078e9f725c03a14d1901a05eb4150aeac5869fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_0dbbdca5cfff3bd9c22dda19209bf794cb722e1a8770cc4a5408e783ee9736f9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0dbbdca5cfff3bd9c22dda19209bf794cb722e1a8770cc4a5408e783ee9736f9->enter($__internal_0dbbdca5cfff3bd9c22dda19209bf794cb722e1a8770cc4a5408e783ee9736f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "
    <p><a href=\"";
        // line 5
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("listAction");
        echo "\">Books</a> - <a href=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("category_index");
        echo "\">Categories</a></p>
";
        
        $__internal_0dbbdca5cfff3bd9c22dda19209bf794cb722e1a8770cc4a5408e783ee9736f9->leave($__internal_0dbbdca5cfff3bd9c22dda19209bf794cb722e1a8770cc4a5408e783ee9736f9_prof);

        
        $__internal_754e20ed5cd923d3d4a30cfa7078e9f725c03a14d1901a05eb4150aeac5869fc->leave($__internal_754e20ed5cd923d3d4a30cfa7078e9f725c03a14d1901a05eb4150aeac5869fc_prof);

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

    <p><a href=\"{{ path(\"listAction\") }}\">Books</a> - <a href=\"{{ path(\"category_index\") }}\">Categories</a></p>
{% endblock %}", "AppBundle:Index:index.html.twig", "/home/muszkin/public_html/szkolenie/src/AppBundle/Resources/views/Index/index.html.twig");
    }
}
