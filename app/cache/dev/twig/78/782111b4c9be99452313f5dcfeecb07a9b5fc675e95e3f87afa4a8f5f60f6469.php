<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_52125b40b93fb5efb3259a1588b19c06f8035e1b4c994060f07d851959e6c144 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_18975bcb0efadbe23f5f7a131ddec58f7c6b7c5d0890ad18e26903292b6e82f1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_18975bcb0efadbe23f5f7a131ddec58f7c6b7c5d0890ad18e26903292b6e82f1->enter($__internal_18975bcb0efadbe23f5f7a131ddec58f7c6b7c5d0890ad18e26903292b6e82f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_18975bcb0efadbe23f5f7a131ddec58f7c6b7c5d0890ad18e26903292b6e82f1->leave($__internal_18975bcb0efadbe23f5f7a131ddec58f7c6b7c5d0890ad18e26903292b6e82f1_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_cc9cc23986fe8babf1ceef7082dc53e87148fed25b622aa848536308d711e229 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cc9cc23986fe8babf1ceef7082dc53e87148fed25b622aa848536308d711e229->enter($__internal_cc9cc23986fe8babf1ceef7082dc53e87148fed25b622aa848536308d711e229_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_cc9cc23986fe8babf1ceef7082dc53e87148fed25b622aa848536308d711e229->leave($__internal_cc9cc23986fe8babf1ceef7082dc53e87148fed25b622aa848536308d711e229_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_e390f2318d31a5fe4c5042f12453b077269b05e570e4822bcbe71c3eb54a6b82 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e390f2318d31a5fe4c5042f12453b077269b05e570e4822bcbe71c3eb54a6b82->enter($__internal_e390f2318d31a5fe4c5042f12453b077269b05e570e4822bcbe71c3eb54a6b82_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_e390f2318d31a5fe4c5042f12453b077269b05e570e4822bcbe71c3eb54a6b82->leave($__internal_e390f2318d31a5fe4c5042f12453b077269b05e570e4822bcbe71c3eb54a6b82_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_94fe9082eb9b75c29581e909d7b62817df6fa530ec8410cd46ea6feecbaaf51f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_94fe9082eb9b75c29581e909d7b62817df6fa530ec8410cd46ea6feecbaaf51f->enter($__internal_94fe9082eb9b75c29581e909d7b62817df6fa530ec8410cd46ea6feecbaaf51f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_94fe9082eb9b75c29581e909d7b62817df6fa530ec8410cd46ea6feecbaaf51f->leave($__internal_94fe9082eb9b75c29581e909d7b62817df6fa530ec8410cd46ea6feecbaaf51f_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "@WebProfiler/Collector/router.html.twig", "C:\\wamp\\www\\my_project_transversale\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\router.html.twig");
    }
}
