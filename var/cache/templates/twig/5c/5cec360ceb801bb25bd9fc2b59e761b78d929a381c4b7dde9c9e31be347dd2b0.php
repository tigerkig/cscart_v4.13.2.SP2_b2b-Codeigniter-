<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* __string_template__f2ccad373e0713398ba5cda7482a84633cdf4b2763b16579cf9221a635028a94 */
class __TwigTemplate_c43265a5d717a6b2d5fa4e6d1ca9c39041dcb65b8d50d0879d374917ce113aaf extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 1
        echo ($context["company_name"] ?? null);
        echo ": ";
        echo $this->env->getExtension('Tygh\Twig\TwigCoreExtension')->translateFunction($this->env, $context, "new_profile_notification");
    }

    public function getTemplateName()
    {
        return "__string_template__f2ccad373e0713398ba5cda7482a84633cdf4b2763b16579cf9221a635028a94";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{{ company_name }}: {{ __(\"new_profile_notification\") }}", "__string_template__f2ccad373e0713398ba5cda7482a84633cdf4b2763b16579cf9221a635028a94", "");
    }
}
