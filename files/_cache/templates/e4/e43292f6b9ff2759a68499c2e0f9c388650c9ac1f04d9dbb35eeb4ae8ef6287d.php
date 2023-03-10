<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* components/itilobject/timeline/timeline_item_header_badges.html.twig */
class __TwigTemplate_eda29ce23abb634af7dbfc787cb450c4e5766db35e9ac2f7555139d6ebb840f5 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 33
        echo "
<span class=\"badge text-wrap d-none d-md-block\">
   ";
        // line 35
        ob_start();
        // line 36
        echo "      <span title=\"";
        echo twig_escape_filter($this->env, $this->extensions['Glpi\Application\View\Extension\DataHelpersExtension']->getFormattedDatetime(($context["date_creation"] ?? null)), "html", null, true);
        echo "\"
            data-bs-toggle=\"tooltip\" data-bs-placement=\"bottom\">
         <i class=\"far fa-clock me-1\"></i>
         <a href=\"#";
        // line 39
        echo twig_escape_filter($this->env, ($context["anchor"] ?? null), "html", null, true);
        echo "\">
            ";
        // line 40
        echo twig_escape_filter($this->env, $this->extensions['Glpi\Application\View\Extension\DataHelpersExtension']->getRelativeDatetime(($context["date_creation"] ?? null)), "html", null, true);
        echo "
         </a>
      </span>
   ";
        $context["date_span"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 44
        echo "
   ";
        // line 45
        if ((1 === twig_compare(($context["users_id"] ?? null), 0))) {
            // line 46
            echo "      ";
            ob_start();
            // line 47
            echo "         ";
            echo twig_include($this->env, $context, "components/user/link_with_tooltip.html.twig", ["users_id" =>             // line 48
($context["users_id"] ?? null), "enable_anonymization" =>             // line 49
($context["anonym_user"] ?? null)], false);
            // line 50
            echo "
      ";
            $context["creator_span"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 52
            echo "
      ";
            // line 53
            echo twig_sprintf(__("Created: %1\$s by %2\$s"), ($context["date_span"] ?? null), ($context["creator_span"] ?? null));
            echo "
   ";
        } else {
            // line 55
            echo "      ";
            echo twig_sprintf(__("Created: %1\$s"), ($context["date_span"] ?? null));
            echo "
   ";
        }
        // line 57
        echo "</span>

";
        // line 59
        if (((1 === twig_compare(($context["users_id_editor"] ?? null), 0)) && (0 !== twig_compare(($context["date_creation"] ?? null), ($context["date_mod"] ?? null))))) {
            // line 60
            echo "   <span class=\"badge text-wrap ms-1 d-none d-md-block\">
      ";
            // line 61
            ob_start();
            // line 62
            echo "         <span title=\"";
            echo twig_escape_filter($this->env, $this->extensions['Glpi\Application\View\Extension\DataHelpersExtension']->getFormattedDatetime(($context["date_mod"] ?? null)), "html", null, true);
            echo "\"
               data-bs-toggle=\"tooltip\" data-bs-placement=\"bottom\">
            <i class=\"far fa-clock me-1\"></i>";
            // line 64
            echo twig_escape_filter($this->env, $this->extensions['Glpi\Application\View\Extension\DataHelpersExtension']->getRelativeDatetime(($context["date_mod"] ?? null)), "html", null, true);
            echo "
         </span>
      ";
            $context["date_span"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 67
            echo "
      ";
            // line 68
            $context["is_current_editor"] = (0 === twig_compare(($context["users_id_editor"] ?? null), $this->extensions['Glpi\Application\View\Extension\SessionExtension']->session("glpiID")));
            // line 69
            echo "      ";
            $context["anonym_editor"] = (((0 === twig_compare($this->extensions['Glpi\Application\View\Extension\SessionExtension']->getCurrentInterface(), "helpdesk")) &&  !($context["is_current_editor"] ?? null)) && (0 !== twig_compare($this->extensions['Glpi\Application\View\Extension\ConfigExtension']->getEntityConfig("anonymize_support_agents", $this->extensions['Glpi\Application\View\Extension\SessionExtension']->session("glpiactive_entity")), twig_constant("Entity::ANONYMIZE_DISABLED"))));
            // line 70
            echo "      ";
            ob_start();
            // line 71
            echo "         ";
            echo twig_include($this->env, $context, "components/user/link_with_tooltip.html.twig", ["users_id" =>             // line 72
($context["users_id_editor"] ?? null), "enable_anonymization" =>             // line 73
($context["anonym_editor"] ?? null)], false);
            // line 74
            echo "
      ";
            $context["editor_span"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 76
            echo "
      ";
            // line 77
            echo twig_sprintf(__("Last update: %1\$s by %2\$s"), ($context["date_span"] ?? null), ($context["editor_span"] ?? null));
            echo "
   </span>
";
        }
    }

    public function getTemplateName()
    {
        return "components/itilobject/timeline/timeline_item_header_badges.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 77,  135 => 76,  131 => 74,  129 => 73,  128 => 72,  126 => 71,  123 => 70,  120 => 69,  118 => 68,  115 => 67,  109 => 64,  103 => 62,  101 => 61,  98 => 60,  96 => 59,  92 => 57,  86 => 55,  81 => 53,  78 => 52,  74 => 50,  72 => 49,  71 => 48,  69 => 47,  66 => 46,  64 => 45,  61 => 44,  54 => 40,  50 => 39,  43 => 36,  41 => 35,  37 => 33,);
    }

    public function getSourceContext()
    {
        return new Source("{#
 # ---------------------------------------------------------------------
 #
 # GLPI - Gestionnaire Libre de Parc Informatique
 #
 # http://glpi-project.org
 #
 # @copyright 2015-2022 Teclib' and contributors.
 # @copyright 2003-2014 by the INDEPNET Development Team.
 # @licence   https://www.gnu.org/licenses/gpl-3.0.html
 #
 # ---------------------------------------------------------------------
 #
 # LICENSE
 #
 # This file is part of GLPI.
 #
 # This program is free software: you can redistribute it and/or modify
 # it under the terms of the GNU General Public License as published by
 # the Free Software Foundation, either version 3 of the License, or
 # (at your option) any later version.
 #
 # This program is distributed in the hope that it will be useful,
 # but WITHOUT ANY WARRANTY; without even the implied warranty of
 # MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 # GNU General Public License for more details.
 #
 # You should have received a copy of the GNU General Public License
 # along with this program.  If not, see <https://www.gnu.org/licenses/>.
 #
 # ---------------------------------------------------------------------
 #}

<span class=\"badge text-wrap d-none d-md-block\">
   {% set date_span %}
      <span title=\"{{ date_creation|formatted_datetime }}\"
            data-bs-toggle=\"tooltip\" data-bs-placement=\"bottom\">
         <i class=\"far fa-clock me-1\"></i>
         <a href=\"#{{ anchor }}\">
            {{ date_creation|relative_datetime }}
         </a>
      </span>
   {% endset %}

   {% if users_id > 0 %}
      {% set creator_span %}
         {{ include('components/user/link_with_tooltip.html.twig', {
            'users_id': users_id,
            'enable_anonymization': anonym_user
         }, with_context = false) }}
      {% endset %}

      {{ __('Created: %1\$s by %2\$s')|format(date_span, creator_span)|raw }}
   {% else %}
      {{ __('Created: %1\$s')|format(date_span)|raw }}
   {% endif %}
</span>

{% if users_id_editor > 0 and date_creation != date_mod %}
   <span class=\"badge text-wrap ms-1 d-none d-md-block\">
      {% set date_span %}
         <span title=\"{{ date_mod|formatted_datetime }}\"
               data-bs-toggle=\"tooltip\" data-bs-placement=\"bottom\">
            <i class=\"far fa-clock me-1\"></i>{{ date_mod|relative_datetime }}
         </span>
      {% endset %}

      {% set is_current_editor = (users_id_editor == session('glpiID')) %}
      {% set anonym_editor = (get_current_interface() == 'helpdesk' and not is_current_editor and entity_config('anonymize_support_agents', session('glpiactive_entity')) != constant('Entity::ANONYMIZE_DISABLED')) %}
      {% set editor_span %}
         {{ include('components/user/link_with_tooltip.html.twig', {
            'users_id': users_id_editor,
            'enable_anonymization': anonym_editor
         }, with_context = false) }}
      {% endset %}

      {{ __('Last update: %1\$s by %2\$s')|format(date_span, editor_span)|raw }}
   </span>
{% endif %}
", "components/itilobject/timeline/timeline_item_header_badges.html.twig", "C:\\inetpub\\wwwroot\\GLPI\\templates\\components\\itilobject\\timeline\\timeline_item_header_badges.html.twig");
    }
}
