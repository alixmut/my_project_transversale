<?php

/* RecommandationBundle::base.html.twig */
class __TwigTemplate_713a3a5403893a20aab9a7aeb36328f8b363241999959d1ff17ef4151875d85d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'container' => array($this, 'block_container'),
            'header_top' => array($this, 'block_header_top'),
            'slide' => array($this, 'block_slide'),
            'content' => array($this, 'block_content'),
            'search' => array($this, 'block_search'),
            'box_2' => array($this, 'block_box_2'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c6bf1a5a2ba8417a17a7287eae0fc753e3176f19ca878af2448f7fba2b1748b0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c6bf1a5a2ba8417a17a7287eae0fc753e3176f19ca878af2448f7fba2b1748b0->enter($__internal_c6bf1a5a2ba8417a17a7287eae0fc753e3176f19ca878af2448f7fba2b1748b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "RecommandationBundle::base.html.twig"));

        // line 1
        echo "<!--A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<html>
<head>
    <title>Movie_store A Entertainment Category Flat Bootstarp Resposive Website Template | Home :: w3layouts</title>
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\" />
    <meta name=\"keywords\" content=\"Movie_store Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template,
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design\" />
    <script type=\"application/x-javascript\"> addEventListener(\"load\", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
    <link href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/bootstrap.css"), "html", null, true);
        echo "\" rel='stylesheet' type='text/css' />
    <link href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/style.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
    <!-- start plugins -->
    <script type=\"text/javascript\" src=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/jquery-1.11.1.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/responsiveslides.min.js"), "html", null, true);
        echo "\"></script>
    <script src='";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"), "html", null, true);
        echo "'></script>


    <!-- jQuery -->
    <script src=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("http://code.jquery.com/jquery-latest.min.js"), "html", null, true);
        echo "\"></script>

    <!-- Icon Library -->
    <link rel=\"stylesheet\" href=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css"), "html", null, true);
        echo "\">

    <script src=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/index.js"), "html", null, true);
        echo "\"></script>
    <script>
        \$(function() {
            var menu = \$('#cssmenu > ul');
            menu.find('.has-sub > ul').hide();

            menu.on('click', function(event) {
                event.preventDefault();

                var targetParent = \$(event.target).parent();
                if (targetParent.hasClass('has-sub')) {
                    targetParent.toggleClass('active');
                    targetParent.children('ul').slideToggle(250);
                }
            })
        });
    </script>

    <script>
        \$(function () {
            \$(\"#slider\").responsiveSlides({
                auto: true,
                nav: true,
                speed: 500,
                namespace: \"callbacks\",
                pager: true,
            });
        });
    </script>
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 59
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("slick/slick.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 60
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("slick/slick-theme.css"), "html", null, true);
        echo "\">
    <script src=\"";
        // line 61
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("https://code.jquery.com/jquery-2.2.0.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <script src=\"";
        // line 62
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("slick/slick.js"), "html", null, true);
        echo "\" type=\"text/javascript\" charset=\"utf-8\"></script>
    <script type=\"text/javascript\">
        \$(document).on('ready', function() {
            \$(\".regular\").slick({
                dots: true,
                infinite: true,
                slidesToShow: 3,
                slidesToScroll: 3
            });
            \$(\".center\").slick({
                dots: true,
                infinite: true,
                centerMode: true,
                slidesToShow: 3,
                slidesToScroll: 3
            });
            \$(\".variable\").slick({
                dots: true,
                infinite: true,
                variableWidth: true
            });
        });
    </script>
    <style type=\"text/css\">
        html, body {
            margin: 0;
            padding: 0;
        }

        * {
            box-sizing: border-box;
        }

        .slider {
            width: 100%;
            margin: 30px auto;
        }

        .slick-slide {
            margin: 0px 20px;
        }

        .slick-slide img {
            width: 100%;
        }

        .slick-prev:before,
        .slick-next:before {
            color: black;
        }
    </style>
</head>
<body>
<div class=\"container\">
    ";
        // line 116
        $this->displayBlock('container', $context, $blocks);
        // line 317
        echo "</div>

