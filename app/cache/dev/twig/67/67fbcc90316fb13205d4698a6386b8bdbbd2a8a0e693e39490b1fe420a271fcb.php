<?php

/* RecommandationBundle:Default:movie_list.html.twig */
class __TwigTemplate_d920743b72171200a9f0ff2e958e031eb30b49241e48729774fad68df206cce0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("RecommandationBundle::layout.html.twig", "RecommandationBundle:Default:movie_list.html.twig", 1);
        $this->blocks = array(
            'search' => array($this, 'block_search'),
            'slide' => array($this, 'block_slide'),
            'box_2' => array($this, 'block_box_2'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "RecommandationBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_8fdd3a2a76b6d88d06ec15dd33255fd65f57bffbedbcfc635b3e70f2f69e6d64 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8fdd3a2a76b6d88d06ec15dd33255fd65f57bffbedbcfc635b3e70f2f69e6d64->enter($__internal_8fdd3a2a76b6d88d06ec15dd33255fd65f57bffbedbcfc635b3e70f2f69e6d64_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "RecommandationBundle:Default:movie_list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8fdd3a2a76b6d88d06ec15dd33255fd65f57bffbedbcfc635b3e70f2f69e6d64->leave($__internal_8fdd3a2a76b6d88d06ec15dd33255fd65f57bffbedbcfc635b3e70f2f69e6d64_prof);

    }

    // line 4
    public function block_search($context, array $blocks = array())
    {
        $__internal_e55cd48a3508b7a4935146a3243b9d1f3d6e936f0c9430e6b0632db0d7b354d8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e55cd48a3508b7a4935146a3243b9d1f3d6e936f0c9430e6b0632db0d7b354d8->enter($__internal_e55cd48a3508b7a4935146a3243b9d1f3d6e936f0c9430e6b0632db0d7b354d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "search"));

        // line 5
        echo "<div class=\"col-md-12\">
    <form class=\"search_bar large\">
        <div class=\"search_dropdown\" style=\"width: 16px;\">
            <span>Catégorie</span>
            <ul>
                <li class=\"selected\">Film</li>
                <li>Auteur</li>
                <li>Réalisateur</li>
            </ul>
        </div>

        <input type=\"text\" placeholder=\"Recherchez un film ...\" />

        <button type=\"submit\" value=\"Search\">Rechercher</button>
    </form>
</div>
";
        
        $__internal_e55cd48a3508b7a4935146a3243b9d1f3d6e936f0c9430e6b0632db0d7b354d8->leave($__internal_e55cd48a3508b7a4935146a3243b9d1f3d6e936f0c9430e6b0632db0d7b354d8_prof);

    }

    // line 22
    public function block_slide($context, array $blocks = array())
    {
        $__internal_dfcad008725d8b5226c71c9c6d2784226710e17b00c0687443ef0381ac0c8efb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dfcad008725d8b5226c71c9c6d2784226710e17b00c0687443ef0381ac0c8efb->enter($__internal_dfcad008725d8b5226c71c9c6d2784226710e17b00c0687443ef0381ac0c8efb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "slide"));

        
        $__internal_dfcad008725d8b5226c71c9c6d2784226710e17b00c0687443ef0381ac0c8efb->leave($__internal_dfcad008725d8b5226c71c9c6d2784226710e17b00c0687443ef0381ac0c8efb_prof);

    }

    // line 24
    public function block_box_2($context, array $blocks = array())
    {
        $__internal_3522206a8b1ea0b002fcdc795dbab85c022a2412ed16862d4145efcb055ec448 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3522206a8b1ea0b002fcdc795dbab85c022a2412ed16862d4145efcb055ec448->enter($__internal_3522206a8b1ea0b002fcdc795dbab85c022a2412ed16862d4145efcb055ec448_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "box_2"));

        // line 25
        echo "<div class=\"col-md-12\">
