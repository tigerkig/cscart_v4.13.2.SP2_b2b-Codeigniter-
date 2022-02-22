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

/* __string_template__63f2f97151912936b87c8a3ef00eb010f954d1e7d8dd889d783ac5253829a9e8 */
class __TwigTemplate_2ca4182f9a01cecb6715da931ed787473c127ee4eae2512bf9d0a77f4041ca05 extends \Twig\Template
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
        echo $this->env->getExtension('Tygh\Twig\TwigCoreExtension')->translateFunction($this->env, $context, "recover_password_subj");
    }

    public function getTemplateName()
    {
        return "__string_template__63f2f97151912936b87c8a3ef00eb010f954d1e7d8dd889d783ac5253829a9e8";
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
        return new Source("{{ company_name }}: {{ __(\"recover_password_subj\") }}", "__string_template__63f2f97151912936b87c8a3ef00eb010f954d1e7d8dd889d783ac5253829a9e8", "");
    }
}
