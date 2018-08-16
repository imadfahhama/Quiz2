<?php

/* OCCoreBundle:Core:index.html.twig */
class __TwigTemplate_e4c241319091e070dbdeb3a45d2a9862dccb7ff5098c8b5e545a0bc6dff0a376 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("OCCoreBundle::layout.html.twig", "OCCoreBundle:Core:index.html.twig", 2);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "OCCoreBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_88cca53fab150b534779fcafb3e8acfc0b1380cfbaf94e150f4efa3c01670bd6 = $this->env->getExtension("native_profiler");
        $__internal_88cca53fab150b534779fcafb3e8acfc0b1380cfbaf94e150f4efa3c01670bd6->enter($__internal_88cca53fab150b534779fcafb3e8acfc0b1380cfbaf94e150f4efa3c01670bd6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OCCoreBundle:Core:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_88cca53fab150b534779fcafb3e8acfc0b1380cfbaf94e150f4efa3c01670bd6->leave($__internal_88cca53fab150b534779fcafb3e8acfc0b1380cfbaf94e150f4efa3c01670bd6_prof);

    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        $__internal_5487a7930a5b34a7c2088556dd2c0339a1c8d4ec4246518ae34dd345f50e099d = $this->env->getExtension("native_profiler");
        $__internal_5487a7930a5b34a7c2088556dd2c0339a1c8d4ec4246518ae34dd345f50e099d->enter($__internal_5487a7930a5b34a7c2088556dd2c0339a1c8d4ec4246518ae34dd345f50e099d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 5
        echo "  Page d'accueil - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_5487a7930a5b34a7c2088556dd2c0339a1c8d4ec4246518ae34dd345f50e099d->leave($__internal_5487a7930a5b34a7c2088556dd2c0339a1c8d4ec4246518ae34dd345f50e099d_prof);

    }

    // line 8
    public function block_body($context, array $blocks = array())
    {
        $__internal_06921d41916dff4bc35b7c129141b190613b5cd1f9b0944863662fdd3a4e9b94 = $this->env->getExtension("native_profiler");
        $__internal_06921d41916dff4bc35b7c129141b190613b5cd1f9b0944863662fdd3a4e9b94->enter($__internal_06921d41916dff4bc35b7c129141b190613b5cd1f9b0944863662fdd3a4e9b94_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 9
        echo "
  <h2>Page d'accueil de notre site</h2>

  ";
        // line 13
        echo "  ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "info"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 14
            echo "    <div class=\"alert alert-info\">Message flash : ";
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "</div>
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 16
        echo "
  ";
        // line 18
        echo "  <h3>Dernières annonces</h3>
  ";
        // line 19
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("OCPlatformBundle:Advert:menu", array("limit" => 3)));
        echo "

  <h3>Derniers messages sur le forum (hypothétique)</h3>
  <p>
    ";
        // line 25
        echo "    Bla bla bla...
  </p>

";
        
        $__internal_06921d41916dff4bc35b7c129141b190613b5cd1f9b0944863662fdd3a4e9b94->leave($__internal_06921d41916dff4bc35b7c129141b190613b5cd1f9b0944863662fdd3a4e9b94_prof);

    }

    public function getTemplateName()
    {
        return "OCCoreBundle:Core:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  89 => 25,  82 => 19,  79 => 18,  76 => 16,  67 => 14,  62 => 13,  57 => 9,  51 => 8,  41 => 5,  35 => 4,  11 => 2,);
    }
}
/* {# On utilise ici le layout général, qui se situe dans ce même CoreBundle maintenant #}*/
/* {% extends "OCCoreBundle::layout.html.twig" %}*/
/* */
/* {% block title %}*/
/*   Page d'accueil - {{ parent() }}*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/* */
/*   <h2>Page d'accueil de notre site</h2>*/
/* */
/*   {# On affiche tous les messages flash dont le nom est « info » #}*/
/*   {% for message in app.session.flashbag.get('info') %}*/
/*     <div class="alert alert-info">Message flash : {{ message }}</div>*/
/*   {% endfor %}*/
/* */
/*   {# Pour afficher les dernières annonces, on réutilise le contrôleur menu du PlatformBundle #}*/
/*   <h3>Dernières annonces</h3>*/
/*   {{ render(controller("OCPlatformBundle:Advert:menu", {'limit': 3})) }}*/
/* */
/*   <h3>Derniers messages sur le forum (hypothétique)</h3>*/
/*   <p>*/
/*     {# Ici, on devrait utiliser un contrôleur d'un éventuel ForumBundle pour afficher les derniers posts sur le forum,*/
/*        ce n'est pas le sujet ici #}*/
/*     Bla bla bla...*/
/*   </p>*/
/* */
/* {% endblock %}*/
/* */
