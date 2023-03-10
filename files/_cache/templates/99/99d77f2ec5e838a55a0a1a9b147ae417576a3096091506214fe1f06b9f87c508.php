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

/* components/masonry_grid.html.twig */
class __TwigTemplate_724face7095860fc0659d6910f0af977737e95963eeda46a55b40030f8d3bef5 extends Template
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
        if ( !array_key_exists("grid_item_class", $context)) {
            // line 35
            echo "   ";
            $context["grid_item_class"] = "col-xl-6 col-xxl-4";
        }
        // line 37
        echo "
";
        // line 38
        $context["rand"] = twig_random($this->env);
        // line 39
        echo "<div id=\"grid_";
        echo twig_escape_filter($this->env, ($context["rand"] ?? null), "html", null, true);
        echo "\" class=\"masonry_grid row row-cards mb-5\">
   ";
        // line 40
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["grid_items"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 41
            echo "      ";
            if ( !twig_test_empty($context["item"])) {
                // line 42
                echo "         <div class=\"grid-item ";
                echo twig_escape_filter($this->env, ($context["grid_item_class"] ?? null), "html", null, true);
                echo "\">
            ";
                // line 43
                echo $context["item"];
                echo "
         </div>
      ";
            }
            // line 46
            echo "   ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 47
        echo "</div>

<script type=\"text/javascript\">
\$(function() {
   window.msnry = new Masonry('#grid_";
        // line 51
        echo twig_escape_filter($this->env, ($context["rand"] ?? null), "html", null, true);
        echo "', {
      \"percentPosition\": true,
      \"horizontalOrder\": true,
   });

   \$('#grid_";
        // line 56
        echo twig_escape_filter($this->env, ($context["rand"] ?? null), "html", null, true);
        echo "').on(\"layout:refresh\", function() {
       window.msnry.layout();
   });

   \$(document).on('masonry_grid:layout', function() {
       window.msnry.layout();
   })
});
</script>
";
    }

    public function getTemplateName()
    {
        return "components/masonry_grid.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 56,  86 => 51,  80 => 47,  74 => 46,  68 => 43,  63 => 42,  60 => 41,  56 => 40,  51 => 39,  49 => 38,  46 => 37,  42 => 35,  40 => 34,  37 => 33,);
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

{% if grid_item_class is not defined %}
   {% set grid_item_class = 'col-xl-6 col-xxl-4' %}
{% endif %}

{% set rand = random() %}
<div id=\"grid_{{ rand }}\" class=\"masonry_grid row row-cards mb-5\">
   {% for item in grid_items %}
      {% if item is not empty %}
         <div class=\"grid-item {{ grid_item_class }}\">
            {{ item|raw }}
         </div>
      {% endif %}
   {% endfor %}
</div>

<script type=\"text/javascript\">
\$(function() {
   window.msnry = new Masonry('#grid_{{ rand }}', {
      \"percentPosition\": true,
      \"horizontalOrder\": true,
   });

   \$('#grid_{{ rand }}').on(\"layout:refresh\", function() {
       window.msnry.layout();
   });

   \$(document).on('masonry_grid:layout', function() {
       window.msnry.layout();
   })
});
</script>
", "components/masonry_grid.html.twig", "C:\\inetpub\\wwwroot\\GLPI\\templates\\components\\masonry_grid.html.twig");
    }
}
