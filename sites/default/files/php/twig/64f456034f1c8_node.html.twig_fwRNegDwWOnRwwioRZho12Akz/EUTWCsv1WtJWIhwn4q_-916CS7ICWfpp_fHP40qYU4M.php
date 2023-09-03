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

/* themes/custom/publication_theme/templates/content/node.html.twig */
class __TwigTemplate_582ffa49b41278eaa542cc7766b094cee1cccd281e384fb6ed7e9dc6cb3b5d2b extends \Twig\Template
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
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 71
        $context["classes"] = [0 => "node", 1 => ("node--type-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source,         // line 73
($context["node"] ?? null), "bundle", [], "any", false, false, true, 73), 73, $this->source))), 2 => ((twig_get_attribute($this->env, $this->source,         // line 74
($context["node"] ?? null), "isPromoted", [], "method", false, false, true, 74)) ? ("node--promoted") : ("")), 3 => ((twig_get_attribute($this->env, $this->source,         // line 75
($context["node"] ?? null), "isSticky", [], "method", false, false, true, 75)) ? ("node--sticky") : ("")), 4 => (( !twig_get_attribute($this->env, $this->source,         // line 76
($context["node"] ?? null), "isPublished", [], "method", false, false, true, 76)) ? ("node--unpublished") : ("")), 5 => ((        // line 77
($context["view_mode"] ?? null)) ? (("node--view-mode-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(($context["view_mode"] ?? null), 77, $this->source)))) : (""))];
        // line 80
        echo "
<article";
        // line 81
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [0 => ($context["classes"] ?? null)], "method", false, false, true, 81), 81, $this->source), "html", null, true);
        echo ">

  ";
        // line 100
        echo "
  <div";
        // line 101
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content_attributes"] ?? null), "addClass", [0 => "node__content"], "method", false, false, true, 101), 101, $this->source), "html", null, true);
        echo ">
    ";
        // line 103
        echo "    ";
        // line 104
        echo "    ";
        // line 105
        echo "    ";
        // line 106
        echo "
  ";
        // line 108
        echo "  ";
        // line 109
        echo "  ";
        // line 110
        echo "
";
        // line 114
        echo "    ";
        $context["category"] = [];
        // line 115
        echo "    ";
        $context["cat"] = [];
        // line 116
        echo "
     ";
        // line 117
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["content"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["cat"]) {
            // line 118
            echo "      ";
            $context["category"] = (($__internal_compile_0 = twig_get_attribute($this->env, $this->source, $context["cat"], "field_tags", [], "any", false, false, true, 118)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0["#title"] ?? null) : null);
            // line 119
            echo "     ";
            // line 122
            echo "      ";
            // line 123
            echo "      
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['cat'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 125
        echo "  ";
        // line 127
        echo "
  ";
        // line 128
        $context["array"] = [];
        // line 129
        echo "  ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_tags", [], "any", false, false, true, 129));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 130
            echo "    ";
            if ((($__internal_compile_1 = $context["item"]) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1["#title"] ?? null) : null)) {
                // line 131
                echo "      ";
                $context["array"] = twig_array_merge($this->sandbox->ensureToStringAllowed(($context["array"] ?? null), 131, $this->source), [0 => ["url" => twig_get_attribute($this->env, $this->source, (($__internal_compile_2 = $context["item"]) && is_array($__internal_compile_2) || $__internal_compile_2 instanceof ArrayAccess ? ($__internal_compile_2["#url"] ?? null) : null), "toString", [], "any", false, false, true, 131), "title" => (($__internal_compile_3 = $context["item"]) && is_array($__internal_compile_3) || $__internal_compile_3 instanceof ArrayAccess ? ($__internal_compile_3["#title"] ?? null) : null)]]);
                // line 132
                echo "    ";
            }
            // line 133
            echo "  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 134
        echo "
 ";
        // line 138
        echo "       ";
        // line 142
        echo "