<div class=\"container\">
    <footer id=\"footer\">
        <div id=\"footer-3d\">
            <div class=\"gp-container\">
                <span class=\"first-widget-bend\"></span>
            </div>
        </div>
        <div id=\"footer-widgets\" class=\"gp-footer-larger-first-col\">
            <div class=\"gp-container\">
                <div class=\"footer-widget footer-1\">
                    <div class=\"wpb_wrapper\">
                        <img src=\"";
        // line 330
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/f_logo.png"), "html", null, true);
        echo "\" alt=\"\"/>
                    </div>
                    <br>
                    <p>It is a long established fact that a reader will be distracted by the readable content of a page.</p>
                </div>
                <div class=\"footer_box\">
                    <div class=\"col_1_of_3 span_1_of_3\">
                        <h3>Categories</h3>
                        <ul class=\"first\">
                            <li><a href=\"#\">Film</a></li>
                            <li><a href=\"#\">Auteur</a></li>
                            <li><a href=\"#\">Réalisateur</a></li>
                        </ul>
                    </div>
                    <div class=\"col_1_of_3 span_1_of_3\">
                        <h3>Mentions légales</h3>
                        <ul class=\"first\">
                            <li><a href=\"#\">New products</a></li>
                            <li><a href=\"#\">top sellers</a></li>
                            <li><a href=\"#\">Specials</a></li>
                        </ul>
                    </div>
                    <div class=\"col_1_of_3 span_1_of_3\">
                        <h3>Contact</h3>
                        <ul class=\"first\">
                            <li><a href=\"#\">Facebook</a></li>
                            <li><a href=\"#\">Twitter</a></li>
                            <li><a href=\"#\">Youtube</a></li>
                        </ul>
                    </div>
                    <div class=\"clearfix\"> </div>
                </div>
                <div class=\"clearfix\"> </div>
            </div>
        </div>
    </footer>
</div>

