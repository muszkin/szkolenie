<?php

/* ::base.html.twig */
class __TwigTemplate_5f636d84497f4c15dd364cbc3f8627b9126f4eb336a4969309fd8e18dd7fb075 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_8c87fd5c46956a3506735f71e8c80f54351fa81e4cb11a9c8840b4971c8f8799 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8c87fd5c46956a3506735f71e8c80f54351fa81e4cb11a9c8840b4971c8f8799->enter($__internal_8c87fd5c46956a3506735f71e8c80f54351fa81e4cb11a9c8840b4971c8f8799_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        $__internal_3584eb5e61a7899adff2d75fe5e0541b9ae4a19e4f2caeb565566e70de1e051a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3584eb5e61a7899adff2d75fe5e0541b9ae4a19e4f2caeb565566e70de1e051a->enter($__internal_3584eb5e61a7899adff2d75fe5e0541b9ae4a19e4f2caeb565566e70de1e051a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_8c87fd5c46956a3506735f71e8c80f54351fa81e4cb11a9c8840b4971c8f8799->leave($__internal_8c87fd5c46956a3506735f71e8c80f54351fa81e4cb11a9c8840b4971c8f8799_prof);

        
        $__internal_3584eb5e61a7899adff2d75fe5e0541b9ae4a19e4f2caeb565566e70de1e051a->leave($__internal_3584eb5e61a7899adff2d75fe5e0541b9ae4a19e4f2caeb565566e70de1e051a_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_57fdb9d9c939b66a4b8659f5d6459aa0cec421b0dfa9cd2970336c37b24ff0b6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_57fdb9d9c939b66a4b8659f5d6459aa0cec421b0dfa9cd2970336c37b24ff0b6->enter($__internal_57fdb9d9c939b66a4b8659f5d6459aa0cec421b0dfa9cd2970336c37b24ff0b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_c415a8d0df90f49a0060be095d70b6fb1fef5c89f0e6f15e8fc7e9f95add4fcf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c415a8d0df90f49a0060be095d70b6fb1fef5c89f0e6f15e8fc7e9f95add4fcf->enter($__internal_c415a8d0df90f49a0060be095d70b6fb1fef5c89f0e6f15e8fc7e9f95add4fcf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_c415a8d0df90f49a0060be095d70b6fb1fef5c89f0e6f15e8fc7e9f95add4fcf->leave($__internal_c415a8d0df90f49a0060be095d70b6fb1fef5c89f0e6f15e8fc7e9f95add4fcf_prof);

        
        $__internal_57fdb9d9c939b66a4b8659f5d6459aa0cec421b0dfa9cd2970336c37b24ff0b6->leave($__internal_57fdb9d9c939b66a4b8659f5d6459aa0cec421b0dfa9cd2970336c37b24ff0b6_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_a630bfba26d447d902ad3c3b6a7d167b84b5229b177e8f39a3ca50051133952d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a630bfba26d447d902ad3c3b6a7d167b84b5229b177e8f39a3ca50051133952d->enter($__internal_a630bfba26d447d902ad3c3b6a7d167b84b5229b177e8f39a3ca50051133952d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_e1c18f1b9a7754b8cfb7e38cb03ea0462e1e2ea89b8c0574e02848991a6910f3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e1c18f1b9a7754b8cfb7e38cb03ea0462e1e2ea89b8c0574e02848991a6910f3->enter($__internal_e1c18f1b9a7754b8cfb7e38cb03ea0462e1e2ea89b8c0574e02848991a6910f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_e1c18f1b9a7754b8cfb7e38cb03ea0462e1e2ea89b8c0574e02848991a6910f3->leave($__internal_e1c18f1b9a7754b8cfb7e38cb03ea0462e1e2ea89b8c0574e02848991a6910f3_prof);

        
        $__internal_a630bfba26d447d902ad3c3b6a7d167b84b5229b177e8f39a3ca50051133952d->leave($__internal_a630bfba26d447d902ad3c3b6a7d167b84b5229b177e8f39a3ca50051133952d_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_a5829182c136a0dd264dd6d973150c2c5fcd2660987c39fb9ee4c689c6699188 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a5829182c136a0dd264dd6d973150c2c5fcd2660987c39fb9ee4c689c6699188->enter($__internal_a5829182c136a0dd264dd6d973150c2c5fcd2660987c39fb9ee4c689c6699188_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_4e73bb37ff2f5c0596d0be0dca6e5dc3daa0912f891910978865c8af2747eed3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4e73bb37ff2f5c0596d0be0dca6e5dc3daa0912f891910978865c8af2747eed3->enter($__internal_4e73bb37ff2f5c0596d0be0dca6e5dc3daa0912f891910978865c8af2747eed3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_4e73bb37ff2f5c0596d0be0dca6e5dc3daa0912f891910978865c8af2747eed3->leave($__internal_4e73bb37ff2f5c0596d0be0dca6e5dc3daa0912f891910978865c8af2747eed3_prof);

        
        $__internal_a5829182c136a0dd264dd6d973150c2c5fcd2660987c39fb9ee4c689c6699188->leave($__internal_a5829182c136a0dd264dd6d973150c2c5fcd2660987c39fb9ee4c689c6699188_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_578aeded476f9d67adb9a5623668e579195b7f6e1b081f96c2b6ea52363f4f44 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_578aeded476f9d67adb9a5623668e579195b7f6e1b081f96c2b6ea52363f4f44->enter($__internal_578aeded476f9d67adb9a5623668e579195b7f6e1b081f96c2b6ea52363f4f44_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_80316d88adedb4d0e12d1744286bd29793b6b02840f0311a9b7b3794dd2493c8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_80316d88adedb4d0e12d1744286bd29793b6b02840f0311a9b7b3794dd2493c8->enter($__internal_80316d88adedb4d0e12d1744286bd29793b6b02840f0311a9b7b3794dd2493c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_80316d88adedb4d0e12d1744286bd29793b6b02840f0311a9b7b3794dd2493c8->leave($__internal_80316d88adedb4d0e12d1744286bd29793b6b02840f0311a9b7b3794dd2493c8_prof);

        
        $__internal_578aeded476f9d67adb9a5623668e579195b7f6e1b081f96c2b6ea52363f4f44->leave($__internal_578aeded476f9d67adb9a5623668e579195b7f6e1b081f96c2b6ea52363f4f44_prof);

    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 11,  100 => 10,  83 => 6,  65 => 5,  53 => 12,  50 => 11,  48 => 10,  41 => 7,  39 => 6,  35 => 5,  29 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>{% block title %}Welcome!{% endblock %}</title>
        {% block stylesheets %}{% endblock %}
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
    </head>
    <body>
        {% block body %}{% endblock %}
        {% block javascripts %}{% endblock %}
    </body>
</html>
", "::base.html.twig", "/home/muszkin/public_html/szkolenie/app/Resources/views/base.html.twig");
    }
}
