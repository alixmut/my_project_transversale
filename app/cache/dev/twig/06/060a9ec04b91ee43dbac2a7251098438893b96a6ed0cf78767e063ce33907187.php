<?php

/* RecommandationBundle::layout.html.twig */
class __TwigTemplate_62d5977b7ee02c4765dbff44743ce2f403d28f1def6c308d71fd715405dcba82 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("RecommandationBundle::base.html.twig", "RecommandationBundle::layout.html.twig", 2);
        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "RecommandationBundle::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_08aba759d7a53e562184f1b1dc984b37bbfa192c1faa98ef4aff9f1c9f9847e7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_08aba759d7a53e562184f1b1dc984b37bbfa192c1faa98ef4aff9f1c9f9847e7->enter($__internal_08aba759d7a53e562184f1b1dc984b37bbfa192c1faa98ef4aff9f1c9f9847e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "RecommandationBundle::layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_08aba759d7a53e562184f1b1dc984b37bbfa192c1faa98ef4aff9f1c9f9847e7->leave($__internal_08aba759d7a53e562184f1b1dc984b37bbfa192c1faa98ef4aff9f1c9f9847e7_prof);

    }

    public function getTemplateName()
    {
        return "RecommandationBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  11 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{# src/GudetamaFranceBundle/Resources/views/layout.html.twig #}
{% extends 'RecommandationBundle::base.html.twig' %}", "RecommandationBundle::layout.html.twig", "C:\\wamp\\www\\my_project_transversale\\src\\RecommandationBundle/Resources/views/layout.html.twig");
    }
}
