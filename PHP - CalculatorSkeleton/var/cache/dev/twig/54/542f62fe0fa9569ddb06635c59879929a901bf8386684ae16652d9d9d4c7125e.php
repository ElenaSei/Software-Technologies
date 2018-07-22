<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_821c932b433677532fc8d44c9fde770f1e71a3b5309a5512d0594a8c8b11edd7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_506d045092b3e2e1c4ccc2bc650c2f8bde23b80285986c412819fd9088cc9527 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_506d045092b3e2e1c4ccc2bc650c2f8bde23b80285986c412819fd9088cc9527->enter($__internal_506d045092b3e2e1c4ccc2bc650c2f8bde23b80285986c412819fd9088cc9527_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $__internal_be6cd94ae8a9c8cc1abdb9e393352aa6512796bd626d4f42bdc8cb6be662870d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_be6cd94ae8a9c8cc1abdb9e393352aa6512796bd626d4f42bdc8cb6be662870d->enter($__internal_be6cd94ae8a9c8cc1abdb9e393352aa6512796bd626d4f42bdc8cb6be662870d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_506d045092b3e2e1c4ccc2bc650c2f8bde23b80285986c412819fd9088cc9527->leave($__internal_506d045092b3e2e1c4ccc2bc650c2f8bde23b80285986c412819fd9088cc9527_prof);

        
        $__internal_be6cd94ae8a9c8cc1abdb9e393352aa6512796bd626d4f42bdc8cb6be662870d->leave($__internal_be6cd94ae8a9c8cc1abdb9e393352aa6512796bd626d4f42bdc8cb6be662870d_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_f4779de6e9257a4b69bda7d0a09ce04a9b9bfb881165d3e752cb0fa0e01dd53a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f4779de6e9257a4b69bda7d0a09ce04a9b9bfb881165d3e752cb0fa0e01dd53a->enter($__internal_f4779de6e9257a4b69bda7d0a09ce04a9b9bfb881165d3e752cb0fa0e01dd53a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_5f4edf9c2c9eb1fc2b93a7551ae43044f55f77ccce8fcb0a240350bc9288e798 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5f4edf9c2c9eb1fc2b93a7551ae43044f55f77ccce8fcb0a240350bc9288e798->enter($__internal_5f4edf9c2c9eb1fc2b93a7551ae43044f55f77ccce8fcb0a240350bc9288e798_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
";
        
        $__internal_5f4edf9c2c9eb1fc2b93a7551ae43044f55f77ccce8fcb0a240350bc9288e798->leave($__internal_5f4edf9c2c9eb1fc2b93a7551ae43044f55f77ccce8fcb0a240350bc9288e798_prof);

        
        $__internal_f4779de6e9257a4b69bda7d0a09ce04a9b9bfb881165d3e752cb0fa0e01dd53a->leave($__internal_f4779de6e9257a4b69bda7d0a09ce04a9b9bfb881165d3e752cb0fa0e01dd53a_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_22c8449944b760f4887f9d21abf51aa1dbfb6990cb28af726eed251c58724d64 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_22c8449944b760f4887f9d21abf51aa1dbfb6990cb28af726eed251c58724d64->enter($__internal_22c8449944b760f4887f9d21abf51aa1dbfb6990cb28af726eed251c58724d64_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_4feada669f2a37c7a7118237c6a5353a2e37bb832f59efb22675da1062619455 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4feada669f2a37c7a7118237c6a5353a2e37bb832f59efb22675da1062619455->enter($__internal_4feada669f2a37c7a7118237c6a5353a2e37bb832f59efb22675da1062619455_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_4feada669f2a37c7a7118237c6a5353a2e37bb832f59efb22675da1062619455->leave($__internal_4feada669f2a37c7a7118237c6a5353a2e37bb832f59efb22675da1062619455_prof);

        
        $__internal_22c8449944b760f4887f9d21abf51aa1dbfb6990cb28af726eed251c58724d64->leave($__internal_22c8449944b760f4887f9d21abf51aa1dbfb6990cb28af726eed251c58724d64_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_f03171bd18f330e44df4c9bd132fb5e613e68ac973e47e7d7174e09026dd00e6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f03171bd18f330e44df4c9bd132fb5e613e68ac973e47e7d7174e09026dd00e6->enter($__internal_f03171bd18f330e44df4c9bd132fb5e613e68ac973e47e7d7174e09026dd00e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_d8dd4edcb9eb77df9cafa2c6c038993244f5d459b4ce57406710bc98a1707ba3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d8dd4edcb9eb77df9cafa2c6c038993244f5d459b4ce57406710bc98a1707ba3->enter($__internal_d8dd4edcb9eb77df9cafa2c6c038993244f5d459b4ce57406710bc98a1707ba3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 141)->display($context);
        
        $__internal_d8dd4edcb9eb77df9cafa2c6c038993244f5d459b4ce57406710bc98a1707ba3->leave($__internal_d8dd4edcb9eb77df9cafa2c6c038993244f5d459b4ce57406710bc98a1707ba3_prof);

        
        $__internal_f03171bd18f330e44df4c9bd132fb5e613e68ac973e47e7d7174e09026dd00e6->leave($__internal_f03171bd18f330e44df4c9bd132fb5e613e68ac973e47e7d7174e09026dd00e6_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  226 => 141,  217 => 140,  200 => 137,  191 => 136,  51 => 4,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block head %}
    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
", "@Twig/Exception/exception_full.html.twig", "/Volumes/Val/Programming/GitHub/Software-Technologies/PHP - CalculatorSkeleton/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}
