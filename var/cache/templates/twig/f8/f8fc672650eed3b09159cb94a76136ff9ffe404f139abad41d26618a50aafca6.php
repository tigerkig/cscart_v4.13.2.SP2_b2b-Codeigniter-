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

/* __string_template__417723435599ed182d55239a8bfdb0f4867e30e2afad4ebce7210163409f149b */
class __TwigTemplate_924ecf7d80822797b6347808064f06c7a5bdfcd63335bc7b9fe84630ce7dd8a4 extends \Twig\Template
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
        echo "</td>

</tr>

<tr class=\"message-footer\">
<td>
<table class=\"info ty-email-footer-left-part\" width=\"250\" align=\"left\">
  <tr>
    <th class=\"footer-contact__title ty-email-footer\" style=\"text-align: center;\">
      ";
        // line 10
        echo $this->env->getExtension('Tygh\Twig\TwigCoreExtension')->translateFunction($this->env, $context, "contact_information");
        echo "
    </th>
  </tr>
  <tr>
    <td class=\"ty-email-footer\" style=\"text-align: center;\">
      <address>";
        // line 15
        echo $this->getAttribute(($context["company_data"] ?? null), "company_address", []);
        echo ", ";
        echo $this->getAttribute(($context["company_data"] ?? null), "company_city", []);
        echo "</address>
    </td>
  </tr>
</table>

<table class=\"info ty-email-footer-right-part\" width=\"250\" align=\"right\">
  <tr>
    <th class=\"footer-social__title ty-email-footer\" style=\"text-align: center;\">
      ";
        // line 23
        echo $this->env->getExtension('Tygh\Twig\TwigCoreExtension')->translateFunction($this->env, $context, "get_social");
        echo "
    </th>
  </tr>
  <tr>
    <td class=\"ty-email-footer-social-buttons footer-social\">
      <table cellspacing=\"0\" cellpadding=\"0\" align=\"center\">
        <tr>
          <td>
            <a href=\"http://www.facebook.com\"><img width=\"30\" height=\"30\" src=\"design/themes/responsive/mail/media/images/social/facebook.png\"></a>
          </td>
          <td>
            <a href=\"https://twitter.com\"><img width=\"30\" height=\"30\" src=\"design/themes/responsive/mail/media/images/social/twitter.png\"></a>
          </td>
        </tr>
      </table>
    </td>
  </tr>
</table>
</td>
</tr>
";
        // line 43
        if ($this->getAttribute(($context["company_data"] ?? null), "company_name", [])) {
            // line 44
            echo "<tr class=\"message-copyright\">
<td>
<table class=\"copyright\" width=\"100%\">
<tr>
  <td>
    &copy;&nbsp;";
            // line 49
            echo $this->getAttribute(($context["company_data"] ?? null), "company_name", []);
            echo "
  </td>
  <td align=\"right\">
    ";
            // line 52
            echo $this->env->getExtension('Tygh\Twig\TwigCoreExtension')->translateFunction($this->env, $context, "customer_text_letter_footer");
            echo "
  </td>
</tr>
</table>
</td>
</tr>
";
        }
        // line 59
        echo "</table>
<!-- content-wrapper -->
</td>
</tr>
</table>
<!-- main-wrapper -->
</body>
</html>";
    }

    public function getTemplateName()
    {
        return "__string_template__417723435599ed182d55239a8bfdb0f4867e30e2afad4ebce7210163409f149b";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  110 => 59,  100 => 52,  94 => 49,  87 => 44,  85 => 43,  62 => 23,  49 => 15,  41 => 10,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("</td>

</tr>

<tr class=\"message-footer\">
<td>
<table class=\"info ty-email-footer-left-part\" width=\"250\" align=\"left\">
  <tr>
    <th class=\"footer-contact__title ty-email-footer\" style=\"text-align: center;\">
      {{ __(\"contact_information\") }}
    </th>
  </tr>
  <tr>
    <td class=\"ty-email-footer\" style=\"text-align: center;\">
      <address>{{ company_data.company_address }}, {{ company_data.company_city }}</address>
    </td>
  </tr>
</table>

<table class=\"info ty-email-footer-right-part\" width=\"250\" align=\"right\">
  <tr>
    <th class=\"footer-social__title ty-email-footer\" style=\"text-align: center;\">
      {{ __(\"get_social\") }}
    </th>
  </tr>
  <tr>
    <td class=\"ty-email-footer-social-buttons footer-social\">
      <table cellspacing=\"0\" cellpadding=\"0\" align=\"center\">
        <tr>
          <td>
            <a href=\"http://www.facebook.com\"><img width=\"30\" height=\"30\" src=\"design/themes/responsive/mail/media/images/social/facebook.png\"></a>
          </td>
          <td>
            <a href=\"https://twitter.com\"><img width=\"30\" height=\"30\" src=\"design/themes/responsive/mail/media/images/social/twitter.png\"></a>
          </td>
        </tr>
      </table>
    </td>
  </tr>
</table>
</td>
</tr>
{% if company_data.company_name %}
<tr class=\"message-copyright\">
<td>
<table class=\"copyright\" width=\"100%\">
<tr>
  <td>
    &copy;&nbsp;{{ company_data.company_name }}
  </td>
  <td align=\"right\">
    {{ __(\"customer_text_letter_footer\") }}
  </td>
</tr>
</table>
</td>
</tr>
{% endif %}
</table>
<!-- content-wrapper -->
</td>
</tr>
</table>
<!-- main-wrapper -->
</body>
</html>", "__string_template__417723435599ed182d55239a8bfdb0f4867e30e2afad4ebce7210163409f149b", "");
    }
}
