<?php

/* themes/bootstrap/templates/system/page.html.twig */
class __TwigTemplate_b4dc9352cffb2ec7d6ab95902673e423b4afc8e5de39477bd30d2c72ec08934f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'navbar' => array($this, 'block_navbar'),
            'custom' => array($this, 'block_custom'),
            'main' => array($this, 'block_main'),
            'header' => array($this, 'block_header'),
            'sidebar_first' => array($this, 'block_sidebar_first'),
            'highlighted' => array($this, 'block_highlighted'),
            'help' => array($this, 'block_help'),
            'content' => array($this, 'block_content'),
            'sidebar_second' => array($this, 'block_sidebar_second'),
            'footer' => array($this, 'block_footer'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $tags = array("set" => 55, "if" => 58, "block" => 59);
        $filters = array("clean_class" => 63, "t" => 87);
        $functions = array();

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array('set', 'if', 'block'),
                array('clean_class', 't'),
                array()
            );
        } catch (Twig_Sandbox_SecurityError $e) {
            $e->setSourceContext($this->getSourceContext());

            if ($e instanceof Twig_Sandbox_SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof Twig_Sandbox_SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof Twig_Sandbox_SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

        // line 55
        $context["container"] = (($this->getAttribute($this->getAttribute(($context["theme"] ?? null), "settings", array()), "fluid_container", array())) ? ("container-fluid") : ("container"));
        // line 56
        echo "
";
        // line 58
        if (($this->getAttribute(($context["page"] ?? null), "navigation", array()) || $this->getAttribute(($context["page"] ?? null), "navigation_collapsible", array()))) {
            // line 59
            echo "  ";
            $this->displayBlock('navbar', $context, $blocks);
        }
        // line 107
        echo "
";
        // line 109
        $this->displayBlock('main', $context, $blocks);
        // line 176
        echo "
";
        // line 177
        if ($this->getAttribute(($context["page"] ?? null), "footer", array())) {
            // line 178
            echo "  ";
            $this->displayBlock('footer', $context, $blocks);
        }
    }

    // line 59
    public function block_navbar($context, array $blocks = array())
    {
        // line 60
        echo "    ";
        // line 61
        $context["navbar_classes"] = array(0 => "navbar", 1 => (($this->getAttribute($this->getAttribute(        // line 63
($context["theme"] ?? null), "settings", array()), "navbar_position", array())) ? (("navbar-" . \Drupal\Component\Utility\Html::getClass($this->getAttribute($this->getAttribute(($context["theme"] ?? null), "settings", array()), "navbar_position", array())))) : (($context["container"] ?? null))));
        // line 66
        echo "    <header class=\"container\" id=\"navbar\" class=\"col-sm-12\" role=\"banner\">


      ";
        // line 70
        echo "      ";
        if ($this->getAttribute(($context["page"] ?? null), "custom", array())) {
            // line 71
            echo "        ";
            $this->displayBlock('custom', $context, $blocks);
            // line 76
            echo "      ";
        }
        // line 77
        echo "
      ";
        // line 78
        if ( !$this->getAttribute(($context["navbar_attributes"] ?? null), "hasClass", array(0 => ($context["container"] ?? null)), "method")) {
            // line 79
            echo "        <div class=\"";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["container"] ?? null), "html", null, true));
            echo "\">
      ";
        }
        // line 81
        echo "
      <div class=\"navbar-header col-lg-9\">
        ";
        // line 83
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "navigation", array()), "html", null, true));
        echo "
        ";
        // line 85
        echo "        ";
        if ($this->getAttribute(($context["page"] ?? null), "navigation_collapsible", array())) {
            // line 86
            echo "          <button type=\"button\" class=\"navbar-toggle fa fa-bars\" data-toggle=\"collapse\" data-target=\"#navbar-collapse\">
            <span class=\"sr-only\">";
            // line 87
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Toggle navigation")));
            echo "</span>
            <span class=\"icon-bar\"></span>
            <span class=\"icon-bar\"></span>
            <span class=\"icon-bar\"></span>
          </button>
        ";
        }
        // line 93
        echo "      </div>

      ";
        // line 96
        echo "      ";
        if ($this->getAttribute(($context["page"] ?? null), "navigation_collapsible", array())) {
            // line 97
            echo "        <div id=\"navbar-collapse\" class=\"navbar-collapse collapse col-sm-12 col-lg-9\">
          ";
            // line 98
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "navigation_collapsible", array()), "html", null, true));
            echo "
        </div>
      ";
        }
        // line 101
        echo "      ";
        if ( !$this->getAttribute(($context["navbar_attributes"] ?? null), "hasClass", array(0 => ($context["container"] ?? null)), "method")) {
            // line 102
            echo "        </div>
      ";
        }
        // line 104
        echo "    </header>
  ";
    }

    // line 71
    public function block_custom($context, array $blocks = array())
    {
        // line 72
        echo "          <div class=\"col-sm-12 col-lg-3\">
            ";
        // line 73
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "custom", array()), "html", null, true));
        echo "
          </div>
        ";
    }

    // line 109
    public function block_main($context, array $blocks = array())
    {
        // line 110
        echo "  <div role=\"main\" class=\"main-container ";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["container"] ?? null), "html", null, true));
        echo " js-quickedit-main-content\">
    <div class=\"row\">

      ";
        // line 114
        echo "      ";
        if ($this->getAttribute(($context["page"] ?? null), "header", array())) {
            // line 115
            echo "        ";
            $this->displayBlock('header', $context, $blocks);
            // line 120
            echo "      ";
        }
        // line 121
        echo "
      ";
        // line 123
        echo "      ";
        if ($this->getAttribute(($context["page"] ?? null), "sidebar_first", array())) {
            // line 124
            echo "        ";
            $this->displayBlock('sidebar_first', $context, $blocks);
            // line 129
            echo "      ";
        }
        // line 130
        echo "
      ";
        // line 132
        echo "      ";
        // line 133
        $context["content_classes"] = array(0 => ((($this->getAttribute(        // line 134
($context["page"] ?? null), "sidebar_first", array()) && $this->getAttribute(($context["page"] ?? null), "sidebar_second", array()))) ? ("col-sm-6") : ("")), 1 => ((($this->getAttribute(        // line 135
($context["page"] ?? null), "sidebar_first", array()) && twig_test_empty($this->getAttribute(($context["page"] ?? null), "sidebar_second", array())))) ? ("col-sm-9") : ("")), 2 => ((($this->getAttribute(        // line 136
($context["page"] ?? null), "sidebar_second", array()) && twig_test_empty($this->getAttribute(($context["page"] ?? null), "sidebar_first", array())))) ? ("col-sm-9") : ("")), 3 => (((twig_test_empty($this->getAttribute(        // line 137
($context["page"] ?? null), "sidebar_first", array())) && twig_test_empty($this->getAttribute(($context["page"] ?? null), "sidebar_second", array())))) ? ("col-sm-12") : ("")));
        // line 140
        echo "      <section";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["content_attributes"] ?? null), "addClass", array(0 => ($context["content_classes"] ?? null)), "method"), "html", null, true));
        echo ">

        ";
        // line 143
        echo "        ";
        if ($this->getAttribute(($context["page"] ?? null), "highlighted", array())) {
            // line 144
            echo "          ";
            $this->displayBlock('highlighted', $context, $blocks);
            // line 147
            echo "        ";
        }
        // line 148
        echo "
        ";
        // line 150
        echo "        ";
        if ($this->getAttribute(($context["page"] ?? null), "help", array())) {
            // line 151
            echo "          ";
            $this->displayBlock('help', $context, $blocks);
            // line 154
            echo "        ";
        }
        // line 155
        echo "      </section>

      <section>
        ";
        // line 159
        echo "        ";
        $this->displayBlock('content', $context, $blocks);
        // line 163
        echo "      </section>

      ";
        // line 166
        echo "      ";
        if ($this->getAttribute(($context["page"] ?? null), "sidebar_second", array())) {
            // line 167
            echo "        ";
            $this->displayBlock('sidebar_second', $context, $blocks);
            // line 172
            echo "      ";
        }
        // line 173
        echo "    </div>
  </div>
