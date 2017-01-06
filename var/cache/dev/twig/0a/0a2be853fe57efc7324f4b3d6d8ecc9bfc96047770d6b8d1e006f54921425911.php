<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_462a1ca018458cfc2eea4660297591fe35129192fbf19c7b5d06cb074bfbb934 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d3be77ee3566b001fa88608328ede4bdee4e1c949516338885f5175fbcff6df7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d3be77ee3566b001fa88608328ede4bdee4e1c949516338885f5175fbcff6df7->enter($__internal_d3be77ee3566b001fa88608328ede4bdee4e1c949516338885f5175fbcff6df7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_d63fbacc8f592ab8185101d558e295d2dc0fee50b80682cd468fffb809db7858 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d63fbacc8f592ab8185101d558e295d2dc0fee50b80682cd468fffb809db7858->enter($__internal_d63fbacc8f592ab8185101d558e295d2dc0fee50b80682cd468fffb809db7858_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d3be77ee3566b001fa88608328ede4bdee4e1c949516338885f5175fbcff6df7->leave($__internal_d3be77ee3566b001fa88608328ede4bdee4e1c949516338885f5175fbcff6df7_prof);

        
        $__internal_d63fbacc8f592ab8185101d558e295d2dc0fee50b80682cd468fffb809db7858->leave($__internal_d63fbacc8f592ab8185101d558e295d2dc0fee50b80682cd468fffb809db7858_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_5a93217435680296503e5b7a1a139d5d71096c6ee0b26a207717333bfd0374bd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5a93217435680296503e5b7a1a139d5d71096c6ee0b26a207717333bfd0374bd->enter($__internal_5a93217435680296503e5b7a1a139d5d71096c6ee0b26a207717333bfd0374bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_2439799f23bde29107f71d4c1da74bb123529c28d316bcf7a3c65b905820288f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2439799f23bde29107f71d4c1da74bb123529c28d316bcf7a3c65b905820288f->enter($__internal_2439799f23bde29107f71d4c1da74bb123529c28d316bcf7a3c65b905820288f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_2439799f23bde29107f71d4c1da74bb123529c28d316bcf7a3c65b905820288f->leave($__internal_2439799f23bde29107f71d4c1da74bb123529c28d316bcf7a3c65b905820288f_prof);

        
        $__internal_5a93217435680296503e5b7a1a139d5d71096c6ee0b26a207717333bfd0374bd->leave($__internal_5a93217435680296503e5b7a1a139d5d71096c6ee0b26a207717333bfd0374bd_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_6d259815a6428cbd1854b5f9c830edf96df43a04c484378912f8d772816136e4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6d259815a6428cbd1854b5f9c830edf96df43a04c484378912f8d772816136e4->enter($__internal_6d259815a6428cbd1854b5f9c830edf96df43a04c484378912f8d772816136e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_c37c8f5343bc627c10001023c3c8dc6d60afa6d49b8c8f4fb4a9ba386dc6da47 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c37c8f5343bc627c10001023c3c8dc6d60afa6d49b8c8f4fb4a9ba386dc6da47->enter($__internal_c37c8f5343bc627c10001023c3c8dc6d60afa6d49b8c8f4fb4a9ba386dc6da47_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_c37c8f5343bc627c10001023c3c8dc6d60afa6d49b8c8f4fb4a9ba386dc6da47->leave($__internal_c37c8f5343bc627c10001023c3c8dc6d60afa6d49b8c8f4fb4a9ba386dc6da47_prof);

        
        $__internal_6d259815a6428cbd1854b5f9c830edf96df43a04c484378912f8d772816136e4->leave($__internal_6d259815a6428cbd1854b5f9c830edf96df43a04c484378912f8d772816136e4_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_c88fd278322adbefc2c616bb072d27041845e84b97433018158583c36cb1870b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c88fd278322adbefc2c616bb072d27041845e84b97433018158583c36cb1870b->enter($__internal_c88fd278322adbefc2c616bb072d27041845e84b97433018158583c36cb1870b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_fd7df26ca980ede274d5d0f384a4b03cc60cf45792ce214974b66c42a6a42f04 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fd7df26ca980ede274d5d0f384a4b03cc60cf45792ce214974b66c42a6a42f04->enter($__internal_fd7df26ca980ede274d5d0f384a4b03cc60cf45792ce214974b66c42a6a42f04_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_fd7df26ca980ede274d5d0f384a4b03cc60cf45792ce214974b66c42a6a42f04->leave($__internal_fd7df26ca980ede274d5d0f384a4b03cc60cf45792ce214974b66c42a6a42f04_prof);

        
        $__internal_c88fd278322adbefc2c616bb072d27041845e84b97433018158583c36cb1870b->leave($__internal_c88fd278322adbefc2c616bb072d27041845e84b97433018158583c36cb1870b_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 13,  85 => 12,  71 => 7,  68 => 6,  59 => 5,  42 => 3,  11 => 1,);
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

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "@WebProfiler/Collector/router.html.twig", "/home/muszkin/public_html/szkolenie/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
