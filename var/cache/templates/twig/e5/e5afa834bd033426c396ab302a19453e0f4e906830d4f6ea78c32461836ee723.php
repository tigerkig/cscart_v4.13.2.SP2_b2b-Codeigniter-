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

/* __string_template__018f4bd740857db1782c8486508bb101f75e51dda22794a63fb8e92a5d06f2eb */
class __TwigTemplate_6d71fb8390df7c30913b9fd46efaf43755ba62ff75f1c1de5cc46c1616f32503 extends \Twig\Template
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
        echo "<!DOCTYPE html PUBLIC \"-//W3C//DTD XHTML 1.0 Strict//EN\" \"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd\">
<html xmlns=\"http://www.w3.org/1999/xhtml\">

<head>
  <meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\" />
  <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\" />
  <title>";
        // line 7
        echo ($context["company_name"] ?? null);
        echo ": Message title</title>
  <style type=\"text/css\">
    #outlook a {
      padding: 0;
    }

    body {
      width: 100% !important;
      -webkit-text-size-adjust: 100%;
      -ms-text-size-adjust: 100%;
      margin: 0;
      padding: 0;
    }

    img {
      outline: none;
      text-decoration: none;
      -ms-interpolation-mode: bicubic;
    }

    a {
      outline: none;
    }

    a img {
      border: none;
    }

    .image_fix {
      display: block;
    }

    .message-header > td {
      padding: 10px 30px 20px 30px;
    }

    .message-header__title {
      background-color: ";
        // line 44
        if ($this->getAttribute(($context["styles"] ?? null), "links", [])) {
            echo $this->getAttribute(($context["styles"] ?? null), "links", []);
        } else {
            echo "#999";
        }
        // line 45
        echo "    }

    .message-header__title > td {
      padding: 20px 30px;
    }

    .message-header__title h1 {
      font-size: 20px;
      text-transform: uppercase;
      font-weight: 400;
      color: #Fff;
    }

    .message-title > td,
    .message-body > td {
      padding: 30px;
    }

    .message-footer > td {
      padding: 20px 30px;
      background-color: #757f83;
    }

    .message-copyright > td {
      padding: 0px 30px 10px;
    }

    .message-header td,
    .message-title td,
    .message-body th, .message-body td,
    .message-footer th, .message-footer td,
    .message-copyright th, .message-copyright td {
      color: ";
        // line 77
        echo $this->getAttribute(($context["styles"] ?? null), "font", []);
        echo ";
      font-size: ";
        // line 78
        echo $this->getAttribute(($context["styles"] ?? null), "body_font_size", []);
        echo ";
      font-family: ";
        // line 79
        echo $this->getAttribute(($context["styles"] ?? null), "body_font", []);
        echo ",Helvetica,Arial,sans-serif;
    }

    .message-footer {
      border-top: 1px solid ";
        // line 83
        echo $this->getAttribute(($context["styles"] ?? null), "base", []);
        echo "
    }

    .message-body table th,
    .message-footer table th {
      text-transform: uppercase;
      border-bottom: 1px solid ";
        // line 89
        echo $this->getAttribute(($context["styles"] ?? null), "base", []);
        echo ";
      text-align: left;
    }

    .message-body table td,
    .message-footer table td {
      padding: 5px;
    }

    .message-footer table th{
        border: none;
    }

    .message-footer td {
      color: #fff;
    }

    .footer-contact__title {
      margin: 0px;
      text-transform: uppercase;
      font-size: 16px !important;
      font-weight: 600;
      color: #fff !important;
    }

    .footer-social__title {
      margin: 0px;
      text-transform: uppercase;
      font-size: 16px !important;
      font-weight: 600;
      color: #fff !important;
    }

    .message-footer table td.footer-social td {
      padding: 0px;
      padding-right: 10px;
    }

    .email-preview{
      display:none;
      font-size:1px;
      color:#333333;
      line-height:1px;
      max-height:0px;
      max-width:0px;
      opacity:0;
      overflow:hidden;
    }

    .with-subline {
      color: ";
        // line 139
        echo $this->getAttribute(($context["styles"] ?? null), "font", []);
        echo ";
      text-transform: uppercase;
      font-weight: 700;
      font-size: 1em;
      padding-bottom: 10px;
      border-bottom: 1px solid #D4D4D4;
    }

    p {
      margin: 1em 0;
    }

    h1,h2,h3,h4,h5,h6 {
      color: ";
        // line 152
        echo $this->getAttribute(($context["styles"] ?? null), "font", []);
        echo ";
    }

    h1 a,h2 a,h3 a,h4 a,h5 a,h6 a {
      color: ";
        // line 156
        echo $this->getAttribute(($context["styles"] ?? null), "links", []);
        echo ";
    }

    h1 a:active,h2 a:active,h3 a:active,h4 a:active,h5 a:active,h6 a:active {
      color: red;
    }

    h1 a:visited,h2 a:visited,h3 a:visited,h4 a:visited,h5 a:visited,h6 a:visited {
      color: purple;
    }

    table td,
    table th {
      border-collapse: collapse;
    }

    table {
      border-collapse: collapse;
      mso-table-lspace: 0pt;
      mso-table-rspace: 0pt;
    }

    address {
      margin: 0px;
    }

    .content-wrapper {
      border: 1px solid ";
        // line 183
        echo $this->getAttribute(($context["styles"] ?? null), "base", []);
        echo ";
      background-color: ";
        // line 184
        echo $this->getAttribute(($context["styles"] ?? null), "general_bg_color", []);
        echo ";
    }

    .copyright td {
      padding: 10px 0 0 0;
      padding-bottom: 0 !important;
    }

    a {
      color: ";
        // line 193
        echo $this->getAttribute(($context["styles"] ?? null), "links", []);
        echo ";
    }

    ";
        // line 196
        if ((($context["language_direction"] ?? null) == "rtl")) {
            // line 197
            echo "
    .ty-email-footer {
      text-align: center !important;
    }

    .ty-email-footer-social-buttons {
      text-align: center !important;
    }

    .ty-email-footer-right-part {
      text-align: center !important;
      float: left !important;
    }

    .ty-email-footer-left-part {
      text-align: center !important;
      float: right !important;
    }

    ";
        }
        // line 217
        echo "
  </style>
</head>

<body>
    <style>

      @media only screen and (max-device-width: 480px){
        .content-wrapper{width: 100% !important;border: 3px solid #ccc !important; }

        table[width]{
          width: 100%! important;
        }

        .message-header > td,
        .message-title > td,
        .message-body > td,
        .message-footer > td,
        .message-copyright > td {
          padding: 10px !important;
        }

        .message-header td,
        .message-title td,
        .message-body th, .message-body td,
        .message-footer th, .message-footer td,
        .message-copyright th, .message-copyright td {
          font-size: 16px !important;
        }
      }

      @media only screen and (min-device-width: 768px) and (max-device-width: 1024px) {}

      @media only screen and (-webkit-min-device-pixel-ratio: 2) {}

      @media only screen and (-webkit-device-pixel-ratio:.75) {}

      @media only screen and (-webkit-device-pixel-ratio:1) {}

      @media only screen and (-webkit-device-pixel-ratio:1.5) {}
    </style>
  <!-- Targeting Windows Mobile -->
  <!--[if IEMobile 7]>
  <style type=\"text/css\">

  </style>
  <![endif]-->

  <!--[if gte mso 9]>
    <style>
        /* Target Outlook 2007 and 2010 */
    </style>
  <![endif]-->
  <table class=\"main-wrapper\" cellpadding=\"0\" cellspacing=\"0\" width=\"100%\" bgcolor=\"";
        // line 270
        echo $this->getAttribute(($context["styles"] ?? null), "base", []);
        echo "\" style=\"background-color: ";
        echo $this->getAttribute(($context["styles"] ?? null), "base", []);
        echo "\" dir=\"";
        echo ($context["language_direction"] ?? null);
        echo "\">
    <tr>
      <td style=\"padding: 40px 10px 40px 10px;\">
        <table class=\"content-wrapper\" cellpadding=\"0\" cellspacing=\"0\" align=\"center\" width=\"600\">
          <tr class=\"message-header\">
            <td>
              <table cellpadding=\"0\" cellspacing=\"0\" width=\"100%\">
                <tr>
                  <td><a href=\"";
        // line 278
        echo $this->getAttribute(($context["storefront_data"] ?? null), "url", []);
        echo "\"><img src=\"";
        echo $this->getAttribute($this->getAttribute($this->getAttribute(($context["logos"] ?? null), "mail", []), "image", []), "image_path", []);
        echo "\" alt=\"";
        echo $this->getAttribute(($context["company_data"] ?? null), "company_name", []);
        echo "\" width=\"";
        echo $this->getAttribute($this->getAttribute($this->getAttribute(($context["logos"] ?? null), "mail", []), "image", []), "image_x", []);
        echo "\" height=\"";
        echo $this->getAttribute($this->getAttribute($this->getAttribute(($context["logos"] ?? null), "mail", []), "image", []), "image_y", []);
        echo "\" /></a></td>
                </tr>
              </table>
            </td>
          </tr>
          ";
        // line 283
        if (($context["title"] ?? null)) {
            // line 284
            echo "          <tr class=\"message-header__title\">
            <td>
              <h1>";
            // line 286
            echo ($context["title"] ?? null);
            echo "</h1>
            </td>
          </tr>
          ";
        }
        // line 290
        echo "
          <tr class=\"message-body\">

<td>";
    }

    public function getTemplateName()
    {
        return "__string_template__018f4bd740857db1782c8486508bb101f75e51dda22794a63fb8e92a5d06f2eb";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  393 => 290,  386 => 286,  382 => 284,  380 => 283,  364 => 278,  349 => 270,  294 => 217,  272 => 197,  270 => 196,  264 => 193,  252 => 184,  248 => 183,  218 => 156,  211 => 152,  195 => 139,  142 => 89,  133 => 83,  126 => 79,  122 => 78,  118 => 77,  84 => 45,  78 => 44,  38 => 7,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html PUBLIC \"-//W3C//DTD XHTML 1.0 Strict//EN\" \"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd\">
<html xmlns=\"http://www.w3.org/1999/xhtml\">

<head>
  <meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\" />
  <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\" />
  <title>{{ company_name }}: Message title</title>
  <style type=\"text/css\">
    #outlook a {
      padding: 0;
    }

    body {
      width: 100% !important;
      -webkit-text-size-adjust: 100%;
      -ms-text-size-adjust: 100%;
      margin: 0;
      padding: 0;
    }

    img {
      outline: none;
      text-decoration: none;
      -ms-interpolation-mode: bicubic;
    }

    a {
      outline: none;
    }

    a img {
      border: none;
    }

    .image_fix {
      display: block;
    }

    .message-header > td {
      padding: 10px 30px 20px 30px;
    }

    .message-header__title {
      background-color: {% if styles.links %}{{styles.links}}{% else %}#999{% endif %}
    }

    .message-header__title > td {
      padding: 20px 30px;
    }

    .message-header__title h1 {
      font-size: 20px;
      text-transform: uppercase;
      font-weight: 400;
      color: #Fff;
    }

    .message-title > td,
    .message-body > td {
      padding: 30px;
    }

    .message-footer > td {
      padding: 20px 30px;
      background-color: #757f83;
    }

    .message-copyright > td {
      padding: 0px 30px 10px;
    }

    .message-header td,
    .message-title td,
    .message-body th, .message-body td,
    .message-footer th, .message-footer td,
    .message-copyright th, .message-copyright td {
      color: {{styles.font}};
      font-size: {{styles.body_font_size}};
      font-family: {{styles.body_font}},Helvetica,Arial,sans-serif;
    }

    .message-footer {
      border-top: 1px solid {{styles.base}}
    }

    .message-body table th,
    .message-footer table th {
      text-transform: uppercase;
      border-bottom: 1px solid {{styles.base}};
      text-align: left;
    }

    .message-body table td,
    .message-footer table td {
      padding: 5px;
    }

    .message-footer table th{
        border: none;
    }

    .message-footer td {
      color: #fff;
    }

    .footer-contact__title {
      margin: 0px;
      text-transform: uppercase;
      font-size: 16px !important;
      font-weight: 600;
      color: #fff !important;
    }

    .footer-social__title {
      margin: 0px;
      text-transform: uppercase;
      font-size: 16px !important;
      font-weight: 600;
      color: #fff !important;
    }

    .message-footer table td.footer-social td {
      padding: 0px;
      padding-right: 10px;
    }

    .email-preview{
      display:none;
      font-size:1px;
      color:#333333;
      line-height:1px;
      max-height:0px;
      max-width:0px;
      opacity:0;
      overflow:hidden;
    }

    .with-subline {
      color: {{styles.font}};
      text-transform: uppercase;
      font-weight: 700;
      font-size: 1em;
      padding-bottom: 10px;
      border-bottom: 1px solid #D4D4D4;
    }

    p {
      margin: 1em 0;
    }

    h1,h2,h3,h4,h5,h6 {
      color: {{styles.font}};
    }

    h1 a,h2 a,h3 a,h4 a,h5 a,h6 a {
      color: {{styles.links}};
    }

    h1 a:active,h2 a:active,h3 a:active,h4 a:active,h5 a:active,h6 a:active {
      color: red;
    }

    h1 a:visited,h2 a:visited,h3 a:visited,h4 a:visited,h5 a:visited,h6 a:visited {
      color: purple;
    }

    table td,
    table th {
      border-collapse: collapse;
    }

    table {
      border-collapse: collapse;
      mso-table-lspace: 0pt;
      mso-table-rspace: 0pt;
    }

    address {
      margin: 0px;
    }

    .content-wrapper {
      border: 1px solid {{ styles.base }};
      background-color: {{ styles.general_bg_color }};
    }

    .copyright td {
      padding: 10px 0 0 0;
      padding-bottom: 0 !important;
    }

    a {
      color: {{styles.links}};
    }

    {% if language_direction == \"rtl\" %}

    .ty-email-footer {
      text-align: center !important;
    }

    .ty-email-footer-social-buttons {
      text-align: center !important;
    }

    .ty-email-footer-right-part {
      text-align: center !important;
      float: left !important;
    }

    .ty-email-footer-left-part {
      text-align: center !important;
      float: right !important;
    }

    {% endif %}

  </style>
</head>

<body>
    <style>

      @media only screen and (max-device-width: 480px){
        .content-wrapper{width: 100% !important;border: 3px solid #ccc !important; }

        table[width]{
          width: 100%! important;
        }

        .message-header > td,
        .message-title > td,
        .message-body > td,
        .message-footer > td,
        .message-copyright > td {
          padding: 10px !important;
        }

        .message-header td,
        .message-title td,
        .message-body th, .message-body td,
        .message-footer th, .message-footer td,
        .message-copyright th, .message-copyright td {
          font-size: 16px !important;
        }
      }

      @media only screen and (min-device-width: 768px) and (max-device-width: 1024px) {}

      @media only screen and (-webkit-min-device-pixel-ratio: 2) {}

      @media only screen and (-webkit-device-pixel-ratio:.75) {}

      @media only screen and (-webkit-device-pixel-ratio:1) {}

      @media only screen and (-webkit-device-pixel-ratio:1.5) {}
    </style>
  <!-- Targeting Windows Mobile -->
  <!--[if IEMobile 7]>
  <style type=\"text/css\">

  </style>
  <![endif]-->

  <!--[if gte mso 9]>
    <style>
        /* Target Outlook 2007 and 2010 */
    </style>
  <![endif]-->
  <table class=\"main-wrapper\" cellpadding=\"0\" cellspacing=\"0\" width=\"100%\" bgcolor=\"{{ styles.base }}\" style=\"background-color: {{ styles.base }}\" dir=\"{{ language_direction }}\">
    <tr>
      <td style=\"padding: 40px 10px 40px 10px;\">
        <table class=\"content-wrapper\" cellpadding=\"0\" cellspacing=\"0\" align=\"center\" width=\"600\">
          <tr class=\"message-header\">
            <td>
              <table cellpadding=\"0\" cellspacing=\"0\" width=\"100%\">
                <tr>
                  <td><a href=\"{{ storefront_data.url }}\"><img src=\"{{logos.mail.image.image_path}}\" alt=\"{{ company_data.company_name }}\" width=\"{{logos.mail.image.image_x}}\" height=\"{{logos.mail.image.image_y}}\" /></a></td>
                </tr>
              </table>
            </td>
          </tr>
          {% if title %}
          <tr class=\"message-header__title\">
            <td>
              <h1>{{title}}</h1>
            </td>
          </tr>
          {% endif %}

          <tr class=\"message-body\">

<td>", "__string_template__018f4bd740857db1782c8486508bb101f75e51dda22794a63fb8e92a5d06f2eb", "");
    }
}
