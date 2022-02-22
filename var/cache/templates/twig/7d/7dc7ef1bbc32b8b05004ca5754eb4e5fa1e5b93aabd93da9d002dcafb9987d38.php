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

/* __string_template__7cdec2b47c1325f2cdb9e0887c050377192b2dd661ffd3fa1aa9ebf76ce69b09 */
class __TwigTemplate_500f125c3ce0b835c4aed734ad51c7d979e0b2094ba8e43483731fc811791e56 extends \Twig\Template
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
        echo $this->env->getExtension('Tygh\Twig\TwigCoreExtension')->snippetFunction($this->env, $context, "header", ["title" => $this->env->getExtension('Tygh\Twig\TwigCoreExtension')->translateFunction($this->env, $context, "recover_password_subj")]);
        echo "

    ";
        // line 3
        echo $this->env->getExtension('Tygh\Twig\TwigCoreExtension')->translateFunction($this->env, $context, "text_confirm_passwd_recovery");
        echo ":
    <br />
    <br />

    <a href=\"";
        // line 7
        echo ($context["url"] ?? null);
        echo "\">";
        echo $this->env->getExtension('Tygh\Twig\TwigCoreExtension')->punyDecodeFilter(($context["url"] ?? null));
        echo "</a>

";
        // line 9
        echo $this->env->getExtension('Tygh\Twig\TwigCoreExtension')->snippetFunction($this->env, $context, "footer");
    }

    public function getTemplateName()
    {
        return "__string_template__7cdec2b47c1325f2cdb9e0887c050377192b2dd661ffd3fa1aa9ebf76ce69b09";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 9,  42 => 7,  35 => 3,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{{ snippet(\"header\", {\"title\": __(\"recover_password_subj\") } ) }}

    {{ __(\"text_confirm_passwd_recovery\") }}:
    <br />
    <br />

    <a href=\"{{ url }}\">{{ url|puny_decode }}</a>

{{ snippet(\"footer\") }}", "__string_template__7cdec2b47c1325f2cdb9e0887c050377192b2dd661ffd3fa1aa9ebf76ce69b09", "");
    }
}
