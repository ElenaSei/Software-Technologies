<?php

/* @Twig/layout.html.twig */
class __TwigTemplate_1b5011629e868b1bb00d919827ce14d0a0ee1e6b26eba708cf28c6c3b12a403a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f34d41dfbecf694b5df35cbfc385b2fceffba6aa16b067ada3d7d6d64765e956 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f34d41dfbecf694b5df35cbfc385b2fceffba6aa16b067ada3d7d6d64765e956->enter($__internal_f34d41dfbecf694b5df35cbfc385b2fceffba6aa16b067ada3d7d6d64765e956_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        $__internal_fb4164e15501aa86be79219525636b9a4e528eea8f92e29ae76779ab1db0615f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fb4164e15501aa86be79219525636b9a4e528eea8f92e29ae76779ab1db0615f->enter($__internal_fb4164e15501aa86be79219525636b9a4e528eea8f92e29ae76779ab1db0615f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\" />
        <title>";
        // line 7
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 8
        echo twig_include($this->env, $context, "@Twig/images/favicon.png.base64");
        echo "\">
        <style>";
        // line 9
        echo twig_include($this->env, $context, "@Twig/exception.css.twig");
        echo "</style>
        ";
        // line 10
        $this->displayBlock('head', $context, $blocks);
        // line 11
        echo "    </head>
    <body>
        <header>
            <div class=\"container\">
                <h1 class=\"logo\">";
        // line 15
        echo twig_include($this->env, $context, "@Twig/images/symfony-logo.svg");
        echo " Symfony Exception</h1>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/doc\">
                        <span class=\"icon\">";
        // line 19
        echo twig_include($this->env, $context, "@Twig/images/icon-book.svg");
        echo "</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Docs
                    </a>
                </div>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/support\">
                        <span class=\"icon\">";
        // line 26
        echo twig_include($this->env, $context, "@Twig/images/icon-support.svg");
        echo "</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Support
                    </a>
                </div>
            </div>
        </header>

        ";
        // line 33
        $this->displayBlock('body', $context, $blocks);
        // line 34
        echo "        ";
        echo twig_include($this->env, $context, "@Twig/base_js.html.twig");
        echo "
    </body>
</html>
";
        
        $__internal_f34d41dfbecf694b5df35cbfc385b2fceffba6aa16b067ada3d7d6d64765e956->leave($__internal_f34d41dfbecf694b5df35cbfc385b2fceffba6aa16b067ada3d7d6d64765e956_prof);

        
        $__internal_fb4164e15501aa86be79219525636b9a4e528eea8f92e29ae76779ab1db0615f->leave($__internal_fb4164e15501aa86be79219525636b9a4e528eea8f92e29ae76779ab1db0615f_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_c6496a49c497837ba113c41a47d285361f34ff125b2fa93281460b39f23fea94 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c6496a49c497837ba113c41a47d285361f34ff125b2fa93281460b39f23fea94->enter($__internal_c6496a49c497837ba113c41a47d285361f34ff125b2fa93281460b39f23fea94_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_01b980f87ff67fdfec1df0f13c4f53f2e97defbfb25faa47c07c5f49911f028e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_01b980f87ff67fdfec1df0f13c4f53f2e97defbfb25faa47c07c5f49911f028e->enter($__internal_01b980f87ff67fdfec1df0f13c4f53f2e97defbfb25faa47c07c5f49911f028e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_01b980f87ff67fdfec1df0f13c4f53f2e97defbfb25faa47c07c5f49911f028e->leave($__internal_01b980f87ff67fdfec1df0f13c4f53f2e97defbfb25faa47c07c5f49911f028e_prof);

        
        $__internal_c6496a49c497837ba113c41a47d285361f34ff125b2fa93281460b39f23fea94->leave($__internal_c6496a49c497837ba113c41a47d285361f34ff125b2fa93281460b39f23fea94_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_6a7317b8515bf7a70e204b943c8d3905940beb20b695c7fcd847a9f921d33b9f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6a7317b8515bf7a70e204b943c8d3905940beb20b695c7fcd847a9f921d33b9f->enter($__internal_6a7317b8515bf7a70e204b943c8d3905940beb20b695c7fcd847a9f921d33b9f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_173a280adfb49a2997e7f641992ca6c623f5a6da1f948ef0b23ee08a3def6b3e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_173a280adfb49a2997e7f641992ca6c623f5a6da1f948ef0b23ee08a3def6b3e->enter($__internal_173a280adfb49a2997e7f641992ca6c623f5a6da1f948ef0b23ee08a3def6b3e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_173a280adfb49a2997e7f641992ca6c623f5a6da1f948ef0b23ee08a3def6b3e->leave($__internal_173a280adfb49a2997e7f641992ca6c623f5a6da1f948ef0b23ee08a3def6b3e_prof);

        
        $__internal_6a7317b8515bf7a70e204b943c8d3905940beb20b695c7fcd847a9f921d33b9f->leave($__internal_6a7317b8515bf7a70e204b943c8d3905940beb20b695c7fcd847a9f921d33b9f_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_c31c213a913cfa91beca9d31203da8ef6e9b793d203c59e3531ffed1733a89e7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c31c213a913cfa91beca9d31203da8ef6e9b793d203c59e3531ffed1733a89e7->enter($__internal_c31c213a913cfa91beca9d31203da8ef6e9b793d203c59e3531ffed1733a89e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_240e0908b9f36f98d3c0ce4c842704202f0584157b7f2f0f33ba12333519e6d5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_240e0908b9f36f98d3c0ce4c842704202f0584157b7f2f0f33ba12333519e6d5->enter($__internal_240e0908b9f36f98d3c0ce4c842704202f0584157b7f2f0f33ba12333519e6d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_240e0908b9f36f98d3c0ce4c842704202f0584157b7f2f0f33ba12333519e6d5->leave($__internal_240e0908b9f36f98d3c0ce4c842704202f0584157b7f2f0f33ba12333519e6d5_prof);

        
        $__internal_c31c213a913cfa91beca9d31203da8ef6e9b793d203c59e3531ffed1733a89e7->leave($__internal_c31c213a913cfa91beca9d31203da8ef6e9b793d203c59e3531ffed1733a89e7_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  137 => 33,  120 => 10,  103 => 7,  88 => 34,  86 => 33,  76 => 26,  66 => 19,  59 => 15,  53 => 11,  51 => 10,  47 => 9,  43 => 8,  39 => 7,  33 => 4,  28 => 1,);
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
        <meta charset=\"{{ _charset }}\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\" />
        <title>{% block title %}{% endblock %}</title>
        <link rel=\"icon\" type=\"image/png\" href=\"{{ include('@Twig/images/favicon.png.base64') }}\">
        <style>{{ include('@Twig/exception.css.twig') }}</style>
        {% block head %}{% endblock %}
    </head>
    <body>
        <header>
            <div class=\"container\">
                <h1 class=\"logo\">{{ include('@Twig/images/symfony-logo.svg') }} Symfony Exception</h1>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/doc\">
                        <span class=\"icon\">{{ include('@Twig/images/icon-book.svg') }}</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Docs
                    </a>
                </div>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/support\">
                        <span class=\"icon\">{{ include('@Twig/images/icon-support.svg') }}</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Support
                    </a>
                </div>
            </div>
        </header>

        {% block body %}{% endblock %}
        {{ include('@Twig/base_js.html.twig') }}
    </body>
</html>
", "@Twig/layout.html.twig", "/Volumes/Val/Programming/GitHub/Software-Technologies/PHP - CalculatorSkeleton/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/layout.html.twig");
    }
}
