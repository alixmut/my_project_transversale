<?php

/* @Recommandation/Default/index.html.twig */
class __TwigTemplate_96d430c52dd473118e08a6befc37187d93dbe9eb1908d8c9ab8a925dd0950c70 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("RecommandationBundle::base.html.twig", "@Recommandation/Default/index.html.twig", 1);
        $this->blocks = array(
            'slide' => array($this, 'block_slide'),
            'search' => array($this, 'block_search'),
            'box_2' => array($this, 'block_box_2'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "RecommandationBundle::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_slide($context, array $blocks = array())
    {
    }

    // line 5
    public function block_search($context, array $blocks = array())
    {
        // line 6
        echo "    <form class=\"search_bar huge\">
        <div class=\"search_dropdown\" style=\"width: 16px;\">
            <span>All</span>
            <ul>
                <li class=\"selected\">All</li>
                <li>Books</li>
                <li>Articles</li>
            </ul>
        </div>

        <input type=\"text\" placeholder=\"Search for anything\" />

        <button type=\"submit\" value=\"Search\">Search</button>
    </form>
";
    }

    // line 21
    public function block_box_2($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "@Recommandation/Default/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  56 => 21,  38 => 6,  35 => 5,  30 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@Recommandation/Default/index.html.twig", "C:\\wamp\\www\\my_project_transversale\\src\\RecommandationBundle\\Resources\\views\\Default\\index.html.twig");
    }
}
