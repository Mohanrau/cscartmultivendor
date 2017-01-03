<?php

/* __string_template__1118d7439f36897bbabf2aeeece367e21db1b8b236cdac85cf975af9342f098c */
class __TwigTemplate_66ec891f3a212e983d55eca401cdb89610dbb4e5daee3eedc450895d9d5fbe3e extends Twig_Template
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
        echo "</td>

</tr>

<tr class=\"message-footer\">
  <td>
    <table class=\"info\" width=\"250\" align=\"left\">
      <tr>
        <th class=\"footer-contact__title\">
          ";
        // line 10
        echo $this->env->getExtension('tygh.core')->translateFunction($this->env, $context, "contact_information");
        echo "
        </th>
      </tr>
      <tr>
        <td>
          <address>";
        // line 15
        echo $this->getAttribute((isset($context["company_data"]) ? $context["company_data"] : null), "company_address", array());
        echo ", ";
        echo $this->getAttribute((isset($context["company_data"]) ? $context["company_data"] : null), "company_city", array());
        echo "</address>
        </td>
      </tr>
    </table>

    <table class=\"info\" width=\"250\" align=\"left\">
      <tr>
        <th class=\"footer-social__title\">
          ";
        // line 23
        echo $this->env->getExtension('tygh.core')->translateFunction($this->env, $context, "get_social");
        echo "
        </th>
      </tr>
      <tr>
        <td class=\"footer-social\">
          <a href=\"http://www.facebook.com\"><img width=\"30\" height=\"30\" src=\"design/themes/responsive/mail/media/images/social/facebook.png\"></a>
          <a href=\"https://twitter.com\"><img width=\"30\" height=\"30\" src=\"design/themes/responsive/mail/media/images/social/twitter.png\"></a>
        </td>
      </tr>
    </table>
  </td>
</tr>
";
        // line 35
        if ($this->getAttribute((isset($context["company_data"]) ? $context["company_data"] : null), "company_name", array())) {
            // line 36
            echo "<tr class=\"message-copyright\">
  <td>
  <table class=\"copyright\" width=\"100%\">
    <tr>
      <td>
        &copy;&nbsp;";
            // line 41
            echo $this->getAttribute((isset($context["company_data"]) ? $context["company_data"] : null), "company_name", array());
            echo "
      </td>
      <td align=\"right\">
        ";
            // line 44
            echo $this->env->getExtension('tygh.core')->translateFunction($this->env, $context, "customer_text_letter_footer");
            echo "
      </td>
    </tr>
  </table>
  </td>
</tr>
";
        }
        // line 51
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
        return "__string_template__1118d7439f36897bbabf2aeeece367e21db1b8b236cdac85cf975af9342f098c";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  91 => 51,  81 => 44,  75 => 41,  68 => 36,  66 => 35,  51 => 23,  38 => 15,  30 => 10,  19 => 1,);
    }
}
/* </td>*/
/* */
/* </tr>*/
/* */
/* <tr class="message-footer">*/
/*   <td>*/
/*     <table class="info" width="250" align="left">*/
/*       <tr>*/
/*         <th class="footer-contact__title">*/
/*           {{ __("contact_information") }}*/
/*         </th>*/
/*       </tr>*/
/*       <tr>*/
/*         <td>*/
/*           <address>{{ company_data.company_address }}, {{ company_data.company_city }}</address>*/
/*         </td>*/
/*       </tr>*/
/*     </table>*/
/* */
/*     <table class="info" width="250" align="left">*/
/*       <tr>*/
/*         <th class="footer-social__title">*/
/*           {{ __("get_social") }}*/
/*         </th>*/
/*       </tr>*/
/*       <tr>*/
/*         <td class="footer-social">*/
/*           <a href="http://www.facebook.com"><img width="30" height="30" src="design/themes/responsive/mail/media/images/social/facebook.png"></a>*/
/*           <a href="https://twitter.com"><img width="30" height="30" src="design/themes/responsive/mail/media/images/social/twitter.png"></a>*/
/*         </td>*/
/*       </tr>*/
/*     </table>*/
/*   </td>*/
/* </tr>*/
/* {% if company_data.company_name %}*/
/* <tr class="message-copyright">*/
/*   <td>*/
/*   <table class="copyright" width="100%">*/
/*     <tr>*/
/*       <td>*/
/*         &copy;&nbsp;{{ company_data.company_name }}*/
/*       </td>*/
/*       <td align="right">*/
/*         {{ __("customer_text_letter_footer") }}*/
/*       </td>*/
/*     </tr>*/
/*   </table>*/
/*   </td>*/
/* </tr>*/
/* {% endif %}*/
/* </table>*/
/* <!-- content-wrapper -->*/
/* </td>*/
/* </tr>*/
/* </table>*/
/* <!-- main-wrapper -->*/
/* </body>*/
/* </html>*/
