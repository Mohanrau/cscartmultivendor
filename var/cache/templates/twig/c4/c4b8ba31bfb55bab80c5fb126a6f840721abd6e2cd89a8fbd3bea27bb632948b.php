<?php

/* __string_template__994d76f1a2e58d60b6223df8e18155e233074f4ce88815071982ba2d21ef7088 */
class __TwigTemplate_e21ed62fea3fac923a90feb8d849e20504b845244da66c65f4150b23a69022c3 extends Twig_Template
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
        echo $this->env->getExtension('tygh.core')->snippetFunction($this->env, $context, "header");
        echo "
";
        // line 2
        echo $this->env->getExtension('tygh.core')->translateFunction($this->env, $context, "vendor_plans.plan_payment_text", array("[plan]" => $this->getAttribute((isset($context["plan"]) ? $context["plan"] : null), "plan", array()), "[price]" => $this->getAttribute((isset($context["plan"]) ? $context["plan"] : null), "price", array()), "[href]" => (isset($context["url"]) ? $context["url"] : null)));
        echo "
<br /><br />
";
        // line 4
        echo $this->env->getExtension('tygh.core')->snippetFunction($this->env, $context, "vendorplans.plandetails");
        echo "
";
        // line 5
        echo $this->env->getExtension('tygh.core')->snippetFunction($this->env, $context, "footer");
    }

    public function getTemplateName()
    {
        return "__string_template__994d76f1a2e58d60b6223df8e18155e233074f4ce88815071982ba2d21ef7088";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  32 => 5,  28 => 4,  23 => 2,  19 => 1,);
    }
}
/* {{ snippet("header") }}*/
/* {{ __("vendor_plans.plan_payment_text", {"[plan]": plan.plan, "[price]": plan.price, "[href]": url}) }}*/
/* <br /><br />*/
/* {{ snippet("vendorplans.plandetails") }}*/
/* {{ snippet("footer") }}*/
