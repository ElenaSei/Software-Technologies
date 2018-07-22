<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_9f132a8e90aaa7003ff94dec52570dc02c50d2fd637a8c45911b29a44329eb0d extends Twig_Template
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
        $__internal_3b3a85e74865995725da8fffb9498209c17892fff7124c2ac1136dd5bfbfd2b1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3b3a85e74865995725da8fffb9498209c17892fff7124c2ac1136dd5bfbfd2b1->enter($__internal_3b3a85e74865995725da8fffb9498209c17892fff7124c2ac1136dd5bfbfd2b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_f2f1bf404218fac6d65c02cbd0ddc85d8408795bbdfdde8e8e06ecb1dce6c1d0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f2f1bf404218fac6d65c02cbd0ddc85d8408795bbdfdde8e8e06ecb1dce6c1d0->enter($__internal_f2f1bf404218fac6d65c02cbd0ddc85d8408795bbdfdde8e8e06ecb1dce6c1d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3b3a85e74865995725da8fffb9498209c17892fff7124c2ac1136dd5bfbfd2b1->leave($__internal_3b3a85e74865995725da8fffb9498209c17892fff7124c2ac1136dd5bfbfd2b1_prof);

        
        $__internal_f2f1bf404218fac6d65c02cbd0ddc85d8408795bbdfdde8e8e06ecb1dce6c1d0->leave($__internal_f2f1bf404218fac6d65c02cbd0ddc85d8408795bbdfdde8e8e06ecb1dce6c1d0_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_6249b139b7787e7dacf6ab26afd0164c7a093d847efd0e1890d0e9229a22a368 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6249b139b7787e7dacf6ab26afd0164c7a093d847efd0e1890d0e9229a22a368->enter($__internal_6249b139b7787e7dacf6ab26afd0164c7a093d847efd0e1890d0e9229a22a368_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_8c49835ee02c1a9305791890a6204f1c352e93be576313636640c2d16d64cec0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8c49835ee02c1a9305791890a6204f1c352e93be576313636640c2d16d64cec0->enter($__internal_8c49835ee02c1a9305791890a6204f1c352e93be576313636640c2d16d64cec0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_8c49835ee02c1a9305791890a6204f1c352e93be576313636640c2d16d64cec0->leave($__internal_8c49835ee02c1a9305791890a6204f1c352e93be576313636640c2d16d64cec0_prof);

        
        $__internal_6249b139b7787e7dacf6ab26afd0164c7a093d847efd0e1890d0e9229a22a368->leave($__internal_6249b139b7787e7dacf6ab26afd0164c7a093d847efd0e1890d0e9229a22a368_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_eaefd33b2e29e702216ca89926129f3f18c363e92c5bd5102da511060e27f3da = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_eaefd33b2e29e702216ca89926129f3f18c363e92c5bd5102da511060e27f3da->enter($__internal_eaefd33b2e29e702216ca89926129f3f18c363e92c5bd5102da511060e27f3da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_49ee7c52bfe9874d65260224fc07f79fc9c27821f2fd0336438e3fc9a50d4975 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_49ee7c52bfe9874d65260224fc07f79fc9c27821f2fd0336438e3fc9a50d4975->enter($__internal_49ee7c52bfe9874d65260224fc07f79fc9c27821f2fd0336438e3fc9a50d4975_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_49ee7c52bfe9874d65260224fc07f79fc9c27821f2fd0336438e3fc9a50d4975->leave($__internal_49ee7c52bfe9874d65260224fc07f79fc9c27821f2fd0336438e3fc9a50d4975_prof);

        
        $__internal_eaefd33b2e29e702216ca89926129f3f18c363e92c5bd5102da511060e27f3da->leave($__internal_eaefd33b2e29e702216ca89926129f3f18c363e92c5bd5102da511060e27f3da_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_395449d126b2c013d52db3711592a84db5202452d96e8da80f73d42c52331cd7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_395449d126b2c013d52db3711592a84db5202452d96e8da80f73d42c52331cd7->enter($__internal_395449d126b2c013d52db3711592a84db5202452d96e8da80f73d42c52331cd7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_25d0ac03c1ecadb11446c9657665de1274c012a9fe510cf731051ec821c59b8f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_25d0ac03c1ecadb11446c9657665de1274c012a9fe510cf731051ec821c59b8f->enter($__internal_25d0ac03c1ecadb11446c9657665de1274c012a9fe510cf731051ec821c59b8f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_25d0ac03c1ecadb11446c9657665de1274c012a9fe510cf731051ec821c59b8f->leave($__internal_25d0ac03c1ecadb11446c9657665de1274c012a9fe510cf731051ec821c59b8f_prof);

        
        $__internal_395449d126b2c013d52db3711592a84db5202452d96e8da80f73d42c52331cd7->leave($__internal_395449d126b2c013d52db3711592a84db5202452d96e8da80f73d42c52331cd7_prof);

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
", "@WebProfiler/Collector/exception.html.twig", "/Volumes/Val/Programming/GitHub/Software-Technologies/PHP - CalculatorSkeleton/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/exception.html.twig");
    }
}
