<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_bb6fc748853fa26000657b1a33da27e4d585bb9a590be452e541edd2975fa1ae extends Twig_Template
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
        $__internal_8f17af12a501846c904c750df00783b4ca31d98286c9b1fe9e49d2402f039098 = $this->env->getExtension("native_profiler");
        $__internal_8f17af12a501846c904c750df00783b4ca31d98286c9b1fe9e49d2402f039098->enter($__internal_8f17af12a501846c904c750df00783b4ca31d98286c9b1fe9e49d2402f039098_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8f17af12a501846c904c750df00783b4ca31d98286c9b1fe9e49d2402f039098->leave($__internal_8f17af12a501846c904c750df00783b4ca31d98286c9b1fe9e49d2402f039098_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_cd916d3f9de123aeb1ebb8b241ed161e601964888d1b63e762c8556c36a47634 = $this->env->getExtension("native_profiler");
        $__internal_cd916d3f9de123aeb1ebb8b241ed161e601964888d1b63e762c8556c36a47634->enter($__internal_cd916d3f9de123aeb1ebb8b241ed161e601964888d1b63e762c8556c36a47634_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_cd916d3f9de123aeb1ebb8b241ed161e601964888d1b63e762c8556c36a47634->leave($__internal_cd916d3f9de123aeb1ebb8b241ed161e601964888d1b63e762c8556c36a47634_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_baf2a35efeb787d61735767e62e716534bd0ce1c88e30e1591168d422bc50c15 = $this->env->getExtension("native_profiler");
        $__internal_baf2a35efeb787d61735767e62e716534bd0ce1c88e30e1591168d422bc50c15->enter($__internal_baf2a35efeb787d61735767e62e716534bd0ce1c88e30e1591168d422bc50c15_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_baf2a35efeb787d61735767e62e716534bd0ce1c88e30e1591168d422bc50c15->leave($__internal_baf2a35efeb787d61735767e62e716534bd0ce1c88e30e1591168d422bc50c15_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_8ccf2b0bd279a9fca558c0d0d3bd3da2c8572fd1fb2efc11394b787e5828f2e0 = $this->env->getExtension("native_profiler");
        $__internal_8ccf2b0bd279a9fca558c0d0d3bd3da2c8572fd1fb2efc11394b787e5828f2e0->enter($__internal_8ccf2b0bd279a9fca558c0d0d3bd3da2c8572fd1fb2efc11394b787e5828f2e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_8ccf2b0bd279a9fca558c0d0d3bd3da2c8572fd1fb2efc11394b787e5828f2e0->leave($__internal_8ccf2b0bd279a9fca558c0d0d3bd3da2c8572fd1fb2efc11394b787e5828f2e0_prof);

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
}
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     <link href="{{ absolute_url(asset('bundles/framework/css/exception.css')) }}" rel="stylesheet" type="text/css" media="all" />*/
/* {% endblock %}*/
/* */
/* {% block title %}*/
/*     {{ exception.message }} ({{ status_code }} {{ status_text }})*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     {% include '@Twig/Exception/exception.html.twig' %}*/
/* {% endblock %}*/
/* */
