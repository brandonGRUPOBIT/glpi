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

/* components/itilobject/mainform_open.html.twig */
class __TwigTemplate_55049dd6c396caf226d8c89acbc8123a853144a15b6e3497f877fe72d37a5b20 extends Template
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
";
        // line 34
        $context["enctype"] = ((twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "isNewItem", [], "method", false, false, false, 34)) ? ("multipart/form-data") : ("application/x-www-form-urlencoded"));
        // line 35
        $context["new_cls"] = ((twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "isNewItem", [], "method", false, false, false, 35)) ? ("new-itil-object") : (""));
        // line 36
        echo "
";
        // line 37
        $context["form_path"] = twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "getFormURL", [], "method", false, false, false, 37);
        // line 38
        if ( !twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "isNewItem", [], "any", false, false, false, 38)) {
            // line 39
            echo "   ";
            $context["form_path"] = ((($context["form_path"] ?? null) . "?id=") . (($__internal_compile_0 = twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 39)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0["id"] ?? null) : null));
        }
        // line 41
        echo "
";
        // line 42
        if (($context["selfservice"] ?? null)) {
            // line 43
            echo "   ";
            $context["form_path"] = $this->extensions['Glpi\Application\View\Extension\RoutingExtension']->path("front/tracking.injector.php");
        }
        // line 45
        echo "
";
        // line 46
        $context["track_changes"] = "true";
        // line 47
        if (twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "isNewItem", [], "any", false, false, false, 47)) {
            // line 48
            echo "   ";
            $context["track_changes"] = "false";
        }
        // line 50
        echo "