";
        // line 143
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\twig_vardumper\TwigExtension']->drupalDump($this->env, $context, [0 => $this->sandbox->ensureToStringAllowed(($context["array"] ?? null), 143, $this->source)]));
        echo "
    ";
        // line 145
        echo "  ";
        // line 146
        echo "    ";
        // line 147
        echo "    ";
        $this->loadTemplate("@molecules/card/card.twig", "themes/custom/publication_theme/templates/content/node.html.twig", 147)->display(twig_array_merge($context, ["label" =>         // line 148
($context["label"] ?? null), "heading_link" =>         // line 149
($context["url"] ?? null), "content" =>         // line 150
($context["content"] ?? null)]));
        // line 152
        echo "          ";
        // line 154
        echo "  </div>

</article>
";
    }

    public function getTemplateName()
    {
        return "themes/custom/publication_theme/templates/content/node.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  155 => 154,  153 => 152,  151 => 150,  150 => 149,  149 => 148,  147 => 147,  145 => 146,  143 => 145,  139 => 143,  136 => 142,  134 => 138,  131 => 134,  125 => 133,  122 => 132,  119 => 131,  116 => 130,  111 => 129,  109 => 128,  106 => 127,  104 => 125,  97 => 123,  95 => 122,  93 => 119,  90 => 118,  86 => 117,  83 => 116,  80 => 115,  77 => 114,  74 => 110,  72 => 109,  70 => 108,  67 => 106,  65 => 105,  63 => 104,  61 => 103,  57 => 101,  54 => 100,  49 => 81,  46 => 80,  44 => 77,  43 => 76,  42 => 75,  41 => 74,  40 => 73,  39 => 71,);
    }

    public function getSourceContext()
    {
        return new Source("{#
/**
 * @file
 * Theme override to display a node.
 *
 * Available variables:
 * - node: The node entity with limited access to object properties and methods.
 *   Only method names starting with \"get\", \"has\", or \"is\" and a few common
 *   methods such as \"id\", \"label\", and \"bundle\" are available. For example:
 *   - node.getCreatedTime() will return the node creation timestamp.
 *   - node.hasField('field_example') returns TRUE if the node bundle includes
 *     field_example. (This does not indicate the presence of a value in this
 *     field.)
 *   - node.isPublished() will return whether the node is published or not.
 *   Calling other methods, such as node.delete(), will result in an exception.
 *   See \\Drupal\\node\\Entity\\Node for a full list of public properties and
 *   methods for the node object.
 * - label: (optional) The title of the node.
 * - content: All node items. Use {{ content }} to print them all,
 *   or print a subset such as {{ content.field_example }}. Use
 *   {{ content|without('field_example') }} to temporarily suppress the printing
 *   of a given child element.
 * - author_picture: The node author user entity, rendered using the \"compact\"
 *   view mode.
 * - metadata: Metadata for this node.
 * - date: (optional) Themed creation date field.
 * - author_name: (optional) Themed author name field.
 * - url: Direct URL of the current node.
 * - display_submitted: Whether submission information should be displayed.
 * - attributes: HTML attributes for the containing element.
 *   The attributes.class element may contain one or more of the following
 *   classes:
 *   - node: The current template type (also known as a \"theming hook\").
 *   - node--type-[type]: The current node type. For example, if the node is an
 *     \"Article\" it would result in \"node--type-article\". Note that the machine
 *     name will often be in a short form of the human readable label.
 *   - node--view-mode-[view_mode]: The View Mode of the node; for example, a
 *     teaser would result in: \"node--view-mode-teaser\", and
 *     full: \"node--view-mode-full\".
 *   The following are controlled through the node publishing options.
 *   - node--promoted: Appears on nodes promoted to the front page.
 *   - node--sticky: Appears on nodes ordered above other non-sticky nodes in
 *     teaser listings.
 *   - node--unpublished: Appears on unpublished nodes visible only to site
 *     admins.
 * - title_attributes: Same as attributes, except applied to the main title
 *   tag that appears in the template.
 * - content_attributes: Same as attributes, except applied to the main
 *   content tag that appears in the template.
 * - author_attributes: Same as attributes, except applied to the author of
 *   the node tag that appears in the template.
 * - title_prefix: Additional output populated by modules, intended to be
 *   displayed in front of the main title tag that appears in the template.
 * - title_suffix: Additional output populated by modules, intended to be
 *   displayed after the main title tag that appears in the template.
 * - view_mode: View mode; for example, \"teaser\" or \"full\".
 * - teaser: Flag for the teaser state. Will be true if view_mode is 'teaser'.
 * - page: Flag for the full page state. Will be true if view_mode is 'full'.
 * - readmore: Flag for more state. Will be true if the teaser content of the
 *   node cannot hold the main body content.
 * - logged_in: Flag for authenticated user status. Will be true when the
 *   current user is a logged-in member.
 * - is_admin: Flag for admin user status. Will be true when the current user
 *   is an administrator.
 *
 * @see template_preprocess_node()
 *
 */
#}
{%
  set classes = [
    'node',
    'node--type-' ~ node.bundle|clean_class,
    node.isPromoted() ? 'node--promoted',
    node.isSticky() ? 'node--sticky',
    not node.isPublished() ? 'node--unpublished',
    view_mode ? 'node--view-mode-' ~ view_mode|clean_class,
  ]
%}

<article{{ attributes.addClass(classes) }}>

  {# {{ title_prefix }}
  {% if label and not page %}
    <h1{{ title_attributes }}>
      <a href=\"{{ url }}\" rel=\"bookmark\">{{ label }}</a>
    </h1>
  {% endif %}
  {{ title_suffix }} #}
{# 
  {% if display_submitted %}
    <footer class=\"node__meta\">
      {{ author_picture }}
      <div{{ author_attributes.addClass('node__submitted') }}>
        {% trans %}Submitted by {{ author_name }} on {{ date }}{% endtrans %}
        {{ metadata }}
      </div>
    </footer>
  {% endif %} #}

  <div{{ content_attributes.addClass('node__content') }}>
    {# {{ label }} #}
    {# {{ content }} #}
    {# {{ vardumper( content ) }} #}
    {# {{ content.field_published_date }} #}

  {# {{ path('entity.taxonomy_term.canonical', {'taxonomy_term': node.field_tags.entity.tid.value}) }} #}
  {# {{ node.entity.field_tags }} #}
  {# {{ vardumper( node.entity.field_tags) }} #}

{# 
 {{ content.field_tags.0['#title'] }}
      {{ content.field_tags.0['#url'] }}   #}
    {% set category = [] %}
    {% set cat = [] %}

     {% for cat in content %}
      {% set category = cat.field_tags['#title'] %}
     {# content.field_tags[0]['#title']
      {{ content.news.0['#title'] }}
      {{ content.news.0['#url'] }}   #}
      {# {{ vardumper( cat.field_tags ) }} #}
      
    {% endfor %}
  {# {{ content.field_tags[0]['#title']|clean_class }} 
  {{ content.field_tags[1]['#title']|clean_class }} #}

  {% set array = [] %}
  {% for item in content.field_tags %}
    {% if item['#title'] %}
      {% set array = array|merge([{ url: item['#url'].toString, title: item['#title'] }]) %}
    {% endif %}
  {% endfor %}

 {# {% for item in content.field_tags %}
    {% if item['#title'] %}
      {# <a href=\"{{ item['#url']}}\" class=\"link-item\">{{ item['#title']  }}</a> #}
       {#} {% set cat['url'] = item['#url'] %}
        {% set cat['title'] = item['#title'] %}  
    {% endif %}
  {% endfor %} #}

{{ vardumper( array ) }}
    {# {{ content.field_tags[]['title'] }} #}
  {# {{ content.field_publication_image }} #}
    {# {{ vardumper(category) }} #}
    {% include \"@molecules/card/card.twig\" with {
      label: label,
      heading_link: url,
      content: content
    } %}
          {# card__body: content.body,
      language: content.field_tags #}
  </div>

</article>
", "themes/custom/publication_theme/templates/content/node.html.twig", "C:\\xampp\\htdocs\\drupal\\themes\\custom\\publication_theme\\templates\\content\\node.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 71, "for" => 117, "if" => 130, "include" => 147);
        static $filters = array("clean_class" => 73, "escape" => 81, "merge" => 131);
        static $functions = array("vardumper" => 143);

        try {
            $this->sandbox->checkSecurity(
                ['set', 'for', 'if', 'include'],
                ['clean_class', 'escape', 'merge'],
                ['vardumper']
            );
        } catch (SecurityError $e) {
            $e->setSourceContext($this->source);

            if ($e instanceof SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

    }
}