</body>
</html>";
        
        $__internal_c6bf1a5a2ba8417a17a7287eae0fc753e3176f19ca878af2448f7fba2b1748b0->leave($__internal_c6bf1a5a2ba8417a17a7287eae0fc753e3176f19ca878af2448f7fba2b1748b0_prof);

    }

    // line 116
    public function block_container($context, array $blocks = array())
    {
        $__internal_4c3e57870fc6077e30c3e78c5eec4d8aa33195bf040b2861b9641388e68ce729 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4c3e57870fc6077e30c3e78c5eec4d8aa33195bf040b2861b9641388e68ce729->enter($__internal_4c3e57870fc6077e30c3e78c5eec4d8aa33195bf040b2861b9641388e68ce729_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "container"));

        // line 117
        echo "    <div class=\"container_wrap\">
        ";
        // line 118
        $this->displayBlock('header_top', $context, $blocks);
        // line 141
        echo "        ";
        $this->displayBlock('slide', $context, $blocks);
        // line 180
        echo "
        <div class=\"content\">
            ";
        // line 182
        $this->displayBlock('content', $context, $blocks);
        // line 315
        echo "    </div>
    ";
        
        $__internal_4c3e57870fc6077e30c3e78c5eec4d8aa33195bf040b2861b9641388e68ce729->leave($__internal_4c3e57870fc6077e30c3e78c5eec4d8aa33195bf040b2861b9641388e68ce729_prof);

    }

    // line 118
    public function block_header_top($context, array $blocks = array())
    {
        $__internal_1893c9ebad1d804ebcf225ef2a8a214565e46b4fae60a8bf16c8a4ebf5fd796e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1893c9ebad1d804ebcf225ef2a8a214565e46b4fae60a8bf16c8a4ebf5fd796e->enter($__internal_1893c9ebad1d804ebcf225ef2a8a214565e46b4fae60a8bf16c8a4ebf5fd796e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header_top"));

        // line 119
        echo "        <div class=\"header_top\">
            <div class=\"col-sm-3 logo\"><a href=\"index.html\"><img src=\"";
        // line 120
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/logo.png"), "html", null, true);
        echo "\" alt=\"\"/></a></div>
            <div class=\"col-sm-6\">
                <div id=\"nav-menu\">
                    <ul>
                        <li class=\"current_page_item\"><a href=\"#\" title=\"Home\">Mes recommandations</a></li>
                        <li class=\"current_page_item\"><a href=\"#\" title=\"Home\">Mes films</a></li>
                        <li class=\"current_page_item\"><a href=\"#\" title=\"Home\">Notez des films</a></li>
                    </ul>
                </div>
            </div>
            <div class=\"col-sm-3 header_right\">
                <ul class=\"header_right_box\">
                    <li><img src=\"";
        // line 132
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/p1.png"), "html", null, true);
        echo "\" alt=\"\"/></li>
                    <li><p><a href=\"login.html\">Francis La</a></p></li>
                    <li class=\"last\"><i class=\"edit\"> </i></li>
                    <div class=\"clearfix\"> </div>
                </ul>
            </div>
            <div class=\"clearfix\"> </div>
        </div>
        ";
        
        $__internal_1893c9ebad1d804ebcf225ef2a8a214565e46b4fae60a8bf16c8a4ebf5fd796e->leave($__internal_1893c9ebad1d804ebcf225ef2a8a214565e46b4fae60a8bf16c8a4ebf5fd796e_prof);

    }

    // line 141
    public function block_slide($context, array $blocks = array())
    {
        $__internal_6c809c2a34e31fbf2bb41d356424ae93a1f34a57cd8c03cd05e53b84095cf884 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6c809c2a34e31fbf2bb41d356424ae93a1f34a57cd8c03cd05e53b84095cf884->enter($__internal_6c809c2a34e31fbf2bb41d356424ae93a1f34a57cd8c03cd05e53b84095cf884_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "slide"));

        // line 142
        echo "        <div class=\"slider\">
            <div class=\"callbacks_container\">
                <ul class=\"rslides\" id=\"slider\">
                    <li><img src=\"";
        // line 145
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/banner.jpg"), "html", null, true);
        echo "\" class=\"img-responsive\" alt=\"\"/>
                        <div class=\"button\">
                            <a href=\"#\" class=\"hvr-shutter-out-horizontal\">Watch Now</a>
                        </div>
                    </li>
                    <li><img src=\"";
        // line 150
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/banner1.jpg"), "html", null, true);
        echo "\" class=\"img-responsive\" alt=\"\"/>
                        <div class=\"button\">
                            <a href=\"#\" class=\"hvr-shutter-out-horizontal\">Watch Now</a>
                        </div>
                    </li>
                    <li><img src=\"";
        // line 155
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/banner2.jpg"), "html", null, true);
        echo "\" class=\"img-responsive\" alt=\"\"/>
                        <div class=\"button\">
                            <a href=\"#\" class=\"hvr-shutter-out-horizontal\">Watch Now</a>
                        </div>
                    </li>
                </ul>
            </div>
            <div class=\"banner_desc\">
                <div class=\"col-md-9\">
                    <ul class=\"list_1\">
                        <li>Published <span class=\"m_1\">Feb 20, 2015</span></li>
                        <li>Updated <span class=\"m_1\">Feb 20 2015</span></li>
                        <li>Rating <span class=\"m_1\"><img src=\"images/rating.png\" alt=\"\"/></span></li>
                    </ul>
                </div>
                <div class=\"col-md-3 grid_1\">
                    <ul class=\"list_1 list_2\">
                        <li><i class=\"icon1\"> </i><p>2,548</p></li>
                        <li><i class=\"icon2\"> </i><p>215</p></li>
                        <li><i class=\"icon3\"> </i><p>546</p></li>
                    </ul>
                </div>
            </div>
        </div>
        ";
        
        $__internal_6c809c2a34e31fbf2bb41d356424ae93a1f34a57cd8c03cd05e53b84095cf884->leave($__internal_6c809c2a34e31fbf2bb41d356424ae93a1f34a57cd8c03cd05e53b84095cf884_prof);

    }

    // line 182
    public function block_content($context, array $blocks = array())
    {
        $__internal_d3457c0ff9164b6ffa338e3761f594a841c923494c623bce47bc1af47bc548db = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d3457c0ff9164b6ffa338e3761f594a841c923494c623bce47bc1af47bc548db->enter($__internal_d3457c0ff9164b6ffa338e3761f594a841c923494c623bce47bc1af47bc548db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 183
        echo "            <div class=\"box_1\">
                ";
        // line 184
        $this->displayBlock('search', $context, $blocks);
        // line 194
        echo "            </div>
            <div class=\"box_2\">
                ";
        // line 196
        $this->displayBlock('box_2', $context, $blocks);
        // line 312
        echo "            </div>
        </div>
        ";
        
        $__internal_d3457c0ff9164b6ffa338e3761f594a841c923494c623bce47bc1af47bc548db->leave($__internal_d3457c0ff9164b6ffa338e3761f594a841c923494c623bce47bc1af47bc548db_prof);

    }

    // line 184
    public function block_search($context, array $blocks = array())
    {
        $__internal_328744567b697a3d139e93c27288f86cc641b98c6db3cb0f9507309eaa172e94 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_328744567b697a3d139e93c27288f86cc641b98c6db3cb0f9507309eaa172e94->enter($__internal_328744567b697a3d139e93c27288f86cc641b98c6db3cb0f9507309eaa172e94_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "search"));

        // line 185
        echo "                <h1 class=\"m_2\">Featurd Movies</h1>
                <div class=\"search\">
                    <form>
                        <input type=\"text\" value=\"Search...\" onfocus=\"this.value='';\" onblur=\"if (this.value == '') {this.value ='';}\">
                        <input type=\"submit\" value=\"\">
                    </form>
                </div>
                <div class=\"clearfix\"> </div>
                ";
        
        $__internal_328744567b697a3d139e93c27288f86cc641b98c6db3cb0f9507309eaa172e94->leave($__internal_328744567b697a3d139e93c27288f86cc641b98c6db3cb0f9507309eaa172e94_prof);

    }

    // line 196
    public function block_box_2($context, array $blocks = array())
    {
        $__internal_e3f3575d8ebdfabd81fbf9e94d8c70c1cb02b4619b23f27e31d387811bb4cd0b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e3f3575d8ebdfabd81fbf9e94d8c70c1cb02b4619b23f27e31d387811bb4cd0b->enter($__internal_e3f3575d8ebdfabd81fbf9e94d8c70c1cb02b4619b23f27e31d387811bb4cd0b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "box_2"));

        // line 197
        echo "                <div class=\"col-md-5 grid_3\">
                    <div class=\"row_1\">
                        <div class=\"col-md-6 grid_4\"><a href=\"single.html\">
                                <div class=\"grid_2\">
                                    <img src=\"images/pic1.jpg\" class=\"img-responsive\" alt=\"\"/>
                                    <div class=\"caption1\">
                                        <ul class=\"list_3\">
                                            <li><i class=\"icon5\"> </i><p>3,548</p></li>
                                        </ul>
                                        <i class=\"icon4\"> </i>
                                        <p class=\"m_3\">Guardians of the Galaxy</p>
                                    </div>
                                </div>
                                <div class=\"grid_2 col_1\">
                                    <img src=\"images/pic2.jpg\" class=\"img-responsive\" alt=\"\"/>
                                    <div class=\"caption1\">
                                        <ul class=\"list_3\">
                                            <li><i class=\"icon5\"> </i><p>3,548</p></li>
                                        </ul>
                                        <i class=\"icon4\"> </i>
                                        <p class=\"m_3\">Guardians of the Galaxy</p>
                                    </div>
                                </div>
                            </a></div>
                        <div class=\"col-md-6 grid_7\">
                            <div class=\"col_2\">
                                <ul class=\"list_4\">
                                    <li><i class=\"icon1\"> </i><p>2,548</p></li>
                                    <li><i class=\"icon2\"> </i><p>215</p></li>
                                    <li><i class=\"icon3\"> </i><p>546</p></li>
                                    <li>Rating : &nbsp;&nbsp;<p><img src=\"images/rating1.png\" alt=\"\"/></p></li>
                                    <li>Release Date : &nbsp;<span class=\"m_4\">Mar 15, 2015</span> </li>
                                    <div class=\"clearfix\"> </div>
                                </ul>
                                <div class=\"m_5\"><a href=\"single.html\"><img src=\"images/pic3.jpg\" class=\"img-responsive\" alt=\"\"/></a></div>
                            </div>
                        </div>
                        <div class=\"clearfix\"> </div>
                    </div>
                    <div class=\"row_2\">
                        <a href=\"single.html\"><img src=\"images/pic4.jpg\" class=\"img-responsive\" alt=\"\"/></a>
                    </div>
                </div>
                <div class=\"col-md-5 content_right\">
                    <div class=\"row_3\">
                        <div class=\"col-md-6 content_right-box\"><a href=\"single.html\">
                                <div class=\"grid_2\">
                                    <img src=\"images/pic6.jpg\" class=\"img-responsive\" alt=\"\"/>
                                    <div class=\"caption1\">
                                        <ul class=\"list_5\">
                                            <li><i class=\"icon5\"> </i><p>3,548</p></li>
                                        </ul>
                                        <i class=\"icon4 icon6\"> </i>
                                        <p class=\"m_3\">Guardians of the Galaxy</p>
                                    </div>
                                </div>
                            </a></div>
                        <div class=\"col-md-6 grid_5\"><a href=\"single.html\">
                                <div class=\"grid_2\">
                                    <img src=\"images/pic7.jpg\" class=\"img-responsive\" alt=\"\"/>
                                    <div class=\"caption1\">
                                        <ul class=\"list_5\">
                                            <li><i class=\"icon5\"> </i><p>3,548</p></li>
                                        </ul>
                                        <i class=\"icon4 icon6\"> </i>
                                        <p class=\"m_3\">Guardians of the Galaxy</p>
                                    </div>
                                </div>
                            </a></div>
                        <div class=\"clearfix\"> </div>
                    </div>
                    <div class=\"video\">
                        <iframe width=\"100%\" height=\"\" src=\"https://www.youtube.com/embed/s1QeoSedWmM\" frameborder=\"0\" allowfullscreen></iframe>
                    </div>
                    <div class=\"row_5\">
                        <div class=\"col-md-6\">
                            <div class=\"col_2\">
                                <ul class=\"list_4\">
                                    <li><i class=\"icon1\"> </i><p>2,548</p></li>
                                    <li><i class=\"icon2\"> </i><p>215</p></li>
                                    <li><i class=\"icon3\"> </i><p>546</p></li>
                                    <li>Rating : &nbsp;&nbsp;<p><img src=\"images/rating1.png\" alt=\"\"></p></li>
                                    <div class=\"clearfix\"> </div>
                                </ul>

                            </div>
                        </div>
                        <div class=\"col-md-6 m_6\"><a href=\"single.html\">
                                <img src=\"images/pic8.jpg\" class=\"img-responsive\" alt=\"\"/>
                            </a></div>
                    </div>
                </div>
                <div class=\"col-md-2 grid_6\">
                    <div class=\"m_7\"><a href=\"single.html\"><img src=\"images/pic9.jpg\" class=\"img-responsive\" alt=\"\"/></a></div>
                    <div class=\"caption1\">
                        <ul class=\"list_5\">
                            <li><i class=\"icon5\"> </i><p>3,548</p></li>
                        </ul>
                        <i class=\"icon4 icon6\"> </i>
                        <p class=\"m_3\">Guardians of the Galaxy</p>
                    </div>
                    <div class=\"col_2 col_3\">
                        <ul class=\"list_4\">
                            <li><i class=\"icon1\"> </i><p>2,548</p></li>
                            <li><i class=\"icon2\"> </i><p>215</p></li>
                            <li><i class=\"icon3\"> </i><p>546</p></li>
                            <li>Rating : &nbsp;&nbsp;<p><img src=\"images/rating1.png\" alt=\"\"></p></li>
                            <li>Release : &nbsp;<span class=\"m_4\">Mar 15, 2015</span> </li>
                            <div class=\"clearfix\"> </div>
                        </ul>
                        <div class=\"m_8\"><a href=\"single.html\"><img src=\"images/pic10.jpg\" class=\"img-responsive\" alt=\"\"/></a></div>
                    </div>
                </div>
                <div class=\"clearfix\"> </div>
                ";
        
        $__internal_e3f3575d8ebdfabd81fbf9e94d8c70c1cb02b4619b23f27e31d387811bb4cd0b->leave($__internal_e3f3575d8ebdfabd81fbf9e94d8c70c1cb02b4619b23f27e31d387811bb4cd0b_prof);

    }

    public function getTemplateName()
    {
        return "RecommandationBundle::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  425 => 197,  419 => 196,  404 => 185,  398 => 184,  389 => 312,  387 => 196,  383 => 194,  381 => 184,  378 => 183,  372 => 182,  340 => 155,  332 => 150,  324 => 145,  319 => 142,  313 => 141,  297 => 132,  282 => 120,  279 => 119,  273 => 118,  265 => 315,  263 => 182,  259 => 180,  256 => 141,  254 => 118,  251 => 117,  245 => 116,  198 => 330,  183 => 317,  181 => 116,  124 => 62,  120 => 61,  116 => 60,  112 => 59,  80 => 30,  75 => 28,  69 => 25,  62 => 21,  58 => 20,  54 => 19,  49 => 17,  45 => 16,  28 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!--A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<html>
<head>
    <title>Movie_store A Entertainment Category Flat Bootstarp Resposive Website Template | Home :: w3layouts</title>
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\" />
    <meta name=\"keywords\" content=\"Movie_store Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template,
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design\" />
    <script type=\"application/x-javascript\"> addEventListener(\"load\", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
    <link href=\"{{ asset('css/bootstrap.css') }}\" rel='stylesheet' type='text/css' />
    <link href=\"{{ asset('css/style.css') }}\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
    <!-- start plugins -->
    <script type=\"text/javascript\" src=\"{{ asset('js/jquery-1.11.1.min.js') }}\"></script>
    <script src=\"{{ asset('js/responsiveslides.min.js') }}\"></script>
    <script src='{{  asset('http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js') }}'></script>


    <!-- jQuery -->
    <script src=\"{{  asset('http://code.jquery.com/jquery-latest.min.js') }}\"></script>

    <!-- Icon Library -->
    <link rel=\"stylesheet\" href=\"{{  asset('https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css') }}\">

    <script src=\"{{ asset('js/index.js') }}\"></script>
    <script>
        \$(function() {
            var menu = \$('#cssmenu > ul');
            menu.find('.has-sub > ul').hide();

            menu.on('click', function(event) {
                event.preventDefault();

                var targetParent = \$(event.target).parent();
                if (targetParent.hasClass('has-sub')) {
                    targetParent.toggleClass('active');
                    targetParent.children('ul').slideToggle(250);
                }
            })
        });
    </script>

    <script>
        \$(function () {
            \$(\"#slider\").responsiveSlides({
                auto: true,
                nav: true,
                speed: 500,
                namespace: \"callbacks\",
                pager: true,
            });
        });
    </script>
    <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('slick/slick.css') }}\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('slick/slick-theme.css') }}\">
    <script src=\"{{ asset('https://code.jquery.com/jquery-2.2.0.min.js') }}\" type=\"text/javascript\"></script>
    <script src=\"{{ asset('slick/slick.js') }}\" type=\"text/javascript\" charset=\"utf-8\"></script>
    <script type=\"text/javascript\">
        \$(document).on('ready', function() {
            \$(\".regular\").slick({
                dots: true,
                infinite: true,
                slidesToShow: 3,
                slidesToScroll: 3
            });
            \$(\".center\").slick({
                dots: true,
                infinite: true,
                centerMode: true,
                slidesToShow: 3,
                slidesToScroll: 3
            });
            \$(\".variable\").slick({
                dots: true,
                infinite: true,
                variableWidth: true
            });
        });
    </script>
    <style type=\"text/css\">
        html, body {
            margin: 0;
            padding: 0;
        }

        * {
            box-sizing: border-box;
        }

        .slider {
            width: 100%;
            margin: 30px auto;
        }

        .slick-slide {
            margin: 0px 20px;
        }

        .slick-slide img {
            width: 100%;
        }

        .slick-prev:before,
        .slick-next:before {
            color: black;
        }
    </style>
