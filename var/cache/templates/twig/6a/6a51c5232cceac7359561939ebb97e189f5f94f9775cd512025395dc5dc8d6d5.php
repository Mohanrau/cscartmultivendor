<?php

/* __string_template__61712d1b21d9a8a32c54471848d1c6a13d654a433acd3b5199e041d391a689fd */
class __TwigTemplate_aaaaeaf6bc689f4e158a70c287646e3e5f7ea7030b986364bffc35d0505ad735 extends Twig_Template
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
        echo "<!DOCTYPE html PUBLIC \"-//W3C//DTD XHTML 1.0 Strict//EN\" \"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd\">
<html xmlns=\"http://www.w3.org/1999/xhtml\">

<head>
  <meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\" />
  <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\" />
  <title>";
        // line 7
        echo (isset($context["company_name"]) ? $context["company_name"] : null);
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
        if ($this->getAttribute((isset($context["styles"]) ? $context["styles"] : null), "links", array())) {
            echo $this->getAttribute((isset($context["styles"]) ? $context["styles"] : null), "links", array());
        } else {
            echo "#999";
        }
        // line 45
        echo "    }

    .message-header__title h1 {
      padding: 20px 30px;
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
        // line 74
        echo $this->getAttribute((isset($context["styles"]) ? $context["styles"] : null), "font", array());
        echo ";
      font-size: ";
        // line 75
        echo $this->getAttribute((isset($context["styles"]) ? $context["styles"] : null), "body_font_size", array());
        echo ";
      font-family: ";
        // line 76
        echo $this->getAttribute((isset($context["styles"]) ? $context["styles"] : null), "body_font", array());
        echo ";
    }

    .message-footer {
      border-top: 1px solid ";
        // line 80
        echo $this->getAttribute((isset($context["styles"]) ? $context["styles"] : null), "base", array());
        echo "
    }

    .message-body table th,
    .message-footer table th {
      text-transform: uppercase;
      border-bottom: 1px solid ";
        // line 86
        echo $this->getAttribute((isset($context["styles"]) ? $context["styles"] : null), "base", array());
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

    .footer-social a {
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
        // line 135
        echo $this->getAttribute((isset($context["styles"]) ? $context["styles"] : null), "font", array());
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
        // line 148
        echo $this->getAttribute((isset($context["styles"]) ? $context["styles"] : null), "font", array());
        echo ";
    }

    h1 a,h2 a,h3 a,h4 a,h5 a,h6 a {
      color: ";
        // line 152
        echo $this->getAttribute((isset($context["styles"]) ? $context["styles"] : null), "links", array());
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
        // line 179
        echo $this->getAttribute((isset($context["styles"]) ? $context["styles"] : null), "base", array());
        echo "
    }

    .copyright td{
      padding: 10px 0 0 !important;
    }

    a {
      color: ";
        // line 187
        echo $this->getAttribute((isset($context["styles"]) ? $context["styles"] : null), "links", array());
        echo ";
    }
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
        // line 240
        echo $this->getAttribute((isset($context["styles"]) ? $context["styles"] : null), "base", array());
        echo "\" style=\"    background-color: ";
        echo $this->getAttribute((isset($context["styles"]) ? $context["styles"] : null), "base", array());
        echo "\">
    <tr>
      <td style=\"padding: 40px 10px 40px 10px;\">
        <table class=\"content-wrapper\" cellpadding=\"0\" cellspacing=\"0\" align=\"center\" width=\"600\" style=\"background-color:#fff;\" >
          <tr class=\"message-header\">
            <td>
              <table cellpadding=\"0\" cellspacing=\"0\" width=\"100%\">
                <tr>
                  <td><a href=\"";
        // line 248
        echo $this->getAttribute((isset($context["company_data"]) ? $context["company_data"] : null), "company_website", array());
        echo "\"><img src=\"";
        echo $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["logos"]) ? $context["logos"] : null), "mail", array()), "image", array()), "image_path", array());
        echo "\" alt=\"";
        echo $this->getAttribute((isset($context["company_data"]) ? $context["company_data"] : null), "company_name", array());
        echo "\" /></a></td>
                </tr>
              </table>
            </td>
          </tr>
          ";
        // line 253
        if ((isset($context["title"]) ? $context["title"] : null)) {
            // line 254
            echo "          <tr class=\"message-header__title\">
            <td>
              <h1>";
            // line 256
            echo (isset($context["title"]) ? $context["title"] : null);
            echo "</h1>
            </td>
          </tr>
          ";
        }
        // line 260
        echo "
          <tr class=\"message-body\">

