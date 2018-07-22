<?php

/* @WebProfiler/Collector/ajax.html.twig */
class __TwigTemplate_d047e29216e996210d9bd1e8c59a20111d53fc949bd35509bbe67cf816cd1ca7 extends Twig_Template
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
        $__internal_c4db5cda782a6a7502f5fc4192d231a3745e78c9b3f517dc010b64228ab3f444 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c4db5cda782a6a7502f5fc4192d231a3745e78c9b3f517dc010b64228ab3f444->enter($__internal_c4db5cda782a6a7502f5fc4192d231a3745e78c9b3f517dc010b64228ab3f444_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $__internal_7656120b893cb80bc57ffa33122e515255f151f971a04ea8ecf5ecf9514d49f6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7656120b893cb80bc57ffa33122e515255f151f971a04ea8ecf5ecf9514d49f6->enter($__internal_7656120b893cb80bc57ffa33122e515255f151f971a04ea8ecf5ecf9514d49f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c4db5cda782a6a7502f5fc4192d231a3745e78c9b3f517dc010b64228ab3f444->leave($__internal_c4db5cda782a6a7502f5fc4192d231a3745e78c9b3f517dc010b64228ab3f444_prof);

        
        $__internal_7656120b893cb80bc57ffa33122e515255f151f971a04ea8ecf5ecf9514d49f6->leave($__internal_7656120b893cb80bc57ffa33122e515255f151f971a04ea8ecf5ecf9514d49f6_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_a87e4bf8a2a05b35499c05f76c25e3f1ddce3daaa1522e7b9a4a9196cbf91005 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a87e4bf8a2a05b35499c05f76c25e3f1ddce3daaa1522e7b9a4a9196cbf91005->enter($__internal_a87e4bf8a2a05b35499c05f76c25e3f1ddce3daaa1522e7b9a4a9196cbf91005_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_8e3acc494f847ab6f470cac26eb0fbeb74832026dd079f9d14c7b02ee41d57cb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8e3acc494f847ab6f470cac26eb0fbeb74832026dd079f9d14c7b02ee41d57cb->enter($__internal_8e3acc494f847ab6f470cac26eb0fbeb74832026dd079f9d14c7b02ee41d57cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        // line 4
        echo "    ";
        ob_start();
        // line 5
        echo "        ";
        echo twig_include($this->env, $context, "@WebProfiler/Icon/ajax.svg");
        echo "
        <span class=\"sf-toolbar-value sf-toolbar-ajax-request-counter\">0</span>
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
        
        $__internal_8e3acc494f847ab6f470cac26eb0fbeb74832026dd079f9d14c7b02ee41d57cb->leave($__internal_8e3acc494f847ab6f470cac26eb0fbeb74832026dd079f9d14c7b02ee41d57cb_prof);

        
        $__internal_a87e4bf8a2a05b35499c05f76c25e3f1ddce3daaa1522e7b9a4a9196cbf91005->leave($__internal_a87e4bf8a2a05b35499c05f76c25e3f1ddce3daaa1522e7b9a4a9196cbf91005_prof);

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
        <span class=\"sf-toolbar-value sf-toolbar-ajax-request-counter\">0</span>
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
", "@WebProfiler/Collector/ajax.html.twig", "/Volumes/Val/Programming/GitHub/Software-Technologies/PHP - CalculatorSkeleton/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/ajax.html.twig");
    }
}
