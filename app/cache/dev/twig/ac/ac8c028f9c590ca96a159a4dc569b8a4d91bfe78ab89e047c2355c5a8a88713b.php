<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_d71d47e933c4a0185f81a010cbb646db2fcdda8acc562e25a63c713055976d21 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
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
        $__internal_2d1cb60dad32476875ee816d650f501587b0d9bc4538e55abc1c8283f5947c7a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2d1cb60dad32476875ee816d650f501587b0d9bc4538e55abc1c8283f5947c7a->enter($__internal_2d1cb60dad32476875ee816d650f501587b0d9bc4538e55abc1c8283f5947c7a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2d1cb60dad32476875ee816d650f501587b0d9bc4538e55abc1c8283f5947c7a->leave($__internal_2d1cb60dad32476875ee816d650f501587b0d9bc4538e55abc1c8283f5947c7a_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_b054bcb433dc3df6a48ffea1fe1056f1aa3afdfe33ecf79fb5c6019a3cd35f90 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b054bcb433dc3df6a48ffea1fe1056f1aa3afdfe33ecf79fb5c6019a3cd35f90->enter($__internal_b054bcb433dc3df6a48ffea1fe1056f1aa3afdfe33ecf79fb5c6019a3cd35f90_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_b054bcb433dc3df6a48ffea1fe1056f1aa3afdfe33ecf79fb5c6019a3cd35f90->leave($__internal_b054bcb433dc3df6a48ffea1fe1056f1aa3afdfe33ecf79fb5c6019a3cd35f90_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_9e87ff8471945bdd7928546f4a6230b7ffe67b44a87582bd71dfee4121bb7c44 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9e87ff8471945bdd7928546f4a6230b7ffe67b44a87582bd71dfee4121bb7c44->enter($__internal_9e87ff8471945bdd7928546f4a6230b7ffe67b44a87582bd71dfee4121bb7c44_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_9e87ff8471945bdd7928546f4a6230b7ffe67b44a87582bd71dfee4121bb7c44->leave($__internal_9e87ff8471945bdd7928546f4a6230b7ffe67b44a87582bd71dfee4121bb7c44_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_a605a2944c6f95749d2816a1549232fe1c042dbf82ce4d1ad35bd7e5b94e3e20 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a605a2944c6f95749d2816a1549232fe1c042dbf82ce4d1ad35bd7e5b94e3e20->enter($__internal_a605a2944c6f95749d2816a1549232fe1c042dbf82ce4d1ad35bd7e5b94e3e20_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_a605a2944c6f95749d2816a1549232fe1c042dbf82ce4d1ad35bd7e5b94e3e20->leave($__internal_a605a2944c6f95749d2816a1549232fe1c042dbf82ce4d1ad35bd7e5b94e3e20_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 33,  114 => 32,  108 => 28,  106 => 27,  102 => 25,  96 => 24,  88 => 21,  82 => 17,  80 => 16,  75 => 14,  70 => 13,  64 => 12,  54 => 9,  48 => 6,  45 => 5,  42 => 4,  36 => 3,  11 => 1,);
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

{% block head %}
    {% if collector.hasexception %}
        <style>
            {{ render(path('_profiler_exception_css', { token: token })) }}
        </style>
    {% endif %}
    {{ parent() }}
{% endblock %}

{% block menu %}
    <span class=\"label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/exception.svg') }}</span>
        <strong>Exception</strong>
        {% if collector.hasexception %}
            <span class=\"count\">
                <span>1</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    <h2>Exceptions</h2>

    {% if not collector.hasexception %}
        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    {% else %}
        <div class=\"sf-reset\">
            {{ render(path('_profiler_exception', { token: token })) }}
        </div>
    {% endif %}
{% endblock %}
", "@WebProfiler/Collector/exception.html.twig", "C:\\wamp\\www\\my_project_transversale\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\exception.html.twig");
    }
}