</head>
<body>
<div class=\"container\">
    {%  block container %}
    <div class=\"container_wrap\">
        {% block header_top %}
        <div class=\"header_top\">
            <div class=\"col-sm-3 logo\"><a href=\"index.html\"><img src=\"{{ asset('images/logo.png') }}\" alt=\"\"/></a></div>
            <div class=\"col-sm-6\">
                <div id=\"nav-menu\">
                    <ul>
                        <li class=\"current_page_item\"><a href=\"#\" title=\"Home\">Mes recommandations</a></li>
                        <li class=\"current_page_item\"><a href=\"#\" title=\"Home\">Mes films</a></li>
                        <li class=\"current_page_item\"><a href=\"#\" title=\"Home\">Notez des films</a></li>
                    </ul>
                </div>
            </div>
            <div class=\"col-sm-3 header_right\">
                <ul class=\"header_right_box\">
                    <li><img src=\"{{ asset('images/p1.png') }}\" alt=\"\"/></li>
                    <li><p><a href=\"login.html\">Francis La</a></p></li>
                    <li class=\"last\"><i class=\"edit\"> </i></li>
                    <div class=\"clearfix\"> </div>
                </ul>
            </div>
            <div class=\"clearfix\"> </div>
        </div>
        {%  endblock %}
        {%  block slide %}
        <div class=\"slider\">
            <div class=\"callbacks_container\">
                <ul class=\"rslides\" id=\"slider\">
                    <li><img src=\"{{ asset('images/banner.jpg') }}\" class=\"img-responsive\" alt=\"\"/>
                        <div class=\"button\">
                            <a href=\"#\" class=\"hvr-shutter-out-horizontal\">Watch Now</a>
                        </div>
                    </li>
                    <li><img src=\"{{ asset('images/banner1.jpg') }}\" class=\"img-responsive\" alt=\"\"/>
                        <div class=\"button\">
                            <a href=\"#\" class=\"hvr-shutter-out-horizontal\">Watch Now</a>
                        </div>
                    </li>
                    <li><img src=\"{{ asset('images/banner2.jpg') }}\" class=\"img-responsive\" alt=\"\"/>
                        <div class=\"button\">
                            <a href=\"#\" class=\"hvr-shutter-out-horizontal\">Watch Now</a>
                        </div>
                    </li>
                </ul>
            </div>
            <div class=\"banner_desc\">
                <div class=\"col-md-9\">
                    <ul class=\"list_1\">
                        <li>Published <span class=\"m_1\">Feb 20, 2015</span></li>
                        <li>Updated <span class=\"m_1\">Feb 20 2015</span></li>
                        <li>Rating <span class=\"m_1\"><img src=\"images/rating.png\" alt=\"\"/></span></li>
                    </ul>
                </div>
                <div class=\"col-md-3 grid_1\">
                    <ul class=\"list_1 list_2\">
                        <li><i class=\"icon1\"> </i><p>2,548</p></li>
                        <li><i class=\"icon2\"> </i><p>215</p></li>
                        <li><i class=\"icon3\"> </i><p>546</p></li>
                    </ul>
                </div>
            </div>
        </div>
        {% endblock %}

        <div class=\"content\">
            {%  block content %}
            <div class=\"box_1\">
                {%  block search %}
                <h1 class=\"m_2\">Featurd Movies</h1>
                <div class=\"search\">
                    <form>
                        <input type=\"text\" value=\"Search...\" onfocus=\"this.value='';\" onblur=\"if (this.value == '') {this.value ='';}\">
                        <input type=\"submit\" value=\"\">
                    </form>
                </div>
                <div class=\"clearfix\"> </div>
                {% endblock %}
            </div>
            <div class=\"box_2\">
                {% block box_2 %}
                <div class=\"col-md-5 grid_3\">
                    <div class=\"row_1\">
                        <div class=\"col-md-6 grid_4\"><a href=\"single.html\">
                                <div class=\"grid_2\">
                                    <img src=\"images/pic1.jpg\" class=\"img-responsive\" alt=\"\"/>
                                    <div class=\"caption1\">
                                        <ul class=\"list_3\">
                                            <li><i class=\"icon5\"> </i><p>3,548</p></li>
                                        </ul>
                                        <i class=\"icon4\"> </i>
                                        <p class=\"m_3\">Guardians of the Galaxy</p>
                                    </div>
                                </div>
                                <div class=\"grid_2 col_1\">
                                    <img src=\"images/pic2.jpg\" class=\"img-responsive\" alt=\"\"/>
                                    <div class=\"caption1\">
                                        <ul class=\"list_3\">
                                            <li><i class=\"icon5\"> </i><p>3,548</p></li>
                                        </ul>
                                        <i class=\"icon4\"> </i>
                                        <p class=\"m_3\">Guardians of the Galaxy</p>
                                    </div>
                                </div>
                            </a></div>
                        <div class=\"col-md-6 grid_7\">
                            <div class=\"col_2\">
                                <ul class=\"list_4\">
                                    <li><i class=\"icon1\"> </i><p>2,548</p></li>
                                    <li><i class=\"icon2\"> </i><p>215</p></li>
                                    <li><i class=\"icon3\"> </i><p>546</p></li>
                                    <li>Rating : &nbsp;&nbsp;<p><img src=\"images/rating1.png\" alt=\"\"/></p></li>
                                    <li>Release Date : &nbsp;<span class=\"m_4\">Mar 15, 2015</span> </li>
                                    <div class=\"clearfix\"> </div>
                                </ul>
                                <div class=\"m_5\"><a href=\"single.html\"><img src=\"images/pic3.jpg\" class=\"img-responsive\" alt=\"\"/></a></div>
                            </div>
                        </div>
                        <div class=\"clearfix\"> </div>
                    </div>
                    <div class=\"row_2\">
                        <a href=\"single.html\"><img src=\"images/pic4.jpg\" class=\"img-responsive\" alt=\"\"/></a>
                    </div>
                </div>
                <div class=\"col-md-5 content_right\">
                    <div class=\"row_3\">
                        <div class=\"col-md-6 content_right-box\"><a href=\"single.html\">
                                <div class=\"grid_2\">
                                    <img src=\"images/pic6.jpg\" class=\"img-responsive\" alt=\"\"/>
                                    <div class=\"caption1\">
                                        <ul class=\"list_5\">
                                            <li><i class=\"icon5\"> </i><p>3,548</p></li>
                                        </ul>
                                        <i class=\"icon4 icon6\"> </i>
                                        <p class=\"m_3\">Guardians of the Galaxy</p>
                                    </div>
                                </div>
                            </a></div>
                        <div class=\"col-md-6 grid_5\"><a href=\"single.html\">
                                <div class=\"grid_2\">
                                    <img src=\"images/pic7.jpg\" class=\"img-responsive\" alt=\"\"/>
                                    <div class=\"caption1\">
                                        <ul class=\"list_5\">
                                            <li><i class=\"icon5\"> </i><p>3,548</p></li>
                                        </ul>
                                        <i class=\"icon4 icon6\"> </i>
                                        <p class=\"m_3\">Guardians of the Galaxy</p>
                                    </div>
                                </div>
                            </a></div>
                        <div class=\"clearfix\"> </div>
                    </div>
                    <div class=\"video\">
                        <iframe width=\"100%\" height=\"\" src=\"https://www.youtube.com/embed/s1QeoSedWmM\" frameborder=\"0\" allowfullscreen></iframe>
                    </div>
                    <div class=\"row_5\">
                        <div class=\"col-md-6\">
                            <div class=\"col_2\">
                                <ul class=\"list_4\">
                                    <li><i class=\"icon1\"> </i><p>2,548</p></li>
                                    <li><i class=\"icon2\"> </i><p>215</p></li>
                                    <li><i class=\"icon3\"> </i><p>546</p></li>
                                    <li>Rating : &nbsp;&nbsp;<p><img src=\"images/rating1.png\" alt=\"\"></p></li>
                                    <div class=\"clearfix\"> </div>
                                </ul>

                            </div>
                        </div>
                        <div class=\"col-md-6 m_6\"><a href=\"single.html\">
                                <img src=\"images/pic8.jpg\" class=\"img-responsive\" alt=\"\"/>
                            </a></div>
                    </div>
                </div>
                <div class=\"col-md-2 grid_6\">
                    <div class=\"m_7\"><a href=\"single.html\"><img src=\"images/pic9.jpg\" class=\"img-responsive\" alt=\"\"/></a></div>
                    <div class=\"caption1\">
                        <ul class=\"list_5\">
                            <li><i class=\"icon5\"> </i><p>3,548</p></li>
                        </ul>
                        <i class=\"icon4 icon6\"> </i>
                        <p class=\"m_3\">Guardians of the Galaxy</p>
                    </div>
                    <div class=\"col_2 col_3\">
                        <ul class=\"list_4\">
                            <li><i class=\"icon1\"> </i><p>2,548</p></li>
                            <li><i class=\"icon2\"> </i><p>215</p></li>
                            <li><i class=\"icon3\"> </i><p>546</p></li>
                            <li>Rating : &nbsp;&nbsp;<p><img src=\"images/rating1.png\" alt=\"\"></p></li>
                            <li>Release : &nbsp;<span class=\"m_4\">Mar 15, 2015</span> </li>
                            <div class=\"clearfix\"> </div>
                        </ul>
                        <div class=\"m_8\"><a href=\"single.html\"><img src=\"images/pic10.jpg\" class=\"img-responsive\" alt=\"\"/></a></div>
                    </div>
                </div>
                <div class=\"clearfix\"> </div>
                {% endblock %}
            </div>
        </div>
        {% endblock %}
    </div>
    {% endblock %}
