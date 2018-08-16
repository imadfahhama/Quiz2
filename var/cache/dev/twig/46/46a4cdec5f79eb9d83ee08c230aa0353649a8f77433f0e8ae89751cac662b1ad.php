<?php

/* OCPlatformBundle::layout.html.twig */
class __TwigTemplate_0eb60c81181228f39c9b5910347436ebe204985eca17b96ad9ad5f3e6cb08556 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("OCCoreBundle::layout.html.twig", "OCPlatformBundle::layout.html.twig", 3);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
            'ocplatform_body' => array($this, 'block_ocplatform_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "OCCoreBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_58a1f5050299bc6282713e0fea0e3848a93fd90eb0aacfb875c21b85519fdd84 = $this->env->getExtension("native_profiler");
        $__internal_58a1f5050299bc6282713e0fea0e3848a93fd90eb0aacfb875c21b85519fdd84->enter($__internal_58a1f5050299bc6282713e0fea0e3848a93fd90eb0aacfb875c21b85519fdd84_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OCPlatformBundle::layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_58a1f5050299bc6282713e0fea0e3848a93fd90eb0aacfb875c21b85519fdd84->leave($__internal_58a1f5050299bc6282713e0fea0e3848a93fd90eb0aacfb875c21b85519fdd84_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_089db112cef54eeebbf249410ef81e4b132d1170491e8589b1bb5895fcd24294 = $this->env->getExtension("native_profiler");
        $__internal_089db112cef54eeebbf249410ef81e4b132d1170491e8589b1bb5895fcd24294->enter($__internal_089db112cef54eeebbf249410ef81e4b132d1170491e8589b1bb5895fcd24294_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 6
        echo "  Annonces - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_089db112cef54eeebbf249410ef81e4b132d1170491e8589b1bb5895fcd24294->leave($__internal_089db112cef54eeebbf249410ef81e4b132d1170491e8589b1bb5895fcd24294_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_eb23065c94120d032ca11c56f710f7599776b278e8c29d238253a73a0cea07f7 = $this->env->getExtension("native_profiler");
        $__internal_eb23065c94120d032ca11c56f710f7599776b278e8c29d238253a73a0cea07f7->enter($__internal_eb23065c94120d032ca11c56f710f7599776b278e8c29d238253a73a0cea07f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "
  ";
        // line 12
        echo "  <h1>Annonces</h1>

  <hr>

  ";
        // line 17
        echo "  ";
        $this->displayBlock('ocplatform_body', $context, $blocks);
        // line 19
        echo "
";
        
        $__internal_eb23065c94120d032ca11c56f710f7599776b278e8c29d238253a73a0cea07f7->leave($__internal_eb23065c94120d032ca11c56f710f7599776b278e8c29d238253a73a0cea07f7_prof);

    }

    // line 17
    public function block_ocplatform_body($context, array $blocks = array())
    {
        $__internal_f87325e866cac5a4a1276ee815a6b0bcd5ff21effbf78067e159cd7e93cb74b6 = $this->env->getExtension("native_profiler");
        $__internal_f87325e866cac5a4a1276ee815a6b0bcd5ff21effbf78067e159cd7e93cb74b6->enter($__internal_f87325e866cac5a4a1276ee815a6b0bcd5ff21effbf78067e159cd7e93cb74b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ocplatform_body"));

        // line 18
        echo "  ";
        
        $__internal_f87325e866cac5a4a1276ee815a6b0bcd5ff21effbf78067e159cd7e93cb74b6->leave($__internal_f87325e866cac5a4a1276ee815a6b0bcd5ff21effbf78067e159cd7e93cb74b6_prof);

    }

    public function getTemplateName()
    {
        return "OCPlatformBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  84 => 18,  78 => 17,  70 => 19,  67 => 17,  61 => 12,  58 => 10,  52 => 9,  42 => 6,  36 => 5,  11 => 3,);
    }
}
/* {# src/OC/PlatformBundle/Resources/views/layout.html.twig #}*/
/* */
/* {% extends "OCCoreBundle::layout.html.twig" %}*/
/* */
/* {% block title %}*/
/*   Annonces - {{ parent() }}*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/* */
/*   {# On définit un sous-titre commun à toutes les pages du bundle, par exemple #}*/
/*   <h1>Annonces</h1>*/
/* */
/*   <hr>*/
/* */
/*   {# On définit un nouveau bloc, que les vues du bundle pourront remplir #}*/
/*   {% block ocplatform_body %}*/
/*   {% endblock %}*/
/* */
/* {% endblock %}*/
/* */
