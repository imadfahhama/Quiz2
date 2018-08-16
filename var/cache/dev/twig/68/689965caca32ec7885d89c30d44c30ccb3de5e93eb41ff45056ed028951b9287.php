<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_40834f16da427136915bf594afe69bb3749e7c9a22d55e08e9dcc7847cad2046 extends Twig_Template
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
        $__internal_4937960c7ca9af07aeee9155632d7982f28aa81e1750d60f657c3ef26be38852 = $this->env->getExtension("native_profiler");
        $__internal_4937960c7ca9af07aeee9155632d7982f28aa81e1750d60f657c3ef26be38852->enter($__internal_4937960c7ca9af07aeee9155632d7982f28aa81e1750d60f657c3ef26be38852_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4937960c7ca9af07aeee9155632d7982f28aa81e1750d60f657c3ef26be38852->leave($__internal_4937960c7ca9af07aeee9155632d7982f28aa81e1750d60f657c3ef26be38852_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_6b115d0ad0319166b2461e5c402c625a960c80309878e67849e73002f0f5cad0 = $this->env->getExtension("native_profiler");
        $__internal_6b115d0ad0319166b2461e5c402c625a960c80309878e67849e73002f0f5cad0->enter($__internal_6b115d0ad0319166b2461e5c402c625a960c80309878e67849e73002f0f5cad0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_6b115d0ad0319166b2461e5c402c625a960c80309878e67849e73002f0f5cad0->leave($__internal_6b115d0ad0319166b2461e5c402c625a960c80309878e67849e73002f0f5cad0_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_8aa29bf7a171ea6c62a04d677e648d894bf07f9f58a2cac55e75176b0c5867e0 = $this->env->getExtension("native_profiler");
        $__internal_8aa29bf7a171ea6c62a04d677e648d894bf07f9f58a2cac55e75176b0c5867e0->enter($__internal_8aa29bf7a171ea6c62a04d677e648d894bf07f9f58a2cac55e75176b0c5867e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_8aa29bf7a171ea6c62a04d677e648d894bf07f9f58a2cac55e75176b0c5867e0->leave($__internal_8aa29bf7a171ea6c62a04d677e648d894bf07f9f58a2cac55e75176b0c5867e0_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_f09cf00dfa54b6434c8419f0219dbb5771dcc0f450aa900451b52b9acf363ebb = $this->env->getExtension("native_profiler");
        $__internal_f09cf00dfa54b6434c8419f0219dbb5771dcc0f450aa900451b52b9acf363ebb->enter($__internal_f09cf00dfa54b6434c8419f0219dbb5771dcc0f450aa900451b52b9acf363ebb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_f09cf00dfa54b6434c8419f0219dbb5771dcc0f450aa900451b52b9acf363ebb->leave($__internal_f09cf00dfa54b6434c8419f0219dbb5771dcc0f450aa900451b52b9acf363ebb_prof);

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
}
/* {% extends '@WebProfiler/Profiler/layout.html.twig' %}*/
/* */
/* {% block toolbar %}{% endblock %}*/
/* */
/* {% block menu %}*/
/* <span class="label">*/
/*     <span class="icon">{{ include('@WebProfiler/Icon/router.svg') }}</span>*/
/*     <strong>Routing</strong>*/
/* </span>*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/*     {{ render(path('_profiler_router', { token: token })) }}*/
/* {% endblock %}*/
/* */
