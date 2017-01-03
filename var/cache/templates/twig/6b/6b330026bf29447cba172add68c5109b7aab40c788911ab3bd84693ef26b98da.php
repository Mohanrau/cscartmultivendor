<?php

/* __string_template__25b8f9217f651ed586dc14e24fccc7c1c3fbd45c20b0b77733d3f9e11c5cee6d */
class __TwigTemplate_911f3fb67b2458995755b6a4508b9689e18cf081c3e246f86d891c4a17007063 extends Twig_Template
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
        // line 1
        echo $this->env->getExtension('tygh.core')->translateFunction($this->env, $context, "vendor_plans.plan_payment");
    }

    public function getTemplateName()
    {
        return "__string_template__25b8f9217f651ed586dc14e24fccc7c1c3fbd45c20b0b77733d3f9e11c5cee6d";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }
}
/* {{ __("vendor_plans.plan_payment") }}*/