</div>

<div class=\"container\">
    <footer id=\"footer\">
        <div id=\"footer-3d\">
            <div class=\"gp-container\">
                <span class=\"first-widget-bend\"></span>
            </div>
        </div>
        <div id=\"footer-widgets\" class=\"gp-footer-larger-first-col\">
            <div class=\"gp-container\">
                <div class=\"footer-widget footer-1\">
                    <div class=\"wpb_wrapper\">
                        <img src=\"{{ asset('images/f_logo.png') }}\" alt=\"\"/>
                    </div>
                    <br>
                    <p>It is a long established fact that a reader will be distracted by the readable content of a page.</p>
                </div>
                <div class=\"footer_box\">
                    <div class=\"col_1_of_3 span_1_of_3\">
                        <h3>Categories</h3>
                        <ul class=\"first\">
                            <li><a href=\"#\">Film</a></li>
                            <li><a href=\"#\">Auteur</a></li>
                            <li><a href=\"#\">Réalisateur</a></li>
                        </ul>
                    </div>
                    <div class=\"col_1_of_3 span_1_of_3\">
                        <h3>Mentions légales</h3>
                        <ul class=\"first\">
                            <li><a href=\"#\">New products</a></li>
                            <li><a href=\"#\">top sellers</a></li>
                            <li><a href=\"#\">Specials</a></li>
                        </ul>
                    </div>
                    <div class=\"col_1_of_3 span_1_of_3\">
                        <h3>Contact</h3>
                        <ul class=\"first\">
                            <li><a href=\"#\">Facebook</a></li>
                            <li><a href=\"#\">Twitter</a></li>
                            <li><a href=\"#\">Youtube</a></li>
                        </ul>
                    </div>
                    <div class=\"clearfix\"> </div>
                </div>
                <div class=\"clearfix\"> </div>
            </div>
        </div>
    </footer>
</div>

</body>
</html>", "RecommandationBundle::base.html.twig", "C:\\wamp\\www\\my_project_transversale\\src\\RecommandationBundle/Resources/views/base.html.twig");
    }
}
