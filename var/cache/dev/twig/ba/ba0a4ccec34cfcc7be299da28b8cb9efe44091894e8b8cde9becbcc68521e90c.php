<?php

/* map/index.html.twig */
class __TwigTemplate_ddc87e2221eebffabc733a28a1fc9b48d46e115bae82d9e5044aa1ebca6c7de4 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "map/index.html.twig", 1);
        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "map/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "map/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 4
        echo "    <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/map.css"), "html", null, true);
        echo "\">
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 6
    public function block_body($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 7
        echo "
    <div class=\"container-fluid \">
        <h1>Map</h1>
        ";
        // line 10
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 10, $this->source); })()), "session", array()), "flashBag", array()), "has", array(0 => "success"), "method")) {
            // line 11
            echo "            <div class=\"alert alert-success\">
                ";
            // line 12
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 12, $this->source); })()), "session", array()), "flashBag", array()), "get", array(0 => "success"), "method"));
            foreach ($context['_seq'] as $context["_key"] => $context["msg"]) {
                // line 13
                echo "                    ";
                echo twig_escape_filter($this->env, $context["msg"], "html", null, true);
                echo "
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['msg'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 15
            echo "            </div>

        ";
        }
        // line 18
        echo "        ";
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 18, $this->source); })()), "session", array()), "flashBag", array()), "has", array(0 => "warning"), "method")) {
            // line 19
            echo "            <div class=\"alert alert-success\">
                ";
            // line 20
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 20, $this->source); })()), "session", array()), "flashBag", array()), "get", array(0 => "warning"), "method"));
            foreach ($context['_seq'] as $context["_key"] => $context["msg"]) {
                // line 21
                echo "                    ";
                echo twig_escape_filter($this->env, $context["msg"], "html", null, true);
                echo "
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['msg'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 23
            echo "            </div>

        ";
        }
        // line 26
        echo "        <div class=\"row\">
            <div class=\"col-xs-10\">
                <div class=\"map\">
                    ";
        // line 29
        if (twig_test_empty((isset($context["map"]) || array_key_exists("map", $context) ? $context["map"] : (function () { throw new Twig_Error_Runtime('Variable "map" does not exist.', 29, $this->source); })()))) {
            // line 30
            echo "                        <div class=\"alert alert-warning\">You are still on the firm ground, you have to loat fixtures first ! </div>
                    ";
        }
        // line 32
        echo "                    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(0, 6));
        foreach ($context['_seq'] as $context["_key"] => $context["y"]) {
            // line 33
            echo "                        <div class=\"row\">
                            ";
            // line 34
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(0, 12));
            foreach ($context['_seq'] as $context["_key"] => $context["x"]) {
                // line 35
                echo "                                ";
                if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["map"] ?? null), $context["x"], array(), "array", false, true), $context["y"], array(), "array", true, true)) {
                    // line 36
                    echo "                                    <div class=\"tile col-xs-1 ";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["map"]) || array_key_exists("map", $context) ? $context["map"] : (function () { throw new Twig_Error_Runtime('Variable "map" does not exist.', 36, $this->source); })()), $context["x"], array(), "array"), $context["y"], array(), "array"), "type", array()), "html", null, true);
                    echo "\">
                                        <div class=\"tile-name\">";
                    // line 37
                    echo twig_escape_filter($this->env, (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["map"] ?? null), $context["x"], array(), "array", false, true), $context["y"], array(), "array", false, true), "name", array(), "any", true, true) &&  !(null === twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["map"] ?? null), $context["x"], array(), "array", false, true), $context["y"], array(), "array", false, true), "name", array())))) ? (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["map"] ?? null), $context["x"], array(), "array", false, true), $context["y"], array(), "array", false, true), "name", array())) : (" ")), "html", null, true);
                    echo "</div>
                                        <div class=\"tile-name coords\">";
                    // line 38
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["map"]) || array_key_exists("map", $context) ? $context["map"] : (function () { throw new Twig_Error_Runtime('Variable "map" does not exist.', 38, $this->source); })()), $context["x"], array(), "array"), $context["y"], array(), "array"), "coordX", array()), "html", null, true);
                    echo ",";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["map"]) || array_key_exists("map", $context) ? $context["map"] : (function () { throw new Twig_Error_Runtime('Variable "map" does not exist.', 38, $this->source); })()), $context["x"], array(), "array"), $context["y"], array(), "array"), "coordY", array()), "html", null, true);
                    echo "</div>
                                        ";
                    // line 39
                    if (((twig_get_attribute($this->env, $this->source, (isset($context["boat"]) || array_key_exists("boat", $context) ? $context["boat"] : (function () { throw new Twig_Error_Runtime('Variable "boat" does not exist.', 39, $this->source); })()), "coordX", array()) == $context["x"]) && (twig_get_attribute($this->env, $this->source, (isset($context["boat"]) || array_key_exists("boat", $context) ? $context["boat"] : (function () { throw new Twig_Error_Runtime('Variable "boat" does not exist.', 39, $this->source); })()), "coordY", array()) == $context["y"]))) {
                        // line 40
                        echo "                                            <img class=\"boat img-responsive\" src=\"";
                        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/boat.png"), "html", null, true);
                        echo "\"
                                                 alt=\"boat\"/>
                                        ";
                    }
                    // line 43
                    echo "                                    </div>
                                ";
                }
                // line 45
                echo "                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['x'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 46
            echo "                        </div>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['y'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 48
        echo "                </div>
            </div>
            <div class=\"col-xs-2\">
                <div class=\"infos\">
                    <h2>Information</h2>
                    <h3>";
        // line 53
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["boat"]) || array_key_exists("boat", $context) ? $context["boat"] : (function () { throw new Twig_Error_Runtime('Variable "boat" does not exist.', 53, $this->source); })()), "coordX", array()), "html", null, true);
        echo " et ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["boat"]) || array_key_exists("boat", $context) ? $context["boat"] : (function () { throw new Twig_Error_Runtime('Variable "boat" does not exist.', 53, $this->source); })()), "coordY", array()), "html", null, true);
        echo "</h3>
                    <h3>";
        // line 54
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["map"]) || array_key_exists("map", $context) ? $context["map"] : (function () { throw new Twig_Error_Runtime('Variable "map" does not exist.', 54, $this->source); })()), twig_get_attribute($this->env, $this->source, (isset($context["boat"]) || array_key_exists("boat", $context) ? $context["boat"] : (function () { throw new Twig_Error_Runtime('Variable "boat" does not exist.', 54, $this->source); })()), "coordX", array()), array(), "array"), twig_get_attribute($this->env, $this->source, (isset($context["boat"]) || array_key_exists("boat", $context) ? $context["boat"] : (function () { throw new Twig_Error_Runtime('Variable "boat" does not exist.', 54, $this->source); })()), "coordY", array()), array(), "array"), "type", array()), "html", null, true);
        echo "</h3>
                </div>
                <div class=\"navigation\">
                    <h2>Navigation</h2>

                    ";
        // line 60
        echo "                </div>
            </div>
        </div>
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "map/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  216 => 60,  208 => 54,  202 => 53,  195 => 48,  188 => 46,  182 => 45,  178 => 43,  171 => 40,  169 => 39,  163 => 38,  159 => 37,  154 => 36,  151 => 35,  147 => 34,  144 => 33,  139 => 32,  135 => 30,  133 => 29,  128 => 26,  123 => 23,  114 => 21,  110 => 20,  107 => 19,  104 => 18,  99 => 15,  90 => 13,  86 => 12,  83 => 11,  81 => 10,  76 => 7,  67 => 6,  54 => 4,  45 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block stylesheets %}
    <link rel=\"stylesheet\" href=\"{{ asset('assets/css/map.css') }}\">
{% endblock %}
{% block body %}

    <div class=\"container-fluid \">
        <h1>Map</h1>
        {% if app.session.flashBag.has('success') %}
            <div class=\"alert alert-success\">
                {% for msg in app.session.flashBag.get('success') %}
                    {{ msg }}
                {% endfor %}
            </div>

        {% endif %}
        {% if app.session.flashBag.has('warning') %}
            <div class=\"alert alert-success\">
                {% for msg in app.session.flashBag.get('warning') %}
                    {{ msg }}
                {% endfor %}
            </div>

        {% endif %}
        <div class=\"row\">
            <div class=\"col-xs-10\">
                <div class=\"map\">
                    {% if map is empty %}
                        <div class=\"alert alert-warning\">You are still on the firm ground, you have to loat fixtures first ! </div>
                    {% endif %}
                    {% for y in 0..6 %}
                        <div class=\"row\">
                            {% for x in 0..12 %}
                                {% if map[x][y] is defined %}
                                    <div class=\"tile col-xs-1 {{ map[x][y].type }}\">
                                        <div class=\"tile-name\">{{ map[x][y].name ?? ' '}}</div>
                                        <div class=\"tile-name coords\">{{ map[x][y].coordX }},{{ map[x][y].coordY }}</div>
                                        {% if boat.coordX == x and boat.coordY == y %}
                                            <img class=\"boat img-responsive\" src=\"{{ asset('assets/images/boat.png') }}\"
                                                 alt=\"boat\"/>
                                        {% endif %}
                                    </div>
                                {% endif %}
                            {% endfor %}
                        </div>
                    {% endfor %}
                </div>
            </div>
            <div class=\"col-xs-2\">
                <div class=\"infos\">
                    <h2>Information</h2>
                    <h3>{{ boat.coordX }} et {{ boat.coordY }}</h3>
                    <h3>{{ map[boat.coordX][boat.coordY].type }}</h3>
                </div>
                <div class=\"navigation\">
                    <h2>Navigation</h2>

                    {# Add here N/S/E/W buttons #}
                </div>
            </div>
        </div>
    </div>
{% endblock %}", "map/index.html.twig", "/home/zak/Bureau/checkpoint/php_0218_checkpoint3_Strasbourg_eleves/app/Resources/views/map/index.html.twig");
    }
}
