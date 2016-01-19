<?php

/* TwigBundle:Exception:traces.txt.twig */
class __TwigTemplate_27226f8b7e0738c51814e06763f46d8d3cad68d67c94a0082e56e78ec82305cd extends Twig_Template
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
        $__internal_792471a798b5b8a4ae296d655b1ca7d47c2016e8378a0ed4bf909b8fdbb3b254 = $this->env->getExtension("native_profiler");
        $__internal_792471a798b5b8a4ae296d655b1ca7d47c2016e8378a0ed4bf909b8fdbb3b254->enter($__internal_792471a798b5b8a4ae296d655b1ca7d47c2016e8378a0ed4bf909b8fdbb3b254_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:traces.txt.twig"));

        // line 1
        if (twig_length_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "trace", array()))) {
            // line 2
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "trace", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["trace"]) {
                // line 3
                $this->loadTemplate("TwigBundle:Exception:trace.txt.twig", "TwigBundle:Exception:traces.txt.twig", 3)->display(array("trace" => $context["trace"]));
                // line 4
                echo "
";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['trace'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        
        $__internal_792471a798b5b8a4ae296d655b1ca7d47c2016e8378a0ed4bf909b8fdbb3b254->leave($__internal_792471a798b5b8a4ae296d655b1ca7d47c2016e8378a0ed4bf909b8fdbb3b254_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:traces.txt.twig";
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
/* {% include 'TwigBundle:Exception:trace.txt.twig' with { 'trace': trace } only %}*/
/* */
/* {% endfor %}*/
/* {% endif %}*/
/* */
