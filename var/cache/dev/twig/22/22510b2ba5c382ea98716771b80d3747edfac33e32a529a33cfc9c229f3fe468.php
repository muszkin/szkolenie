<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_1c2610247c2699547dbe923227a0a5cfe5a3ef83069ffaebf6abd5bcdb24628d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
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
        $__internal_bb816f700803415b4589c4155a93a4627ec5e7588da35c6f760c8a5070c0aac2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bb816f700803415b4589c4155a93a4627ec5e7588da35c6f760c8a5070c0aac2->enter($__internal_bb816f700803415b4589c4155a93a4627ec5e7588da35c6f760c8a5070c0aac2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_5d8fd8425ef62cec775175c5b9d76c6a2cfb9694eebd634c30a239cabfbb3772 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5d8fd8425ef62cec775175c5b9d76c6a2cfb9694eebd634c30a239cabfbb3772->enter($__internal_5d8fd8425ef62cec775175c5b9d76c6a2cfb9694eebd634c30a239cabfbb3772_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bb816f700803415b4589c4155a93a4627ec5e7588da35c6f760c8a5070c0aac2->leave($__internal_bb816f700803415b4589c4155a93a4627ec5e7588da35c6f760c8a5070c0aac2_prof);

        
        $__internal_5d8fd8425ef62cec775175c5b9d76c6a2cfb9694eebd634c30a239cabfbb3772->leave($__internal_5d8fd8425ef62cec775175c5b9d76c6a2cfb9694eebd634c30a239cabfbb3772_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_bcdcba2a3ab58d8b32bf1adfb92fbd972ef212a6510135481f0242c86d3c07e5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bcdcba2a3ab58d8b32bf1adfb92fbd972ef212a6510135481f0242c86d3c07e5->enter($__internal_bcdcba2a3ab58d8b32bf1adfb92fbd972ef212a6510135481f0242c86d3c07e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_98ed97d2980b2dd5ea999ce224763cae51621f77c60ace98f7ff07a0d9b01591 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_98ed97d2980b2dd5ea999ce224763cae51621f77c60ace98f7ff07a0d9b01591->enter($__internal_98ed97d2980b2dd5ea999ce224763cae51621f77c60ace98f7ff07a0d9b01591_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_98ed97d2980b2dd5ea999ce224763cae51621f77c60ace98f7ff07a0d9b01591->leave($__internal_98ed97d2980b2dd5ea999ce224763cae51621f77c60ace98f7ff07a0d9b01591_prof);

        
        $__internal_bcdcba2a3ab58d8b32bf1adfb92fbd972ef212a6510135481f0242c86d3c07e5->leave($__internal_bcdcba2a3ab58d8b32bf1adfb92fbd972ef212a6510135481f0242c86d3c07e5_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_d80c6be4cd433c1b56594216523a5ccd925c7c7c3761eeff6e8c9ad8dec50766 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d80c6be4cd433c1b56594216523a5ccd925c7c7c3761eeff6e8c9ad8dec50766->enter($__internal_d80c6be4cd433c1b56594216523a5ccd925c7c7c3761eeff6e8c9ad8dec50766_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_e61b26a7daae37cc87ac69f4f7fb63797f6bdcff15b95ee81bd8df245277c145 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e61b26a7daae37cc87ac69f4f7fb63797f6bdcff15b95ee81bd8df245277c145->enter($__internal_e61b26a7daae37cc87ac69f4f7fb63797f6bdcff15b95ee81bd8df245277c145_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_e61b26a7daae37cc87ac69f4f7fb63797f6bdcff15b95ee81bd8df245277c145->leave($__internal_e61b26a7daae37cc87ac69f4f7fb63797f6bdcff15b95ee81bd8df245277c145_prof);

        
        $__internal_d80c6be4cd433c1b56594216523a5ccd925c7c7c3761eeff6e8c9ad8dec50766->leave($__internal_d80c6be4cd433c1b56594216523a5ccd925c7c7c3761eeff6e8c9ad8dec50766_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_a3135a6b44c9d0417bee84054c1bf33b8617ac24f4c6f622ac1b045ae5f0464b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a3135a6b44c9d0417bee84054c1bf33b8617ac24f4c6f622ac1b045ae5f0464b->enter($__internal_a3135a6b44c9d0417bee84054c1bf33b8617ac24f4c6f622ac1b045ae5f0464b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_1ba89d551ae0ff1dbabf54b36f6b9a95dda1ee7c18a53627887304e068b85f3b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1ba89d551ae0ff1dbabf54b36f6b9a95dda1ee7c18a53627887304e068b85f3b->enter($__internal_1ba89d551ae0ff1dbabf54b36f6b9a95dda1ee7c18a53627887304e068b85f3b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_1ba89d551ae0ff1dbabf54b36f6b9a95dda1ee7c18a53627887304e068b85f3b->leave($__internal_1ba89d551ae0ff1dbabf54b36f6b9a95dda1ee7c18a53627887304e068b85f3b_prof);

        
        $__internal_a3135a6b44c9d0417bee84054c1bf33b8617ac24f4c6f622ac1b045ae5f0464b->leave($__internal_a3135a6b44c9d0417bee84054c1bf33b8617ac24f4c6f622ac1b045ae5f0464b_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 33,  135 => 32,  129 => 28,  127 => 27,  123 => 25,  114 => 24,  103 => 21,  97 => 17,  95 => 16,  90 => 14,  85 => 13,  76 => 12,  63 => 9,  57 => 6,  54 => 5,  51 => 4,  42 => 3,  11 => 1,);
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

{% block head %}
    {% if collector.hasexception %}
        <style>
            {{ render(path('_profiler_exception_css', { token: token })) }}
        </style>
    {% endif %}
    {{ parent() }}
{% endblock %}

{% block menu %}
    <span class=\"label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/exception.svg') }}</span>
        <strong>Exception</strong>
        {% if collector.hasexception %}
            <span class=\"count\">
                <span>1</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    <h2>Exceptions</h2>

    {% if not collector.hasexception %}
        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    {% else %}
        <div class=\"sf-reset\">
            {{ render(path('_profiler_exception', { token: token })) }}
        </div>
    {% endif %}
{% endblock %}
", "@WebProfiler/Collector/exception.html.twig", "/home/muszkin/public_html/szkolenie/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/exception.html.twig");
    }
}