";
    }

    // line 115
    public function block_header($context, array $blocks = array())
    {
        // line 116
        echo "          <div class=\"col-sm-12\" role=\"heading\">
            ";
        // line 117
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "header", array()), "html", null, true));
        echo "
          </div>
        ";
    }

    // line 124
    public function block_sidebar_first($context, array $blocks = array())
    {
        // line 125
        echo "          <aside class=\"col-sm-3\" role=\"complementary\">
            ";
        // line 126
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "sidebar_first", array()), "html", null, true));
        echo "
          </aside>
        ";
    }

    // line 144
    public function block_highlighted($context, array $blocks = array())
    {
        // line 145
        echo "            <div class=\"highlighted\">";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "highlighted", array()), "html", null, true));
        echo "</div>
          ";
    }

    // line 151
    public function block_help($context, array $blocks = array())
    {
        // line 152
        echo "            ";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "help", array()), "html", null, true));
        echo "
          ";
    }

    // line 159
    public function block_content($context, array $blocks = array())
    {
        // line 160
        echo "          <a id=\"main-content\"></a>
          ";
        // line 161
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "content", array()), "html", null, true));
        echo "
        ";
    }

    // line 167
    public function block_sidebar_second($context, array $blocks = array())
    {
        // line 168
        echo "          <aside class=\"col-sm-3\" role=\"complementary\">
            ";
        // line 169
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "sidebar_second", array()), "html", null, true));
        echo "
          </aside>
        ";
    }

    // line 178
    public function block_footer($context, array $blocks = array())
    {
        // line 179
        echo "  <div class=\"footer\">
    <footer class=\"footer ";
        // line 180
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["container"] ?? null), "html", null, true));
        echo "\" role=\"contentinfo\">
      ";
        // line 181
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "footer", array()), "html", null, true));
        echo "
    </footer>
  </div>
  ";
    }

    public function getTemplateName()
    {
        return "themes/bootstrap/templates/system/page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  354 => 181,  350 => 180,  347 => 179,  344 => 178,  337 => 169,  334 => 168,  331 => 167,  325 => 161,  322 => 160,  319 => 159,  312 => 152,  309 => 151,  302 => 145,  299 => 144,  292 => 126,  289 => 125,  286 => 124,  279 => 117,  276 => 116,  273 => 115,  267 => 173,  264 => 172,  261 => 167,  258 => 166,  254 => 163,  251 => 159,  246 => 155,  243 => 154,  240 => 151,  237 => 150,  234 => 148,  231 => 147,  228 => 144,  225 => 143,  219 => 140,  217 => 137,  216 => 136,  215 => 135,  214 => 134,  213 => 133,  211 => 132,  208 => 130,  205 => 129,  202 => 124,  199 => 123,  196 => 121,  193 => 120,  190 => 115,  187 => 114,  180 => 110,  177 => 109,  170 => 73,  167 => 72,  164 => 71,  159 => 104,  155 => 102,  152 => 101,  146 => 98,  143 => 97,  140 => 96,  136 => 93,  127 => 87,  124 => 86,  121 => 85,  117 => 83,  113 => 81,  107 => 79,  105 => 78,  102 => 77,  99 => 76,  96 => 71,  93 => 70,  88 => 66,  86 => 63,  85 => 61,  83 => 60,  80 => 59,  74 => 178,  72 => 177,  69 => 176,  67 => 109,  64 => 107,  60 => 59,  58 => 58,  55 => 56,  53 => 55,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "themes/bootstrap/templates/system/page.html.twig", "/Applications/MAMP/htdocs/lori-drupal-8.4.3/themes/bootstrap/templates/system/page.html.twig");
    }
}
