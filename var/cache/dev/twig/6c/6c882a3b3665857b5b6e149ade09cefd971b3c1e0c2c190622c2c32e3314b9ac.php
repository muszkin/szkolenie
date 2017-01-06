<?php

/* @WebProfiler/Collector/ajax.html.twig */
class __TwigTemplate_5a4a98caf8686541014c99dc7f196f0148a568adb6fbf50dd8f44593814b227f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/ajax.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_1c24aac0d1ff7bd8aed82f8708789d16b6a27f087e732b7bd7830ff37b391126 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1c24aac0d1ff7bd8aed82f8708789d16b6a27f087e732b7bd7830ff37b391126->enter($__internal_1c24aac0d1ff7bd8aed82f8708789d16b6a27f087e732b7bd7830ff37b391126_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $__internal_070daaed9a36bcb77559b67db25ad5abf24c0f6f2009c94708031138a22d2b7a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_070daaed9a36bcb77559b67db25ad5abf24c0f6f2009c94708031138a22d2b7a->enter($__internal_070daaed9a36bcb77559b67db25ad5abf24c0f6f2009c94708031138a22d2b7a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1c24aac0d1ff7bd8aed82f8708789d16b6a27f087e732b7bd7830ff37b391126->leave($__internal_1c24aac0d1ff7bd8aed82f8708789d16b6a27f087e732b7bd7830ff37b391126_prof);

        
        $__internal_070daaed9a36bcb77559b67db25ad5abf24c0f6f2009c94708031138a22d2b7a->leave($__internal_070daaed9a36bcb77559b67db25ad5abf24c0f6f2009c94708031138a22d2b7a_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_0baaf842f952eab392305b230985cc39a07a2f5faa989565c504a32eddf4e183 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0baaf842f952eab392305b230985cc39a07a2f5faa989565c504a32eddf4e183->enter($__internal_0baaf842f952eab392305b230985cc39a07a2f5faa989565c504a32eddf4e183_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_d337c12611fb6bd2f156d6e96b95ab1f413690f81ce9ce30d09dae3869b6ce47 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d337c12611fb6bd2f156d6e96b95ab1f413690f81ce9ce30d09dae3869b6ce47->enter($__internal_d337c12611fb6bd2f156d6e96b95ab1f413690f81ce9ce30d09dae3869b6ce47_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        // line 4
        echo "    ";
        ob_start();
        // line 5
        echo "        ";
        echo twig_include($this->env, $context, "@WebProfiler/Icon/ajax.svg");
        echo "
        <span class=\"sf-toolbar-value sf-toolbar-ajax-requests\">0</span>
    ";
        $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 8
        echo "
    ";
        // line 9
        $context["text"] = ('' === $tmp = "        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    ") ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 29
        echo "
    ";
        // line 30
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/toolbar_item.html.twig", array("link" => false));
        echo "
";
        
        $__internal_d337c12611fb6bd2f156d6e96b95ab1f413690f81ce9ce30d09dae3869b6ce47->leave($__internal_d337c12611fb6bd2f156d6e96b95ab1f413690f81ce9ce30d09dae3869b6ce47_prof);

        
        $__internal_0baaf842f952eab392305b230985cc39a07a2f5faa989565c504a32eddf4e183->leave($__internal_0baaf842f952eab392305b230985cc39a07a2f5faa989565c504a32eddf4e183_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/ajax.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 30,  82 => 29,  62 => 9,  59 => 8,  52 => 5,  49 => 4,  40 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}
    {% set icon %}
        {{ include('@WebProfiler/Icon/ajax.svg') }}
        <span class=\"sf-toolbar-value sf-toolbar-ajax-requests\">0</span>
    {% endset %}

    {% set text %}
        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    {% endset %}

    {{ include('@WebProfiler/Profiler/toolbar_item.html.twig', { link: false }) }}
{% endblock %}
", "@WebProfiler/Collector/ajax.html.twig", "/home/muszkin/public_html/szkolenie/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/ajax.html.twig");
    }
}
