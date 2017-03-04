<?php

/* RecommandationBundle:Default:single.html.twig */
class __TwigTemplate_1750c675841bd0f0cb417967509e4f83a56e4295cf89e505818bc5162de55eda extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("RecommandationBundle::layout.html.twig", "RecommandationBundle:Default:single.html.twig", 1);
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
        $__internal_ad3e40228a99221b6c9ed57082aafaec3044ebbddd60ef76d37258ca52a80383 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ad3e40228a99221b6c9ed57082aafaec3044ebbddd60ef76d37258ca52a80383->enter($__internal_ad3e40228a99221b6c9ed57082aafaec3044ebbddd60ef76d37258ca52a80383_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "RecommandationBundle:Default:single.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ad3e40228a99221b6c9ed57082aafaec3044ebbddd60ef76d37258ca52a80383->leave($__internal_ad3e40228a99221b6c9ed57082aafaec3044ebbddd60ef76d37258ca52a80383_prof);

    }

    // line 4
    public function block_search($context, array $blocks = array())
    {
        $__internal_51c203520c9ca3ebcc8eee1cf7821057dd4e9f0d89c59252bf02de921f7711ad = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_51c203520c9ca3ebcc8eee1cf7821057dd4e9f0d89c59252bf02de921f7711ad->enter($__internal_51c203520c9ca3ebcc8eee1cf7821057dd4e9f0d89c59252bf02de921f7711ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "search"));

        // line 5
        echo "<div class=\"col-md-12\">
    <form class=\"search_bar large \">
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
        
        $__internal_51c203520c9ca3ebcc8eee1cf7821057dd4e9f0d89c59252bf02de921f7711ad->leave($__internal_51c203520c9ca3ebcc8eee1cf7821057dd4e9f0d89c59252bf02de921f7711ad_prof);

    }

    // line 22
    public function block_slide($context, array $blocks = array())
    {
        $__internal_be6a68fb3f8eef240166462dae8638ca25665459d4e568a4fc4647acf4d679ac = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_be6a68fb3f8eef240166462dae8638ca25665459d4e568a4fc4647acf4d679ac->enter($__internal_be6a68fb3f8eef240166462dae8638ca25665459d4e568a4fc4647acf4d679ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "slide"));

        
        $__internal_be6a68fb3f8eef240166462dae8638ca25665459d4e568a4fc4647acf4d679ac->leave($__internal_be6a68fb3f8eef240166462dae8638ca25665459d4e568a4fc4647acf4d679ac_prof);

    }

    // line 24
    public function block_box_2($context, array $blocks = array())
    {
        $__internal_701910586b8425732499f3e7a05f10e5e185534570aa52f5c24582a4562779cc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_701910586b8425732499f3e7a05f10e5e185534570aa52f5c24582a4562779cc->enter($__internal_701910586b8425732499f3e7a05f10e5e185534570aa52f5c24582a4562779cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "box_2"));

        // line 25
        echo "<div class=\"col-md-12\">
    <div class=\"movie_top\">
        <div class=\"movie_box\" >
            <div class=\"grid images_3_of_2\">
                <div class=\"movie_image\">
                    <span class=\"movie_rating\" >5.0</span>
                    <img src=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/single.jpg"), "html", null, true);
        echo "\" class=\"img-responsive\" alt=\"\"/>
                </div>
                <div class=\"movie_rate\" style=\"padding-bottom:0px;\">
                    <div class=\"rating_desc\" ><p>Votre vote :</p></div>
                    <form action=\"\" class=\"sky-form\">
                        <fieldset>
                            <section >
                                <div class=\"rating\">
                                    <input type=\"radio\" name=\"stars-rating\" id=\"stars-rating-5\">
                                    <label for=\"stars-rating-5\"><i class=\"icon-star\"></i></label>
                                    <input type=\"radio\" name=\"stars-rating\" id=\"stars-rating-4\">
                                    <label for=\"stars-rating-4\"><i class=\"icon-star\"></i></label>
                                    <input type=\"radio\" name=\"stars-rating\" id=\"stars-rating-3\">
                                    <label for=\"stars-rating-3\"><i class=\"icon-star\"></i></label>
                                    <input type=\"radio\" name=\"stars-rating\" id=\"stars-rating-2\">
                                    <label for=\"stars-rating-2\"><i class=\"icon-star\"></i></label>
                                    <input type=\"radio\" name=\"stars-rating\" id=\"stars-rating-1\">
                                    <label for=\"stars-rating-1\"><i class=\"icon-star\"></i></label>
                                </div>
                            </section>
                        </fieldset>
                    </form>
                    <div class=\"clearfix\"> </div>
                </div>
            </div>
            <h2>Il faut sauver le soldat rayan air</h2>
            <div class=\"desc1 span_3_of_2\">
                <p class=\"movie_option\"><strong>Country: </strong><a href=\"#\">established</a>, <a href=\"#\">USA</a></p>
                <p class=\"movie_option\"><strong>Year: </strong>2014</p>
                <p class=\"movie_option\"><strong>Category: </strong><a href=\"#\">Adventure</a>, <a href=\"#\">Fantazy</a></p>
                <p class=\"movie_option\"><strong>Release date: </strong>December 12, 2014</p>
                <p class=\"movie_option\"><strong>Director: </strong><a href=\"#\">suffered </a></p>
                <p class=\"movie_option\"><strong>Actors: </strong><a href=\"#\">anything</a>, <a href=\"#\">Lorem Ipsum</a>, <a href=\"#\" discovered</a>, <a href=\"#\"> Virginia</a>, <a href=\"#\"> Virginia</a>, <a href=\"#\">variations</a>, <a href=\"#\">variations</a>, <a href=\"#\">variations</a>, <a href=\"#\"> Virginia</a> <a href=\"#\">...</a></p>
                <p class=\"movie_option\"><strong>Age restriction: </strong>13</p>
            </div>
            <div class=\"clearfix\"> </div>

            <p class=\"m_4\">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet.</p>
        <div class=\"clearfix\"> </div>
    </div>
    </div>