<form method=\"POST\" action=\"";
        // line 51
        echo twig_escape_filter($this->env, ($context["form_path"] ?? null), "html", null, true);
        echo "\" enctype=\"";
        echo twig_escape_filter($this->env, ($context["enctype"] ?? null), "html", null, true);
        echo "\"
      data-track-changes=\"";
        // line 52
        echo twig_escape_filter($this->env, ($context["track_changes"] ?? null), "html", null, true);
        echo "\" id=\"itil-form\" class=\"";
        echo twig_escape_filter($this->env, ($context["new_cls"] ?? null), "html", null, true);
        echo "\" data-submit-once>
   <input type=\"hidden\" name=\"id\" value=\"";
        // line 53
        (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, true, false, 53), "id", [], "array", true, true, false, 53) &&  !(null === (($__internal_compile_1 = twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, true, false, 53)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1["id"] ?? null) : null)))) ? (print (twig_escape_filter($this->env, (($__internal_compile_2 = twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, true, false, 53)) && is_array($__internal_compile_2) || $__internal_compile_2 instanceof ArrayAccess ? ($__internal_compile_2["id"] ?? null) : null), "html", null, true))) : (print (0)));
        echo "\" />
   <input type=\"hidden\" name=\"_glpi_csrf_token\" value=\"";
        // line 54
        echo twig_escape_filter($this->env, Session::getNewCSRFToken(), "html", null, true);
        echo "\" />
   <input type=\"hidden\" name=\"_skip_default_actor\" value=\"1\" />

   ";
        // line 57
        if (array_key_exists("itiltemplate_key", $context)) {
            // line 58
            echo "      <input type=\"hidden\" name=\"";
            echo twig_escape_filter($this->env, ($context["itiltemplate_key"] ?? null), "html", null, true);
            echo "\" value=\"";
            echo twig_escape_filter($this->env, (($__internal_compile_3 = twig_get_attribute($this->env, $this->source, ($context["itiltemplate"] ?? null), "fields", [], "any", false, false, false, 58)) && is_array($__internal_compile_3) || $__internal_compile_3 instanceof ArrayAccess ? ($__internal_compile_3["id"] ?? null) : null), "html", null, true);
            echo "\" />
   ";
        }
        // line 60
        echo "   ";
        if (array_key_exists("predefined_fields", $context)) {
            // line 61
            echo "      <input type=\"hidden\" name=\"_predefined_fields\" value=\"";
            echo twig_escape_filter($this->env, ($context["predefined_fields"] ?? null), "html", null, true);
            echo "\" />
   ";
        }
        // line 63
        echo "
   ";
        // line 64
        if (($context["selfservice"] ?? null)) {
            // line 65
            echo "      <input type=\"hidden\" name=\"_from_helpdesk\" value=\"1\" />
      ";
            // line 67
            echo "   ";
        }
        // line 68
        echo "
   ";
        // line 69
        if ((twig_get_attribute($this->env, $this->source, ($context["params"] ?? null), "tickets_id", [], "array", true, true, false, 69) || twig_get_attribute($this->env, $this->source, ($context["params"] ?? null), "_tickets_id", [], "array", true, true, false, 69))) {
            // line 70
            echo "      <input type=\"hidden\" name=\"_tickets_id\" value=\"";
            echo twig_escape_filter($this->env, (((twig_get_attribute($this->env, $this->source, ($context["params"] ?? null), "tickets_id", [], "array", true, true, false, 70) &&  !(null === (($__internal_compile_4 = ($context["params"] ?? null)) && is_array($__internal_compile_4) || $__internal_compile_4 instanceof ArrayAccess ? ($__internal_compile_4["tickets_id"] ?? null) : null)))) ? ((($__internal_compile_5 = ($context["params"] ?? null)) && is_array($__internal_compile_5) || $__internal_compile_5 instanceof ArrayAccess ? ($__internal_compile_5["tickets_id"] ?? null) : null)) : ((($__internal_compile_6 = ($context["params"] ?? null)) && is_array($__internal_compile_6) || $__internal_compile_6 instanceof ArrayAccess ? ($__internal_compile_6["_tickets_id"] ?? null) : null))), "html", null, true);
            echo "\" />
   ";
        }
        // line 72
        echo "
   ";
        // line 73
        if ((twig_get_attribute($this->env, $this->source, ($context["params"] ?? null), "problems_id", [], "array", true, true, false, 73) || twig_get_attribute($this->env, $this->source, ($context["params"] ?? null), "_problems_id", [], "array", true, true, false, 73))) {
            // line 74
            echo "      <input type=\"hidden\" name=\"_problems_id\" value=\"";
            echo twig_escape_filter($this->env, (((twig_get_attribute($this->env, $this->source, ($context["params"] ?? null), "problems_id", [], "array", true, true, false, 74) &&  !(null === (($__internal_compile_7 = ($context["params"] ?? null)) && is_array($__internal_compile_7) || $__internal_compile_7 instanceof ArrayAccess ? ($__internal_compile_7["problems_id"] ?? null) : null)))) ? ((($__internal_compile_8 = ($context["params"] ?? null)) && is_array($__internal_compile_8) || $__internal_compile_8 instanceof ArrayAccess ? ($__internal_compile_8["problems_id"] ?? null) : null)) : ((($__internal_compile_9 = ($context["params"] ?? null)) && is_array($__internal_compile_9) || $__internal_compile_9 instanceof ArrayAccess ? ($__internal_compile_9["_problems_id"] ?? null) : null))), "html", null, true);
            echo "\" />
   ";
        }
        // line 76
        echo "
   ";
        // line 77
        if (twig_get_attribute($this->env, $this->source, ($context["params"] ?? null), "_add_fromitem", [], "array", true, true, false, 77)) {
            // line 78
            echo "      <input type=\"hidden\" name=\"_from_items_id\" value=\"";
            (((twig_get_attribute($this->env, $this->source, ($context["params"] ?? null), "_from_items_id", [], "array", true, true, false, 78) &&  !(null === (($__internal_compile_10 = ($context["params"] ?? null)) && is_array($__internal_compile_10) || $__internal_compile_10 instanceof ArrayAccess ? ($__internal_compile_10["_from_items_id"] ?? null) : null)))) ? (print (twig_escape_filter($this->env, (($__internal_compile_11 = ($context["params"] ?? null)) && is_array($__internal_compile_11) || $__internal_compile_11 instanceof ArrayAccess ? ($__internal_compile_11["_from_items_id"] ?? null) : null), "html", null, true))) : (print (0)));
            echo "\" />
      <input type=\"hidden\" name=\"_from_itemtype\" value=\"";
            // line 79
            (((twig_get_attribute($this->env, $this->source, ($context["params"] ?? null), "_from_itemtype", [], "array", true, true, false, 79) &&  !(null === (($__internal_compile_12 = ($context["params"] ?? null)) && is_array($__internal_compile_12) || $__internal_compile_12 instanceof ArrayAccess ? ($__internal_compile_12["_from_itemtype"] ?? null) : null)))) ? (print (twig_escape_filter($this->env, (($__internal_compile_13 = ($context["params"] ?? null)) && is_array($__internal_compile_13) || $__internal_compile_13 instanceof ArrayAccess ? ($__internal_compile_13["_from_itemtype"] ?? null) : null), "html", null, true))) : (print ("")));
            echo "\" />
   ";
        }
        // line 81
        echo "
   ";
        // line 82
        if ((twig_get_attribute($this->env, $this->source, ($context["params"] ?? null), "_promoted_fup_id", [], "array", true, true, false, 82) && (1 === twig_compare((($__internal_compile_14 = ($context["params"] ?? null)) && is_array($__internal_compile_14) || $__internal_compile_14 instanceof ArrayAccess ? ($__internal_compile_14["_promoted_fup_id"] ?? null) : null), 0)))) {
            // line 83
            echo "      <input type=\"hidden\" name=\"_promoted_fup_id\" value=\"";
            echo twig_escape_filter($this->env, (($__internal_compile_15 = ($context["params"] ?? null)) && is_array($__internal_compile_15) || $__internal_compile_15 instanceof ArrayAccess ? ($__internal_compile_15["_promoted_fup_id"] ?? null) : null), "html", null, true);
            echo "\" />
   ";
        }
        // line 85
        echo "   ";
        if ((twig_get_attribute($this->env, $this->source, ($context["params"] ?? null), "_promoted_task_id", [], "array", true, true, false, 85) && (1 === twig_compare((($__internal_compile_16 = ($context["params"] ?? null)) && is_array($__internal_compile_16) || $__internal_compile_16 instanceof ArrayAccess ? ($__internal_compile_16["_promoted_task_id"] ?? null) : null), 0)))) {
            // line 86
            echo "      <input type=\"hidden\" name=\"_promoted_task_id\" value=\"";
            echo twig_escape_filter($this->env, (($__internal_compile_17 = ($context["params"] ?? null)) && is_array($__internal_compile_17) || $__internal_compile_17 instanceof ArrayAccess ? ($__internal_compile_17["_promoted_task_id"] ?? null) : null), "html", null, true);
            echo "\" />
   ";
        }
        // line 88
        echo "   ";
        if ((twig_get_attribute($this->env, $this->source, ($context["params"] ?? null), "_skip_promoted_fields", [], "array", true, true, false, 88) && (1 === twig_compare((($__internal_compile_18 = ($context["params"] ?? null)) && is_array($__internal_compile_18) || $__internal_compile_18 instanceof ArrayAccess ? ($__internal_compile_18["_skip_promoted_fields"] ?? null) : null), 0)))) {
            // line 89
            echo "      <input type=\"hidden\" name=\"_skip_promoted_fields\" value=\"";
            echo twig_escape_filter($this->env, (($__internal_compile_19 = ($context["params"] ?? null)) && is_array($__internal_compile_19) || $__internal_compile_19 instanceof ArrayAccess ? ($__internal_compile_19["_skip_promoted_fields"] ?? null) : null), "html", null, true);
            echo "\" />
   ";
        }
        // line 91
        echo "
   ";
        // line 93
        echo "   ";
        if ((twig_get_attribute($this->env, $this->source, ($context["params"] ?? null), "_projecttasks_id", [], "array", true, true, false, 93) && (1 === twig_compare((($__internal_compile_20 = ($context["params"] ?? null)) && is_array($__internal_compile_20) || $__internal_compile_20 instanceof ArrayAccess ? ($__internal_compile_20["_projecttasks_id"] ?? null) : null), 0)))) {
            // line 94
            echo "      <input type=\"hidden\" name=\"_projecttasks_id\" value=\"";
            echo twig_escape_filter($this->env, (($__internal_compile_21 = ($context["params"] ?? null)) && is_array($__internal_compile_21) || $__internal_compile_21 instanceof ArrayAccess ? ($__internal_compile_21["_projecttasks_id"] ?? null) : null), "html", null, true);
            echo "\" />
   ";
        }
        // line 96
        echo "
   ";
        // line 97
        if ((twig_get_attribute($this->env, $this->source, ($context["params"] ?? null), "_tasktemplates_id", [], "array", true, true, false, 97) && (1 === twig_compare(twig_length_filter($this->env, (($__internal_compile_22 = ($context["params"] ?? null)) && is_array($__internal_compile_22) || $__internal_compile_22 instanceof ArrayAccess ? ($__internal_compile_22["_tasktemplates_id"] ?? null) : null)), 0)))) {
            // line 98
            echo "      ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((($__internal_compile_23 = ($context["params"] ?? null)) && is_array($__internal_compile_23) || $__internal_compile_23 instanceof ArrayAccess ? ($__internal_compile_23["_tasktemplates_id"] ?? null) : null));
            foreach ($context['_seq'] as $context["_key"] => $context["tasktemplate_id"]) {
                // line 99
                echo "         <input type=\"hidden\" name=\"_tasktemplates_id[]\" value=\"";
                echo twig_escape_filter($this->env, $context["tasktemplate_id"], "html", null, true);
                echo "\" />
      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tasktemplate_id'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 101
            echo "   ";
        }
        // line 102
        echo "
   ";
        // line 103
        if ((twig_get_attribute($this->env, $this->source, ($context["params"] ?? null), "_hidden_fields", [], "array", true, true, false, 103) && (1 === twig_compare(twig_length_filter($this->env, (($__internal_compile_24 = ($context["params"] ?? null)) && is_array($__internal_compile_24) || $__internal_compile_24 instanceof ArrayAccess ? ($__internal_compile_24["_hidden_fields"] ?? null) : null)), 0)))) {
            // line 104
            echo "      ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((($__internal_compile_25 = ($context["params"] ?? null)) && is_array($__internal_compile_25) || $__internal_compile_25 instanceof ArrayAccess ? ($__internal_compile_25["_hidden_fields"] ?? null) : null));
            foreach ($context['_seq'] as $context["field_name"] => $context["field_value"]) {
                // line 105
                echo "         <input type=\"hidden\" name=\"";
                echo twig_escape_filter($this->env, $context["field_name"], "html", null, true);
                echo "\" value=\"";
                echo twig_escape_filter($this->env, $context["field_value"], "html", null, true);
                echo "\" />
      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['field_name'], $context['field_value'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 107
            echo "   ";
        }
    }

    public function getTemplateName()
    {
        return "components/itilobject/mainform_open.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  251 => 107,  240 => 105,  235 => 104,  233 => 103,  230 => 102,  227 => 101,  218 => 99,  213 => 98,  211 => 97,  208 => 96,  202 => 94,  199 => 93,  196 => 91,  190 => 89,  187 => 88,  181 => 86,  178 => 85,  172 => 83,  170 => 82,  167 => 81,  162 => 79,  157 => 78,  155 => 77,  152 => 76,  146 => 74,  144 => 73,  141 => 72,  135 => 70,  133 => 69,  130 => 68,  127 => 67,  124 => 65,  122 => 64,  119 => 63,  113 => 61,  110 => 60,  102 => 58,  100 => 57,  94 => 54,  90 => 53,  84 => 52,  78 => 51,  75 => 50,  71 => 48,  69 => 47,  67 => 46,  64 => 45,  60 => 43,  58 => 42,  55 => 41,  51 => 39,  49 => 38,  47 => 37,  44 => 36,  42 => 35,  40 => 34,  37 => 33,);
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

{% set enctype = item.isNewItem() ? 'multipart/form-data' : 'application/x-www-form-urlencoded' %}
{% set new_cls = item.isNewItem() ? 'new-itil-object' : '' %}

{% set form_path = item.getFormURL() %}
{% if not item.isNewItem %}
   {% set form_path = form_path ~ '?id=' ~ item.fields['id'] %}
{% endif %}

{% if selfservice %}
   {% set form_path = path('front/tracking.injector.php') %}
{% endif %}

{% set track_changes = 'true' %}
{% if item.isNewItem %}
   {% set track_changes = 'false' %}
{% endif %}

<form method=\"POST\" action=\"{{ form_path }}\" enctype=\"{{ enctype }}\"
      data-track-changes=\"{{ track_changes }}\" id=\"itil-form\" class=\"{{ new_cls }}\" data-submit-once>
   <input type=\"hidden\" name=\"id\" value=\"{{ item.fields['id'] ?? 0 }}\" />
   <input type=\"hidden\" name=\"_glpi_csrf_token\" value=\"{{ csrf_token() }}\" />
   <input type=\"hidden\" name=\"_skip_default_actor\" value=\"1\" />

   {% if itiltemplate_key is defined %}
      <input type=\"hidden\" name=\"{{ itiltemplate_key }}\" value=\"{{ itiltemplate.fields['id'] }}\" />
   {% endif %}
   {% if predefined_fields is defined %}
      <input type=\"hidden\" name=\"_predefined_fields\" value=\"{{ predefined_fields }}\" />
   {% endif %}

   {% if selfservice %}
      <input type=\"hidden\" name=\"_from_helpdesk\" value=\"1\" />
      {# TODO default requesttype #}
   {% endif %}

   {% if params['tickets_id'] is defined or params['_tickets_id'] is defined %}
      <input type=\"hidden\" name=\"_tickets_id\" value=\"{{ params['tickets_id'] ?? params['_tickets_id'] }}\" />
   {% endif %}

   {% if params['problems_id'] is defined or params['_problems_id'] is defined %}
      <input type=\"hidden\" name=\"_problems_id\" value=\"{{ params['problems_id'] ?? params['_problems_id'] }}\" />
   {% endif %}

   {% if params['_add_fromitem'] is defined %}
      <input type=\"hidden\" name=\"_from_items_id\" value=\"{{ params['_from_items_id'] ?? 0 }}\" />
      <input type=\"hidden\" name=\"_from_itemtype\" value=\"{{ params['_from_itemtype'] ?? '' }}\" />
   {% endif %}

   {% if params['_promoted_fup_id'] is defined and params['_promoted_fup_id'] > 0 %}
      <input type=\"hidden\" name=\"_promoted_fup_id\" value=\"{{ params['_promoted_fup_id'] }}\" />
   {% endif %}
   {% if params['_promoted_task_id'] is defined and params['_promoted_task_id'] > 0 %}
      <input type=\"hidden\" name=\"_promoted_task_id\" value=\"{{ params['_promoted_task_id'] }}\" />
   {% endif %}
   {% if params['_skip_promoted_fields'] is defined and params['_skip_promoted_fields'] > 0 %}
      <input type=\"hidden\" name=\"_skip_promoted_fields\" value=\"{{ params['_skip_promoted_fields'] }}\" />
   {% endif %}

   {# Ticket specific: created from project task, need to keep track of task id #}
   {% if params['_projecttasks_id'] is defined and params['_projecttasks_id'] > 0 %}
      <input type=\"hidden\" name=\"_projecttasks_id\" value=\"{{ params['_projecttasks_id'] }}\" />
   {% endif %}

   {% if params['_tasktemplates_id'] is defined and params['_tasktemplates_id']|length > 0 %}
      {% for tasktemplate_id in params['_tasktemplates_id'] %}
         <input type=\"hidden\" name=\"_tasktemplates_id[]\" value=\"{{ tasktemplate_id }}\" />
      {% endfor %}
   {% endif %}

   {% if params['_hidden_fields'] is defined and params['_hidden_fields']|length > 0 %}
      {% for field_name, field_value in params['_hidden_fields'] %}
         <input type=\"hidden\" name=\"{{ field_name }}\" value=\"{{ field_value }}\" />
      {% endfor %}
   {% endif %}
", "components/itilobject/mainform_open.html.twig", "C:\\inetpub\\wwwroot\\GLPI\\templates\\components\\itilobject\\mainform_open.html.twig");
    }
}
