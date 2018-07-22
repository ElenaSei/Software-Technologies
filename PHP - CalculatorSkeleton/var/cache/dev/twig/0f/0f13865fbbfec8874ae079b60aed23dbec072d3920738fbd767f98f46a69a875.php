<?php

/* base.html.twig */
class __TwigTemplate_3e7995f1086c8385b0fd8e6c7f54f180957ed16b88ce845759c389839cc6a2f6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body_id' => array($this, 'block_body_id'),
            'header' => array($this, 'block_header'),
            'body' => array($this, 'block_body'),
            'main' => array($this, 'block_main'),
            'footer' => array($this, 'block_footer'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ff793a59863c585081b369c7dec2e6c59172dd9196731aa5fa077195ae4074ff = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ff793a59863c585081b369c7dec2e6c59172dd9196731aa5fa077195ae4074ff->enter($__internal_ff793a59863c585081b369c7dec2e6c59172dd9196731aa5fa077195ae4074ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_e2ccb5935f642423cf0eb97c8f159b0cc2a9e294c7356bb47856b26ab88137b9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e2ccb5935f642423cf0eb97c8f159b0cc2a9e294c7356bb47856b26ab88137b9->enter($__internal_e2ccb5935f642423cf0eb97c8f159b0cc2a9e294c7356bb47856b26ab88137b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 6
        echo "<!DOCTYPE html>
<html lang=\"en-US\">
<head>
    <meta charset=\"UTF-8\"/>
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\"/>
    <title>";
        // line 11
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
    ";
        // line 12
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 16
        echo "    <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\"/>
</head>

<body id=\"";
        // line 19
        $this->displayBlock('body_id', $context, $blocks);
        echo "\">

";
        // line 21
        $this->displayBlock('header', $context, $blocks);
        // line 39
        echo "
<div class=\"container body-container\">
    ";
        // line 41
        $this->displayBlock('body', $context, $blocks);
        // line 48
        echo "</div>

";
        // line 50
        $this->displayBlock('footer', $context, $blocks);
        // line 57
        echo "
";
        // line 58
        $this->displayBlock('javascripts', $context, $blocks);
        // line 64
        echo "
</body>
</html>
";
        
        $__internal_ff793a59863c585081b369c7dec2e6c59172dd9196731aa5fa077195ae4074ff->leave($__internal_ff793a59863c585081b369c7dec2e6c59172dd9196731aa5fa077195ae4074ff_prof);

        
        $__internal_e2ccb5935f642423cf0eb97c8f159b0cc2a9e294c7356bb47856b26ab88137b9->leave($__internal_e2ccb5935f642423cf0eb97c8f159b0cc2a9e294c7356bb47856b26ab88137b9_prof);

    }

    // line 11
    public function block_title($context, array $blocks = array())
    {
        $__internal_ed08affec3445077bb2d6c3f978f6323e7ff18a7ea621da1253bf3c2d1a69990 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ed08affec3445077bb2d6c3f978f6323e7ff18a7ea621da1253bf3c2d1a69990->enter($__internal_ed08affec3445077bb2d6c3f978f6323e7ff18a7ea621da1253bf3c2d1a69990_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_2bd0d74f7ea70371797e4dac95c53584232589471beb28ee12600d36cdc9c77c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2bd0d74f7ea70371797e4dac95c53584232589471beb28ee12600d36cdc9c77c->enter($__internal_2bd0d74f7ea70371797e4dac95c53584232589471beb28ee12600d36cdc9c77c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Calculator";
        
        $__internal_2bd0d74f7ea70371797e4dac95c53584232589471beb28ee12600d36cdc9c77c->leave($__internal_2bd0d74f7ea70371797e4dac95c53584232589471beb28ee12600d36cdc9c77c_prof);

        
        $__internal_ed08affec3445077bb2d6c3f978f6323e7ff18a7ea621da1253bf3c2d1a69990->leave($__internal_ed08affec3445077bb2d6c3f978f6323e7ff18a7ea621da1253bf3c2d1a69990_prof);

    }

    // line 12
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_60ae96fc6f68f28f0906620dcb358268cff83551dbca1b193d2d8d02431c5f78 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_60ae96fc6f68f28f0906620dcb358268cff83551dbca1b193d2d8d02431c5f78->enter($__internal_60ae96fc6f68f28f0906620dcb358268cff83551dbca1b193d2d8d02431c5f78_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_0c85d8204069eafc7bc317f60c740f6ca223cdbaeb68429d601ee3630b6da9d9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0c85d8204069eafc7bc317f60c740f6ca223cdbaeb68429d601ee3630b6da9d9->enter($__internal_0c85d8204069eafc7bc317f60c740f6ca223cdbaeb68429d601ee3630b6da9d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 13
        echo "        <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/style.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/bootstrap-datetimepicker.min.css"), "html", null, true);
        echo "\">
    ";
        
        $__internal_0c85d8204069eafc7bc317f60c740f6ca223cdbaeb68429d601ee3630b6da9d9->leave($__internal_0c85d8204069eafc7bc317f60c740f6ca223cdbaeb68429d601ee3630b6da9d9_prof);

        
        $__internal_60ae96fc6f68f28f0906620dcb358268cff83551dbca1b193d2d8d02431c5f78->leave($__internal_60ae96fc6f68f28f0906620dcb358268cff83551dbca1b193d2d8d02431c5f78_prof);

    }

    // line 19
    public function block_body_id($context, array $blocks = array())
    {
        $__internal_3d7d75d21dca7b83ec2f1664bc2497c013520c2eaee80844d356ecb4e1b5ef2f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3d7d75d21dca7b83ec2f1664bc2497c013520c2eaee80844d356ecb4e1b5ef2f->enter($__internal_3d7d75d21dca7b83ec2f1664bc2497c013520c2eaee80844d356ecb4e1b5ef2f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_id"));

        $__internal_e89447a2a4f4d9a422007b2131d199f4868802115ce92cbbe3f5dc6772bd3f46 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e89447a2a4f4d9a422007b2131d199f4868802115ce92cbbe3f5dc6772bd3f46->enter($__internal_e89447a2a4f4d9a422007b2131d199f4868802115ce92cbbe3f5dc6772bd3f46_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_id"));

        
        $__internal_e89447a2a4f4d9a422007b2131d199f4868802115ce92cbbe3f5dc6772bd3f46->leave($__internal_e89447a2a4f4d9a422007b2131d199f4868802115ce92cbbe3f5dc6772bd3f46_prof);

        
        $__internal_3d7d75d21dca7b83ec2f1664bc2497c013520c2eaee80844d356ecb4e1b5ef2f->leave($__internal_3d7d75d21dca7b83ec2f1664bc2497c013520c2eaee80844d356ecb4e1b5ef2f_prof);

    }

    // line 21
    public function block_header($context, array $blocks = array())
    {
        $__internal_dfc574e4a82b38acf299fa97d563197bdcc258019366dc1a3493bc9957dd889a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dfc574e4a82b38acf299fa97d563197bdcc258019366dc1a3493bc9957dd889a->enter($__internal_dfc574e4a82b38acf299fa97d563197bdcc258019366dc1a3493bc9957dd889a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        $__internal_50586367f1481b3f5dba0eee52d968640d956034d83678f73c26add660968aa7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_50586367f1481b3f5dba0eee52d968640d956034d83678f73c26add660968aa7->enter($__internal_50586367f1481b3f5dba0eee52d968640d956034d83678f73c26add660968aa7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        // line 22
        echo "    <header>
        <div class=\"navbar navbar-default navbar-static-top\" role=\"navigation\">
            <div class=\"container\">
                <div class=\"navbar-header\">
                    <a href=\"";
        // line 26
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("index");
        echo "\" class=\"navbar-brand\">CALCULATOR</a>

                    <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\".navbar-collapse\">
                        <span class=\"icon-bar\"></span>
                        <span class=\"icon-bar\"></span>
                        <span class=\"icon-bar\"></span>
                    </button>
                </div>

            </div>
        </div>
    </header>
";
        
        $__internal_50586367f1481b3f5dba0eee52d968640d956034d83678f73c26add660968aa7->leave($__internal_50586367f1481b3f5dba0eee52d968640d956034d83678f73c26add660968aa7_prof);

        
        $__internal_dfc574e4a82b38acf299fa97d563197bdcc258019366dc1a3493bc9957dd889a->leave($__internal_dfc574e4a82b38acf299fa97d563197bdcc258019366dc1a3493bc9957dd889a_prof);

    }

    // line 41
    public function block_body($context, array $blocks = array())
    {
        $__internal_f2bad664685cfd22dd524901380aa3455e6a0a73d4408e813894cd61e9b1a860 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f2bad664685cfd22dd524901380aa3455e6a0a73d4408e813894cd61e9b1a860->enter($__internal_f2bad664685cfd22dd524901380aa3455e6a0a73d4408e813894cd61e9b1a860_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_1771312fb841ec277ddc32a70cc753d070707590964255fa2c97b7527ff8bfb5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1771312fb841ec277ddc32a70cc753d070707590964255fa2c97b7527ff8bfb5->enter($__internal_1771312fb841ec277ddc32a70cc753d070707590964255fa2c97b7527ff8bfb5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 42
        echo "        <div class=\"row\">
            <div id=\"main\" class=\"col-sm-9\">
                ";
        // line 44
        $this->displayBlock('main', $context, $blocks);
        // line 45
        echo "            </div>
        </div>
    ";
        
        $__internal_1771312fb841ec277ddc32a70cc753d070707590964255fa2c97b7527ff8bfb5->leave($__internal_1771312fb841ec277ddc32a70cc753d070707590964255fa2c97b7527ff8bfb5_prof);

        
        $__internal_f2bad664685cfd22dd524901380aa3455e6a0a73d4408e813894cd61e9b1a860->leave($__internal_f2bad664685cfd22dd524901380aa3455e6a0a73d4408e813894cd61e9b1a860_prof);

    }

    // line 44
    public function block_main($context, array $blocks = array())
    {
        $__internal_9f9af818c7ae4da176bfa106cc1097ecd317ea35a2190f6f9f9a4c0ca45baecb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9f9af818c7ae4da176bfa106cc1097ecd317ea35a2190f6f9f9a4c0ca45baecb->enter($__internal_9f9af818c7ae4da176bfa106cc1097ecd317ea35a2190f6f9f9a4c0ca45baecb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        $__internal_d88c8781054b0aa5350984cf6999d431d85516f65760770839b9213620ae677e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d88c8781054b0aa5350984cf6999d431d85516f65760770839b9213620ae677e->enter($__internal_d88c8781054b0aa5350984cf6999d431d85516f65760770839b9213620ae677e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        
        $__internal_d88c8781054b0aa5350984cf6999d431d85516f65760770839b9213620ae677e->leave($__internal_d88c8781054b0aa5350984cf6999d431d85516f65760770839b9213620ae677e_prof);

        
        $__internal_9f9af818c7ae4da176bfa106cc1097ecd317ea35a2190f6f9f9a4c0ca45baecb->leave($__internal_9f9af818c7ae4da176bfa106cc1097ecd317ea35a2190f6f9f9a4c0ca45baecb_prof);

    }

    // line 50
    public function block_footer($context, array $blocks = array())
    {
        $__internal_4cff66aca8dece828f66a1ca64d9c53aaf54e26c1338ac1b567638c483c66693 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4cff66aca8dece828f66a1ca64d9c53aaf54e26c1338ac1b567638c483c66693->enter($__internal_4cff66aca8dece828f66a1ca64d9c53aaf54e26c1338ac1b567638c483c66693_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        $__internal_dc3baed943e4c54178ec8bedbb70c8ebd411deb9ad29bee2cdc82b6597089ab9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dc3baed943e4c54178ec8bedbb70c8ebd411deb9ad29bee2cdc82b6597089ab9->enter($__internal_dc3baed943e4c54178ec8bedbb70c8ebd411deb9ad29bee2cdc82b6597089ab9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        // line 51
        echo "    <footer>
        <div class=\"container modal-footer\">
            <p>&copy; 2018 - Software University Foundation</p>
        </div>
    </footer>
";
        
        $__internal_dc3baed943e4c54178ec8bedbb70c8ebd411deb9ad29bee2cdc82b6597089ab9->leave($__internal_dc3baed943e4c54178ec8bedbb70c8ebd411deb9ad29bee2cdc82b6597089ab9_prof);

        
        $__internal_4cff66aca8dece828f66a1ca64d9c53aaf54e26c1338ac1b567638c483c66693->leave($__internal_4cff66aca8dece828f66a1ca64d9c53aaf54e26c1338ac1b567638c483c66693_prof);

    }

    // line 58
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_6db529305c8deefe49d6745323c4e098c33cc6d371ed6c2ed606daf92784c343 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6db529305c8deefe49d6745323c4e098c33cc6d371ed6c2ed606daf92784c343->enter($__internal_6db529305c8deefe49d6745323c4e098c33cc6d371ed6c2ed606daf92784c343_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_67ee9f3366a034ba0ae2cde84e3fc61d269b474ddef163f442d63e4e03efe4c5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_67ee9f3366a034ba0ae2cde84e3fc61d269b474ddef163f442d63e4e03efe4c5->enter($__internal_67ee9f3366a034ba0ae2cde84e3fc61d269b474ddef163f442d63e4e03efe4c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 59
        echo "    <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/jquery-2.2.4.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 60
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/moment.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 61
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/bootstrap.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 62
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/bootstrap-datetimepicker.min.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_67ee9f3366a034ba0ae2cde84e3fc61d269b474ddef163f442d63e4e03efe4c5->leave($__internal_67ee9f3366a034ba0ae2cde84e3fc61d269b474ddef163f442d63e4e03efe4c5_prof);

        
        $__internal_6db529305c8deefe49d6745323c4e098c33cc6d371ed6c2ed606daf92784c343->leave($__internal_6db529305c8deefe49d6745323c4e098c33cc6d371ed6c2ed606daf92784c343_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  279 => 62,  275 => 61,  271 => 60,  266 => 59,  257 => 58,  242 => 51,  233 => 50,  216 => 44,  204 => 45,  202 => 44,  198 => 42,  189 => 41,  166 => 26,  160 => 22,  151 => 21,  134 => 19,  122 => 14,  117 => 13,  108 => 12,  90 => 11,  77 => 64,  75 => 58,  72 => 57,  70 => 50,  66 => 48,  64 => 41,  60 => 39,  58 => 21,  53 => 19,  46 => 16,  44 => 12,  40 => 11,  33 => 6,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{#
   This is the base template used as the application layout which contains the
   common elements and decorates all the other templates.
   See http://symfony.com/doc/current/book/templating.html#template-inheritance-and-layouts
#}
<!DOCTYPE html>
<html lang=\"en-US\">
<head>
    <meta charset=\"UTF-8\"/>
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\"/>
    <title>{% block title %}Calculator{% endblock %}</title>
    {% block stylesheets %}
        <link rel=\"stylesheet\" href=\"{{ asset('css/style.css') }}\">
        <link rel=\"stylesheet\" href=\"{{ asset('css/bootstrap-datetimepicker.min.css') }}\">
    {% endblock %}
    <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\"/>
</head>

<body id=\"{% block body_id %}{% endblock %}\">

{% block header %}
    <header>
        <div class=\"navbar navbar-default navbar-static-top\" role=\"navigation\">
            <div class=\"container\">
                <div class=\"navbar-header\">
                    <a href=\"{{ path('index') }}\" class=\"navbar-brand\">CALCULATOR</a>

                    <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\".navbar-collapse\">
                        <span class=\"icon-bar\"></span>
                        <span class=\"icon-bar\"></span>
                        <span class=\"icon-bar\"></span>
                    </button>
                </div>

            </div>
        </div>
    </header>
{% endblock %}

<div class=\"container body-container\">
    {% block body %}
        <div class=\"row\">
            <div id=\"main\" class=\"col-sm-9\">
                {% block main %}{% endblock %}
            </div>
        </div>
    {% endblock %}
</div>

{% block footer %}
    <footer>
        <div class=\"container modal-footer\">
            <p>&copy; 2018 - Software University Foundation</p>
        </div>
    </footer>
{% endblock %}

{% block javascripts %}
    <script src=\"{{ asset('js/jquery-2.2.4.min.js') }}\"></script>
    <script src=\"{{ asset('js/moment.min.js') }}\"></script>
    <script src=\"{{ asset('js/bootstrap.js') }}\"></script>
    <script src=\"{{ asset('js/bootstrap-datetimepicker.min.js') }}\"></script>
{% endblock %}

</body>
</html>
", "base.html.twig", "/Volumes/Val/Programming/GitHub/Software-Technologies/PHP - CalculatorSkeleton/app/Resources/views/base.html.twig");
    }
}
