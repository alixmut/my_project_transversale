<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_579d33ebddae7199b1c12a85c5ce01a4ce56919f5a80a4e3cacb4ca40874c071 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_683edfdd569b058d3260217df593ae965337addb2c5bb45813147de9a56064bd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_683edfdd569b058d3260217df593ae965337addb2c5bb45813147de9a56064bd->enter($__internal_683edfdd569b058d3260217df593ae965337addb2c5bb45813147de9a56064bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_683edfdd569b058d3260217df593ae965337addb2c5bb45813147de9a56064bd->leave($__internal_683edfdd569b058d3260217df593ae965337addb2c5bb45813147de9a56064bd_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_fc11f20e22c45625b85e7ca56b1b7f3265ef3da2e7b1f40b34a1ee39b81c1a10 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fc11f20e22c45625b85e7ca56b1b7f3265ef3da2e7b1f40b34a1ee39b81c1a10->enter($__internal_fc11f20e22c45625b85e7ca56b1b7f3265ef3da2e7b1f40b34a1ee39b81c1a10_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_fc11f20e22c45625b85e7ca56b1b7f3265ef3da2e7b1f40b34a1ee39b81c1a10->leave($__internal_fc11f20e22c45625b85e7ca56b1b7f3265ef3da2e7b1f40b34a1ee39b81c1a10_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_57bab3e5f5d741bd6c04ba9749062ebbba070471c4f1dc5a3df4e6053cf94c5f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_57bab3e5f5d741bd6c04ba9749062ebbba070471c4f1dc5a3df4e6053cf94c5f->enter($__internal_57bab3e5f5d741bd6c04ba9749062ebbba070471c4f1dc5a3df4e6053cf94c5f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_57bab3e5f5d741bd6c04ba9749062ebbba070471c4f1dc5a3df4e6053cf94c5f->leave($__internal_57bab3e5f5d741bd6c04ba9749062ebbba070471c4f1dc5a3df4e6053cf94c5f_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_17542a1f1fc070f2c8665568df60f0ab784aa6f56abdeb6b25e0a93797bb3e77 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_17542a1f1fc070f2c8665568df60f0ab784aa6f56abdeb6b25e0a93797bb3e77->enter($__internal_17542a1f1fc070f2c8665568df60f0ab784aa6f56abdeb6b25e0a93797bb3e77_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_17542a1f1fc070f2c8665568df60f0ab784aa6f56abdeb6b25e0a93797bb3e77->leave($__internal_17542a1f1fc070f2c8665568df60f0ab784aa6f56abdeb6b25e0a93797bb3e77_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block head %}
    <link href=\"{{ absolute_url(asset('bundles/framework/css/exception.css')) }}\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
", "@Twig/Exception/exception_full.html.twig", "C:\\wamp\\www\\my_project_transversale\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\exception_full.html.twig");
    }
}