<div class=\"col-md-3\">
    <div class=\"row preview-html \" ng-show=\"screen == 'preview'\" ng-hide=\"loading\">
        <div id=\"cssmenu\">
                <ul>
                    <li class=\"active\"><a href=\"#\" target=\"_blank\"><i class=\"fa fa-fw fa-home\"></i> Affinez votre recherche</a></li>
                    <li class=\"has-sub active\"><a href=\"#\"><i class=\"fa fa-fw fa-bars\"></i> Tous les genres</a>
                        <ul style=\"display: block;\">
                            <li class=\"has-sub\"><a href=\"#\">Menu 1</a>
                                <ul style=\"display: none;\">
                                    <li><a href=\"#\">Menu 1.1</a></li>
                                    <li><a href=\"#\">Menu 1.2</a></li>
                                </ul>
                            </li>
                            <li><a href=\"#\">Menu 2</a></li>
                        </ul>
                    </li>
                    <li class=\"has-sub active\"><a href=\"#\"><i class=\"fa fa-fw fa-bars\"></i> Toutes les années</a>
                        <ul style=\"display: block;\">
                            <li class=\"has-sub\"><a href=\"#\">Menu 1</a>
                                <ul style=\"display: none;\">
                                    <li><a href=\"#\">Menu 1.1</a></li>
                                    <li><a href=\"#\">Menu 1.2</a></li>
                                </ul>
                            </li>
                            <li><a href=\"#\">Menu 2</a></li>
                        </ul>
                    </li>
                    <li class=\"has-sub active\"><a href=\"#\"><i class=\"fa fa-fw fa-bars\"></i> Tous les pays</a>
                        <ul style=\"display: block;\">
                            <li class=\"has-sub\"><a href=\"#\">Menu 1</a>
                                <ul style=\"display: none;\">
                                    <li><a href=\"#\">Menu 1.1</a></li>
                                    <li><a href=\"#\">Menu 1.2</a></li>
                                </ul>
                            </li>
                            <li><a href=\"#\">Menu 2</a></li>
                        </ul>
                    </li>
                   <!-- <li><a href=\"#\"><i class=\"fa fa-fw fa-cog\"></i> Settings</a></li>
                    <li><a href=\"#\"><i class=\"fa fa-fw fa-phone\"></i> Contact</a></li>-->
                </ul>
            </div></div>
    </div>


<div class=\"col-md-9\" style=\"padding: 0  0 0 10px;\">
    <h2 class=\"\">Resultat de votre recherche pour le mot clef <strong>\"françis\"</strong></h2><br/>
    <div class=\"movie_top\">
        <div class=\"movie_box\">

            <!-- Movie variant with time -->
            <div class=\"movie movie-test movie-test-dark movie-test-left\">
                <div class=\"movie__images\">
                    <a href=\"single.html\" class=\"movie-beta__link\">
                        <img alt=\"\" src=\"";
        // line 80
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/1.jpg"), "html", null, true);
        echo "\" class=\"img-responsive\" alt=\"\"/>
                    </a>
                </div>
                <div class=\"movie__info\">
                    <a href=\"single.html\" class=\"movie__title\">Ipsum (2015)  </a>
                    <p class=\"movie__time\">80 min</p>
                    <p class=\"movie__option\"><a href=\"single.html\">Contray</a> | <a href=\"single.html\">Dolor sit</a> | <a href=\"single.html\">Drama</a></p>
                    <ul class=\"list_6\">
                        <li><i class=\"icon1\"> </i><p>2,548</p></li>
                        <li><i class=\"icon3\"> </i><p>546</p></li>
                        <li>Rating : &nbsp;&nbsp;<p><img src=\"";
        // line 90
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/rating1.png"), "html", null, true);
        echo "\" alt=\"\"></p></li>
                        <div class=\"clearfix\"> </div>
                    </ul>
                </div>
                <div class=\"clearfix\"> </div>
            </div>

            <div class=\"movie movie-test movie-test-dark movie-test-left\">
                <div class=\"movie__images\">
                    <a href=\"single.html\" class=\"movie-beta__link\">
                        <img alt=\"\" src=\"";
        // line 100
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/5.jpg"), "html", null, true);
        echo "\" class=\"img-responsive\" alt=\"\"/>
                    </a>
                </div>
                <div class=\"movie__info\">
                    <a href=\"single.html\" class=\"movie__title\">Ipsum (2015)  </a>
                    <p class=\"movie__time\">80 min</p>
                    <p class=\"movie__option\"><a href=\"single.html\">Contray</a> | <a href=\"single.html\">Dolor sit</a> | <a href=\"single.html\">Drama</a></p>
                    <ul class=\"list_6\">
                        <li><i class=\"icon1\"> </i><p>2,548</p></li>
                        <li><i class=\"icon3\"> </i><p>546</p></li>
                        <li>Rating : &nbsp;&nbsp;<p><img src=\"";
        // line 110
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/rating1.png"), "html", null, true);
        echo "\" alt=\"\"></p></li>
                        <div class=\"clearfix\"> </div>
                    </ul>
                </div>
                <div class=\"clearfix\"> </div>
            </div>

            <!-- Movie variant with time -->
        </div>
    </div>
