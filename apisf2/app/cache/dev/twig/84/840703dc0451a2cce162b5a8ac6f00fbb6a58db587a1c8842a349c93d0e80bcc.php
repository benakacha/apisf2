<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_2d2099531e6d88cc126ba8562ee90764df00ef3db89d7a55b714c2cba2bc1c07 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TwigBundle::layout.html.twig", "TwigBundle:Exception:exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TwigBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ee60bfa2bf190b55ec32d712a0470d2f5a58b151d70f3a5c6548d633facd90d1 = $this->env->getExtension("native_profiler");
        $__internal_ee60bfa2bf190b55ec32d712a0470d2f5a58b151d70f3a5c6548d633facd90d1->enter($__internal_ee60bfa2bf190b55ec32d712a0470d2f5a58b151d70f3a5c6548d633facd90d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ee60bfa2bf190b55ec32d712a0470d2f5a58b151d70f3a5c6548d633facd90d1->leave($__internal_ee60bfa2bf190b55ec32d712a0470d2f5a58b151d70f3a5c6548d633facd90d1_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_36ef1accf1ce1283cf228280e147662c159bb3bbde30cd232efdebdc1528c3b6 = $this->env->getExtension("native_profiler");
        $__internal_36ef1accf1ce1283cf228280e147662c159bb3bbde30cd232efdebdc1528c3b6->enter($__internal_36ef1accf1ce1283cf228280e147662c159bb3bbde30cd232efdebdc1528c3b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_36ef1accf1ce1283cf228280e147662c159bb3bbde30cd232efdebdc1528c3b6->leave($__internal_36ef1accf1ce1283cf228280e147662c159bb3bbde30cd232efdebdc1528c3b6_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_3424ab96ea29a638652cb132fd186550fd5b094f857508ab6b92072c60335a4b = $this->env->getExtension("native_profiler");
        $__internal_3424ab96ea29a638652cb132fd186550fd5b094f857508ab6b92072c60335a4b->enter($__internal_3424ab96ea29a638652cb132fd186550fd5b094f857508ab6b92072c60335a4b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_3424ab96ea29a638652cb132fd186550fd5b094f857508ab6b92072c60335a4b->leave($__internal_3424ab96ea29a638652cb132fd186550fd5b094f857508ab6b92072c60335a4b_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_62e2f04cf00cb866185e3b0dce347ec15478cc600d2d4b8c73b3b05158372317 = $this->env->getExtension("native_profiler");
        $__internal_62e2f04cf00cb866185e3b0dce347ec15478cc600d2d4b8c73b3b05158372317->enter($__internal_62e2f04cf00cb866185e3b0dce347ec15478cc600d2d4b8c73b3b05158372317_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("TwigBundle:Exception:exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_62e2f04cf00cb866185e3b0dce347ec15478cc600d2d4b8c73b3b05158372317->leave($__internal_62e2f04cf00cb866185e3b0dce347ec15478cc600d2d4b8c73b3b05158372317_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception_full.html.twig";
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
/* {% extends 'TwigBundle::layout.html.twig' %}*/
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
/*     {% include 'TwigBundle:Exception:exception.html.twig' %}*/
/* {% endblock %}*/
/* */
