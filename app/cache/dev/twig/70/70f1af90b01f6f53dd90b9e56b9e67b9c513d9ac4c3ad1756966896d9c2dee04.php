<?php

/* RecommandationBundle:Default:algorithme.html.twig */
class __TwigTemplate_ec83984d840be07dff061da66f4eaf25a223195efbb6acf05210b050404d4c4b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_6ed4299edb0965eaf9f620641234e73cf05c8d5a88e83e5b6f91a421bb503038 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6ed4299edb0965eaf9f620641234e73cf05c8d5a88e83e5b6f91a421bb503038->enter($__internal_6ed4299edb0965eaf9f620641234e73cf05c8d5a88e83e5b6f91a421bb503038_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "RecommandationBundle:Default:algorithme.html.twig"));

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
</head>
<body>
<h1>Mon algorithme ici</h1><p>
";
        // line 18
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["ages"]) ? $context["ages"] : $this->getContext($context, "ages")));
        foreach ($context['_seq'] as $context["_key"] => $context["age"]) {
            // line 19
            echo "
    ";
            // line 20
            echo twig_escape_filter($this->env, $this->getAttribute($context["age"], "ageid", array()), "html", null, true);
            echo "</h3>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['age'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 22
        echo "</p>
</body>
</html>";
        
        $__internal_6ed4299edb0965eaf9f620641234e73cf05c8d5a88e83e5b6f91a421bb503038->leave($__internal_6ed4299edb0965eaf9f620641234e73cf05c8d5a88e83e5b6f91a421bb503038_prof);

    }

    public function getTemplateName()
    {
        return "RecommandationBundle:Default:algorithme.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  56 => 22,  48 => 20,  45 => 19,  41 => 18,  22 => 1,);
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
</head>
<body>
<h1>Mon algorithme ici</h1><p>
{% for age in ages %}

    {{ age.ageid }}</h3>
    {% endfor %}
</p>
</body>
</html>", "RecommandationBundle:Default:algorithme.html.twig", "C:\\wamp\\www\\my_project_transversale\\src\\RecommandationBundle/Resources/views/Default/algorithme.html.twig");
    }
}
