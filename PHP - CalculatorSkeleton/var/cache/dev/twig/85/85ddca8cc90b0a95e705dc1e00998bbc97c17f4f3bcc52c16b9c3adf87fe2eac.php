<?php

/* calculator/index.html.twig */
class __TwigTemplate_3b36aa7162a5d4f6335e83013dfda759fe71a3eaf1ca3baa2ad9d72fc63036a8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "calculator/index.html.twig", 1);
        $this->blocks = array(
            'main' => array($this, 'block_main'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_2836eb3ff64feb8e7c538f188b90a51229d73bd857240d6d6b964272dfb03ea6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2836eb3ff64feb8e7c538f188b90a51229d73bd857240d6d6b964272dfb03ea6->enter($__internal_2836eb3ff64feb8e7c538f188b90a51229d73bd857240d6d6b964272dfb03ea6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "calculator/index.html.twig"));

        $__internal_f8a4582cebf04c57697e2defbdb7466a875b00e532355e3b732a3698b9b8c7c0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f8a4582cebf04c57697e2defbdb7466a875b00e532355e3b732a3698b9b8c7c0->enter($__internal_f8a4582cebf04c57697e2defbdb7466a875b00e532355e3b732a3698b9b8c7c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "calculator/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2836eb3ff64feb8e7c538f188b90a51229d73bd857240d6d6b964272dfb03ea6->leave($__internal_2836eb3ff64feb8e7c538f188b90a51229d73bd857240d6d6b964272dfb03ea6_prof);

        
        $__internal_f8a4582cebf04c57697e2defbdb7466a875b00e532355e3b732a3698b9b8c7c0->leave($__internal_f8a4582cebf04c57697e2defbdb7466a875b00e532355e3b732a3698b9b8c7c0_prof);

    }

    // line 3
    public function block_main($context, array $blocks = array())
    {
        $__internal_a4fd3ebb5f681dbbea6b21d896928573a5b777fc956a4f5d71f46f9017cd2e86 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a4fd3ebb5f681dbbea6b21d896928573a5b777fc956a4f5d71f46f9017cd2e86->enter($__internal_a4fd3ebb5f681dbbea6b21d896928573a5b777fc956a4f5d71f46f9017cd2e86_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        $__internal_d2c53258aec30f438d3ac668b0d1617cff162199463508f23fd916bf68d1c0e4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d2c53258aec30f438d3ac668b0d1617cff162199463508f23fd916bf68d1c0e4->enter($__internal_d2c53258aec30f438d3ac668b0d1617cff162199463508f23fd916bf68d1c0e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        // line 4
        echo "    <div class=\"container body-content span=8 offset=2\">
        <div class=\"well\">
            <form class=\"form-inline\" action=\"";
        // line 6
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("index");
        echo "\" method=\"POST\">
                <fieldset>
                    <div class=\"form-group\">
                        <div class=\"col-sm-1 \">
                            <input type=\"number\" class=\"form-control\" id=\"leftOperand\" placeholder=\"Left Operand\"
                                   name=\"calculator[leftOperand]\" value=\"";
        // line 11
        echo twig_escape_filter($this->env, ((($this->getAttribute(($context["calculator"] ?? null), "leftOperand", array(), "any", true, true) &&  !(null === $this->getAttribute(($context["calculator"] ?? null), "leftOperand", array())))) ? ($this->getAttribute(($context["calculator"] ?? null), "leftOperand", array())) : ("")), "html", null, true);
        echo "\">
                        </div>
                    </div>

                    <div class=\"form-group\">
                        <div class=\"col-sm-4 \">
                            <select class=\"form-control\" name=\"calculator[operator]\">
                                <option value=\"+\" ";
        // line 18
        echo (((array_key_exists("calculator", $context) && ($this->getAttribute(($context["calculator"] ?? $this->getContext($context, "calculator")), "operator", array()) == "+"))) ? ("selected") : (""));
        echo ">+</option>
                                <option value=\"-\" ";
        // line 19
        echo (((array_key_exists("calculator", $context) && ($this->getAttribute(($context["calculator"] ?? $this->getContext($context, "calculator")), "operator", array()) == "-"))) ? ("selected") : (""));
        echo ">-</option>
                                <option value=\"*\" ";
        // line 20
        echo (((array_key_exists("calculator", $context) && ($this->getAttribute(($context["calculator"] ?? $this->getContext($context, "calculator")), "operator", array()) == "*"))) ? ("selected") : (""));
        echo ">*</option>
                                <option value=\"/\" ";
        // line 21
        echo (((array_key_exists("calculator", $context) && ($this->getAttribute(($context["calculator"] ?? $this->getContext($context, "calculator")), "operator", array()) == "/"))) ? ("selected") : (""));
        echo ">/</option>
                                <option value=\"^\" ";
        // line 22
        echo (((array_key_exists("calculator", $context) && ($this->getAttribute(($context["calculator"] ?? $this->getContext($context, "calculator")), "operator", array()) == "^"))) ? ("selected") : (""));
        echo ">^</option>
                            </select>
                        </div>
                    </div>

                    <div class=\"form-group\">
                        <div class=\"col-sm-4 \">
                            <input type=\"number\" class=\"form-control\" id=\"rightOperand\" placeholder=\"Right Operand\"
                                   name=\"calculator[rightOperand]\" value=\"";
        // line 30
        echo twig_escape_filter($this->env, ((($this->getAttribute(($context["calculator"] ?? null), "rightOperand", array(), "any", true, true) &&  !(null === $this->getAttribute(($context["calculator"] ?? null), "rightOperand", array())))) ? ($this->getAttribute(($context["calculator"] ?? null), "rightOperand", array())) : ("")), "html", null, true);
        echo "\">
                        </div>
                    </div>

                    <div class=\"form-group\">
                        <div class=\"col-sm-2 \">
                            <p>=</p>
                        </div>
                    </div>

                    <div class=\"form-group\">
                        <div class=\"col-sm-4 \">
                            <input type=\"text\" class=\"form-control\" id=\"result\" placeholder=\"Result\"
                                   name=\"result\" value=\"";
        // line 43
        echo twig_escape_filter($this->env, (($context["result"]) ?? ("")), "html", null, true);
        echo "\" readonly>
                        </div>
                    </div>

                    <div class=\"form-group\">
                        <div class=\"col-sm-4 col-sm-offset-4\">
                            <button type=\"submit\" class=\"btn btn-primary\">Calculate</button>
                        </div>
                    </div>
                </fieldset>
            </form>
        </div>
    </div>
";
        
        $__internal_d2c53258aec30f438d3ac668b0d1617cff162199463508f23fd916bf68d1c0e4->leave($__internal_d2c53258aec30f438d3ac668b0d1617cff162199463508f23fd916bf68d1c0e4_prof);

        
        $__internal_a4fd3ebb5f681dbbea6b21d896928573a5b777fc956a4f5d71f46f9017cd2e86->leave($__internal_a4fd3ebb5f681dbbea6b21d896928573a5b777fc956a4f5d71f46f9017cd2e86_prof);

    }

    public function getTemplateName()
    {
        return "calculator/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  114 => 43,  98 => 30,  87 => 22,  83 => 21,  79 => 20,  75 => 19,  71 => 18,  61 => 11,  53 => 6,  49 => 4,  40 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block main %}
    <div class=\"container body-content span=8 offset=2\">
        <div class=\"well\">
            <form class=\"form-inline\" action=\"{{ path('index') }}\" method=\"POST\">
                <fieldset>
                    <div class=\"form-group\">
                        <div class=\"col-sm-1 \">
                            <input type=\"number\" class=\"form-control\" id=\"leftOperand\" placeholder=\"Left Operand\"
                                   name=\"calculator[leftOperand]\" value=\"{{ calculator.leftOperand ?? '' }}\">
                        </div>
                    </div>

                    <div class=\"form-group\">
                        <div class=\"col-sm-4 \">
                            <select class=\"form-control\" name=\"calculator[operator]\">
                                <option value=\"+\" {{ calculator is defined and calculator.operator == '+' ? 'selected' : '' }}>+</option>
                                <option value=\"-\" {{ calculator is defined and calculator.operator == '-' ? 'selected' : '' }}>-</option>
                                <option value=\"*\" {{ calculator is defined and calculator.operator == '*' ? 'selected' : '' }}>*</option>
                                <option value=\"/\" {{ calculator is defined and calculator.operator == '/' ? 'selected' : '' }}>/</option>
                                <option value=\"^\" {{ calculator is defined and calculator.operator == '^' ? 'selected' : '' }}>^</option>
                            </select>
                        </div>
                    </div>

                    <div class=\"form-group\">
                        <div class=\"col-sm-4 \">
                            <input type=\"number\" class=\"form-control\" id=\"rightOperand\" placeholder=\"Right Operand\"
                                   name=\"calculator[rightOperand]\" value=\"{{ calculator.rightOperand ?? '' }}\">
                        </div>
                    </div>

                    <div class=\"form-group\">
                        <div class=\"col-sm-2 \">
                            <p>=</p>
                        </div>
                    </div>

                    <div class=\"form-group\">
                        <div class=\"col-sm-4 \">
                            <input type=\"text\" class=\"form-control\" id=\"result\" placeholder=\"Result\"
                                   name=\"result\" value=\"{{ result ?? '' }}\" readonly>
                        </div>
                    </div>

                    <div class=\"form-group\">
                        <div class=\"col-sm-4 col-sm-offset-4\">
                            <button type=\"submit\" class=\"btn btn-primary\">Calculate</button>
                        </div>
                    </div>
                </fieldset>
            </form>
        </div>
    </div>
{% endblock %}
", "calculator/index.html.twig", "/Volumes/Val/Programming/GitHub/Software-Technologies/PHP - CalculatorSkeleton/app/Resources/views/calculator/index.html.twig");
    }
}