</div>

</div>
    <div class=\"clearfix\"> </div>
";
        
        $__internal_3522206a8b1ea0b002fcdc795dbab85c022a2412ed16862d4145efcb055ec448->leave($__internal_3522206a8b1ea0b002fcdc795dbab85c022a2412ed16862d4145efcb055ec448_prof);

    }

    public function getTemplateName()
    {
        return "RecommandationBundle:Default:movie_list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  178 => 110,  165 => 100,  152 => 90,  139 => 80,  82 => 25,  76 => 24,  65 => 22,  42 => 5,  36 => 4,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'RecommandationBundle::layout.html.twig' %}


{%  block search %}
<div class=\"col-md-12\">
    <form class=\"search_bar large\">
        <div class=\"search_dropdown\" style=\"width: 16px;\">
            <span>Catégorie</span>
            <ul>
                <li class=\"selected\">Film</li>
                <li>Auteur</li>
                <li>Réalisateur</li>
            </ul>
        </div>

        <input type=\"text\" placeholder=\"Recherchez un film ...\" />

        <button type=\"submit\" value=\"Search\">Rechercher</button>
    </form>
</div>
{%  endblock %}
{% block slide %}
{%  endblock %}
{% block box_2 %}
<div class=\"col-md-12\">
<div class=\"col-md-3\">
    <div class=\"row preview-html \" ng-show=\"screen == 'preview'\" ng-hide=\"loading\">
        <div id=\"cssmenu\">
                <ul>
                    <li class=\"active\"><a href=\"#\" target=\"_blank\"><i class=\"fa fa-fw fa-home\"></i> Affinez votre recherche</a></li>
                    <li class=\"has-sub active\"><a href=\"#\"><i class=\"fa fa-fw fa-bars\"></i> Tous les genres</a>
                        <ul style=\"display: block;\">
                            <li class=\"has-sub\"><a href=\"#\">Menu 1</a>
                                <ul style=\"display: none;\">
                                    <li><a href=\"#\">Menu 1.1</a></li>
                                    <li><a href=\"#\">Menu 1.2</a></li>
                                </ul>
                            </li>
                            <li><a href=\"#\">Menu 2</a></li>
                        </ul>
                    </li>
                    <li class=\"has-sub active\"><a href=\"#\"><i class=\"fa fa-fw fa-bars\"></i> Toutes les années</a>
                        <ul style=\"display: block;\">
                            <li class=\"has-sub\"><a href=\"#\">Menu 1</a>
                                <ul style=\"display: none;\">
                                    <li><a href=\"#\">Menu 1.1</a></li>
                                    <li><a href=\"#\">Menu 1.2</a></li>
                                </ul>
                            </li>
                            <li><a href=\"#\">Menu 2</a></li>
                        </ul>
                    </li>
                    <li class=\"has-sub active\"><a href=\"#\"><i class=\"fa fa-fw fa-bars\"></i> Tous les pays</a>
                        <ul style=\"display: block;\">
                            <li class=\"has-sub\"><a href=\"#\">Menu 1</a>
                                <ul style=\"display: none;\">
                                    <li><a href=\"#\">Menu 1.1</a></li>
                                    <li><a href=\"#\">Menu 1.2</a></li>
                                </ul>
                            </li>
                            <li><a href=\"#\">Menu 2</a></li>
                        </ul>
                    </li>
                   <!-- <li><a href=\"#\"><i class=\"fa fa-fw fa-cog\"></i> Settings</a></li>
                    <li><a href=\"#\"><i class=\"fa fa-fw fa-phone\"></i> Contact</a></li>-->
                </ul>
            </div></div>
    </div>


<div class=\"col-md-9\" style=\"padding: 0  0 0 10px;\">
    <h2 class=\"\">Resultat de votre recherche pour le mot clef <strong>\"françis\"</strong></h2><br/>
    <div class=\"movie_top\">
        <div class=\"movie_box\">

            <!-- Movie variant with time -->
            <div class=\"movie movie-test movie-test-dark movie-test-left\">
                <div class=\"movie__images\">
                    <a href=\"single.html\" class=\"movie-beta__link\">
                        <img alt=\"\" src=\"{{ asset('images/1.jpg') }}\" class=\"img-responsive\" alt=\"\"/>
                    </a>
                </div>
                <div class=\"movie__info\">
                    <a href=\"single.html\" class=\"movie__title\">Ipsum (2015)  </a>
                    <p class=\"movie__time\">80 min</p>
                    <p class=\"movie__option\"><a href=\"single.html\">Contray</a> | <a href=\"single.html\">Dolor sit</a> | <a href=\"single.html\">Drama</a></p>
                    <ul class=\"list_6\">
                        <li><i class=\"icon1\"> </i><p>2,548</p></li>
                        <li><i class=\"icon3\"> </i><p>546</p></li>
                        <li>Rating : &nbsp;&nbsp;<p><img src=\"{{ asset('images/rating1.png') }}\" alt=\"\"></p></li>
                        <div class=\"clearfix\"> </div>
                    </ul>
                </div>
                <div class=\"clearfix\"> </div>
            </div>

            <div class=\"movie movie-test movie-test-dark movie-test-left\">
                <div class=\"movie__images\">
                    <a href=\"single.html\" class=\"movie-beta__link\">
                        <img alt=\"\" src=\"{{ asset('images/5.jpg') }}\" class=\"img-responsive\" alt=\"\"/>
                    </a>
                </div>
                <div class=\"movie__info\">
                    <a href=\"single.html\" class=\"movie__title\">Ipsum (2015)  </a>
                    <p class=\"movie__time\">80 min</p>
                    <p class=\"movie__option\"><a href=\"single.html\">Contray</a> | <a href=\"single.html\">Dolor sit</a> | <a href=\"single.html\">Drama</a></p>
                    <ul class=\"list_6\">
                        <li><i class=\"icon1\"> </i><p>2,548</p></li>
                        <li><i class=\"icon3\"> </i><p>546</p></li>
                        <li>Rating : &nbsp;&nbsp;<p><img src=\"{{ asset('images/rating1.png') }}\" alt=\"\"></p></li>
                        <div class=\"clearfix\"> </div>
                    </ul>
                </div>
                <div class=\"clearfix\"> </div>
            </div>

            <!-- Movie variant with time -->
        </div>
    </div>
</div>

</div>
    <div class=\"clearfix\"> </div>
{% endblock %}
", "RecommandationBundle:Default:movie_list.html.twig", "C:\\wamp\\www\\my_project_transversale\\src\\RecommandationBundle/Resources/views/Default/movie_list.html.twig");
    }
}