<td>";
    }

    public function getTemplateName()
    {
        return "__string_template__61712d1b21d9a8a32c54471848d1c6a13d654a433acd3b5199e041d391a689fd";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  338 => 260,  331 => 256,  327 => 254,  325 => 253,  313 => 248,  300 => 240,  244 => 187,  233 => 179,  203 => 152,  196 => 148,  180 => 135,  128 => 86,  119 => 80,  112 => 76,  108 => 75,  104 => 74,  73 => 45,  67 => 44,  27 => 7,  19 => 1,);
    }
}
/* <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">*/
/* <html xmlns="http://www.w3.org/1999/xhtml">*/
/* */
/* <head>*/
/*   <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />*/
/*   <meta name="viewport" content="width=device-width, initial-scale=1.0" />*/
/*   <title>{{ company_name }}: Message title</title>*/
/*   <style type="text/css">*/
/*     #outlook a {*/
/*       padding: 0;*/
/*     }*/
/* */
/*     body {*/
/*       width: 100% !important;*/
/*       -webkit-text-size-adjust: 100%;*/
/*       -ms-text-size-adjust: 100%;*/
/*       margin: 0;*/
/*       padding: 0;*/
/*     }*/
/* */
/*     img {*/
/*       outline: none;*/
/*       text-decoration: none;*/
/*       -ms-interpolation-mode: bicubic;*/
/*     }*/
/* */
/*     a {*/
/*       outline: none;*/
/*     }*/
/* */
/*     a img {*/
/*       border: none;*/
/*     }*/
/* */
/*     .image_fix {*/
/*       display: block;*/
/*     }*/
/* */
/*     .message-header > td {*/
/*       padding: 10px 30px 20px 30px;*/
/*     }*/
/* */
/*     .message-header__title {*/
/*       background-color: {% if styles.links %}{{styles.links}}{% else %}#999{% endif %}*/
/*     }*/
/* */
/*     .message-header__title h1 {*/
/*       padding: 20px 30px;*/
/*       font-size: 20px;*/
/*       text-transform: uppercase;*/
/*       font-weight: 400;*/
/*       color: #Fff;*/
/*     }*/
/* */
/*     .message-title > td,*/
/*     .message-body > td {*/
/*       padding: 30px;*/
/*     }*/
/* */
/*     .message-footer > td {*/
/*       padding: 20px 30px;*/
/*       background-color: #757f83;*/
/*     }*/
/* */
/*     .message-copyright > td {*/
/*       padding: 0px 30px 10px;*/
/*     }*/
/* */
/*     .message-header td,*/
/*     .message-title td,*/
/*     .message-body th, .message-body td,*/
/*     .message-footer th, .message-footer td,*/
/*     .message-copyright th, .message-copyright td {*/
/*       color: {{styles.font}};*/
/*       font-size: {{styles.body_font_size}};*/
/*       font-family: {{styles.body_font}};*/
/*     }*/
/* */
/*     .message-footer {*/
/*       border-top: 1px solid {{styles.base}}*/
/*     }*/
/* */
/*     .message-body table th,*/
/*     .message-footer table th {*/
/*       text-transform: uppercase;*/
/*       border-bottom: 1px solid {{styles.base}};*/
/*       text-align: left;*/
/*     }*/
/* */
/*     .message-body table td,*/
/*     .message-footer table td {*/
/*       padding: 5px;*/
/*     }*/
/* */
/*     .message-footer table th{*/
/*        border: none;*/
/*     }*/
/* */
/*     .message-footer td {*/
/*       color: #fff;*/
/*     }*/
/* */
/*     .footer-contact__title {*/
/*       margin: 0px;*/
/*       text-transform: uppercase;*/
/*       font-size: 16px !important;*/
/*       font-weight: 600;*/
/*       color: #fff !important;*/
/*     }*/
/* */
/*     .footer-social__title {*/
/*       margin: 0px;*/
/*       text-transform: uppercase;*/
/*       font-size: 16px !important;*/
/*       font-weight: 600;*/
/*       color: #fff !important;*/
/*     }*/
/* */
/*     .footer-social a {*/
/*       padding-right: 10px;*/
/*     }*/
/* */
/*     .email-preview{*/
/*       display:none;*/
/*       font-size:1px;*/
/*       color:#333333;*/
/*       line-height:1px;*/
/*       max-height:0px;*/
/*       max-width:0px;*/
/*       opacity:0;*/
/*       overflow:hidden;*/
/*     }*/
/* */
/*     .with-subline {*/
/*       color: {{styles.font}};*/
/*       text-transform: uppercase;*/
/*       font-weight: 700;*/
/*       font-size: 1em;*/
/*       padding-bottom: 10px;*/
/*       border-bottom: 1px solid #D4D4D4;*/
/*     }*/
/* */
/*     p {*/
/*       margin: 1em 0;*/
/*     }*/
/* */
/*     h1,h2,h3,h4,h5,h6 {*/
/*       color: {{styles.font}};*/
/*     }*/
/* */
/*     h1 a,h2 a,h3 a,h4 a,h5 a,h6 a {*/
/*       color: {{styles.links}};*/
/*     }*/
/* */
/*     h1 a:active,h2 a:active,h3 a:active,h4 a:active,h5 a:active,h6 a:active {*/
/*       color: red;*/
/*     }*/
/* */
/*     h1 a:visited,h2 a:visited,h3 a:visited,h4 a:visited,h5 a:visited,h6 a:visited {*/
/*       color: purple;*/
/*     }*/
/* */
/*     table td,*/
/*     table th {*/
/*       border-collapse: collapse;*/
/*     }*/
/* */
/*     table {*/
/*       border-collapse: collapse;*/
/*       mso-table-lspace: 0pt;*/
/*       mso-table-rspace: 0pt;*/
/*     }*/
/* */
/*     address {*/
/*       margin: 0px;*/
/*     }*/
/* */
/*     .content-wrapper {*/
/*       border: 1px solid {{ styles.base    }}*/
/*     }*/
/* */
/*     .copyright td{*/
/*       padding: 10px 0 0 !important;*/
/*     }*/
/* */
/*     a {*/
/*       color: {{styles.links}};*/
/*     }*/
/*  </style>*/
/* </head>*/
/* */
/* <body>*/
/*    <style>*/
/*       @media only screen and (max-device-width: 480px){*/
/*         .content-wrapper{width: 100% !important;border: 3px solid #ccc !important; }*/
/* */
/*         table[width]{*/
/*           width: 100%! important;*/
/*         }*/
/* */
/*         .message-header > td,*/
/*         .message-title > td,*/
/*         .message-body > td,*/
/*         .message-footer > td,*/
/*         .message-copyright > td {*/
/*           padding: 10px !important;*/
/*         }*/
/* */
/*         .message-header td,*/
/*         .message-title td,*/
/*         .message-body th, .message-body td,*/
/*         .message-footer th, .message-footer td,*/
/*         .message-copyright th, .message-copyright td {*/
/*           font-size: 16px !important;*/
/*         }*/
/*      }*/
/* */
/*       @media only screen and (min-device-width: 768px) and (max-device-width: 1024px) {}*/
/* */
/*       @media only screen and (-webkit-min-device-pixel-ratio: 2) {}*/
/* */
/*       @media only screen and (-webkit-device-pixel-ratio:.75) {}*/
/* */
/*       @media only screen and (-webkit-device-pixel-ratio:1) {}*/
/* */
/*       @media only screen and (-webkit-device-pixel-ratio:1.5) {}*/
/*     </style>*/
/*   <!-- Targeting Windows Mobile -->*/
/*  <!--[if IEMobile 7]>*/
/*   <style type="text/css">*/
/* */
/*   </style>*/
/*   <![endif]-->*/
/* */
/*   <!--[if gte mso 9]>*/
/*    <style>*/
/*        /* Target Outlook 2007 and 2010 *//* */
/*     </style>*/
/*   <![endif]-->*/
/*   <table class="main-wrapper" cellpadding="0" cellspacing="0" width="100%" bgcolor="{{ styles.base }}" style="    background-color: {{ styles.base }}">*/
/*     <tr>*/
/*       <td style="padding: 40px 10px 40px 10px;">*/
/*         <table class="content-wrapper" cellpadding="0" cellspacing="0" align="center" width="600" style="background-color:#fff;" >*/
/*           <tr class="message-header">*/
/*             <td>*/
/*               <table cellpadding="0" cellspacing="0" width="100%">*/
/*                 <tr>*/
/*                   <td><a href="{{ company_data.company_website }}"><img src="{{logos.mail.image.image_path}}" alt="{{ company_data.company_name }}" /></a></td>*/
/*                 </tr>*/
/*               </table>*/
/*             </td>*/
/*           </tr>*/
/*           {% if title %}*/
/*           <tr class="message-header__title">*/
/*             <td>*/
/*               <h1>{{title}}</h1>*/
/*             </td>*/
/*           </tr>*/
/*           {% endif %}*/
/* */
/*           <tr class="message-body">*/
/* */
/* <td>*/