</div><div class=\"clearfix\"> </div>
    <div class=\"col-md-12\">
<h2 class=\"recent\">Les films que vous pourriez aimer</h2>
    <section class=\"center slider\">
        <div>
            <a> <img src=\"";
        // line 77
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/1.jpg"), "html", null, true);
        echo "\"></a><p><strong>Syenergy 2mm</strong><br/>22.10.2014 | 14:40</p>
        </div>
        <div>
            <a> <img src=\"";
        // line 80
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/2.jpg"), "html", null, true);
        echo "\"></a><p><strong>Syenergy 2mm</strong><br/>22.10.2014 | 14:40</p>
        </div>
        <div>
            <a> <img src=\"";
        // line 83
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/3.jpg"), "html", null, true);
        echo "\"></a><p><strong>Syenergy 2mm</strong><br/>22.10.2014 | 14:40</p>
        </div>
        <div>
            <a> <img src=\"";
        // line 86
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/4.jpg"), "html", null, true);
        echo "\"></a><p><strong>Syenergy 2mm</strong><br/>22.10.2014 | 14:40</p>
        </div>
        <div>
            <a> <img src=\"";
        // line 89
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/5.jpg"), "html", null, true);
        echo "\"></a><p><strong>Syenergy 2mm</strong><br/>22.10.2014 | 14:40</p>
        </div>
        <div>
            <a> <img src=\"";
        // line 92
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/1.jpg"), "html", null, true);
        echo "\"></a><p><strong>Syenergy 2mm</strong><br/>22.10.2014 | 14:40</p>
        </div>
        <div>
            <a> <img src=\"";
        // line 95
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/2.jpg"), "html", null, true);
        echo "\"></a><p><strong>Syenergy 2mm</strong><br/>22.10.2014 | 14:40</p>
        </div>
    </section>
    </div><div class=\"clearfix\"> </div>
