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
        <div class=\"row\">
            <div class=\"col-xs-10\">
                <div class=\"map\">
                    ";
        // line 13
        if (twig_test_empty((isset($context["map"]) || array_key_exists("map", $context) ? $context["map"] : (function () { throw new Twig_Error_Runtime('Variable "map" does not exist.', 13, $this->source); })()))) {
            // line 14
            echo "                        <div class=\"alert alert-warning\">You are still on the firm ground, you have to loat fixtures first ! </div>
                    ";
        }
        // line 16
        echo "                    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(0, 6));
        foreach ($context['_seq'] as $context["_key"] => $context["y"]) {
            // line 17
            echo "                        <div class=\"row\">
                            ";
            // line 18
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(0, 12));
            foreach ($context['_seq'] as $context["_key"] => $context["x"]) {
                // line 19
                echo "                                ";
                if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["map"] ?? null), $context["x"], array(), "array", false, true), $context["y"], array(), "array", true, true)) {
                    // line 20
                    echo "                                    <div class=\"tile col-xs-1 ";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["map"]) || array_key_exists("map", $context) ? $context["map"] : (function () { throw new Twig_Error_Runtime('Variable "map" does not exist.', 20, $this->source); })()), $context["x"], array(), "array"), $context["y"], array(), "array"), "type", array()), "html", null, true);
                    echo "\">
                                        <div class=\"tile-name\">";
                    // line 21
                    echo twig_escape_filter($this->env, (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["map"] ?? null), $context["x"], array(), "array", false, true), $context["y"], array(), "array", false, true), "name", array(), "any", true, true) &&  !(null === twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["map"] ?? null), $context["x"], array(), "array", false, true), $context["y"], array(), "array", false, true), "name", array())))) ? (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["map"] ?? null), $context["x"], array(), "array", false, true), $context["y"], array(), "array", false, true), "name", array())) : (" ")), "html", null, true);
                    echo "</div>
                                        <div class=\"tile-name coords\">";
                    // line 22
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["map"]) || array_key_exists("map", $context) ? $context["map"] : (function () { throw new Twig_Error_Runtime('Variable "map" does not exist.', 22, $this->source); })()), $context["x"], array(), "array"), $context["y"], array(), "array"), "coordX", array()), "html", null, true);
                    echo ",";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["map"]) || array_key_exists("map", $context) ? $context["map"] : (function () { throw new Twig_Error_Runtime('Variable "map" does not exist.', 22, $this->source); })()), $context["x"], array(), "array"), $context["y"], array(), "array"), "coordY", array()), "html", null, true);
                    echo "</div>
                                        ";
                    // line 23
                    if (((twig_get_attribute($this->env, $this->source, (isset($context["boat"]) || array_key_exists("boat", $context) ? $context["boat"] : (function () { throw new Twig_Error_Runtime('Variable "boat" does not exist.', 23, $this->source); })()), "coordX", array()) == $context["x"]) && (twig_get_attribute($this->env, $this->source, (isset($context["boat"]) || array_key_exists("boat", $context) ? $context["boat"] : (function () { throw new Twig_Error_Runtime('Variable "boat" does not exist.', 23, $this->source); })()), "coordY", array()) == $context["y"]))) {
                        // line 24
                        echo "                                            <img class=\"boat img-responsive\" src=\"";
                        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/boat.png"), "html", null, true);
                        echo "\"
                                                 alt=\"boat\"/>
                                        ";
                    }
                    // line 27
                    echo "                                    </div>
                                ";
                }
                // line 29
                echo "                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['x'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 30
            echo "                        </div>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['y'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 32
        echo "                </div>
            </div>
            <div class=\"col-xs-2\">
                <div class=\"infos\">
                    <h2>Information</h2>
                    <h3>";
        // line 37
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["boat"]) || array_key_exists("boat", $context) ? $context["boat"] : (function () { throw new Twig_Error_Runtime('Variable "boat" does not exist.', 37, $this->source); })()), "coordX", array()), "html", null, true);
        echo " et ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["boat"]) || array_key_exists("boat", $context) ? $context["boat"] : (function () { throw new Twig_Error_Runtime('Variable "boat" does not exist.', 37, $this->source); })()), "coordY", array()), "html", null, true);
        echo "</h3>
                    <h3>";
        // line 38
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["map"]) || array_key_exists("map", $context) ? $context["map"] : (function () { throw new Twig_Error_Runtime('Variable "map" does not exist.', 38, $this->source); })()), twig_get_attribute($this->env, $this->source, (isset($context["boat"]) || array_key_exists("boat", $context) ? $context["boat"] : (function () { throw new Twig_Error_Runtime('Variable "boat" does not exist.', 38, $this->source); })()), "coordX", array()), array(), "array"), twig_get_attribute($this->env, $this->source, (isset($context["boat"]) || array_key_exists("boat", $context) ? $context["boat"] : (function () { throw new Twig_Error_Runtime('Variable "boat" does not exist.', 38, $this->source); })()), "coordY", array()), array(), "array"), "type", array()), "html", null, true);
        echo "</h3>
                    <button>N</button>
                    <button>E</button>
                    <button>S</button>
                    <button>W</button>

                </div>
                <div class=\"navigation\">
                    <h2>Navigation</h2>

                    ";
        // line 49
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
        return array (  172 => 49,  159 => 38,  153 => 37,  146 => 32,  139 => 30,  133 => 29,  129 => 27,  122 => 24,  120 => 23,  114 => 22,  110 => 21,  105 => 20,  102 => 19,  98 => 18,  95 => 17,  90 => 16,  86 => 14,  84 => 13,  76 => 7,  67 => 6,  54 => 4,  45 => 3,  15 => 1,);
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
                    <button>N</button>
                    <button>E</button>
                    <button>S</button>
                    <button>W</button>

                </div>
                <div class=\"navigation\">
                    <h2>Navigation</h2>

                    {# Add here N/S/E/W buttons #}
                </div>
            </div>
        </div>
    </div>
{% endblock %}", "map/index.html.twig", "/home/wilder/Checkpoint3/php_0218_checkpoint3_Strasbourg_eleves/app/Resources/views/map/index.html.twig");
    }
}
