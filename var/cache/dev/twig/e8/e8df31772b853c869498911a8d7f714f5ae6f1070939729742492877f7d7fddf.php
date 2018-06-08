<?php

/* default/index.html.twig */
class __TwigTemplate_5133b582f5676399a032ab056363666d4e58f230351783d2dff309a089378cf7 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "default/index.html.twig", 1);
        $this->blocks = array(
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <div class=\"container\">
        <h1 class=\"text-center\">Checkpoint 3 </h1>

        <div class=\"row introduction\">
            <div class=\"col-sm-9 \">
                <p>
                    The most famous pirate of the world, the great and inimitable Captain Jack Sparrow, is looking for
                    the lost treasure of Rackham the Red, an old and pitiless pirate who spread terror among the Caribbean seas,
                    long long time ago.
                </p>
                <p>An old sailor from France Kingdom, the Captain Haddock, has given Jack a mysterious map, with many islands on it.
                    Haddock only knew that the treasure is burried on one of these islands.
                    Jack and his crew have the mission to navigate to each of them, until they find the golden pieces
                    and precious stones which constitute the hidden treasure.</p>
            </div>
            <div class=\"col-sm-3\">
                <img class=\"sparrow\" src=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/sparrow.jpg"), "html", null, true);
        echo "\" alt=\"Jack Sparrow\"/>
            </div>
            <div class=\"col-sm-12 text-center \">
                <img class=\"compass\" src=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/compass.png"), "html", null, true);
        echo "\" alt=\"compass\"/>
            </div>

            <div class=\"col-sm-12\">
                <p>Take the control of the Black Perl, Jack's magnificent ship and navigate among the oceans. Avoid
                    krakens, storms other pirates and be the first to find the treasure!
                    It's time to finish your last bottle of rhum and let's go to this aventure!</p>
            </div>
        </div>
    </div>
    <div class=\"container-fluid deep-sea\">
        <div class=\"row\">
            <div class=\"col-sm-12 \">
                <h2>Your mission</h2>
                <ol class=\"instructions\">
                    <li>
                        Hello ship's boy, <strong>read carefully all the instructions</strong> below before starting to code ;)
                        <br/>
                        Each step is relatively independent, do not hesitate to move on to the next if you stay blocked
                        too long on one step.
                        Also, remember you can request assistance to your former ;)
                    </li>

                    <li>
                        Look at the navbar, there is a <a href=\"";
        // line 47
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("map");
        echo "\">Map</a> link (/map url). The
                        Black Pearl can navigate on this map, which is build with Tiles (Tile entity). Each
                        Tile has coordinates (x, y) and a type (sea, port, island). The Black Pearl (one Boat entity) also has
                        coordinates, so he can be displayed on the right Tile on the map.

                        <p>Right now, the database is empty (no boat and no tile):
                        Jack is still in the firm ground! First of all, you have to fill the database.
                        Fortunately, we have fixtures ready ! Lauch <code>php bin/console doctrine:fixtures:load</code>.
                        Answer <code>y</code> at the question and that's it, you have data.</p>
                    </li>

                    <blockquote>
                        On the map, you can move the boat with the moveBoatAction() method of the BoatController (it already exist).
                        As you can see in the code, you just have to use the route <em>/boat/move/x/y</em> (x and y should be coordinates)
                        and the Black Pearl will go on the right tile.
                        Then, this method redirect the browser on the map.
                        Moreover, you can get a Boat object corresponding to the Black Pearl, on controllers with the method \$this->getBoat().
                    </blockquote>

                    <li>
                        In the map/index.html.twig file, in the <code>div</code> with the class \"infos\", add the following information about the boat :
                        <ul>
                            <li>its coordinates (x, y)</li>
                            <li>type of the tile where the boat actually is</li>
                        </ul>
                        <span class=\"hint\">Hint: </span>of course, do not hesitate to edit the code of displayMapAction() on MapController.
                    </li>

                    <li>
                        Right now, if you move your boat on a nonexistent tile, the boat just disappear on there is no error message.
                        To prevent Jack to getting lost, you will have to prevent moving outside the map.
                        Create a *MapManager* service, in the /src/Services folder, and create a tileExists() method
                        (it takes coordinates x and y as argument, and return a boolean). It should test if the tile with these coordinates exists or not.
                        <br/>
                        <span class=\"hint\">Hint: </span>Use TileRepository in your service.
                    </li>

                    <li>
                        Use this new service and this new method in the moveBoat() method, to display an error (and prevent the boat to move)
                        if the destination tile does not exist.
                        <br/>
                        <span class=\"hint\">Hint: </span>Use flash messages for the error message. The display of flash message is already implemented in base.html.twig.
                    </li>

                    <li>
                        moveBoat() method is cool, however, it is more like a teleport than a real move...<br/>
                        In BoatController, create a moveDirection() method which take a <em>direction</em> as parameter.
                        This direction can only be 'N', 'S', 'E' or 'W'. For example, <em>/boat/move/A</em> must not work (Symfony will generate a 404 error).
                        Of course, the method should move the boat in the right direction.
                    </li>

                    <li>
                        As moveBoat(), use tileExists() method of your service to display an error message (flash) if the move is not possible on moveDirection().
                        After the move, redirect the browser on <em>/map</em>.
                        Add four links on the map view to allow the user to move on the 4 possible ways.
                        Put your buttons on the div class \"navigation\" (it already exists).
                    </li>

                    <li>
                        Add the property <code>\$hasTreasure</code> (a boolean) on Tile entity. It will allow to know if the treasure is on a tile or not.
                        Don't forget to create getter / setter and to update your database.
                    </li>

                    <li>
                        In MapManager, create a getRandomIsland() method. It should return a <strong>random</strong> Tile with <strong>island</strong> type.
                        To do that, you should first get all island tiles in an array, then return one tile randomly (in php).
                        <br/>
                        <span class=\"hint\">Hint: </span>https://secure.php.net/manual/fr/function.array-rand.php
                    </li>

                    <li>
                        In MapController, create a startAction() method (with a <em>/start</em> route) which launch a new game.
                        The method must reset boat coordinates to 0,0. It also must put the treasure on a random island.
                        Finally, it will redirect on <em>/map</em>.
                        <br/>
                        <span class=\"hint\">Hint: </span>Warning, only one treasure can be on the map, don't forget to remove it
                        from the map <strong>before</strong> put one in another tile ;)
                    </li>

                    <li>
                        On MapManager, create checkTreasure() method. It should check if the boat is on the tile with the treasure and return true or false.
                    </li>

                    <li>
                        This method must be called <strong>after each move</strong> of the boat. If it return true, a flash success message must be displayed.
                    </li>

                    <span class=\"hint\">Bonus: </span>
                    About the 4 moving links, hide them for move that will fail
                    (e.g. do not display 'W' link if the boat can not move west, because it is already on the left border of the map).
                </ol>
            </div>
            <div class=\"col-sm-12 text-center\">
                <img src=\"";
        // line 140
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/jack.gif"), "html", null, true);
        echo "\" alt=\"Good Luck !\"/>
            </div>
        </div>
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "default/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  200 => 140,  104 => 47,  77 => 23,  71 => 20,  53 => 4,  44 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block body %}
    <div class=\"container\">
        <h1 class=\"text-center\">Checkpoint 3 </h1>

        <div class=\"row introduction\">
            <div class=\"col-sm-9 \">
                <p>
                    The most famous pirate of the world, the great and inimitable Captain Jack Sparrow, is looking for
                    the lost treasure of Rackham the Red, an old and pitiless pirate who spread terror among the Caribbean seas,
                    long long time ago.
                </p>
                <p>An old sailor from France Kingdom, the Captain Haddock, has given Jack a mysterious map, with many islands on it.
                    Haddock only knew that the treasure is burried on one of these islands.
                    Jack and his crew have the mission to navigate to each of them, until they find the golden pieces
                    and precious stones which constitute the hidden treasure.</p>
            </div>
            <div class=\"col-sm-3\">
                <img class=\"sparrow\" src=\"{{ asset('assets/images/sparrow.jpg') }}\" alt=\"Jack Sparrow\"/>
            </div>
            <div class=\"col-sm-12 text-center \">
                <img class=\"compass\" src=\"{{ asset('assets/images/compass.png') }}\" alt=\"compass\"/>
            </div>

            <div class=\"col-sm-12\">
                <p>Take the control of the Black Perl, Jack's magnificent ship and navigate among the oceans. Avoid
                    krakens, storms other pirates and be the first to find the treasure!
                    It's time to finish your last bottle of rhum and let's go to this aventure!</p>
            </div>
        </div>
    </div>
    <div class=\"container-fluid deep-sea\">
        <div class=\"row\">
            <div class=\"col-sm-12 \">
                <h2>Your mission</h2>
                <ol class=\"instructions\">
                    <li>
                        Hello ship's boy, <strong>read carefully all the instructions</strong> below before starting to code ;)
                        <br/>
                        Each step is relatively independent, do not hesitate to move on to the next if you stay blocked
                        too long on one step.
                        Also, remember you can request assistance to your former ;)
                    </li>

                    <li>
                        Look at the navbar, there is a <a href=\"{{ path('map') }}\">Map</a> link (/map url). The
                        Black Pearl can navigate on this map, which is build with Tiles (Tile entity). Each
                        Tile has coordinates (x, y) and a type (sea, port, island). The Black Pearl (one Boat entity) also has
                        coordinates, so he can be displayed on the right Tile on the map.

                        <p>Right now, the database is empty (no boat and no tile):
                        Jack is still in the firm ground! First of all, you have to fill the database.
                        Fortunately, we have fixtures ready ! Lauch <code>php bin/console doctrine:fixtures:load</code>.
                        Answer <code>y</code> at the question and that's it, you have data.</p>
                    </li>

                    <blockquote>
                        On the map, you can move the boat with the moveBoatAction() method of the BoatController (it already exist).
                        As you can see in the code, you just have to use the route <em>/boat/move/x/y</em> (x and y should be coordinates)
                        and the Black Pearl will go on the right tile.
                        Then, this method redirect the browser on the map.
                        Moreover, you can get a Boat object corresponding to the Black Pearl, on controllers with the method \$this->getBoat().
                    </blockquote>

                    <li>
                        In the map/index.html.twig file, in the <code>div</code> with the class \"infos\", add the following information about the boat :
                        <ul>
                            <li>its coordinates (x, y)</li>
                            <li>type of the tile where the boat actually is</li>
                        </ul>
                        <span class=\"hint\">Hint: </span>of course, do not hesitate to edit the code of displayMapAction() on MapController.
                    </li>

                    <li>
                        Right now, if you move your boat on a nonexistent tile, the boat just disappear on there is no error message.
                        To prevent Jack to getting lost, you will have to prevent moving outside the map.
                        Create a *MapManager* service, in the /src/Services folder, and create a tileExists() method
                        (it takes coordinates x and y as argument, and return a boolean). It should test if the tile with these coordinates exists or not.
                        <br/>
                        <span class=\"hint\">Hint: </span>Use TileRepository in your service.
                    </li>

                    <li>
                        Use this new service and this new method in the moveBoat() method, to display an error (and prevent the boat to move)
                        if the destination tile does not exist.
                        <br/>
                        <span class=\"hint\">Hint: </span>Use flash messages for the error message. The display of flash message is already implemented in base.html.twig.
                    </li>

                    <li>
                        moveBoat() method is cool, however, it is more like a teleport than a real move...<br/>
                        In BoatController, create a moveDirection() method which take a <em>direction</em> as parameter.
                        This direction can only be 'N', 'S', 'E' or 'W'. For example, <em>/boat/move/A</em> must not work (Symfony will generate a 404 error).
                        Of course, the method should move the boat in the right direction.
                    </li>

                    <li>
                        As moveBoat(), use tileExists() method of your service to display an error message (flash) if the move is not possible on moveDirection().
                        After the move, redirect the browser on <em>/map</em>.
                        Add four links on the map view to allow the user to move on the 4 possible ways.
                        Put your buttons on the div class \"navigation\" (it already exists).
                    </li>

                    <li>
                        Add the property <code>\$hasTreasure</code> (a boolean) on Tile entity. It will allow to know if the treasure is on a tile or not.
                        Don't forget to create getter / setter and to update your database.
                    </li>

                    <li>
                        In MapManager, create a getRandomIsland() method. It should return a <strong>random</strong> Tile with <strong>island</strong> type.
                        To do that, you should first get all island tiles in an array, then return one tile randomly (in php).
                        <br/>
                        <span class=\"hint\">Hint: </span>https://secure.php.net/manual/fr/function.array-rand.php
                    </li>

                    <li>
                        In MapController, create a startAction() method (with a <em>/start</em> route) which launch a new game.
                        The method must reset boat coordinates to 0,0. It also must put the treasure on a random island.
                        Finally, it will redirect on <em>/map</em>.
                        <br/>
                        <span class=\"hint\">Hint: </span>Warning, only one treasure can be on the map, don't forget to remove it
                        from the map <strong>before</strong> put one in another tile ;)
                    </li>

                    <li>
                        On MapManager, create checkTreasure() method. It should check if the boat is on the tile with the treasure and return true or false.
                    </li>

                    <li>
                        This method must be called <strong>after each move</strong> of the boat. If it return true, a flash success message must be displayed.
                    </li>

                    <span class=\"hint\">Bonus: </span>
                    About the 4 moving links, hide them for move that will fail
                    (e.g. do not display 'W' link if the boat can not move west, because it is already on the left border of the map).
                </ol>
            </div>
            <div class=\"col-sm-12 text-center\">
                <img src=\"{{ asset('assets/images/jack.gif') }}\" alt=\"Good Luck !\"/>
            </div>
        </div>
    </div>
{% endblock %}", "default/index.html.twig", "/home/zak/Bureau/checkpoint/php_0218_checkpoint3_Strasbourg_eleves/app/Resources/views/default/index.html.twig");
    }
}
