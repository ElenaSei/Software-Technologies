<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_f02b750e751757696878949059e1a10793bea012a080c0a67a3273b33d08a584 extends Twig_Template
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
        $__internal_54f2a9fb446fc6be59a96da859cebfa208cb3b2c92c12febd3a57c786ef7de96 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_54f2a9fb446fc6be59a96da859cebfa208cb3b2c92c12febd3a57c786ef7de96->enter($__internal_54f2a9fb446fc6be59a96da859cebfa208cb3b2c92c12febd3a57c786ef7de96_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_f33242867e2a253e908679683758e046598aefe3508150b12fe9b3a65c75b28e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f33242867e2a253e908679683758e046598aefe3508150b12fe9b3a65c75b28e->enter($__internal_f33242867e2a253e908679683758e046598aefe3508150b12fe9b3a65c75b28e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_54f2a9fb446fc6be59a96da859cebfa208cb3b2c92c12febd3a57c786ef7de96->leave($__internal_54f2a9fb446fc6be59a96da859cebfa208cb3b2c92c12febd3a57c786ef7de96_prof);

        
        $__internal_f33242867e2a253e908679683758e046598aefe3508150b12fe9b3a65c75b28e->leave($__internal_f33242867e2a253e908679683758e046598aefe3508150b12fe9b3a65c75b28e_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_77ef6f0696fa7fc2af9ddbc03cd671b19a04e04c2c8af203baf44f173792a0bc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_77ef6f0696fa7fc2af9ddbc03cd671b19a04e04c2c8af203baf44f173792a0bc->enter($__internal_77ef6f0696fa7fc2af9ddbc03cd671b19a04e04c2c8af203baf44f173792a0bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_5f3eb9db49e0b3b004133d35bd2446d452206e4ff5affcb467b605588dc47f2a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5f3eb9db49e0b3b004133d35bd2446d452206e4ff5affcb467b605588dc47f2a->enter($__internal_5f3eb9db49e0b3b004133d35bd2446d452206e4ff5affcb467b605588dc47f2a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_5f3eb9db49e0b3b004133d35bd2446d452206e4ff5affcb467b605588dc47f2a->leave($__internal_5f3eb9db49e0b3b004133d35bd2446d452206e4ff5affcb467b605588dc47f2a_prof);

        
        $__internal_77ef6f0696fa7fc2af9ddbc03cd671b19a04e04c2c8af203baf44f173792a0bc->leave($__internal_77ef6f0696fa7fc2af9ddbc03cd671b19a04e04c2c8af203baf44f173792a0bc_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_c205a2f5bf49356349166ddd3c7168dcc98ab474db83e4f8c44331ec7fce4324 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c205a2f5bf49356349166ddd3c7168dcc98ab474db83e4f8c44331ec7fce4324->enter($__internal_c205a2f5bf49356349166ddd3c7168dcc98ab474db83e4f8c44331ec7fce4324_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_026e38cc3bc5c25861020702501c6503d9c4326fc5296f8f01f64f4b002a1012 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_026e38cc3bc5c25861020702501c6503d9c4326fc5296f8f01f64f4b002a1012->enter($__internal_026e38cc3bc5c25861020702501c6503d9c4326fc5296f8f01f64f4b002a1012_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_026e38cc3bc5c25861020702501c6503d9c4326fc5296f8f01f64f4b002a1012->leave($__internal_026e38cc3bc5c25861020702501c6503d9c4326fc5296f8f01f64f4b002a1012_prof);

        
        $__internal_c205a2f5bf49356349166ddd3c7168dcc98ab474db83e4f8c44331ec7fce4324->leave($__internal_c205a2f5bf49356349166ddd3c7168dcc98ab474db83e4f8c44331ec7fce4324_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_7cbf77a24028f96c06e60ef8b6c8fb421668c6884f3cd4d08cbf93aaf08b9410 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7cbf77a24028f96c06e60ef8b6c8fb421668c6884f3cd4d08cbf93aaf08b9410->enter($__internal_7cbf77a24028f96c06e60ef8b6c8fb421668c6884f3cd4d08cbf93aaf08b9410_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_e6ca1bd3a2bba7df03974ef46c33a773a41f726e52756f48289ab713e4699cba = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e6ca1bd3a2bba7df03974ef46c33a773a41f726e52756f48289ab713e4699cba->enter($__internal_e6ca1bd3a2bba7df03974ef46c33a773a41f726e52756f48289ab713e4699cba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_e6ca1bd3a2bba7df03974ef46c33a773a41f726e52756f48289ab713e4699cba->leave($__internal_e6ca1bd3a2bba7df03974ef46c33a773a41f726e52756f48289ab713e4699cba_prof);

        
        $__internal_7cbf77a24028f96c06e60ef8b6c8fb421668c6884f3cd4d08cbf93aaf08b9410->leave($__internal_7cbf77a24028f96c06e60ef8b6c8fb421668c6884f3cd4d08cbf93aaf08b9410_prof);

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
", "@WebProfiler/Collector/router.html.twig", "/Volumes/Val/Programming/GitHub/Software-Technologies/PHP - CalculatorSkeleton/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
