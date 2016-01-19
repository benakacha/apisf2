<?php

/* TwigBundle:Exception:exception.json.twig */
class __TwigTemplate_b14d38f916ed5bdc8103671e179639dac03b11f41fa737de99d378d38692f0ba extends Twig_Template
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
        $__internal_2129ad11eeeadf8a669c3febf296bf00d48fdac9411d4f0ef99a01d09c3cffb8 = $this->env->getExtension("native_profiler");
        $__internal_2129ad11eeeadf8a669c3febf296bf00d48fdac9411d4f0ef99a01d09c3cffb8->enter($__internal_2129ad11eeeadf8a669c3febf296bf00d48fdac9411d4f0ef99a01d09c3cffb8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "exception" => $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "toarray", array()))));
        echo "
";
        
        $__internal_2129ad11eeeadf8a669c3febf296bf00d48fdac9411d4f0ef99a01d09c3cffb8->leave($__internal_2129ad11eeeadf8a669c3febf296bf00d48fdac9411d4f0ef99a01d09c3cffb8_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.json.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {{ { 'error': { 'code': status_code, 'message': status_text, 'exception': exception.toarray } }|json_encode|raw }}*/
/* */
