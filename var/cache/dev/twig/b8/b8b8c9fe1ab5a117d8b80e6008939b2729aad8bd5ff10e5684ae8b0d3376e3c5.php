<?php

/* @Twig/Exception/traces.txt.twig */
class __TwigTemplate_2dfed417732ca8e925afc6f0fb3d57cd27b11c2738f13f30422cbcc7bc2ca394 extends Twig_Template
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
        $__internal_34da22c95090c3f7132b1d82bab315cf66fa2d19bcf7c65dff0ca0a81977da4d = $this->env->getExtension("native_profiler");
        $__internal_34da22c95090c3f7132b1d82bab315cf66fa2d19bcf7c65dff0ca0a81977da4d->enter($__internal_34da22c95090c3f7132b1d82bab315cf66fa2d19bcf7c65dff0ca0a81977da4d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/traces.txt.twig"));

        // line 1
        if (twig_length_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "trace", array()))) {
            // line 2
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "trace", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["trace"]) {
                // line 3
                $this->loadTemplate("@Twig/Exception/trace.txt.twig", "@Twig/Exception/traces.txt.twig", 3)->display(array("trace" => $context["trace"]));
                // line 4
                echo "
";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['trace'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        
        $__internal_34da22c95090c3f7132b1d82bab315cf66fa2d19bcf7c65dff0ca0a81977da4d->leave($__internal_34da22c95090c3f7132b1d82bab315cf66fa2d19bcf7c65dff0ca0a81977da4d_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/traces.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 4,  28 => 3,  24 => 2,  22 => 1,);
    }
}
/* {% if exception.trace|length %}*/
/* {% for trace in exception.trace %}*/
/* {% include '@Twig/Exception/trace.txt.twig' with { 'trace': trace } only %}*/
/* */
/* {% endfor %}*/
/* {% endif %}*/
/* */
