<?php

/* RecommandationBundle:Default:index.html.twig */
class __TwigTemplate_9317fb9d4a56ef6bdbef96ea7bba2152d22ed9b3195f9528305578d3b77e9d0d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("RecommandationBundle::layout.html.twig", "RecommandationBundle:Default:index.html.twig", 1);
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
        $__internal_be0194d8b17e54180747f3619a3a17629c085186f07f8d3848bfaff9ed2fdf7b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_be0194d8b17e54180747f3619a3a17629c085186f07f8d3848bfaff9ed2fdf7b->enter($__internal_be0194d8b17e54180747f3619a3a17629c085186f07f8d3848bfaff9ed2fdf7b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "RecommandationBundle:Default:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_be0194d8b17e54180747f3619a3a17629c085186f07f8d3848bfaff9ed2fdf7b->leave($__internal_be0194d8b17e54180747f3619a3a17629c085186f07f8d3848bfaff9ed2fdf7b_prof);

    }

    // line 4
    public function block_search($context, array $blocks = array())
    {
        $__internal_7ee58f39d98a858896b645b6df24011ba3f9f87d3666bf9b96edf11ea06597b0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7ee58f39d98a858896b645b6df24011ba3f9f87d3666bf9b96edf11ea06597b0->enter($__internal_7ee58f39d98a858896b645b6df24011ba3f9f87d3666bf9b96edf11ea06597b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "search"));

        // line 5
        echo "<div class=\"col-md-12\">

    <form class=\"search_bar huge\">
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
    <div class=\"clearfix\"> </div>
";
        
        $__internal_7ee58f39d98a858896b645b6df24011ba3f9f87d3666bf9b96edf11ea06597b0->leave($__internal_7ee58f39d98a858896b645b6df24011ba3f9f87d3666bf9b96edf11ea06597b0_prof);

    }

    // line 24
    public function block_slide($context, array $blocks = array())
    {
        $__internal_3f96674dbf556c4f306f7d1cdb6cc4efee141d719f9d3390d1b5c4e5a3f8ab6f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3f96674dbf556c4f306f7d1cdb6cc4efee141d719f9d3390d1b5c4e5a3f8ab6f->enter($__internal_3f96674dbf556c4f306f7d1cdb6cc4efee141d719f9d3390d1b5c4e5a3f8ab6f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "slide"));

        
        $__internal_3f96674dbf556c4f306f7d1cdb6cc4efee141d719f9d3390d1b5c4e5a3f8ab6f->leave($__internal_3f96674dbf556c4f306f7d1cdb6cc4efee141d719f9d3390d1b5c4e5a3f8ab6f_prof);

    }

    // line 26
    public function block_box_2($context, array $blocks = array())
    {
        $__internal_6c84a0d9b12ab68561f8032945d2a869e7b9294008a99839ae7e73d31d78fcb1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6c84a0d9b12ab68561f8032945d2a869e7b9294008a99839ae7e73d31d78fcb1->enter($__internal_6c84a0d9b12ab68561f8032945d2a869e7b9294008a99839ae7e73d31d78fcb1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "box_2"));

        
        $__internal_6c84a0d9b12ab68561f8032945d2a869e7b9294008a99839ae7e73d31d78fcb1->leave($__internal_6c84a0d9b12ab68561f8032945d2a869e7b9294008a99839ae7e73d31d78fcb1_prof);

    }

    public function getTemplateName()
    {
        return "RecommandationBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 26,  67 => 24,  42 => 5,  36 => 4,  11 => 1,);
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

    <form class=\"search_bar huge\">
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
    <div class=\"clearfix\"> </div>
{%  endblock %}
{% block slide %}
{%  endblock %}
{% block box_2 %}
{% endblock %}
", "RecommandationBundle:Default:index.html.twig", "C:\\wamp\\www\\my_project_transversale\\src\\RecommandationBundle/Resources/views/Default/index.html.twig");
    }
}