";
        
        $__internal_701910586b8425732499f3e7a05f10e5e185534570aa52f5c24582a4562779cc->leave($__internal_701910586b8425732499f3e7a05f10e5e185534570aa52f5c24582a4562779cc_prof);

    }

    public function getTemplateName()
    {
        return "RecommandationBundle:Default:single.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  175 => 95,  169 => 92,  163 => 89,  157 => 86,  151 => 83,  145 => 80,  139 => 77,  90 => 31,  82 => 25,  76 => 24,  65 => 22,  42 => 5,  36 => 4,  11 => 1,);
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
    <form class=\"search_bar large \">
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
    <div class=\"movie_top\">
        <div class=\"movie_box\" >
            <div class=\"grid images_3_of_2\">
                <div class=\"movie_image\">
                    <span class=\"movie_rating\" >5.0</span>
                    <img src=\"{{ asset('images/single.jpg') }}\" class=\"img-responsive\" alt=\"\"/>
                </div>
                <div class=\"movie_rate\" style=\"padding-bottom:0px;\">
                    <div class=\"rating_desc\" ><p>Votre vote :</p></div>
                    <form action=\"\" class=\"sky-form\">
                        <fieldset>
                            <section >
                                <div class=\"rating\">
                                    <input type=\"radio\" name=\"stars-rating\" id=\"stars-rating-5\">
                                    <label for=\"stars-rating-5\"><i class=\"icon-star\"></i></label>
                                    <input type=\"radio\" name=\"stars-rating\" id=\"stars-rating-4\">
                                    <label for=\"stars-rating-4\"><i class=\"icon-star\"></i></label>
                                    <input type=\"radio\" name=\"stars-rating\" id=\"stars-rating-3\">
                                    <label for=\"stars-rating-3\"><i class=\"icon-star\"></i></label>
                                    <input type=\"radio\" name=\"stars-rating\" id=\"stars-rating-2\">
                                    <label for=\"stars-rating-2\"><i class=\"icon-star\"></i></label>
                                    <input type=\"radio\" name=\"stars-rating\" id=\"stars-rating-1\">
                                    <label for=\"stars-rating-1\"><i class=\"icon-star\"></i></label>
                                </div>
                            </section>
                        </fieldset>
                    </form>
                    <div class=\"clearfix\"> </div>
                </div>
            </div>
            <h2>Il faut sauver le soldat rayan air</h2>
            <div class=\"desc1 span_3_of_2\">
                <p class=\"movie_option\"><strong>Country: </strong><a href=\"#\">established</a>, <a href=\"#\">USA</a></p>
                <p class=\"movie_option\"><strong>Year: </strong>2014</p>
                <p class=\"movie_option\"><strong>Category: </strong><a href=\"#\">Adventure</a>, <a href=\"#\">Fantazy</a></p>
                <p class=\"movie_option\"><strong>Release date: </strong>December 12, 2014</p>
                <p class=\"movie_option\"><strong>Director: </strong><a href=\"#\">suffered </a></p>
                <p class=\"movie_option\"><strong>Actors: </strong><a href=\"#\">anything</a>, <a href=\"#\">Lorem Ipsum</a>, <a href=\"#\" discovered</a>, <a href=\"#\"> Virginia</a>, <a href=\"#\"> Virginia</a>, <a href=\"#\">variations</a>, <a href=\"#\">variations</a>, <a href=\"#\">variations</a>, <a href=\"#\"> Virginia</a> <a href=\"#\">...</a></p>
                <p class=\"movie_option\"><strong>Age restriction: </strong>13</p>
            </div>
            <div class=\"clearfix\"> </div>

            <p class=\"m_4\">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet.</p>
        <div class=\"clearfix\"> </div>
    </div>
    </div>
</div><div class=\"clearfix\"> </div>
    <div class=\"col-md-12\">
<h2 class=\"recent\">Les films que vous pourriez aimer</h2>
    <section class=\"center slider\">
        <div>
            <a> <img src=\"{{ asset('images/1.jpg') }}\"></a><p><strong>Syenergy 2mm</strong><br/>22.10.2014 | 14:40</p>
        </div>
        <div>
            <a> <img src=\"{{ asset('images/2.jpg') }}\"></a><p><strong>Syenergy 2mm</strong><br/>22.10.2014 | 14:40</p>
        </div>
        <div>
            <a> <img src=\"{{ asset('images/3.jpg') }}\"></a><p><strong>Syenergy 2mm</strong><br/>22.10.2014 | 14:40</p>
        </div>
        <div>
            <a> <img src=\"{{ asset('images/4.jpg') }}\"></a><p><strong>Syenergy 2mm</strong><br/>22.10.2014 | 14:40</p>
        </div>
        <div>
            <a> <img src=\"{{ asset('images/5.jpg') }}\"></a><p><strong>Syenergy 2mm</strong><br/>22.10.2014 | 14:40</p>
        </div>
        <div>
            <a> <img src=\"{{ asset('images/1.jpg') }}\"></a><p><strong>Syenergy 2mm</strong><br/>22.10.2014 | 14:40</p>
        </div>
        <div>
            <a> <img src=\"{{ asset('images/2.jpg') }}\"></a><p><strong>Syenergy 2mm</strong><br/>22.10.2014 | 14:40</p>
        </div>
    </section>
    </div><div class=\"clearfix\"> </div>
{% endblock %}
", "RecommandationBundle:Default:single.html.twig", "C:\\wamp\\www\\my_project_transversale\\src\\RecommandationBundle/Resources/views/Default/single.html.twig");
    }
}
