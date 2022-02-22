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

/* __string_template__3082038f64bc04e4cfe38563c6dd67d783e98c66002fd3938c9fcc456c59a311 */
class __TwigTemplate_7d928867fd13a88fb99152bc59a16f919a0b9b27d87a52284acf4f95e6456dfc extends \Twig\Template
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
        echo $this->env->getExtension('Tygh\Twig\TwigCoreExtension')->snippetFunction($this->env, $context, "header", ["title" => $this->env->getExtension('Tygh\Twig\TwigCoreExtension')->translateFunction($this->env, $context, "new_profile_notification")]);
        echo "
    ";
        // line 2
        if ($this->getAttribute(($context["user_data"] ?? null), "firstname", [])) {
            echo " ";
            echo $this->env->getExtension('Tygh\Twig\TwigCoreExtension')->translateFunction($this->env, $context, "hello_name", ["[name]" => $this->getAttribute(($context["user_data"] ?? null), "firstname", [])]);
            echo " ";
        } else {
            echo " ";
            echo $this->env->getExtension('Tygh\Twig\TwigCoreExtension')->translateFunction($this->env, $context, "hello");
            echo ", ";
        }
        // line 3
        echo "    <br>
    ";
        // line 4
        echo $this->env->getExtension('Tygh\Twig\TwigCoreExtension')->translateFunction($this->env, $context, "update_profile_notification_header");
        echo "
    <br>
    <br>
    <h4 class=\"with-subline\">";
        // line 7
        echo $this->env->getExtension('Tygh\Twig\TwigCoreExtension')->translateFunction($this->env, $context, "user_account_information");
        echo "</h4>
    <table border=\"0\" width=\"100%\" class=\"info\">
      <tr>
        <td><b>";
        // line 10
        echo $this->env->getExtension('Tygh\Twig\TwigCoreExtension')->translateFunction($this->env, $context, "login_url");
        echo ":</b></td>
        <td><a href=\"";
        // line 11
        echo ($context["login_url"] ?? null);
        echo "\">";
        echo $this->env->getExtension('Tygh\Twig\TwigCoreExtension')->punyDecodeFilter(($context["login_url"] ?? null));
        echo "</a></td>
      </tr>
      <tr>
        <td><b>";
        // line 14
        echo $this->env->getExtension('Tygh\Twig\TwigCoreExtension')->translateFunction($this->env, $context, "email");
        echo ":</b></td>
        <td><a>";
        // line 15
        echo $this->getAttribute(($context["user_data"] ?? null), "email", []);
        echo "</a></td>
      </tr>
      <tr>
        <td><b>";
        // line 18
        echo $this->env->getExtension('Tygh\Twig\TwigCoreExtension')->translateFunction($this->env, $context, "password");
        echo ":</b></td>
        <td> *********** (<a href=\"";
        // line 19
        echo ($context["forgot_pass_url"] ?? null);
        echo "\">";
        echo $this->env->getExtension('Tygh\Twig\TwigCoreExtension')->translateFunction($this->env, $context, "forgot_password_question");
        echo "</a>)</td>
      </tr>
    </table>


  ";
        // line 24
        echo $this->env->getExtension('Tygh\Twig\TwigCoreExtension')->snippetFunction($this->env, $context, "footer");
    }

    public function getTemplateName()
    {
        return "__string_template__3082038f64bc04e4cfe38563c6dd67d783e98c66002fd3938c9fcc456c59a311";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  95 => 24,  85 => 19,  81 => 18,  75 => 15,  71 => 14,  63 => 11,  59 => 10,  53 => 7,  47 => 4,  44 => 3,  34 => 2,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{{ snippet(\"header\", {\"title\": __(\"new_profile_notification\")} ) }}
    {% if user_data.firstname %} {{__(\"hello_name\", {\"[name]\" : user_data.firstname})}} {% else %} {{ __(\"hello\") }}, {% endif %}
    <br>
    {{ __(\"update_profile_notification_header\") }}
    <br>
    <br>
    <h4 class=\"with-subline\">{{ __(\"user_account_information\") }}</h4>
    <table border=\"0\" width=\"100%\" class=\"info\">
      <tr>
        <td><b>{{ __(\"login_url\") }}:</b></td>
        <td><a href=\"{{ login_url }}\">{{ login_url|puny_decode }}</a></td>
      </tr>
      <tr>
        <td><b>{{ __(\"email\") }}:</b></td>
        <td><a>{{ user_data.email }}</a></td>
      </tr>
      <tr>
        <td><b>{{ __(\"password\") }}:</b></td>
        <td> *********** (<a href=\"{{ forgot_pass_url }}\">{{ __(\"forgot_password_question\") }}</a>)</td>
      </tr>
    </table>


  {{ snippet(\"footer\") }}", "__string_template__3082038f64bc04e4cfe38563c6dd67d783e98c66002fd3938c9fcc456c59a311", "");
    }
}
