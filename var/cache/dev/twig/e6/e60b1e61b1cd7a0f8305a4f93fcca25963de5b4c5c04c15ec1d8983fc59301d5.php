<?php

/* OCPlatformBundle:Advert:add.html.twig */
class __TwigTemplate_1415691209b5b52c341681660ed764b441a4fdd8d75c31d5dba948c0fae2b487 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("OCPlatformBundle::layout.html.twig", "OCPlatformBundle:Advert:add.html.twig", 3);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "OCPlatformBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ec5ca62f84d3a44f3742fb461dc0f6777e430b237cdd61c5fee29f46017a8c1d = $this->env->getExtension("native_profiler");
        $__internal_ec5ca62f84d3a44f3742fb461dc0f6777e430b237cdd61c5fee29f46017a8c1d->enter($__internal_ec5ca62f84d3a44f3742fb461dc0f6777e430b237cdd61c5fee29f46017a8c1d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OCPlatformBundle:Advert:add.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ec5ca62f84d3a44f3742fb461dc0f6777e430b237cdd61c5fee29f46017a8c1d->leave($__internal_ec5ca62f84d3a44f3742fb461dc0f6777e430b237cdd61c5fee29f46017a8c1d_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_d11495db669f1ee7d8971425b4aedefff842a921e9ba4725c2ab0336a786481f = $this->env->getExtension("native_profiler");
        $__internal_d11495db669f1ee7d8971425b4aedefff842a921e9ba4725c2ab0336a786481f->enter($__internal_d11495db669f1ee7d8971425b4aedefff842a921e9ba4725c2ab0336a786481f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "
  <h2>Ajouter une annonce</h2>

  ";
        // line 9
        echo twig_include($this->env, $context, "OCPlatformBundle:Advert:form.html.twig");
        echo "

  <p>
    Attention : cette annonce sera ajoutée directement
    sur la page d'accueil après validation du formulaire.
  </p>

";
        
        $__internal_d11495db669f1ee7d8971425b4aedefff842a921e9ba4725c2ab0336a786481f->leave($__internal_d11495db669f1ee7d8971425b4aedefff842a921e9ba4725c2ab0336a786481f_prof);

    }

    public function getTemplateName()
    {
        return "OCPlatformBundle:Advert:add.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  45 => 9,  40 => 6,  34 => 5,  11 => 3,);
    }
}
/* {# src/OC/PlatformBundle/Resources/views/Advert/add.html.twig #}*/
/* */
/* {% extends "OCPlatformBundle::layout.html.twig" %}*/
/* */
/* {% block body %}*/
/* */
/*   <h2>Ajouter une annonce</h2>*/
/* */
/*   {{ include("OCPlatformBundle:Advert:form.html.twig") }}*/
/* */
/*   <p>*/
/*     Attention : cette annonce sera ajoutée directement*/
/*     sur la page d'accueil après validation du formulaire.*/
/*   </p>*/
/* */
/* {% endblock %}*/
/* */
